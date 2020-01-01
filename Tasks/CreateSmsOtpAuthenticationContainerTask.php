<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Tasks;

use App\Containers\SmsOtpAuthenticationContainer\Data\Repositories\SmsOtpAuthenticationContainerRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSmsOtpAuthenticationContainerTask extends Task
{

    protected $repository;

    public function __construct(SmsOtpAuthenticationContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
