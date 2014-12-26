<?php

namespace Owned\Assertion;

use Owned\Model\OwnedInterface;
use ZfcRbac\Assertion\AssertionInterface;
use ZfcRbac\Service\AuthorizationService;

class OwnedByCurrentUser implements AssertionInterface
{
    /**
     * Check if this assertion is true
     *
     * @TODO: for v3, update the interface to typehint to AuthorizationServiceInterface instead
     *
     * @param  AuthorizationService $authorizationService
     * @param  mixed $context
     * @return bool
     */
    public function assert(AuthorizationService $authorizationService, OwnedInterface $context = null)
    {
        return $context->isOwner($authorizationService->getIdentity());
    }
}
