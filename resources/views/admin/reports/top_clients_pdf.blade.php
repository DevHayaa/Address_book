
<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Clients</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Top 10 Clients</h2>
    <table>
        <thead>
        <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Total Spent</th>
            </tr>
        </thead>
        <tbody>
            @foreach($topClients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ number_format($client->total_spent, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

