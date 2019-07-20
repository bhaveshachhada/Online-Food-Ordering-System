<html>
<head>
<title> Admin </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php
session_start();
$db = mysqli_connect('localhost', 'root', '','examplenew');
echo "<center><h2>Local_providers</h2></center>";
$sql= "select prid,name,street,city,pin,email,speciality,account,providerid from local_provider";
$r=mysqli_query($db,$sql);

?>
<table>
	<thead>
		<tr>
            <th>prid</th>
			<th>name</th>
			<th>street</th>
			<th>city</th>
			<th>pin</th>
			<th>email</th>
			<th>speciality</th>
			<th>account</th>
			<th>providerid</th>
		</tr>
	</thead>
		<?php
			//$i = 0;
			
			while($row = mysqli_fetch_array($r,MYSQLI_NUM))
			{
				
				echo '<tr>
				<td>'. $row[0] .'</td>
				<td>'. $row[1].' </td>
				<td>'. $row[2].' </td>
				<td>'. $row[3].' </td>
				<td>'. $row[4].' </td>
				<td>'. $row[5].' </td>
				<td>'. $row[6].' </td>
				<td>'. $row[7].' </td>
				<td>'. $row[8].' </td>
                </tr>';
				//$i++;
			}
		?>
		</table>
<?php
//session_start();
//$db = mysqli_connect('localhost', 'root', '','examplenew');
echo "<center><h2>Restaurants</h2></center>";
$sql= "select prid,name,street,city,pin,email,rating,account,providerid from restaurant";
$r=mysqli_query($db,$sql);

?>		
<table>
	<thead>
		<tr>
            <th>prid</th>
			<th>name</th>
			<th>street</th>
			<th>city</th>
			<th>pin</th>
			<th>email</th>
			<th>rating</th>
			<th>account</th>
			<th>providerid</th>
		</tr>
	</thead>
		<?php
			//$i = 0;
			
			while($row = mysqli_fetch_array($r,MYSQLI_NUM))
			{
				
				echo '<tr>
				<td>'. $row[0] .'</td>
				<td>'. $row[1].' </td>
				<td>'. $row[2].' </td>
				<td>'. $row[3].' </td>
				<td>'. $row[4].' </td>
				<td>'. $row[5].' </td>
				<td>'. $row[6].' </td>
				<td>'. $row[7].' </td>
				<td>'. $row[8].' </td>
                </tr>';
				//$i++;
			}
		?>
		</table>
  
</body>
</html>