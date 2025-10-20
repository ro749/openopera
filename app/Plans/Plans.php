<?php

namespace App\Plans;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Ro749\ListingUtils\Plans\PlansBase;
use Ro749\ListingUtils\Plans\Plan;
class Plans extends PlansBase
{   
    public function __construct()
    {
        parent::__construct(
            plans_table: 'opera_plans',
            lines_table: 'opera_planlines',
            title_column: 'nombre',
            discount_column: 'descuento',
            default_plan: new Plan(
                id: 0,
                title: 'Sin Plan',
                discounts: 0,
                lines: [],
                price_tag: 'Precio',
                total_tag: '',
            ),

        );
    }
}