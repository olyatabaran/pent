<?php


namespace App\Tests\User;
use App\User\ReadUser;

class UserRepository extends \App\User\UserRepository
{
    public $createWasCalled = false;
    public $user = null;
    public function create(ReadUser $user):bool
    {
        $this->createWasCalled = true;
        $this->user = $user;
      return true;
    }
}