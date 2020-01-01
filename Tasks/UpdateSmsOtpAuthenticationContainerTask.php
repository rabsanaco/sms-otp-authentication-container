<?php

namespace App\Containers\SmsOtpAuthenticationContainer\Tasks;

use App\Containers\SmsOtpAuthenticationContainer\Data\Repositories\SmsOtpAuthenticationContainerRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateSmsOtpAuthenticationContainerTask extends Task
{

    protected $repository;

    public function __construct(SmsOtpAuthenticationContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
