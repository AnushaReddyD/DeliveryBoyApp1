<?php session_start(); 
	include("db.php");
	date_default_timezone_set("Asia/Kolkata");
	if($_SESSION['ses_circle_id']==''){ echo'<script>window.location="login.php";</script>'; }
	$refid=$_SESSION['ses_circle_id'];

	$sql_purchased="select COUNT(payment_id) from tbl_paymenthistory where accepted_status='0'";

	$query_purchased=mysqli_query($connection_1,$sql_purchased);

	$count_purchased=mysqli_fetch_array($query_purchased);

	$sql_cod="select COUNT(cod_id) from tbl_cod_dtl where accepted_status='0'";

	$query_cod=mysqli_query($connection_1,$sql_cod);

	$count_cod=mysqli_fetch_array($query_cod);

	$sql_trynow="select COUNT(trynow_id) from tbl_trynow where accepted_status='0'";

	$query_trynow=mysqli_query($connection_1,$sql_trynow);

	$count_trynow=mysqli_fetch_array($query_trynow);

?>

<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<meta name="apple-mobile-web-app-capable" content="yes" />

<title>Snapper App</title>

</head>

<style type="text/css">

body{ margin:0px; padding:0px; background:#f3f3f3;}

.clear{ clear:both;}

.cont-fluid{ width:100%; float:left; height:auto; background:none; margin:0px; padding:0px;}



.content-head{ width:100%; margin:0 auto; background:rgba(16,112,222,1);



background: rgba(16,112,222,1);

background: -moz-linear-gradient(top, rgba(16,112,222,1) 0%, rgba(4,85,183,1) 100%);

background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(16,112,222,1)), color-stop(100%, rgba(4,85,183,1)));

background: -webkit-linear-gradient(top, rgba(16,112,222,1) 0%, rgba(4,85,183,1) 100%);

background: -o-linear-gradient(top, rgba(16,112,222,1) 0%, rgba(4,85,183,1) 100%);

background: -ms-linear-gradient(top, rgba(16,112,222,1) 0%, rgba(4,85,183,1) 100%);

background: linear-gradient(to bottom, rgba(16,112,222,1) 0%, rgba(4,85,183,1) 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1070de', endColorstr='#0455b7', GradientType=0 );}

.logo{ text-align:center; border-bottom: solid 1px #dedede;  padding:20px 0;}

.logo img{ width:50%; height:auto; margin:0 0px; text-align:left;}

.main-buttons{ width:100%; float:left;margin-top:20%;}

.assign-btn{ 

width:80%; /*padding:15px 0;*/ height:70px; line-height:70px; text-align:center; background:#000; float:left; margin: 10px 10%; border-radius:5px;

font-size:30px; color:#fff; font-family:Arial, Helvetica, sans-serif; text-decoration:none;

text-transform:uppercase;



transition: all .2s ease;

-webkit-transition:all .2s ease;



background: rgba(73,165,191,1);

background: -moz-linear-gradient(top, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%);

background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(73,165,191,1)), color-stop(100%, rgba(20,147,179,1)));

background: -webkit-linear-gradient(top, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%);

background: -o-linear-gradient(top, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%);

background: -ms-linear-gradient(top, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%);

background: linear-gradient(to bottom, rgba(73,165,191,1) 0%, rgba(20,147,179,1) 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#49a5bf', endColorstr='#1493b3', GradientType=0 );



}



.assign-btn1{

	

	background: rgba(255,0,132,1);

background: -moz-linear-gradient(top, rgba(255,0,132,1) 0%, rgba(217,9,120,1) 100%);

background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,0,132,1)), color-stop(100%, rgba(217,9,120,1)));

background: -webkit-linear-gradient(top, rgba(255,0,132,1) 0%, rgba(217,9,120,1) 100%);

background: -o-linear-gradient(top, rgba(255,0,132,1) 0%, rgba(217,9,120,1) 100%);

background: -ms-linear-gradient(top, rgba(255,0,132,1) 0%, rgba(217,9,120,1) 100%);

background: linear-gradient(to bottom, rgba(255,0,132,1) 0%, rgba(217,9,120,1) 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff0084', endColorstr='#d90978', GradientType=0 );

	

	}



