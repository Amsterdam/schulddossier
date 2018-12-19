<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class RequiredFieldsWhenAddingNewMadiUser
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints
 */
class RequiredFieldsWhenAddingNewMadiUser extends Constraint
{
    /**
     * @var string
     */
    public $message = 'A schuldhulpbureau must be selected when creating a new user with the role Madi.';

    /**
     * @return mixed
     */
    public function getTargets(): string
    {
        return self::CLASS_CONSTRAINT;
    }
}
