<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Transacao extends DataLayer
{
    public function __construct()
    {
        parent::__construct("transacaos", ["tipo_id", "data","valor","bi","cartao","hora","donoLoja","nomeLoja"],"id",false);
    }
  
}