.assign-btn2{

background: rgba(181,224,52,1);

background: -moz-linear-gradient(top, rgba(181,224,52,1) 0%, rgba(119,156,6,1) 100%);

background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(181,224,52,1)), color-stop(100%, rgba(119,156,6,1)));

background: -webkit-linear-gradient(top, rgba(181,224,52,1) 0%, rgba(119,156,6,1) 100%);

background: -o-linear-gradient(top, rgba(181,224,52,1) 0%, rgba(119,156,6,1) 100%);

background: -ms-linear-gradient(top, rgba(181,224,52,1) 0%, rgba(119,156,6,1) 100%);

background: linear-gradient(to bottom, rgba(181,224,52,1) 0%, rgba(119,156,6,1) 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b5e034', endColorstr='#779c06', GradientType=0 );



}



.assign-btn3{

background: rgba(255,175,75,1);

background: -moz-linear-gradient(top, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);

background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,175,75,1)), color-stop(100%, rgba(255,146,10,1)));

background: -webkit-linear-gradient(top, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);

background: -o-linear-gradient(top, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);

background: -ms-linear-gradient(top, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);

background: linear-gradient(to bottom, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffaf4b', endColorstr='#ff920a', GradientType=0 );



}



.assign-btn:hover{

	

	width:85%;

	

	background: rgba(247,43,145,1);

background: -moz-linear-gradient(-45deg, rgba(247,43,145,1) 0%, rgba(186,34,110,1) 46%, rgba(204,20,112,1) 100%);

background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(247,43,145,1)), color-stop(46%, rgba(186,34,110,1)), color-stop(100%, rgba(204,20,112,1)));

background: -webkit-linear-gradient(-45deg, rgba(247,43,145,1) 0%, rgba(186,34,110,1) 46%, rgba(204,20,112,1) 100%);

background: -o-linear-gradient(-45deg, rgba(247,43,145,1) 0%, rgba(186,34,110,1) 46%, rgba(204,20,112,1) 100%);

background: -ms-linear-gradient(-45deg, rgba(247,43,145,1) 0%, rgba(186,34,110,1) 46%, rgba(204,20,112,1) 100%);

background: linear-gradient(135deg, rgba(247,43,145,1) 0%, rgba(186,34,110,1) 46%, rgba(204,20,112,1) 100%);

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f72b91', endColorstr='#cc1470', GradientType=1 );}

.back{ position:absolute; top:15px; right:20px;}
</style>

<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.dlmenu.js"></script>
<!--<script type="text/javascript">

  setTimeout(function () { location.reload(true); }, 30000);

</script>-->

<script>



			$(function() {



				$( '#dl-menu' ).dlmenu({



					animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }



				});



			});



		</script>

<body>



<div class="cont-fluid">

<div class="content-head">

<div class="logo"><a href="home.php"><img src="images/logo.png"/></a></div>	

<div class="back">



<!--<div class="container demo-2">	



			



			<div class="main clearfix">

				

				<div class="column">

					<div id="dl-menu" class="dl-menuwrapper">

						<button class="dl-trigger">Open Menu</button>

						<ul class="dl-menu">

                      

							<li><a href="home.php">New Orders</a></li>

                            <li><a href="puchasedacceptedorders.php">Accepted Orders</a></li>

                            <li><a href="purchasedintransitorders.php">Intransit Orders</a></li>

							<li><a href="purchaseddeliveredorder.php">Delivered Orders</a></li>

                            <li><a href="admin-logout.php">Logout</a>	</li>

                           

							

							

						</ul>

					</div><!-- /dl-menuwrapper 

				</div>

			</div>



		</div>-->







</div>

</div>



<div class="clear"></div>



<div class="main-buttons">



	<a href="purchasedorders.php" class="assign-btn assign-btn1">Purchased-<?php echo $count_purchased[0]; ?></a>

    <a href="codorders.php" class="assign-btn">COD-<?php echo $count_cod[0]; ?></a>

    <a href="trynoworder.php" class="assign-btn assign-btn3">Try Now-<?php echo $count_trynow[0]; ?> </a>

    

    <a href="admin-logout.php" class="assign-btn assign-btn2">Logout</a>

    



</div>

</div>

</body>

</html>

