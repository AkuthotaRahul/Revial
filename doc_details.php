<?php
if(isset($_POST['s1'])){
	include("doc_details_conn.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript" src="js/jquery-1.11.3.min.js" ></script>
<script>
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function(){
$("#imgInp").change(function(){
    readURL(this);
});
})

</script>

<style>
.in{
	border:1px solid #00ffff ;
	border-spacing:1px 2px;
	background-color:#1abc9c;
	text-decoration:none;
	height:40px;
	width:300px;
	font-family:"Montserrat";
	padding:2px;
	color:#000;
	font-size:20px;	
}
.button1 {
    background-color: white; 
    color: black; 
   border:1px solid #25C2BE ;
}

.button1:hover {
    background-color: #232323;
    color: white;
}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
                <form action="" method="post" enctype="multipart/form-data" id="form1" runat="server">
  <?php /*
                 if(isset($image)){
                 echo "<img src='uploads/$image' width='100' height='100'>";
                 } 
                */ ?><div class="container">
                 <div><input type="file" name="attachment"  id="imgInp" ></div> 
              <img id="blah" src="#" class="img-circle" alt="your image" width="100px" height="100px"/>       
                              
                 <div>                
                <b>  </b><input type="text" name="name" class="in" placeholder="Name" /><br>
                </div> <br>
                <div>
          <b>  </b><input type="text" name="email" class="in" placeholder="Email Id" /><br>
               </div> <br>
                <div>
                              <textarea placeholder="details" class="in" placeholder="Details"  name="details"> </textarea><br>
        	</div>
             <div>
                       <input type="submit" name="s1" value="submit" class="button button1"/>
             </div>
            </div>
            </form>
                
  </body>             
</html>    

            