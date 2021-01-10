<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
	}
	include_once'dbh.inc.php';

	$area=$_POST['poleis'];
	$purpose=$_POST['drone'];
	$type=$_POST['type'];
	$subtype=$_POST['subtype'];

	$minPrice=$_POST['minPrice'];
	$maxPrice=$_POST['maxPrice'];
	$minSize=$_POST['minSize'];
	$maxSize=$_POST['maxSize'];
	$onoma=htmlspecialchars($_SESSION["onoma"]);
	$age=$_POST['age'];
	$refresh=$_POST['refresh'];

	$currdate=date("Y-m-d");
	if($age!=0){
		$i = new DateInterval($age.' days');
		$age=date_diff($currdate,$i);
	}else {
		$age=$currdate;
	}
	
	if($refresh!=0){
		$j = new DateInterval($refresh.' days');
		$refresh=date_diff($currdate,$j);
	}else{
		$refresh=$currdate;
	}
	
	
	
	
	//echo $age."<br>";
	// $refresh;

	if($purpose=='Sale')
	{
		$rentsale='1';
	}
	else
	{
		$rentsale='0';
	}
	

	if($type=="house"){
		
		
		
		$maxrooms=$_POST['maxrooms'];
		$minfloor=$_POST['minfloor'];
		$maxfloor=$_POST['maxfloor'];
		$minyear=$_POST['minyear'];
		$maxyear=$_POST['maxyear'];
		$minrooms=$_POST['minrooms'];

		

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


		//and DATEDIFF($age,register_date)>=0 and  DATEDIFF($refresh,register_date)>=0 and Sale_Rent='$rentsale'
		if($subtype=='Everything')
		{
			$sql="SELECT * FROM akinito join home on idAkinito=idHome
			WHERE price >= $minPrice  and price <= $maxPrice and size>=$minSize and size<=$maxSize and Area='$area' and Sale_Rent=$rentsale and Ypnodomatia>=$minrooms and Ypnodomatia<=$maxrooms and Orofos>=$minfloor and Orofos<=$maxfloor and Etos_kataskeuis>=$minyear and Etos_kataskeuis <= $maxyear and Epipla>=$Furnished and Parking>=$Parking and Apothiki>=$Storage_Space and Verada>=$Veranda and Porta_asfalias >= $Safety_Door and Klimatismos>=$Air_Conditioning and Sinagermos>=$Alarm_System and Tzaki>=$Fireplace and Elevator>=$Elevator and View>=$View and Garden>=$Garden and Pool>=$Pool and Retire>=$Penthouse and Sun_Heater >= $Solar_Water_Heater and DATEDIFF('$age',register_date)>='0' and  DATEDIFF('$refresh',register_date)>='0';";
			$data=mysqli_query($conn,$sql);

		}
		else{
			$sql="SELECT * FROM akinito join home on idAkinito=idHome
			WHERE price >= $minPrice and price <= $maxPrice and DATEDIFF('$age',register_date)>='0' and  DATEDIFF('$refresh',register_date)>='0' and size>=$minSize and size<=$maxSize and Area=$area and Sale_Rent=$rentsale and Ypokatigoria=$subtype and Ypnodomatia>=$minrooms and Ypnodomatia<=$maxrooms and Orofos>=$minfloor and Orofos<=$maxfloor and Etos_kataskeuis>=$minyear and Etos_kataskeuis <= $maxyear and Epipla>=$Furnished and Parking>=$Parking and Apothiki>=$Storage_Space and Verada>=$Veranda and Porta_asfalias >= $Safety_Door and Klimatismos>=$Air_Conditioning and Sinagermos>=$Alarm_System and Tzaki>=$Fireplace and Elevator>=$Elevator and View>=$View and Garden>=$Garden and Pool>=$Pool and Retire>=$Penthouse and Sun_Heater >= $Solar_Water_Heater;
			";
			$data=mysqli_query($conn,$sql);
		}

	}

