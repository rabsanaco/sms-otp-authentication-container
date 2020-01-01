<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Tasks;

use App\Containers\SmsOtpAuthenticationContainer\Data\Repositories\SmsOtpAuthenticationContainerRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSmsOtpAuthenticationContainersTask extends Task
{

    protected $repository;

    public function __construct(SmsOtpAuthenticationContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
