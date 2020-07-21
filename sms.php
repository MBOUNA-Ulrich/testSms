<?php	
	$phone = "N/A";
	if(isset($_POST["phone"])){
		$phone =  $_POST["phone"];
	}else if(isset($_GET["phone"])){
		$phone =  $_GET["phone"];
	}
	$text = "N/A";
	if(isset($_POST["text"])){
		$text =  $_POST["text"];
	}else if(isset($_GET["text"])){
		$text =  $_GET["text"];
	}
	
	$device = "";
	if(isset($_POST["device"])){
		$device =  $_POST["device"];
	}
	$sim = "N/A";
	if(isset($_POST["sim"])){
		$sim =  $_POST["sim"];
	}else if(isset($_GET["sim"])){
		$sim =  $_GET["sim"];
	}
	$myfile = fopen("testfile.txt", "w");
	fwrite($myfile, pack("CCC",0xef,0xbb,0xbf));  // convert to utf8
	fwrite($myfile, "phone=$phone\n");
	fwrite($myfile, "text=$text\n");
	fwrite($myfile, "sim=$sim\n");
	if($device!=""){
		fwrite($myfile, "device=$device\n");
	}
	fclose($myfile);
	
	//must return "OK" or APP will consider message as failed
	echo "OK";
?>
