<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class BSNValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof BSN) {
            throw new UnexpectedTypeException($constraint, BSN::class);
        }

        if (0 === strlen($value)) {
            return;
        }

        if (!is_numeric($value) || !in_array(strlen($value), [8, 9])) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();

            return;
        }

        $digits = str_split($value);
        $sum = 0;

        for ($i=count($digits);$i>0;$i--) {
            $digit = current($digits);
            if ($i>1) {
                $sum += $i*$digit;
            } else {
                $sum += -1*$digit;
            }
            next($digits);
        }

        if ($sum/11 !== (int)floor($sum/11)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}