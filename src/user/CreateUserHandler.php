<?php

declare(strict_types=1);

namespace App\User;


class CreateUserHandler
{
    public $userRepository;

    public function __construct(CreateUserCommand $createUserCommand, UserRepository $userRepository)
    {
        $this->createUserCommand = $createUserCommand;


    }

    public function getCreateUserCommand()
    {
      return $this->createUserCommand;
    }



    public function handle()
    {
        $this->userRepository->create(new \App\User\User\User(
            $this->createUserCommand->getFirstName(),
            $this->createUserCommand->getLastName(),
            $this->createUserCommand->getEmail(),
            $this->createUserCommand->getPassword()
        ));
    }
}