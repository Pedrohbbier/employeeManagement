<!DOCTYPE html>
<html>
<head>
    <title>Work Schedule</title>
</head>
<body>
    <h1>Work Schedule</h1>
    <ul>
        @foreach ($schedule as $time)
            <li>{{ $time }}</li>
        @endforeach
    </ul>
</body>
</html>
