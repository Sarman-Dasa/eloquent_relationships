<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
    <table class="table">
        <tr>
            <th colspan="3">
                cities Data
            </th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>latitude</th>
            <th>longitude</th>
            <th>Country_id</th>
            <th>Country Name</th>
        </tr>
        <tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->city_name}}</td>
                    <th>{{$item->lat}}</th>
                    <th>{{$item->long}}</th>
                    <th>{{$item->country_id}}</th>
                    {{-- @isset($item['country']->country_name)
                      <td>  {{$item['country']->country_name}}</td>
                    @endisset --}}
                    @isset($item->country_name)
                        <td>{{$item->country_name}}</td>
                    @endisset
                </tr>    
            @endforeach
        </tr>
    </table>
        <div class="d-flex">
        {!! $data->links() !!}
    </div>
   </div>
</body>
</html>