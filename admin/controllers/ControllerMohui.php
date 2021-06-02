<?php 
	//inlude file model vao day
	include "models/ModelMohui.php";
	class ControllerMohui extends Controller{
		//ke thua class model
		use ModelMohui;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 4;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("ViewMohui.php",array("data"=>$data,"numPage"=>$numPage));
		}
		
		public function create(){
			//tao bien $action de biet duoc khi an nut submit se dan den dau
			$action = "index.php?controller=mohui&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("ViewFormMohui.php",array("action"=>$action));
		}
		public function createPost(){
			//goi ham modelCreate de create ban ghi
			$this->modelCreate();
			//quay tro lai trang mohui
			header("location:index.php?controller=mohui");
		}
		
	}
 ?>