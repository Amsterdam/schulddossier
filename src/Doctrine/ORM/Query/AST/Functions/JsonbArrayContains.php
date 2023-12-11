<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Doctrine\ORM\Query\AST\Functions;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;

/**
 * Implementation of PostgreSql ? (jsonb_exists)
 */
class JsonbArrayContains extends FunctionNode
{
    /**
     * @var array
     */
    protected $expressions;

    public function parse(Parser $parser): void
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->expressions[] = $parser->ArithmeticFactor();
        $parser->match(Lexer::T_COMMA);
        $this->expressions[] = $parser->StringPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'jsonb_exists(' . $this->expressions[0]->dispatch($sqlWalker) . ', ' . $this->expressions[1]->dispatch($sqlWalker) . ')';
    }
}