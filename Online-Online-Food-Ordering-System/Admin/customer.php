<html>
<head>
<title> Admin </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<?php
session_start();
$db = mysqli_connect('localhost', 'root', '','examplenew');
$db = mysqli_connect('localhost', 'root', '','examplenew');
$sql= "select cid,name,street,city,pin,email,contact,account from customer";
$r=mysqli_query($db,$sql);

?>
<table>
	<thead>
		<tr>
            <th>cid</th>
			<th>Name</th>
			<th>street</th>
			<th>city</th>
			<th>pin</th>
            <th>email</th>
			<th>contact</th>
			<th>account</th>
			
           
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
                <td>'. $row[4] .'</td>
				<td>'. $row[5].' </td>
				<td>'. $row[6].' </td>
				<td>'. $row[7].' </td>
				</tr>';
				//$i++;
			}
		?>
		</table>
  
</body>
</html>