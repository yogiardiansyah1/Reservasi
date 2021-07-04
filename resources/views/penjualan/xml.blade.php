<?php

$dom = new DOMDocument();

$dom->encoding = 'utf-8';

$dom->xmlVersion = '1.0';

$dom->formatOutput = true;

$date = date('d/m/Y');
$dt = str_replace('/','',$date);
$path = 'xml/';
$xml_file_name = $dt.'.xml';

$root = $dom->createElement('detail_penjualan');

$penjualan_node = $dom->createElement('penjualan');

foreach ($data as $dat) {

	$child_node_id_penjualan = $dom->createElement('ID_Penjualan', $dat->id_penjualan);

	$penjualan_node->appendChild($child_node_id_penjualan);

	$child_node_id_menu = $dom->createElement('ID_Menu', $dat->id_menu);

	$penjualan_node->appendChild($child_node_id_menu);

	$child_node_quantity = $dom->createElement('Quantity', $dat->qty);

	$penjualan_node->appendChild($child_node_quantity);

	$child_node_harga = $dom->createElement('Harga', $dat->harga);

	$penjualan_node->appendChild($child_node_harga);

	$child_node_subtotal = $dom->createElement('Subtotal', $dat->subtotal);

	$penjualan_node->appendChild($child_node_subtotal);
}

$root->appendChild($penjualan_node);

$dom->appendChild($root);

$dom->save($path . $xml_file_name);

echo "$xml_file_name has been successfully created";
echo "<a href='/cs'> csv </a>"
?>
