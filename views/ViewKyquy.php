<!-- load file layout chung -->
<?php $this->fileLayout = "LayoutTrangTrong.php"; ?>
<div class="col-md-12"> 
      
    <div class="panel panel-primary">
        <div class="panel-heading">Lịch sử Ký quỹ</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width:200px; text-align: center;">Họ tên</th>
                    <th>Số CMT</th>
                    <th>SĐT</th>
                    <th>Date</th>
                    <th>Tiền đã ký quỹ</th>                    
                    <th style="width:150px; text-align: center;">Tình trạng</th>
                    <th style="width:150px;">Còn nợ</th>
                    <th></th>
                </tr>
                <?php foreach($listRecord as $rows): ?>

                 <tr>
                     <td><?php echo $rows->hoten; ?></td>
                     <td><?php echo $rows->cmt; ?></td>
                     <td>0<?php echo $rows->sdt; ?></td>
                     <td>
                        <?php 
                        $date = Date_create($rows->date);
                        echo Date_format($date, "d/m/Y");
                        ?>                            
                        </td>
                     <td><?php echo number_format($rows->price); ?></td>
                     <td style="text-align: center;">
                         <?php if($rows->conno == 0): ?>
                            <span class="label label-primary">Đã nộp đủ</span>
                         <?php else: ?>
                            <span class="label label-danger">Chưa nộp đủ</span>
                         <?php endif; ?>
                     </td>
                     <td style="text-align: center;">
                        <?php echo number_format($rows->conno); ?>
                     </td>
                     <td style="text-align:center;">
                        <a href="index.php?controller=kyquy&action=update&id=<?php echo $rows->customer_id; ?>">Edit</a>&nbsp;
                        <a href="index.php?controller=kyquy&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                 </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link">Trang</a></li>
                <li class="page-item">
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <a href="index.php?controller=users&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>