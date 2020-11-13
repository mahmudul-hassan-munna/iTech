<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
	    <tr>
	      <td align="center">{{ $buyers['id'] }}</td>
	      <td>{{ $buyers['name'] }}</td>
	      <td align="center">{{ $buyers['total_diary_taken'] }}</td>
	      <td align="center">{{ $buyers['total_eraser_taken'] }}</td>
	      <td align="center">{{ $buyers['total_pen_taken'] }}</td>
	      <td align="center">{{ $buyers['total_item_taken'] }}</td>
	    </tr>
	    
	  </tbody>
	</table>
</body>
</html>