<?php

namespace App\Model\Manager;

use App\Entity\User;
use App\Entity\UserExtension;
use App\Model\UserInterface;
use App\Repository\UserExtensionRepository;
use App\Repository\UserRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class UserManager implements UserInterface
{
    private $registry;

    public function __construct(RegistryInterface $registry)
    {
        $this->registry = $registry;
    }

    public function getAllUser(int $id): User
    {
        return $this->registry->getRepository(User::class)->find($id);
    }

    public function getUserExtensionByUid(int $uid): UserExtension
    {
        return $this->registry->getRepository(UserExtension::class)->find($uid);
    }

    public function createUser(User $user): User
    {
        $this->registry->getRepository(User::class);
    }


}