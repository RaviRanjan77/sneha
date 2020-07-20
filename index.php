<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet"type="text/css" href="style.css">
</head>
<body>
<header>
<div class="main">
    <div class="logo">
        <img src="0.jpg">
</div>
<ul>
<li><a href="#">A.C</a><li>
<li><a href="#">NON.A.C</a></<li>
</ul>
</div>
</header>
<div class="login-box">
  <h1>Login</h1>
  <form method="post">
  Username:
   <input type="text" name="txtname">
  <br>
  Password:
   <input type="Password" name="txtpass">   	
<br>
    <input type="submit" name="btn" value="Visitor">
</div>
  </form>
    <?php
   if (isset($_POST["btn"]))
  {
   $a=$_POST["txtname"];
   $b=$_POST["txtpass"];

$u="Hotel";
 $p="123";

if ($a==$u && $b==$p) 
{
	 header("location:dashboard.php");
	 // header ()used for redirect to another page by php
}
   else
 {

 	  echo "Wrong Username / Password";
 }

  }

?>
</body>
</html>
