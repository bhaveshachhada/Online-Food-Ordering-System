<html>
<head>
<title> Admin </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php
session_start();
$db = mysqli_connect('localhost', 'root', '','examplenew');
$sql= "select * from permanent_deliveryboy";
$r=mysqli_query($db,$sql);

?>
<table>
	<thead>
		<tr>
            <th>dbid</th>
			<th>name</th>
			
			<th>city</th>
			<th>pin</th>
			<th>salary</th>
			<th>email</th>
			<th>contact</th>
			<th>account</th>
			<th>status</th>
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