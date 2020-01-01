<?php

namespace App\Containers\SmsOtpAuthenticationContainer\UI\API\Transformers;

use App\Containers\SmsOtpAuthenticationContainer\Models\SmsOtpAuthenticationContainer;
use App\Ship\Parents\Transformers\Transformer;

class SmsOtpAuthenticationContainerTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param SmsOtpAuthenticationContainer $entity
     *
     * @return array
     */
    public function transform(SmsOtpAuthenticationContainer $entity)
    {
        $response = [
            'object' => 'SmsOtpAuthenticationContainer',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
