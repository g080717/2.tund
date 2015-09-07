<?php

$first_name = 'Svetlana';
$last_name = 'Natalova';


echo $first_name." " .$last_name;

?>

<br>

<?php 
	
	$age = 5;
	
	// if( loogikatehe ){ tõene } else { väär }
	if($age < 18) {
		echo "alaealine";
	} else {
		echo "täisealine";
	}
?>  

<br>

<?php 
	
	for ($i = 0; $i < $age; $i = $i +1){ 

echo "palju,".$i.",";

	} 
	echo "õnne";
?>  

<br>

<?php 
	
echo date ("l, j F  Y e");
?>  




