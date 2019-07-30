<?php
header('Content-Type: application/json');

include dirname(dirname(__FILE__)).'/db/Db.class.php';

$db = new Db();

$limit = isset($_GET['limit']) ? (int) $_GET['limit'] : 0;
$name = isset($_GET['name']) ? $_GET['name'] : '';

$sql_limit = '';
if (!empty($limit)) {
    $sql_limit = ' LIMIT 0,'.$limit;
}
$sql_name = '';
if (!empty($name)) {
    $sql_name = ' where nama_brg LIKE \'%'.$name.'%\' ';
}

$cat_list = $db->query('select barang.kd_brg, barang.nama_brg, barang.spek, barang.stok, 
barang.harga, barang.kategori, keranjang.jumlah, keranjang.id_session from barang JOIN keranjang 
ON barang.kd_brg = keranjang.kd_brg'.$sql_name.' '.$sql_limit);

$arr = array();
$arr['info'] = 'success';
$arr['num'] = count($cat_list);
$arr['result'] = $cat_list;

echo json_encode($arr);