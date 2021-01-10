
<?php
include_once'includes/dbh.inc.php';
// Initialize the session
session_start();
$_SESSION['posted']=0;
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;

}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="includes/style.css">
	<meta charset="utf-8"/>
	<title>Project Team 43</title>
	<script type="text/javascript">

	function populate(s1,s2,d1){
		var s1 = document.getElementById(s1);
		var s2 = document.getElementById(s2);
		var extra =document.getElementById(d1);
		s2.innerHTML = "";
		extra.innerHTML="";
		if(s1.value == "house"){
			var newLabel = document.createElement("label");
			newLabel.innerHTML="Bedrooms:";
			extra.appendChild(newLabel);
			var br = document.createElement("br");
			extra.appendChild(br);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="From:";
			extra.appendChild(newLabel);
			var minrooms=document.createElement("select");
			var optionArray=["1","2","3","4","5","6","7","8","9","10"];
			minrooms.name="minrooms";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				minrooms.options.add(newOption);
			}
			extra.appendChild(minrooms);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="to:";
			extra.appendChild(newLabel);

			var maxrooms=document.createElement("select");
			var optionArray=["1","2","3","4","5","6","7","8","9","10"];
			maxrooms.name="maxrooms";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				maxrooms.options.add(newOption);
			}
			extra.appendChild(maxrooms);
			var br = document.createElement("br");
			extra.appendChild(br);

			var br = document.createElement("hr");
			extra.appendChild(br);


			//floor
			var newLabel = document.createElement("label");
			newLabel.innerHTML="Floor:";
			extra.appendChild(newLabel);
			var br = document.createElement("br");
			extra.appendChild(br);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="From:";
			extra.appendChild(newLabel);
			var minfloor=document.createElement("select");
			var optionArray=["-1","0","1","2","3","4","5","6","7","8","9","10"];
			minfloor.name="minfloor";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				minfloor.options.add(newOption);
			}
			extra.appendChild(minfloor);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="to:";
			extra.appendChild(newLabel);

			var maxfloor=document.createElement("select");
			var optionArray=["-1","0","1","2","3","4","5","6","7","8","9","10"];
			maxfloor.name="maxfloor";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				maxfloor.options.add(newOption);
			}
			extra.appendChild(maxfloor);
			var br = document.createElement("br");
			extra.appendChild(br);

			var br = document.createElement("hr");
			extra.appendChild(br);

			// year built
			var newLabel = document.createElement("label");
			newLabel.innerHTML="Construction Year:";
			extra.appendChild(newLabel);
			var br = document.createElement("br");
			extra.appendChild(br);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="From:";
			extra.appendChild(newLabel);
			var minyear=document.createElement("select");
			var optionArray=["1950","1960","1970","1980","1990","1995","2000","2005","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020","2021"];
			minyear.name="minyear";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				minyear.options.add(newOption);
			}
			extra.appendChild(minyear);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="to:";
			extra.appendChild(newLabel);

			var maxyear=document.createElement("select");
			var optionArray=["1950","1960","1970","1980","1990","1995","2000","2005","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020","2021"];
			maxyear.name="maxyear";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				maxyear.options.add(newOption);
			}
			extra.appendChild(maxyear);
			var br = document.createElement("br");
			extra.appendChild(br);

			var br = document.createElement("hr");
			extra.appendChild(br);

			var optionArray = ["Everything|All subcategories","Apartment|Apartment","Studio|Studio","Maisonette|Maisonette","House|House","Villa|Villa","Loft|Loft","Bungalow|Bungalow","Building|Building"];
			var extraArray=["Furnished|Furniced","Parking|Parking","Storage Space|Storage Space","Veranda|Veranda","Safety Door|Safety Door","Air Conditioning|Air Conditioning","Alarm System|Alarm System","Fireplace|Fireplace","Elevator|Elevator","View|View","Garden|Garden","Pool|Pool","Penthouse|Penthouse","Solar Water Heater|Solar Water Heater"];



		} else if(s1.value == "working_place"){
			var newLabel = document.createElement("label");
			newLabel.innerHTML="Rooms:";
			extra.appendChild(newLabel);
			var br = document.createElement("br");
			extra.appendChild(br);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="From:";
			extra.appendChild(newLabel);
			var minrooms=document.createElement("select");
			var optionArray=["1","2","3","4","5","6","7","8","9","10"];
			minrooms.name="minrooms";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				minrooms.options.add(newOption);
			}
			extra.appendChild(minrooms);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="to:";
			extra.appendChild(newLabel);

			var maxrooms=document.createElement("select");
			var optionArray=["1","2","3","4","5","6","7","8","9","10"];
			maxrooms.name="maxrooms";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				maxrooms.options.add(newOption);
			}
			extra.appendChild(maxrooms);
			var br = document.createElement("br");
			extra.appendChild(br);

			var br = document.createElement("hr");
			extra.appendChild(br);

			//floor
			var newLabel = document.createElement("label");
			newLabel.innerHTML="Floor:";
			extra.appendChild(newLabel);
			var br = document.createElement("br");
			extra.appendChild(br);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="From:";
			extra.appendChild(newLabel);
			var minfloor=document.createElement("select");
			var optionArray=["-1","0","1","2","3","4","5","6","7","8","9","10"];
			minfloor.name="minfloor";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				minfloor.options.add(newOption);
			}
			extra.appendChild(minfloor);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="to:";
			extra.appendChild(newLabel);

			var maxfloor=document.createElement("select");
			var optionArray=["-1","0","1","2","3","4","5","6","7","8","9","10"];
			maxfloor.name="maxfloor";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				maxfloor.options.add(newOption);
			}
			extra.appendChild(maxfloor);
			var br = document.createElement("br");
			extra.appendChild(br);

			var br = document.createElement("hr");
			extra.appendChild(br);

			// year built
			var newLabel = document.createElement("label");
			newLabel.innerHTML="Construction Year:";
			extra.appendChild(newLabel);
			var br = document.createElement("br");
			extra.appendChild(br);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="From:";
			extra.appendChild(newLabel);
			var minyear=document.createElement("select");
			var optionArray=["1950","1960","1970","1980","1990","1995","2000","2005","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020","2021"];
			minyear.name="minyear";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				minyear.options.add(newOption);
			}
			extra.appendChild(minyear);
			var newLabel = document.createElement("label");
			newLabel.innerHTML="to:";
			extra.appendChild(newLabel);

			var maxyear=document.createElement("select");
			var optionArray=["1950","1960","1970","1980","1990","1995","2000","2005","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020","2021"];
			maxyear.name="maxyear";
			for(var option in optionArray)
			{
				var newOption = document.createElement("option");
				newOption.value= optionArray[option]
				newOption.innerHTML = optionArray[option]
				maxyear.options.add(newOption);
			}
			extra.appendChild(maxyear);
			var br = document.createElement("br");
			extra.appendChild(br);

			var br = document.createElement("hr");
			extra.appendChild(br);


			//else


			var optionArray = ["Everything|All subcategories","Office|Office","Shop|Shop","Werehouse|Werehouse","Industrial Space|Industrial Space","Hotel|Hotel","Conference Room|Conference Room"];
			var extraArray=["Parking|Parking","Storage Space|Storage Space","Safety Door|Safety Door","Air Conditioning|Air Conditioning","Alarm System|Alarm System","Elevator|Elevator","Penthouse|Penthouse","Corner Building|Corner Building","Loading Dock|Loading Dock"];
		} else if(s1.value == "land"){
			var optionArray = ["Everything|All subcategories","Land|Land","Farmland|Farmland","Island|Island"];
			var extraArray=["Corner Building|Corner Building","Residential Zone|Residential Zone","Facade|Facade","Within the Building Plan|Within the Building Plan"];
		}
		for(var option in optionArray){
			var pair = optionArray[option].split("|");
			var newOption = document.createElement("option");
			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			s2.options.add(newOption);
		}
		for(var extra1 in extraArray){
			var pair2 = extraArray[extra1].split("|");
			var newcheckbox = document.createElement("input");
			var newLabel = document.createElement("label");
			var br = document.createElement("br");
			newLabel.innerHTML= pair2[0];
			newcheckbox.type="checkbox"
			newcheckbox.id = pair2[0];
			newcheckbox.name = pair2[1];
			newcheckbox.value = pair2[0];
			extra.appendChild(newLabel);
			extra.appendChild(newcheckbox);
			extra.appendChild(br);
			}
	}
	function radioselect(r1,s1,s2)
	{	
		var radio = document.getElementById(r1);
		var select1 =document.getElementById(s1);
		var select2 =document.getElementById(s2);
		select1.innerHTML="";
		select2.innerHTML="";
		if(radio.checked)
		{
			var priceArray=["0|150","150|300","300|500","500|700","700|1000","1000|1500"];
		}
		else
		{
			var priceArray=["0|10000","10000|20000","20000|50000","50000|100000","100000|150000"];
		}
		for(var stringArray in priceArray)
		{
			var splitstring=priceArray[stringArray].split("|");

			var newOption3 = document.createElement("option");
			newOption3.value = splitstring[0];
			newOption3.innerHTML = splitstring[0];
			select1.options.add(newOption3);

			var newOption4 = document.createElement("option");
			newOption4.value = splitstring[1];
			newOption4.innerHTML = splitstring[1];
			select2.options.add(newOption4);
		}
	}
	 	
			

		
	</script>
