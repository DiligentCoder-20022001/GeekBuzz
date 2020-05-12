<?php
include_once 'database.php';
session_start();
if(!(isset($_SESSION['email'])))
{
	header("location:login.php");
}
else
{
	$name=$_SESSION['name'];
	$email=$_SESSION['email'];
	include_once 'database.php';
}
?>
<html>
<head>
<title>Sign in</title>
<link href="https://fonts.googleapis.com/css?family=Lilita+One|Ubuntu&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b23a79e4da.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
.container{
    margin : 10px;
}
.parent_time {
    margin: 0px 5px;
}
.child_time0{
    background : #f39a3f;

    border-radius: 5px 0px 0px 5px;
}
.child_time1{
    background : #ff7c0c;
    border-radius: 0px 5px 5px 0px;
}
.child_time{
    float : left;
    color : #FFF;
    padding: 6px;
    margin : 0px;
}
</style>
<body>
<section id="title">
	<div class="container-fluid">
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<nav class="navbar navbar-expand-lg navbar-dark ">
	<a class="navbar-brand" href="#">GeekBuzz</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"<?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a class="nav-link" href="welcome.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
            <li class="nav-item"<?php if(@$_GET['q']==2) echo'class="active"'; ?>> <a class="nav-link" href="welcome.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
            <li class="nav-item"<?php if(@$_GET['q']==3) echo'class="active"'; ?>> <a class="nav-link" href="welcome.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li>
            <li class="nav-item"<?php echo''; ?> > <a class="nav-link" href="logout.php?q=welcome.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
		</ul>
	</div>
</nav>

</div>
</section>
<?php if(@$_GET['q']==1)
{
	$result=mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
	echo '<section id="title"><div class="container-fluid"><div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div>
				<h1>Welcome to GeekBuz</h1><p> The quizzes assigned by admin is given below. Please attempt the quiz and the see where you lie among your peers.</p>
				<a href="admin.php"><button type="button" class="btn btn-dark btn-lg download-button"><i class="fas fa-phone"></i> Contact us</button></a>
				<a href="login.php"><button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-github"></i> Make contributions</button></a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div>
				<img src="images\geek.jpg" class="title-image" alt="covid-image">
			</div>
		</div>
	</div></div></section><section id="features"><div class="panel"><div class="table-responsive"><table class="table table-stripped title1">
	<tr><td><center><b>S.N</b></center></td></td><td><center><b>Topic</b></center></td><td><center><b>Total question</b></center></td><td><center><b>Marks</b></center></b></td><td><center><b>Action</b></center></td></tr>';
	$c=1;
	while($row=mysqli_fetch_array($result)){
		$title=$row['title'];
		$total=$row['total'];
		$sahi=$row['sahi'];
		$eid=$row['eid'];
		$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);
                    if($rowcount == 0){
                        echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$title.'</center></td><td><center>'.$total.'</center></td><td><center>'.$sahi*$total.'</center></td><td><center><b><a href="welcome.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn sub1" style="color:black;margin:0px;background:#1de9b6"><button onclick="myFunction()"></button><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></center></td></tr>';
                    }
                    else
                    {
                    echo '<tr style="color:#99cc32"><td><center>'.$c++.'</center></td><td><center>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></center></td><td><center>'.$total.'</center></td><td><center>'.$sahi*$total.'</center></td><td><center><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="color:black;margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></center></td></tr>';
                    }
                    }
                    $c=0;
                    echo '</table></div></div><footer id="footer">

									    <p>© Copyright 2020 GeekBuzz</p>

									  </footer>';
                }?>

                <?php
                    if(@$_GET['q']== 'quiz' && @$_GET['step']== 2)
                    {
                        $eid=@$_GET['eid'];
                        $sn=@$_GET['n'];
                        $total=@$_GET['t'];
                        $q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
                        echo '<section id="features"><div class="panel" style="margin:5%"><div class="container">
	<div class="row">
    		<div class="hours parent_time">
    		    <div>Hours</div>
        		<div class="hours_0 child_time child_time0" ></div>
        		<div class="hours_1 child_time child_time1" ></div>
    		</div>
    		<div class="minutes parent_time">
    		    <div>Mins</div>
        		<div class="minutes_0 child_time child_time0" ></div>
        		<div class="minutes_1 child_time child_time1" ></div>
    		</div>
    		<div class="seconds parent_time">
    		    <div>Secs</div>
        		<div class="seconds_0 child_time child_time0" ></div>
        		<div class="seconds_1 child_time child_time1" ></div>
    		</div>
	</div>
</div>
<script>
var countDownDate = new Date();
// add a day
countDownDate.setDate(countDownDate.getDate() + 1);
// Update the count down every 1 second
var x = setInterval(function() {

	// Get todays date and time
	var now = new Date().getTime();

	// Find the distance between now an the count down date
	var distance = countDownDate - now;

	// Time calculations for days, hours, minutes and seconds
	var days = Math.floor(distance / (1000 * 60 * 60 * 0));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 0)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 1)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	if(days>0){
			hours = hours + (days*24);
			days = 0;
	}
	hours = zeroPad(hours,2);
	minutes = zeroPad(minutes,2);
	seconds = zeroPad(seconds,2);

	hours = hours.split("");
	minutes = minutes.split("");
	seconds = seconds.split("");
	// Output the result in an element with id="demo"

	jQuery(".hours_0").html(hours[0]);
	jQuery(".hours_1").html(hours[1]);
	jQuery(".minutes_0").html(minutes[0]);
	jQuery(".minutes_1").html(minutes[1]);
	jQuery(".seconds_0").html(seconds[0]);
	jQuery(".seconds_1").html(seconds[1]);
	// If the count down is over, write some text
	if (distance < 0) {
			clearInterval(x);
			document.getElementById("demo").innerHTML = "EXPIRED";
	}
}, 1000);

