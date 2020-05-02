<?php


namespace App\Http\Repository;


interface RepositoriesInterface
{
    public function getAll();

    public function storeOrUpdate($obj);

    public function delete($obj);

    public function findById($id);

}
