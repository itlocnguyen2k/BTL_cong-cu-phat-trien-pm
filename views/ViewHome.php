<?php 
	//load file LayoutTrangChu.php
	$this->fileLayout = "LayoutTrangChu.php";
 ?>
 
        <!-- adv -->
        <div class="widebanner"> <a href="#"><img src="assets/frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
        <!-- end adv --> 
        
        <!-- hot news -->
        <div class="home-blog">
          <h2 class="title"> <span>Tin tức</span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-bottompage"> 
            <?php 
            	$news = $this->modelHotNews();
             ?>
             <?php foreach($news as $rows): ?>
              <!-- new item -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="image"> <img src="assets/image/news1.jpg" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a class="text3line" href="#" style="font-weight: bold;">Chơi hụi-"của để dành" hay "tiền mất tật mang"?</a></h3>
                    <p class="desc"> Không ai có thể phủ nhận sức hút từ vẻ đẹp của những chiếc điện thoại của hãng Apple. Đặc biệt hơn, khi mà ở thời điểm hiện tại, giá iPhone 6s và iPhone 6s Plus đang giảm và dần dần trở nên vừa vặn với túi tiền của...</p>
                  </div>
                </div>
              </div>
              <!-- /news item --> 
              <?php endforeach; ?>
              
            </div>
          </div>
        </div>
        <!-- /hotnews --> 
        