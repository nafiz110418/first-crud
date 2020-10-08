<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="info.css" type="text/css">
<body>
<button><a href="/employee/create">Add Employee</a></button>
<br><br>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Email</th>
        <th>Salary</th>
        <th>Created_At</th>
        <th>Updated_At</th>
        <th colspan="2">Action</th>
    </tr>

    @foreach($dpt as $key=>$data)

        <tr>
            <td>{{++$key}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->designation}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->salary}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
            <td><button><a onclick="return confirm('Are you sure about delete this data')" href="/employee/delete/{{$data->id}}">Delete</a></button></td>
            <td><button><a href="/employee/{{$data->id}}/edit">Edit</a></button></td>

        </tr>
    @endforeach
</table>
</body>
</html>
