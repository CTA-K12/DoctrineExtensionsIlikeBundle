<?php

namespace MESD\DoctrineExtensions\IlikeBundle\Walker;

use Doctrine\ORM\Query\SqlWalker;

class IlikeWalker extends SqlWalker
{
    // /**
    //  * {@inheritdoc}
    //  */
    // public function walkOrderByClause($orderByClause)
    // {
    //     $sql = parent::walkOrderByClause($orderByClause);
    //     var_dump($sql);
    //     var_dump(str_ireplace('ORDER BY', '', $sql));
    //     $orderByItems=explode(',', str_ireplace('ORDER BY', '', $sql));
    //     foreach ($orderByItems as $key => $item){
    //         $item='LOWER('.stristr(trim($item), ' ', true).')'.stristr(trim($item), ' ');
    //         $orderByItems[$key]=$item;
    //     }
    //     var_dump($orderByItems);
    //     $selects= parent::walkSelectClause();
    //     var_dump($selects);
    //     return $sql;
    //     return ' ORDER BY ' . implode(', ', $orderByItems);
    // }

    // Use as:
    // $query->setHint( $query::HINT_CUSTOM_OUTPUT_WALKER, '\MESD\DoctrineExtensions\IlikeBundle\Walker\IlikeWalker' );
    // on any query
}