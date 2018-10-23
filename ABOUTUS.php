<?php
    $con=mysqli_connect("localhost","root","","revival");
    // Check connection
    if (mysqli_connect_errno()) {
    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $result = mysqli_query($con,"SELECT * 
    FROM  `admin` 
     ");
    
    
    
    while($row = mysqli_fetch_assoc($result)) {
     $data[]=$row;
	}
	 mysqli_close($con);
	?>
<!doctype html>
<html lang="en">
<head>
	<title>ABOUT US</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="shortcut icon" href=".jpg"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }

  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 13px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  p{
	  font-size:18px;
  }
  .font{
	  font-size:24px;
  }
  td{
	padding-right:69%;
  }
  

  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Revival</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="home.php">Home</a></li>
      <li><a href="#">Self Help</a></li>
      <li><a href="#">Treatment</a></li>
      <li><a href="#">Motivational Videos</a></li>
      <li><a href="Login_v17/index.html">Sign Up?</a></li>
      <li><a href="#">About Us</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid bg-2 text-center">
  <h3 class="margin" class="display-1">ABOUT US</h3>
  <p class="">
No matter what's troubling you, get the support you need, right here, right now.</p>
<p>
Chat live online with a professional counsellor, anywhere, anytime.
It can be really helpful chatting to a counsellor - speaking to an independent person about your problem can help you look at the situation objectively, particularly if you speak to someone skilled at helping you talk and trained in assessment.
</p>
</div>


<div class="container-fluid bg-3 text-center">   
<div class="jumbotron"> 
  <h1>DEVELOPERS </h1> <br>
  <div class="row">
             <?php
			   //print_r($data);
			   for($i=0;$i<count($data);$i++){
			   ?> 
               <div class="col-lg-4">
               <table> 
              <tr> 
               <td > 
                    <img src="uploads/<?php echo $data[$i]['image'];?>  "  class="img-circle" width="200px" height="200px"> </br>
                    Name:<?php echo $data[$i]['name'];?></br>
                    EmailId:<?php echo $data[$i]['email'];?></br>
                    </td>
               </tr>
               </tbody>
               </table>
               
               </div>
               <?php
			   }?>
      </div>
    </div>
	
  </div>
  <footer class="container-fluid bg-4 text-center" style="height:10px">
  <p><u> B Y &nbsp; T E A M : R E V I V A L </u></p>
<a href="" style="float:right">top</a>  
</footer>
</body>
</html>