else if($type=="working_place"){
		
		$minrooms=$_POST['minrooms'];
		$maxrooms=$_POST['maxrooms'];
		$minfloor=$_POST['minfloor'];
		$maxfloor=$_POST['maxfloor'];
		$minyear=$_POST['minyear'];
		$maxyear=$_POST['maxyear'];
		

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


		if($subtype=='Everything')
		{
				$sql="SELECT * FROM akinito join office on idAkinito=idOffice
			WHERE price >= $minPrice and price <= $maxPrice and DATEDIFF('$age',register_date)>='0' and  DATEDIFF('$refresh',register_date)>='0' and size>=$minSize and size<=$maxSize and Area='$area' and Sale_Rent='$rentsale' and Domatia>=$minrooms and Domatia<=$maxrooms and Orofos>=$minfloor and Orofos<=$maxfloor and Etos_kataskeuis>=$minyear and Etos_kataskeuis <= $maxyear and Parking>=$Parking and Apothiki>=$Storage_Space and Porta_asfalias >= $Safety_Door and Klimatismos>=$Air_Conditioning and Sinagermos>=$Alarm_System and Elevator>=$Elevator and Retire>=$Penthouse and Corner>=$Corner_Building and Ramp_Load>=$Loading_Dock;
			";
			$data=mysqli_query($conn,$sql);

		}
		else 
		{
			$sql="SELECT * FROM akinito join office on idAkinito=idOffice
			WHERE price >= $minPrice and price <= $maxPrice and DATEDIFF('$age',register_date)>='0' and  DATEDIFF('$refresh',register_date)>='0' and size>=$minSize and size<=$maxSize and Area='$area' and Sale_Rent='$rentsale' and Ypokatigoria='$subtype' and Domatia>=$minrooms and Domatia<=$maxrooms and Orofos>=$minfloor and Orofos<=$maxfloor and Etos_kataskeuis>=$minyear and Etos_kataskeuis <= $maxyear and Parking>=$Parking and Apothiki>=$Storage_Space and Porta_asfalias >= $Safety_Door and Klimatismos>=$Air_Conditioning and Sinagermos>=$Alarm_System and Elevator>=$Elevator and Retire>=$Penthouse and Corner>=$Corner_Building and Ramp_Load>=$Loading_Dock;
			";
			$data=mysqli_query($conn,$sql);	
		}
		
	}
else if($type=="land"){


		
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


		if($subtype=='Everything')
		{
			$sql="SELECT * FROM akinito join land on idAkinito=idLand
			WHERE price >= $minPrice and price <= $maxPrice and DATEDIFF('$age',register_date)>='0' and  DATEDIFF('$refresh',register_date)>='0' and size>=$minSize and size<=$maxSize and Area='$area' and Sale_Rent='$rentsale' and Corner>=$Corner_Building and Oikistiki_Zoni>=$Residential_Zone and Entos_Sxediou >= $Within_the_Building_Plan and Prosopsis>=$Facade;
			";
		$data=mysqli_query($conn,$sql);
		}
		else
		{
				$sql="SELECT * FROM akinito join land on idAkinito=idLand
			WHERE price >= $minPrice and price <= $maxPrice and DATEDIFF('$age',register_date)>='0' and  DATEDIFF('$refresh',register_date)>='0' and size>$minSize and size<$maxSize and Area='$area' and Sale_Rent='$rentsale' and Ypokatigoria='$subtype' and Corner>=$Corner_Building and Oikistiki_Zoni>=$Residential_Zone and Entos_Sxediou >= $Within_the_Building_Plan and Prosopsis>=$Facade;
			";
		$data=mysqli_query($conn,$sql);


		}

		
	}
	echo mysqli_num_rows($data);
	if (mysqli_num_rows($data) > 0){
		$_SESSION["data"]=array();
		$_SESSION["data"]=$data->fetch_all(MYSQLI_ASSOC);
		mysqli_free_result($data);
		foreach ($_SESSION['data'] as $row) {
						
						if($row['Sale_Rent']=='1'){
							$Purpose="Sale.";
						}
						else{$Purpose='Rent.';
						}
						echo "<div>".$row['Ypokatigoria']." ".$row['size']."sq.m. for ".$Purpose."</div>";
				}

	}
  	$_SESSION['posted']=1;
	header("Location: ../index.php");
?>