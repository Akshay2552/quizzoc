<!DOCTYPE>
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
               background-color: #f44336;
               background-color: #f44336;
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
    </style>
  </head>
 
  <body>
  <div class="col s12" ><div class="card-panel hoverable" style="background-color:green;">
     <a class="card-panel red darken-4"  style="float:right;color:azure; padding: 12px 20px;" href="form.php">signup</a>
     <a class="card-panel red darken-4"  style="float:right;padding-right:10px;color:azure; padding: 12px 20px;" href="login.php">login</a>
     <a class="card-panel red darken-4"  style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="zocc.html">Home</a>
     <a class="card-panel red darken-4"  style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="ev.html">Events</a>
      <a class="card-panel red darken-4"  style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="www.signup.com">Alumni</a>
       <a class="card-panel red darken-4" style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="www.signup.com">Results</a>
       <a class="card-panel red darken-4" style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="www.signup.com">The Team</a></div></div>
     <a href="zocc.html" class="brand-logo"><img src="jp.png" style="float:left;width:80px;height:100px;"></a>
     <h2 style="font-size:80px;"><span style="color:DarkTurquoise ">Quiz</span>zoc</h1>
	 
	<div class="row">
	<br><br>
	  <form  class="col s12" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	   <div class="row">
	    <div style="margin-left:300px;" class="input-field col s6">
	 <input  id="em" type="text" name="email" class="validate"><label for="em">EMAIL</label><br></div></div>
	 <div  style="margin-left:300px;margin-right:-300px;" class="row"><div class="input-field col s6"><input type="password" name="phone" id="pass" class="validate"><label for="pass">PASSWORD</label></div></div><br><br>
	 <button class="btn waves-effect waves-light" type="submit" name="submit" style="margin-left:600px;margin-right:-300px;">LOGIN
    <i class="material-icons right">send</i>
  </button>
        
  </button>
        
	 </form>
	 
	 
	 <?php 
	 global $count;
	 if($_SERVER["REQUEST_METHOD"]=="POST")
	 {     
	       $database="akshay";
		   $con=mysql_connect("localhost","root","");
		    if (!$con)  
                    { 
                      die('Could not connect: ' . mysql_error());				
                    } 	
                 mysql_select_db("$database", $con); 
		 function signIn()
         {
			  
			  session_start();
			  $ID=$_POST['email'];
		          $password=$_POST['phone'];
			  echo("hii");
			  echo($password);
			
			 if(!empty('$ID'))
			 {   
				 $query=mysql_query("SELECT * FROM asa where email='$ID' AND phone= '$password'");
				 $row = mysql_fetch_array($query); 
			         if(!empty($row[1])AND !empty($row[2]) )
					 { 
			
				       $_SESSION['email'] = $row['0']; 
				       echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
                                       echo "<script type='text/javascript'>\n"; 
                                       echo "alert('you are Succesflly logged in');\n";
                      					   
                                       echo "</script>";
				       echo "<script>window.location.assign('zocc.php');</script>";
                                       $count=1;					   
	                 } 
			else 
		        { 
			       echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } 
	                } 
		     } 
	    }		
		if(isset($_POST['submit'])) 
		 { 
	      
	      signIn(); 
	     } 
	 ?>