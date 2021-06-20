<?php
$url = 'b11.jpg';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;

}
body
{
    background-image:url('<?php echo $url ?>');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%; 
}
table {
  
  width:50%;
  height: 5px;%;
}
th, td {
  text-align:center;
  padding: 12px;
  font-size: 20px;
}
tr:hover{
    background-color:#f5f5f5;
}
</style>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Spark Banking System</a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Home</a></li>
      <li><a href="customers.php">View Customers</a></li>
      <li><a href="transaction.php">All Transaction</a></li>
    </ul>
  </div>
</nav>

    <?php
	include("database.php");
	$query="select * from customer_details";
	$result=mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)>0)
	{ 
		echo "<center><div>";
		echo "<table border='5'>";
		echo "<tr>";
			echo "<th colspan='5'><h2>Customer Details</h2></th>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>S.No</th>";
			echo "<th>Name</th>";
			echo "<th>Email</th>";
			echo "<th>Current balance</th>";
			echo "<th>View</th>";
		echo "</tr>";
			while($row=mysqli_fetch_assoc($result))
			{
				$id = $row['Name'];
			echo "<tr>
				<td>".$row['S.No']."</td>
				<td>".$row['Name']."</td>
				<td>".$row['EmailId']."</td>
				<td>".$row['Balance']."</td>
				<form action='view.php' method='post'>
				<td><Button type='submit' name='name' value=$id class='btn'>View</Button></td>
				</form>
			</tr>";
			}
			echo "</table></div></center>";
		}
		else
			echo "0 results";
		mysqli_close($con);
		?>

</body>
</html>
