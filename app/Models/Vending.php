<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vending extends Model
{
    public function getList() {

        $vendings = DB::table('vendings')->get();
        return $vendings;
    }

    public function registVending($data) {
        DB::table('vendings')->insert([
            'title' => $data->title,
            'url' => $data->url,
            'comment' => $data->comment,
        ]);
    }
}
