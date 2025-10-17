<?php

namespace App\Tables;

use Illuminate\Database\Query\Builder;
use Ro749\SharedUtils\Tables\BaseTable;
use Ro749\SharedUtils\Getters\ArrayGetter;
use Ro749\SharedUtils\Tables\Column;
use Ro749\SharedUtils\Models\Modifier;
use Ro749\SharedUtils\Tables\View;
use Ro749\SharedUtils\Filters\BackendFilters\BasicFilter;
use Ro749\SharedUtils\Tables\Texts\TableTexts;
use Ro749\OpenListingTemplate\Enums\UnitsStatus;
class Torre extends BaseTable
{
    public function __construct(){
        parent::__construct(
            page_length: 100,
            view: new View(
                url: route('view-asesor'),
                param: 'id',
                name: 'id',
                full_row: true
            ),
            texts: new TableTexts(
                lengthMenu: '_MENU_  &nbsp;Unidades por página',
                info: 'Mostrando _START_ a _END_ de _TOTAL_ Unidades Disponibles',
            ),
            getter: new ArrayGetter(
                table: 'opera_depas',
                columns : [
                    'unidad'=>new Column(
                        display:"Unidad",
                    ),
                    'torre'=>new Column(
                        display:"Torre",
                    ),
                    'tipo'=>new Column(
                        display:"Tipo",
                    ),
                    "recamaras"=>new Column(
                        display:"Recamaras",
                    ),

                    "baños"=>new Column(display:"Baños"),
                    "estacionamiento"=>new Column(display:"Estacionamiento"),
                    "interior"=>new Column(
                        display:"Interior",
                        modifier:Modifier::METERS
                    ),
                    "exterior"=>new Column(
                        display:"Exterior",
                        modifier:Modifier::METERS
                    ),
                    "total"=>new Column(
                        display:"Total",
                        modifier:Modifier::METERS
                    ),
                    "contado"=>new Column(
                        display:"Contado",
                        modifier:Modifier::MONEY
                    ),
                ],
                filters: [],
                backend_filters: [
                    new BasicFilter(
                        id:'status',
                        filter: function (Builder $query,$data) {
                            return $query->where('status', '=', UnitsStatus::Disponible->value);
                        }
                    ),
                ]
            )
        );
    }
}