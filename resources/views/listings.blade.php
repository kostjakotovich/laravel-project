<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listings</title>
</head>
<body>
    @if(count($listings) == 0)
        <p>No listings found</p>
    @endif

    <p>Listings</p>
    <h1>{{$heading}}</h1>
    @foreach($listings as $listing)
        <div>
            <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
            <p>{{$listing['description']}}</p>
        </div>
    @endforeach
</body>
</html>