
<h1>{{ $event['title'] }}</h1>
</a    Project: {{ $event['project'] ?? 'None' }}<br>
Opens: {{ $event['date_start'] }}<br>
Closes: {{ $event['date_end'] }}<br>
Organizer: {{ $event['user'] ?? 'Undisclosed'}}<br>
Website: {{ $event['url']}}

<hr>

@foreach ($invitees as $invite)
    <a href='/invite/{{ $invite['invite_id']}}/edit'>
    <h3>{{ $invite['firstname'] }} {{ $invite['infix'] }} {{ $invite['lastname'] }}</h3>
    </a>
    Registration id: {{ $invite['invite_id'] }}<br>
    Confirmation Code: {{ $invite['hash'] }}<br>
    Email: {{ $invite['email']}}
@endforeach