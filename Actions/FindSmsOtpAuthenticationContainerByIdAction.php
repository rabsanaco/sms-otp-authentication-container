<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSmsOtpAuthenticationContainerByIdAction extends Action
{
    public function run(Request $request)
    {
        $smsotpauthenticationcontainer = Apiato::call('SmsOtpAuthenticationContainer@FindSmsOtpAuthenticationContainerByIdTask', [$request->id]);

        return $smsotpauthenticationcontainer;
    }
}
