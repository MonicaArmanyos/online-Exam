<?php
class Controller {
		protected $request;
		
		public function __construct($request){
			$this->request = $request;
		}
		

		public function load_view($view, $data =''){	
			if(is_file($view)){
                            	
				ob_start();
				include($view);
				$output = ob_get_clean();
				return $output;
			}
		
			return '';
		}
               
	}