<?php

declare(strict_types = 1);


class UnsafeMysqliQueryBuilder implements MysqliQueryBuilder
{
    private string $query;

    public function __construct(string $query)
    {
        $this->query = $query;
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
