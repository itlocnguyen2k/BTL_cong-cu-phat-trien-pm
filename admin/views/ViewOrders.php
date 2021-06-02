<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Xét duyệt thành viên</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Photo</th>
                    <th style="width: 200px;">Họ tên</th>
                    <th>Số CMT</th>
                    <th style="width: 100px;">Giới tính</th>
                    <th style="width: 200px;">SĐT</th>
                    <th style="width: 250px;">Địa chỉ</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php 
                    foreach($data as $rows):
                 ?>
                <tr>
                    <td >
                        <?php if($rows->photo!="" && file_exists("../assets/upload/products/".$rows->photo)): ?>
                            <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width:100px; ">
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php echo $rows->hoten;?>
                            
                    </td>
                     <td style="text-align: center;">
                        <?php echo $rows->cmt; ?>
                    </td>
                    <td>
                        <?php echo $rows->gioitinh; ?>
                    </td>
                    
                    <td >
                        0<?php echo $rows->sdt; ?>
                    </td>
                    <td >
                        <?php echo $rows->diachi; ?>
                    </td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=orders&action=updatePost&id=<?php echo $rows->id; ?>">Duyệt</a>&nbsp;
                        <a href="index.php?controller=orders&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">xóa</a>
                    </td>
                </tr>                    
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=orders&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>