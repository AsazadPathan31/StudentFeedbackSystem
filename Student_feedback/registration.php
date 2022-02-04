<?php 
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$pro','$sem','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

}
}




?>
<!DOCTYPE html>
<html>
<head>

	<style>

		.sty{
			font-weight: bold;
		}

	</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>




		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" >
		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered table-striped" style="margin-top:50px;margin-bottom:80px; padding:100; border:5px solid #455a8f; box-shadow:3px 3px 3px 3px #b8c7de;">
	<caption><h2 align="center">Student Registration Form</h2></caption>
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td class="sty">Name</td>
					<Td><input  type="text" name="n" placeholder="Enter Your Name" class="form-control" required/></td>
				</tr>
				<tr>
					<td class="sty">Email </td>
					<Td><input type="email" name="e" placeholder="Enter Your Email-ID" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td class="sty">Password </td>
					<Td><input type="password" name="p" placeholder="Enter Your Password" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td class="sty">Mobile </td>
					<Td><input type="text" name="mob" placeholder="Enter Your Mobile" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td class="sty">Select Your Branch</td>
					<Td><select name="pro" class="form-control" required>
					
					<option>CSE</option>
					<option>MECH</option>
					<option>ESA</option>
					<option>ENTC</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td class="sty">Select Your Semester</td>
					<Td><select name="sem" placeholder="Enter Your Name" class="form-control" required>
					
					<option>i</option>
					<option>ii</option>
					<option>iii</option>
					<option>iv</option>
					<option>v</option>
					<option>vi</option>
					<option>vii</option>
					<option>viii</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td class="sty">Gender</td>
					<Td>
				Male&nbsp<input type="radio" name="gen" value="m"/>&nbsp
				Female&nbsp<input type="radio" name="gen" value="f"/>&nbsp	
					</td>
				</tr>
				
				<tr>
					<td class="sty">Choose Your hobbies</td>
					<Td class="form-control">
					Reading &nbsp<input value="reading" type="checkbox" name="hob[]"/>&nbsp
					Singing &nbsp<input value="singin" type="checkbox" name="hob[]"/>&nbsp
					
					Playing &nbsp<input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td class="sty">Upload  Your Image </td>
					<Td><input type="file" name="img" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td class="sty">Enter Your DOB</td>
					<Td>
					<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" value="Save" class="btn btn-info" name="save"/>
<input type="reset" value="Reset" class="btn btn-info"/>
				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-md-2"></div>
		</div>
	</body>
</html>