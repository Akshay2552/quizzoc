<!DOCTYPE php>
 <html>
 <head>
   <title>Quizzoc</title>
    
  <style> 
    form{
          background-color:transparent;
          width:100%;
          font-size:20px;
          color:azure;
        }
    a.a{
             background-color: #f44336;
            background-color: #f44336;
            color: white;
            text-align: center; 
            text-decoration: none;
            display: inline-block;
    }
    a.b{
             background-color: #f44336;
            background-color: #f44336;
            color: white;
            text-align: center; 
            text-decoration: none;
            display: inline-block;
    }
   a.c{
            background-color: #f44336;
            background-color: #f44336;
            color: white;
            text-align: center; 
            text-decoration: none;
            display: inline-block;
    }
  a.d{
             background-color: #f44336;
            background-color: #f44336;
            color: white;
            text-align: center; 
            text-decoration: none;
            display: inline-block;
    }
  a.e{
             background-color: #f44336;
            background-color: #f44336;
            color: white;
            text-align: center; 
            text-decoration: none;
            display: inline-block;
    }
  a.f{
             background-color: #f44336;
            background-color: #f44336;
            color: white;
            text-align: center; 
            text-decoration: none;
            display: inline-block;
    }
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
         width:60px;}
  h2{ padding-left:100px;}
  div.a{text-align:center;
        padding-left:200px;
        padding-right:200px;}
 span{text-align:center;}
    body {
    background-image:url("aa.jpg");
    background-repeat:no-repeat;
    background-size:100% 100%;
}
input[type=text]{width=500px;border:2px azure;padding:12px 20px;margin: 20px 20px;border-radius:5px;}
input[type=submit]{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
span.error{font-size:15px;color:white;}   

    </style>
  </head>
 
  <body>




<?php
/* this script is for errors in entry*/

// define variables and set to empty values
$nameErr = $emailErr = $yearErr = $phoneErr = "";
$name = $email = $year = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

   if (empty($_POST["name"])) 
  {
     $nameErr = "Name is required";
   } 
   else
   {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
    {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
   
   if (empty($_POST["email"])) 
   {
     $emailErr = "Email is required";
   } 
   else 
   {
     $email = test_input($_POST["email"]);
     if(!filter_var($email,FILTER_VALIDATE_EMAIL))
      {
       $emailErr="invalid email format";
      }
   }
     
   if (empty($_POST["phone"])) {
     $phoneErr = "phone is required";
   } else {
     $phone = test_input($_POST["phone"]);
   if(!preg_match("/[0-9]/",$phone))
    { 
     $phoneErr="invalid format";
    }
   }

   if (empty($_POST["year"])) {
     $yearErr = "year is required";
   } else {
     $year = test_input($_POST["year"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;}
?>


 <a class="a" style="float:right;color:azure; padding: 12px 20px;" href="form.php">signup</a>
     <a class="b" style="float:right;padding-right:10px;color:azure; padding: 12px 20px;" href="login.php">login</a>
     <a class="c" style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="zocc.html">Home</a>
     <a class="d" style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="ev.html">Events</a>
      <a class="e" style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="www.signup.com">Alumni</a>
       <a class="f"style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="www.signup.com">Results</a>
       <a class="g"style="float:right;color:azure;padding-right:10px; padding: 12px 20px;" href="www.signup.com">The Team</a>
     <img src="jp.png" style="float:left;width:80px;height:100px;">
     <h2 style="font-size:80px;"><span style="color:DarkTurquoise ">Quiz</span>zoc</h1>
   
  <fieldset style="margin-left:470px;margin-right:470px;">
      <form  style="text-align:center;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name:<input placeholder="Akshay" id="namme" type="text" name="name" value="<?php echo $name;?>" size="20" required><span class="error">*<i><?php echo $nameErr;?></i></span></div><br>
        Year:<input type="text" name="year" value="<?php echo $year;?>" size="20" required><span class="error">*<i><?php echo $yearErr;?></i></span><br><br>
        email:<input type="text" name="email" value="<?php echo $email;?>" size="20" required><span class="error">*<i><?php echo $emailErr;?></i></span><br>
        phone:<input type="text" name="phone" value="<?php echo $phone;?>" size="20" required><span class="error">*<i><?php echo $phoneErr;?></i></span><br>
        <input type="submit" value="submit">
      </form></fieldset>



<?php
/* this script is for entering data into database*/

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
 $database="akshay"; //database name 
$name=$_POST['name'];//this values comes from html file after submitting 
$email=$_POST['email']; 
$phone=$_POST['phone'];
$year=$_POST['year'];

$con = mysql_connect("localhost","root" ,"");
  if (!$con)  
   {     
      die('Could not connect: ' . mysql_error());     
  }  
      mysql_select_db("$database", $con); 
  
 $query="INSERT INTO asa (name,email,phone,year)VALUES ('$name','$email','$phone','$year')";
       mysql_query($query); 
echo "<script type='text/javascript'>\n"; 
echo "alert('you are Succesflly registered');\n"; 
echo "</script>"; 
mysql_close();
}
?>
