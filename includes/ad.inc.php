<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
	}
	include_once'dbh.inc.php';

	$area=$_POST['Area'];
	$purpose=$_POST['drone'];
	$type=$_POST['type'];
	$subtype=$_POST['subtype'];
	$price=$_POST['price'];
	$size=$_POST['size'];
	$onoma=htmlspecialchars($_SESSION["onoma"]);
	echo $onoma."<br>";

	if($purpose=='Sale')
	{
		$rentsale='1';
	}
	else
	{
		$rentsale='0';
	}

	if($type=="house"){
		$sql = "INSERT INTO akinito(price,register_date,refresh_date,size,Area,Sale_Rent)VALUES ('$price',CURDATE(),CURDATE(),'$size','$area',$rentsale);";
		mysqli_query($conn,$sql);
		$id = mysqli_insert_id($conn);
		$sql= "SELECT idUser from user where Onoma='$onoma';";
		$idUser=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($idUser);
		$idUser=$row['idUser'];
		$sql = "INSERT into kataxorei(idUser,idAkinito)VALUES($idUser,$id);";
		$confirm=mysqli_query($conn,$sql);

		//$sql = "SELECT  idAkinito FROM akinito where price='$price' and size='$size'and Area='$area'and Sale_Rent=$rentsale;";
		//$id=mysqli_query($conn,$sql);
		$rooms=$_POST['rooms'];
		$floor=$_POST['floor'];
		$year=$_POST['year'];

		

		if (isset($_POST['Furnished']) && $_POST['Furnished'] == 'Furnished')
		{
			$Furnished='1';
		}else $Furnished='0';
		if (isset($_POST['Parking']) && $_POST['Parking'] == 'Parking')
		{
			$Parking='1';
		}else $Parking='0';
		if (isset($_POST['Storage_Space']) && $_POST['Storage_Space'] == 'Storage_Space')
		{
			$Storage_Space='1';
		}else $Storage_Space='0';
		if (isset($_POST['Veranda']) && $_POST['Veranda'] == 'Veranda')
		{
			$Veranda='1';
		}else $Veranda='0';
		if (isset($_POST['Safety_Door']) && $_POST['Safety_Door'] == 'Safety_Door')
		{
			$Safety_Door='1';
		}else $Safety_Door='0';
		if (isset($_POST['Air_Conditioning']) && $_POST['Air_Conditioning'] == 'Air_Conditioning')
		{
			$Air_Conditioning='1';
		}else $Air_Conditioning='0';
		if (isset($_POST['Alarm_System']) && $_POST['Alarm_System'] == 'Alarm_System')
		{
			$Alarm_System='1';
		}else $Alarm_System='0';
		if (isset($_POST['Fireplace']) && $_POST['Fireplace'] == 'Fireplace')
		{
			$Fireplace='1';
		}else $Fireplace='0';
		if (isset($_POST['Elevator']) && $_POST['Elevator'] == 'Elevator')
		{
			$Elevator='1';
		}else $Elevator='0';
		if (isset($_POST['View']) && $_POST['View'] == 'View')
		{
			$View='1';
		}else $View='0';
		if (isset($_POST['Garden']) && $_POST['Garden'] == 'Garden')
		{
			$Garden='1';
		}else $Garden='0';
		if (isset($_POST['Pool']) && $_POST['Pool'] == 'Pool')
		{
			$Pool='1';
		}else $Pool='0';
		if (isset($_POST['Penthouse']) && $_POST['Penthouse'] == 'Penthouse')
		{
			$Penthouse='1';
		}else $Penthouse='0';
		if (isset($_POST['Solar_Water_Heater']) && $_POST['Solar_Water_Heater'] == 'Solar_Water_Heater')
		{
			$Solar_Water_Heater='1';
		}else $Solar_Water_Heater='0';


		

		$sql="INSERT INTO home(idHome,Ypokatigoria,Ypnodomatia,Orofos,Etos_kataskeuis,Epipla,Parking,Apothiki,Verada,Porta_Asfalias,Klimatismos,Sinagermos,Tzaki,Elevator,View, Garden,Pool,Retire,Sun_Heater
)VALUES ('$id','$subtype','$rooms','$floor','$year','$Furnished','$Parking','$Storage_Space','$Veranda','$Safety_Door','$Air_Conditioning','$Alarm_System','$Fireplace','$Elevator','$View','$Garden','$Pool','$Penthouse','$Solar_Water_Heater');";
		$confirm=mysqli_query($conn,$sql);

	}

