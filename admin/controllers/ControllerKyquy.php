<?php 
	include "models/ModelKyquy.php";
	class ControllerKyquy extends Controller{
		use ModelKyquy;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$listRecord = $this->modelRead($recordPerPage);
			//load view
			$this->loadView("ViewKyquy.php",["listRecord"=>$listRecord,"numPage"=>$numPage]);
		}	
		//xac nhan da giao hang
		public function create(){
			//tao bien $action de biet duoc khi an nut submit se dan den dau
			$action = "index.php?controller=kyquy&action=createPost";
			//goi view, truyen du lieu ra view
			$this->loadView("ViewFormKyquy.php",array("action"=>$action));
		}
		public function createPost(){
			//goi ham modelCreate de create ban ghi
			$this->modelCreate();
			//quay tro lai trang kyquy
			header("location:index.php?controller=kyquy");
		}
		public function update(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay mot ban ghi
			$record = $this->modelGetRecord($id);
			//tao bien $action de biet duoc khi an nut submit se dan den dau
			$action = "index.php?controller=kyquy&action=updatePost&id=$id";
			//goi view, truyen du lieu ra view
			$this->loadView("ViewFormKyquy.php",array("record"=>$record,"action"=>$action));
		}
		public function updatePost(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelUpdate();
			//quay tro lai trang kyquy
			header("location:index.php?controller=kyquy");
		}
		public function delete(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//goi ham modelUpdate de update ban ghi
			$this->modelDelete();
			//quay tro lai trang kyquy
			header("location:index.php?controller=kyquy");
		}
	}
 ?>