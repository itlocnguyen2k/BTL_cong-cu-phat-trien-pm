<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>                    
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit product</div>
        <div class="panel-body">
        <!-- muon upload file thi trong the form phai co thuoc tinh sau: enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ngày mở hụi</div>
                <div class="col-md-10">
                    <input type="text"  name="ngaymohui" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
        
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Người nhận</div>
                <div class="col-md-10">
                    <input type="text" name="nguoinhan" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
        
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Địa chỉ</div>
                <div class="col-md-10">
                    <input type="text" name="diachi" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->

            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Số CMT</div>
                <div class="col-md-10">
                    <input type="text" name="cmt" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->

            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Số tiền</div>
                <div class="col-md-10">
                    <input type="text" name="tien" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->

            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Ảnh</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>