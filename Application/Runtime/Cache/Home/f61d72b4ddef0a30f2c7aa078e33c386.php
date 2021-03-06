<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>XCTF-Time</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://time.xctf.org.cn/site_media/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    
</head>

<script src="https://time.xctf.org.cn/site_media/bootstrap/js/jquery.min.js"></script>
<script src="https://time.xctf.org.cn/site_media/bootstrap/js/bootstrap.min.js"></script>
<script src="/App/Public/js/checkCode.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/App/Public/js/checkCode.css">

<script type="text/javascript" src="idcode/jquery.min.js"></script>
<script language="javascript" src="idcode/jquery.idcode.js"></script>
<link type="text/css" rel="stylesheet" href="idcode/jquery.idcode.css" />


<body >



<nav class="navbar navbar-default" role="navigation">
   <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
       <span class=="sr-only"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
   </button>
    <img class="navbar-brand"  src="https://time.xctf.org.cn/site_media/images/logo-d.png" >
      <a class="navbar-brand" href="https://time.xctf.org.cn/">XCTF-Time</a>
   </div>
   <div class="collapse navbar-collapse" id="example-navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="http://alictf.com">ALICTF2016 Site</a></li>
        <li><a href="/">ALICTF2016 Register for International Teams</a></li>
        <li><a href="https://time.xctf.org.cn/accounts/register/">ALICTF2016 Register for XCTF Teams</a></li>
      </ul>
   </div>
</nav>


<div class="container">
    <div class="row">
        
        

<div class="container">
 <form class="form-horizontal" action="" method="post">
    <input type='hidden' name='csrfmiddlewaretoken' value='ybQP7q1v871QSuifqTnum0YY2qUhjljZ' />
    <fieldset>
      <legend>Register for International Teams</legend>
  <div class="well">
  <p>For XCTF teams, DO NOT REGISTER HERE.</p>
  <p>XCTF联赛队伍请勿在此注册。</p>
  </div>
   <div class="form-group">
   <label class="col-lg-2 control-label" for="id_email">E-mail</label>
   <div class="col-lg-10"><input class="form-control" id="id_email" maxlength="255" name="email" placeholder="E-mail" required="required" title="" type="email" /></div>
   </div>
  <div class="form-group">
  <label class="col-lg-2 control-label" for="id_name">Team name</label>
  <div class="col-lg-10"><input class="form-control" id="id_name" maxlength="15" name="name" placeholder="Team name" required="required" title="" type="text" /></div>
  </div>

  <div class="form-group">

      <label class="col-lg-2 control-label" for="id_pwd">Password</label>
      <div class="col-lg-10"><input class="form-control" id="sign_pwd" maxlength="30" name="sign_pwd" placeholder="sign password" required="required" title="" type="password" />
</div>
  <div class="form-group"></div>
  <div class="form-group">

      <label class="col-lg-2 control-label" for="id_pwd">Confirm password</label>
      <div class="col-lg-10"><input class="form-control" id="resign_pwd" maxlength="30" name="resign_pwd" placeholder="password" required="required" title="" type="password" />
  </div>

  <div class="form-group"></div>
  <div class="form-group">
       <div> 
          
         <span id="idcode" style="text-align: center;"> 
         </span>
       </div>
  </div>        
  <div class="form-group"></div>
  <div class="form-group">

    <div  style="text-align: center;">
        <button type="submit" class="btn btn-primary">
            Register
        </button>
    </div>
  </div>
  </fieldset>
  </form>
</div>

    </div>

</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>
  $(function() {
    // Click-handler for the refresh-link
    $('img.captcha').click(function(){
        var $form = $(this).parents('form');
        var url = location.protocol + "//" + window.location.hostname + ":"
                  + location.port + "/captcha/refresh/";

        // Make the AJAX-call
        $.getJSON(url, {}, function(json) {
            $form.find('input[name="captcha_0"]').val(json.key);
            $form.find('img.captcha').attr('src', json.image_url);
        });

        return false;
    });
});
</script>
<script>
$(document).ready(function(){
 $.idcode.setCode();
});
</script>

<footer class="footer">
  <div class="container">
    <div style="text-align: center;">
<p></p>
<p>Administrator:xctf@xctf.org.cn</p>
    </div>
  </div>
</footer>
</body>
</html>