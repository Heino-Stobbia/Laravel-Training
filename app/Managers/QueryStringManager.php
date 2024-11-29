<?php

namespace App\Managers;

class QueryStringManager
{
    protected ?string $search = null;

    protected int $perPage = 5;

    protected ?string $include = null;

    // Setters
    public function setQueryString(array $query): void
    {
        $this->setSearch($query['search']?? null);
        $this->setInclude($query['include']?? null);
        $this->setPerPage($query['perPage']?? 5);
    }

    private function setPerPage(?int $perPage)
    {
        $this->perPage = $perPage ?? 5;
    }

    private function setSearch(?string $search)
    {
        $this->search = $search;
    }

    private function setInclude(?string $includes)
    {
        $this->include = $includes;
    }

    // Getters
    public function getPerPage(){
        return $this->perPage;
    }

    public function getSearch(){
        return $this->search;
    }

    public function getInclude(){
        return $this->include;
    }
}