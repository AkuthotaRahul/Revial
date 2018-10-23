<?php
    $con=mysqli_connect("localhost","root","","revival");
    // Check connection
    if (mysqli_connect_errno()) {
    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $result = mysqli_query($con,"SELECT * 
    FROM  `doc_details` 
     ");
    
    
    
    while($row = mysqli_fetch_assoc($result)) {
     $data[]=$row;
	}
	 mysqli_close($con);
	?>
    <!DOCTYPE html>
<html lang="en">
<head>

  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <a class="navbar-brand" href="#">Revival</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Home</a></li>
      <li><a href="self_help.html">Self Help</a></li>
      <li><a href="#">Treatment</a></li>
      <li><a href="#">Motivational Videos</a></li>
      <li><a href="Login_v17/index.html">Sign Up?</a></li>
      <li><a href="#">About Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin"></h3>
  
<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" align="center">
        <img src="images/All-great-changes-are-preceded-by-chaos..jpg" style="width:70%; height:50%">
      </div>

      <div class="item" align="center">
        <img src="images/top-10-successful-people-who-overcame-failure-and-rejection-2-638.jpg"  style="width:70%; height:50%">
      </div>
       <div class="item" align="center">
        <img src="images/womensday-quotes-rectangle8.jpg"  style="width:70%; height:50%">
      </div>
    
      <div class="item" align="center">
        <img src="images/11.jpg" style="width:70%; height:50%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin" class="display-1">Get help. Get better.</h3>
  <p class="">
No matter what's troubling you, get the support you need, right here, right now.</p>
<p>
Chat live online with a professional counsellor, anywhere, anytime.
It can be really helpful chatting to a counsellor - speaking to an independent person about your problem can help you look at the situation objectively, particularly if you speak to someone skilled at helping you talk and trained in assessment.
</p>

 <a href="#" class="btn btn-info" role="button">Chat Now</a>
  
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">   
<div class="jumbotron"> 
  <h1>Support </h1> <br>
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
                   Details:<?php echo $data[$i]['details'];?></br>
                    Email Id:<?php echo $data[$i]['email'];?></br>
                    <input type="submit" class="btn btn-info btn-md" value="Chat" name="name">
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
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p><u> B Y &nbsp; T E A M : R E V I V A L </u></p> 
</footer>

</body>
</html>

