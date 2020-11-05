@extends('app')

@section('content')
@if (array_key_exists('title', $event ))

    <div class="card">
        <div class="card-body">
            <h2>{{ $event['title'] }}</h2>
            </a    Project: {{ $event['project'] ?? 'None' }}<br>
            Opens: {{ $event['date_start'] }}<br>
            Closes: {{ $event['date_end'] }}<br>
            Organizer: {{ $event['user'] ?? 'Undisclosed'}}<br>
            Website: {{ $event['url']}}
            <br>
            <br>
            <h2>Invitations:</h2>
        </div>
    </div>

    @foreach ($invitees as $invite)
    <div class="card">
        <div class="card-body">
            <a href='/event/{{ $event['event_id'] }}/invite/{{ $invite['invite_id']}}/edit'>
                <h3 class="card-title">{{ $invite['firstname'] }} {{ $invite['infix'] }} {{ $invite['lastname'] }}</h3>
            </a>
            Registration id: {{ $invite['invite_id'] }}<br>
            Confirmation Code: {{ $invite['hash'] }}<br>
            Email: {{ $invite['email']}}
        </div>
    </div>
    <br>
    @endforeach
@else
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">OH NOES!</h1>
            It looks like you don't have permission to view this page. How embarassing
        </div>
    </div>
@endif
@endsection