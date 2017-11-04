<?php
$r1=0;
$r2=0;
$r3=0;
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
	 $x=$selected."</br>";
}
echo $x;
}
/*
if(isset($_POST['2gb']))
{
$file_handle = fopen('RAM2new.csv', 'r');
$column='Rating';
echo '<table border="1">';
echo '<th>'.$column.'</th>';
echo '<th>Mobile Name</th>';
echo '<th>Price</th>';
echo '<th>RAM</th>';
while (!feof($file_handle) ) {

$info= fgetcsv($file_handle, 1024);
if(isset($_POST['1']))
{
if($info[1]>4 && $info[1]<4.5)
{
	echo '<tr>';
    echo '<td>'.$info[1].'</td>';
    echo '<td>'.$info[2].'</td>';
    echo '<td>'.$info[3].'</td>';
    echo '<td>'.$info[4].'</td>';
    echo '</tr>';

}

}
echo '</tbody></table>';    
}
fclose($file_handle);
}

echo "hle";
if(isset($_POST['3gb']))
{
$file_handle = fopen('RAM3new.csv', 'r');
$column='Rating';
echo '<table border="1">';
echo '<th>'.$column.'</th>';
echo '<th>Mobile Name</th>';
echo '<th>Price</th>';
echo '<th>RAM</th>';
while (!feof($file_handle) ) {

$info= fgetcsv($file_handle, 1024);

if($info[1]>4 && $info[1]<4.5)
{
	echo '<tr>';
    echo '<td>'.$info[1].'</td>';
    echo '<td>'.$info[2].'</td>';
    echo '<td>'.$info[3].'</td>';
    echo '<td>'.$info[4].'</td>';
    echo '</tr>';
}

}
echo '</tbody></table>';    
fclose($file_handle);
}

echo "hle";
if(isset($_POST['4gb']))
{
$file_handle = fopen('RAM4new.csv', 'r');
$column='Rating';
echo '<table border="1">';
echo '<th>'.$column.'</th>';
echo '<th>Mobile Name</th>';
echo '<th>Price</th>';
echo '<th>RAM</th>';
while (!feof($file_handle) ) {

$info= fgetcsv($file_handle, 1024);

	echo '<tr>';
    echo '<td>'.$info[1].'</td>';
    echo '<td>'.$info[2].'</td>';
    echo '<td>'.$info[3].'</td>';
    echo '<td>'.$info[4].'</td>';
    echo '</tr>';

}
echo '</tbody></table>';    
fclose($file_handle);
}
*/
?>