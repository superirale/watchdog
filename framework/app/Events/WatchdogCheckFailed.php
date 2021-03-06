<?php

namespace App\Events;

use App\Service;
use App\Service\CheckerInterface;

class WatchdogCheckFailed
{
    /**
     * Response checker instance.
     *
     * @var CheckerInterface
     */
    public $response;

    /**
     * Service model instance.
     *
     * @var Service
     */
    public $service;

    /**
     * Create a new event instance.
     *
     * @param  Service $service
     * @param  CheckerInterface $response
     * @return void
     */
    public function __construct(Service $service, CheckerInterface $response)
    {
        $this->service  = $service;

        $this->response = $response;
    }
}
