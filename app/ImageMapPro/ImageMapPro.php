<?php
namespace App\ImageMapPro;

use Ro749\ListingUtils\ImageMapPro\MultiFloorImageMapPro;

class ImageMapPro extends MultiFloorImageMapPro
{
    public function __construct()
    {
        parent::__construct(
            table: 'opera_depas',
            floor_column: 'nivel',
            type_column: 'tipo',
            data_column: 'status',
            colors: ['#00ff00','#ff0000','#ffff00'],
            opacities: [0.4,0.4,0.4],
            files: ['imagemappro/tower.json','imagemappro/floor0.json','imagemappro/floor1.json'],
            floors_table: 'opera_floors',
        );
    }
}