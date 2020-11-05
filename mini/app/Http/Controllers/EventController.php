<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EventController extends MomiceController
{
    public function show(int $id): View
    {
        $event = $this->eventService->getEvent($id);
        $invitees = $this->inviteService->getInvites($id);

        $data = [
            'event' => $event,
            'invitees' => $invitees
        ];

        return view("events.show", $data);
    }

    public function list(): View
    {
        $results = $this->eventService->getAllEvents();
        return view("events.list", ['records' => $results]);
    }
}
