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
		public function update(){
			//lay mot ban ghi
			$record = $this->modelGetRecord();
			$action = "index.php?controller=quytac&action=updatePost";
			//goi view, truyen du lieu ra view
			$this->loadView("ViewFormQuytac.php",array("record"=>$record,"action"=>$action));
		}
		public function updatePost(){
			
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate();
			//quay tro lai trang quytac
			header("location:index.php?controller=quytac");
		}
		public function create(){
			//tao bien $action de biet duoc khi an nut submit se dan den dau
			$action = "index.php?controller=quytac&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("ViewFormQuytac.php",array("action"=>$action));
		}
		public function createPost(){
			//goi ham modelCreate de create ban ghi
			$this->modelCreate();
			//quay tro lai trang quytac
			header("location:index.php?controller=quytac");
		}
		
	}
 ?>