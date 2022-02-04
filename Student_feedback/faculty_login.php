<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where email='$e' and password='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['faculty_login']=$e;
header('location:faculty');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Faculty Login!</title>
	<style>
.col-sm-4{
	font-size:16px;
}
	</style>
}
</head>
<body>

</body>
</html>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	
	<div class="row">

		<h2 style="text-align: center; font-weight:bold"> Faculty Login </h2>
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">

		<div class="col-md-3">
		</div>

		<div class="col-md-6">

			<div class="form-group">

				<h5 style="font-weight:bold">Faculty Email</h5> <input type="email" required placeholder="Email-ID" name="e" class="form-control">

			</div>
			<div class="form-group">

				<h5 style="font-weight:bold">Password</h5> <input type="password" required placeholder="Password" name="p" class="form-control">

			</div>
			<div class="form-group">

				<input type="submit" name="save" value="Login" required class="btn btn-danger">

			</div>
	</div>

	<div class="col-md-3">
	</div>

	
		
	</div>

	</div>
</form>	
</div>
</div>