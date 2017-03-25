<!--Website  Created by Rajat Kumar Sinha(2K15)(1st Year) batch Metallurgical and Materials
	Engineering Student of National Institute of Technology, Jamshedpur. For Further 
	information about website contact or mail at "+917762960235" or "sinharajat.858@gmail.com". -->
<!DOCTYPE html>
<html>
  <head>
    <?php @require '_inc_/Head.inc.php';?>
	
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="font: 20px Montserrat, sans-serif;line-height: 1.8;color: #f5f6f7;">
  <script type="text/javascript">
		function show(){
			bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">Error: <strong> Please Login!!</strong></p> ");	
		}
	</script>
  <?php
	if(isset($_POST['user_name']) &&  isset($_POST['pass_word'])){
		$user_name=strtolower($_POST['user_name']);
		$pass_word=md5($_POST['pass_word']);
		if(!empty($user_name) && !empty($pass_word)){
			$data = file_get_contents('json/users.json');
            $realData = json_decode($data,true);
			$name1=$realData['users'][0]['username'];
			$name2=$realData['users'][1]['username'];
			$name3=$realData['users'][2]['username'];
			$name4=$realData['users'][3]['username'];
			$name5=$realData['users'][4]['username'];
			$name6=$realData['users'][5]['username'];
			$pass1=$realData['users'][0]['password'];
			$pass2=$realData['users'][1]['password'];
			$pass3=$realData['users'][2]['password'];
			$pass4=$realData['users'][3]['password'];
			$pass5=$realData['users'][4]['password'];
			$pass6=$realData['users'][5]['password'];
			if($user_name==$name1 && $pass_word==$pass1){
				session_start();
			$_SESSION["user_name"]=$realData['users'][0]['username'];
			echo '<meta http-equiv="refresh" content="0;url=secondpage.php"/>';
				
			}
			else if($user_name==$name2 && $pass_word==$pass2){
				session_start();
			$_SESSION["user_name"]=$realData['users'][1]['username'];
			echo '<meta http-equiv="refresh" content="0;url=secondpage.php"/>';
			}
			else if($user_name==$name3 && $pass_word==$pass3){
				session_start();
			$_SESSION["user_name"]=$realData['users'][2]['username'];
			echo '<meta http-equiv="refresh" content="0;url=secondpage.php"/>';
			}
			else if($user_name==$name4 && $pass_word==$pass4){
				session_start();
			$_SESSION["user_name"]=$realData['users'][3]['username'];;
			echo '<meta http-equiv="refresh" content="0;url=secondpage.php"/>';
			}
			else if($user_name==$name5 && $pass_word==$pass5){
			session_start();
			$_SESSION["user_name"]=$realData['users'][4]['username'];;
			echo '<meta http-equiv="refresh" content="0;url=secondpage.php"/>';	
			}
			else if($user_name==$name6 && $pass_word==$pass6){
				session_start();
			$_SESSION["user_name"]=$realData['users'][5]['username'];;
			echo '<meta http-equiv="refresh" content="0;url=secondpage.php"/>';
			}
			else{
				echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> <strong>You have entered wrong Username or  Password!!</strong></p> ");</script>';
			}
		}else{
			echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>Username or Password Empty!! </strong></p> ");</script>';
		}
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
       <form action="index.php" method="POST" enctype="multipart/form-data" class="navbar-form navbar-right">
		 <div class="form-group">
		   <input type="text" name="user_name" class="form-control" placeholder="Username"> 
		 </div>
		 <div class="form-group">
		   <input type="password" name="pass_word" class="form-control" placeholder="Password"> 
		 </div>
		<button type="submit" class="btn btn-success">Login</button>
	  </form>
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
   <div class="container-fluid  text-center "    style="background-color:tan;color: #555555; ;width:100% ;height:100%;background:url('image/1.jpg') fixed;width:100% ;height:100%;">
     <p style="font:60px bold tahoma;padding-top: 70px;   padding-bottom: 70px; color:white;">Items Available in Canteen</p>
	 <div class="row" style="margin-top:-40px;">
	   <div class="col-md-2"></div>
	   <div class="col-md-8">
	   <?php
	   $data = file_get_contents('json/menu.json');
       $realData = json_decode($data,true);
	    if(isset($_GET['search'])){
			$search=$_GET['search'];
			if(!empty($search)){
				$food=array($realData['menu'][0]['item'],$realData['menu'][2]['item'],$realData['menu'][8]['item']);
				$food_1=array($realData['menu'][3]['item'],$realData['menu'][4]['item'],$realData['menu'][5]['item']);
				$food_2=array($realData['menu'][1]['item'],$realData['menu'][6]['item'],$realData['menu'][7]['item'],$realData['menu'][9]['item']);
				$food_3=array($realData['menu'][13]['item'],$realData['menu'][14]['item'],$realData['menu'][15]['item'],$realData['menu'][16]['item']);
				$food_4=array($realData['menu'][18]['item'],$realData['menu'][17]['item'],$realData['menu'][19]['item']);
				$food_5=array($realData['menu'][10]['item'],$realData['menu'][11]['item'],$realData['menu'][12]['item']);
				
				if($search==$food[0] || $search==$food[1] || $search==$food[2]){
				 echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"><strong>You Will Find This In '.$realData['menu'][0]['category'].'!! </strong></p> ");</script>';				 
				}
				else if($search==$food_1[0] || $search==$food_1[1] || $search==$food_1[2]){
				 echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"><strong>You Will Find This '.$realData['menu'][3]['category'].'!! </strong></p> ");</script>';
				}
				else if($search==$food_2[0] || $search==$food_2[1] || $search==$food_2[2]){
				 echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"><strong>You Will Find This In '.$realData['menu'][1]['category'].'!! </strong></p> ");</script>';
				}
				else if($search==$food_3[0] || $search==$food_3[1] || $search==$food_3[2]){
				 echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"><strong>You Will Find This In '.$realData['menu'][13]['category'].'!! </strong></p> ");</script>';
				}
				else if($search==$food_4[0] || $search==$food_4[1] || $search==$food_4[2]){
				 echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"><strong>You Will Find This In '.$realData['menu'][19]['category'].'!! </strong></p> ");</script>';
				}
				else if($search==$food_5[0] || $search==$food_5[1] || $search==$food_5[2]){
				 echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"><strong>You Will Find This In '.$realData['menu'][12]['category'].'!! </strong></p> ");</script>';
				}
				else{
					echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>Soory!! It is not available in our canteen... </strong></p> ");</script>';
				}
			}else{
				echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>Please Fill The Form!! </strong></p> ");</script>';
			}
		}
	   ?>
	   
	    <form action="index.php" method="GET" enctype="multipart/form-data" class="form-inline">
	     <div class="form-group">
			<div class="input-group input-group-lg">
		      <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-youtube-play fa-lg"></i></span>
		      <input type="text" name="search" class="form-control" size="50" placeholder="Search The Item. . . ." aria-describedby="sizing-addon1"/>
		      <span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search fa-lg"></i></button></span>
		   </div>
		</div>
		</form>
	   </div>
	   <div class="col-md-2"></div>
	 </div>
	<div style="margin-top:40px;">
	 <div class="row">
	  <div class="col-md-4">
	   <div class="panel-group">
        <div class="panel panel-default">
	      <div class="panel-heading">
	       <h3 class="panel-title"><a href="#north" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][0]['category'];?></a></h3>
	     </div>
	     <div id="north" class="panel-collapse collapse">
	     <div class="panel-body" style="background-color:dimgray;">		 
               <table class="table table-bordered table-hover table-condensed table-striped">
                    <thead  style="background-color:cadetblue;color:white;">
	                    <tr>
	                      <td>Item Id</td>
		                  <td>Item Name</td>
		                  <td>Cost Per Item</td>
						  <td>Quantity of Items</td>
	                    </tr>
	               </thead>
	               <tbody style="background-color:ghostwhite;">
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][0]['itemId'];?></td>
		                 <td name="chola_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][0]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][0]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control"  name="chola" placeholder="quantity"></div></td>
	                 </tr>
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][2]['itemId'];?></td>
		                 <td name="puri_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][2]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][2]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control"  name="puri" placeholder="quantity"></div></td>
	                 </tr>
					 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][8]['itemId'];?></td>
		                 <td name="rice_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][8]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][8]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="rice"  placeholder="quantity"></div></td>
	                 </tr>
	             </tbody>
                </table> 			  
		 </div>
	   </div>
	 </div>
   </div>
  </div>
  <div class="col-md-4">
	   <div class="panel-group">
        <div class="panel panel-default">
	      <div class="panel-heading">
	       <h3 class="panel-title"><a href="#south" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][3]['category'];?></a></h3>
	     </div>
	     <div id="south" class="panel-collapse collapse">
	     <div class="panel-body" style="background-color:dimgray;">
            <table class="table table-bordered table-hover">
                    <thead style="background-color:cadetblue;color:white;">
	                    <tr>
	                      <td>Item Id</td>
		                  <td>Item Name</td>
		                  <td>Cost Per Item</td>
						  <td>Quantity of Items</td>
	                    </tr>
	               </thead>
	               <tbody style="background-color:ghostwhite;">
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][3]['itemId'];?></td>
		                 <td name="dhosa_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][3]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][3]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="dosa"  placeholder="quantity"></div></td>
	                 </tr>
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][4]['itemId'];?></td>
		                 <td name="idli_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][4]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][4]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text"  class="form-control" name="idli" placeholder="quantity"></div></td>
	                 </tr>
					 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][5]['itemId'];?></td>
		                 <td name="vada_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][5]['pricePerItem'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][5]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="vada"  placeholder="quantity"></div></td>
	                 </tr>
	             </tbody>
                </table>			
		 </div>
	   </div>
	 </div>
   </div>
  </div>
  <div class="col-md-4">
	   <div class="panel-group">
        <div class="panel panel-default">
	      <div class="panel-heading">
	       <h3 class="panel-title"><a href="#fast" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][1]['category'];?></a></h3>
	     </div>
	     <div id="fast" class="panel-collapse collapse">
	     <div class="panel-body" style="background-color:dimgray;">
			<table class="table table-bordered table-hover">
                    <thead style="background-color:cadetblue;color:white;">
	                    <tr>
	                      <td>Item Id</td>
		                  <td>Item Name</td>
		                  <td>Cost Per Item</td>
						  <td>Quantity of Items</td>
	                    </tr>
	               </thead>
	               <tbody style="background-color:ghostwhite;">
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][1]['itemId'];?></td>
		                 <td name="maggi_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][1]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][1]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="maggi"  placeholder="quantity"></div></td>
	                 </tr>
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][6]['itemId'];?></td>
		                 <td name="pattis_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][6]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][6]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="pattis"  placeholder="quantity"></div></td>
	                 </tr>
					 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][7]['itemId'];?></td>
		                 <td name="spring_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][7]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][7]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="spring"  placeholder="quantity"></div></td>
	                 </tr>
					 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][9]['itemId'];?></td>
		                 <td name="chicken_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][9]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][9]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="chicken"  placeholder="quantity"></div></td>
	                 </tr>
	             </tbody>
                </table>	 
		 </div>
	   </div>
	 </div>
   </div>
  </div>
   </div>
	 <!--end of first panel-->
	 <div style="margin-top:40px;">
	 <div class="row">
	  <div class="col-md-4">
	   <div class="panel-group">
        <div class="panel panel-default">
	      <div class="panel-heading">
	       <h3 class="panel-title"><a href="#beveraged" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][13]['category'];?></a></h3>
	     </div>
	     <div id="beveraged" class="panel-collapse collapse">
	      <div class="panel-body" style="background-color:dimgray;">		 
            <table class="table table-bordered table-hover">
                    <thead style="background-color:cadetblue;color:white;">
	                    <tr>
	                      <td>Item Id</td>
		                  <td>Item Name</td>
		                  <td>Cost Per Item</td>
						  <td>Quantity of Items</td>
	                    </tr>
	               </thead>
	               <tbody style="background-color:ghostwhite;">
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][13]['itemId'];?></td>
		                 <td name="coffee_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][13]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][13]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="coffee"  placeholder="quantity"></div></td>
	                 </tr>
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][14]['itemId'];?></td>
		                 <td name="tea_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][14]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][14]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="tea"  placeholder="quantity"></div></td>
	                 </tr>
					 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][15]['itemId'];?></td>
		                 <td name="pepsi_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][15]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][15]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control"  name="pepsi" placeholder="quantity"></div></td>
	                 </tr>
					 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][16]['itemId'];?></td>
		                 <td name="thumbs_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][16]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][16]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="thumbs"  placeholder="quantity"></div></td>
	                 </tr>
	             </tbody>
                </table>  			  
		  </div>
	   </div>
	 </div>
   </div>
  </div>
  <div class="col-md-4">
	   <div class="panel-group">
        <div class="panel panel-default">
	      <div class="panel-heading">
	       <h3 class="panel-title"><a href="#chinese" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][19]['category'];?></a></h3>
	     </div>
	     <div id="chinese" class="panel-collapse collapse">
	     <div class="panel-body" style="background-color:dimgray;">
           	<table class="table table-bordered table-hover">
                    <thead style="background-color:cadetblue;color:white;">
	                    <tr>
	                      <td>Item Id</td>
		                  <td>Item Name</td>
		                  <td>Cost Per Item</td>
						  <td>Quantity of Items</td>
	                    </tr>
	               </thead>
	               <tbody style="background-color:ghostwhite;">
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][17]['itemId'];?></td>
		                 <td name="momos_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][17]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][17]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="momos"  placeholder="quantity"></div></td>
	                 </tr>
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][18]['itemId'];?></td>
		                 <td name="chowmin_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][18]['item'];?></td>
						 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][18]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="chowmin" placeholder="quantity"></div></td>
	                 </tr>
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][19]['itemId'];?></td>
		                 <td name="spaghetti_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][19]['item'];?></td>
						 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][19]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="spaghetti" placeholder="quantity"></div></td>
	                 </tr> 
	             </tbody>
                </table>		
		 </div>
	   </div>
	 </div>
   </div>
  </div>
  <div class="col-md-4">
	   <div class="panel-group">
        <div class="panel panel-default">
	      <div class="panel-heading">
	       <h3 class="panel-title"><a href="#pack" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][12]['category'];?></a></h3>
	     </div>
	     <div id="pack" class="panel-collapse collapse">
	     <div class="panel-body" style="background-color:dimgray;">
		   <table class="table table-bordered table-hover">
                    <thead style="background-color:cadetblue;color:white;">
	                    <tr>
	                      <td>Item Id</td>
		                  <td>Item Name</td>
		                  <td>Cost Per Item</td>
						  <td>Quantity of Items</td>
	                    </tr>
	               </thead>
	               <tbody style="background-color:ghostwhite;">
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][10]['itemId'];?></td>
		                 <td name="lays_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][10]['item'];?></td>
		                 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][10]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="lays"   placeholder="quantity"></div></td>
	                 </tr>
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][11]['itemId'];?></td>
		                 <td name="kukure_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][11]['item'];?></td>
						 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][11]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="kurkure"  placeholder="quantity"></div></td>
	                 </tr>
	                 <tr>
	                     <td><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][12]['itemId'];?></td>
		                 <td name="goodday_1"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][12]['item'];?></td>
						 <td>Rs.<?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][12]['pricePerItem'];?></td>
						 <td><div class="form-group"><input type="text" class="form-control" name="goodday"  placeholder="quantity"></div></td>
	                 </tr> 
	             </tbody>
                </table>		 
		 </div>
	   </div>
	 </div>
   </div>
  </div>
   </div>
	 <!--End of second panel-->
	 </div>
	 <!--End of second panel-->
	 </div>
	 <!---->
	 <script type="text/javascript">
		function showdata(){
			bootbox.alert("<p style=\"color:orange;font:18px bold tahoma;\">Error: <strong>To Place a order Please Login!!</strong></p> ");	
		}
	</script>
		<p><a   <?php if(0){echo '';}else{echo 'onclick="showdata();"';}?> class="btn btn-primary btn-lg" >Order Now</a> </p>
	</form>
	<div style="margin-top:50px;"></div>
   </div>
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