<?php


namespace App\Contract;


interface RepositoryInterface
{
    public function model();

    public function all($paginate);

    public function delete($obj);

    public function update($obj);

    public function store($obj);
}
