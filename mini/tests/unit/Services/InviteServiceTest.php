<?php

namespace App\Services;

use Codeception\Test\Unit;
use App\Services\InviteService;


class InviteServiceTest extends Unit
{

    public function testGetInvites()
    {
        $service  = app(InviteService::class);

        //$response = $service->getInvites(6188);
        $response = $service->getInvites(6675);

        \Log::debug($response, ['invites GET']);

    }


    public function testPutInvites()
    {
        #Arrange
        $service  = app(InviteService::class);

        $data = [
            [
                'invite_id' => 1307,
                'infix' => '',
                'firstname' => 'Alvaro',
                'lastname' => 'Was Here',
                'email' => 'alvaro@momice.nl',
                'company' => 'momice',
                'function' => 'developer',
                'identifier' => 'uniqueid?'
            ]
        ];

        # Act
        $service->putInvites(6675, $data);
        $response = $service->getInvites(6675);

        # Assert
        $this->assertEquals('Alvaro', $response[0]['firstname']);
        $this->assertEquals('Was Here', $response[0]['lastname']);
    }
}
