<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Exam_model
 *
 * @author monica
 */
class Exam_model {
    private $questions=[];
    private $answers=[];
    private $size=10,$i;
    private $request;
    private static $queryBuilder;
    public function __construct($request) {
       
        $this->request= $request;
        self::$queryBuilder= new mysqliQueryBuilder();
    }
    public static function number_of_exams()
    {
        if(self::$queryBuilder == NULL)
        {
            self::$queryBuilder= new mysqliQueryBuilder();
        }
        $result=self::$queryBuilder->select("exam",array("Max(id)"));
        if($result == NULL)
            return 0;
        else{
          $row=$result['data'];
        
        $last_id=$row[0]['Max(id)'];
        }
      
        return $last_id;
    }
    public function insert_Exam()
    {
        $success=false;
        $r1=array("id"=> self::number_of_exams()+1);
        self::$queryBuilder->insert("exam", $r1); 
        for($i=1;$i<=10;$i++)
        {
          $rec=array("q"=> $this->request->post("q$i"),"a"=> $this->request->post("a$i"),"b"=> $this->request->post("b$i"),"c"=> $this->request->post("c$i"),"d"=> $this->request->post("d$i"),"Ans"=> $this->request->post("A$i"),"Exam"=>self::number_of_exams()+1);
           $success=self::$queryBuilder->insert("question", $rec);    
        }
        return $success;

    }
}
