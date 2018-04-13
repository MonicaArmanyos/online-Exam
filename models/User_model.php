<?php

class User_model {
    private static $username,$email,$password,$isAdmin;
    public static $request;
    private static $queryBuilder;
    private function __construct() {
        
        self::$queryBuilder=new mysqliQueryBuilder;
    }
    private function __clone() {
    }
    public static function getInstance($request)
    {
        static $user=FALSE;
        self::$request=$request;
        if($user !== FALSE)
            return $user;
        $user= new User_model();
        return $user;
    }
    static function getUsername() {
        return self::$username;
    }

    static function getEmail() {
        return self::$email;
    }

    static function getPassword() {
        return self::$password;
    }

    static function getIsAdmin() {
        $result=self::$queryBuilder->select("user",array("admin"),"id=".self::$request->session('id'));
        $row=$result['data'];
        self::setIsAdmin($row[0]['admin']);
        return $row[0]['admin'];
    }

    static function setUsername($username) {
        self::$username = $username;
    }

    static function setEmail($email) {
        if(self::$queryBuilder->select("user",array("email"),"email='$email'")!== NULL)
                return FALSE;
            else {
                self::$email=$email;
                return TRUE;
            }
    }

    static function setPassword($password) {
        self::$password =  password_hash($password,PASSWORD_DEFAULT);
    }

    static function setIsAdmin($isAdmin) {
        self::$isAdmin = $isAdmin;
    }

    public static function addUser(){
        $record=array("email"=> self::$request->session('email'),"username"=> self::$request->session('uname'),"PASSWORD"=> self::$request->session('password'));
        return self::$queryBuilder->insert("user", $record);   
    }
    
    public static function validate(){
        if(self::setEmail(self::$request->post('email')))
        {
            $pass1=(string) self::$request->post('password');
            $pass2=(string) self::$request->post('repassword');
            if($pass1 === $pass2){
                self::setUsername(self::$request->post('uname'));
                self::setPassword($pass1);
            return NULL;
        }
            else
                {
            return "Passwords are mismatched!";
                }
        }
        else
        {
            return "This email address is already taken! Please choose another one.";
        }
    }
    public static function updatePassword()
    {
        self::setPassword(self::$request->post('password'));
        $set=array("PASSWORD"=> self::getPassword());
        return self::$queryBuilder->update("user",$set,"`email`=".'"'.self::$request->session('email').'"');
    }

    public static function isUser()
    {
        //$output=[];
        $pass= self::$request->post('password');
        $name=self::$request->post('uname');
        $result=self::$queryBuilder->select("user",array("id","PASSWORD"),"username='$name'");
        if($result !== NULL)
        {
            //username is found then verify password
            //$result=self::$queryBuilder->select("user",array("PASSWORD"),"username='$name'");
            foreach ($result['data'] as $key=>$val)
            {
               if(password_verify($pass,$val['PASSWORD']))
               {
                   self::$request->session('uname', self::$request->post('uname'));
                   self::$request->session('id',$val['id']);
                   return TRUE;
               }
            }
                return FALSE;
        }
        else {
                return FALSE;
            }
    }
}
