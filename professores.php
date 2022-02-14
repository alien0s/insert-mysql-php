<?php
require ('connectionFactory.php');
conexao();

$nome=$_REQUEST['txtnome'];
$salario=$_REQUEST['txtsal'];
$grauinst=$_REQUEST['txtgrauinst'];
$login=$_REQUEST['txtlogin'];
$senha=$_REQUEST['txtsenha'];

echo "$nome<p>";
echo "$salario<p>";
echo "$grauinst<p>";
echo "$login<p>";
echo "$senha<p>";

$sql=mysql_query("insert into professor values(null,'$nome','$salario','$grauinst','$login','$senha')");
mysql_query($sql);

echo"<script>alert('Salvou')</script>";
?>