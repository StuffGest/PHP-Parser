<?php declare(strict_types=1);

namespace PhpParserSG\Node\Expr\BinaryOp;

use PhpParserSG\Node\Expr\BinaryOp;

class LogicalXor extends BinaryOp
{
    public function getOperatorSigil() : string {
        return 'xor';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_LogicalXor';
    }
}
