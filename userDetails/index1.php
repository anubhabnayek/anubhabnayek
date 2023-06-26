<?php
include_once('connection.php');
if(isset($_POST['submit'])){
	//echo"</pre>";print_r($_POST);exit;

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$postcode=$_POST['postcode'];
	$country=$_POST['country'];
	$cardtype=$_POST['cardtype'];
	$cardnumber=$_POST['cardnumber'];
	$secure=$_POST['secure'];
	$namecard=$_POST['namecard'];
	//echo"</pre>";print_r($_POST);exit;
	$query="INSERT INTO payment(name,email,phone,address,postcode,country,cardtype,cardnumber,secure,namecard)VALUES
	('$name','$email','$phone','$address','$postcode','$country','$cardtype','$cardnumber','$secure','$namecard')";
	 $data=mysqli_query($conn,$query); 
	 if($data){
		echo"";
	}
	else{
		echo"data not imserted";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <link rel="stylesheet" href="style1.css">
</head>
<body>

<form action="index1.php" method="post"id=payment>
	<fieldset>
		<legend>Your details</legend>
		<ol>
			<li>
				<label for=name>Name</label>
				<input id=name name=name type=text placeholder="First and last name" required autofocus>
			</li>
			<li>
				<label for=email>Email</label>
				<input id=email name=email type=email placeholder="example@domain.com" required>
			</li>
			<li>
				<label for=phone>Phone</label>
				<input id=phone name=phone type=tel placeholder="Eg. +447500000000" required>
			</li>
		</ol>
	</fieldset>
	<fieldset>
		<legend>Delivery address</legend>
		<ol>
			<li>
				<label for=address>Address</label>
				<textarea id=address name=address rows=5 required></textarea>
			</li>
			<li>
				<label for=postcode>Post code</label>
				<input id=postcode name=postcode type=text required>
			</li>
			<li>
				<label for=country>Country</label>
				<input id=country name=country type=text required>
			</li>
		</ol>
	</fieldset>
	<fieldset>
		<legend>Card details</legend>
		<ol>		
			<li>
				<fieldset>
					<legend>Card type</legend>
					<ol>
					
							
							<input id=visa name=cardtype type=radio>
							<label for=visa><img src="image/Visadebitcardpng-1599584312349.png"hight=20px width=20px>VISA<b>&nbsp</b></label>
                        
						
							<input id=amex name=cardtype type=radio>
							<label for=amex><img src="image/41261786-3d9fbf88-6d92-11e8-9c64-46f9ce91611a.png"hight=20px width=20px><b>&nbsp</b>AmEx</label>
						
                             
							<input id=mastercard name=cardtype type=radio>
							<label for=mastercard><img src="image/MasterCard_early_1990s_logo.svg.png"hight=20px width=20px>Mastercard<b>&nbsp</b></label>

					</ol>
				</fieldset>
			</li>
			<li>
				<label for=cardnumber>Card number</label>
				<input id=cardnumber name=cardnumber type=number required>
			</li>
			<li>
				<label for=secure>Security code</label>
				<input id=secure name=secure type=number required>
			</li>
			<li>
				<label for=namecard>Name on card</label>
				<input id=namecard name=namecard type=text placeholder="Exact name as on the card" required>
			</li>
		</ol>
	</fieldset>
	<fieldset>
		<button type=submit name="submit">Buy it!</button>
	</fieldset>
</form>

</body>
</html>