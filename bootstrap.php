<?php

        require_once('../config/dbconfiguration.php');
        require_once ('../classes/Request.php');
        require_once ('../classes/Controller.php');
        require_once ('../database/mysqliQueryBuilder.php');
spl_autoload_register(function($class_name){
    $dir='';
    if(preg_match('/cont$/i', $class_name))
    {
       $dir='../controllers';
    }
    elseif (preg_match('/model$/i', $class_name)) {
        $dir='../models';
    }
    elseif (preg_match('/view$/i', $class_name)) {
        $dir='../views';
}
    elseif(preg_match('/^Mailer$/i', $class_name))
    {
        $dir='../classes';
    }
    $include = "{$dir}/{$class_name}.php";
    if(is_file($include)){
	include($include); 
    }
	
	});

function route(){
                $request=new Request();
    		// get controller and action
		$controller = $request->uri(0);
		$action = $request->uri(1);
//                echo "controler:$controller<br/>";
//                echo "Action:$action";
                
		if(!class_exists($controller) || !is_callable([$controller, $action])){
			$controller = 'BadRequest';
			$action = 'not_found';
		}

		$c = new $controller($request);
		call_user_func_array([$c, $action], []);
}

