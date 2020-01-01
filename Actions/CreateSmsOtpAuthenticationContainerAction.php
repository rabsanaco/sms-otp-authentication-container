<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateSmsOtpAuthenticationContainerAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $smsotpauthenticationcontainer = Apiato::call('SmsOtpAuthenticationContainer@CreateSmsOtpAuthenticationContainerTask', [$data]);

        return $smsotpauthenticationcontainer;
    }
}
