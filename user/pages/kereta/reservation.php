<?php 
$res = $base->select("rute r, transport t, pull p where r.transport_id=t.id and r.rute_from & r.rute_to=p.id and r.berangkat_pada = '$berangkat' and r.rute_from = '$dari' and r.rute_to = '$tujuan'","r.id, r.berangkat_pada, r.rute_to, p.id as id_kota, p.kota as dari, r.price, t.name_transport as transport");
while ($data = $res->fetch()) {
	if ($data['rute_to']!="") {
		$w=$data['rute_to'];
		$row = $base->select("pull where id = $w","kota");
		$q=$row->fetch();
	}
}
 ?>