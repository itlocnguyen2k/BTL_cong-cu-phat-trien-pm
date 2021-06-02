<?php 
	//inlude file model vao day
	include "models/ModelDkymember.php";
	class ControllerDkymember extends Controller{
		//ke thua class model
		use ModelDkymember;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			
			$action = "index.php?controller=dkymember&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("ViewDkymember.php",array("action"=>$action));
		}
		
		public function createPost(){
			//goi ham modelCreate de create ban ghi
			$this->modelCreate();
			//quay tro lai trang orders
			header("location:index.php?controller=dkyxong");
		}
		
	}
 ?>