else if($type=="working_place"){
		$sql = "INSERT INTO akinito(price,register_date,refresh_date,size,Area,Sale_Rent)VALUES ('$price',CURDATE(),CURDATE(),'$size','$area',$rentsale);";
		mysqli_query($conn,$sql);
		$id = mysqli_insert_id($conn);
		$sql= "SELECT idUser from user where Onoma='$onoma';";
		$idUser=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($idUser);
		$idUser=$row['idUser'];
		$sql = "INSERT into kataxorei(idUser,idAkinito)VALUES($idUser,$id);";
		$confirm=mysqli_query($conn,$sql);
		echo $confirm;
				//$sql = "SELECT  idAkinito FROM akinito where price='$price' and size='$size'and Area='$area'and Sale_Rent=$rentsale;";
		//$id=mysqli_query($conn,$sql);
		$rooms=$_POST['rooms'];
		$floor=$_POST['floor'];
		$year=$_POST['year'];

		

		if (isset($_POST['Parking']) && $_POST['Parking'] == 'Parking')
		{
			$Parking='1';
		}else $Parking='0';
		if (isset($_POST['Storage_Space']) && $_POST['Storage_Space'] == 'Storage_Space')
		{
			$Storage_Space='1';
		}else $Storage_Space='0';
		if (isset($_POST['Safety_Door']) && $_POST['Safety_Door'] == 'Safety_Door')
		{
			$Safety_Door='1';
		}else $Safety_Door='0';
		if (isset($_POST['Air_Conditioning']) && $_POST['Air_Conditioning'] == 'Air_Conditioning')
		{
			$Air_Conditioning='1';
		}else $Air_Conditioning='0';
		if (isset($_POST['Alarm_System']) && $_POST['Alarm_System'] == 'Alarm_System')
		{
			$Alarm_System='1';
		}else $Alarm_System='0';
		if (isset($_POST['Elevator']) && $_POST['Elevator'] == 'Elevator')
		{
			$Elevator='1';
		}else $Elevator='0';
		if (isset($_POST['Penthouse']) && $_POST['Penthouse'] == 'Penthouse')
		{
			$Penthouse='1';
		}else $Penthouse='0';
		if (isset($_POST['Corner_Building']) && $_POST['Corner_Building'] == 'Corner_Building')
		{
			$Corner_Building='1';
		}else $Corner_Building='0';
		if (isset($_POST['Loading_Dock']) && $_POST['Loading_Dock'] == 'Loading_Dock')
		{
			$Loading_Dock='1';
		}else $Loading_Dock='0';


		

		$sql="INSERT INTO office(idOffice ,Ypokatigoria,Domatia,Orofos,Etos_kataskeuis,Parking,Apothiki,Porta_asfalias,Klimatismos,Sinagermos,Elevator,Retire,Corner,Ramp_Load)
		VALUES ('$id','$subtype','$rooms','$floor','$year','$Parking','$Storage_Space','$Safety_Door','$Air_Conditioning','$Alarm_System','$Elevator','$Penthouse','$Corner_Building','$Loading_Dock');";
		$confirm=mysqli_query($conn,$sql);
		//echo $confirm;
	}
else if($type=="land"){
		$sql = "INSERT INTO akinito(price,register_date,refresh_date,size,Area,Sale_Rent)VALUES ('$price',CURDATE(),CURDATE(),'$size','$area',$rentsale);";
		mysqli_query($conn,$sql);
		$id = mysqli_insert_id($conn);
		$sql= "SELECT idUser from user where Onoma='$onoma';";
		$idUser=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($idUser);
		$idUser=$row['idUser'];
		$sql = "INSERT into kataxorei(idUser,idAkinito)VALUES($idUser,$id);";
		$confirm=mysqli_query($conn,$sql);
		echo $confirm;
		


		//$sql = "SELECT  idAkinito FROM akinito where price='$price' and size='$size'and Area='$area'and Sale_Rent=$rentsale;";
		//$id=mysqli_query($conn,$sql);
		

		

		
		if (isset($_POST['Within_the_Building_Plan']) && $_POST['Within_the_Building_Plan'] == 'Within_the_Building_Plan')
		{
			$Within_the_Building_Plan='1';
		}else $Within_the_Building_Plan='0';
		if (isset($_POST['Corner_Building']) && $_POST['Corner_Building'] == 'Corner_Building')
		{
			$Corner_Building='1';
		}else $Corner_Building='0';
		if (isset($_POST['Residential_Zone']) && $_POST['Residential_Zone'] == 'Residential_Zone')
		{
			$Residential_Zone='1';
		}else $Residential_Zone='0';
		if (isset($_POST['Facade']) && $_POST['Facade'] == 'Facade')
		{
			$Facade='1';
		}else $Facade='0';


		

		$sql="INSERT INTO land(idLand ,Ypokatigoria, Corner,Oikistiki_Zoni,Entos_Sxediou,Prosopsis)
		VALUES ('$id','$subtype','$Corner_Building','$Residential_Zone','$Within_the_Building_Plan','$Facade');";
		$confirm=mysqli_query($conn,$sql);
		//echo $confirm;
	}



	header("Location: ../index.php");
