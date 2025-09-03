<?php declare(strict_types=1);

namespace PhpParserSG\Node\Expr\BinaryOp;

use PhpParserSG\Node\Expr\BinaryOp;

class BitwiseOr extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '|';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_BitwiseOr';
    }
}
