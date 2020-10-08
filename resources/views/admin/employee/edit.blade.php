
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<link rel="stylesheet" href="{{asset('info.css')}}" type="text/css"/>
<body>
<button><a href="/employees">View Employee List</a></button>
<br><br>
<form method="POST" action="/employees/{{$data->id}}">
    {{csrf_field()}}
    <label for="name"><b>Name</b></label>
    <input type="text" name ="name" placeholder="employee name" value="{{$data->name}}" style="margin: 20px" ><br>
    <label for="name"><b>Designation</b></label>
    <input type="text" name ="designation" placeholder="employee designation" value="{{$data->designation}}"style="margin: 20px"><br>
    <label for="name"><b>Email</b></label>
    <input type="text" name ="email" placeholder="Email@abc.com"value="{{$data->email}}" style="margin: 20px"><br>
    <label for="name"><b>Salary</b></label>
    <input type="text" name ="salary" placeholder="Salary"value="{{$data->salary}}" style="margin: 20px"><br>

    <button><input type="submit" name ="submit" value="Update" onclick="return confirm('Are your sure to update this data')"></button>
</form>
</body>
</html>
