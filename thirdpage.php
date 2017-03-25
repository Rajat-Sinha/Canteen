<!--Website  Created by Rajat Kumar Sinha(2K15)(1st Year) batch Metallurgical and Materials
	Engineering Student of National Institute of Technology, Jamshedpur. For Further 
	information about website contact or mail at "+917762960235" or "sinharajat.858@gmail.com". -->
<!DOCTYPE html>
<html>
 <head>
   <?php 
   @session_start();
   @require '_inc_/Head.inc.php';?>
 </head>
 <body style="background:url('image/3.jpg') fixed;width:100% ;height:100%;">
 <?php 
  ob_start();
  ?>
  <?php
   if(empty($_SESSION['user_name']) || empty($_SESSION['password'])){
	 die('<script type="text/javascript"> bootbox.alert("<p style=\"color:darkred;font:18px bold tahoma;margin-top:30px;\"> <strong>Please Login.........</strong></p> ");</script>');   
   }
  ?>
   <nav class="navbar navbar-default" style="padding-top: 15px;padding-bottom: 15px;border: 0;border-radius: 0; margin-bottom: 0; font-size: 12px; letter-spacing: 5px;">
    <div class="container">
      <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
       </button>
       <a class="navbar-brand" href="index.php" style="font:30px bold tahoma;color:linen;">Our Online Canteen</a>
	   <canvas id="canvas" width="100" height="72" style="margin-left:100px;margin-top:px;"> </canvas>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
       <a class="navbar-brand" href="secondpage.php" style="font:30px bold tahoma;color:linen;margin-left:100px;">Welcome 
	    <?php echo $_SESSION['user_name'];?>
	   </a>
	   <a type="submit" class="btn btn-lg" style="margin-left:50px;margin-top:0px;color:red;font:30px bold tahoma"  href="logout.php" data-toggle="tooltip" data-placement="bottom" title="If you have click on the conform button for sending entered data at counter ,then click on it to LOGOUT">LogOut</a>
      </div>
     </div>
    </nav>
   <div class="container-fluid  text-center"    style="background-color:gray;color:white;">
      <div class="col-md-3">
	    <img alt="Indian Institute of Engineering, Science and Technology, Shibpur" class="img img-responsive" src="image/IIEST_logo.png" />
	  </div>
	  <div  class="col-md-9">
	      <h2 style="font:30px bold tahoma;">IIEST, Shibpur</h2>
          <h3 style="font:20px bold tahoma;">Indian Institute of Engineering Science and Technology, Shibpur</h3>
		  <h3 style="font:20px bold tahoma">(Formerly Bengal Engineering and Science University, Shibpur)</h3>
          <h3 style="font:20px bold tahoma"><em>Empowering the nation since 1856</em></h3>
	  </div>
   </div>
     <p class="jumbotron" style="font:60px bold tahoma;text-align:center;color:black;">Your Order</p>
	 <div class="row" style="background-color:rgba(146,125,218,0.0);background-image:url('') fixed;width:100% ;height:100%;">
	 <div class="col-md-6">
	 <p class="well" style="font:35px bold tahoma;text-align:center;color:black;">Total Quantity Ordered</p>
	 <div style="border:1px solid blue;background-image:url('image/2.jpg');">
   <p class="well" style="font:30px bold tahoma;text-align:center;color:black;"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][0]['category'];?></p>
   <div class="row" style="margin-bottom:40px;">
   <?php 
   
   if($_SESSION['chola']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['chola_1'].'='.$_SESSION['chola'].' plate</div>';
   }
   if($_SESSION['puri']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['puri_1'].'='.$_SESSION['puri'].' plate</div>';
   }
   if($_SESSION['rice']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['rice_1'].'='.$_SESSION['rice'].' plate</div>';
   }
   ?>
   </div>
   <p class="well" style="font:30px bold tahoma;text-align:center;color:black;"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][3]['category'];?></p>
   <div class="row" style="margin-bottom:40px;">
   <?php
   if($_SESSION['dosa']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['dosa_1'].'='.$_SESSION['dosa'].' plate</div>';
   }
   if($_SESSION['idli']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['idli_1'].'='.$_SESSION['idli'].' plate</div>';
   }
   if($_SESSION['vada']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['vada_1'].'='.$_SESSION['vada'].' plate</div>';
   }
   ?>
   </div>
   <p class="well" style="font:30px bold tahoma;text-align:center;color:black;"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][1]['category'];?></p>
   <div class="row" style="margin-bottom:40px;">
   <?php
   if($_SESSION['maggi']!=null){
	   echo '<div class="col-md-3" style="font:25px bold tahoma;"><br>'.$_SESSION['maggi_1'].'='.$_SESSION['maggi'].' packet</div>';
   }
   if($_SESSION['pattis']!=null){
	   echo '<div class="col-md-3" style="font:25px bold tahoma;"><br>'.$_SESSION['pattis_1'].'='.$_SESSION['pattis'].' piece</div>';
   }
   if($_SESSION['spring']!=null){
	   echo '<div class="col-md-3" style="font:25px bold tahoma;"><br>'.$_SESSION['spring_1'].'='.$_SESSION['spring'].' piece</div>';
   }
   if($_SESSION['chicken']!=null){
	   echo '<div class="col-md-3" style="font:25px bold tahoma;"><br>'.$_SESSION['chicken_1'].'='.$_SESSION['chicken'].' piece</div>';
   }
   ?>
   </div>
   <p class="well" style="font:30px bold tahoma;text-align:center;color:black;"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][13]['category'];?></p>
   <div class="row" style="margin-bottom:40px;">
   <?php
   if($_SESSION['coffee']!=null){
	   echo '<div class="col-md-3" style="font:25px bold tahoma;"><br>'.$_SESSION['coffee_1'].'='.$_SESSION['coffee'].' cup</div>';
   }
   if($_SESSION['tea']!=null){
	   echo '<div class="col-md-3" style="font:25px bold tahoma;"><br>'.$_SESSION['tea_1'].'='.$_SESSION['tea'].' cup</div>';
   }
   if($_SESSION['pepsi']!=null){
	   echo '<div class="col-md-3" style="font:25px bold tahoma;"><br>'.$_SESSION['pepsi_1'].'='.$_SESSION['pepsi'].' bottle</div>';
   }
   if($_SESSION['thumbs']!=null){
	   echo '<div class="col-md-3" style="font:25px bold tahoma;"><br>'.$_SESSION['thumbs_1'].'='.$_SESSION['thumbs'].' bottle</div>';
   }
   ?>
   </div>
   <p class="well" style="font:30px bold tahoma;text-align:center;color:black;"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][19]['category'];?></p>
   <div class="row" style="margin-bottom:40px;">
   <?php
   if($_SESSION['chowmin']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['chowmin_1'].'='.$_SESSION['chowmin'].' plate</div>';
   }
   if($_SESSION['momos']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['momos_1'].'='.$_SESSION['momos'].' plate</div>';
   }
   if($_SESSION['spaghetti']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['spaghetti_1'].'='.$_SESSION['spaghetti'].' plate</div>';
   }
   ?>
   </div>
   <p class="well" style="font:30px bold tahoma;text-align:center;color:black;"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][12]['category'];?></p>
    <div class="row" style="margin-bottom:40px;">
   <?php
   if($_SESSION['lays']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['lays_1'].'='.$_SESSION['lays'].' packet</div>';
   }
   if($_SESSION['kurkure']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['kurkure_1'].'='.$_SESSION['kurkure'].' packet</div>';
   }
   if($_SESSION['goodday']!=null){
	   echo '<div class="col-md-4" style="font:25px bold tahoma;"><br>'.$_SESSION['goodday_1'].'='.$_SESSION['goodday'].' packet</div>';
   }
   
   ?>
   </div>
   </div>
   </div>
   <div class="col-md-6">
     <p class="well" style="font:35px bold tahoma;text-align:center;color:black;">Price of Total Quantity Ordered</p>
	 <div class="row">
	 <div class="col-md-4"></div>
	 <div class="col-md-4">
	 <?php
   $data = file_get_contents('json/menu.json');
	$realData = json_decode($data,true);
   if(1){
	if($_SESSION['chola']!=null){
	   $chola=$_SESSION['chola']*$realData['menu'][0]['pricePerItem'];
	   echo '<div style="font:25px bold tahoma;">Rs. '.$_SESSION['chola'].'*'. $realData['menu'][0]['pricePerItem'] .'= '.$chola.'<br></div>';
   }else{
	   $chola=0;
	   echo '<div style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['puri']!=null){
	   $puri=$_SESSION['puri']*$realData['menu'][2]['pricePerItem'];
	   echo '<div style="font:25px bold tahoma;">Rs. '.$_SESSION['puri'].' *'. $realData['menu'][2]['pricePerItem'].'= '.$puri.'<br></div>';
   }else{
	   $puri=0;
	   echo '<div style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['rice']!=null){
	   $rice=$_SESSION['rice']*$realData['menu'][8]['pricePerItem'];
	   echo '<div style="font:25px bold tahoma;">Rs. '.$_SESSION['rice'].' * '.$realData['menu'][8]['pricePerItem'].' = '.$rice.'<br></div>';
   }else{
	   $rice=0;
	   echo '<div style="font:25px bold tahoma;"></div>';
   }
}
if(1){
 if($_SESSION['dosa']!=null){
	   $dosa=$_SESSION['dosa']*$realData['menu'][3]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['dosa'].' * '.$realData['menu'][3]['pricePerItem'].'= '.$dosa.'<br></div>';
   }else{
	   $dosa=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }	
}
if(1){
	if($_SESSION['idli']!=null){
	   $idli=$_SESSION['idli']*$realData['menu'][4]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['idli'].' * '.$realData['menu'][4]['pricePerItem'].' = '.$idli.'<br></div>';
   }else{
	  $idli=0;
	   echo '<div  style="font:25px bold tahoma;"></div>'; 
   }
}
if(1){
	if($_SESSION['vada']!=null)
	{
		$vada=$_SESSION['vada']*$realData['menu'][5]['pricePerItem'];
		echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['vada'].' * '.$realData['menu'][5]['pricePerItem'].'= '.$vada.'<br></div>';
	}else
	{
		$vada=0;
		echo '<div  style="font:25px bold tahoma;"></div>';
	}
}
if(1){
	if($_SESSION['maggi']!=null){
	   $maggi=$_SESSION['maggi']*$realData['menu'][1]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['maggi'].' * '.$realData['menu'][1]['pricePerItem'].'= '.$maggi.'<br></div>';
   }else{
	   $maggi=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['pattis']!=null){
	   $pattis=$_SESSION['pattis']*$realData['menu'][6]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['pattis'].' * '.$realData['menu'][6]['pricePerItem'].' = '.$pattis.'<br></div>';
   }else{
	   $pattis=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['spring']!=null){
	   $spring=$_SESSION['spring']*$realData['menu'][7]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['spring'].' * '.$realData['menu'][7]['pricePerItem'].'= '.$spring.'<br></div>';
   }else{
	   $spring=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['chicken']!=null){
	   $chicken=$_SESSION['chicken']*$realData['menu'][9]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['chicken'].' * '.$realData['menu'][9]['pricePerItem'].'= '.$chicken.'<br></div>';
   }else{
	   $chicken=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['coffee']!=null){
	   $coffee=$_SESSION['coffee']*$realData['menu'][13]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['coffee'].' * '.$realData['menu'][13]['pricePerItem'].'= '.$coffee.'<br></div>';
   }else{
	   $coffee=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['tea']!=null){
	   $tea=$_SESSION['tea']*$realData['menu'][14]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['tea'].'* '.$realData['menu'][14]['pricePerItem'].'= '.$tea.'<br></div>';
   }else{
	    $tea=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['pepsi']!=null){
	   $pepsi=$_SESSION['pepsi']*$realData['menu'][15]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['pepsi'].' * '.$realData['menu'][15]['pricePerItem'].'= '.$pepsi.'<br></div>';
   }else{
	   $pepsi=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['thumbs']!=null){
	   $thumbs=$_SESSION['thumbs']*$realData['menu'][16]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['thumbs'].' * '.$realData['menu'][16]['pricePerItem'].'= '.$thumbs.'<br></div>';
   }else{
	   $thumbs=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['chowmin']!=null){
	   $chowmin=$_SESSION['chowmin']*$realData['menu'][18]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['chowmin'].' * '.$realData['menu'][18]['pricePerItem'].'= '.$chowmin.'<br></div>';
   }else{
	   $chowmin=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['momos']!=null){
	   $momos=$_SESSION['momos']*$realData['menu'][17]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['momos'].' * '.$realData['menu'][17]['pricePerItem'].'= '.$momos.'<br></div>';
   }else{
	   $momos=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['spaghetti']!=null){
	   $spaghetti=$_SESSION['spaghetti']*$realData['menu'][19]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['spaghetti'].' * '.$realData['menu'][19]['pricePerItem'].'= '.$spaghetti.'<br></div>';
   }else{
	   $spaghetti=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
if($_SESSION['lays']!=null){
	   $lays=$_SESSION['lays']*$realData['menu'][10]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['lays'].' * '.$realData['menu'][10]['pricePerItem'].'= '.$lays.'<br></div>';
   }else{
	   $lays=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }	
}
if(1){
	if($_SESSION['kurkure']!=null){
	   $kurkure=$_SESSION['kurkure']*$realData['menu'][11]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['kurkure'].' * '.$realData['menu'][11]['pricePerItem'].'= '.$kurkure.'<br></div>';
   }else{
	   $kurkure=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
   }
}
if(1){
	if($_SESSION['goodday']!=null){
	   $goodday=$_SESSION['goodday']*$realData['menu'][12]['pricePerItem'];
	   echo '<div  style="font:25px bold tahoma;">Rs. '.$_SESSION['goodday'].' * '.$realData['menu'][12]['pricePerItem'].'= '.$goodday.'</div>';
	   echo '<hr>';
   }else{
	   $goodday=0;
	   echo '<div  style="font:25px bold tahoma;"></div>';
	   echo '<hr>';
   }
}
   $total=$chola+$puri+$rice+$dosa+$idli+$vada+$maggi+$pattis+$spring+$chicken+$coffee+$tea+$pepsi+$thumbs+$chowmin+$momos+$spaghetti+$lays+$kurkure+$goodday;
   echo '<div  style="font:30px bold tahoma;">Rs. '.$total.'<br></div>';
   $_SESSION['total']=$chola+$puri+$rice+$dosa+$idli+$vada+$maggi+$pattis+$spring+$chicken+$coffee+$tea+$pepsi+$thumbs+$chowmin+$momos+$spaghetti+$lays+$kurkure+$goodday;
   
   ?>
   
	 </div>
	 <div class="col-md-4"></div>
	 </div>
   </div>
   </div>
   <script type="text/javascript">
     function showdata(){
		  bootbox.alert("<p style=\"color:blue;font:22px bold tahoma;margin-top:30px;\">Your Order is going to ready in 30 mins,Please collect your order from canteen And Your <strong>Order No. is <?php orderno();?> and Pay Rs.<?php echo $_SESSION['total'];?> at counter.</strong></p><span style=\"color:red\">*Please LogOut Your Account</span> ");
	 }
   </script>
   <?php
function orderno(){
function non_unique_hit_count(){
	$filename='count.txt';
	$handle=fopen($filename,'r');
	$current=fread($handle,filesize($filename));
	fclose($handle);
	$current_inc=$current+1;
	
	$handle=fopen($filename,'w');
	fwrite($handle,$current_inc);
	fclose($handle);
	
}
non_unique_hit_count();
$filename='count.txt';
$handle=fopen($filename,'r');
$datain=fread($handle,filesize($filename));
$names4_array=explode(',',$datain);
foreach($names4_array as $name){
	echo $name.'.<br>';
}
}
?>
   <script>
       $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip(); 
       });
   </script>
   <ul class="pager">
     <li class="next next-lg"><a onclick="showdata();" data-toggle="tooltip" data-placement="left" title="Please click on conform to order the quantity you need" >Conform</a></li>
	 <li class="previous"><a href="secondpage.php" data-toggle="tooltip" data-placement="right" title="If you go back then you will loose your current data">Go Back</a></li>
   </ul>
   <footer id="t3-footer" class="wrap t3-footer" style="padding-top:80px;padding-bottom:40px;background-color:whitesmoke;">
  <div class="container">
    <div class="t3-spotlight t3-footer-sl  row">
	  <div class=" col-lg-4 col-md-4 col-sm-5 col-xs-12">
		<div class="t3-module module " id="Mod272">
		  <div class="module-inner">
		    <h3 class="module-title ">
			  <span style="color:blue;font:25px bold tahoma;">Contact Us</span>
			</h3>
			<div class="module-ct">
             <div class="custom"  >
	          <p style="color:slategray;font:15px bold tahoma;">Indian Institute of Engineering Science and Technology, Shibpur</p>
              <p style="color:slategray;font:15px bold tahoma;">P.O. - Botanic Garden</p>
              <p style="color:slategray;font:15px bold tahoma;">Howrah - 711103</p>
              <p style="color:slategray;font:15px bold tahoma;">West Bengal, India</p>
              <p style="color:slategray;font:15px bold tahoma;">Ph. No. : +91 (033) 2668 4561 to 63</p>
              <p style="color:slategray;font:15px bold tahoma;">Fax : +91 (033) 2668 2916</p>
              <p style="color:slategray;font:15px bold tahoma;"><a href="#">Chief Vigilance Officer</a></p>
              <p style="color:slategray;font:15px bold tahoma;"><a href="#">Right to Information Act</a></p>
             </div>
            </div>
		 </div>
		</div>
	  </div>
	  <div class="  col-lg-3 hidden-lg   col-md-3 hidden-md   col-sm-3 hidden-sm   col-xs-6 hidden-xs ">&nbsp;</div>
	  <div class=" col-lg-8 col-md-8 col-sm-7 col-xs-12">
		<div class="t3-module module " id="Mod348">
		  <div class="module-inner">
		    <h3 class="module-title ">
			  <span style="color:blue;font:25px bold tahoma;">IIEST Map</span>
			</h3>
			<div class="module-ct">
			 <div class="custom"  >
	          <div class="iiest-footer">
                <div class="google-maps">
				  <iframe height="225" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29477.1244430756!2d88.31419250847286!3d22.555133749483755!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc6ee508c74cf031d!2sIndian+Institute+of+Engineering+and+Science+Technology%2CShibpur!5e0!3m2!1sen!2sin!4v1405954748449" width="100%">
				  </iframe>
				</div>
              </div>
			 </div>
            </div>
		  </div>
		 </div>
		</div>
		<div class="  col-lg-3 hidden-lg   col-md-3 hidden-md   col-sm-3 hidden-sm   col-xs-12 hidden-xs ">&nbsp;</div>
	   </div>
	  </div>
	  <section class="t3-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12 copyright "></div>
			</div>
		</div>
	</section>
   </footer>
<div class="container-fluid custom-copyright text-center" style="background-color:blue;color:white;font:15px bold tahoma;padding-top:10px;">
    <p>&copy; Indian Institute of Engineering Science and Technology, 2016</p>
  </div>
  <script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
 </body>
</html>
