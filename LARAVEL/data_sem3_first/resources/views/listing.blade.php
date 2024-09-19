<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User listing page</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        @foreach($users as $key => $user) // Loop through the users array
        <tr>
            <td>{{$user -> name}}</td> // Display the name of the user
            <td>{{$user -> email}}</td>
            <td>{{$user -> password}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>