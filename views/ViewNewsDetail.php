<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <h1>Tin tức</h1>
<div class="wrapper-blog"> 
	<h3><?php echo $record->name; ?></h3>
	<p><img src="assets/upload/news/<?php echo $record->photo; ?>" class="img-thumbnail"></p>
	<p><?php echo $record->description; ?></p>
	<style type="text/css">
		.content img{max-width: 100%;}
	</style>
	<p class="content"><?php echo $record->content; ?></p>
</div>