<?php 
session_start();
$username   = $_SESSION['username'];
$level      = $_SESSION['level'];
if(isset($_SESSION['username']) && isset($_SESSION['level']))
{

}
else
{
	echo ("
		<script type='text/javascript'>
			alert('login terlebih dahulu');document.location='index.php';
		</script>
		");
}
?>
<?php 
	if($_SESSION['level']==1){
?>
<center><a href="user.php">Menu user</a></center>
<center><a href="barang.php">Menu barang</a></center>
<center><a href="kategori.php">Menu kategori</a></center>
<center><a href="transaksi.php">Menu transaksi</a></center>
<center><a href="logout.php">Logout</a></center>
<?php 
}
else{
	echo "<center><b>welcome user</b></center><br>";
?>
<center><a href="transaksi.php">Menu transaksi</a></center>
<center><a href="logout.php">Logout</a></center>
<?php }
?>