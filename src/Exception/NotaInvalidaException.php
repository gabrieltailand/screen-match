<?php

namespace ScreenMatch\Exception;

use Throwable;
use Override;

class NotaInvalidaException extends \InvalidArgumentException
{
    
    public function __construct()
    {
        return parent::__construct('Nota precisa ser entre 0 e 10');
    }
}