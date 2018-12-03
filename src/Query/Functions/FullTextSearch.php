<?php
declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Query\Functions;


use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\Lexer;

/**
 * FullTextSearchFunction ::= "FULLTEXTSEARCH" "(" ArithmeticPrimary "," ArithmeticPrimary ")"
 */
class FullTextSearch extends FunctionNode
{
    /**
     * @var Node
     */
    protected $field;

    /**
     * @var Node
     */
    protected $searchPhrase;

    /**
     * @param \Doctrine\ORM\Query\SqlWalker $sqlWalker
     *
     * @return string
     * @throws \Doctrine\ORM\Query\AST\ASTException
     */
    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker): string
    {
        return 'to_tsvector(\'dutch\', ' . $this->field->dispatch($sqlWalker) . ') @@ to_tsquery(\'dutch\', array_to_string(regexp_split_to_array(' . $this->searchPhrase->dispatch($sqlWalker) . ', \' \'), \'+\'))';
    }

    /**
     * @param \Doctrine\ORM\Query\Parser $parser
     *
     * @return void
     * @throws \Doctrine\ORM\Query\QueryException
     */
    public function parse(\Doctrine\ORM\Query\Parser $parser): void
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->field = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->searchPhrase = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
