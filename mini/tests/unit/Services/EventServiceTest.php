<?php

namespace App\Services;

use Codeception\Test\Unit;
use App\Interfaces\EventInterface;
use App\Services\EventService;

class EventsServiceTest extends Unit
{
    public function testGetAllEvents()
    {
        /** @var EventSevice $service */
        $service = app(EventService::class);

        $response = $service->getAllEvents();
    }


    public function testEvent6618()
    {
        /** @var EventSevice $service */
        $service = app(EventService::class);

        $response = $service->getEvent(6618);

        \Log::debug($response, ['response']);
    }
}