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

        //\Log::debug($response, ['response']);
    }


    public function testGetEvent6618()
    {
        /** @var EventSevice $service */
        $service = app(EventService::class);

        $response = $service->getEvent(6618);

        //\Log::debug($response, ['response']);
    }

    public function testPutEvent6621()
    {
        /** @var EventSevice $service */
        $service = app(EventService::class);

        $data = [
            'event_id' => 6621,
            'title' => 'Alvaro was Here',
            'project' => '',
            'date_start' => '2021-05-23T00:00:00+00:00',
            'date_end' => '2021-05-25T00:00:00+00:00',
            'url' => 'https://5b050f9a9577397036.momice.events',
            'user' => 'Momice Development',
            'status' => 'draft',
            'venues' => []
        ];


        $response = $service->putEvent(6621, $data);
        //\Log::debug($response, ['put response']);
    }
}
