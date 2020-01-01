<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Tasks;

use App\Containers\SmsOtpAuthenticationContainer\Data\Repositories\SmsOtpAuthenticationContainerRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSmsOtpAuthenticationContainerTask extends Task
{

    protected $repository;

    public function __construct(SmsOtpAuthenticationContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
