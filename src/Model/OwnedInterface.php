<?php

namespace Owned\Model;

use ZfcUser\Entity\UserInterface;

interface OwnedInterface
{
    /**
     * Is this user the owner of this object
     *
     * @param UserInterface $user
     * @return boolean
     */
    public function isOwner(UserInterface $user);

    /**
     * Set the owner of this object such that isOwner($user) returns true
     *
     * @param UserInterface $user
     * @return $this
     */
    public function setOwner(UserInterface $user);
}