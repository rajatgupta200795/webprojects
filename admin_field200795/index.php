<?php include ("headerbsy.inc.php");?>
<?php $active1="active";?>

<?php
$x="sony";
if(1==1){

echo'
</br></br></br></br>
<div class="container">
<div class="jumbotron">

<div class="row">
<div class="col-sm-3"><a href="upload_blog_data.php">Upload Blog Data</a></div>
<div class="col-sm-3"><a href="upload_jokes.php">Upload Whatsapp</a></div>
<div class="col-sm-3"><a href="upload_video_data.php">Upload Video Data</a></div>
<div class="col-sm-3"><a href="upload_fake_movies.php">Upload Fake Movies</a></div>
<div class="col-sm-3"><a href="delete_user.php">Delete User</a></div></br></br>
<div class="col-sm-3"><a href="email_to_user.php">Email To User</a></div>
</div>
</br></br></br></br>';

/*
date_default_timezone_set("Asia/Calcutta");
$date=date("Y-m-d");

$query=$con->query("SELECT * FROM users where 1=1");
$count=$query->num_rows;

echo 'Total Peole Who Have Sign Up On Our Database : '.$count;

echo'<h2>All people who Signup today on our site</h2></br>';
echo'
<form action="index.php" method="post">
<input type="text" name="signup_date" value="'.$date.'" placeholder=" Ex. : 22-02-16"/>
<input type="submit" value="Submit" name="sbmt2"/></br></br>
</form>
<ol>';
$signup_date=$_POST['signup_date'];
$sbmt2=$_POST['sbmt2'];
if($sbmt2){
$query=$con->query("SELECT * FROM users where sign_up_date='$signup_date'");
while($row=$query->fetch_assoc()){
$fname=$row['first_name'];
$lname=$row['last_name'];
$email=$row['email'];
$last_seen=$row['last_seen'];

echo '<li><b>Name</b> : '.$fname.' '.$lname.' | <b>Email</b> : '.$email.' | <b>Lastseen</b> : '.$last_seen.'</li></br>';
}}
echo'</ol>';


echo'<h2>All people who login today on our site</h2></br>
<form action="index.php" method="post">
<input type="text" name="lastseen_date" value="'.$date1.'" placeholder=" Ex. : 22-02-16"/>
<input type="submit" value="Submit" name="sbmt1"/></br></br>
</form>
<ol>';
$lastseen_date=$_POST['lastseen_date'];
$sbmt1=$_POST['sbmt1'];
if($sbmt1){
$x="SELECT * FROM users where last_seen Like '%/ $lastseen_date'";
$query=$con->query($x);
while($row=$query->fetch_assoc()){
$fname=$row['first_name'];
$lname=$row['last_name'];
$last_seen=$row['last_seen'];
$email=$row['email'];

echo '<li><b>Name</b> : '.$fname.' '.$lname.' | <b>Email</b> : '.$email.' | <b>Last Seen</b> : '.$last_seen.'</li></br>';
}}
echo'</ol>';

echo'</div>
</div>
';
*/
}

?>

