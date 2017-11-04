<?php
$r1=0;
$r2=0;
$r3=0;
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
	 $ram=$selected;
}
}
if(!empty($_POST['rating'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['rating'] as $selected){
	 $rating=$selected;
}
}
echo $ram;
echo $rating;

$file_handle = fopen('final.csv', 'r');
$column='Rating';
echo '<table border="1">';
echo '<th>'.$column.'</th>';
echo '<th>Mobile Name</th>';
echo '<th>Price</th>';
echo '<th>RAM</th>';
while (!feof($file_handle) ) {

$info= fgetcsv($file_handle, 1024);
if($info[3]==$ram && $info[0]>$rating && $info[0]<($rating+0.5) )
{
	echo '<tr>';
    echo '<td>'.$info[0].'</td>';
    echo '<td>'.$info[1].'</td>';
    echo '<td>'.$info[2].'</td>';
    echo '<td>'.$info[3].'</td>';
    echo '</tr>';

}

}
echo '</tbody></table>';    
fclose($file_handle);
?>