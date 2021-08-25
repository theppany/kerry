<?php


    require_once 'init.php';

?>
<?php
require_once 'header.php';
?>

<div class="content">
      <div class="allw"><img src="_/images/form-ban.jpg"></div>
      

     <div class="ptb20 fch">
        <div class="container">
          <h3 class="tit2"><span>在线留言</span></h3>
          <p>谢谢浏览本网站。若您有任何需要或意见，告诉我们您对本站的任何产品或其他事情的意见或需求，我们很欢迎您的留言！请留下资料，我们会尽快与您联络。</p>
          
          <form class="mtb20" style="font-size:15px">
          <div class="row">
           <div class="col-md-4">
              <div class="form-group">
              <label>姓名：<b class="fcr">*</b></label>
              <input id="myname" type="text" class="form-control">
            </div>
           </div>

            <div class="col-md-4">
              <div class="form-group">
              <label>邮箱：<b class="fcr">*</b></label>
              <input id="myemail" type="email" class="form-control">
            </div>
           </div>

            <div class="col-md-4">
              <div class="form-group">
              <label>公司名称：<b class="fcr">*</b></label>
              <input id="mycop" type="text" class="form-control">
            </div>
           </div>

           <div class="col-md-5">
              <div class="form-group">
              <label>留言主题：<b class="fcr">*</b></label>
              <input id="mytitle" type="text" class="form-control">
            </div>
           </div>
           
           <div class="col-md-12">
             <div class="form-group">
                <label>留言内容：</label>
                  <textarea id="mymsg" class="form-control" rows="3"></textarea>
              </div>
           
           </div>
        
           </div>
           <p><button id="mysubmit" type="submit" class="btn btn-default blue">提 交</button></p>
          </form>
         
      </div>
    </div>

    </div><!--content end-->

 
<?php
require_once 'footer.php';
?>