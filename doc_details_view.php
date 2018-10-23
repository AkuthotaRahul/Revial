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
      background-color: #afb894; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #ffff4d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #d2ff4d; /* White */
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
      <a class="navbar-brand" href="#">Doc.Revival</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><h3>Home </h3></a></li>
      <li><a href="#"><h3> Self-Help </h3></a></li>
      <li><a href="#"><h3>Treatment </h3></a></li>
      <li><a href="#"> <h3>Motivation-Videos </h3></a></li>
      <li><a href="#"><h3>About Us </h3></a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">   
<div class="jumbotron"> 
  <h3>Doctors Available </h3> <br>
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
                  <!--  <input type="submit" class="btn btn-info btn-md" value="Chat" name="name"> -->
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

