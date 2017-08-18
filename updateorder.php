<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>Snapper App</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>html/css/component.css" />
		<script src="<?php echo base_url(); ?>html/js/modernizr.custom.js"></script>
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
    font-size: 16px;
	border-right: solid 1px #dedede;
    font-weight: bold !important;
	text-transform: capitalize;	
	}
.table-input{ width:35%; height:30px; float:left; line-height:30px; font-weight:600 !important; text-align:left;     color: #474747; text-indent:15px;
    font-size: 18px;}
.table-input input, .table-input select{ width:100%; height:35px; border-radius:3px; outline:none; border:solid 1px #dedede; text-indent:3px; font:normal 12px Arial, Helvetica, sans-serif;}
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
.products-line{ text-indent:0px !important; padding-left:15px; width:100%; border:none;}
</style>

</head>
<body>

<div class="cont-fluid">
<div class="content-head">
<div class="logo"><a><img src="<?php echo base_url() ?>images/logo.png"/></a></div>	
<div class="back">
<div class="container demo-2">	
			
			<div class="main clearfix">
				
				<div class="column">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
                      
							<li><a href="#">Accepted Orders</a></li>
							<li><a href="#">Pending Orders</a></li>
							<li><a href="#">Delivered Orders</a></li>
                            <li><a href="#">Logout</a>	</li>
                           
							
							
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
<?php if($conatct_dtlnum==0)
    {
	
	}
	else
	{
	?>
<?php
						  foreach($conatct_dtl as $key=>$rec_cust){ ?>
<table>
 <tr class="tr-border">
 <td class="table-label" colspan="2" width="70%"><a  class="proj-link">Naveen Kumar</a></td>
 <td width="30%">20-Dec</td>
 </tr>
    <tr class="tr-border">
       <td class="table-label products-line" colspan="2">Lenovo Laptop.</td>
       
        </tr>
        <tr class="tr-border">
<td class="table-label">Total Rs. 200000</td>
       <td class="table-input"><a href="#" class="view">Update</a></td>
        </tr>
        
       

</table>

<?php } ?>
<?php } ?>
</div>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
				});
			});
		</script>
</body>
</html>
