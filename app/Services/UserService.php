<?php

namespace App\Services;

use App\Managers\QueryStringManager;
use App\Models\User;

class UserService {

    public $query;

    public function __construct(private QueryStringManager $queryStringManager)
    {
        $this->initialiseQuery();
        $this->applyQueryString();
    }

    public function initialiseQuery()
    {
        $this->query = User::query();
    }

    public function applyQueryString() {
        $this->applySearch();
        $this->applyIncludes();
    }

    public function getPaginatedUsers() {

        return $this->query->paginate($this->queryStringManager->getPerPage());
    }

    private function applySearch() {
        $search = $this->queryStringManager->getSearch();

        if ($search) {
            $this->query->where('name', 'like', "%" . $search . "%");
        }
    }

    private function applyIncludes()
    {
        $include = $this->queryStringManager->getInclude();

        if ($include) {
            $this->query->with($include);
        }
    }
}