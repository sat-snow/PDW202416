<?php

namespace App\Controllers;

class CFormularios extends BaseController
{
    public function MMostrarForm(): string
    {
        return view("Forms/form");
    }
}
 