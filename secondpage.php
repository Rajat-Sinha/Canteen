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
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="font: 20px Montserrat, sans-serif;line-height: 1.8;color: #f5f6f7;"><a href="secondpage.php">
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
	   <a class="navbar-brand" href="index.php" style="font:30px bold tahoma;color:linen;">Our Online Canteen</a>
	   <canvas id="canvas" width="100" height="72" style="margin-left:100px;margin-top:px;"> </canvas>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
       </button>
      </div>
      <div class="collapse navbar-collapse row" id="myNavbar1">
       <a class="navbar-brand" href="secondpage.php" style="font:30px bold tahoma;color:linen;margin-left:100px;">Welcome 
	    <?php echo $_SESSION['user_name'];?>
	   </a>
	   <a type="submit" class="btn btn-lg" style="margin-left:50px;margin-top:0px;color:red;font:30px bold tahoma" href="logout.php" data-toggle="tooltip" data-placement="bottom" title="If you don't want to place a order,then click on it">LogOut</a>
      </div>
     </div>
    </nav>
   <script>
       $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip(); 
       });
   </script>
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
	    if(isset($_POST['search'])){
			$search=$_POST['search'];
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
	    <form action="" method="POST" enctype="multipart/form-data" class="form-inline">
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
	<form action="" method="POST" enctype="multipart/form-data">
	 <div style="margin-top:40px;">
	 <div class="row">
	   <div class="col-md-4">
	   <!--North indian-->
	      <div class="panel-group">
            <div class="panel panel-default">
	         <div class="panel-heading">
	           <h3 class="panel-title"><a href="#north" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][0]['category'];?></a></h3>
	         </div>
	         <div id="north" class="panel-collapse collapse">
	           <div class="panel-body">
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
		      <div class="panel-footer">
		         
		     </div>
	        </div>
	      </div>
         </div>
		 <!--End of North indian-->
	   </div>
	   <div class="col-md-4">
	   <!--South indian-->
	     <div class="panel-group">
            <div class="panel panel-default">
	         <div class="panel-heading">
	           <h3 class="panel-title"><a href="#south" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][3]['category'];?></a></h3>
	         </div>
	         <div id="south" class="panel-collapse collapse">
	           <div class="panel-body">
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
		      <div class="panel-footer">
		         
		     </div>
	        </div>
	      </div>
         </div>
		 <!--End South indian-->
	   </div>
	   <div class="col-md-4">
	   <!--Fast food-->
	      <div class="panel-group">
            <div class="panel panel-default">
	         <div class="panel-heading">
	           <h3 class="panel-title"><a href="#fast" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][1]['category'];?></a></h3>
	         </div>
	         <div id="fast" class="panel-collapse collapse">
	           <div class="panel-body">
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
		      <div class="panel-footer">
		         
		     </div>
	        </div>
	      </div>
         </div>
		 <!--End of Fast Food-->
	   </div>
	 </div>
	 <!--end of first panel-->
	 <div class="row">
	   <div class="col-md-4">
	   <!--Beveraged Food-->
	      <div class="panel-group">
            <div class="panel panel-default">
	         <div class="panel-heading">
	           <h3 class="panel-title"><a href="#beveraged" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][13]['category'];?></a></h3>
	         </div>
	         <div id="beveraged" class="panel-collapse collapse">
	           <div class="panel-body">
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
		      <div class="panel-footer">
		         
		     </div>
	        </div>
	      </div>
         </div>
		 <!--End of Beveraged Food-->
	   </div>
	   <div class="col-md-4">
	   <!--Chinese Food-->
	     <div class="panel-group">
            <div class="panel panel-default">
	         <div class="panel-heading">
	           <h3 class="panel-title"><a href="#chinese" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][19]['category'];?></a></h3>
	         </div>
	         <div id="chinese" class="panel-collapse collapse">
	           <div class="panel-body">
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
		      <div class="panel-footer">
		         
		     </div>
	        </div>
	      </div>
         </div>
		 <!--End of Chinese Food-->
	   </div>
	   <div class="col-md-4">
	   <!--Packaged Food-->
	      <div class="panel-group">
            <div class="panel panel-default">
	         <div class="panel-heading">
	           <h3 class="panel-title"><a href="#pack" data-toggle="collapse"><?php $data = file_get_contents('json/menu.json');$realData = json_decode($data,true);echo $realData['menu'][12]['category'];?></a></h3>
	         </div>
	         <div id="pack" class="panel-collapse collapse">
	           <div class="panel-body">
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
		      <div class="panel-footer">
		         
		     </div>
	        </div>
	      </div>
         </div>
		 <!--End of Packaged Food-->
	   </div>
	 </div>
	 <!--End of second panel-->
	 </div>
	 <input type="submit" value="Order Now" class="btn btn-lg btn-primary">
	 <?php
	  if(isset($_POST['chola']) || isset($_POST['puri']) || isset($_POST['rice']) || isset($_POST['dosa']) || isset($_POST['idli']) || isset($_POST['vada']) || isset($_POST['maggi']) || isset($_POST['pattis']) || isset($_POST['spring']) || isset($_POST['chicken']) || isset($_POST['coffee']) || isset($_POST['tea'])  || isset($_POST['pepsi']) ||isset($_POST['thumbs']) || isset($_POST['chowmin']) || isset($_POST['momos']) || isset($_POST['spaghetti']) || isset($_POST['lays']) || isset($_POST['kukure']) || isset($_POST['goodday'])){
		 if(!empty($_POST['chola']) || !empty($_POST['puri']) || !empty($_POST['rice']) || !empty($_POST['dosa']) || !empty($_POST['idli']) || !empty($_POST['vada']) || !empty($_POST['maggi']) || !empty($_POST['pattis']) || !empty($_POST['spring']) || !empty($_POST['chicken']) || !empty($_POST['coffee']) || !empty($_POST['tea'])  || !empty($_POST['pepsi']) ||!empty($_POST['thumbs']) || !empty($_POST['chowmin']) || !empty($_POST['momos']) || !empty($_POST['spaghetti']) || !empty($_POST['lays']) || !empty($_POST['kukure']) || !empty($_POST['goodday'])){
		  @session_start();
		  $_SESSION['chola']=$_POST['chola'];
		  $_SESSION['puri']=$_POST['puri'];
		  $_SESSION['rice']=$_POST['rice'];
		  $_SESSION['dosa']=$_POST['dosa'];
	      $_SESSION['idli']=$_POST['idli'];
		  $_SESSION['vada']=$_POST['vada'];
		  $_SESSION['maggi']=$_POST['maggi'];
		  $_SESSION['pattis']=$_POST['pattis'];
		  $_SESSION['spring']=$_POST['spring'];
		  $_SESSION['chicken']=$_POST['chicken'];
		  $_SESSION['coffee']=$_POST['coffee'];
		  $_SESSION['tea']=$_POST['tea'];
		  $_SESSION['pepsi']=$_POST['pepsi'];
		  $_SESSION['thumbs']=$_POST['thumbs'];
		  $_SESSION['chowmin']=$_POST['chowmin'];
		  $_SESSION['momos']=$_POST['momos'];
		  $_SESSION['spaghetti']=$_POST['spaghetti'];
		  $_SESSION['lays']=$_POST['lays'];
		  $_SESSION['kurkure']=$_POST['kurkure'];
		  $_SESSION['goodday']=$_POST['goodday'];
		  /**/
		  $data = file_get_contents('json/menu.json');
	      $realData = json_decode($data,true);
		  $_SESSION['chola_1']=$realData['menu'][0]['item'];
		  $_SESSION['puri_1']=$realData['menu'][2]['item'];
		  $_SESSION['rice_1']=$realData['menu'][8]['item'];
		  $_SESSION['dosa_1']=$realData['menu'][3]['item'];
	      $_SESSION['idli_1']=$realData['menu'][4]['item'];
		  $_SESSION['vada_1']=$realData['menu'][5]['item'];
		  $_SESSION['maggi_1']=$realData['menu'][1]['item'];
		  $_SESSION['pattis_1']=$realData['menu'][6]['item'];
		  $_SESSION['spring_1']=$realData['menu'][7]['item'];
		  $_SESSION['chicken_1']=$realData['menu'][9]['item'];
		  $_SESSION['coffee_1']=$realData['menu'][13]['item'];
		  $_SESSION['tea_1']=$realData['menu'][14]['item'];
		  $_SESSION['pepsi_1']=$realData['menu'][15]['item'];
		  $_SESSION['thumbs_1']=$realData['menu'][16]['item'];
		  $_SESSION['chowmin_1']=$realData['menu'][18]['item'];
		  $_SESSION['momos_1']=$realData['menu'][17]['item'];
		  $_SESSION['spaghetti_1']=$realData['menu'][19]['item'];
		  $_SESSION['lays_1']=$realData['menu'][10]['item'];
		  $_SESSION['kurkure_1']=$realData['menu'][11]['item'];
		  $_SESSION['goodday_1']=$realData['menu'][12]['item'];
		  /*
		  ($_SESSION['chola']<=10) && ($_SESSION['puri']<=10) &&($_SESSION['rice']<=10)&&($_SESSION['dosa']<=10)&&($_SESSION['idli']<=10)&&($_SESSION['vada']<=10)&&($_SESSION['maggi']<=10)&&($_SESSION['pattis']<=10)&&($_SESSION['spring']<=10)&&($_SESSION['chicken']<=10)&&($_SESSION['coffee']<=10)&&($_SESSION['tea']<=10)&&($_SESSION['pepsi']<=10)&&($_SESSION['thumbs']<=10)&&($_SESSION['chowmin']<=10)&&($_SESSION['momos']<=10)&&($_SESSION['spaghetti']<=10)&&($_SESSION['lays']<=10)&&($_SESSION['kurkure']<=10)&&($_SESSION['goodday']<=10)
		  */
		  if(($_SESSION['chola']<=10) && ($_SESSION['puri']<=10) &&($_SESSION['rice']<=10)&&($_SESSION['dosa']<=10)&&($_SESSION['idli']<=10)&&($_SESSION['vada']<=10)&&($_SESSION['maggi']<=10)&&($_SESSION['pattis']<=10)&&($_SESSION['spring']<=10)&&($_SESSION['chicken']<=10)&&($_SESSION['coffee']<=10)&&($_SESSION['tea']<=10)&&($_SESSION['pepsi']<=10)&&($_SESSION['thumbs']<=10)&&($_SESSION['chowmin']<=10)&&($_SESSION['momos']<=10)&&($_SESSION['spaghetti']<=10)&&($_SESSION['lays']<=10)&&($_SESSION['kurkure']<=10)&&($_SESSION['goodday']<=10)){
			  echo '<meta http-equiv="refresh" content="0;url=thirdpage.php"/>';
		  }else{
			  if(($_SESSION['chola']>=10) || ($_SESSION['puri']>=10) &&($_SESSION['rice']>=10)){
				  echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>You Have chosen more than 10 quantity for any item in '.$realData['menu'][0]['category'] .' and you have to reentered data once again...</strong></p> ");</script>';
			  }if(($_SESSION['dosa']>=10)||($_SESSION['idli']>=10)||($_SESSION['vada']>=10)){
				  echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>You Have chosen more than 10 quantity for any item in '.$realData['menu'][3]['category'] .' and you have to reentered data once again...</strong></p> ");</script>';
			  }if(($_SESSION['maggi']>=10)||($_SESSION['pattis']>=10)||($_SESSION['spring']>=10)||($_SESSION['chicken']>=10)){
				  echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>You Have chosen more than 10 quantity for any item in '.$realData['menu'][1]['category'] .' and you have to reentered data once again...</strong></p> ");</script>';
			  }
			  if(($_SESSION['coffee']>=10)||($_SESSION['tea']>=10)||($_SESSION['pepsi']>=10)||($_SESSION['thumbs']>=10)){
				  echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>You Have chosen more than 10 quantity for any item in '.$realData['menu'][13]['category'].' and you have to reentered data once again...</strong></p> ");</script>';
			  }if(($_SESSION['chowmin']>=10)||($_SESSION['momos']>=10)||($_SESSION['spaghetti']>=10)){
				  echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>You Have chosen more than 10 quantity for any item in '.$realData['menu'][19]['category'] .' and you have to reentered data once again...</strong></p> ");</script>';
			  }if(($_SESSION['lays']>=10)||($_SESSION['kurkure']>=10)||($_SESSION['goodday']>=10)){
				  echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>You Have chosen more than 10 quantity for any item in '.$realData['menu'][12]['category'] .' and you have to reentered data once again...</strong></p> ");</script>';
			  }
			 
		  }
		 }else{
			 echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:red;font:18px bold tahoma;margin-top:30px;\"> Error: <strong>You Have not chosen any item...</strong></p> ");</script>';
		 }
	  }
		  
	 ?>
	 
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