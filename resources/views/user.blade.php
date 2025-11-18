<!DOCTYPE html>
<html lang="en">
<head>
    <table class="table" border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Lastname</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>    {   {$user->Id}}</td>
                <td>    {   {$user->name}}</td>
                <td>    {   {$user->Lastname}}</td>
            </tr>

        @endforeach
    </table>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>