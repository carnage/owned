<?php

namespace Application\Model\Repository;

use ZfcUser\Entity\UserInterface;
use Doctrine\ORM\EntityRepository;

class Owned extends EntityRepository implements FindByOwnerInterface
{
    /**
     * Finds all entities owned by the provided user
     *
     * @param UserInterface $user
     * @return mixed
     */
    public function findAllByOwner(UserInterface $user)
    {
        $query = $this->createQueryBuilder('i');
        $query->join('i.user', 'u');
        $query->where('u.id = :userid');
        $query->setParameter('userid', $user->getId());


        return $query->getQuery()->getResult();
    }

}