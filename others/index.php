<?php
require_once 'init.php';
$rs = $db->query("SELECT* FROM T_Product where shown_homepage=1 limit 4");
    $services = $rs->fetchAll();

    $rs = $db->query("SELECT* FROM T_News order by ymd desc limit 4");
        $newses = $rs->fetchAll();


     $rs = $db->query("SELECT* FROM T_Banner order by sort");
    $banners = $rs->fetchAll();

?>

<?php
require_once 'header.php';
?>

    <div class="content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
    
    <?php  foreach($banners as $key=>$ban)          
{?>   
            
            <div class="item allw <?php if($key==0)echo 'active'; ?>">
            <img src="<?php echo $imgurl.$ban['img'] ?>" alt="">
            </div>
            <?php } ?> 

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="bgbf ptb20">
        <div class="container">
          <h3 class="tit text-center"><span>关于耀升</span></h3>
          <h4 class="text-center mb30">我司专业生产：特殊粘胶带、3M胶带、电子专用胶带等，欢迎来电咨询</h4>
          <p><?php echo $system['description']?></p>
          <p class="text-center mb30">
              <a href="about.php" class="btn btn-outline btn-lg">关于我们</a>
          </p>
      </div>
    </div>

     <div class="ptb20">
        <div class="container">
          <h3 class="tit text-center"><span>产品展示</span></h3>
          <h4 class="text-center">以质量求生存，以诚信求发展</h4>
          <div class="row mb30">


              <?php  foreach($services as $show)
{?>



                     <div class="col-md-3 allw mt30">
              <a class="showa" href="product-post.php?id=<?php echo $show['id']?>">
                <img class="showi" src="<?php echo $imgurl.$show['image'];?>">
                <h4><?php echo $show['title']?></h4>
              </a>
            </div>

                    <?php
    }
?>


          </div>
          <p class="text-center mb30">
              <a href="products.php?id=<?php echo $system['more_pro_id']?>" class="btn btn-outline btn-lg">更多产品</a>
          </p>
      </div>
    </div>

      <div class="bgbf ptb20">
        <div class="container mb30">
          <h3 class="tit text-center"><span>新闻资讯</span></h3>
          <h4 class="text-center mb30">耀升提供高品质的产品和完善的服务</h4>
          <div class="row">

            <div class="col-md-7">
              <div class="row">
               <a class="fcb" href="new-post.php?id=<?php echo $newses[0]['id']; ?>">
                  <div class="col-md-6 allw">
                    <img src="<?php echo $imgurl.$newses[0]['img_list']; ?>">
                  </div>
                  <div class="col-md-6 line20">
                    <h4><b><?php echo $newses[0]['title']; ?></b></h4>
                    <p><?php echo $newses[0]['content']; ?></p>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-md-5">
               <ul class="list-unstyled">



               <li><a class="newsl clearfix" href="new-post.php?id=<?php echo $newses[1]['id']; ?>"><?php echo $newses[1]['title']; ?><span class="pull-right"><?php echo $newses[1]['ymd']; ?></span></a></li>
               <li><a class="newsl clearfix" href="new-post.php?id=<?php echo $newses[2]['id']; ?>"><?php echo $newses[2]['title']; ?><span class="pull-right"><?php echo $newses[2]['ymd']; ?></span></a></li>
               <li><a class="newsl clearfix" href="new-post.php?id=<?php echo $newses[3]['id']; ?>"><?php echo $newses[3]['title']; ?><span class="pull-right"><?php echo $newses[3]['ymd']; ?></span></a></li>


               </ul>
               <a href="news.php" style="text-decoration:underline;">more</a>
            </div>

          </div>

      </div>
    </div>
  </div><!--content end-->


<?php
require_once 'footer.php';
?>
