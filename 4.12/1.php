<?php
$sum = 0;
for($i=0;$i<=100;$i++){
	$sum += $i;
}
echo $sum;
echo '<br>';
?>
<?php
$sum = 0;
$i=1;
while($i<=100){
	
	$sum += $i;
	$i++;
}
echo $sum;
echo '<br>';
?>
<?php
$i=1;
$sum = 0;
do
{
    
    $sum += $i;
$i++;
    
}
while ($i<=100);
 echo $sum;
?>


