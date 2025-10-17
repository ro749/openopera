<?php

namespace App\Models;

use Ro749\SharedUtils\Models\Model;

use Illuminate\Support\Facades\DB;
class Unit extends Model
{
    static function get(string $column,string $id){
        return DB::table('opera_depas')->where($column,$id)->first();
    }
}
