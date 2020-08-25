<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class BSN extends Constraint
{
    public $message = 'Ongeldige BSN "{{ string }}"';
}