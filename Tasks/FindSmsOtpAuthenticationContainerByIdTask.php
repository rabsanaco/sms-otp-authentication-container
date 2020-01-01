<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Tasks;

use App\Containers\SmsOtpAuthenticationContainer\Data\Repositories\SmsOtpAuthenticationContainerRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindSmsOtpAuthenticationContainerByIdTask extends Task
{

    protected $repository;

    public function __construct(SmsOtpAuthenticationContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
