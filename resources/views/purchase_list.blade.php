<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Buyer Id</th>
        <th>Buyer Name</th>
        <th>Total Diary Taken</th>
        <th>Total Pen Taken</th>
        <th>Total Eraser Taken</th>
        <th>Total items Taken</th>
    </tr>
    </thead>
    <tbody>
    @foreach($buyers as $key=>$buyer)
        <tr>
            <td align="center">{{ $buyer['id'] }}</td>
            <td>{{ $buyer['name'] }}</td>
            <td align="center">{{ $buyer['total_diary_taken'] }}</td>
            <td align="center">{{ $buyer['total_eraser_taken'] }}</td>
            <td align="center">{{ $buyer['total_pen_taken'] }}</td>
            <td align="center">{{ $buyer['total_item_taken'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
