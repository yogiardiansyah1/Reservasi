<?php

namespace App\Http\Controllers;

use DOMDocument;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function insert($data)
    {
        DB::table('penjualan')->insert($data);
    }

    public function getAll()
    {
        return DB::table('penjualan')->get();
    }

    public function getPenjualanByRange($from, $to)
    {
        // return DB::table('penjualan')->where('id', $from.'%')->get();
    }

    //Detail Penjualan
    public function getAlldetail()
    {
        return view('penjualan/xml', ['dat' => DB::table('detail_penjualan')->get()]);
    }

    public function getdetailbyDatenow()
    {
        $date = date('d/m/y');
        $dt = str_replace('/', '', $date);
        return view('penjualan/xml', ['data' => DB::table('detail_penjualan')->where('id_penjualan', 'LIKE', '%' . $dt . '%')->get()]);
    }

    public function createxml()
    {
        $date = date('d/m/y');
        $dt = str_replace('/', '', $date);
        $data = DB::table('detail_penjualan')->where('id_penjualan', 'LIKE', '%' . $dt . '%')->get();

        $dom = new DOMDocument();

        $dom->encoding = 'utf-8';

        $dom->xmlVersion = '1.0';

        $dom->formatOutput = true;

        $date = date('d/m/Y');
        $dt = str_replace('/', '', $date);
        $path = 'xml/';
        $xml_file_name = $dt . '.xml';

        $root = $dom->createElement('detail_penjualan');

        foreach ($data as $dat) {

            $penjualan_node = $dom->createElement('penjualan');

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

            $root->appendChild($penjualan_node);
        }
        $dom->appendChild($root);

        $dom->save($path . $xml_file_name);

        $this->createcsv();
    }

    public function createcsv()
    {
        $date = date('d/m/Y');
        $dt = str_replace('/', '', $date);
        $path_xml = 'xml/';
        $path_csv = 'csv/';

        $xml_file_name = $path_xml . $dt . '.xml';
        $csv_file_name = $path_csv . $dt . '.csv';

        if (file_exists($xml_file_name)) {
            $xml = simplexml_load_file($xml_file_name);

            $output_file = fopen($csv_file_name, 'w');

            $header = false;

            foreach ($xml as $key => $value) {
                if (!$header) {
                    fputcsv($output_file, array_keys(get_object_vars($value)));
                    $header = true;
                }
                fputcsv($output_file, get_object_vars($value));
            }

            fclose($output_file);
        }

        function convertXmlToCsvFile($xml_file_input, $csv_file_output)
        {
            
        }
        $mail = new MailController();
        $mail->attachment_email();
    }
}
