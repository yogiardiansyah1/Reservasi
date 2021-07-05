<?php
$date = date('d/m/Y');
$dt = str_replace('/','',$date);
$path_xml = 'xml/';
$path_csv = 'csv/';

$xml_file_name = $path_xml.$dt.'.xml';
$csv_file_name = $path_csv.$dt.'.csv';

if (file_exists($xml_file_name)) {
    convertXmlToCsvFile($xml_file_name,$csv_file_name);
}

function convertXmlToCsvFile($xml_file_input, $csv_file_output) {
	$xml = simplexml_load_file($xml_file_input);
	
	$output_file = fopen($csv_file_output, 'w');
	
	// $header = false;
	
	foreach($xml as $key => $value){
		// if(!$header) {
			fputcsv($output_file, array_keys(get_object_vars($value)));
			// $header = true;
		// }
		fputcsv($output_file, get_object_vars($value));
	}
	
	fclose($output_file);
}
?>
