<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Country App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/map.css') }}">

        
        

    </head>

    <body>
      
      <form action="{{ route('countries-insert') }}" method="post">
      @csrf
      <input type="text" name="name" placeholder="Name">
      <input type="text" name="pop" placeholder="Population">
      <input type="text" name="capital" placeholder="Capital">
      <input type="text" name="language" placeholder="Language">
      <button>Add Country</button>
    </form>

    <form action="{{ route('countries-delete') }}" method="post">
      @csrf
      <input type="text" name="name" placeholder="Country name">
      <button>Delete line</button>
    </form>

    <form action="{{ route('countries-update') }}" method="post">
      @csrf
      <input type="text" name="name" placeholder="Country name">
      <button>Update line</button>
    </form>

    <h1>Countries list</h1>
    <div class="countries">
      <div class="country">
        <p>Name</p>
        <p>Population</p>
        <p>Capital</p>
        <p>Main Language</p>
      </div>
      @foreach($countries as $country)
        <div class="country">
          <p>{{ $country->name }}</p>
          <p>{{ $country->population }}</p>
          <p>{{ $country->language}}</p>
          <p>{{ $country->capital }}</p>
        </div>
      @endforeach
    </div>

  </body>

</html>
