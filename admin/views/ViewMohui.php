<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>
<link rel="stylesheet" href="../assets/css/style1.css">
<div class="boxmohui">

	<div class="header">
		<div class="header-wrap">
			<div class="c-hd split-line">
				<section style="float: left; margin: -10px auto; width: 20px;"><a href="index.php?controller=mohui&action=create" class="btn btn-primary">Mở hụi</a></section>
				<section class="logo_img">Lịch sử mở hụi</section>
			</div>
		</div>
	</div>
	
	<div class="wrap">
		<div class="content">
			<div class="record-wrap scroll_bottom_list">
				<?php 
					foreach($data as $rows):
				?>
				<ul class="recorded">
					<li>
						<div class="headsph">
							<p class="sophathanh">Số Phát Hành:<?php echo $rows->id; ?>(Ngày：<time><?php $date = Date_create($rows->ngaymohui);
                        echo Date_format($date, "d/m/Y"); ?></time>)
							</p>
						</div>
						<div class="photo">
							<img style="width: 150px; margin-right: 10px;" class="img-mohui" src="../assets/upload/mohui/<?php echo $rows->photo ?>">
						</div>
						<section class="section-mohui">
							<ul>
								<li class="nguoinhan">Người Nhận Hụi：
									<a href="#c" class="user"><?php echo $rows->nguoinhan; ?></a>
								</li>
								<li class="ip-ad">
									Địa chỉ : <span><?php echo $rows->diachi; ?></span>
								</li>
								<li>
									Số CMT : <span><?php echo $rows->cmt; ?></span>
								</li>
								<li>
									Số tiền：<span id="tien"><?php echo number_format($rows->tien); ?></span>
								</li>

							</ul>
							<div class="clear"></div>
						</section>
					</li>
				</ul>
			<?php endforeach; ?>
			</div>
		</div>
		<style type="text/css">
            .pagination{padding:0px; margin:0px;}
        </style>
        
        <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link">Trang</a></li>
            <?php for($i = 1; $i <= $numPage; $i++): ?>
            <li class="page-item"><a href="index.php?controller=mohui&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
            <?php endfor; ?>
        </ul>
	</div>
</div>
