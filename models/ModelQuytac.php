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
	}
 ?>