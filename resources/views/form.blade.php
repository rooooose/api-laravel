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
      
      <h1>Database Editor</h1>

      <form action="{{ route('countries-insert') }}" method="post">
      @csrf
      <input type="text" name="name" placeholder="Country Name">
      <input type="text" name="president" placeholder="President Name">
      <button>Add Country</button>
    </form>

    <form action="{{ route('countries-delete') }}" method="post">
      @csrf
      <input type="text" name="name" placeholder="Country name">
      <button>Delete line</button>
    </form>

    <form action="{{ route('countries-update') }}" method="post">
      @csrf

      <h2>Choose a column to change</h2>
      <div>
        <input type="radio" id="country" name="checkbox" value="country">
        <label for="country_name">Country</label>
      </div>

      <div>
        <input type="radio" id="president" name="checkbox" value="president">
        <label for="president">President</label>
      </div>

      <label for="original_name"> Change : </label>
      <input type="text" name="original_name" id="original_name" placeholder="Name">

      <label for="new_name"> to : </label>
      <input type="text" name="new_name" id="new_name" placeholder="Name">
      <button>Update line</button>
    </form>

    <h1>Countries list</h1>
    <div class="countries">
      <div class="country">
        <p>Name</p>
        <p>President</p>
      </div>
      @foreach($countries as $country)
        <div class="country">
          <p>{{ $country->name }}</p>
          <p>{{ $country->president }}</p>
        </div>
      @endforeach
    </div>

  </body>

</html>
