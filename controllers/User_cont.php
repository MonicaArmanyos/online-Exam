<?php


/**
 * Description of User_cont
 *
 * @author monica
 */
class User_cont extends Controller {
    public function register(){
        echo $this->load_view('../views/register_view.php');	
    }
    public function add(){
       $user= User_model::getInstance($this->request);
       $user::addUser();
        echo $this->load_view('../views/login_view.php',TRUE);
    }
    public function login()
    {
        echo $this->load_view('../views/login_view.php');
    }
    public function sendMail()
    {
        $user= User_model::getInstance($this->request);
        if($user::validate() == NULL){
        $msg="Thank you for registering with us\nTo activate your account, follow this link:\nhttp://testonline.com/?cont=User_cont/add";
        $mail=new Mailer($this->request->post('email'),"Account Activation",$msg,'');
        $mail->send();
        $this->request->session('uname',$user::getUsername());
        $this->request->session('email',$user::getEmail());
        $this->request->session('password',$user::getPassword());
        echo $this->load_view('../views/register_complete_view.php',$this->request->post('email'));
        }
        else
        {
            $warn=$user::validate();
            echo $this->load_view('../views/register_view.php',$warn);
        }
    }
    public function validateLogin()
    {
        $user= User_model::getInstance($this->request);
        if($user::isUser())
        {
           $admin=$user::getIsAdmin();
           $this->request->session('isAdmin',$admin);
           if($admin == 1){
           echo $this->load_view('../views/admin_home_view.php');
           }
        else {
            echo $this->load_view('../views/user_home_view.php');
        }
        }
        else
        {
            echo $this->load_view('../views/login_view.php',"Incorrect username or password!");
        }
    }
    public  function password_reset()
    {
        $user= User_model::getInstance($this->request);
        if($user::setEmail($this->request->post('email')))
        {
            echo $this->load_view('../views/reset_password_view.php',"There is no account with that email!");
        }
        else
        {
            $msg="Click on the link below to reset your password\nhttp://testonline.com/?cont=User_cont/newPassword";
            $mail=new Mailer($this->request->post('email'),"Reset Password",$msg,'');
            $mail->send();
            $this->request->session('email',$this->request->post('email'));
            echo $this->load_view('../views/reset_confirm_view.php',$this->request->post('email'));
        }
        
    }
        public  function forget_password()
    {
        echo $this->load_view('../views/reset_password_view.php');
    }
    public function reset_password()
    {
       $user= User_model::getInstance($this->request);
       $user::updatePassword();
       echo $this->load_view('../views/login_view.php');
    }
    public function newPassword()
    {
       echo $this->load_view('../views/actual_reset_view.php'); 
    }
}
