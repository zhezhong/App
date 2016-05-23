<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />


<title>Register System for AliCTF Team </title>


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->

<link href="/App/Public/css/normalize.css" rel="stylesheet"/>
<link href="/App/Public/css/jquery-ui.css" rel="stylesheet"/>
<link href="/App/Public/css/jquery.idealforms.min.css" rel="stylesheet" media="screen"/>

<style type="text/css">
body{font:normal 15px/1.5 Arial, Helvetica, Free Sans, sans-serif;color: #222;background:url(pattern.png);overflow-y:scroll;padding:60px 0 0 0;}
#my-form{width:755px;margin:0 auto;border:1px solid #ccc;padding:3em;border-radius:3px;box-shadow:0 0 2px rgba(0,0,0,.2);}
#comments{width:350px;height:100px;}
</style>

</head>
<body>


<div class="row">

  <div class="eightcol last">

    <!-- Begin Form -->

    <form id="my-form" method="post" action="Register/register" >

       		<div> <label >Register System for AliCTF Team </laber> </div>

          
          	<div>	<label for="txtname">team name：</label>
	            <input type="text" id="txtname" name="TEAM_NAME" />
	            </div>
          	<div>
	    	    <label for="txtname">register name：</label>
	            <input type="text" id="txtname" name="sign_name" />
	        	</div>
          	<div>
	            <label for="txtpswd">register password：</label>
	            <input type="password" id="txtpswd" name="sign_pwd" />
	        </div>
          	<div>    
	            <label for="txtpswd">retype your password：</label>
	            <input type="password" id="txtpswd" name="resign_pwd" />
	        </div>
          	<div>    
	            <label for="" >register email ：</label>
	            <input type="text" id="txtemail" name="email" />
	        </div>
          	<div>   
	            <label for="" >register phone number ：</label>
	           <input type="text" id="txtphone" name="phone_num" />
          	</div>

        

      <div><hr/></div>

      <div>
        
        <button id="reset" type="button">重置</button>
        <button type="submit" value = "submit">提交</button>
      </div>

    </form>

    <!-- End Form -->

  </div>

</div>


<script type="text/javascript" src="/App/Public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/App/Public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/App/Public/js/jquery.idealforms.js"></script>
<script type="text/javascript">
var options = {

	
	
	
};

var $myform = $('#my-form').idealforms(options).data('idealforms');

$('#reset').click(function(){
	$myform.reset().fresh().focusFirst()
});

</script>  

</body>
</html>