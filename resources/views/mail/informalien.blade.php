<!DOCTYPE html>
<html>
<head>
	<title>Alien Submission Confirmation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			color: #333;
			background-color: #f4f4f4;
			padding: 0;
			margin: 0;
		}

		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 2px 6px rgba(0,0,0,.1);
			border-radius: 4px;
		}

		h1 {
			font-size: 28px;
			font-weight: 600;
			margin-top: 0;
		}

		p {
			margin-top: 0;
			margin-bottom: 20px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 20px;
		}

		table td, table th {
			padding: 10px;
			border: 1px solid #ccc;
			text-align: left;
		}

		table th {
			background-color: #f4f4f4;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Alien Submission Confirmation</h1>
		<p>Thank you for submitting your alien.</p>
		<table>
			<tr>
				<th>Name:</th>
				<td>{{ $alien['name'] }}</td>
			</tr>
			<tr>
				<th>Email:</th>
				<td>{{ $alien['email'] }}</td>
			</tr>
			<tr>
				<th>Message:</th>
				<td>{{ $alien['message'] }}</td>
			</tr>
			<tr>
				<th>Location:</th>
				<td>{{ $alien['location'] }}</td>
			</tr>
			<tr>
				<th>Country:</th>
				<td>{{ $alien['country_id'] }}</td>
			</tr>
			<tr>
				<th>Date:</th>
				<td>{{ $alien['date'] }}</td>
			</tr>
			<tr>
				<th>Time:</th>
				<td>{{ $alien['time'] }}</td>
			</tr>
			<tr>
				<th>Approved:</th>
				<td>{{ $alien['approved'] == '0' ? 'No' : 'Yes' }}</td>
			</tr>
		</table>
		<p>If you have any questions or concerns, please don't hesitate to contact us.</p>
	</div>
</body>
</html>
