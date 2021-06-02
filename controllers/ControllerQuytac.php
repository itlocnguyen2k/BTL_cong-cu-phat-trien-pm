<?php 
	//inlude file model vao day
	include "models/ModelQuytac.php";
	class ControllerQuytac extends Controller{
		//ke thua class model
		use ModelQuytac;
		public function index(){
			
			$data = $this->modelRead();
			//goi view, truyen du lieu ra view
			$this->loadView("ViewQuytac.php",array("data"=>$data));
		}
	}
 ?>