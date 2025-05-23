<?php
declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Query\Functions;

use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\AST\ASTException;
use Doctrine\ORM\Query\QueryException;
use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\Lexer;

/**
 * FullTextSearchFunction ::= "FULLTEXTSEARCH" "(" ArithmeticPrimary "," ArithmeticPrimary "," ArithmeticPrimary "," ArithmeticPrimary ")"
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
    protected $fullTextSearchPhrase;

    /**
     * @var Node
     */
    protected $partialSearchPhrase;

    /**
     * @param SqlWalker $sqlWalker
     *
     * @return string
     * @throws ASTException
     */
    public function getSql(SqlWalker $sqlWalker): string
    {
        $field = $this->field->dispatch($sqlWalker);
        $searchPhrase = $this->fullTextSearchPhrase->dispatch($sqlWalker);
        $partialSearchPhrase = $this->partialSearchPhrase->dispatch($sqlWalker);

        return "to_tsvector('dutch', " . $field . ") @@ to_tsquery('dutch', array_to_string(regexp_split_to_array(" . $searchPhrase . ", ' '), '+')) OR " . $field . " LIKE '%' || " . $partialSearchPhrase . " || '%'";
    }

    /**
     * @param Parser $parser
     *
     * @return void
     * @throws QueryException
     */
    public function parse(Parser $parser): void
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->field = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->fullTextSearchPhrase = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->partialSearchPhrase = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
