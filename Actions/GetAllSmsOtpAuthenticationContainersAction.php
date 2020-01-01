<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllSmsOtpAuthenticationContainersAction extends Action
{
    public function run(Request $request)
    {
        $smsotpauthenticationcontainers = Apiato::call('SmsOtpAuthenticationContainer@GetAllSmsOtpAuthenticationContainersTask', [], ['addRequestCriteria']);

        return $smsotpauthenticationcontainers;
    }
}
