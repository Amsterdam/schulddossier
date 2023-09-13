<?php

declare(strict_types=1);

namespace App\Doctrine\ORM\Query\AST\Functions;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;

/**
 * Implementation of PostgreSql ILIKE().
 *
 * @see https://www.postgresql.org/docs/9.3/functions-matching.html
 * @since 1.1
 *
 * @author llaakkkk <lenakirichokv@gmail.com>
 * @see https://github.com/martin-georgiev/postgresql-for-doctrine/blob/master/src/MartinGeorgiev/Doctrine/ORM/Query/AST/Functions/Ilike.php
 */
class Ilike extends FunctionNode
{
    /**
     * @var string
     */
    protected $functionPrototype;

    /**
     * @var string[]
     */
    protected $nodesMapping = [];

    /**
     * @var Node[]
     */
    protected $nodes = [];

    protected function customiseFunction(): void
    {
        $this->setFunctionPrototype('%s ilike %s');
        $this->addNodeMapping('StringPrimary');
        $this->addNodeMapping('StringPrimary');
    }

    protected function setFunctionPrototype(string $functionPrototype): void
    {
        $this->functionPrototype = $functionPrototype;
    }

    protected function addNodeMapping(string $parserMethod): void
    {
        $this->nodesMapping[] = $parserMethod;
    }

    public function parse(Parser $parser): void
    {
        $this->customiseFunction();

        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->feedParserWithNodes($parser);
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    /**
     * Feeds given parser with previously set nodes.
     */
    protected function feedParserWithNodes(Parser $parser): void
    {
        $nodesMappingCount = \count($this->nodesMapping);
        $lastNode = $nodesMappingCount - 1;
        for ($i = 0; $i < $nodesMappingCount; $i++) {
            $parserMethod = $this->nodesMapping[$i];
            $this->nodes[$i] = $parser->{$parserMethod}();
            if ($i < $lastNode) {
                $parser->match(Lexer::T_COMMA);
            }
        }
    }

    public function getSql(SqlWalker $sqlWalker): string
    {
        $dispatched = [];
        foreach ($this->nodes as $node) {
            $dispatched[] = $node->dispatch($sqlWalker);
        }

        return \vsprintf($this->functionPrototype, $dispatched);
    }
}