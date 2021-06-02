<!-- header -->
<header id="header">
<!-- top header -->
<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
      <div class="col-xs-12 col-sm-6 col-md-6 customer"> 
        <?php if(isset($_SESSION["customer_email"])): ?>
          <a href="index.php?controller=account&action=orders">Xin chào <?php echo $_SESSION["customer_email"]; ?></a>&nbsp; &nbsp;<a href="index.php?controller=account&action=logout">Đăng xuất</a>
        <?php else: ?>
        <a href="index.php?controller=account&action=login">Đăng nhập</a>&nbsp; &nbsp;<a href="index.php?controller=account&action=register">Đăng ký</a> 
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- end top header --> 
<!-- middle header -->
<div class="mid-header">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.html"> <img src="assets/frontend/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
    <div class="col-xs-12 col-sm-12 col-md-6 header-search"> 
      <!--<form method="post" id="frm" action="">-->
      <div style="margin-top:25px;" class="search" style="position: relative;">
        <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
        <button style="margin-top:5px;" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
        <div class="smart-search">
          
        </div>
      </div>
      <style type="text/css">
        .smart-search{position: absolute; width: 100%; background:white; z-index: 1; display:none; height: 350px; overflow: scroll;}
        .smart-search ul{padding:0px; margin:0px; list-style: none;}
        .smart-search ul li{border-bottom: 1px solid #dddddd;}
        .smart-search img{width: 70px; margin-right: 5px;}
      </style>
      
      <!--</form>--> 
    </div>
    
    
  </div>
</div>
</div>
<!-- end middle header --> 
<!-- bottom header -->
<div class="bottom-header">
  <div class="container-a">
    <div class="clearfix-a">
      <ul class="hidden-lg-a" >
        <?php if(isset($_SESSION["customer_email"])): ?>
        <li><a href="index.php">TRANG CHỦ</a></li>
        <li><a href="index.php?controller=dkymember">ĐĂNG KÝ THÀNH VIÊN</a></li>
        <li><a href="index.php?controller=member">THÀNH VIÊN NHÓM</a></li>
        <li><a href="index.php?controller=quytac">QUY TẮC HỘI</a></li>
        <li><a href="index.php?controller=mohui">LỊCH SỬ MỞ HỤI</a></li>
        <li><a href="index.php?controller=kyquy">KÝ QUỸ</a></li>
        <li><a href="index.php?controller=news">TIN TỨC</a></li>
        <li><a href="index.php?controller=contacts">LIÊN HỆ</a></li>
        <?php else: ?>
        <li><a href="index.php">TRANG CHỦ</a></li>
        <li><a href="index.php?controller=dkymember">ĐĂNG KÝ THÀNH VIÊN</a></li>
        <li><a href="index.php?controller=quytac">QUY TẮC HỘI</a></li>
        <li><a href="index.php?controller=news">TIN TỨC</a></li>
        <li><a href="index.php?controller=contacts">LIÊN HỆ</a></li>
        <?php endif; ?>
        
      </ul>
    </div>
  </div>
</div>
<!-- end bottom header -->
</header>
<!-- end header -->