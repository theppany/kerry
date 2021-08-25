<?php
require_once 'init.php';
  $rs = $db->query("SELECT* FROM T_Page where id=2");
    $page = $rs->fetch();


?>
<?php
require_once 'header.php';
?>


 <div class="content">
       <div class="maxw">
         <a href="cases.php"><img src="_/images/confidential.jpg"></a>
       </div>
        
        <div class="container ptb20">
           <div class="row mb2">
              <h3 class="title text-center"><span><?php echo $page[$current_lang.'_title']?></span></h3>
              
               <div class="col-md-12 mt4 p1">
                 <p><?php echo $page[$current_lang.'_content']?></p>
                 
               
              </div>
               
           </div>

           <div class="row ptb20">
             <div class="col-md-2 maxw">
                <img src="_/images/icon1.png">
                <p class="mt6"><?php echo $lang['step1']?></p>
             </div>
             <div class="col-md-1 rlicon text-center">
               <span class="glyphicon glyphicon-menu-right hidden-xs hidden-sm" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-menu-down visible-xs visible-sm" aria-hidden="true"></span>
             </div>

              <div class="col-md-2 maxw">
                <img src="_/images/icon2.png">
                <p class="mt6"><?php echo $lang['step2']?></p>
             </div>

              <div class="col-md-1 rlicon text-center">
               <span class="glyphicon glyphicon-menu-right hidden-xs hidden-sm" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-menu-down visible-xs visible-sm" aria-hidden="true"></span>
             </div>

             <div class="col-md-3 maxw">
                <img src="_/images/icon3.png">
                <p class="mt6"><?php echo $lang['step3']?></p>
             </div>

              <div class="col-md-1 rlicon text-center">
               <span class="glyphicon glyphicon-menu-right hidden-xs hidden-sm" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-menu-down visible-xs visible-sm" aria-hidden="true"></span>
             </div>

              <div class="col-md-2 maxw">
                <img src="_/images/icon4.png">
                <p class="mt6"><?php echo $lang['step4']?></p>
             </div>



           </div>
          
        </div>
    </div><!--content end-->


<?php
require_once 'footer.php';
?>

