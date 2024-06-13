<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3e5f5;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>VLSM Calculation Result</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Prefix</th>
                    <th>Available Hosts</th>
                    <th>Network IP</th>
                    <th>First Host</th>
                    <th>Last Host</th>
                    <th>Broadcast IP</th>
                    <th>Wildcard Mask</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result): ?>
                    <tr>
                        <td><?= $result['prefix'] ?></td>
                        <td><?= $result['available_hosts'] ?></td>
                        <td><?= $result['network_ip'] ?></td>
                        <td><?= $result['first_host'] ?></td>
                        <td><?= $result['last_host'] ?></td>
                        <td><?= $result['broadcast_ip'] ?></td>
                        <td><?= $result['wildcard'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
