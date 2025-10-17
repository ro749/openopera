<?php

namespace App\Plans;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Ro749\ListingUtils\Plans\PlansBase;

class Plans extends PlansBase
{   
    public function __construct()
    {
        parent::__construct(
            plans_table: 'opera_plans',
            lines_table: 'opera_planlines',
            title_column: 'nombre',
            discount_column: 'descuento'
        );
    }
}