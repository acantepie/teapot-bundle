<?php

namespace Acantepie\TeapotBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcantepieTeapotBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}