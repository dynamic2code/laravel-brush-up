<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div>
        <form action="{{ route('store.person') }}" method="post">
            @csrf
            <input type="text" name="first_name" id="">
            <input type="text" name="last_name" id="">
            <input type="text" name="profession" id="">
            <button type="submit">Send</button>
        </form>
    </div>

    <div>
    <h1>People List</h1>

        @if(count($people) > 0)
            <ul>
                @foreach($people as $person)
                    <li>
                        {{ $person->first_name }} {{ $person->last_name }} - {{ $person->profession }}
                    </li>
                @endforeach
            </ul>
        @else
            <p>No people found.</p>
        @endif
    </div>
</body>
</html>