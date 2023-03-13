<?php
namespace App\Taxes;
class calculator{

    public function prixTVA($prix):float
    {
        return $prix*0.2;

    }
    public function prixTTC($prix):float
    {
        return $prix+(1+0.2);

    }

}