</head>
<body>
	<div class="main">
	<div class="top">
	<a href="logout.php" >Sign Out of Your Account</a>
	<br><?php echo htmlspecialchars($_SESSION["onoma"]);
	?><br>
	<a href="ad.php" >List your advertisement </a>
	</div>
	<div class="enclosing">
	<!-- Searching form-->
	<div id="searchdiv" class="left">
		<form action="includes/search.inc.php" method="POST">
			<!-- Area -->
			<label>Area</label>
			<select name="poleis" id="poleis">
			</select>
			<script type="text/javascript">
		var Areas=[
		'Αγία Βαρβάρα Ηρακλείου|Κρήτης','Αγιά Λάρισας|Θεσσαλίας','Αγία Μαρίνα Κορωπίου|Αττικής','Αγία Μαρίνα Λέρου|Νοτίου Αιγαίου','Αγία Μαρίνα Χανίων|Κρήτης','Αγία Παρασκευή Θεσ/νίκης|Κεντρικής Μακεδονίας','Αγία Παρασκευή Λέσβου|Βορείου Αιγαίου','Αγία Τριάδα Θεσσαλονίκης|Κεντρικής Μακεδονίας','Αγιάσος|Βορείου Αιγαίου','Άγιοι Θεόδωροι Κορινθίας|Πελοποννήσου','Άγιος Αθανάσιος Δράμας|Ανατολικής Μακεδονίας και Θράκης','Άγιος Αθανάσιος Θεσ/νίκης|Κεντρικής Μακεδονίας','Άγιος Βασίλειος Αχαΐας|Δυτικής Ελλάδας','Άγιος Κήρυκος Ικαρίας|Βορείου Αιγαίου','Άγιος Κωνσταντίνος Φθιώτιδας|Στερεάς Ελλάδας','Άγιος Νικόλαος Ληλαντίων|Στερεάς Ελλάδας','Άγιος Νικόλαος|Κρήτης','Άγιος Στέφανος|Αττικής','Αγριά|Θεσσαλίας','Αγρίνιο|Δυτικής Ελλάδας','Άδενδρο|Κεντρικής Μακεδονίας','Αθήνα|Αττικής','Αιανή Κοζάνης|Δυτικής ακεδονίας','Αιάντειο Σαλαμίνας|Αττικής','Αίγινα|Αττικής','Αιγίνιο|Κεντρικής Μακεδονίας','Αίγιο|Δυτική Ελλάδας','Αιτωλικό|Δυτικής Ελλάδας','Αλεξάνδρεια|Κεντρικής Μακεδονίας','Αλεξανδρούπολη|Ανατολικής Μακεδονίας και Θράκης','Αλεπού Κέρκυρας|Ιονίων Νήσων','Αλίαρτος|Στερεάς Ελλάδας','Αλιβέρι|Στερεάς Ελλάδας','Αλιστράτη|Κεντρικής Μακεδονίας','Αλμυρός|Θεσσαλίας','Αμαλιάδα|Δυτικής Ελλάδας','Αμάρυνθος|Στερεάς Ελλάδας','Αμπελάκια Σαλαμίνας|Αττικής','Αμπελώνας|Θεσσαλίας','Αμυγδαλεώνας|Ανατολικής Μακεδονίας και Θράκης','Αμύνταιο|Δυτικής Μακεδονίας','Αμφίκλεια|Στερεάς Ελλάδας','Αμφιλοχία|Δυτικής Ελλάδας','Άμφισσα|Στερεάς Ελλάδας','Ανάβυσσος|Αττικής','Ανατολή|Ηπείρου','Ανατολικό Θεσσαλονίκης|Κεντρικής Μακεδονίας','Ανδραβίδα|Δυτικής Ελλάδας','Ανθούσα Αττικής|Αττικής','Άνοιξη|Αττικής','Αντιμάχεια|Νοτίου Αιγαίου','Ανώγεια|Κρήτης','Αξιούπολη|Κεντρικής Μακεδονίας','Αράχωβα|Στερεάς Ελλάδας','Άργος Ορεστικό|Δυτικής Μακεδονίας','Άργος|Πελοποννήσου','Αργοστόλι|Ιονίων Νήσων','Άρια Αργολίδας|Πελοποννήσου','Αριδαία|Κεντρικής Μακεδονίας','Αρκαλοχώρι|Κρήτης','Αρναία|Κεντρικής Μακεδονίας','Άρτα|Ηπείρου','Άρτεμη (Λούτσα)|Αττικής','Αρχάγγελος|Νοτίου Αιγαίου','Αρχάνες|Κρήτης','Ασβεστοχώρι|Κεντρικής Μακεδονίας','Ασπροβάλτα|Κεντρικής Μακεδονίας','Αστακός Αιτωλοακαρνανίας|Στερεάς Ελλάδας','Άστρος|Πελοποννήσου','Αταλάντη|Στερεάς Ελλάδας','Αυλώνας|Αττικής','Αφάντου|Νοτίου Αιγαίου','Βάγια Βοιωτίας|Στερεάς Ελλάδας','Βαθύ Εύβοιας|Στερεάς Ελλάδας','Βαθύλακκος Θεσσαλονίκης|Κεντρικής Μακεδονίας','Βαμβακόπουλο Χανίων|Κρήτης','Βάρδα|Δυτικής Ελλάδας','Βάρη|Αττικής','Βαρθολομιό|Δυτικής Ελλάδας','Βασιλικά Θεσσαλονίκης|Κεντρικής Μακεδονίας','Βασιλικό|Στερεάς Ελλάδας','Βελβεντός|Κεντρικής Μακεδονίας','Βελεστίνο|Θεσσαλίας','Βέλο Κορινθίας|Πελοποννήσου','Βέροια|Κεντρικής Μακεδονίας','Βιολί Χαράκι Ρεθύμνης|Κρήτης','Βλαχιώτης Λακωνίας|Πελοποννήσου','Βόλος|Θεσσαλίας','Βόνιτσα|Δυτικής Ελλάδας','Βουλιαγμένη|Αττικής','Βραχάτι|Πελοποννήσου','Βραχναίικα|Δυτικής Ελλάδας','Βροντάδος|Βορείου Αιγαίου','Γάζι|Κρήτης','Γαλαξείδι Φωκίδας|Στερεάς Ελλάδας','Γαλατάς Τροιζηνίας|Αττικής','Γαλατάς Χανίων|Κρήτης','Γαλάτιστα|Κεντρικής Μακεδονίας','Γαργαλιάνοι|Πελοποννήσου','Γαστούνη|Δυτικής Ελλάδας','Γέρακας|Αττικής','Γέφυρα Θεσσαλονίκης|Κεντρικής Μακεδονίας','Γιαννιτσά|Κεντρικής Μακεδονίας','Γιάννουλη|Θεσσαλίας','Γλυκά Νερά|Αττικής','Γουμένισσα|Κεντρικής Μακεδονίας','Γρεβενά|Δυτικής Μακεδονίας','Γύθειο|Πελοποννήσου','Γυμνό Ευβοίας|Στερεάς Ελλάδας','Δαράτσος Χανίων|Κρήτης','Δεμένικα|Δυτικής Ελλάδας','Δεσκάτη|Δυτικής Μακεδονίας','Διαβατά|Κεντρικής Μακεδονίας','Διακοπτό|Δυτικής Ελλάδας','Διδυμότειχο|Ανατολικής Μακεδονίας και Θράκης','Διμήνι Μαγνησίας|Θεσσαλίας','Διόνυσος|Αττικής','Διώνη Αττικής|Αττικής','Δοξάτο|Ανατολικής Μακεδονίας και Θράκης','Δράμα|Ανατολικής Μακεδονίας και Θράκης','Δροσιά|Αττικής','Δροσιά|Στερεάς Ελλάδας','Δρυμός Θεσσαλονίκης|Κεντρικής Μακεδονίας','Έδεσσα|Κεντρικής Μακεδονίας','Ελασσόνα|Θεσσαλίας','Ελάτεια|Στερεάς Ελλάδας','Ελεούσα Ιωαννίνων|Ηπείρου','Ελευθερούπολη|Ανατολικής Μακεδονίας και Θράκης','Ελευσίνα|Αττικής','Εξοχή Ιωαννίνων|Ηπείρου','Επανομή|Κεντρικής Μακεδονίας','Ερέτρια|Στερεάς Ελλάδας','Ερμιόνη Αργολίδας|Πελοποννήσου','Ερμούπολη|Νοτίου Αιγαίου','Ερυθρές Αττικής|Αττικής','Ευξεινούπολη|Θεσσαλίας','Εχίνος|Ανατολικής Μακεδονίας και Θράκης','Ζαγκλιβέρι|Κεντρικής Μακεδονίας','Ζαγορά Μαγνησίας|Θεσσαλίας','Ζάκυνθος|Ιονίων Νήσων','Ζαρός|Κρήτης','Ζαχάρω|Δυτικής Ελλάδας','Ζευγολατειό Κορινθίας|Πελοποννήσου','Ζεφύρι|Αττικής','Ζηπάρι Κω|Νοτίου Αιγαίου','Ηγουμενίτσα|Ηπείρου','Ηράκλεια Σερρών|Κεντρικής Μακεδονίας','Ηράκλειο|Κρήτης','Θέρμη|Κεντρικής Μακεδονίας','Θεσσαλονίκη|Κεντρικής Μακεδονίας','Θήβα|Στερεάς Ελλάδας','Θρακομακεδόνες|Αττικής','Ιαλυσός|Νοτίου Αιγαίου','Ίασμος Ροδόπης|Ανατολικής Μακεδονίας και Θράκης','Ιεράπετρα|Κρήτης','Ιερισσός|Κεντρικής Μακεδονίας','Ιστιαία|Στερεάς Ελλάδας','Ιτέα Φωκίδας|Στερεάς Ελλάδας','Ιωάννινα|Ηπείρου','Καβάλα|Ανατολικής Μακεδονίας και Θράκης','Καινούργιο Αιτ/νίας|Στερεάς Ελλάδας','Καλαμάτα|Πελοποννήσου','Καλαμπάκα|Θεσσαλίας','Καλαμπάκι|Ανατολικής Μακεδονίας και Θράκης','Καλλιθέα Πιερίας|Κεντρικής Μακεδονίας','Καλοχώρι Θεσσαλονίκης|Κεντρικής Μακεδονίας','Καλύβια Θορικού|Αττικής','Καλυθιές Ρόδου|Νοτίου Αιγαίου','Κάλυμνος (Πόθια)|Νοτίου Αιγαίου','Καμένα Βούρλα|Στερεάς Ελλάδας','Κανάλια Κέρκυρας|Ιονίων Νήσων','Καναλλάκι Πρέβεζας|Ηπείρου','Καπανδρίτι|Αττικής','Καρδαμίτσια Ιωαννίνων|Ηπείρου','Καρδία Θεσσαλονίκης|Κεντρικής Μακεδονίας','Καρδίτσα|Θεσσαλίας','Καρδιτσομαγούλα|Θεσσαλίας','Καρίτσα Πιερίας|Κεντρικής Μακεδονίας','Καρπενήσι|Στερεάς Ελλάδας','Κάρυστος|Στερεάς Ελλάδας','Κασσάνδρεια|Κεντρικής Μακεδονίας','Καστοριά|Δυτικής Μακεδονίας','Κατερίνη|Κεντρικής Μακεδονίας','Κατοχή Αιτωλοακαρνανίας|Στερεάς Ελλάδας','Κατσικάς|Ηπείρου','Κάτω Αχαΐα|Δυτικής Ελλάδας','Κάτω Γούβες Ηρακλείου|Κρήτης','Κάτω Νευροκόπι|Ανατολικής Μακεδονίας και Θράκης','Κάτω Σούλι Αττικής|Αττικής','Κένταυρος Ξάνθης|Ανατολικής Μακεδονίας και Θράκης','Κερατέα|Αττικής','Κέρκυρα|Ιονίων Νήσων','Κέφαλος Κω|Νοτίου Αιγαίου','Κιάτο|Πελοποννήσου','Κιλκίς|Κεντρικής Μακεδονίας','Κιμμέρια|Ανατολικής Μακεδονίας και Θράκης','Κίσσαμος|Κρήτης','Κίτσι|Αττικής','Κοζάνη|Δυτικής Μακεδονίας','Κολινδρός|Κεντρικής Μακεδονίας','Κομοτηνή|Ανατολικής Μακεδονίας και Θράκης','Κόνιτσα|Ηπείρου','Κόρινθος|Πελοποννήσου','Κορινός|Κεντρικής Μακεδονίας','Κορωπί|Αττικής','Κοσκινού Ρόδου|Νοτίου Αιγαίου','Κουνουπιδιανά|Κρήτης','Κουφάλια|Κεντρικής Μακεδονίας','Κρανέα Ελασσόνος|Θεσσαλίας','Κρανίδι|Πελοποννήσου','Κρεμαστή|Νοτίου Αιγαίου','Κρηνίδες|Ανατολικής Μακεδονίας και Θράκης','Κρόκος Κοζάνης|Κεντρικής Μακεδονίας','Κρουσώνας Ηρακλείου|Κρήτης','Κρύα Βρύση|Κεντρικής Μακεδονίας','Κρυονέρι|Αττικής','Κύμη|Στερεάς Ελλάδας','Κύμινα|Κεντρικής Μακεδονίας','Κυπαρισσία|Πελοποννήσου','Κυριάκι Βοιωτίας|Στερεάς Ελλάδας','Κυψέλη Αίγινας|Αττικής','Κως|Νοτίου Αιγαίου','Κωστακιοί|Ηπείρου','Λαγκαδάς|Κεντρικής Μακεδονίας','Λαγυνά|Κεντρικής Μακεδονίας','Λακκί Λέρου|Νοτίου Αιγαίου','Λαμία|Στερεάς Ελλάδας','Λάρισα|Θεσσαλίας','Λαύριο|Αττικής','Λεοντάρι|Αττικής','Λεπενού|Δυτικής Ελλάδας','Λεπτοκαρυά Πιερίας|Κεντρικής Μακεδονίας','Λευκάδα|Ιονίων Νήσων','Λευκίμμη|Ιονίων Νήσων','Λευκώνας Σερρών|Κεντρικής Μακεδονίας','Λεχαινά|Δυτικής Ελλάδας','Λέχαιο|Πελοποννήσου','Λεωνίδιο|Πελοποννήσου','Ληξούρι|Ιονίων Νήσων','Λητή|Κεντρικής Μακεδονίας','Λιβαδειά|Στερεάς Ελλάδας','Λιβάδι Λάρισας|Θεσσαλίας','Λιβανάτες|Στερεάς Ελλάδας','Λιμενάρια Θάσου|Ανατολικής Μακεδονίας και Θράκης','Λιμένας Θάσου|Ανατολικής Μακεδονίας και Θράκης','Λιμένας Χερσονήσου|Κρήτης','Λιτόχωρο|Κεντρικής Μακεδονίας','Λουτρά Αιδηψού Εύβοιας|Στερεάς Ελλάδας','Λουτράκι|Πελοποννήσου','Λυγουριό Αργολίδας|Πελοποννήσου','Μαγούλα|Αττικής','Μακρακώμη|Στερεάς Ελλάδας','Μακροχώρι|Κεντρικής Μακεδονίας','Μαλεσίνα Φθιώτιδας|Στερεάς Ελλάδας','Μάλια|Κρήτης','Μάνδρα|Αττικής','Μανιάκοι|Δυτικής Μακεδονίας','Μαραθώνας|Αττικής','Μαρκόπουλο Ωρωπού|Αττικής','Μαρκόπουλο|Αττικής','Μεγάλη Παναγία|Κεντρικής Μακεδονίας','Μεγαλόπολη|Πελοποννήσου','Μέγαρα|Αττικής','Μελίκη|Κεντρικής Μακεδονίας','Μελισσοχώρι Θεσσαλονίκης|Κεντρικής Μακεδονίας','Μεσολόγγι|Δυτική Ελλάδας','Μεσοποταμία Καστοριάς|Δυτικής Μακεδονίας','Μεσσήνη|Πελοποννήσου','Μέτσοβο|Ηπείρου','Μιντιλόγλι Αχαΐας|Δυτικής Ελλάδας','Μοίρες|Κρήτης','Μολάοι|Πελοποννήσου','Μουρνιές|Κρήτης','Μύκονος (πόλη)|Νοτίου Αιγαίου','Μύρινα|Βορείου Αιγαίου','Μυτιλήνη|Βορείου Αιγαίου','Νάξος|Νοτίου Αιγαίου','Νάουσα Πάρου|Νοτίου Αιγαίου','Νάουσα|Κεντρικής Μακεδονίας','Ναύπακτος|Δυτική Ελλάδας','Ναύπλιο|Πελοποννήσου','Νέα Αγχίαλος|Θεσσαλίας','Νέα Αρτάκη|Στερεάς Ελλάδας','Νέα Βρασνά|Κεντρικής Μακεδονίας','Νέα Βύσσα|Ανατολικής Μακεδονίας και Θράκης','Νέα Ζίχνη|Κεντρικής Μακεδονίας','Νέα Καλλικράτεια|Κεντρικής Μακεδονίας','Νέα Καρβάλη|Ανατολικής Μακεδονίας και Θράκης','Νέα Κίος Αργολίδας|Πελοποννήσου','Νέα Λάμψακος Εύβοιας|Στερεάς Ελλάδας','Νέα Μαγνησία|Κεντρικής Μακεδονίας','Νέα Μάκρη|Αττικής','Νέα Μάλγαρα|Κεντρικής Μακεδονίας','Νέα Μανολάδα Ηλείας|Δυτικής Ελλάδας','Νέα Μεσημβρία|Κεντρικής Μακεδονίας','Νέα Μηχανιώνα|Κεντρικής Μακεδονίας','Νέα Μουδανιά|Κεντρικής Μακεδονίας','Νέα Παλάτια|Αττικής','Νέα Πέραμος Καβάλας|Ανατολικής Μακεδονίας και Θράκης','Νέα Πέραμος|Αττικής','Νέα Ραιδεστός|Κεντρικής Μακεδονίας','Νέα Σελεύκεια|Ηπείρου','Νέα Τρίγλια Χαλκιδικής|Κεντρικής Μακεδονίας','Νεάπολη Κοζάνης|Δυτικής Μακεδονίας','Νεάπολη Λακωνίας|Πελοποννήσου','Νεάπολη Λασιθίου|Κρήτης','Νεμέα|Πελοποννήσου','Νέο Καρλόβασι|Βορείου Αιγαίου','Νέο Ρύσιο|Κεντρικής Μακεδονίας','Νέο Σούλι Σερρών|Κεντρικής Μακεδονίας','Νέοι Επιβάτες|Κεντρικής Μακεδονίας','Νέος Μαρμαράς|Κεντρικής Μακεδονίας','Νεοχώρι Αιτωλοακαρνανίας|Στερεάς Ελλάδας','Νεροκούρος|Κρήτης','Νιγρίτα|Κεντρικής Μακεδονίας','Νίκαια Λάρισας|Θεσσαλίας','Νικήσιανη|Ανατολικής Μακεδονίας και Θράκης','Νικήτη|Κεντρικής Μακεδονίας','Ντράφι|Αττικής','Ξάνθη|Ανατολικής Μακεδονίας και Θράκης','Ξηροπόταμος Δράμας|Ανατολικής Μακεδονίας και Θράκης','Ξυλόκαστρο|Πελοποννήσου','Οβρυά|Δυτικής Ελλάδας','Οινόφυτα Βοιωτίας|Στερεάς Ελλάδας','Οιχαλία Τρικάλων|Θεσσαλίας','Ορεστιάδα|Ανατολικής Μακεδονίας και Θράκης','Ορμύλια|Κεντρικής Μακεδονίας','Ορχομενός|Στερεάς Ελλάδας','Παιανία|Αττικής','Παλαιά Φώκαια|Αττικής','Πάλαιρος|Στερεάς Ελλάδας','Παλαμάς|Θεσσαλίας','Παληό Καβάλας|Ανατολικής Μακεδονίας και Θράκης','Παλλήνη|Αττικής','Παναιτώλιο|Στερεάς Ελλάδας','Πάνορμος Καλύμνου|Νοτίου Αιγαίου','Παραδείσι|Νοτίου Αιγαίου','Παραλία Αχαΐας|Δυτικής Ελλάδας','Παραλία Βαθέος Αυλίδος|Στερεάς Ελλάδας','Παραμυθιά Θεσπρωτίας|Ηπείρου','Πάργα|Ηπείρου','Παροικιά|Νοτίου Αιγαίου','Παστίδα Ρόδου|Νοτίου Αιγαίου','Πάτρα|Δυτική Ελλάδας','Πεδινή Ιωαννίνων|Ηπείρου','Πέλλα|Κεντρικής Μακεδονίας','Πεντάλοφος Θεσσαλονίκης|Κεντρικής Μακεδονίας','Πεντέλη Αττικής|Αττικής','Περαία|Κεντρικής Μακεδονίας','Περιβόλια Κυδωνίας Χανίων|Κρήτης','Περίσταση Πιερίας|Κεντρικής Μακεδονίας','Πηγάδια Καρπάθου|Νοτίου Αιγαίου','Πικέρμι|Αττικής','Πλαγιάρι|Κεντρικής Μακεδονίας','Πλάκα Δήλεσι Βοιωτίας|Στερεάς Ελλάδας','Πλαταμώνας Πιερίας|Κεντρικής Μακεδονίας','Πλατύ Ημαθίας|Κεντρικής Μακεδονίας','Πλωμάρι|Βορείου Αιγαίου','Πολίχνιτος Λέσβου|Βορείου Αιγαίου','Πολύγυρος|Κεντρικής Μακεδονίας','Πολύκαστρο|Κεντρικής Μακεδονίας','Πόρος (χώρα)|Στερεάς Ελλάδας','Πόρτο Ράφτη|Αττικής','Ποταμός Κέρκυρας|Ιονίων Νήσων','Πρέβεζα|Ηπείρου','Προσοτσάνη|Ανατολικής Μακεδονίας και Θράκης','Πτολεμαΐδα|Δυτικής Μακεδονίας','Πυλί Κω|Νοτίου Αιγαίου','Πύλος|Πελοποννήσου','Πύργος|Δυτική Ελλάδας','Ραφήνα|Αττικής','Ρέθυμνο|Κρήτης','Ρίο|Δυτικής Ελλάδας','Ροδίτσα Φθιώτιδας|Στερεάς Ελλάδας','Ροδοδάφνη Αχαΐας|Δυτικής Ελλάδας','Ροδολίβος|Κεντρικής Μακεδονίας','Ροδόπολη Αττικής|Αττικής','Ρόδος|Νοτίου Αιγαίου','Σαλαμίνα|Αττικής','Σάμος|Βορείου Αιγαίου','Σάπες|Ανατολικής Μακεδονίας και Θράκης','Σαρωνίδα Αττικής|Αττικής','Σέλερο|Ανατολικής Μακεδονίας και Θράκης','Σελήνια Σαλαμίνας|Αττικής','Σέρβια|Κεντρικής Μακεδονίας','Σέρρες|Κεντρικής Μακεδονίας','Σήμαντρα Χαλκιδικής|Κεντρικής Μακεδονίας','Σητεία|Κρήτης','Σιάτιστα|Κεντρικής Μακεδονίας','Σιδηρόκαστρο|Κεντρικής Μακεδονίας','Σίνδος|Κεντρικής Μακεδονίας','Σκάλα Λακωνίας|Πελοποννήσου','Σκιάθος|Θεσσαλίας','Σκόπελος|Θεσσαλίας','Σκούταρι Σερρών|Κεντρικής Μακεδονίας','Σκύδρα|Κεντρικής Μακεδονίας','Σούδα|Κρήτης','Σουφλί|Ανατολικής Μακεδονίας και Θράκης','Σοφάδες|Θεσσαλίας','Σοχός|Κεντρικής Μακεδονίας','Σπάρτη|Πελοποννήσου','Σπάτα|Αττικής','Σπερχειάδα|Στερεάς Ελλάδας','Σπέτσες|Αττικής','Σταμάτα|Αττικής','Σταυρός Θεσσαλονίκης|Κεντρικής Μακεδονίας','Σταυρός Φθιώτιδας|Στερεάς Ελλάδας','Στυλίδα|Στερεάς Ελλάδας','Συκούριο Λάρισας|Θεσσαλίας','Σύμη|Νοτίου Αιγαίου','Σχηματάρι|Στερεάς Ελλάδας','Ταγαράδες|Κεντρικής Μακεδονίας','Τερπνή|Κεντρικής Μακεδονίας','Τήνος|Νοτίου Αιγαίου','Τραγανό Πηνειού Ηλείας|Δυτικής Ελλάδας','Τρίκαλα|Θεσσαλίας','Τρίλοφος|Κεντρικής Μακεδονίας','Τρίπολη|Πελοποννήσου','Τσαριτσάνη|Θεσσαλίας','Τυμπάκι|Κρήτης','Τύρναβος|Θεσσαλίας','Τυχερό Έβρου|Ανατολικής Μακεδονίας και Θράκης','Φαλάννη Λάρισας|Θεσσαλίας','Φαρκαδόνα|Θεσσαλίας','Φάρσαλα|Θεσσαλίας','Φέρες|Ανατολικής Μακεδονίας και Θράκης','Φιλιάτες|Ηπείρου','Φιλιατρά|Πελοποννήσου','Φιλιππιάδα|Ηπείρου','Φίλυρο|Κεντρικής Μακεδονίας','Φλώρινα|Δυτικής Μακεδονίας','Φυλή|Αττικής','Χαλάστρα|Κεντρικής Μακεδονίας','Χαλκηδόνα Θεσσαλονίκης|Κεντρικής Μακεδονίας','Χαλκίδα|Στερεάς Ελλάδας','Χαλκούτσι|Αττικής','Χανιά|Κρήτης','Χίος|Βορείου Αιγαίου','Χλόη Καστοριάς|Δυτικής Μακεδονίας','Χορτιάτης|Κεντρικής Μακεδονίας','Χρυσούπολη|Ανατολικής Μακεδονίας και Θράκης','Χώρα Μεσσηνίας|Πελοποννήσου','Χωριστή|Κεντρικής Μακεδονίας','Ψαχνά|Στερεάς Ελλάδας','Ωραιόκαστρο|Κεντρικής Μακεδονίας',];
		var areaSelect=document.getElementById("poleis");
		areaSelect.innerHTML="";
		for (var i in Areas) {
			
					var newOption = document.createElement("option");
					newOption.value = Areas[i];
					newOption.innerHTML = Areas[i];
					areaSelect.options.add(newOption);
				
		} </script><br>

			<!-- Purpose-->
			<input type="radio" id="Sale" name="drone" value="Sale"  onclick="radioselect('Rent','minPrice','maxPrice')">
  				<label for="Sale">Sale</label>

  			<input type="radio" id="Rent" name="drone" value="Rent" onclick="radioselect('Rent','minPrice','maxPrice')" >
  				<label for="Rent">Rent</label>
  			<br>

			<!-- Type-->
			<label for="type" >Choose type of property:</label>
			<select name="type" id="type" onchange="populate('type','subtype','extra')" >
				<option  value="" ></option>
				<option value="house">Living Space</option>
				<option value="working_place">Working Space</option>
				<option value="land">Land</option>
			</select>
			<br>
			<!-- Subtype-->
			<label for="subtype" >Choose subcategory</label>
			<select name="subtype" id="subtype">
			</select>
			<br>
			<hr>
			<!-- Price-->
			<label >Price</label>
			<select name="minPrice" id="minPrice"></select>
			<select name="maxPrice" id="maxPrice"></select>
			<br>
			<!-- Size-->
			<label >Size</label>
			<select name="minSize" id="minSize">
				<option value="0" selected>0</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
				<option value="300">300</option>
				<option value="400">400</option>
				<option value="500">500</option>
				<option value="600">600</option>
				<option value="700">700</option>
				<option value="800">800</option>
				<option value="900">900</option>
				<option value="1000">1000</option>
				<option value="2000">2000</option>
				<option value="5000">5000</option>
				<option value="10000">10000</option>
				

			</select>
			<select name="maxSize" id="maxSize">
				<option value="50" selected>50</option>
				<option value="100">100</option>
				<option value="200">200</option>
				<option value="300">300</option>
				<option value="400">400</option>
				<option value="500">500</option>
				<option value="600">600</option>
				<option value="700">700</option>
				<option value="800">800</option>
				<option value="900">900</option>
				<option value="1000">1000</option>
				<option value="2000">2000</option>
				<option value="5000">5000</option>
				<option value="10000">10000</option>


			</select>
			<br>
			<hr>
			<!-- extra -->
			<div id="extra">

			</div>
			<br>
			<hr>
			<!-- refresh -->
			<label>Last updated</label>
			<select name="refresh" id="refresh">
				<option value="0" selected>Irrelevant</option>
				<option value="1" >Last 24 hours</option>
				<option value="3" >Last 3 days</option>
				<option value="7" >Last 7 days</option>
				<option value="30" >Last month</option>
				<option value="90" >Last 3 months</option>
				<option value="365" >Last year</option>

			</select>
			<br><hr>
			<!-- age -->
			<label>Age</label>
			<select id="age" name="age">
				<option value="0" selected>Irrelevant</option>
				<option value="1" >Last 24 hours</option>
				<option value="3" >Last 3 days</option>
				<option value="7" >Last 7 days</option>
				<option value="30" >Last month</option>
				<option value="90" >Last 3 months</option>
				<option value="365" >Last year</option>
			</select>
			<br><hr>
			<button type="submit" name="search" value="posted">Search</button>
			<br><hr>
		</form>

	</div>
	<div class="right">
			<?php 
				
					foreach ($_SESSION['data'] as $row) {
						$id=$row['idAkinito'];
						$sql="SELECT Onoma,email,tilefono FROM user join kataxorei on user.idUser=kataxorei.idUser where idAkinito='$id';";
						$result=mysqli_query($conn,$sql);
						$result=mysqli_fetch_assoc($result);
						$onomaaggelias=$result['Onoma'];
						$emailaggelias=$result['email'];
						$tilefonoaggelias=$result['tilefono'];
						//echo $onomaaggelias.$emailaggelias.$tilefonoaggelias;
						if($row['Sale_Rent']==1)
						{
								$Purpose="Sale.";
								$priceformat="$";
						}
						else
						{
							$Purpose='Rent.';
							$priceformat="$/month";
						}
						echo "<div>"."<p>".$row['Ypokatigoria']." ".$row['size']."sq.m. for ".$Purpose."</p>".'<label>'.$row['Area'].'</label><br><label>'.$row['price'].$priceformat.'</label><br><label><br></label>Name: '.$onomaaggelias.' <br><label>E-mail: '.$emailaggelias.'</label>'.' <br><label>Telephone: '.$tilefonoaggelias.'</label>'.'<hr>'."</div>";
				}
				
			?>
		</table>
	</div>
	
		
	</div>

	
</div>
</body>
</html>



