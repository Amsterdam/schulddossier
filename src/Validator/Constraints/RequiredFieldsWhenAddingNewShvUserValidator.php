<?php

declare(strict_types=1);

namespace GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Class RequiredFieldsWhenAddingNewShvUserValidator
 *
 * @package GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints
 */
class RequiredFieldsWhenAddingNewShvUserValidator extends ConstraintValidator
{
    /**
     * Checks if the passed value is valid.
     *
     * @param mixed      $protocol   The value that should be validated
     * @param Constraint $constraint The constraint for the validation
     */
    public function validate($protocol, Constraint $constraint): void
    {
        if (strtolower($protocol->getType()) === 'shv') {
            if (count($protocol->getOrganisaties()) === 0) {
                $this->context->buildViolation($constraint->message)
                    ->atPath('organisaties')
                    ->addViolation();
            }
        }
    }
}
