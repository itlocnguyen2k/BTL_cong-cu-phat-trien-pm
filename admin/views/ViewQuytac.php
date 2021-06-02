<?php 
    //load file Layout.php
    $this->fileLayout = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=quytac&action=create" class="btn btn-primary">Add Quy tắc</a>&nbsp;
    </div>
    <div style="margin-bottom:5px;">
        
        <a href="index.php?controller=quytac&action=update" class="btn btn-primary">Edit</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Quy Tắc</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Noi dung</th>
                    
                </tr>
                <?php 
                    foreach($data as $rows):
                 ?>
                <tr>
                    
                    <td >
                        <?php echo $rows->noidung; ?> 
                    </td>
                    
                   
                </tr>                    
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            
        </div>
    </div>
</div>