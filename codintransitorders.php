<?php session_start(); 
    include("db.php");
    date_default_timezone_set("Asia/Kolkata");
    if($_SESSION['ses_circle_id']==''){ echo'<script>window.location="index.php";</script>'; }
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
      width: 60%;
          float: left;
          text-indent: 15px;
          line-height: 30px;
      	height:auto !important;
          font-weight: 500 !important;
          text-align: left;
          color: #474747;
          font-size: 12px;
      	border-right: solid 1px #dedede;
          font-weight: bold !important;
      	text-transform: capitalize;	
      	}
      .table-input{ width:35%; height:30px; float:left; line-height:30px; font-weight:600 !important; text-align:left;     color: #474747; text-indent:15px;
          font-size: 18px;}
      .table-input input, .table-input select{     width: 86%;
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
      .products-line{ text-indent:15px !important; /*padding-left:15px; */width:100%; border:none;}
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
      							<li><a href="home.php">New Orders</a></li>
                    <li><a href="codacceptedorders.php">Accepted Orders</a></li>
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
<div class="clear">
<div class="main-buttons">
<div class="assign-task">
<?php 
if(isset($_POST['submit']))
			{
		 $payment_id=$_POST['payment_id'];
		 $status=$_POST['status'];
		 $sql="update tbl_cod_dtl set order_status=$status,accepted_status=1 where cod_id=$payment_id";
		 if(mysqli_query($connection_1,$sql))
				{
					echo "Updated Sucessfully";
					$custname=$_POST['fullname'];
					$offername=$_POST['offertitle'];
					$empfname =$_POST['empfname'];
					$emplname =$_POST['emplname'];
					$empmobile =$_POST['empmobile'];
					$custmobile =$_POST['custmobile'];
					$vendname =$_POST['vendname'];
					$storeloc =$_POST['storeloc'];
					$vendormobile =$_POST['vendormobile'];
					$messagecust="Hi Mr/Mrs ".$custname."  your order for ".$offername." is delivered by ".$empfname." ".$emplname." ".$empmobile.". And your order status is Delivered. Snapper Delivery team..Thank you! Snapper";
				 
				 $mobilecust=$custmobile;
                 $urlcust="http://182.18.165.185/API/sms.php?username=prpick&password=prp1234&from=PRPPCK&to=$mobilecust&msg=".urlencode($messagecust)."&type=1&dnd_check=0";
			     $ch = curl_init($urlcust);
			     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			     $curl_scraped_page = curl_exec($ch);
			     curl_close($ch);
				 
				 $message="Hi ".$vendname." the order for ".$offername." from ".$custname."-".$custmobile." is delivered by ".$empfname." ".$emplname."-".$empmobile." store location is ".$storeloc.". Order status is Delivered. Thank You! Snapper";
				 $mobile=$vendormobile;
                 $url="http://182.18.165.185/API/sms.php?username=prpick&password=prp1234&from=PRPPCK&to=$mobile&msg=".urlencode($message)."&type=1&dnd_check=0";
			     $ch = curl_init($url);
			     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			     $curl_scraped_page = curl_exec($ch);
			     curl_close($ch);
				}
			}

            $sql="select * from tbl_cod_dtl where order_status=1";
            $query=mysqli_query($connection_1,$sql);
            while($rec=mysqli_fetch_array($query))
            {
            $sql_vendor="select * from vendor where id='".$rec['cod_vendor_id']."'";
            $query_vendor=mysqli_query($connection_1,$sql_vendor);
            $rec_vendor=mysqli_fetch_array($query_vendor);

            $sql_user="select * from gcm_users where email='".$rec['cod_user_id']."'";
            $query_user=mysqli_query($connection_1,$sql_user);
            $rec_user=mysqli_fetch_array($query_user);

            $sql_products="select * from offers where offer_title='".$rec['cod_offer']."'";
            $query_products=mysqli_query($connection_1,$sql_products);
            $rec_products=mysqli_fetch_array($query_products);

            $sql_employee="select * from employee where id=".$refid."";
            $query_employee=mysqli_query($connection_1,$sql_employee);
            $rec_employee=mysqli_fetch_array($query_employee);

            $storeid=$rec_vendor['store_location'];
            $sql_storeloc="select * from tranquil_location_dtl where location_id='".$storeid."'";
            $query_storeloc=mysqli_query($connection_2,$sql_storeloc);
            $rec_storeloc=mysqli_fetch_array($query_storeloc);
?>
<table>
 <tr class="tr-border">
   <td class="table-label" colspan="2" width="70%"><a  class="proj-link"><?php echo $rec_user['fullname']; ?> <?php echo $rec_user['mobile']; ?></a></td>
   <td width="30%"><?php echo date('j - M',strtotime($rec['created_date'])); ?></td>
 </tr>       
  <tr class="tr-border">    
      <td class="table-label products-line" colspan="2"><?php echo $rec['cod_address']; ?>.</td>
       <td class="table-label products-line" colspan="2"><?php echo $rec_products['offer_title']; ?>.</td>
  </tr>
  <form method="post" action="">
    <tr class="tr-border">
        <td class="table-label">Total Rs. <?php echo $rec_products['price']; ?></td>
        <td class="table-input">
            <select name="status">
            <option <?php if($rec['order_status']==1){ echo 'selected="selected"';} ?> value="1">In transit</option>   
            <option <?php if($rec['order_status']==2){ echo 'selected="selected"';} ?> value="2">Delivered</option>
            </select>
            <input type="hidden" name="payment_id" value="<?php echo $rec['cod_id']; ?>" />
            <input type="hidden" name="fullname" value="<?php echo $rec_user['fullname']; ?>" />
            <input type="hidden" name="offertitle" value="<?php echo $rec_products['offer_title']; ?>" />
            <input type="hidden" name="empfname" value="<?php echo $rec_employee['fname']; ?>" />
            <input type="hidden" name="emplname" value="<?php echo $rec_employee['lname']; ?>" />
            <input type="hidden" name="empmobile" value="<?php echo $rec_employee['mobile']; ?>" />
            <input type="hidden" name="custmobile" value="<?php echo $rec_user['mobile']; ?>" />     
            <input type="hidden" name="vendname" value="<?php echo $rec_vendor['name']; ?>" />
            <input type="hidden" name="storeloc" value="<?php echo $rec_storeloc['location_title']; ?>" />
            <input type="hidden" name="vendormobile" value="<?php echo $rec_vendor['phone']; ?>" />
        </td>
    </tr>
    <tr class="tr-border">
      <td style="text-indent:13px;font-weight:500;"><img src="http://twstesting.com/deliveryapp/images/mapmarker2.gif"/ style="width:20px !important;height:20px !important;"><?php echo $rec_storeloc['location_title']; ?></td>
      <td class="table-input" style="float:right;">
      <input style="background: #0C67D1;  color: #fff; width: 76%;" type="submit"  name="submit" value="Submit" /></td>
    </tr>        
  </form>
</table>
<?php } ?>
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
     <script>
         var timer = setInterval(listLoad, 500);
         function listLoad()
  	   {
         $(function(){
         $("#list1").load("codintransitorders.php");
         //$("#list2").load("notherelist.php");
         });
        }
      </script>
</body>
</html>

