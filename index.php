<?php  include ("./inc/header.inc.php"); ?> 
<?php
echo'
</br>
<div class="row">
<div class="col-sm-8" style="line-height:30px; font-size:medium;">
';

echo'<b>My Projects</b>
<hr>';


echo'
</br>
<div class="container-fluid">
<div class="row" style="font-size:15px;"><div class="col-sm-1"><span style="font-size:50px; color: #9841b4;" class="glyphicon glyphicon-link"></span>
</div>
<div class="col-sm-10"><span style="font-size:25px; font-family:impact;"><a style="color:#635656;" href="/link_click_counter/">Count Your Link Clicks And Web Page Views</a></span>
</br>
Count total and unique clicks on your link and count total visiters of your webpage.</br>
You can get more details about visiters like their IP , Location , time & date of visit.
</div>
</div>
</div>
';


echo'
</br>
<div class="container-fluid">
<div class="row" style="font-size:15px;"><div class="col-sm-1"><span style="font-size:50px; color: orange;" class="glyphicon glyphicon-th"></span>
</div>
<div class="col-sm-10"><span style="font-size:25px; font-family:impact;"><a style="color:#635656;" href="/game/">Cross Zero Game - Two Players</a></span>
</br>
Play cross zero game without Internet with an interactive score board and cpanel.</br>
We are working on creating a online cross zero game where you can play with your friends from all over the world throw Internet. 
</div>
</div>
</div>
';




echo'
</br>
<div class="container-fluid">
<div class="row" style="font-size:15px;"><div class="col-sm-1"><span style="font-size:50px; color:red;" class="glyphicon glyphicon-heart"></span>
</div>
<div class="col-sm-10"><span style="font-size:25px; font-family:impact;"><a style="color:#635656;" href="./lovegame/">Play Love Game And Make Your Friends The Fool</a></span>
</br>
Play LOVE GAME where you have a chance to make your friend fool and get his/her crush name.</br>
Create your account generate your link and send this link to your friend and make them fool.
</div>
</div>
</div>
';



echo'
</br>
<div class="container-fluid">
<div class="row" style="font-size:15px;"><div class="col-sm-1"><span style="font-size:40px; color:#128ea2;" class="glyphicon glyphicon-fullscreen"></span>
</div>
<div class="col-sm-10"><span style="font-size:25px; font-family:impact;"><a style="color:#635656;" href="/my-wishes">Create Your Digital Wishes 
For Your Friends (Under Construction)</a></span>
</br>
Make your friends\' birthday, festival, marriage special by sending him your digital birthday wishes.</br>
To create your wishes, enter your name and receiver\'s name, generate link and send this link to your friends.
</div>
</div>
</div>
';


echo'
</br>
<b>My Projects</b>
<hr>';


echo'
</br>
<div class="container-fluid">
<div class="row" style="font-size:15px;"><div class="col-sm-1"><span style="font-size:50px; color: #5814c5;" class="glyphicon glyphicon-book"></span>
</div>
<div class="col-sm-10"><span style="font-size:25px; font-family:impact;"><a style="color:#635656;" href="/current-indian-polity/general-science.php">Curent Indian Polity</a></span>
</br>
Learn about current Indian polity and all cabinet member of Indian Government . </br>
Keep updated yourself for competitive exams like bank/PO/IBPS/railway/ias/pcs/SSC/cgl.
</div>
</div>
</div>
';

echo'
</br>
<div class="container-fluid">
<div class="row" style="font-size:15px;"><div class="col-sm-1"><span style="font-size:50px; color: #b7a133;" class="glyphicon glyphicon-user"></span>
</div>
<div class="col-sm-10"><span style="font-size:25px; font-family:impact;"><a style="color:#635656;" href="/biography.php">Read Biography Of Famous Face</a></span>
</br>
Read biography of famous from world . </br>
Narendra-Modi/Sonia-Gandhi/P.V.-Sindhu/Sakshi-Malik/Hafiz-Muhammad-Saeed/Ravindrababu-Ravula/Kim-Jong-un/Sunder-Pichai/Atal-Bihari-Bajpai
</div>
</div>
</div>
';



