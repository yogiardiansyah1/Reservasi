<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function getAllMenu()
    {
        return DB::table('menu')->get();
    }

    public function getMenuById($id)
    {
        return DB::table('menu')->where('id', $id)->get();
    }

    public function getMenuByName($name)
    {
        return DB::table('menu')->where('nama', 'like', '%' . $name . '%')->get();
    }

    public function insertMenu($data)
    {
        DB::table('menu')->insert($data);
    }

    public function update($id, $data)
    {
        DB::table('menu')->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return DB::table('menu')->where('id', $id)->delete();
    }
}
