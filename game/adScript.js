
        timedMsg1();

	function timedMsg1(){

		var t1 = setTimeout(timedMsg2 , 3050);

	}

		function timedMsg2(){

    $("#myDiv").html('<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 50px; text-align: center; color: #ff5252; background-color: white; margin-top:25px;">Put Your Advertise Here</div>').fadeIn(1000);
		var t1 = setTimeout(timedMsg3 , 2000);
    }



			function timedMsg3(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 50px; text-align: center; color: #ff5252; background-color: white; margin-top:25px; ">At Price <span style=" font-weight:bold; color: #ff5252;">$10 </span>Only</div>';
		var t3 = setTimeout(timedMsg4 , 2000);

	}

				function timedMsg4(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 30px; text-align: center; color: #ff5252; background-color: white; margin-top:25px; "><b style="color:#488273;">Start From Today </b></br> We\'ll create free set up for your Advertise </div>';
		var t3 = setTimeout(timedMsg5 , 2000);

	}


				function timedMsg5(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 26px; text-align: center; color: #ff5252; background-color: white; margin-top:15px; "><b style="color:#488273;">Start From Today </b></br> We\'ll create free set up for your Advertise </br><span style="color:#488273;;">Contact Us Now</span></div>';
		var t3 = setTimeout(timedMsg6 , 2000);

	}

				function timedMsg6(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 26px; text-align: center; color: #ff5252; background-color: white; margin-top:15px; "><b style="color:#488273;">Start From Today </b></br> We\'ll create free set up for your Advertise </br> <span style="font-size:20px; color:#488273;;">Call At +919807264017</span></div>';
		var t3 = setTimeout(timedMsg7 , 2000);

	}
  
  				function timedMsg7(){
   document.getElementById('myDiv').innerHTML = '<div style="font-family: Paytone one, Open Sans, Lato   ; font-size: 26px; text-align: center; color: #ff5252; background-color: white; margin-top:15px; "><b style="color:#488273;">Start From Today </b></br> We\'ll create free set up for your Advertise </br> <span style="font-size:16px; font-weight:bold; color:#488273;">Mail Us At </span><span style="font-size:20px; color:#488273;">rajatgupta200795@gmail.com</div>';
		var t3 = setTimeout(timedMsg8 , 2000);
	}

  				function timedMsg8(){
   document.getElementById('myDiv').innerHTML = '<div style="font-size:40px;color:black; margin-top:20px; text-align:center">Powered By naiudan.com<div style="font-size:15px;">Developed By Rajat Gupta (Call to hire me for web develepment: +919807264017)</div></div>';
		var t3 = setTimeout(timedMsg1 , 2000);
	}
