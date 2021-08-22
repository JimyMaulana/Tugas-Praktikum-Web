<?php 
include("koneksi.php");

$nama=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$messege=$_POST['messege'];

$q=mysqli_query($mysqli,"INSERT INTO pesan VALUES ('','$nama','$email','$phone','$messege')");
if($q){
?>
<script type="text/javascript">
	alert("Data Berhasil disimpan");
</script>
<?php
}
echo 'META HTTP-EQUIV="refresh" Content="0; URL=index.html">';
?>