<?php session_start(); 
include("db.php");
date_default_timezone_set("Asia/Kolkata");
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Snapper</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/common.css" rel="stylesheet" type="text/css">
	<link href="css/form.css" rel="stylesheet" type="text/css">
	<link href="css/standard.css" rel="stylesheet" type="text/css">
	<link href="css/special-pages.css" rel="stylesheet" type="text/css">
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="icon" type="image/png" href="favicon-large.png">
	
	<script src="js/libs/modernizr.custom.min.js"></script>
<style type="text/css">
button.float-right {
     /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7d7e7d+0,0e0e0e+100;Black+3D */
background: #7d7e7d; /* Old browsers */
background: -moz-linear-gradient(top,  #7d7e7d 0%, #0e0e0e 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #7d7e7d 0%,#0e0e0e 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  #7d7e7d 0%,#0e0e0e 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7d7e7d', endColorstr='#0e0e0e',GradientType=0 ); /* IE6-9 */
    box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
	    border: none !important;
}
button.float-right:hover {
        background: linear-gradient(to bottom, #E21676 0%,#DE2478 57%,#A2084D 99%);
		
		background: -moz-linear-gradient(top, #E21676 0%, #DE2478 57%, #A2084D 99%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E21676), color-stop(57%,#DE2478), color-stop(99%,#A2084D));
    background: -webkit-linear-gradient(top, #E21676 0%,#DE2478 57%,#A2084D 99%);
    background: -o-linear-gradient(top, #E21676 0%,#DE2478 57%,#A2084D 99%);
    background: -ms-linear-gradient(top, #E21676 0%,#DE2478 57%,#A2084D 99%);
    background: linear-gradient(to bottom, #E21676 0%,#DE2478 57%,#A2084D 99%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#E21676', endColorstr='#A2084D',GradientType=0 );
		
		
}
.input-with-button button{background: rgba(232,43,137,1);
    background: rgba(153,6,87,1);
    background: #930246;
    background: -moz-linear-gradient(top, #930246 0%, #ea277f 57%, #fc5aa3 99%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#930246), color-stop(57%,#ea277f), color-stop(99%,#fc5aa3));
    background: -webkit-linear-gradient(top, #930246 0%,#ea277f 57%,#fc5aa3 99%);
    background: -o-linear-gradient(top, #930246 0%,#ea277f 57%,#fc5aa3 99%);
    background: -ms-linear-gradient(top, #930246 0%,#ea277f 57%,#fc5aa3 99%);
    background: linear-gradient(to bottom, #930246 0%,#ea277f 57%,#fc5aa3 99%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#930246', endColorstr='#fc5aa3',GradientType=0 );
    -moz-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
    box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
	border: solid 1px #B3105C;}
	
	.input-with-button button:hover{
		
		 background: linear-gradient(to bottom, #E21676 0%,#DE2478 57%,#A2084D 99%);
		
		background: -moz-linear-gradient(top, #E21676 0%, #DE2478 57%, #A2084D 99%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E21676), color-stop(57%,#DE2478), color-stop(99%,#A2084D));
    background: -webkit-linear-gradient(top, #E21676 0%,#DE2478 57%,#A2084D 99%);
    background: -o-linear-gradient(top, #E21676 0%,#DE2478 57%,#A2084D 99%);
    background: -ms-linear-gradient(top, #E21676 0%,#DE2478 57%,#A2084D 99%);
    background: linear-gradient(to bottom, #E21676 0%,#DE2478 57%,#A2084D 99%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#E21676', endColorstr='#A2084D',GradientType=0 );}
.block-header {
    font-size: 2em;
    font-weight: bold;
    height: 3em;
    line-height: 3em;
    text-align: center;
    color: white;
    -moz-text-shadow: 0 1px 3px rgba(0, 0, 0, 0.75);
    -webkit-text-shadow: 0 1px 3px rgba(0, 0, 0, 0.75);
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.75);
    margin: 0 -0.833em 0.833em -0.833em;
    background: rgba(232,43,137,1);
    background: rgba(153,6,87,1);
    background: #930246;
    background: -moz-linear-gradient(top, #930246 0%, #ea277f 57%, #fc5aa3 99%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#930246), color-stop(57%,#ea277f), color-stop(99%,#fc5aa3));
    background: -webkit-linear-gradient(top, #930246 0%,#ea277f 57%,#fc5aa3 99%);
    background: -o-linear-gradient(top, #930246 0%,#ea277f 57%,#fc5aa3 99%);
    background: -ms-linear-gradient(top, #930246 0%,#ea277f 57%,#fc5aa3 99%);
    background: linear-gradient(to bottom, #930246 0%,#ea277f 57%,#fc5aa3 99%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#930246', endColorstr='#fc5aa3',GradientType=0 );
    -moz-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
    box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
}
.form input[type=text], .form input[type=password], .form .input-type-text{ height:40px; line-height:20px; font-size:20px !important; font-size:15px !important;     line-height: 20px; border-radius: 4px !important;}
p, th, td {
    /*line-height: 2.25em !important;*/
}
span.big {
    font-size: 20px !important;
	line-height:00px !important;
	
}
.full-width{ width:100% !important;}
p.input-height, p.input-height.grey-bg{ font-size:20px !important; padding:0px !important;}
.inline-small-label label, .inline-small-label .label{    width: 100% !important; margin-left:0px !important;}
input#keep-logged {
    HEIGHT: 21px;
    WIDTH: 21px;
	    VERTICAL-ALIGN: -10% !important;
}
.float-right {
        float: right;
    /* width: 30%; */
    height: auto;
    font-size: 17PX;
    padding: 3px 10px;
	margin-top:-14px;
}
.form legend a, .legend a {
    display: block;
    margin: -0.25em -0.333em -0.333em -0.5em;
    padding: 1.25em 1.5em 1.333em 1.5em;
    color: #666;
   background: none !important;
    font-size: 20px;
}
.form input[type=text], .form input[type=password], .form .input-type-text{ padding:0px !important;}
.form label, .form .label{ font-size:14px;}
p.inline-small-label, .inline-small-label p { padding:0px !important;}
.input-with-button button{ height:50px !important; line-height:50px !important; font-size:15PX !important;}
.login-bg section, .error-bg section{ width:100% !important; margin-left:0px !important; left:0% !important; top:10% !important;height:100% !important;}
.forgot-pass{
font-size:11px;
padding: 6px;
    background: #E02479;
    color: #fff;
    border-radius: 5px;
	
	background: rgba(232,43,137,1);
    background: rgba(73,165,191,1) !important;
background: -moz-linear-gradient(top, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%) !important;
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(73,165,191,1)), color-stop(100%, rgba(20,147,179,1))) !important;
background: -webkit-linear-gradient(top, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%) !important;
background: -o-linear-gradient(top, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%) !important;
background: -ms-linear-gradient(top, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%) !important;
background: linear-gradient(to bottom, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#49a5bf', endColorstr='#1493b3', GradientType=0 ) !important;
    box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
	border: solid 1px #B3105C;
	
	}
.sign-in{
padding: 0px;
   
  
/*background: #7d7e7d;
background: -moz-linear-gradient(top,  #7d7e7d 0%, #0e0e0e 100%);
background: -webkit-linear-gradient(top,  #7d7e7d 0%,#0e0e0e 100%);
background: linear-gradient(to bottom,  #7d7e7d 0%,#0e0e0e 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7d7e7d', endColorstr='#0e0e0e',GradientType=0 );
box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
*/
    
	    border: none !important;
		float:right !important;
   
    color: #f00;
	font-weight:700 !important;
    border-radius: 5px; font-size:11px;}
	
	.login-bg section, .error-bg section{    margin-top: 10px !important;}
	
	
</style>    
	
    
    
</head>
<body class="special-page login-bg dark"  style="background:url(html/images/.jpg)">
	
		<?php 
	if(isset($_POST['submit'])){
		extract($_POST);
		$sql=mysqli_query($connection_1,"select * from employee where email='$username' and password='$password'");		

		if(mysqli_num_rows($sql)==1){
			$sq=mysqli_fetch_array($sql);
			$id=$sq['id'];
			$status=$sq['status'];
			if($status==1){
			$_SESSION['ses_circle_id'] = $id;
			//echo"<div class='admin_success'>Successfully Login.</div>";
			echo'<script>window.location="home.php";</script>';
			}
			else{ echo"<div class='admin_faile' style='color:#f00; font-size:13px;  text-shadow:none !important;'>Your Not Active Vendor. Please contact Admin.</div>"; }
		}
		else
		{ 
		echo "<div class='admin_faile' style='text-align:center;margin-top:30px; color:#f00; font-size:13px; text-shadow:none !important;'>Invalid Username or Password</div>"; 
		}
	    }
	?>
	<section id="login-block">
		<div class="block-border"><div class="block-content">
			
	
			<div class="block-header">Please login</div>
				
			
			<form class="form with-margin" name="login-form"  method="post" action="">
				<input type="hidden" name="a" id="a" value="send">
				<p class="inline-small-label">
					<label for="login"><span class="big" style="font-family:Calibri; font-size:18px;">Email</span></label>
					<input type="text" name="username" id="login" class="full-width" >
                 
				</p>
				<p class="inline-small-label">
					<label for="pass"><span class="big" style="font-family:Calibri; font-size:18px;">Password</span></label>
					<input type="password" name="password" id="pass" class="full-width" >
                   
				</p>
				
				<button type="submit" name="submit" class="float-right">Login</button>
				
			</form>
			
			
		</div></div>
	</section>
	
	<script src="js/libs/jquery-1.6.3.min.js"></script>
	<script src="js/old-browsers.js"></script>	
	<script src="js/common.js"></script>
	<script src="js/standard.js"></script>
	<script src="js/jquery.tip.js"></script>	
</body>
</html>
