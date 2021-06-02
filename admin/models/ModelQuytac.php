<?php 
	trait ModelQuytac{
		//lay ve danh sach cac ban ghi
		public function modelRead(){
			//lay bien page truyen tu url
			
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from quytac ");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//--- 
		}
		
		public function modelGetRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from quytac");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$noidung = $_POST["noidung"];
			
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update quytac set noidung=:var_noidung");
			$query->execute(array("var_noidung"=>$noidung));	
			//---
				
		}
		public function modelCreate(){
			
			$noidung = $_POST["noidung"];
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert quytac set noidung=:var_noidung");
			$query->execute(array("var_noidung"=>$noidung));
			//---
		}
		
	}
 ?>