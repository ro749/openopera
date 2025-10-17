<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('opera_floors', function (Blueprint $table) {
            $table->id();
            $table->string('floor');
            $table->integer('map');
            $table->rememberToken();
            $table->timestamps();
        });

        $data = ["1"=>1,"2"=>1,"3"=>1,"4"=>1,"5"=>1,"6"=>1,"7"=>1,"8"=>1,"9"=>1,"10"=>1,"11"=>1,"12"=>1,"13"=>1,"14"=>1,"15"=>1,"16"=>1,"17"=>1,"18"=>1,"19"=>1,"20"=>1,"21"=>1,"22"=>1,"23"=>1,"24"=>1,"25"=>1,"26"=>1,"27"=>1,"28"=>2,"29"=>2,"30"=>2,"31"=>2,"32"=>2,"33"=>2];

        foreach ($data as $key => $value) {
            DB::table('opera_floors')->insert([
                'floor' => $key,
                'map' => $value,
            ]);
        }
    }
};