echo'
</br>
<div class="container-fluid">
<div class="row" style="font-size:15px;"><div class="col-sm-1"><span style="font-size:50px; color:black;" class="glyphicon glyphicon-phone"></span>
</div>
<div class="col-sm-10"><span style="font-size:25px; font-family:impact;"><a style="color:#635656;" href="/whatsup/">Whatsapp Entertainment - Hindi Jokes , Shayari , Stories.</a></span>
</br>
Read funny veg/non-veg jokes , shayari , short stories in Hindi.</br>
Enjoy funny jokes of gf/bf , husband/wife , santa/banta/pappu and share with your friends.
</div>
</div>
</div>
';



echo'
</br></br></br>
</div>
<div class="col-sm-3">
';
if(!isMobileDevice())
echo'<div style="height: 200px; width: 200px; border: 1px solid green;" id="myDiv"></div>';

echo'
</div>

</div>
</div>';

include ("./inc/footer.inc.php"); 

echo'</div>
';
ob_end_flush();
?>

</div>



    <script type="text/javascript">
        var widthLabel = document.getElementById("myDiv");
        var totalWidth = 0;
        setInterval(setTime, 1);

        function setTime()
        {
            totalWidth+=1;
            if(totalWidth<250)
            widthLabel.style.width = totalWidth+'px';
            else if(totalWidth<600)
            widthLabel.style.height = totalWidth+'px';
        }
        timedMsg1();

	function timedMsg1(){

		document.getElementById('myDiv').innerHTML = '<marquee direction="down" scrollamount="18"><div style="font-family: Paytone one, Open Sans, Lato   ;  font-size: 23px; height:290px; text-align: center; color: #ff5252; background-color: white;">Put Your Advertise Here </div></marquee>'; 
		var t1 = setTimeout(timedMsg2 , 2450);

	}

		function timedMsg2(){

		document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 23px; text-align: center; color: red; background-color: white; margin-top:230px;">Put Your Advertise Here</div>'; 
		var t1 = setTimeout(timedMsg3 , 1000);

	}



			function timedMsg3(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 23px; text-align: center; color: #ff5252; background-color: white; margin-top:230px; ">At Price <span style="font-size:23px; font-weight:bold; color: #ff5252;">$10 Only</span></div>';
		var t3 = setTimeout(timedMsg4 , 2000);

	}

				function timedMsg4(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 23px; text-align: center; color: #ff5252; background-color: white; margin-top:170px; "><b style="color:#488273;">Start From Today </b></br></br> We\'ll create free </br>set up for your Advertise</div>';
		var t3 = setTimeout(timedMsg5 , 2000);

	}


				function timedMsg5(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 23px; text-align: center; color: #ff5252; background-color: white; margin-top:170px; "><b style="color:#488273;">Start From Today </b></br></br> We\'ll create free </br>set up for your Advertise</br></br> <span style="color:#488273;;">Contact Us Now</span></div>';
		var t3 = setTimeout(timedMsg6 , 2000);

	}

				function timedMsg6(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 23px; text-align: center; color: #ff5252; background-color: white; margin-top:170px; "><b style="color:#488273;">Start From Today </b></br></br> We\'ll create free </br>set up for your Advertise</br></br> <span style="font-size:20px; color:#488273;;">Call At </br>+919807264017</span></div>';
		var t3 = setTimeout(timedMsg7 , 2000);

	}
  
  				function timedMsg7(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 23px; text-align: center; color: #ff5252; background-color: white; margin-top:170px; "><b style="color:#488273;">Start From Today </b></br></br> We\'ll create free </br>set up for your Advertise</br></br><span style="font-size:16px; font-weight:bold; color:#488273;">Mail Us At </span><span style="font-size:15px; color:#488273;">rajatgupta200795@gmail.com</div>';
		var t3 = setTimeout(timedMsg8 , 2000);
	}

  				function timedMsg8(){
   document.getElementById('myDiv').innerHTML = '<div style="font-size:20px;color:grey; margin-top:230px; text-align:center">Powered By </br>devopsrider.com</div>';
		var t3 = setTimeout(timedMsg1 , 2000);
	}
    </script>
