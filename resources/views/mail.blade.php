<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <table class="table border broder-dark border-3">
        <thead>
            <tr>
         <th>Name</th> <td>{{ $data['name'] }}</td></tr>
            <tr>
         <th>Subject</th> <td>{{ $data['subject'] }}</td></tr>
            <tr>
         <th>Message</th> <td>{{ $data['message'] }}</td></tr>

            </thead>
      </table>
</body>
</html>
