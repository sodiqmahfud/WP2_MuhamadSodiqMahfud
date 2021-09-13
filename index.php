<!DOCTYPE html>
<html>
<head>

<title> Form Registrasi </title>
<style>
table, th, td {
  border: 1px solid black;
}

body {
	font: 16px/25px arial, sans-serif;
	background-color: #eaeaea;
	background-image: url(https://sodiqmahfud.files.wordpress.com/2021/04/moroccan-flower-dark.png);
	color: #333;
}

.container {
	width: 700px;
	margin: auto;
	background-color: HoneyDew;
}

.footer {
	background-color: #333;
	padding: 10px;
}

.footer .copy {
	color: #eaeaea;
	text-align: center;
	font-size: 12px

</style>
</head>

<body>
	<div class="container">
 <?php
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $birthday=$_POST['birthday'];
  $gender=$_POST['gender'];
  $birthplace=$_POST['birthplace'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $subject=$_POST['subject'];
 ?>
 <center><h3> Registrasi Berhasil </h3></center>
 <center><table style="width: 0%">
 <table border="1" cellpadding="5" cellspacing="0">
  <tr>
     <td>Nama Depan</td>
     <td> <?php echo $first_name ?> </td>
  </tr>
  <tr>
     <td>Nama Belakang</td>
     <td> <?php echo $last_name ?> </td>
  </tr>
  <tr>
     <td>Tanggal Lahir</td>
     <td> <?php echo $birthday ?> </td>
  </tr>
  <tr>
     <td>Jenis Kelamin</td>
     <td> <?php echo $gender ?> </td>
  </tr>
  <tr>
     <td>Tempat Lahir</td>
     <td> <?php echo $birthplace ?> </td>
  </tr>
  <tr>
     <td>Alamat</td>
     <td> <?php echo $address ?> </td>
  </tr>
  <tr>
     <td>Email</td>
     <td> <?php echo $email ?> </td>
  </tr>
  <tr>
     <td>Nomor Telephone</td>
     <td> <?php echo $phone ?> </td>
  <tr>
     <td>Pendidikan</td>
     <td> <?php echo $subject ?> </td>
  </tr>
 </table>
 </body>
 <body>
 <br>
 </body>
 
</html>