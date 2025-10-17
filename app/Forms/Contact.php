<?php

namespace App\Forms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Ro749\SharedUtils\Forms\BaseForm;
use Ro749\SharedUtils\Forms\FormField;
use Ro749\SharedUtils\Forms\Selector;
use Ro749\SharedUtils\Forms\InputType;
use Ro749\SharedUtils\Forms\TextArea;
use Ro749\OpenListingTemplate\Enums\UnitsStatus;
use Ro749\OpenListingTemplate\Mail\ContactMail;

class Contact extends BaseForm
{
    public function __construct()
    {
        parent::__construct(
            submit_text: "Enviar",
            uploading_message: "Enviando...",
            success_msg: "¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.",
            fields: [
                'name' => new FormField(
                    type: InputType::TEXT,
                    label: 'Nombre',
                    rules: ["required"]
                ),
                'email' => new FormField(
                    type: InputType::EMAIL,
                    label: 'Correo electrónico',
                    rules: ["required"]
                ),
                'phone' => new FormField(
                    type: InputType::PHONE,
                    label: 'Teléfono',
                    rules: ["required"]
                ),
                'unit' => Selector::fromDB(
                    id: 'unitselector',
                    table: "opera_depas",
                    label_column: "unidad",
                    label: "Departamento de interés",
                    rules: ["required"],
                    query_modifier: function ($query) {
                        $query->where('status', UnitsStatus::Disponible->value);
                    }

                ),
                'message' => new TextArea(
                    label: 'Mensaje',
                    rows: 3
                ),

            ],
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
