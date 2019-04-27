function startNextMatch(){

checkWin = 0;
cheakTurnTime = 0;

randNum = Math.round(Math.random(0,1));

	inputId1.value = ''; inputId1.style.backgroundColor = '#f2f2f2';  inputId1.style.color = 'black'; 
	inputId2.value = ''; inputId2.style.backgroundColor = '#f2f2f2';  inputId2.style.color = 'black'; 
	inputId3.value = ''; inputId3.style.backgroundColor = '#f2f2f2';  inputId3.style.color = 'black'; 
	inputId4.value = ''; inputId4.style.backgroundColor = '#f2f2f2';  inputId4.style.color = 'black'; 
	inputId5.value = ''; inputId5.style.backgroundColor = '#f2f2f2';  inputId5.style.color = 'black'; 
	inputId6.value = ''; inputId6.style.backgroundColor = '#f2f2f2';  inputId6.style.color = 'black'; 
	inputId7.value = ''; inputId7.style.backgroundColor = '#f2f2f2';  inputId7.style.color = 'black'; 
	inputId8.value = ''; inputId8.style.backgroundColor = '#f2f2f2';  inputId8.style.color = 'black'; 
	inputId9.value = ''; inputId9.style.backgroundColor = '#f2f2f2';  inputId9.style.color = 'black'; 

inputId1.disabled = false;
inputId2.disabled = false;
inputId3.disabled = false;
inputId4.disabled = false;
inputId5.disabled = false;
inputId6.disabled = false;
inputId7.disabled = false;
inputId8.disabled = false;
inputId9.disabled = false;

if(restMatchCount>0)
startGame();
else{
        $("#headerStart").fadeOut('slow',function(){
    $(this).html('</br><div class="row"><div class="col-sm-1"></div><div class="col-sm-2" style="color: white;">First Player : <input style="color: blue;" type="text" value="'+firstPlayer+'" id="player1" oninput="changePlayerName()" name=""></br>Second Player : <input style="color: blue;" type="text" value="'+secondPlayer+'" id="player2" oninput="changePlayerName()" name=""></div><div class="col-sm-1" style="color: white;">First : </br><div style="font-size: 40px;color: black;" class="btn btn-default" id="symbol1" onclick="changeSymbol()">&nbsp;'+symbol1+'&nbsp;</div></div><div class="col-sm-1" style="color: white;">Second : </br><p style="font-size: 40px;color: black;" class="btn btn-default" id="symbol2" onclick="changeSymbol()">&nbsp;'+symbol2+'&nbsp;</p></div><div class="col-sm-2"><span style="color: white;">Total Match :</span> </br><input type="number" id="totalMatch" oninput="gameSequenceInfo()" value="1" style="text-align: center; font-size: 50px; overflow-y: hidden;  width: 70px; height: 70px;" name=""></div><div class="col-sm-2" style="color: white;"></br></br><div id="hideStartButton"><button class="btn btn-primary btn-lg" id="startGameButton" onclick="startGame()">Start Game !</button></div></br></div><div class="col-sm-2" style="color: white;"></br></br><button class="btn btn-success btn-lg" >Play Online With Friends !</button></br></div></div>')
}).fadeIn("slow");


document.getElementById('totalMatchNum').innerHTML = '1';	
document.getElementById('restMatchNum').innerHTML = '1';	
document.getElementById('currentMatchNum').innerHTML = '0';	
document.getElementById('firstPlayerWinInfo').innerHTML = '0';	
document.getElementById('secondPlayerWinInfo').innerHTML = '0';	
document.getElementById('firstPlayerLossInfo').innerHTML = '0';	
document.getElementById('secondPlayerLossInfo').innerHTML = '0';	
document.getElementById('firstPlayerScoreInfo').innerHTML = '0';	
document.getElementById('secondPlayerScoreInfo').innerHTML = '0';

document.getElementById('leadScoreStatus').innerHTML = '';

restMatchCount = 0;
totalMatch = 0;
matchCount = 0;

firstPlayerWinCount = 0;
firstPlayerLossCount = 0;
secondPlayerWinCount = 0;
secondPlayerLossCount =0;
          
         $("#adPlaceAtTopOfWelcomeText").fadeOut(500);
        $("#gameWelcomeText").animate({top: '150px', opacity:'0'}, 0);
        $("#gameWelcomeText").animate({top: '150px', opacity:'0'}, 0);
         $("#gameWelcomeText").fadeIn(1000);
         $("#adPlaceAtTopOfWelcomeText").fadeIn(6000);
         startGameWelcomeText();


         $("#showGame").fadeOut(1000);
         $("#scoreCardInfo").fadeOut(1000);
         $("#scoreCardIconAtHidden").fadeOut(1000);

gameSequenceInfo();
}

}