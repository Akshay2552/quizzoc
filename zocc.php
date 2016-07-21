<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 <title>Quizzoc</title>
        <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	  
	  <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <style> 
          a.a{
               color: white;
               text-align: center; 
               text-decoration: none;
               display: inline-block;}
          a.b{
               background-color: #f44336;
               background-color: #f44336;
               color: white;
               text-align: center; 
               text-decoration: none;
               display: inline-block;}
          a.c{
               background-color: #f44336;
               background-color: #f44336;
               color: white;
               text-align: center; 
               text-decoration: none;
               display: inline-block;}
          a.d{
             background-color: #f44336;
            background-color: #f44336;
            color: white;
            text-align: center; 
            text-decoration: none;
            display: inline-block;}
          a.e{
                background-color: #f44336;
                background-color: #f44336;
                color: white;
                text-align: center; 
                text-decoration: none;
                display: inline-block;}
           a.f{
             background-color: #f44336;
            background-color: #f44336;
            color: white;
            text-align: center; 
            text-decoration: none;
            display: inline-block;}
           a.g{
             background-color: #f44336;
             background-color: #f44336;
             color: white;
             text-align: center; 
             text-decoration: none;
             display: inline-block;
              }
   a.a:hover{ background-color:black;}a.b:hover{ background-color:black;} a.c:hover{ background-color:black;} a.d:hover{ background-color:black;} a.e:hover{ background-color:black;} a.f:hover{ background-color:black;} a.g:hover{ background-color:black;}
         a.im{
              float:left;
              height:60px;
              width:60px;
			  }
         h2{ padding-left:100px;}
        div.a
		{
		text-align:center;
        padding-left:200px;
        padding-right:200px;
		}
   li.a{padding-right:50px;}li.b{padding-right:64px;}li.c{padding-right:35px;}li.d{padding-right:42px;}
 span{text-align:center;}
 a.apti
  {
   margin:15px;
   }
    img.events
  {
   border-radius:15px;}
  img.events:hover
  {
   border:3px solid red;
   }
   
 
    
    </style>
  </head>
 
  <body>
  <div class="col s12" ><div class="card-panel hoverable" style="background-color:green;">
  WELCOME <?php echo($_SESSION["email"]);?> 
  <a class="card-panel red darken-4" style="float:right;color:azure; padding: 12px 20px;" href="form.php">signup</a>
  <a class="card-panel red darken-4" style="float:right;padding-right:10px;color:azure; padding: 12px 20px;" href="login.php">login</a>
      <a  class="card-panel red darken-4" style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="zocc.php">Home</a>
      <a class="card-panel red darken-4" style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="ev.html">Events</a>
      <a class="card-panel red darken-4" style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="www.signup.com">Alumni</a>
      <a class="card-panel red darken-4"style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="www.signup.com">Results</a>
      <a class="card-panel red darken-4"style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="www.signup.com">The Team</a></div></div>
      <a href="zocc.php" class="brand-logo"><img class="responsive-img" src="jp.png" style="float:left;width:80px;height:100px;"></a>
     <h2  style="font-size:80px;"><span style="color:DarkTurquoise ">Quiz</span>zoc</h1>
      <h4 style="text-align:center;">About</h4>
    <div class="container"><p class="z-depth-2" style="text-align:center;"><span style="background-color:azure;">Quizzoc is the Official Quizzing Society of JSS Academy of Technical Education,Noida. This society was constituted in 2002 with the vision to conduct quizzes and tests that are aimed at increasing the general awareness of students and giving an impetus to the spirit of enquiry among them. It has, very successfully, from its inception, been able to provide the students with the right platform for showcasing their cognizance.To achieve this we have divided our committee into 4 teams namely- 
<li class="a" style="text-align:center;">Quiz Preparation</li>
<li class="b" style="text-align:center;">Advertisement</li>
<li class="c" style="text-align:center;">Event Management</li>
<li class="d" style="text-align:center;">Technical Support</li>
</span></p></div><br></br>

<div class="z-depth-5"><a class="apti" href="ev.html"><img class="events" src="APTI.jpg" width="300px" height="180px"></a>
<a class="apti" href="ev.html"><img class="events" src="CINEZAR.jpg" width="300px"></a>
<a class="apti" href="ev.html"><img class="events" src="QUIN.jpg" width="300px" height="178px"></a>
<a class="apti" href="ev.html"><img class="events" src="zoc.jpeg" width="300px" height="179px"></a></div>

     

   
  