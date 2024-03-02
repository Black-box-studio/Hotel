<?php include("header.php")?>
<br>
	<br>
	<br>
<head>
		
	<style>
	.success-card {
    display: none;
    background-color: #4caf50;
    color: #fff;
    padding: 20px;
    margin-top: 20px;
    border-radius: 8px;
    text-align: center;
}

.success-card p {
    margin: 0;
}
h1 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    color: #555;
}

input {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}



</style>	
<script>
	function submitForm {
    event.preventDefault(); // Prevents the default form submission

    // Validate the form
    if (validateForm()) {
        // If the form is valid, display the success card
        document.getElementById('successCard').style.display = 'block';
    }
}

function validateForm() {
    // Basic validation for demonstration purposes
    var cardNumber = document.getElementById('cardNumber').value;
    var expiryDate = document.getElementById('expiryDate').value;
    var cvv = document.getElementById('cvv').value;

    // Add your validation logic here (e.g., regex, length checks)

    // For simplicity, let's assume all fields are required
    if (cardNumber && expiryDate && cvv) {
        return true;
    } else {
        alert('Please fill in all required fields.');
        return false;
    }
}


</script>
</head>
       
        <!-- Page Header End -->


        <!-- Booking Start -->
     

        <!-- Booking Start -->
      
                
                    <div class="container-fluid page-header mb-5 p-0" >
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
											 <body>
									<div class="container">
								<h1>Room Payment</h1>
								<form id="paymentForm" onsubmit="submitForm" method="post" action="insert10.php">
									<label for="cardNumber">Card Number:</label>
									<input type="text" id="cardNumber" name="card" placeholder="Enter card number" required>
									
									<label for="expiryDate">Expiry Date:</label>
									<input type="text" id="expiryDate" name="expiry" placeholder="MM/YY" required>
									
									<label for="cvv">CVV:</label>
									<input type="text" id="cvv" name="ccv" placeholder="Enter CVV" required>
									
									<button type="submit" name="submit1" value="submit">Pay Now</button>
								</form>

								
							</div>

						</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
	<br>
	<br>
	<br>
	<br>
	<br>
       

        <?php include('footer.php')?>
	