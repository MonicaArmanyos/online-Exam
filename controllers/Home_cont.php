<?php

class Home_cont extends Controller{
    public function index(){
       echo $this->load_view('../views/home_view.php');	
		}
    
}

