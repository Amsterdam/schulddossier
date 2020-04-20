<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Exception;

class AllegroServiceException extends \Exception
{
    const TYPE_MISSING_CLIENT_BIRTHDATE = 'MISSING_CLIENT_BIRTHDATE';
    const TYPE_MISSING_CLIENT_GENDER = 'MISSING_CLIENT_GENDER';
    const TYPE_MISSING_CLIENT_BSN = 'MISSING_CLIENT_BSN';
    const TYPE_MISSING_CLIENT_INITIALS = 'MISSING_CLIENT_INITIALS';

    const TYPE_MISSING_PARTNER_BIRTHDATE = 'MISSING_PARTNER_BIRTHDATE';
    const TYPE_MISSING_PARTNER_GENDER = 'MISSING_PARTNER_GENDER';
    const TYPE_MISSING_PARTNER_BSN = 'MISSING_PARTNER_BSN';
    const TYPE_MISSING_PARTNER_INITIALS = 'MISSING_PARTNER_INITIALS';

    public static function missingClientBirthdate(): AllegroServiceException {
        return new self(self::TYPE_MISSING_CLIENT_BIRTHDATE);
    }

    public static function missingClientGender(): AllegroServiceException {
        return new self(self::TYPE_MISSING_CLIENT_GENDER);
    }

    public static function missingClientBSN(): AllegroServiceException {
        return new self(self::TYPE_MISSING_CLIENT_BSN);
    }

    public static function missingClientInitials(): AllegroServiceException {
        return new self(self::TYPE_MISSING_CLIENT_INITIALS);
    }

    public static function missingPartnerBirthdate(): AllegroServiceException {
        return new self(self::TYPE_MISSING_PARTNER_BIRTHDATE);
    }

    public static function missingPartnerGender(): AllegroServiceException {
        return new self(self::TYPE_MISSING_PARTNER_GENDER);
    }

    public static function missingPartnerBSN(): AllegroServiceException {
        return new self(self::TYPE_MISSING_PARTNER_BSN);
    }

    public static function missingPartnerInitials(): AllegroServiceException {
        return new self(self::TYPE_MISSING_PARTNER_INITIALS);
    }
}
