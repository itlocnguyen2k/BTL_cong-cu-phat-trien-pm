<?php 
	trait ModelDkymember{
		
		public function modelCreate(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			$hoten = $_POST["hoten"];
			$ngaysinh = $_POST["ngaysinh"];
			$gioitinh = $_POST["gioitinh"];//giam gia
			$diachi = $_POST["diachi"];
			$sdt = $_POST["sdt"];
			
			$photo = "";
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"./assets/upload/products/$photo");
			}
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert orders set hoten=:var_hoten, ngaysinh=:var_ngaysinh, sdt=:var_sdt, diachi=:var_diachi, gioitinh=:var_gioitinh, photo=:var_photo");
			$query->execute(array("var_hoten"=>$hoten,"var_ngaysinh"=>$ngaysinh,"var_sdt"=>$sdt,"var_diachi"=>$diachi,"var_gioitinh"=>$gioitinh,"var_photo"=>$photo));
			//---
		}
		
	}
 ?>