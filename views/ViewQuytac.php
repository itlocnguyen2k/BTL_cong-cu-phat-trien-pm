<?php 
    //load file Layout.php
    $this->fileLayout = "LayoutTrangTrong.php";
 ?>
<div class="col-md-12">
    
    
                <?php 
                    foreach($data as $rows):
                 ?>
                
                <?php echo $rows->noidung; ?> 
                                 
                <?php endforeach; ?>
            
            
 