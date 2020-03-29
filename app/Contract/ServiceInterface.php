<?php


namespace App\Contract;


interface ServiceInterface
{
    public function all($paginate);

    public function create($request);

    public function edit($request, $id);

    public function delete($id);
}
