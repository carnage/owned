<?php

namespace Owned\Model\Repository;

use ZfcUser\Entity\UserInterface;

interface FindByOwnerInterface
{
    /**
     * Finds all entities owned by the provided user
     *
     * @param UserInterface $user
     * @return mixed
     */
    public function findAllByOwner(UserInterface $user);
}