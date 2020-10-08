
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<link rel="stylesheet" href="{{asset('info.css')}}" type="text/css"/>
<body>

<form method="POST" action="/employee">
    {{csrf_field()}}
    <label for="name"><b>Name</b></label>
    <input type="text" name ="name" placeholder="employee name" style="margin: 20px" ><br>
    <label for="name"><b>Designation</b></label>
    <input type="text" name ="designation" placeholder="employee designation" style="margin: 20px"><br>
    <label for="name"><b>Email</b></label>
    <input type="text" name ="email" placeholder="Email@abc.com"style="margin: 20px"><br>
    <label for="name"><b>Salary</b></label>
    <input type="text" name ="salary" placeholder="Salary"style="margin: 20px"><br>

    <input type="submit" name ="submit" value="submit" onclick="return confirm('Are your sure to submit this data')">
</form>

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
