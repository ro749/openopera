<?php

namespace App\Enums;

enum Options: string
{
    case UnitsStatus = 'UnitsStatus';
    case AsesorCategories = 'AsesorCategories';
    case ClientCategories = 'ClientCategories';
    case ClientPriorities = 'ClientPriorities';
    case QuotationStatus = 'QuotationStatus';
    case AsesorStatus = 'AsesorStatus';
}