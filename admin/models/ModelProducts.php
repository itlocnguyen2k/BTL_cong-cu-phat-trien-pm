<?php 
	trait ModelProducts{
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
			$query = $conn->query("select * from products order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//--- 
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from products");
			//tra ve so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			$hoten = $_POST["hoten"];
			$cmt = $_POST["cmt"];
			$gioitinh = $_POST["gioitinh"];
			$sdt = $_POST["sdt"];
			$diachi = $_POST["diachi"];
			
			
			
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update products set hoten=:var_hoten, cmt=:var_cmt, sdt=:var_sdt, diachi=:var_diachi, gioitinh=:var_gioitinh where id=$id");
			$query->execute(array("var_hoten"=>$hoten,"var_cmt"=>$cmt,"var_sdt"=>$sdt,"var_diachi"=>$diachi,"var_gioitinh"=>$gioitinh));	
			//---
			//neu user upload anh thi thuc hien upload
			
			$photo = "";
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select photo from products where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
						unlink("../assets/upload/products/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
				$query = $conn->prepare("update products set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}
			//---		
		}
		
		public function modelCreate(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			$hoten = $_POST["hoten"];
			$cmt = $_POST["cmt"];
			$gioitinh = $_POST["gioitinh"];//giam gia
			$diachi = $_POST["diachi"];
			$sdt = $_POST["sdt"];
			
			$photo = "";
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
			}
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert products set hoten=:var_hoten, cmt=:var_cmt, sdt=:var_sdt, diachi=:var_diachi, gioitinh=:var_gioitinh, photo=:var_photo");
			$query->execute(array("var_hoten"=>$hoten,"var_cmt"=>$cmt,"var_sdt"=>$sdt,"var_diachi"=>$diachi,"var_gioitinh"=>$gioitinh,"var_photo"=>$photo));
			//---
		}
		public function modelDelete(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from products where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
					unlink("../assets/upload/products/".$record->photo);
			}
			//---
			//thuc hien truy van
			$conn->query("delete from products where id=$id");
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