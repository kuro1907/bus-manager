<?php
namespace App\Repositories\Contracts;

use App\Repositories\RepositoryInterface;

interface OperationsRepository extends RepositoryInterface {

    public function create($attributes);
    public function update($route_id, $attributes);
    public function getByOperator($operator_id);
    public function getByDate($date);
}