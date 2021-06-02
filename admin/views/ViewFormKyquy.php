<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?> 
 <!-- <script type="text/javascript">
    var id;
     $(document).ready(function(){
        $("#change").change(function(){
            id=$("#change").val();
            $("#hoten").val("helo");
            
            
        });
     });

 </script>    -->                
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit ky quy</div>
        <div class="panel-body">
        <!-- muon upload file thi trong the form phai co thuoc tinh sau: enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">id</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->id)?$record->id:""; ?>"  name="customer_id" id="change" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Họ tên:</div>
                <div class="col-md-10">
                    <input type="text" id="hoten" value="<?php echo isset($record->hoten)?$record->hoten:""; ?>"  name="hoten" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
        
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Số CMT</div>
                <div class="col-md-10">
                    <input type="text"  name="cmt" class="form-control" r
value="<?php echo isset($record->cmt)?$record->cmt:""; ?>" required>
                </div>
            </div>
            <!-- end rows -->
        
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">SĐT</div>
                <div class="col-md-10">
                    <input type="text" name="sdt" class="form-control" r
value="<?php echo isset($record->sdt)?$record->sdt:""; ?>" required>
                </div>
            </div>
            <!-- end rows -->

            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Date</div>
                <div class="col-md-10">
                    <input type="text" name="date" class="form-control" r
value="<?php echo isset($record->date)?$record->date:""; ?>" required>
                </div>
            </div>
            <!-- end rows -->

            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Số tiền</div>
                <div class="col-md-10">
                    <input type="text" name="tien" class="form-control" r
value="<?php echo isset($record->price)?$record->price:""; ?>" required>
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