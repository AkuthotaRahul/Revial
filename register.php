<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
    function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("password_strength");
 
        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }
 
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
 
        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
        }
 
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
				
                break;
            case 2:
                strength = "Good";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong";
                color = "green";
                break;
            case 5:
                strength = "Very Strong";
                color = "darkgreen";
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
    }
</script>
<script>
function checkLength(){
    var textbox = document.getElementById("txtPassword");
    if(textbox.value.length <= 10 && textbox.value.length >= 8){
        alert("success");
    }
    else{
        alert("make sure the input is between 8-10 characters long")
    }
}
</script>

<style>
body{
	
	background-image:;
}
.banner{
	width:1600px;
	height:700px;
		
}
.banner .divleft{
	width:750px;
	height:500px;
	float:left;
	margin-top:50px;
	
}
.banner .divright{
	width:750px;
	height:500px;
	float:left;
	margin-top:50px;

}

div.background {
  background:url(images/desktop-woman003.st.jpg);
  border: 2px solid black;
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
.bor{
	width:400px;
	height:450px;
	font-size:20px;
}
.in{
	border:none;
	width:250px;
	height:30px;
	margin:20px ;
	text-align:center;
	background-color:#5D5D5D;

	
}
.but{
	border:outset;
	width:150px;
	height:30px;
	margin:15px;
	text-align:center;
	text-decoration:blink;
}
a{
	text-decoration:blink;
	text-decoration:underline;
}
.dive{
	color:#000;
	font-family:"Agency FB";
	padding:2px;
	font-size:50px;
}
.inputbutton{
	margin-bottom:10px;
	padding:7px 7px;
    background-position: 5px -7px !important;
    padding: 10px 10px 10px 25px;
    width: 180px;
    border: 1px solid #CCC;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
    -webkit-box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
	text-align:center;
	background-color:#000;
	color:#FFF;
}


    .textbox {
    background: #F1F1F1 url(http://html-generator.weebly.com/files/theme/input-text-40.png) no-repeat;
    background-position: 5px -7px !important;
    padding: 10px 10px 10px 25px;
    width: 270px;
    border: 1px solid #CCC;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
    -webkit-box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
	background-color:#000;
	color:#FF2B2B;
}

.textbox:focus {
    background-color: #FFF;
    border-color: #E8C291;
    outline: none;
    -moz-box-shadow: 0 0 0 1px #e8c291 inset;
    -webkit-box-shadow: 0 0 0 1px #E8C291 inset;
    box-shadow: 0 0 0 1px #E8C291 inset;
}

  .lin { 
    height: 25px; 
    width: 275px; 
    background-color: transparent;  
    border-style: solid;  
    border-width: 0px 0px 1px 0px;  
    border-color: darkred; 
    outline:0; 
  }
  .left
  {
	  float:left;
  }
</style>
</head>
<body>
<div class="background">
 <div class="transbox">
<div>
<div class="banner">
<div class="divleft">

<form action="userlogin (1).php" method="post"> <h1 style="margin-left:550px"> <font size="80px" face="Homizio">REVIVAL</font></h1>
<div class="bor" align="center" ><font size="20px"> 
 Login </font><br /><br />
<input type="" class="lin" /><br /><br /><br /><br />
<input type="text" name="username" placeholder="username" class="textbox"/><br /><br />
<input type="password" name="password" placeholder="password" class="textbox"/><br /><br />
<input type="submit" value="Sign in" name="submit" class="inputbutton"  align="left"/><br />

</div>
</form>
</div><br /><br /><br /><br /><br />
 <div class="divright">
 <form action="register2.php" method="post"> 
<font size="20px"> Sign Up </font><br /> <br /><br />
<input type="" class="lin" /><br /><br /><br /><br />
<input type="text" name="username" placeholder="Username" class="textbox"/><br /><br />

<input type="password" name="password" placeholder="password" id="txtPassword" onkeyup="CheckPasswordStrength(this.value)" onchange="checkLength()" class="textbox"/>
<span id="password_strength"></span><br /><br />
<input type="date" name="dob" placeholder="" class="textbox"/>
<br /><br />
<input type="email" name="email_id" placeholder="someone@mail.com" class="textbox"/><br /><br />
<!--<input type="text" name="phno" placeholder="Phone Number" maxlength="10" class="numbersOnly textbox"/><br /><br /> -->
<input type="submit" value="sign in" name="submit" class="inputbutton"  /><br />
</form>

</div>
</div>
</div>
</div>
</div>

<script>
	 jQuery('.numbersOnly').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
});
</script>
</body>
</html>