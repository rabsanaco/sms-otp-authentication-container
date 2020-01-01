<?php

namespace App\Containers\SmsOtpAuthenticationContainer\UI\API\Controllers;

use App\Containers\SmsOtpAuthenticationContainer\UI\API\Requests\CreateSmsOtpAuthenticationContainerRequest;
use App\Containers\SmsOtpAuthenticationContainer\UI\API\Requests\DeleteSmsOtpAuthenticationContainerRequest;
use App\Containers\SmsOtpAuthenticationContainer\UI\API\Requests\GetAllSmsOtpAuthenticationContainersRequest;
use App\Containers\SmsOtpAuthenticationContainer\UI\API\Requests\FindSmsOtpAuthenticationContainerByIdRequest;
use App\Containers\SmsOtpAuthenticationContainer\UI\API\Requests\UpdateSmsOtpAuthenticationContainerRequest;
use App\Containers\SmsOtpAuthenticationContainer\UI\API\Transformers\SmsOtpAuthenticationContainerTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\SmsOtpAuthenticationContainer\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateSmsOtpAuthenticationContainerRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSmsOtpAuthenticationContainer(CreateSmsOtpAuthenticationContainerRequest $request)
    {
        $smsotpauthenticationcontainer = Apiato::call('SmsOtpAuthenticationContainer@CreateSmsOtpAuthenticationContainerAction', [$request]);

        return $this->created($this->transform($smsotpauthenticationcontainer, SmsOtpAuthenticationContainerTransformer::class));
    }

    /**
     * @param FindSmsOtpAuthenticationContainerByIdRequest $request
     * @return array
     */
    public function findSmsOtpAuthenticationContainerById(FindSmsOtpAuthenticationContainerByIdRequest $request)
    {
        $smsotpauthenticationcontainer = Apiato::call('SmsOtpAuthenticationContainer@FindSmsOtpAuthenticationContainerByIdAction', [$request]);

        return $this->transform($smsotpauthenticationcontainer, SmsOtpAuthenticationContainerTransformer::class);
    }

    /**
     * @param GetAllSmsOtpAuthenticationContainersRequest $request
     * @return array
     */
    public function getAllSmsOtpAuthenticationContainers(GetAllSmsOtpAuthenticationContainersRequest $request)
    {
        $smsotpauthenticationcontainers = Apiato::call('SmsOtpAuthenticationContainer@GetAllSmsOtpAuthenticationContainersAction', [$request]);

        return $this->transform($smsotpauthenticationcontainers, SmsOtpAuthenticationContainerTransformer::class);
    }

    /**
     * @param UpdateSmsOtpAuthenticationContainerRequest $request
     * @return array
     */
    public function updateSmsOtpAuthenticationContainer(UpdateSmsOtpAuthenticationContainerRequest $request)
    {
        $smsotpauthenticationcontainer = Apiato::call('SmsOtpAuthenticationContainer@UpdateSmsOtpAuthenticationContainerAction', [$request]);

        return $this->transform($smsotpauthenticationcontainer, SmsOtpAuthenticationContainerTransformer::class);
    }

    /**
     * @param DeleteSmsOtpAuthenticationContainerRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSmsOtpAuthenticationContainer(DeleteSmsOtpAuthenticationContainerRequest $request)
    {
        Apiato::call('SmsOtpAuthenticationContainer@DeleteSmsOtpAuthenticationContainerAction', [$request]);

        return $this->noContent();
    }
}