function zeroPad(num, places) {
var zero = places - num.toString().length + 1;
return Array(+(zero > 0 && zero)).join("0") + num;
setTimeout(function(){ alert("Hello"); }, 1000);
}
</script>
';
                        while($row=mysqli_fetch_array($q) )
                        {
                            $qns=$row['qns'];
                            $qid=$row['qid'];
                            echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br /><br />'.$qns.'</b><br /><br />';
                        }
                        $q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
                        echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
                        <br />';

                        while($row=mysqli_fetch_array($q) )
                        {
                            $option=$row['option'];
                            $optionid=$row['optionid'];
                            echo'<input type="radio" name="ans" value="'.$optionid.'">&nbsp;'.$option.'<br /><br />';
                        }
                        echo'<br /><button onclick="myFunction()" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>
												</section><footer id="footer">

											    <p>© Copyright 2020 GeekBuzz</p>

											  </footer>';
                    }

                    if(@$_GET['q']== 'result' && @$_GET['eid'])
                    {
                        $eid=@$_GET['eid'];
                        $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
                        echo  '<div class="panel">
                        <center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

                        while($row=mysqli_fetch_array($q) )
                        {
                            $s=$row['score'];
                            $w=$row['wrong'];
                            $r=$row['sahi'];
                            $qa=$row['level'];
                            echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
                                <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr>
                                <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
                                <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
                        }
                        $q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
                        while($row=mysqli_fetch_array($q) )
                        {
                            $s=$row['score'];
                            echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
                        }
                        echo '</table></div>
												<footer id="footer">

											    <p>© Copyright 2020 GeekBuzz</p>

											  </footer>';
                    }
                ?>

                <?php
                    if(@$_GET['q']== 2)
                    {
                        $q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
                        echo  '<section id="title"><div class="container-fluid"><div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div>
															<h1>Your track record</h1><p> This is your track record so that you can where you dropped and wehre you improved.</p>
															<a href="admin.php"><button type="button" class="btn btn-dark btn-lg download-button"><i class="fas fa-phone"></i> Contact us</button></a>
															<a href="login.php"><button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-github"></i> Make contributions</button></a>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div>
															<img src="images\track.png" class="title-image" alt="covid-image">
														</div>
													</div>
												</div></div></section><section id="features"><div class="panel title">
                        <table class="table table-striped title1" >
                        <tr style="color:black;"><td><center><b>S.N.</b></center></td><td><center><b>Quiz</b></center></td><td><center><b>Question Solved</b></center></td><td><center><b>Right</b></center></td><td><center><b>Wrong<b></center></td><td><center><b>Score</b></center></td>';
                        $c=0;
                        while($row=mysqli_fetch_array($q) )
                        {
                        $eid=$row['eid'];
                        $s=$row['score'];
                        $w=$row['wrong'];
                        $r=$row['sahi'];
                        $qa=$row['level'];
                        $q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');

                        while($row=mysqli_fetch_array($q23) )
                        {  $title=$row['title'];  }
                        $c++;
                        echo '<tr><td><center>'.$c.'</center></td><td><center>'.$title.'</center></td><td><center>'.$qa.'</center></td><td><center>'.$r.'</center></td><td><center>'.$w.'</center></td><td><center>'.$s.'</center></td></tr>';
                        }
                        echo'</table></div>
												</section>
												<footer id="footer">

											    <p>© Copyright 2020 GeekBuzz</p>

											  </footer>';
                    }

                    if(@$_GET['q']== 3)
                    {
                        $q=mysqli_query($con,"SELECT * FROM rank ORDER BY score DESC " )or die('Error223');
                        echo  '<section id="title"><div class="container-fluid"><div class="row">
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div>
															<h1>Your track record</h1><p> Compete with your peers</p>
															<a href="admin.php"><button type="button" class="btn btn-dark btn-lg download-button"><i class="fas fa-phone"></i> Contact us</button></a>
															<a href="login.php"><button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-github"></i> Make contributions</button></a>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12">
														<div>
															<img src="images\history.jpg" class="title-image" alt="covid-image">
														</div>
													</div>
												</div></div></section><section id="features"><div class="panel title"><div class="table-responsive">
                        <table class="table table-striped title1" >
                        <tr style="color:red"><td><center><b>Rank</b></center></td><td><center><b>Name</b></center></td><td><center><b>Email</b></center></td><td><center><b>Score</b></center></td></tr>';
                        $c=0;

                        while($row=mysqli_fetch_array($q) )
                        {
                            $e=$row['email'];
                            $s=$row['score'];
                            $q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
                            while($row=mysqli_fetch_array($q12) )
                            {
                                $name=$row['name'];
                            }
                            $c++;
                            echo '<tr><td style="color:black"><center><b>'.$c.'</b></center></td><td><center>'.$name.'</center></td><td><center>'.$e.'</center></td><td><center>'.$s.'</center></td></tr>';
                        }
                        echo '</table></div></div>
												</section>
												<footer id="footer">

											    <p>© Copyright 2020 GeekBuzz</p>

											  </footer>';
                    }
                ?>
</body>
</html>
