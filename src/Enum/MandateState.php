<?php

declare(strict_types=1);

namespace Lendable\GoCardlessEnterpriseBundle\Enum;

class MandateState
{
    const ACTIVE = 'active';
    const CANCELLED = 'cancelled';
    const EXPIRED = 'expired';
    const FAILED = 'failed';
    const PENDING_SUBMISSION = 'pending_submission';
    const SUBMITTED = 'submitted';

    public static function getActiveStates(): array
    {
        return [
            self::ACTIVE,
            self::PENDING_SUBMISSION,
            self::SUBMITTED,
        ];
    }
}
