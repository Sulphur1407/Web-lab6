<html>
<head>
    <title>test</title>
</head>
<body>
    @php
    $colors = ["red", "blue", "yellow"];
    @endphp

    @foreach($colors as $color)
        <p>{{ $color }}</p>
    @endforeach

    @for($i = 0; $i < 3; $i++)
        <p>{{ $colors[$i] }}</p>
    @endfor

    @if ($colors[1] = "blue")
        <p>Так, другий колір синій</p>
    @else
        <p>Ні, другий колір не синій</p>
    @endif
</body>
</html>
