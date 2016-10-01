<?php

namespace DDDCollection;

use Doctrine\ORM\Query;

class DoctrineDQLCount extends CallableCount
{
    public function __construct(Query $query)
    {
        parent::__construct(function () use ($query) {
            return $query->getSingleScalarResult();
        });
    }
}