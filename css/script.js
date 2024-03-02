
				//reservation form validation// <--STRAT-->
				
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
				 
				//reservation form validation// <--END--->		
   
	
				//choose room & book the room // <--strat-->
				
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
					
					//choose room & book the room // <--end-->
	
					//check room availability// <--strat-->
				
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
			
				
				//check room availability// <--end-->
				
				//reservation form validation 1// <--strat-->		
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
					//reservation form validation 1// <--end-->		