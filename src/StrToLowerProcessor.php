<?php

declare(strict_types=1);

namespace Asyrovatkin\StudyPackage;

class StrToLowerProcessor
{
    public function getLowerString(string $string): string
    {
        return mb_strtolower($string);
    }

}