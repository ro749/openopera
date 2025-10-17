<?php

namespace App\Http\Controllers;
use App\Plans\Plans;
use Ro749\ListingUtils\ImageMapPro\ImageMapProBase;
use Ro749\OpenListingTemplate\Forms\Contact;
use Ro749\OpenListingTemplate\Controllers\DispoController as DispoControllerBase;
class DispoController extends DispoControllerBase
{
    function index() {
        $imp = ImageMapProBase::instance();
        $form = Contact::instanciate();
        $plans = Plans::instance()->get();
        return view('disponibilidad',[
            'imp'=>$imp,
            'plans'=>$plans,
            'unit'=>null,
            'menu'=>true,
            'form'=>$form,
            'init_unit'=>null,
        ]);
    }
}
