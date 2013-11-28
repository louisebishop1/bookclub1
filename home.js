// JavaScript Document//

//CHECK PASSWORDS//
function checkPassword() {
var minLength = 4; 
var pw = document.registerForm.password.value;
var pw1 = document.registerForm.password1.value;
var spaces = " "; 

if (pw == '' || pw1 == '') {
alert('Please ensure your password is entered into both boxes');
return false;
}
// check for minimum length
if (document.registerForm.password.value.length < minLength) {
alert('Please enter a password containing more than ' + minLength + ' characters');
return false;
}
// check for spaces
if (document.registerForm.password.value.indexOf(spaces) > -1) {
alert("Please enter a password with no spaces.");
return false;
}
// check if passwords match
if (pw != pw1) {
alert ("Please check that you have entered the same password twice");
return false;
}
// check for at least one number
re = /[0-9]/;
if (!re.test(pw || pw1)) {
alert("Please ensure your password contains at least one number");
return false;
}
//if passwords match 
if (pw == pw1){
alert('You are now registered');
return true;
      }
	  }
// END OF CHECK PASSWORDS //

// LOG IN //
var	xhr2 = null;
var user = window.name;
function logIn(url2){
	var userName1 = document.getElementById('userName1').value;
	window.name = userName1;
	var pWord1 = document.getElementById('password2').value;
	var url2 = "http://itsuite.it.brighton.ac.uk/leb17/Book/checkuser.php?userID="+userName1+"&passWD="+pWord1;
	if (window.ActiveXObject){
		xhr2 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr2 = new XMLHttpRequest(); 
			}
			if (xhr2!=null){
				xhr2.onreadystatechange=Response2;
				xhr2.open("GET",url2, true);
				xhr2.send(null)
				}
					}
function Response2(){
	if (xhr2.readyState==4){
		if (xhr2.status==200){
			var response2=xhr2.responseText;
			alert(response2);
			if (response2 == "Login Sucessful"){
				
				document.location="Register.php";
				}
				else{""}
}
}
}

// END OF LOG IN //

// REGISTER NEW USER //
var	xhr=null;	
function registerUser(url){
	var userName = document.getElementById('userName').value;
	var firstName = document.getElementById('fname').value;
	var surName = document.getElementById('sname').value;
	var pWord = document.getElementById('password').value;
	var url = "http://itsuite.it.brighton.ac.uk/leb17/Book/RegisterNewUser.php?Name="+firstName+"&Surname="+surName+"&userID="+userName+"&passWD="+pWord;

	 if (window.ActiveXObject){
		 xhr = new ActiveXObject("Microsoft.XMLHTTP");
		 } 
			else if (window.XMLHttpRequest){
       			xhr = new XMLHttpRequest();
	   			}
	if (xhr!=null){  
		xhr.onreadystatechange=Response;
 		xhr.open("GET",url, true);
   		xhr.send(null)
	 }
}
function Response(){
	if (xhr.readyState==4){
		if (xhr.status==200){
			var response=xhr.responseText;
			} 
		}
	}
	
// END OF REGISTER NEW USER //

// REVIEW BOOK 1 //
var	xhr3 = null;
function review(url3){
	var userName1 = document.getElementById('U1').value;
	var bookName = 1;
	var Review1 = document.getElementById('R1').value;
	var url3 = "http://itsuite.it.brighton.ac.uk/leb17/Book/reviewbook1.php?bookID="+bookName+"&userID="+userName1+"&Review="+Review1;
	if (window.ActiveXObject){
		xhr3 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr3 = new XMLHttpRequest(); 
			}
			if (xhr3!=null){
				xhr3.onreadystatechange=Response3;
				xhr3.open("GET",url3, true);
				xhr3.send(null)
				}
					}
function Response3(){
	if (xhr3.readyState==4){
		if (xhr3.status==200){
			var response3=xhr3.responseText;
			alert(response3);
			if (response3 == "Posted"){
				
				document.location="book1.php";
				}
				else{""}
}
}
}

// END OF REVIEW BOOK 1 //

// REVIEW BOOK 2 //
var	xhr4 = null;
var user = window.name;
function reviewa(url4){
	var userName2 = document.getElementById('U2').value;
	window.name = userName2;
	var bookName = 2;
	var Review2 = document.getElementById('R2').value;
	var url4 = "http://itsuite.it.brighton.ac.uk/leb17/Book/reviewbook1.php?bookID="+bookName+"&userID="+userName2+"&Review="+Review2;
	if (window.ActiveXObject){
		xhr4 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr4 = new XMLHttpRequest(); 
			}
			if (xhr4!=null){
				xhr4.onreadystatechange=Response4;
				xhr4.open("GET",url4, true);
				xhr4.send(null)
				}
					}
