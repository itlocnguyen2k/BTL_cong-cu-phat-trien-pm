<?php 
	trait ModelOrders{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//--- 
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from orders");
			//tra ve so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from orders where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			$banghi=$this->modelGetRecord();
			$hoten = $banghi->hoten;
			$cmt = $banghi->cmt;
			$gioitinh = $banghi->gioitinh;
			$sdt = $banghi->sdt;
			$diachi = $banghi->diachi;
			
			$photo = $banghi->photo;
			
			//---	
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert products set hoten=:var_hoten, cmt=:var_cmt, sdt=:var_sdt, diachi=:var_diachi, gioitinh=:var_gioitinh, photo=:var_photo");
			$query->execute(array("var_hoten"=>$hoten,"var_cmt"=>$cmt,"var_sdt"=>$sdt,"var_diachi"=>$diachi,"var_gioitinh"=>$gioitinh,"var_photo"=>$photo));
			//---	
			$conn->query("delete from orders where id=$id");
		}
		
		
		public function modelDelete(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from orders where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/orders/".$record->photo))
					unlink("../assets/upload/orders/".$record->photo);
			}
			//---
			//thuc hien truy van
			$conn->query("delete from orders where id=$id");
		}
		
	}
 ?>