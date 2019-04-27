<?php include "header.php"; ?>



<div style="font-family:cursive; Color:blue; font-size:30px;">Sign up Here !</div></br>

 <form action="index.php" class="navbar-form navbar-left" method="POST" >
 <div class="form-group-sm">
	<input type="text" name="fool_name" size="30" class="form-control" placeholder="Enter Your Name" required></br></br>
	<input type="text" name="lv_one" size="30" class="form-control" placeholder="Enter Your Crush Name" required></br></br>
	<input type="text" name="lv_two" size="30" class="form-control" placeholder="Second Crush(Optional)" required></br></br>
	<input type="text" name="lv_three" size="30" class="form-control" placeholder="Second Crush(Optional)" required></br></br>
    <input class="btn btn-info" type="submit" name="reg" value="Sign up !"></br></br>
</div>
</form>

</div>


<?php include "footer.php"; ?>