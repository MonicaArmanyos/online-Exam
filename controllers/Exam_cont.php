<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Exam_cont
 *
 * @author monica
 */
class Exam_cont extends Controller {
   public function  add()
   {
       if(User_model::$request->session('uname')== NULL)
       {
           $userCont=new User_cont($this->request);
           $userCont->login();
       }
       else{

       echo $this->load_view('../views/newTest.php');}
   }
   public function insertion()
   {
       if(User_model::$request->session('uname')== NULL)
       {
           $userCont=new User_cont($this->request);
           $userCont->login();
       }else{
       $exam=new Exam_model();
       if($exam->insert_Exam())
       {
           echo $this->load_view('../views/newTest.php',TRUE);
       }
 else {
           echo $this->load_view('../views/newTest.php',FALSE);
       }
       }
       
   }
   public function edit()
   {
       if(User_model::$request->session('uname')== NULL)
       {
           $userCont=new User_cont($this->request);
           $userCont->login();
       }
   }
   public function delete()
   {
 if(User_model::$request->session('uname')== NULL)
       {
           $userCont=new User_cont($this->request);
           $userCont->login();
       }  
   }
}
