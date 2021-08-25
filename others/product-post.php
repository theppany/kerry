<?php
require_once 'init.php';

     $rs = $db->query("SELECT* FROM T_Product,T_Cat where T_Product.id =$_GET[id] and T_Product.cid=T_Cat.id");
     $pro = $rs->fetch(); 

  ?>
<?php
require_once 'header.php';
?>

 <div class="content">
      <div class="allw"><img src="_/images/pro-ban.jpg"></div>

       <div class="ptb20">
          <div class="container">
             <p class="tit2"><span style="padding-bottom:5px;color:#858585;"><a href="products.php?id=<?php echo $pro['cid'];?>" style="color:#858585;"><?php echo $pro['cat_name'];?></a> > <?php echo $pro['title'];?></span></p>
           
            <div class="row mtb20">

              <div class="col-md-12 mtb20">
                
                  <h4 class="text-center"><?php echo $pro['title'];?></h4>
                  <div class="allw mtb20">
                    <img src="<?php echo $imgurl.$pro['image'];?>">
                  </div>
                  <div class="allw neww">
                    <?php echo $pro['content']?>
                  </div>
               
              </div>

            </div>
           
        </div>
      </div>

    </div><!--content end-->

<?php
require_once 'footer.php';
?>
