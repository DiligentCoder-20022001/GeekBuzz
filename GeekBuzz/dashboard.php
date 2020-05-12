<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>

<!DOCTYPE html>
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
<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">GeekBuzz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item"<?php if(@$_GET['q']==0) echo'class="active"'; ?>><a class="nav-link" href="dashboard.php?q=0">Home<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"<?php if(@$_GET['q']==1) echo'class="active"'; ?>><a class="nav-link" href="dashboard.php?q=1">User</a></li>
                    <li class="nav-item"<?php if(@$_GET['q']==2) echo'class="active"'; ?>><a class="nav-link"href="dashboard.php?q=2">Ranking</a></li>

                    <li class="nav-item"><a class="nav-link" href="dashboard.php?q=4">Add Quiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?q=5">Remove Quiz</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"<?php echo''; ?> > <a class="nav-link"href="logout1.php?q=dashboard.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
                </ul>
  </div>
</nav>
</div>
</section>



                <?php if(@$_GET['q']==0)
                {
                   echo "<section id='title'><div class='container-fluid'><div class='row'><div class='col-lg-6 col-md-6 col-sm-12'><h1> WELCOME TO Admin Page!!</h1></div><div class='col-lg-6 col-md-6 col-sm-12'><img src='images\geek.jpg' class='title-image'></div></div></div></section>
                   <section id='features'>

                       <h1>Tasks for the developers</h1><br><hr></br>
                       <ol>
                         <li>Develop the website more by adding extra quizzes</li>
                         <li>Develop of mobile app to increase the number of users</li>
                         <li>More follower and social supports</li>
                         <li>After uploading progress update the admin site.</li>
                       </ol>
                       <a href='login.php'><button type='button' class='btn btn-outline-dark btn-lg download-button'><i class='fab fa-github'></i> Upload your progress</button></a>

                   </section>
                   <section id='testimonials'><div id='carouselExampleControls' class='carousel slide' data-ride='carousel'><div class='container-fluid'>
                   <div class='carousel-inner'>
                     <div class='carousel-item active'>
                       <h2 class='testimonial-text'>GK quiz</h2>
                       <img class='testimonial-image' src='images\geek.png' alt='GK'>
                       <em>A test on current affairs</em>
                     </div>
                     <div class='carousel-item'>
                       <h2 class='testimonial-text'>Logo Quiz</h2>
                      <img class='testimonial-image' src='images\logo3.png' alt='logo quiz'>
                      <em>A test on backend development language-PHP</em>
                     </div>
               	  <div class='carousel-item'>
                       <h2 class='testimonial-text'>Computer Quiz</h2>
                      <img class='testimonial-image' src='images\comp1.jpg' alt='lady-profile'>
                      <em>A test on computer hardware</em>
                     </div>
                   </div>
                   <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
                     <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                     <span class='sr-only'>Previous</span>
                   </a>
                   <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
                     <span class='carousel-control-next-icon' aria-hidden='true'></span>
                     <span class='sr-only'>Next</span>
                   </a>
                 </div>
                 </div>
                 <section id='press'>
                   <img class='press-logo' src='images\unilever.jpg' alt='toi-logo'>
                   <img class='press-logo' src='images\hindu.png' alt='hindu-logo'>
                   <img class='press-logo' src='images\deccan.png' alt='deccan-logo'>
                   <img class='press-logo' src='images\amar.png' alt='amar-logo'>

                 </section>
                 </section>
                 <footer id='footer'>

                   <p>© Copyright 2020 GeekBuzz</p>

                 </footer>
";

                }

                if(@$_GET['q']== 2)
                {
                    $q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
                    echo  '<section id="title"><div class="container-fluid"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><h1> Rank of users who attempted the quiz</h1></div><div class="col-lg-6 col-md-6 col-sm-12"><img src="images\rank.png" class="title-image"></div></div></div></section><div class="panel"><section id="features"><div class="panel title"><div class="table-responsive">
                    <table class="table table-striped title1" >
                    <tr style="color:red"><td><center><b>Rank</b></center></td><td><center><b>Name</b></center></td><td><center><b>Score</b></center></td></tr>';
                    $c=0;
                    while($row=mysqli_fetch_array($q) )
                    {
                        $e=$row['email'];
                        $s=$row['score'];
                        $q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
                        while($row=mysqli_fetch_array($q12) )
                        {
                            $name=$row['name'];
                            $college=$row['college'];
                        }
                        $c++;
                        echo '<tr><td style="color:#99cc32"><center><b>'.$c.'</b></center></td><td><center>'.$e.'</center></td><td><center>'.$s.'</center></td>';
                    }
                    echo '</table></div></div>
                    </section><footer id="footer">

                      <p>© Copyright 2020 GeekBuzz</p>

                    </footer>';
                }
                ?>
                <?php
                    if(@$_GET['q']==1)
                    {
                        $result = mysqli_query($con,"SELECT * FROM user") or die('Error');
                        echo  '<section id="title"><div class="container-fluid"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><h1> List of information of users registered</h1></div><div class="col-lg-6 col-md-6 col-sm-12"><img src="images\users.png" class="title-image"></div></div></div></section><div class="panel"><section id="features"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center></td><td><center><b>College</b></center></td><td><center><b>Email</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result))
                        {
                            $name = $row['name'];
                            $email = $row['email'];
                            $college = $row['college'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$college.'</center></td><td><center>'.$email.'</center></td><td><center><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>
                        </section><footer id="footer">

                          <p>© Copyright 2020 GeekBuzz</p>

                        </footer>';
                    }
                ?>

                <?php
                    if(@$_GET['q']==4 && !(@$_GET['step']) )
                    {
                        echo '<section id="title"><div class="container-fluid"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><h1> Create a new quiz(for teachers)</h1></div><div class="col-lg-6 col-md-6 col-sm-12"><img src="images\create.webp" class="title-image"></div></div></div></section><div class="panel"><section id="features"><div class="row"><span class="title1" style="margin-left:40%;font-size:30px;color:#fff;"><b>Enter Quiz Details</b></span><br /><br />
                        <div class="col-md-3"></div><div class="col-md-6">
                        <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="name"></label>
                                    <div class="col-md-12">
                                        <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="total"></label>
                                    <div class="col-md-12">
                                        <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="right"></label>
                                    <div class="col-md-12">
                                        <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="wrong"></label>
                                    <div class="col-md-12">
                                        <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for=""></label>
                                    <div class="col-md-12">
                                        <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                                    </div>
                                </div>

                            </fieldset>
                        </form></div>

                        </section>
                        <footer id="footer">

                          <p>© Copyright 2020 GeekBuzz</p>

                        </footer>';
                    }
                ?>

                <?php
                    if(@$_GET['q']==4 && (@$_GET['step'])==2 )
                    {
                        echo '
                        <div class="row">
                        <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
                        <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
                        <fieldset>
                        ';

                        for($i=1;$i<=@$_GET['n'];$i++)
                        {
                            echo '<b>Question number&nbsp;'.$i.'&nbsp;:</><br /><!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="qns'.$i.' "></label>
                                        <div class="col-md-12">
                                            <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'1"></label>
                                        <div class="col-md-12">
                                            <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'2"></label>
                                        <div class="col-md-12">
                                            <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'3"></label>
                                        <div class="col-md-12">
                                            <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'4"></label>
                                        <div class="col-md-12">
                                            <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <br />
                                    <b>Correct answer</b>:<br />
                                    <select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
                                    <option value="a">Select answer for question '.$i.'</option>
                                    <option value="a"> option a</option>
                                    <option value="b"> option b</option>
                                    <option value="c"> option c</option>
                                    <option value="d"> option d</option> </select><br /><br />';
                        }
                        echo '<div class="form-group">
                                <label class="col-md-12 control-label" for=""></label>
                                <div class="col-md-12">
                                    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                                </div>
                              </div>

                        </fieldset>
                        </form></div>';
                    }
                ?>

                <?php
                    if(@$_GET['q']==5)
                    {
                        $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                        echo  '<section id="title"><div class="container-fluid"><div class="row"><div class="col-lg-6 col-md-6 col-sm-12"><h1> Remove any quiz</h1></div><div class="col-lg-6 col-md-6 col-sm-12"><img src="images\remove.png" class="title-image"></div></div></div></section><div class="panel"><section id="features"><div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Topic</b></center></td><td><center><b>Total question</b></center></td><td><center><b>Marks</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) {
                            $title = $row['title'];
                            $total = $row['total'];
                            $sahi = $row['sahi'];
                            $eid = $row['eid'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$title.'</center></td><td><center>'.$total.'</center></td><td><center>'.$sahi*$total.'</center></td>
                            <td><center><b><a href="update.php?q=rmquiz&eid='.$eid.'" class="pull-right btn sub1" style="margin:0px;background:red;color:black"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }
                ?>



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
