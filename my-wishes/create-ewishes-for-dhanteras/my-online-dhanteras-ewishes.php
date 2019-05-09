<!DOCTYPE html>
<html>
<head>
    <title>My Dhanteras Wishes For You.</title>
    <meta charset="utf-8">
    <meta name="description" content="Send online Dhanteras wishes to your friends, girlfriend, relative by sendting them your ewishes.">

<meta name="viewport" content="width=400">


<link rel="stylesheet" href="../css/bootstrap.min.css">

<link href="../css/google_font_code.css?family=Josefin+Slab|Hind|Raleway|Poppins|Pangolin|Source+Sans+Pro|PT+Sans+Caption|Oswald|PT+Sans" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" async></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async></script>

<style>
    a:hover{
        text-decoration:none;
        color: red;
    }

        body, html {
    width: 100%;
    height: 70%;
    margin: 0;
    padding: 0;
}
canvas {
    position:absolute;
    top:100px;
    left:-10px;
}
</style>


</head>
<body style="background-color: white; overflow-x: hidden;"  ng-app="" >


<nav class="navbar navbar-default" style="padding: 10px; font-family: 'Josefin Slab', serif; font-size: 20px; font-weight: bold;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.devopsrider.com" style="font-size: 30px;"> Digital Ewishes</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.devopsrider.com/">Home</a></li>
        <li><a href="http://www.devopsrider.com/#ewishes">Wishes</a></li>
        <li><a href="http://www.devopsrider.com/#wishSong">Songs</a></li>
        <li><a href="http://www.devopsrider.com/about-us.php">About</a></li>
        <li><a href="http://www.devopsrider.com/contact-us.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php include "../inc/leftmenu.php";?>



<script type="text/javascript">

sender = ((window.location.search).substring(1)).split("-sent-a-wish-to-")[0];
receiver = ((window.location.search).substring(1)).split("-sent-a-wish-to-")[1];

</script>

</br></br>


<div style="top:30px; text-align: center; color: ; left: 16%;">
<p style="font-size: 35px;font-family: 'Josefin Slab', serif;"><script type="text/javascript">document.write((sender.substring(0,1).toUpperCase()+sender.substring(1)).split("%20")[0])</script> is Wishing you</p>
<p style="font-family: 'Raleway', sans-serif; font-size: 50px;">Happy Dhanteras <script type="text/javascript">document.write((receiver.substring(0,1).toUpperCase()+receiver.substring(1)).split("%20")[0])</script>

</br>

<div style=" font-family: 'Poppins', sans-serif; font-size: 20px;">
दीप जले तो रोशन आपका जहान हो,
पूरा आपका हर एक अरमान हो,
माँ लक्ष्मी जी की कृपा बनी रहे आप पर,
इस धनतेरस पर आप बहुत धनवान होे।
</div>

</p>
</div>

</br></br>
    
<div style="text-align:center;">
    

   <div style="top:30px; text-align: center; color:; left: 16%;">
 <p style="font-size: 25px; font-family: 'Josefin Slab', serif; font-weight: bold; font-weight:bold;"><script type="text/javascript">document.write((sender.substring(0,1).toUpperCase()+sender.substring(1)).split("%20")[0])</script>  sent a photo for you. </p> </div>
    
 <p style="font-family: 'Josefin Slab', serif; font-weight: bold; font-weight:bold;">
<img width="370" heigt="auto" alt="dhanteras photo" src="dhanteras.png">
</br></br>
<!--
Copy and share this link : <b style="font-size: 25px;"><a href="https://www.youtube.com/5MOa0Ua5Prg">https://www.youtube.com/5MOa0Ua5Prg</a></b></br>
<div style="font-size: 17px;">Just copy this link and send it to your friends, relatives to wish them <b>A HAPPY Dhanteras .</b></div>
-->
</p>

</br></br></br>

<div style="text-align: center; font-family: 'Raleway', sans-serif; font-size: 36px; color: orange;">
<p style="padding: 10px;">Create your wishes for someone.</p>
<a href="index.php"  class="btn btn-primary btn-lg"  style="z-index: 2; position: absolute; margin-left: -80px;" onclick="newUser();">Click Here</a>

</div>

</br></br></br>

<hr style="width: 98%; text-align: center; height: 2px; border-top: 1px solid #f3f3ee; background-color: #f7f7f7;">

</br></br></br>
</div>

</br> 


<script type="text/javascript">
    

    
    function newUser(){
        x = document.getElementById('newUserDetails');

    }
</script>


<canvas id="canvas"></canvas>




<script type="text/javascript">
    (function () {
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    window.requestAnimationFrame = requestAnimationFrame;
})();


var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext("2d"),
    width = 0,
    height = 0,
    vanishPointY = 0,
    vanishPointX = 0,
    focalLength = 300,
    angleX = 180,
    angleY = 180,
    angleZ = 180,
    angle = 0,
    cycle = 0,
    colors = {r : 255, g : 0, b : 0},
    lastShot = new Date().getTime();

canvas.width = width;
canvas.height = height;

/*
 *  Controls the emitter
 */
function Emitter() {
    this.reset();
}

