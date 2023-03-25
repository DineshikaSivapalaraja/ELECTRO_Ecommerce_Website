
<?php
if(isset($_POST['checkout'])){
	?>
	<script>
	alert("sucessfully , paid ");
	window.location.replace("index.php");
	</script>
	<?php
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Card Payment</title>
	<link rel="stylesheet" type="text/css" href="css/payment.css">
</head>
<body>
	<div class="container">
		<div class="right" >
			<h3>PAYMENT</h3>
			<form>
				<p style="color:white">Accepted Card</p> <br>
				<img src="images/card1.png" width="100">
				<img src="images/card2.png" width="50">
				<br><br>
                <p style="color:white"> Name on card</p>
			<input type="text" name="cname" placeholder="Enter card number"  required>
            <p style="color:white">Credit card number</P>
			<input type="text" name="cnumber" placeholder="Enter card number" required>
           
            <p style="color:white">Exp month</p>
				
				<input type="text" name="expmonth" placeholder="Enter Month"  required>
				<div id="zip">
               
					<label>
                    <p style="color:white">Exp year</p>
						<select name='expyear'>
							<option>Choose Year..</option>
							<option value='2022'>2022</option>
							<option value='2023'>2023</option>
							<option value='2024'>2024</option>
							<option value='2025'>2025</option>
						</select>
					</label>
						<label>
						<p style="color:white">CVV</p>
						<input type="number" name="cvv" placeholder="CVV" required>
					</label>
				</div>
			</form>
			<input type="submit" name="checkout" value="Proceed to Checkout" style="margin-bottom: 1rem;">
		</div>
	</div>
</body>
</html>