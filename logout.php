<!--Website  Created by Rajat Kumar Sinha(2K15)(1st Year) batch Metallurgical and Materials
	Engineering Student of National Institute of Technology, Jamshedpur. For Further 
	information about website contact or mail at "+917762960235" or "sinharajat.858@gmail.com". -->
<html lang="en">
	<head>
		<?php @require '_inc_/Head.inc.php'; ?>
	</head>
	<body>
	<?php
		session_start();
		unset($_SESSION["user_name"]);
		unset($_SESSION['chola']);
		unset($_SESSION['puri']);
		unset($_SESSION['rice']);
		unset($_SESSION['dosa']);
	    unset($_SESSION['idli']);
		unset($_SESSION['vada']);
		unset($_SESSION['maggi']);
		unset($_SESSION['pattis']);
		unset($_SESSION['spring']);
		unset($_SESSION['chicken']);
		unset($_SESSION['coffee']);
		unset($_SESSION['tea']);
		unset($_SESSION['pepsi']);
		unset($_SESSION['thumbs']);
		unset($_SESSION['chowmin']);
		unset($_SESSION['momos']);
		unset($_SESSION['spaghetti']);
		unset($_SESSION['lays']);
		unset($_SESSION['kurkure']);
		unset($_SESSION['goodday']);
		unset($_SESSION['chola_1']);
		unset($_SESSION['puri_1']);
		unset($_SESSION['rice_1']);
		unset($_SESSION['dosa_1']);
	    unset($_SESSION['idli_1']);
		unset($_SESSION['vada_1']);
		unset($_SESSION['maggi_1']);
		unset($_SESSION['pattis_1']);
		unset($_SESSION['spring_1']);
		unset($_SESSION['chicken_1']);
		unset($_SESSION['coffee_1']);
		unset($_SESSION['tea_1']);
		unset($_SESSION['pepsi_1']);
		unset($_SESSION['thumbs_1']);
		unset($_SESSION['chowmin_1']);
		unset($_SESSION['momos_1']);
		unset($_SESSION['spaghetti_1']);
		unset($_SESSION['lays_1']);
		unset($_SESSION['kurkure_1']);
		unset($_SESSION['goodday_1']);
		echo '<script type="text/javascript"> bootbox.alert("<p style=\"color:green;font:33px bold tahoma;\"><strong> Logged out Successfully </strong><br><span style=\"color:green;font:40px bold tahoma;\">Thank You<br>☺ ...</span></p>");</script>';
		$back_addr = 'index.php';
		echo'<meta http-equiv="refresh" content="1.5;url='.$back_addr.'"/>';											
	?>	
	</body>
</html>		