Emitter.prototype.reset = function () {
    var PART_NUM = 200,
        x = (Math.random() * 400) - 200,
        y = (Math.random() * 400) - 200,
        z = (Math.random() * 800) - 200;
    
    this.x = x || 0;
    this.y = y || 0;
    this.z = z || 0;
    
    var color = [~~(Math.random() * 150) + 10, ~~(Math.random() * 150) + 10, ~~(Math.random() * 150) + 10]
    this.particles = [];

    for (var i = 0; i < PART_NUM; i++) {
        this.particles.push(new Particle(this.x, this.y, this.z, {
            r: colors.r,
            g: colors.g,
            b: colors.b
        }));
    }
}

Emitter.prototype.update = function () {
    var partLen = this.particles.length;

    angleY = (angle - vanishPointX) * 0.0001;
    angleX = (angle - vanishPointX) * 0.0001;

    this.particles.sort(function (a, b) {
        return b.z - a.z;
    });

    for (var i = 0; i < partLen; i++) {
        this.particles[i].update();
    }
    
    if(this.particles.length <= 0){
      this.reset();   
    }

};

Emitter.prototype.render = function (imgData) {
    var data = imgData.data;

    for (i = 0; i < this.particles.length; i++) {
        var particle = this.particles[i],
            dist = Math.sqrt((particle.x - particle.ox) * (particle.x - particle.ox) + (particle.y - particle.oy) * (particle.y - particle.oy) + (particle.z - particle.oz) * (particle.z - particle.oz));

        if (dist > 255) {
            particle.render = false;
            this.particles.splice(i, 1);
            this.particles.length--;
        }

        if (particle.render && particle.xPos < width && particle.xPos > 0 && particle.yPos > 0 && particle.yPos < height) {
            for (w = 0; w < particle.size; w++) {
                for (h = 0; h < particle.size; h++) {
                    if (particle.xPos + w < width && particle.xPos + w > 0 && particle.yPos + h > 0 && particle.yPos + h < height) {
                        pData = (~~ (particle.xPos + w) + (~~ (particle.yPos + h) * width)) * 4;
                        data[pData] = particle.color[0];
                        data[pData + 1] = particle.color[1];
                        data[pData + 2] = particle.color[2];
                        data[pData + 3] = 255 - dist;
                    }
                }
            }
        }
    }
};


/*
 *  Controls the individual particles
 */
function Particle(x, y, z, color) {
    this.x = x;
    this.y = y;
    this.z = z;

    this.startX = this.x;
    this.startY = this.y;
    this.startZ = this.z;

    this.ox = this.x;
    this.oy = this.y;
    this.oz = this.z;

    this.xPos = 0;
    this.yPos = 0;

    this.vx = (Math.random() * 10) - 5;
    this.vy = (Math.random() * 10) - 5;
    this.vz = (Math.random() * 10) - 5;

    this.color = [color.r, color.g, color.b];
    this.render = true;

    this.size = Math.round(1 + Math.random() * 1);
}

Particle.prototype.rotate = function () {
    var x = this.startX * Math.cos(angleZ) - this.startY * Math.sin(angleZ),
        y = this.startY * Math.cos(angleZ) + this.startX * Math.sin(angleZ);

     this.x = x;
     this.y = y;
}

Particle.prototype.update = function () {
    var cosY = Math.cos(angleX),
        sinY = Math.sin(angleX);

    this.x = (this.startX += this.vx);
    this.y = (this.startY += this.vy);
    this.z = (this.startZ -= this.vz);
    this.rotate();

    this.vy += 0.1;
    this.x += this.vx;
    this.y += this.vy;
    this.z -= this.vz;

    this.render = false;

    if (this.z > -focalLength) {
        var scale = focalLength / (focalLength + this.z);

        this.size = scale * 2;
        this.xPos = vanishPointX + this.x * scale;
        this.yPos = vanishPointY + this.y * scale;
        this.render = true;
    }
};

function render() {
    colorCycle();
    angleY = Math.sin(angle += 0.01);
    angleX = Math.sin(angle);
    angleZ = Math.sin(angle);

    var imgData = ctx.createImageData(width, height);

    for (var e = 0; e < 30; e++) {
        emitters[e].update();
        emitters[e].render(imgData);
    }
    ctx.putImageData(imgData, 0, 0);
    requestAnimationFrame(render);
}

function colorCycle() {
    cycle += .6;
    if (cycle > 100) {
        cycle = 0;
    }
    colors.r = ~~ (Math.sin(.3 * cycle + 0) * 127 + 128);
    colors.g = ~~ (Math.sin(.3 * cycle + 2) * 127 + 128);
    colors.b = ~~ (Math.sin(.3 * cycle + 4) * 127 + 128);
}

var emitters = [];
for (var e = 0; e < 30; e++) {
    colorCycle();
    emitters.push(new Emitter());
}
//render();


// smart trick from @TimoHausmann for full screen pens
setTimeout(function () {
    width = canvas.width = window.innerWidth;
    height = canvas.height = document.body.offsetHeight;
    vanishPointY = height / 2;
    vanishPointX = width / 2;
    render();
}, 500);
</script>   

<?php include "what-is-dhanteras.php";?>
<?php include "../inc/footer.php";?>