function Response4(){
	if (xhr4.readyState==4){
		if (xhr4.status==200){
			var response4=xhr4.responseText;
			alert(response4);
			if (response4 == "Posted"){
				
				document.location="book2.php";
				}
				else{""}
}
}
}

// END OF REVIEW BOOK 2 //


// REVIEW BOOK 3 //
var	xhr3 = null;
var user = window.name;
function reviewb(url3){
	var userName3 = document.getElementById('U3').value;
	window.name = userName3;
	var bookName = 3;
	var Review3 = document.getElementById('R3').value;
	var url3 = "http://itsuite.it.brighton.ac.uk/leb17/Book/reviewbook1.php?bookID="+bookName+"&userID="+userName3+"&Review="+Review3;
	if (window.ActiveXObject){
		xhr3 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr3 = new XMLHttpRequest(); 
			}
			if (xhr3!=null){
				xhr3.onreadystatechange=Response3;
				xhr3.open("GET",url3, true);
				xhr3.send(null)
				}
					}
function Response3(){
	if (xhr3.readyState==4){
		if (xhr3.status==200){
			var response3=xhr3.responseText;
			alert(response3);
			if (response3 == "Posted"){
				
				document.location="book3.php";
				}
				else{""}
}
}
}

// END OF REVIEW BOOK 3 //

// REVIEW BOOK 4 //
var	xhr5 = null;
var user = window.name;
function reviewc(url5){
	var userName4 = document.getElementById('U4').value;
	window.name = userName4;
	var bookName = 4;
	var Review4 = document.getElementById('R4').value;
	var url5 = "http://itsuite.it.brighton.ac.uk/leb17/Book/reviewbook1.php?bookID="+bookName+"&userID="+userName4+"&Review="+Review4;
	if (window.ActiveXObject){
		xhr5 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr5 = new XMLHttpRequest(); 
			}
			if (xhr5!=null){
				xhr5.onreadystatechange=Response5;
				xhr5.open("GET",url5, true);
				xhr5.send(null)
				}
					}
function Response5(){
	if (xhr5.readyState==4){
		if (xhr5.status==200){
			var response5=xhr5.responseText;
			alert(response5);
			if (response5 == "Posted"){
				
				document.location="book4.php";
				}
				else{""}
}
}
}

// END OF REVIEW BOOK 4 //


// REVIEW BOOK 5 //
var	xhr6 = null;
var user = window.name;
function reviewd(url6){
	var userName5 = document.getElementById('U5').value;
	window.name = userName5;
	var bookName = 5;
	var Review5 = document.getElementById('R5').value;
	var url6 = "http://itsuite.it.brighton.ac.uk/leb17/Book/reviewbook1.php?bookID="+bookName+"&userID="+userName5+"&Review="+Review5;
	if (window.ActiveXObject){
		xhr6 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr6 = new XMLHttpRequest(); 
			}
			if (xhr6!=null){
				xhr6.onreadystatechange=Response6;
				xhr6.open("GET",url6, true);
				xhr6.send(null)
				}
					}
function Response6(){
	if (xhr6.readyState==4){
		if (xhr6.status==200){
			var response6=xhr6.responseText;
			alert(response6);
			if (response6 == "Posted"){
				
				document.location="book5.php";
				}
				else{""}
}
}
}

// END OF REVIEW BOOK 5 //

// REVIEW BOOK 6 //
var	xhr7 = null;
var user = window.name;
function reviewe(url7){
	var userName6 = document.getElementById('U6').value;
	window.name = userName6;
	var bookName = 6;
	var Review6 = document.getElementById('R6').value;
	var url7 = "http://itsuite.it.brighton.ac.uk/leb17/Book/reviewbook1.php?bookID="+bookName+"&userID="+userName6+"&Review="+Review6;
	if (window.ActiveXObject){
		xhr7 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr7 = new XMLHttpRequest(); 
			}
			if (xhr7!=null){
				xhr7.onreadystatechange=Response7;
				xhr7.open("GET",url7, true);
				xhr7.send(null)
				}
					}
function Response7(){
	if (xhr7.readyState==4){
		if (xhr7.status==200){
			var response7=xhr7.responseText;
			alert(response7);
			if (response7 == "Posted"){
				
				document.location="book6.php";
				}
				else{""}
}
}
}

// END OF REVIEW BOOK 6 //

// SHOW REVIEW 1 /// 

