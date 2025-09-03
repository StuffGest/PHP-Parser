<?php declare(strict_types=1);

namespace PhpParserSG\Node\Expr\AssignOp;

use PhpParserSG\Node\Expr\AssignOp;

class Mod extends AssignOp
{
    public function getType() : string {
        return 'Expr_AssignOp_Mod';
    }
}
