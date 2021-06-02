<?php 
	trait ModelMohui{
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
			$query = $conn->query("select * from mohui order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//--- 
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from mohui");
			//tra ve so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from mohui where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelCreate(){
			$ngaymohui = $_POST["ngaymohui"];
			$nguoinhan = $_POST["nguoinhan"];
			$diachi = $_POST["diachi"];
			$cmt = $_POST["cmt"];//giam gia			
			$tien = $_POST["tien"];
			
			$photo = "";
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/mohui/$photo");
			}
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert mohui set ngaymohui=:var_ngaymohui, nguoinhan=:var_nguoinhan, diachi=:var_diachi, cmt=:var_cmt, tien=:var_tien, photo=:var_photo");
			$query->execute(array("var_ngaymohui"=>$ngaymohui,"var_nguoinhan"=>$nguoinhan,"var_diachi"=>$diachi,"var_cmt"=>$cmt,"var_tien"=>$tien,"var_photo"=>$photo));
			//---
		}
		public function modelDelete(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from mohui where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/mohui/".$record->photo))
					unlink("../assets/upload/mohui/".$record->photo);
			}
			//---
			//thuc hien truy van
			$conn->query("delete from mohui where id=$id");
		}
		public function modelReadCategorySub($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id=$category_id");
			return $query->fetchAll();
		}
		public function modelListCategories(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			return $query->fetchAll();
		}
		public function modelGetCategory($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories where id=$category_id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
	}
 ?>