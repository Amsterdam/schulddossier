<?php
declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Query\Functions;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;


/**
 * LEVENSHTEIN ::= "LEVENSHTEIN" "(" ArithmeticPrimary "," ArithmeticPrimary ")"
 */
class Levenshtein extends FunctionNode
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
     * {@inheritDoc}
     * @see \Doctrine\ORM\Query\AST\Functions\FunctionNode::getSql()
     */
    public function getSql(SqlWalker $sqlWalker): string
    {
        return 'LEVENSHTEIN(' . $this->field->dispatch($sqlWalker) . ', ' . $this->searchPhrase->dispatch($sqlWalker) . ')';
    }

    /**
     * {@inheritDoc}
     * @see \Doctrine\ORM\Query\AST\Functions\FunctionNode::parse()
     */
    public function parse(Parser $parser): void
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->field = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->searchPhrase = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    /**
     * @param string $searchPhrase
     *
     * @return int
     */
    public static function determineTolerance(string $searchPhrase): int
    {
        $searchPhraseLength = strlen($searchPhrase);

        if ($searchPhraseLength <= 3) {
            return 1;
        } else if ($searchPhraseLength === 4) {
            return 2;
        }

        return 3;
    }
}
