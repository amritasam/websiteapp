# websiteapp

<!DOCTYPE html>
 <html>
 <head>
 	<title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

//reference to css page(style.css)
  <link rel="stylesheet" type="text/css" href="style.css"> 

//google font(Josefin sans)
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
 </head>

 <body>
//bootstrap(navigation bar)
 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
//linked to about page(about.php)
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

// bootstrap(carousel)
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/losa.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/chi.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/nw.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

//my=margin-top-bottom, py=padding-top-bottom
//for about us
<section class="my-5">
	<div class="py-4">
		<h2 class="text-center">About us</h2>
	</div>
//bootstrap grid (lg=large devices, md=medium devices)
//divide into 2(one side image and other text)
	<div class="container-fluid">
	  <div class="row">
	   <div class="col-lg-6 col-md-4 col-12">
		<img src="images/bird.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
		<h2 class="display-6">Amrita Sambary</h2>
		<p class="py-2">i am graduate of computer engineering i like to dance</p>
//for check more button
		<a href="about.php" class="btn btn-success">Check more</a>
		</div>
	  </div>
	</div>
</section>

//different section
<section class="my-5">
	<div class="my-5">
	<h2 class="text-center">Our services</h2>		
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">

				<div class="card" style="width:400px">
                  1)  <img class="card-img-top" src="images/nature.jpg" alt="Card image">
                     <div class="card-body">
                           <h4 class="card-title">Beautiful Nature</h4>
                           <p class="card-text">Some example text.</p>
//see profile button                            
<a href="#" class="btn btn-primary">See Profile</a>
                      </div>
                 </div>
  </div>
		  2)  <div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
                    <img class="card-img-top" src="images/nature1.jpg" alt="Card image">
                     <div class="card-body">
                           <h4 class="card-title">Beautiful Nature</h4>
                           <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                      </div>
                 </div>
</div>
		    3) <div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
                    <img class="card-img-top" src="images/nature2.jpg" alt="Card image">
                     <div class="card-body">
                           <h4 class="card-title">Beautiful Nature</h4>
                           <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                      </div>
                 </div>

		    </div>
	    </div>
	</div>
</section>

//different section
<section class="my-5">
	<div class="my-5">
	<h2 class="text-center">Our gallery</h2>		
	</div>
//container takes the full width of the viewport and resizes on any devices
	<div class="container-fluid">
		<div class="row">
//Images 9 times to form gallery
1)	<div class="col-lg-4 col-md-4 col-12">
				<img src="images/nw.jpg " class="img-fluid pb-4">
				
			</div>
2)	<div class="col-lg-4 col-md-4 col-12">
				<img src="images/nw.jpg " class="img-fluid pb-4">
				
			</div>
3)	<div class="col-lg-4 col-md-4 col-12">
				<img src="images/nw.jpg " class="img-fluid pb-4">
				
			</div>
4)	<div class="col-lg-4 col-md-4 col-12">
				<img src="images/nw.jpg " class="img-fluid pb-4">
				
			</div>
5)	<div class="col-lg-4 col-md-4 col-12">
				<img src="images/nw.jpg " class="img-fluid pb-4">
				
			</div>
6)	<div class="col-lg-4 col-md-4 col-12">
				<img src="images/nw.jpg " class="img-fluid pb-4">
				
			</div>
7)	<div class="col-lg-4 col-md-4 col-12">
				<img src="images/nw.jpg " class="img-fluid pb-4">
				
			</div>
8)	<div class="col-lg-4 col-md-4 col-12">
				<img src="images/nw.jpg " class="img-fluid pb-4">
				
			</div>
9)	<div class="col-lg-4 col-md-4 col-12">
				<img src="images/nw.jpg " class="img-fluid pb-4">
				
			</div>
			
			
		</div>
		
	</div>
	</section>

//different section
// to create form  //w=width, m=margin
<section class="my-5">
	<div class="my-5">
	<h2 class="text-center">Form</h2>		
	</div>
	<div class="w-50 m-auto">

//connecting to php page where the page is connecting to database (userinfo.php)
		<form action="userinfo.php" method="post">
//to create username
		  <div class="form-group">
			  <label>Username</label>
			  <input type="text" name="user" autocomplete="off" class="form-control">
		   </div>
//to create email field
		   <div class="form-group">
			  <label>Email Id</label>
			  <input type="text" name="email" autocomplete="off" class="form-control">
		   </div>
//to create mobile filed
		   <div class="form-group">
			  <label>Mobile</label>
			  <input type="text" name="mobile" autocomplete="off" class="form-control">
		   </div>
//to create comment field
		   <div class="form-group">
			  <label>Comment</label>
			  <textarea class="form-control" name="comment">
			  </textarea>
		   </div>

           //to create button(Submit)
           <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>
//to create footer at the end of the page
<footer>
	<p class="p-3 bg-dark text-white text-center">@amritasambary</p>
</footer>

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 </body>
 </html>
 
 
 
Userinfo.php page
<?php  

$con = mysqli_connect('localhost:3307','root');

if($con)
{
	echo "Connection successful";
}
else
{
	echo "No connection";
}

mysqli_select_db($con, 'youtubeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (user,email,mobile,comment) values ('$user','$email','$mobile','$comment')";

mysqli_query($con, $query);

header('location:index.php');

 ?>

Style.css page

*{
  	margin: 0;
  	padding: 0;
  	box-sizing: border-box;
    font-family: 'Josefin Sans', sans-serif;
  }

  .carousel-inner img {
    width: 100%;
    height: 90vh;
  }
  .img-fluid{
  	width:100%;
  }

  



