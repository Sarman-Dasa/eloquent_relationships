<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Country Data</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th colspan="3">
                Country Data
            </th>
        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Show City</th>
        </tr>
        <tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->country_name}}</td>
                    <td><a href="{{ route('city.show', ['id'=>$item->id]) }}">Show</a></td>
                </tr>    
            @endforeach
        </tr>
    </table>
</body>
</html>