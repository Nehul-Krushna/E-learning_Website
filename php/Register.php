<!DOCTYPE html>
<html>
<head>
	<title>E-learning by KRIS Education</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(register.jpg);background-size: cover;" >
	<header>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" id="logo"><h3 style="padding-top: 5px;">
  	<span>K</span>
  	<span>R</span>
  	<span>I</span>
  	<span style="letter-spacing: 15px;">S</span>
  	<span>E</span>
  	<span>D</span>
  	<span>U</span>
  	<span>C</span>
  	<span>A</span>
  	<span>T</span>
  	<span>I</span>
  	<span>O</span>
  	<span>N</span></h3></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" id="cool-link" href="Home.html">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="cool-link" href="Cources.html" tabindex="-1" aria-disabled="true">Cources</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " id="cool-link" href="Teachers.html" tabindex="-1" aria-disabled="true">Teachers</a>
      </li>
      <li class="nav-item">
              <a class="nav-link " id="cool-link" href="Contactus.html" tabindex="-1" aria-disabled="true">Contact Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Login</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>
<section class="container-fluid">
	<section class="row justify-content-center" id="loginform">
		<section class="col-12 col-sm-6 col-md-6 col-lg-3">
			<form action="insert.php" method="POST" class="form-container">
				<img src="avatar.png" class="avatar">
			  <div class="form-group"><br>
          <label>Name</label>
          <input type="text" name="Name" class="form-control"  placeholder="Enter Name" required="">
			    <label>Email address</label>
			    <input type="email" id="user" name="user" class="form-control"  placeholder="Enter email" required="">
			  </div>
			  <div class="form-group">
			    <label>Password</label>
			    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required="">
			  </div><br>
			  <button type="submit" class="btn btn-primary btn-block" id="submitbtn">Submit</button><br>
        <small  class="form-text"><a href="http://localhost/login/login.php">Already have an account...</a></small>
			</form>
		</section>
		
	</section>
	
</section>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>