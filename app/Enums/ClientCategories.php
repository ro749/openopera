<?php

namespace App\Enums;

enum ClientCategories: int
{
    case Nuevo = 0;
    case Perfilado = 1;
    case Negociacion = 2;
    case Cerrado = 3;
}