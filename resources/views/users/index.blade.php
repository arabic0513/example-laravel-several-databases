<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Pagination Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <p class="text-center fs-2">Users on Database "one"</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($one as $data1)
            <tr>
                <th scope="row">{{ $data1->id }}</th>
                <td>{{ $data1->name }}</td>
                <td>{{ $data1->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="container mt-5">
    <p class="text-center fs-2">Users on Database "two"</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($two as $data2)
            <tr>
                <th scope="row">{{ $data2->id }}</th>
                <td>{{ $data2->name }}</td>
                <td>{{ $data2->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
