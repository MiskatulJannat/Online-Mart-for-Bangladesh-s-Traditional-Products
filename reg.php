<html lang="en">
<head>
  <title>Gram Bangla Mart|customer service</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="">
  <link rel="shortcut icon" href="favicon (2).ico" type="image/x-generic" />
<link rel="bookmark" href="favicon(2).ico" type="image/x-generic" />
</head>
<style>
.navbar{
     
    background:#FFD801;
	height:180px;
	width:100%;
    }
  .nav-item{
    font-size: 2rem;
    padding-right:15px;
    font-family: comic sans MS
    
  }
  		#side_bar{
  			background-color: orange;
			color: black;
  			padding: 50px;
  			width: 200px;
  			height: 420px;
  		}

  </style>
<body style="background-image:url(6.webp);">

        <nav class="navbar navbar-light navbar-expand-lg py-3 fixed-top">
                <div class="container">
                    <!--logo section-->
                        <a href="#" class="navbar-brand">
                                     <h3 class="d-inline align-middle text-danger " style="font-family:comic sans MS"  style="font-size=100%">Gram Bangla mart</h3></br>
                                      <h4 class="d-inline align-middle text-success" style="font-family:comic sans MS" style="font-size=100%">গ্রাম  বাংলা মার্ট</h4>
                              </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;
                              <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#slot">
                                    <span class="navbar-toggler-icon"></span>
                                  </button>

                         <div class="collapse navbar-collapse" id="slot" >
                             <!--list section-->
                        <ul class="navbar-nav ml-auto">
                           
							<li class="nav-item"><a href="" class="nav-link text-success">Welcome to Gram Bangla Mart!</br>Register Here!</a></li>
                        </ul>
                     </div>
               </div>
        </nav>
		
		
		
		
<div class="row">
		<div class="col-md-4" id="side_bar">
			<img src="ddemo.jpg" alt="" class="img-fluid">
		</div>	
		
		<div class="col-md-8" id="main_content">
			<font color="white" size="11"><center><h3>User Registration Form</h3></center></font>
			<form action="register.php" method="post">
			
				<div class="form-group">
					<font color="white" size="4"><label for="name">Name:</label></font>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<font color="white" size="4"><label for="name">Email ID:</label></font>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<font color="white" size="4"><label for="name">Password:</label></font>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<font color="white" size="4"><label for="name">Mobile Number:</label></font>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<font color="white" size="4"><label for="name">Address:</label></font>
					<textarea rows="2" cols="10" class="form-control" name="address"></textarea>
				</div>
				<font color="white" size="4"><button type="submit" class="btn btn-primary">Register</button>
			</form>
	</div>

	</div>
		
 
 
<section class="bg-dark text-center text-light py-5">
                    <div class="container">
                  <a href="#"><i class="glyphicon glyphicon-envelope" style="font-family:Verdana;color:White;font-size:150%">Stay tuned us</br></i></a> </br>
                    <p>grambanglamart@gmail.com</br>Tel: +880-2- 5432178</br>Don’t miss the opportunity to get daily updates on all that’s new at Gram Bangla Mart</p>
                   <a href="#"><i class="fa fa-facebook">  facebook</i></a>  <a href="#"><i class="fa fa-instagram" >  Instagram</i></a>  
                    <a href="#"><i class="fa fa-twitter">  Twitter</i></a> 	</br>
          	<span style="color:green;">গ্রাম বাংলা মার্ট<a href="" target="_blank" class="ml-2 text-danger">Gram Bangla Mart</a></span>				
                    </div>
                  </section>
				  </div>
				  <?php
$con=mysqli_connect('localhost','root','','grocaries');
if(!$con){
    die("Database connection failed");
}
if(isset($_POST['email'])&&isset($_POST['password'])){
    if(empty($_POST['email'])||empty($_POST['password'])){
        die("please check carefully");
    }
    else {
        $email = $_POST['email'];
        $password = $_POST['password'];
    $query= "Insert into account(email,passwordfield) values('$email','$password')";
    if($query_run=mysqli_query($con,$query)){
        echo'Successfully Registered';
    }
    else{
        die("registration failed");
    }
    }
}

?>
</body>
</html>