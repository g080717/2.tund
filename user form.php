<?php 
	
//user_form.php

// jutum'rkide vahele input elemendi name
//echo $_POST["email"];
//echo $_POST["parool"];



//kontrolli ainult siis kasutaja vajutab logi sisse nuppu
if ($_SERVER["REQUEST_METHOD"] == "POST")   { 

 
//kontrollime kasutaja eposti et see ei ole tühi"

    if(empty($_POST["email"])){ 
		$email_error = "Ei saa olla tühi"; 
	
	}

//kontrollime parooli

 if(empty($_POST["password"])){ 
		$password_error = "Ei saa olla tühi"; 
 }else{
	 
// parool ei tühi, kontrollime pikkust
if (strlen($_POST["password"]) <8)  {
	 $password_error = 
	 }
	 
}
?>  
<html>

<head>
<title>user login page </title>
</head>
<body>

<h2>login</h2>
<form action="user form.php" method"get">
<input name="email" type="email" placeholder="e-post"> <?php echo $email_error; ?><br> <br>
<input name="parool" type="password" placeholder="parool">

<input type="submit" value="Logi sisse">
</form>
<h2>create user</h2>


<head>
</html>
