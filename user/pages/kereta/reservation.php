<script type="text/javascript">
	function newWindow(a) {
		top.wRef=window.open(a,'myconsole','width=900, height=450, left=10, top=10'
			+',menubar=1'
			+',toolbar=0'
			+',staus=0'
			+',scrollbars=0'
			+',resizable=0'
			+',location=0')
	}
</script>
<script type="text/javascript">
	newWindow("struk.php?p=id=<?=$id?>");
</script> 

<?php 
$action = isset($_GET['action'])?$_GET['action']:"";
if ($action="beli") {
	$rute_id = isset($_GET['id'])?$_GET['id']:"";
	$res = $base->select("rute r, transport t where r.transport_id=t.id and r.id = '$rute_id'","r.id as id, r.berangkat_pada as berangkat, r.rute_from as dari, r.rute_to as menuju, r.price as harga, t.name_transport as nama_kereta, t.seat_qty as duduk, t.id as transport");
	while ($data = $res->fetch()) {
		extract($data);
		// print_r($data);
		$nama=str_replace(' ','', $nama_kereta);
		$rescode = $nama.$base->random(20);
		$kursi = $duduk-1;
		$user = $_SESSION['user'];
		$kode_kursi=$base->random(50);
		// print_r($kode_kursi);
		$reservation = $base->insert("reservation","'','$rescode','$dari','$berangkat','$kode_kursi','$id','$user','$transport'");
		$jav->redir("user/pages/kereta/struk.php?rescode='$rescode'");
	} 
}
?>
