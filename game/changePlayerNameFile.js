
firstPlayerOriginal = document.getElementById('player1').value;   
	firstPlayer = firstPlayerOriginal.charAt(0).toUpperCase();
	flag=0;
	for(i=1;i<firstPlayerOriginal.length;i++)
	{
		if(firstPlayerOriginal.charAt(i)!=' ' && flag==0)
		firstPlayer = firstPlayer + firstPlayerOriginal.charAt(i).toLowerCase();
	    else if(flag==1) {firstPlayer = firstPlayer + firstPlayerOriginal.charAt(i).toUpperCase(); flag=0;}
	    else {firstPlayer = firstPlayer + firstPlayerOriginal.charAt(i).toUpperCase(); flag=1;} 
	}

secondPlayerOriginal = document.getElementById('player2').value;   
	secondPlayer = secondPlayerOriginal.charAt(0).toUpperCase();
	flag=0;
	for(i=1;i<secondPlayerOriginal.length;i++)
	{
		if(secondPlayerOriginal.charAt(i)!=' ' && flag==0)
		secondPlayer = secondPlayer + secondPlayerOriginal.charAt(i).toLowerCase();
	    else if(flag==1) {secondPlayer = secondPlayer + secondPlayerOriginal.charAt(i).toUpperCase(); flag=0;}
	    else {secondPlayer = secondPlayer + secondPlayerOriginal.charAt(i).toUpperCase(); flag=1;} 
	}

function changePlayerName(){
firstPlayerOriginal = document.getElementById('player1').value;   
	firstPlayer = firstPlayerOriginal.charAt(0).toUpperCase();
	flag=0;
	for(i=1;i<firstPlayerOriginal.length;i++)
	{
		if(firstPlayerOriginal.charAt(i)!=' ' && flag==0)
		firstPlayer = firstPlayer + firstPlayerOriginal.charAt(i).toLowerCase();
	    else if(flag==1) {firstPlayer = firstPlayer + firstPlayerOriginal.charAt(i).toUpperCase(); flag=0;}
	    else {firstPlayer = firstPlayer + firstPlayerOriginal.charAt(i).toUpperCase(); flag=1;} 
	}

secondPlayerOriginal = document.getElementById('player2').value;   
	secondPlayer = secondPlayerOriginal.charAt(0).toUpperCase();
	flag=0;
	for(i=1;i<secondPlayerOriginal.length;i++)
	{
		if(secondPlayerOriginal.charAt(i)!=' ' && flag==0)
		secondPlayer = secondPlayer + secondPlayerOriginal.charAt(i).toLowerCase();
	    else if(flag==1) {secondPlayer = secondPlayer + secondPlayerOriginal.charAt(i).toUpperCase(); flag=0;}
	    else {secondPlayer = secondPlayer + secondPlayerOriginal.charAt(i).toUpperCase(); flag=1;} 
	}

    document.getElementById('firstPlayerInfo').innerHTML = '<span class="btn btn-default">'+firstPlayer+'</span> <span class="btn btn-danger">'+symbol1+'</span>';
    document.getElementById('secondPlayerInfo').innerHTML = '<span class="btn btn-default">'+secondPlayer+'</span> <span class="btn btn-danger">'+symbol2+'</span>';

}


document.getElementById('firstPlayerInfo').innerHTML = '<span class="btn btn-default">'+firstPlayer+'</span> <span class="btn btn-danger">'+symbol1+'</span>';
document.getElementById('secondPlayerInfo').innerHTML = '<span class="btn btn-default">'+secondPlayer+'</span> <span class="btn btn-danger">'+symbol2+'</span>';
