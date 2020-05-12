
<html>
<head>
<title>Sign in</title>
<link href="https://fonts.googleapis.com/css?family=Lilita+One|Ubuntu&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b23a79e4da.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
  #title {
    background-color: #4169E1;
    color: #fff;
  }

  h1 {
    font-family: "Lilita One";
    font-size: 3.5rem;
    line-height: 1.5;
  }

  .container-fluid {
    padding: 3% 15%;
  }

  body {
    font-family: "Lilita One";
  }
	.profile-image{
  width:20%;
  border-radius:100%;
  margin:20px;
}
  /*navigation bar*/
  .navbar {
    padding: 0 0 4.5rem;
  }

  .navbar-brand {
    font-family: "Ubuntu";
    font-size: 2.5rem;
    font-weight: bold;
  }

  .nav-item {
    padding: 0 18px;
  }

  .nav-link {
    font-family: "Lilitia One";
    font-size: 1.2rem;
    font-weight: lighter;
  }

  /*download button*/
  .download-button {
    margin: 5% 3% 5% 0%;
  }

  .title-image {
    width: 60%;
	border-radius:100%;
    transform: rotate(25deg);
    position: relative;
    left:30%;
  }

  h3{
    font-family: :"Lilitia One";
    font-weight: bold;
  }

  /*features*/
  #features{
    padding : 7% 15%;
    background-color:#fff;
    position: relative;

  }

  .feature-box{
    text-align: center;
    padding: 4.5%;
  }

  .icon{
    color: #4682B4;
    margin-bottom: 1rem;
}
.icon:hover{
  color: #4169E1;
}
/*testimonial*/
#testimonials{
  padding : 7% 15%;
  text-align: center;
  background-color: #4682B4;
  color: #fff;
}
.testimonial-image{
  width:40%;
  border-radius:100%;
  margin:20px;
}
h2{

  font-weight:bold;
  font-size:3rem;
  line-height: 1.5;
}
#press{
  background-color:#4682B4;
  text-align: center;
  padding-bottom:3%;
}
.press-logo{
  width:15%;
  margin:20px 20px 50px;
}
.carousel-item{
  padding:7% 15%;
}
#pricing{
  padding:100px;
  text-align: center;
}
.pricing-column{
  padding: 3% 2%;
}
h3{
  font-weight:bold;
  font-size:3rem;
  line-height:1.5;
}
#cta{
  background-color: #4169E1;
  text-align:center;
  padding-bottom:3%;
}
#footer{
  text-align:center;
  padding: 3% 15%;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: orange;
}
</style>

<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <section id="title">
    <div class="container-fluid">
      <!-- Nav Bar -->
	  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="#">GeekBuzz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="aboutus.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#">Sponsors</a>
            </li>
          </ul>
        </div>
      </nav>




      <!-- Title -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div>
            <h1>A place to expand your knowledge repository.</h1>
            <a href="admin.php"><button type="button" class="btn btn-dark btn-lg download-button"><i class="fas fa-user-shield"></i> Admin login</button></a>
            <a href="login.php"><button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fas fa-users-cog"></i> User login</button></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div>
            <img src="images\geek.jpg" class="title-image" alt="covid-image">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features -->

<section id="features">
  <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="feature-box">
          <i class="fas fa-check-circle fa-5x icon"></i>
          <h3>Easy to use.</h3>
          <p>All the questions provided right at the tip of your fingers.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="feature-box">
          <i class="fas fa-bullseye fa-5x icon"></i>
          <h3>Accuracy</h3>
          <p>Accurate results generated as soon as attempt is over.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="feature-box">
          <i class="fas fa-heart fa-5x icon"></i>
          <h3>Guaranteed to work.</h3>
          <p>No complaints regarding server or any other issues.</p>
        </div>
      </div>
  </div>
</section>


  <!-- Testimonials -->

  <section id="testimonials">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <h2 class="testimonial-text">Networks quiz</h2>
        <img class="testimonial-image" src="images\net.webp" alt="network quiz">
        <em>A test on computer networks</em>
      </div>
      <div class="carousel-item">
        <h2 class="testimonial-text">PHP Quiz</h2>
       <img class="testimonial-image" src="images\php.png" alt="php quiz">
       <em>A test on backend development language-PHP</em>
      </div>
	  <div class="carousel-item">
        <h2 class="testimonial-text">MySQL Quiz</h2>
       <img class="testimonial-image" src="images\sql.png" alt="lady-profile">
       <em>A test on backend development language-MySQL</em>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



  </section>


  <!-- Press -->

  <section id="press">
    <img class="press-logo" src="images\toi.png" alt="toi-logo">
    <img class="press-logo" src="images\hindu.png" alt="hindu-logo">
    <img class="press-logo" src="images\deccan.png" alt="deccan-logo">
    <img class="press-logo" src="images\amar.png" alt="amar-logo">

  </section>


  <!-- Pricing -->

  <section id="pricing">

    <h2>About us</h2>
    <p>At GeekBuzz we know knowledge comes first and then marks. So we have designed the quizzes in such a way that the teacher(admin) can understand the user's growth and create a set of tests which gradually increases his/her knowledge.</p>

    <div class="row">
      <div class="pricing-column col-lg-6 col-md-6 col-sm-12">
        <div class="card">
        <div class="card-header">
          <h5>Siddharth.S.Chandran</h5>
        </div>
        <div class="card-body">
			<h6>Web developer</h6>
			<img src="images/sid.jpg" class="profile-image" alt="Siddharth">
			<p>A second year studeent in VIT Chennai, main intrests include competitve coding and web development.</p>
          <button type="button" class="btn btn-md btn-block btn-outline-primary btn-primary"><i class="fab fa-linkedin"></i> click</button>
        </div>
        </div>
      </div>
        <div class="pricing-column col-lg-6 col-md-6 col-sm-12">
          <div class="card">
          <div class="card-header">
            <h5>Prakhar Mathur</h5>
          </div>
          <div class="card-body">

			<h6>Web developer</h6>
		  <img src="images/prakhar.jpg" class="profile-image" alt="Prakhar">
		  <p>A second year studeent in VIT Chennai, main intrests include competitve coding and web development.</p>
            <button type="button" class="btn btn-md btn-block btn-outline-primary btn-primary"><i class="fab fa-linkedin"></i> click</button>
          </div>
          </div>
        </div>
      </div>
    </section>


<section id="title">
  <div class="container-fluid">
  <section id="cta">

    <h3>Have fun!!</h3>
    <a href="admin.php"><button type="button" class="btn btn-dark btn-lg download-button"><i class="fas fa-user-shield"></i> Admin login</button></a>
            <a href="login.php"><button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fas fa-users-cog"></i> User login</button></a>

  </section>
</div>
</section>

  <footer id="footer">

    <p>© Copyright 2020 GeekBuzz</p>

  </footer>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>

</html>