var	xhr8 = null;
function showreview(url8){
	var bookName = 1;
	var url8 = "http://itsuite.it.brighton.ac.uk/leb17/Book/checkreview1.php?bookID="+bookName;
	if (window.ActiveXObject){
		xhr8 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr8 = new XMLHttpRequest(); 
			}
			if (xhr8!=null){
				xhr8.onreadystatechange=Response8;
				xhr8.open("GET",url8, true);
				xhr8.send(null)
				}
					}
function Response8(){
	if (xhr8.readyState==4){
		if (xhr8.status==200){
			var response8=xhr8.responseText;
			document.getElementById('reviewbox').innerHTML= response8;
}
}
}
	

// END OF SHOW REVIEW 1 //

// SHOW REVIEW 2 /// 

var	xhr9 = null;
function showreviewa(url9){
	var bookName = 2;
	var url9 = "http://itsuite.it.brighton.ac.uk/leb17/Book/checkreview1.php?bookID="+bookName;
	if (window.ActiveXObject){
		xhr9 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr9 = new XMLHttpRequest(); 
			}
			if (xhr9!=null){
				xhr9.onreadystatechange=Response9;
				xhr9.open("GET",url9, true);
				xhr9.send(null)
				}
					}
function Response9(){
	if (xhr9.readyState==4){
		if (xhr9.status==200){
			var response9=xhr9.responseText;
			document.getElementById('reviewbox').innerHTML= response9;
}
}
}
	

// END OF SHOW REVIEW 2 //

// SHOW REVIEW 3 /// 

var	xhr10 = null;
function showreviewb(url10){
	var bookName = 3;
	var url10 = "http://itsuite.it.brighton.ac.uk/leb17/Book/checkreview1.php?bookID="+bookName;
	if (window.ActiveXObject){
		xhr10 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr10 = new XMLHttpRequest(); 
			}
			if (xhr10!=null){
				xhr10.onreadystatechange=Response10;
				xhr10.open("GET",url10, true);
				xhr10.send(null)
				}
					}
function Response10(){
	if (xhr10.readyState==4){
		if (xhr10.status==200){
			var response10=xhr10.responseText;
			document.getElementById('reviewbox').innerHTML= response10;
}
}
}
	

// END OF SHOW REVIEW 3 //


// SHOW REVIEW 4 /// 

var	xhr11 = null;
function showreviewc(url11){
	var bookName = 4;
	var url11 = "http://itsuite.it.brighton.ac.uk/leb17/Book/checkreview1.php?bookID="+bookName;
	if (window.ActiveXObject){
		xhr11 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr11 = new XMLHttpRequest(); 
			}
			if (xhr11!=null){
				xhr11.onreadystatechange=Response11;
				xhr11.open("GET",url11, true);
				xhr11.send(null)
				}
					}
function Response11(){
	if (xhr11.readyState==4){
		if (xhr11.status==200){
			var response11=xhr11.responseText;
			document.getElementById('reviewbox').innerHTML= response11;
}
}
}
	

// END OF SHOW REVIEW 4 //

// SHOW REVIEW 5 /// 

var	xhr12 = null;
function showreviewd(url12){
	var bookName = 5;
	var url12 = "http://itsuite.it.brighton.ac.uk/leb17/Book/checkreview1.php?bookID="+bookName;
	if (window.ActiveXObject){
		xhr12 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr12 = new XMLHttpRequest(); 
			}
			if (xhr12!=null){
				xhr12.onreadystatechange=Response12;
				xhr12.open("GET",url12, true);
				xhr12.send(null)
				}
					}
function Response12(){
	if (xhr12.readyState==4){
		if (xhr12.status==200){
			var response12=xhr12.responseText;
			document.getElementById('reviewbox').innerHTML= response12;
}
}
}
	

// END OF SHOW REVIEW 5 //

// SHOW REVIEW 6 /// 

var	xhr13 = null;
function showreviewe(url13){
	var bookName = 6;
	var url13 = "http://itsuite.it.brighton.ac.uk/leb17/Book/checkreview1.php?bookID="+bookName;
	if (window.ActiveXObject){
		xhr13 = new ActiveXObject("Microsoft.XMLHTTP");} 
		else if (window.XMLHttpRequest){
			xhr13 = new XMLHttpRequest(); 
			}
			if (xhr13!=null){
				xhr13.onreadystatechange=Response13;
				xhr13.open("GET",url13, true);
				xhr13.send(null)
				}
					}
function Response13(){
	if (xhr13.readyState==4){
		if (xhr13.status==200){
			var response13=xhr13.responseText;
			document.getElementById('reviewbox').innerHTML= response13;
}
}
}
	

// END OF SHOW REVIEW 6 //