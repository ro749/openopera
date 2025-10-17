<?php

namespace App\Forms;

use Ro749\OpenListingTemplate\Forms\Contact as ContactBase;
use Ro749\SharedUtils\Forms\Selector;
use App\Enums\UnitsStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Ro749\OpenListingTemplate\Mail\ContactMail;
class Contact extends ContactBase
{
    public function __construct()
    {
        parent::__construct();
        $this->fields['unit'] = Selector::fromDB(
                    id: 'unitselector',
                    table: "opera_depas",
                    label_column: "unidad",
                    label: "Departamento de interés",
                    rules: ["required"],
                    query_modifier: function ($query) {
                        $query->where('status', UnitsStatus::Disponible->value);
                    }

                );
    }

    public function prosses(Request $rawRequest): string
    {
        $data = $rawRequest->validate($this->rules($rawRequest));
        $mail = new ContactMail(
            $data['name'],
            $data['phone'],
            $data['email'],
            $data['unit'],
            $data['message']??""
        );
        Mail::to('rorivera200@gmail.com')->send($mail);
        return $this->redirect;
    }
}
