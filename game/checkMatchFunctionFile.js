function checkMatch(inputId){

inputId1 = document.getElementById('inputId1');
inputId2 = document.getElementById('inputId2');
inputId3 = document.getElementById('inputId3');
inputId4 = document.getElementById('inputId4');
inputId5 = document.getElementById('inputId5');
inputId6 = document.getElementById('inputId6');
inputId7 = document.getElementById('inputId7');
inputId8 = document.getElementById('inputId8');
inputId9 = document.getElementById('inputId9');



if(inputId==inputId1){
	if(inputId.value==inputId2.value && inputId.value==inputId3.value){
		inputId1.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId2.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId3.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.color = 'white';	
		inputId2.style.color = 'white';	
		inputId3.style.color = 'white';	
		disableInput();
	}  
else if(inputId.value==inputId5.value && inputId.value==inputId9.value){
		inputId1.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId9.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId9.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId4.value && inputId.value==inputId7.value){
		inputId1.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId4.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId7.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.color = 'white';	
		inputId4.style.color = 'white';	
		inputId7.style.color = 'white';		
		disableInput();
	}
}



else if(inputId==inputId2){
	if(inputId.value==inputId1.value && inputId.value==inputId3.value){
		inputId1.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId2.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId3.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.color = 'white';	
		inputId2.style.color = 'white';	
		inputId3.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId5.value && inputId.value==inputId8.value){
		inputId2.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId8.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId2.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId8.style.color = 'white';		
		disableInput();
	}
}


else if(inputId==inputId3){
	if(inputId.value==inputId2.value && inputId.value==inputId1.value){
		inputId1.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId2.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId3.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.color = 'white';	
		inputId2.style.color = 'white';	
		inputId3.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId5.value && inputId.value==inputId7.value){
		inputId3.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId7.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId3.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId7.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId6.value && inputId.value==inputId9.value){
		inputId3.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId6.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId9.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId3.style.color = 'white';	
		inputId6.style.color = 'white';	
		inputId9.style.color = 'white';		
		disableInput();
	}
}


else if(inputId==inputId4){
	if(inputId.value==inputId7.value && inputId.value==inputId1.value){
		inputId1.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId7.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId4.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.color = 'white';	
		inputId7.style.color = 'white';	
		inputId4.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId5.value && inputId.value==inputId6.value){
		inputId4.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId6.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId4.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId6.style.color = 'white';		
		disableInput();
	}
}


else if(inputId==inputId5){
	if(inputId.value==inputId1.value && inputId.value==inputId9.value){
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId9.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.color = 'white';	
		inputId1.style.color = 'white';	
		inputId9.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId2.value && inputId.value==inputId8.value){
		inputId2.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId8.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId2.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId8.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId3.value && inputId.value==inputId7.value){
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId3.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId7.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.color = 'white';	
		inputId3.style.color = 'white';	
		inputId7.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId4.value && inputId.value==inputId6.value){
		inputId4.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId6.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId4.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId6.style.color = 'white';		
		disableInput();
	}
}


else if(inputId==inputId6){
	if(inputId.value==inputId3.value && inputId.value==inputId9.value){
		inputId3.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId6.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId9.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId3.style.color = 'white';	
		inputId6.style.color = 'white';	
		inputId9.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId5.value && inputId.value==inputId4.value){
		inputId4.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId6.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId4.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId6.style.color = 'white';		
		disableInput();
	}
}


else if(inputId==inputId7){
	if(inputId.value==inputId1.value && inputId.value==inputId4.value){
		inputId1.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId4.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId7.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.color = 'white';	
		inputId4.style.color = 'white';	
		inputId7.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId8.value && inputId.value==inputId9.value){
		inputId7.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId8.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId9.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId9.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId3.value && inputId.value==inputId5.value){
		inputId7.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId3.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId7.style.color = 'white';	
		inputId3.style.color = 'white';	
		inputId5.style.color = 'white';	
		disableInput();
   }
}


else if(inputId==inputId8){
	if(inputId.value==inputId7.value && inputId.value==inputId9.value){
		inputId7.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId8.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId9.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId7.style.color = 'white';	
		inputId8.style.color = 'white';	
		inputId9.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId5.value && inputId.value==inputId2.value){
		inputId2.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId8.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId2.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId8.style.color = 'white';		
		disableInput();
	}
}


else if(inputId==inputId9){
	if(inputId.value==inputId6.value && inputId.value==inputId3.value){
		inputId6.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId9.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId3.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId6.style.color = 'white';	
		inputId9.style.color = 'white';	
		inputId3.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId5.value && inputId.value==inputId1.value){
		inputId1.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId5.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId9.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId1.style.color = 'white';	
		inputId5.style.color = 'white';	
		inputId9.style.color = 'white';		
		disableInput();
	}
else if(inputId.value==inputId8.value && inputId.value==inputId7.value){
		inputId8.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId9.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId7.style.backgroundColor = 'rgb(65, 142, 65)';
		inputId8.style.color = 'white';	
		inputId9.style.color = 'white';	
		inputId7.style.color = 'white';		
		disableInput();
	}
}

}