<?php
require_once 'init.php';
 $rs = $db->query("SELECT* FROM T_Product where cid=$_GET[id] order by sort");
    $pros = $rs->fetchAll();

  ?>
<?php
require_once 'header.php';
?>


<div class="content">
      <div class="allw"><img src="_/images/pro-ban.jpg"></div>
      
       <div class="ptb20">
          <div class="container">
            <h3 class="tit2"><span>产品展示</span></h3>
              <div class="row">

               <?php  foreach($pros as $pro)
{?>



   <div class="col-md-3 mtb20">
                  <a class="pro"  href="product-post.php?id=<?php echo $pro['id'];?>">
                    <div class="allw">
                      <img class="lazy" data-original="<?php echo $imgurl.$pro['image'];?>">
                    </div>
                    <div class="move text-center">
                     <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </div>
                  </a>
                  <h4 class="text-center"><?php echo $pro['title']?></h4>
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
