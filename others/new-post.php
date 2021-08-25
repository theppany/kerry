<?php
require_once 'init.php';
 
     $rs = $db->query("SELECT* FROM T_News where id = ".$_GET['id']);
     $newp = $rs->fetch(); 

  ?>
<?php
require_once 'header.php';
?>

 <div class="content">
      <div class="allw"><img src="_/images/new-ban.jpg"></div>

       <div class="ptb20">
          <div class="container">
            <h3 class="tit2"><span>新闻资讯</span></h3>
           
            <div class="row mtb20">

              <div class="col-md-12 mtb20">
                
                  <h4 class="text-center"><?php echo $newp['title'];?></h4>
                  
                  <p class="text-center fch"><?php echo $newp['ymd'];?></p>
                  <hr class="nl" style="width:100%" />
                  
                  <div class="allw mtb20 neww">
                   <?php echo $newp['content']?>
                  </div>
               
              </div>

            </div>
            <p class="text-right"><a href="news.php" >返回</a></p>
            
        </div>
      </div>

    </div><!--content end-->

<?php
require_once 'footer.php';
?>
