<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * Class RequiredFieldsWhenAddingNewShvUser
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints
 */
class RequiredFieldsWhenAddingNewShvUser extends Constraint
{
    /**
     * @var string
     */
    public $message = 'Je moet eerst een organisatie selecteren om een gebruiker met rol SHV-er/Bewindvoerder aan te kunnen maken';

    /**
     * @return mixed
     */
    public function getTargets(): string
    {
        return self::CLASS_CONSTRAINT;
    }
}
