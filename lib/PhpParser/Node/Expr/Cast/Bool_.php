<?php declare(strict_types=1);

namespace PhpParserSG\Node\Expr\Cast;

use PhpParserSG\Node\Expr\Cast;

class Bool_ extends Cast
{
    public function getType() : string {
        return 'Expr_Cast_Bool';
    }
}
