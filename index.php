<?php
$url = 'index.jpg';
?>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<head>
<title>Spark Bank</title>
<style type="text/css">
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
.a{
  position: absolute;
  top: 50%;
  left:35%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  color: black;
  font-size: 20px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.b{
  position: absolute;
  top: 60%;
  left: 35%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  color: black;
  font-size: 20px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.a:hover{
  background-color: black;
  color: white;
}
.b:hover{
  background-color: black;
  color: white;
}
h2{
  font-style: oblique;

}
</style>
</head>
<body>
<div class="jumbotron text-center">
  <h2>Welcome To The Spark Banking System</h2>
</div>
<form method="POST" action="customers.php">
<button class="a">View customers</button><br>
</form>

<form method="POST" action="transaction.php">
<button class="b">All transactions</button><br>
</form>


</body>