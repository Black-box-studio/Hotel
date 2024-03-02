<?php include("header.php");
	$sql1="SELECT * FROM reserv_front_image";
	$sql2="SELECT * FROM reserv_side_image";
	
	
	$sql11=mysqli_query($conn,$sql1);
	$sql12=mysqli_query($conn,$sql2);
?>


<script>
	
var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
   
   
	
	//room book//
	 function book1(){
            let x=document.getElementById("selectroom").value;
            let x1=document.getElementById("room1");
            let x2=document.getElementById("room2");
            let x3=document.getElementById("room3");

            let y1 = window.getComputedStyle(rom1, null).getPropertyValue('background-Color');
            let y2 = window.getComputedStyle(rom2, null).getPropertyValue('background-Color');
            let y3 = window.getComputedStyle(rom3, null).getPropertyValue('background-Color');
            
            switch(x){
                case'1':
                    if (y1 === 'rgb(255, 0, 0)')
                        {
                            alert('This room is already booked!');
                        } 
                    else
                        {
                            x1.querySelector("div").style.backgroundColor = "rgb(255, 0, 0)";
                            x1.querySelector("div").style.color = "rgb(255,255,255)"; 
                            alert("Welcome to Hotel aariyas room 1 is booked");
                        }
                    break;
                case'2':
                    if (y2 === 'rgb(255, 0, 0)')
                        {
                            alert('This room is already booked!');
                        } 
                    else
                        {
                            x2.querySelector("div").style.backgroundColor = "rgb(255, 0, 0)";
                            x2.querySelector("div").style.color = "rgb(255,255,255)";
                            alert("Welcome to Hotel aariyas room 2 is booked");
                        }
                    break;
                case'3':
                    if (y3 === 'rgb(255, 0, 0)')
                        {
                            alert('This room is already booked!');
                        } 
                    else
                        {
                            x3.querySelector("div").style.backgroundColor = "rgb(255, 0, 0)";
                            x3.querySelector("div").style.color = "rgb(255,255,255)";
                            alert("Welcome to Hotel aariyas room 3 is booked");
                        }
                    break;
                case 'All':
                    if (y3 === 'rgb(255, 0, 0)')
                        {
                            alert('This room is already booked!');
                        } 
                    else
                        {
                            x1.querySelector("div").style.backgroundColor = "rgb(255, 0, 0)";
                            x1.querySelector("div").style.color = "rgb(255,255,255)";
                            x2.querySelector("div").style.backgroundColor = "rgb(255, 0, 0)";
                            x2.querySelector("div").style.color = "rgb(255,255,255)";
                            x3.querySelector("div").style.backgroundColor = "rgb(255, 0, 0)";
                            x3.querySelector("div").style.color = "rgb(255,255,255)";
                            alert("Welcome to Hotel aariyas rooms booked all rooms");
                        }
                    break;
                default:
                    alert('Please select a valid room number.');
            }
        }   
        function unbook1(){
            let x=document.getElementById("selectroom").value;
            let x1=document.getElementById("room1");
            let x2=document.getElementById("room2");
            let x3=document.getElementById("room3");

            
            
            switch(x){
                case'1':

                            x1.querySelector("div").style.backgroundColor ="#037634 ";
                            x1.querySelector("div").style.color = "block"; 
                            alert("your request accepted your room is unbooked");
                        
                    break;
                case'2':

                            x2.querySelector("div").style.backgroundColor = "#037634 ";
                            x2.querySelector("div").style.color = "block";
                            alert("your request accepted your room is unbooked");
                        
                    break;
                case'3':
                    
                            x3.querySelector("div").style.backgroundColor = "#037634 ";
                            x3.querySelector("div").style.color = "block";
                            alert("your request accepted your room is unbooked");
                        
                    break;
                case 'All':
                  
                            x1.querySelector("div").style.backgroundColor = "#037634 ";
                            x1.querySelector("div").style.color = "block";
                            x2.querySelector("div").style.backgroundColor = "#037634 ";
                            x2.querySelector("div").style.color = "block";
                            x3.querySelector("div").style.backgroundColor = "#037634 ";
                            x3.querySelector("div").style.color = "block";
                            alert("your request accepted your room is unbooked");
                    break;
					}
					}
					
	// check availabolity//		
	
  </script>
  
        <!-- Page Header Start -->
		<?php while($row = mysqli_fetch_array($sql11)) { ?>
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(./img/<?php echo $row['pic1']; ?>);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo $row['frontcomment']; ?></h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>
        </div>
		<?php } ?>	
        <!-- Page Header End -->


        <!-- Booking Start -->
        
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 10px;
        }

        button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
		.book {
	width: 500px;
	margin: 0 auto;
	padding: 50px;
}
.Header
{
	text-align:center;
	color:#F39C12 ;
}
    </style>


	
    <h1 class="Header">CHECK ROOM AVAILABILITY</h1>
 <div class="book">
    <label for="check-in-date">Check-in date:</label>
    <input type="date" id="check-in-date">

    <label for="check-out-date">Check-out date:</label>
    <input type="date" id="check-out-date">

    <button onclick="checkAvailability()">Check Availability</button>
 </div>	
    <script>
        const roomAvailability = {
            '2023-12-06': 3,
            '2023-12-07': 2,
            '2023-12-08': 0,
			'2023-12-09': 3,
            '2023-12-10': 2,
            '2023-12-11': 0,
			'2023-12-12': 3,
            '2023-12-13': 2,
            '2023-12-14': 0,
			'2023-12-15': 3,
            '2023-12-16': 2,
            '2023-12-17': 0,  
            '2023-12-18': 2,
            '2023-12-19': 0,  
            '2023-12-20': 2,
            '2023-12-21': 0,  
            '2023-12-22': 2,
            '2023-12-23': 0,
			'2023-12-24': 3,
            '2023-12-25': 2,
            '2023-12-26': 0,
			'2023-12-27': 3,
            '2023-12-28': 2,
            '2023-12-29': 0,
			'2023-12-30': 2,
			'2023-12-31': 2,
			'2023-12-31': 2,
            // Add more dates as needed
        };

        function checkAvailability() {
            const checkInDate = document.getElementById('check-in-date').value;
            const checkOutDate = document.getElementById('check-out-date').value;

            const availableRooms = getAvailableRooms(checkInDate, checkOutDate);

            if (availableRooms > 0) {
                alert(`Rooms available: ${availableRooms}`);
            } else {
                alert('Sorry, no rooms available for the selected dates.');
            }
        }

        function getAvailableRooms(checkInDate, checkOutDate) {
            let availableRooms = 0;

            for (let date = new Date(checkInDate); date <= new Date(checkOutDate); date.setDate(date.getDate() + 1)) {
                const dateString = date.toISOString().split('T')[0];
                availableRooms += roomAvailability[dateString] || 0;
            }

            return availableRooms;
        }
    </script>


                  
        <!-- Booking End -->


        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Luxury Room</span></h1>
                </div>
                <div class="row g-5">
				<?php while($row = mysqli_fetch_array($sql12)) { ?>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="./img/<?php echo $row['pic1']; ?>" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="./img/<?php echo $row['pic2']; ?>">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="./img/<?php echo $row['pic3']; ?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="./img/<?php echo $row['pic4']; ?>">
                            </div>
                        </div>
                    </div>
					<?php } ?>					
                      <div class="col-lg-6">
					  <h2 style='color:red;'>FILL THE RESERVATION FORM</h2>
                       
					<form id="reservationForm" onsubmit="return validateForm()" method="post" action="insert8.php">
						<label for="name">Name:</label>
						<input type="text" id="name" name="name" placeholder="John Doe" required>

						<label for="email">Email:</label>
						<input type="email" id="email" name="email" placeholder="john.doe@email.com" required>

						<label for="phone">Phone:</label>
						<input type="tel" id="phone" name="phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>

						<label for="adults">Adults:</label>
						<input type="number" id="adults" name="adults"  placeholder="2" min="1" required>

						<label for="children">Children:</label>
						<input type="number" id="children" name="Children" placeholder="2" min="0"  required>

						<label for="checkinDate">Check-in Date:</label>
						<input type="date" id="checkinDate" name="checkinDate" required>

						<label for="checkoutDate">Check-out Date:</label>
						<input type="date" id="checkoutDate" name="checkOutDate" required>

						<label for="message">Message:</label>
						<textarea id="message" name="message" placeholder="Tell us anything else that might be important."></textarea>

						<button type="submit" name="submit1">Submit</button>
						</form>

					<script>
			function validateForm() {
  // Get input values
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const adults = document.getElementById('adults').value;
  const children = document.getElementById('children').value;
  const checkinDate = document.getElementById('checkinDate').value;
  const checkoutDate = document.getElementById('checkoutDate').value;
  const message = document.getElementById('message').value.trim();

  // Simple validation: Check if required fields are not empty
  if (name === '' || email === '' || phone === '' || adults === '' || children === '' || checkinDate === '' || checkoutDate === '') {
    alert('Please fill out all required fields.');
    return false; // Prevent form submission
  }

  // Additional validation logic can be added here

  // If all validations pass, show success popup
  alert('Reservation submitted successfully!');
  return true;
}
</script>
			
					<h3 style="color:red;">ROOM RESERVATION</h3> 
				<div class="div1">
					<label>ROOMS NO</label>
					<select id="selectroom">
					<option></option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>All</option>
					</select>
					<br>
					<br>
    <button  id="btn" onclick="book1()">BOOK</button>
    <button  id="btn" onclick="unbook1()">UNBOOK</button>
	<button type="submit"><a href="payment.php">Confirm</a></button>
			</div>
				<div class="div2">
				<div id="room1">
				<div id="rom1">room1</div>
				</div>
				<div id="room2">
				<div id="rom2">room2</div>
				</div>
					<div id="room3">
					<div id="rom3">room3</div>
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
     <br>   

        <?php include('footer.php')?>
		
		<style>


.p
{
	color:white;
}

div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}


}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

textarea {
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
  padding: 0 12px;
}

button:hover {
  background: #333;
}

	// room select//
 #selectroom{
        width:100px;
    }
    .div2{
        display:flex;
        margin-top:10px;
    }
    .div2 #room2,#room3{
        margin-left:20px;
        
    }

    #room1,#room2,#room3
        {
            height:30px;
            width:60px;
            border:1px solid black;
            background-color: rgb(0,128,0);
            margin-top:10px;
        }
    #room1 div{
        text-align:center;
        height:30px;
        width:60px;
        
    }
    #room2 div{
        text-align:center;
        height:30px;
        width:60px;
        
    }
    #room3 div{
        text-align:center;
        height:30px;
        width:60px;
        
    }
	.booking-form {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
  background: #fff;
}

.div.elem-group {
  margin: 20px 0;
}

.div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}

.label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

.div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

.textarea {
  height: 250px;
}

.hr {
  border: 1px dotted #ccc;
}

.button {
  height: 50px;
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
  padding: 0 12px;
}

.button:hover {
  background: #333;
}

</style>


		