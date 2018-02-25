<?php 
class javas
{
	public function get($a,$b="")
	{
		$data = isset($_GET['$a'])?$_GET['$a']:"$b";
	}
	public function post($a,$b="")
	{
		$data = isset($_POST['$a'])?$_POST['$a']:"$b";
	}
	public function sess($a,$b="")
	{
		$data = isset($_SESSION['$a'])?$_SESSION['$a']:"$b";
	}
	public function redir($url)
	{
		echo "<script>location.href='$url'</script>";
	}
	public function alert($mess)
	{
		echo "<script>alert('$mess')</script>";
	}
	public function rupiah($value)
	{
		echo "Rp".number_format($value).",-";
	}
}
$jav = new Javas();
 ?>