<?php


namespace App\Http\Repository\UserAccount;


use App\Http\Repository\RepositoriesInterface;

interface UserAccountRepoInterface extends RepositoriesInterface
{

    public function findPostById();
}
