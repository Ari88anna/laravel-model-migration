<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Destinations</h1>

    <ul>
        @foreach ($holidays as $holiday)

            <li>
                <h4>{{ $holiday->destination }}</h4>
                <div>Duration of the trip: {{ $holiday->days }} days</div>                
                <div>Price: {{ $holiday->amount }}</div>
                <div>Description: {{ $holiday->description }} days</div>

            </li>
            
        @endforeach
    </ul>

</body>
</html>