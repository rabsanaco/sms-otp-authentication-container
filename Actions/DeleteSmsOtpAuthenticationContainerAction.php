<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSmsOtpAuthenticationContainerAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('SmsOtpAuthenticationContainer@DeleteSmsOtpAuthenticationContainerTask', [$request->id]);
    }
}
