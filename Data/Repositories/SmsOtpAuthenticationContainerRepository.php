<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SmsOtpAuthenticationContainerRepository
 */
class SmsOtpAuthenticationContainerRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
