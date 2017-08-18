<?php 

session_start(); 

include("db.php");



date_default_timezone_set("Asia/Kolkata");



if($_SESSION['ses_circle_id']==''){ echo'<script>window.location="login.php";</script>'; }



$refid=$_SESSION['ses_circle_id'];


$sql="select * from tbl_trynow where accepted_status=0 order by trynow_id desc";

$query=mysqli_query($connection_1,$sql);

while($rec=mysqli_fetch_array($query))

{

$sql_vendor="select * from vendor where id='".$rec['vendor_id']."'";

$query_vendor=mysqli_query($connection_1,$sql_vendor);

$rec_vendor=mysqli_fetch_array($query_vendor);



$sql_user="select * from gcm_users where email='".$rec['user_id']."'";

$query_user=mysqli_query($connection_1,$sql_user);

$rec_user=mysqli_fetch_array($query_user);



$sql_products="select * from offers where id='".$rec['offer_id']."'";

$query_products=mysqli_query($connection_1,$sql_products);

$rec_products=mysqli_fetch_array($query_products);



$storeid=$rec_vendor['store_location'];

$sql_storeloc="select * from tranquil_location_dtl where location_id='".$storeid."'";

$query_storeloc=mysqli_query($connection_2,$sql_storeloc);

$rec_storeloc=mysqli_fetch_array($query_storeloc);

?>

<table>

    <tr class="tr-border">

<td class="table-label">

<div style="border:1px solid #F8F8F8;">

<a href="#" class="proj-link"><img src="http://twstesting.com/snapper/logos/<?php echo $rec_vendor['vendor_logo']; ?>" / style="padding:1px;"></a>

<p style="margin:-2px;padding:0;">&nbsp;<img src="http://twstesting.com/deliveryapp/images/mapmarker2.gif"/ width="16" height="16">&nbsp;<span><?php echo $rec_storeloc['location_title']; ?></span></p>

</div>

</td>

       <td class="table-input">

       

       

       

       

       	<table>

        	<tr class="cust-name">

            	<td colspan="2" width="70%"><strong><?php echo $rec_user['fullname']; ?> <?php echo $rec_user['mobile']; ?></strong></td>

                <td width="30%"><span style="font-size:10px ;font-weight:700;"> <?php echo date('j - M',strtotime($rec['created_date'])); ?></span></td>

            </tr>

            <tr class="cust-odd">

            	<td colspan="3"><span><?php echo $rec_user['address']; ?></span></td>

            </tr>

            <tr class="prod-name" style="text-indent: 0px !important;">

            	<td colspan="3">

                	<?php echo $rec_products['offer_title']; ?>
             </td>

                

            </tr>

            <tr class="prod-name">

            <td colspan="3">

            <strong style="color:#D03399;">Total Rs.<?php echo $rec_products['price']; ?></strong>

                

               

                </td>

            </tr>

            

            

        </table>

        

        

        <tr>

      

       <td class="button-submit"><!--<input type="button" value="Cancel" />-->

       <a href="updatetrynoworder.php?id=<?php echo $rec['trynow_id']; ?>" value="">ACCEPT</a></td> 

    </tr>

       

       </td>

        </tr>

        

        	



</table>

<?php } ?>

