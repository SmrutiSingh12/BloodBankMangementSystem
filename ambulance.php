<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
<div style="height:500px; >
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"><img src="Images/download.png" height="90px" /></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:bisque" align="center" class="bold">            
             <td class="bold" style="color:red"  >Vehical No</td><td align="center">Driver Name</td><td align="center">Contact No</td><td align="center">License No</td>  <td align="center">Address</td>
        </tr>
                   

<tr><td  style=' padding-left:50px'>MH 05 BW 9591</td><td  style=' padding-left:10px'>Satish Jadhav</td><td  style=' padding-left:30px'>902234587</td><td  style=' padding-left:50px'>2345</td><td  style=' padding-left:50px'>kalyan</td></tr>
<tr><td  style=' padding-left:50px'>MH 10 AW 8791</td><td  style=' padding-left:10px'>Sandeep Ghayal</td><td  style=' padding-left:30px'>834729832</td><td  style=' padding-left:50px'>2356</td><td  style=' padding-left:50px'>kalyan</td></tr>
<tr><td  style=' padding-left:50px'>MH 76 HW 8935</td><td  style=' padding-left:10px'>Satish Sonawane</td><td  style=' padding-left:30px'>738238742</td><td  style=' padding-left:50px'>5845</td><td  style=' padding-left:50px'>thane</td></tr>
<tr><td  style=' padding-left:50px'>MH 23 HD 3298</td><td  style=' padding-left:10px'>Utkarsh Patil</td><td  style=' padding-left:30px'>8932472893</td><td  style=' padding-left:50px'>2345</td><td  style=' padding-left:50px'>dombivli</td></tr>
<tr><td  style=' padding-left:50px'>MH 76 ID 2093</td><td  style=' padding-left:10px'>Sushant Datilkar</td><td  style=' padding-left:30px'>8326289740</td><td  style=' padding-left:50px'>7261</td><td  style=' padding-left:50px'>dadar</td></tr>
<tr><td  style=' padding-left:50px'>MH 24 JS 2871</td><td  style=' padding-left:10px'>Sunil Pendhari</td><td  style=' padding-left:30px'>902234587</td><td  style=' padding-left:50px'>9821</td><td  style=' padding-left:50px'>mumbra</td></tr>
<tr><td  style=' padding-left:50px'>MH 23 SK 2893</td><td  style=' padding-left:10px'>Sanskar Singh</td><td  style=' padding-left:30px'>732328793</td><td  style=' padding-left:50px'>8721</td><td  style=' padding-left:50px'>kanjumarg</td></tr>
<tr><td  style=' padding-left:50px'>MH 98 SJ 9372</td><td  style=' padding-left:10px'>Rakesh Katalkar</td><td  style=' padding-left:30px'>9289731897</td><td  style=' padding-left:50px'>4332</td><td  style=' padding-left:50px'>vidyavihar</td></tr>
<tr><td  style=' padding-left:50px'>MH 37 IA 7327</td><td  style=' padding-left:10px'>Jayesh Wayle</td><td  style=' padding-left:30px'>9092832984</td><td  style=' padding-left:50px'>8723</td><td  style=' padding-left:50px'>diva</td></tr>
<tr><td  style=' padding-left:50px'>MH 09 EW 8322</td><td  style=' padding-left:10px'>Deepak Khatari</td><td  style=' padding-left:30px'>8232988383</td><td  style=' padding-left:50px'>8954</td><td  style=' padding-left:50px'>thakurli</td></tr>
<tr><td  style=' padding-left:50px'>MH 63 KD 5612</td><td  style=' padding-left:10px'>Kapil Dwivedi</td><td  style=' padding-left:30px'>72362988326</td><td  style=' padding-left:50px'>7326</td><td  style=' padding-left:50px'>kopar</td></tr>
<tr><td  style=' padding-left:50px'>MH 72 SO 1287</td><td  style=' padding-left:10px'>Manoj Hedaoo</td><td  style=' padding-left:30px'>7928392834</td><td  style=' padding-left:50px'>1673</td><td  style=' padding-left:50px'>shahad</td></tr>
<tr><td  style=' padding-left:50px'>MH 05 BW 9591</td><td  style=' padding-left:10px'>Satish Jadhav</td><td  style=' padding-left:30px'>902234587</td><td  style=' padding-left:50px'>2345</td><td  style=' padding-left:50px'>kalyan</td></tr>
<tr><td  style=' padding-left:50px'>MH 84 KA 2871</td><td  style=' padding-left:10px'>Umesh Raman</td><td  style=' padding-left:30px'>9282376826</td><td  style=' padding-left:50px'>3897</td><td  style=' padding-left:50px'>ambivli</td></tr>
<tr><td  style=' padding-left:50px'>MH 95 KQ 4322</td><td  style=' padding-left:10px'>Sanjay Vishe</td><td  style=' padding-left:30px'>8286342863</td><td  style=' padding-left:50px'>6327</td><td  style=' padding-left:50px'>titwala</td></tr>
<tr><td  style=' padding-left:50px'>MH 24 EK 8793</td><td  style=' padding-left:10px'>Tushar Mali</td><td  style=' padding-left:30px'>09287346232</td><td  style=' padding-left:50px'>7892</td><td  style=' padding-left:50px'>churgate</td></tr>
<tr><td  style=' padding-left:50px'>MH 43 ID 8932</td><td  style=' padding-left:10px'>Yogesh Desai</td><td  style=' padding-left:30px'>92098342498</td><td  style=' padding-left:50px'>5362</td><td  style=' padding-left:50px'>bandra</td></tr>
<tr><td  style=' padding-left:50px'>MH 35 DU 8945</td><td  style=' padding-left:10px'>Omkar Kulkarni</td><td  style=' padding-left:30px'>983742783</td><td  style=' padding-left:50px'>9845</td><td  style=' padding-left:50px'>ghatkopar</td></tr>
<tr><td  style=' padding-left:50px'>MH 65 OS 9984</td><td  style=' padding-left:10px'>Pratik Jadhav</td><td  style=' padding-left:30px'>9279832738</td><td  style=' padding-left:50px'>2028</td><td  style=' padding-left:50px'>kalyan</td></tr>
<tr><td  style=' padding-left:50px'>MH 56	 ME 9631</td><td  style=' padding-left:10px'>Ashok Yadav</td><td  style=' padding-left:30px'>945326235356</td><td  style=' padding-left:50px'>8745</td><td  style=' padding-left:50px'>ulhasnagar</td></tr>

</table>
</form>
        </div>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>




			
			
	
</body>
</html>