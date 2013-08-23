<?php

namespace MESD\DoctrineExtensions\IlikeBundle\Walker;

use Doctrine\ORM\Query\SqlWalker;

class IlikeWalker extends SqlWalker
{
     /**
     * Walks down a SelectClause AST node, thereby generating the appropriate SQL.
     *
     * @param $selectClause
     * @return string The SQL.
     */
    public function walkLikeExpression($likeExpr)
    {
        $sql = parent::walkLikeExpression($likeExpr);
        $sql = str_replace('LIKE', 'ILIKE', $sql);
        return $sql;
    }

    // Use as:
    // $query->setHint( $query::HINT_CUSTOM_OUTPUT_WALKER, '\MESD\DoctrineExtensions\IlikeBundle\Walker\IlikeWalker' );
    // on any query
}