<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
if($password != $c_password)
{
print "<script>alert('Konfirmasi password harus sama dengan password !');
javascript:history.go(-1);</script>";
exit;
}
if((!empty($nama)) && (!empty($email)) && (!empty($password)))
{
$query = mysql_query("INSERT INTO $table (nama,email,password)
values ('$nama','$email','$password');");
print "Registrasi success<br><a href=index.php><font color=blue>Back to
Home</font></a>";
}
else
{
print "<script>alert('Maaf, tidak boleh ada field yang kosong !');
javascript:history.go(-1);</script>";
}
?>
<?php mysql_close($connect); ?>