<?php
$name = $_REQUEST['name'];
echo $name, "<br>";
$email = $_REQUEST['email'];
echo $email, "<br>";
$comment = $_REQUEST['comment'];
echo $comment, "<br>";
var_dump($_REQUEST);
foreach($_REQUEST as $key =>$value){
	echo "field_", "$key",":",$value, 
	"<br>";
}


/*************************************/
//connection
$conn = mysqli_connect(
"127.0.0.1",
"root",
"root",
"mydb"
);

//check connection
if(!$conn){
	echo "failed";
}
else {
	echo "success";
}

//Perform query

if (mysqli_query($conn, "INSERT INTO comentarios(name,email,comment) VALUES('$name','$email','$comment')")) {
	echo "inserted";
} else {
	echo "not inserted";
}

mysqli_close($conn);

/*************************************/


?>
<!DOCTYPE html>
<html>
  <head>
    <title>
    Home
    </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-sm-2">
				<img src="images/sst_logo-10.jpg" alt="logo" class="img-thumbnail">
			</div>
			<div class="col-sm">
				Contact us!
				<form>
				  <div class="form-group">
					<label for="nameid">Name</label>
					<input type="text" name="name" class="form-control" id="nameid">
				  </div>
				  <div class="form-group">
					<label for="emailid">Email</label>
					<input type="email" name="email" class="form-control" id="emailid">
				  </div>
				  <div class="form-group">
					<label for="commentid">Comment</label>
					<textarea name="comment" id="commentid" rows="3" cols="40" class="form-control"></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
  		</div>
		<div class="row">
			<div class="col-sm">
				<ul class="nav nav-pills">
				  <li class="nav-item">
					<a class="nav-link active" href="index.html">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="specials.html">Specials</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="groceries.html">Groceries</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="fandveg.html">Fruits & Vegetables</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="mandfish.html">Meat & Fish</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="cleaning.html">Cleaning</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="personalcare.html">Personal Care</a>
				  </li>	
				</ul>
			</div>
  		</div>
		<div class="row">
			<div class="col-sm">
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="images/images/pollo.jpg" class="d-block w-100" alt="chicken">
					  <div class="carousel-caption d-none d-md-block">
						<h5>Chicken</h5>
						<p>$3 p/kilo</p>
					  </div>
					</div>
					<div class="carousel-item">
					  <img src="images/images/bleach.jpg" class="d-block w-100" alt="bleach">
					  <div class="carousel-caption d-none d-md-block">
						<h5>Bleach</h5>
						<p>$ 3.89</p>
					  </div>
					</div>
					<div class="carousel-item">
					  <img src="images/images/online.jpg" class="d-block w-100" alt="shoponline">
					  <div class="carousel-caption d-none d-md-block">
						<h5>How to shop online with us</h5>
						<p>Step by step</p>
					  </div>
					</div>
					<div class="carousel-item">
					  <img src="images/images/imgcovid19.jpg" class="d-block w-100" alt="Covid19">
					  <div class="carousel-caption d-none d-md-block">
						<h5>Tips to protect us from Covid 19</h5>
						<p>We care</p>
					  </div>
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
  		</div>
		<div class="row">
			<div class="col-sm px-0">
				<div class="card text-center">
				  <img src="images/cards/flybuys.webp" class="card-img-top" alt="flybuys">
				  <div class="card-body">
					<h5 class="card-title">Win points!</h5>
					<p class="card-text">Every dollar you spend is a point you win</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>					
			</div>
			<div class="col-sm px-0">
				<div class="card text-center">
				  <img src="images/cards/findstores.jpg" class="card-img-top" alt="find your closest store">
				  <div class="card-body">
					<h5 class="card-title">Find your closest shop!</h5>
					<class="card-text"><br></p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>					
			</div>
			<div class="col-sm px-0">
				<div class="card text-center">
				  <img src="images/cards/catalogue.jpg" class="card-img-top" alt="recipes">
				  <div class="card-body">
					<h5 class="card-title">Catalogue with recipes!</h5>
					<p class="card-text"><br><br></p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>					
			</div>
			<div class="col-sm px-0">
				<div class="card text-center">
				  <img src="images/cards/groupcommunities.jfif" class="card-img-top" alt="partners">
				  <div class="card-body">
					<h5 class="card-title">Explore SST Group Communities!</h5>
					<p class="card-text"><br></p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>					
			</div>
  		</div>
		<div class="row">
			<div class="col-sm text-right text-dark display-5 font-weight-bold mt-3">
				<p>Copyright 2020</p>
				<p>Contact us! supersupert@sst.com.au</p>
			</div>
  		</div>
	</div>
		
	
	
	
	
	
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>			
  </body>
</html>
