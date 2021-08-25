<?php
require_once 'init.php';
  
$rs = $db->query("SELECT* FROM T_Jobs order by sort");
    $jobs = $rs->fetchAll();

?>
<?php
require_once 'header.php';
?>

 <div class="content">
      <div class="allw"><img src="_/images/ab-ban.jpg"></div>

       <div class="ptb20">
          <div class="container">
            <h3 class="tit2"><span>人才招聘</span></h3>
           
            <div class="row mtb20">
                 <?php  foreach($jobs as $job)          
{?>   

 <div class="col-md-4 text-center jdes">
                <div>
                  <?php echo $job['title']?>
                </div>
                <p><?php echo $job['content']?></p>
              </div>





                    <?php
    }
?> 

            </div>
            
        </div>
      </div>

    </div><!--content end-->


<?php
require_once 'footer.php';
?>

