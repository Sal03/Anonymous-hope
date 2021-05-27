<?php
	include('connect.php');
	if(isset($_POST['donate'])){
		$name = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dcategory = $_POST['dcategory'];
	$pro = $_POST['pro'];	
	$sql= "INSERT INTO donate (fname, email, phone, dcategory, pro) VALUES ('$name', '$email', '$phone', '$dcategory', '$pro')";
	$result= mysqli_query($conn, $sql);
	if($result){
		echo '<script>alert("Donated Successfully!")</script>';
	}
	else {
		echo '<script>alert("Unsuccessful")</script>';
	}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Donate</title>
	<meta charset="UTF-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstarp/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<body>
	<section id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<a href="index.html">
						<h1><span>A</span>nonymous <span>H</span>ope </h1>
					</a>
				</div>
			</div>
		</div>
	</section>

	<div class="container" span style="background: linear-gradient(to bottom , white, gray  100%)">

		<div class="table-responsive">
			<div class="projects-header">
				<h1 class="section-title">Our <span> Projects</span></h1>
			</div>
			<br />
			<table class="table table-bordered table-stripedd" id="employee_table">
				<tr>
					<th align="center" span style="font-size: 30px;">Name</th>
					<th align="center" span style="font-size: 30px;">&nbsp;&nbsp;Population</th>
					<th align="left" span style="font-size: 30px;">&nbsp;&nbsp;&nbsp;Area</th>
					<th align="center" span style="font-size: 30px;">Result</th>
					<th align="center" span style="font-size: 30px;">Status</th>
				</tr>
			</table>
		</div>
	</div>
	<div class="main_div" span style=" background: linear-gradient(to top,  white, gray 100%)">
		<div class="box">
			<div class="brand">
				<a href="index.html">
					<h1><span>D</span>onate <span>N</span>ow </h1>
				</a>
			</div>
			<form method="POST" id="id01" action="">
				<div class="inputBox">
					<input type="text" name="fname" autocomplete="off" required>
					<label>Full Name</label>
				</div>
				<div class="inputBox">
					<input type="email" name="email" autocomplete="off" required>
					<label>Email</label>
				</div>
				<div class="inputBox">
					<input type="text" name="phone" autocomplete="off" required>
					<label>Phone</label>
				</div>
				<h2>Donation amount</h2>
						<div>
							<select form="id01" type="radio" class="radio" id="v" name="dcategory" >
							<option for="5" value='5000'>5,000</option>
							<option for="10" value= '10000'>10,000</option>
							<option for="25"  value= '25000'>25,000</option>
							<option for="50" value= '50000'>50,000</option>
							<option for="100"  value= '100000'>1,00,000</option>
							</select>
						</div>
				<h2>For which project?</h2>
				<div class="group">
					<input type="radio" class="radio" id="s" name="pro" value="Every girl in school">
					<label for="school">Every girl in school</label>
				</div>
				<div class="group">
					<input type="radio" class="radio" id="h" name="pro" value="No child hungry">
					<label for="school">No child hungry</label>
				</div>
				<div class="group">
					<input type="radio" class="radio" id="l" name="pro" value="No child homeless">
					<label for="school">No child homeless</label>
				</div>
				<div class="group">
					<input type="radio" class="radio" id="c" name="pro" value="Covid-19">
					<label for="school">Covid-19</label>
				</div>

				<input type="submit" name="donate" value="Donate">
			</form>
		</div>

	</div>
	<section id="footer">
		<div class="footer container">
			<div class="brand">
				<h1><span>A</span>nonymous <span>H</span>ope </h1>
			</div>
			<h2>Let's Help Them Now</h2>
			<div class="social-icon">
				<div class="social-item">
					<a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
				</div>
				<div class="social-item">
					<a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
				</div>
				<div class="social-item">
					<a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
				</div>
				<div class="social-item">
					<a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
				</div>
			</div>
			<p>Copyright © 2020. All rights reserved</p>
		</div>
	</section>
	<script src="main.js"></script>
</body>

</html>
<script>
	$(document).ready(function () {
		$.getJSON("employee.json", function (data) {
			var employee_data = '';
			$.each(data, function (key, value) {
				employee_data += '<tr>' + '<tr>' + '<tr>' + '<tr>';
				employee_data += '<td align="center">' + '<p>' + '<h2>' + value.name + '</h2>' + '</p>' + '</td>';
				employee_data += '<td align="center">' + '<p>' + '<h2>' + value.number + '</h2>' + '</p>' + '</td>';
				employee_data += '<td align="center">' + '<p>' + '<h2>' + value.area + '</h2>' + '</p>' + '</td>';
				employee_data += '<td align="center">' + '<p>' + '<h2>' + value.Result + '</h2>' + '</p>' + '</td>';
				employee_data += '<td align="center">' + '<p>' + '<h2>' + value.Status + '</h2>' + '</p>' + '</td>';
				employee_data += "</tr>" + '</tr>' + '</tr>' + '</tr>';
			});
			$('#employee_table').append(employee_data);
		});
	});
</script>