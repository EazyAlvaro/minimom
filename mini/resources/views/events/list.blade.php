
@foreach ($records as $record)
    <a href='/event/{{ $record['event_id'] }}'>
    <h3>{{ $record['title'] }}</h3>
    </a>
    Project: {{ $record['project'] ?? 'None' }}<br>
    Opens: {{ $record['date_start'] }}<br>
    Closes: {{ $record['date_end'] }}<br>
    Organizer: {{ $record['user'] ?? 'Undisclosed'}}<br>
    Website: {{ $record['url']}}
@endforeach


<?php
//dump($records);
?>


