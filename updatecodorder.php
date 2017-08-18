<?php session_start(); 
    include("db.php");
    date_default_timezone_set("Asia/Kolkata");
    if($_SESSION['ses_circle_id']==''){ echo'<script>window.location="login.php";</script>'; }
    $refid=$_SESSION['ses_circle_id'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>Snapper App</title>
<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
<style type="text/css">
body{ margin:0px; padding:0px; background:#fff;}
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
{ text-align:left; border-bottom: solid 1px #dedede; padding:10px 0;}
 img{ width:40%; height:auto; margin:0 0px; text-align:left;}
.logo{ text-align:center; border-bottom: solid 1px #dedede; padding:10px 0;}
.logo img{ width:40%; height:auto; margin:0 0px; text-align:left;}
.main-buttons{ width:100%; float:left; margin-top:1%; text-align:center; font: normal 14px Arial, Helvetica, sans-serif;}
.main-buttons h3 {
    font-size: 20px;
    color: #E63A94;
    border-bottom: solid 2px #E22B8D;
    padding: 5px;
    width: 50%;
    margin: 0 auto;
}
.assign-task{ width:95%; margin:00px auto;border-radius:5px; padding:20px 0; }
table{ width:100%; margin-bottom:10px;  border:solid 1px #dedede; border-radius:3px;}
.table-label{ 
/*width:32%; float:left; text-indent:10px; line-height:35px; font-weight:500 !important; text-align:left;     color: #474747;
    font-size: 12px;*/
width: 44%;
    float: left;
    text-indent: 5px;
    line-height: 30px;
	height:auto !important;
    font-weight: 500 !important;
    text-align: left;
    color: #474747;
    font-size: 11px;
	border-right: solid 1px #dedede;
    font-weight: bold !important;
	text-transform: capitalize;	
	}
.table-label1{ 
 
	 text-indent: 5px;
  	line-height: 30px;
    height: auto !important;
    font-weight: 500 !important;
    text-align: left;
    color: #474747;
    font-size: 11px;
    font-weight: bold !important;
    text-transform: capitalize;}
	
.table-input{ width:35%; height:30px; float:left; line-height:30px; font-weight:600 !important; text-align:left;     color: #474747; 
    font-size: 18px;}
.table-input input, .table-input select{     width: 70%;
    height: 29px; border-radius:3px; outline:none; border:solid 1px #dedede; text-indent:3px; font:normal 12px Arial, Helvetica, sans-serif;}
.table-input textarea{ width:100%; height:50px; border-radius:3px; outline:none; border:solid 1px #dedede; text-indent:3px; font:normal 12px Arial, Helvetica, sans-serif;}
.colons{ width:1%; margin-right:2%; float:left; line-height:35px;}
.button-submit{    
clear: both;
    height: 50px;
    float: right;
    width: 100% !important;
    margin-top: 26px; margin-right: 3%;}
.tr-border {
    border-bottom: solid 1px #F1F1F1;
    float: left;
    width: 100%;
}
	td.table-input img {
    margin-top: 7px;
}
  td.table-input a:hover{ color: #FF00AF; text-decoration:none;}
  
  .proj-link{color: #D0348D; text-decoration:none;}
    .proj-link:hover{color:#F708CC; text-decoration:none;}
	.td-img img{ width:28px; margin-top:0px;}
	
.back{ position:absolute; top:15px; right:20px;}	
.back img{ width:20%; height:auto; float:right; position:relative;}
a.inline.cboxElement{ text-decoration: none !important;
    padding: 0px 5px;
    line-height: 30px;
    border-radius: 4px;
    font-weight: bold;
    background: #f00;
    color: #fff !important;
    margin-top: 2px;
    outline: none !important;
    width: 100%;
    float: left;
    font-size: 15px;
    margin-left: 3px; }
div#cboxMiddleLeft,div#cboxContent,div#cboxMiddleRight{ height:170px !important;}
div#colorbox{ width:95% !important; left:10% !important;}
div#cboxLoadedContent{width:100% !important;}
div#cboxWrapper{ width: 85% !important;}
div#cboxTopCenter,div#cboxContent, div#cboxBottomCenter{ width: 80%!important;}
div#taskstatus1{ margin-top:0px !important;}
.col-md-3.col-xs-11{     width: 100% !important;}
select.form-control {
    width: 100% !important;
    height: 30px !important;
    border-radius: 3px !important;
}
input.btn.btn-default {
    background: #f00 !important;
    padding: 10px 20px !important;
    border: none !important;
    color: #fff !important;
    border-radius: 5px !important;
	float:right !important;
	margin-right:0px !important;
	margin-top:2px !important;
}
.table-input img {
    width: 15px;
}
.view{ padding:5px 15px !important; color:#fff !important; background:#075BC0; font-size:15px; text-align:center; border-radius:3px; width:40% !important; text-decoration:none !important;}
a.view:hover {
    background: #E47D0A;
}
.products-line{ text-indent:15px !important; width:100%; border:none;}
.table-label2{width:50%;text-indent: 5px;
    line-height: 30px;
    height: auto !important;
    font-weight: 500 !important;
    text-align: left;
    color: #474747;
    font-size: 12px;
    
    font-weight: bold !important;
    text-transform: capitalize;}
</style>
</head>
<body>
<div class="cont-fluid">
<div class="content-head">
<div class="logo"><a href="home.php"><img src="images/logo.png"/></a></div>	
<div class="back">
<div class="container demo-2">	
			
			<div class="main clearfix">
				
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
                      
								<li><a href="codpendingorders.php">Pending Orders</a></li>
                            <li><a href="codintransitorders.php">Intransit Orders</a></li>
							<li><a href="coddeliveredorder.php">Delivered Orders</a></li>
                            <li><a href="admin-logout.php">Logout</a>	</li>
                           
							
							
						</ul>
					</div><!-- /dl-menuwrapper -->
				</div>
			</div>
		</div>
</div>
</div>
<div class="clear"></div>
<div class="main-buttons">
<div class="assign-task">
<?php 
    $id=$_GET['id'];
    $sql="update tbl_cod_dtl set accepted_status=1 where cod_id=$id";
    $query=mysqli_query($connection_1,$sql);

    $sql="select * from tbl_cod_dtl where cod_id=$id";
    $query=mysqli_query($connection_1,$sql);
    $rec=mysqli_fetch_array($query);

    $sql_vendor="select * from vendor where id='".$rec['cod_vendor_id']."'";
    $query_vendor=mysqli_query($connection_1,$sql_vendor);
    $rec_vendor=mysqli_fetch_array($query_vendor);

    $sql_user="select * from gcm_users where email='".$rec['cod_user_id']."'";
    $query_user=mysqli_query($connection_1,$sql_user);
    $rec_user=mysqli_fetch_array($query_user);

    $sql_products="select * from offers where offer_title='".$rec['cod_offer']."'";
    $query_products=mysqli_query($connection_1,$sql_products);
    $rec_products=mysqli_fetch_array($query_products);

    $storeid=$rec_vendor['store_location'];
    $sql_storeloc="select * from tranquil_location_dtl where location_id='".$storeid."'";
    $query_storeloc=mysqli_query($connection_2,$sql_storeloc);
    $rec_storeloc=mysqli_fetch_array($query_storeloc);

    $sql_employee="select * from employee where id=".$refid."";
    $query_employee=mysqli_query($connection_1,$sql_employee);
    $rec_employee=mysqli_fetch_array($query_employee);
			if(isset($_POST['submit']))
			{
				
				$payment_id=$_POST['payment_id'];
				$status=$_POST['status'];
				$sql="update tbl_cod_dtl set order_status=$status,accepted_status=1 where cod_id=$payment_id";
				if(mysqli_query($connection_1,$sql))
				{
					if($status==0)
					{
						$st="Accepted";
					}
					if($status==1)
					{
						$st="Intransit";
					}
					if($status==2)
					{
						$st="Delivered";
					}
					 $messagecust="Hi Mr/Mrs ".$rec_user['fullname']."  your order for ".$rec_products['offer_title']." is accepted by ".$rec_employee['fname']." ".$rec_employee['lname']." ".$rec_employee['mobile'].". And your order status is ".$st." Snapper Delivery team..Thank you! Snapper";
				 
				 $mobilecust=$rec_user['mobile'];
                 $urlcust="http://182.18.165.185/API/sms.php?username=prpick&password=prp1234&from=PRPPCK&to=$mobilecust&msg=".urlencode($messagecust)."&type=1&dnd_check=0";
			     $ch = curl_init($urlcust);
			     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			     $curl_scraped_page = curl_exec($ch);
			     curl_close($ch);
				 
				 $message="Hi ".$rec_vendor['name']." the order request for ".$rec_products['offer_title']." from ".$rec_user['fullname']."-".$rec_user['mobile']." is accepted by ".$rec_employee['fname']." ".$rec_employee['lname']."-".$rec_employee['mobile']." store location is ".$rec_storeloc['location_title'].". Order status is ".$st." Thank You! Snapper";
				 $mobile=$rec_vendor['phone'];
                 $url="http://182.18.165.185/API/sms.php?username=prpick&password=prp1234&from=PRPPCK&to=$mobile&msg=".urlencode($message)."&type=1&dnd_check=0";
			     $ch = curl_init($url);
			     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			     $curl_scraped_page = curl_exec($ch);
			     curl_close($ch);
					echo "Updated Sucessfully";
				}
			}
?>

<table>
<tr class="tr-border">
<td class="table-label" colspan="2"><a class="proj-link"><?php echo $rec_user['fullname']; ?>-<?php echo $rec_user['mobile']; ?></a> <span style="margin-right:100px;float:right;"><?php echo date('j - M',strtotime($rec['created_date'])); ?></span></td>
<td class="table-label2" style="text-indent:5px;"><a class="proj-link" ><?php echo $rec_vendor['name']; ?>-<?php echo $rec_vendor['phone']; ?></a></td>
</tr>
<tr class="tr-border">
       <td class="table-label" colspan="2" ><?php echo $rec_user['address']; ?>.</td>
     
      <td class="table-label1" ><?php echo $rec_vendor['address']; ?>.</td>
     
        </tr> 
        
        <tr class="tr-border">
        <form method="post" action="">
       <td class="table-input table-label" colspan="2" style="width:44%;">
       <select name="status">
        <option  value="select">Select</option>
        <option <?php if($rec['order_status']==1){ echo 'selected="selected"';} ?> value="1">In transit</option>
        <option <?php if($rec['order_status']==2){ echo 'selected="selected"';} ?> value="2">Delivered</option>
        </select>
       </td>
       <input type="hidden" name="payment_id" value="<?php echo $rec['cod_id']; ?>" />
      <td style="font-weight:500;font-size:10px;"><img src="http://twstesting.com/deliveryapp/images/store.png"/ style="width:16px !important;">&nbsp;    <?php echo $rec_storeloc['location_title']; ?>,<?php echo $rec_vendor['store_address']; ?>.</td>
       
        </tr>
       
  <tr class="tr-border">
	<td class="table-input"><input style=" background: #0C67D1;color: #fff;width: 76%; " type="submit"  name="submit" value="Submit" /></td>
  </tr>
   </form>
 
</table>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
				});
			});
		</script>
</body>
</html>
