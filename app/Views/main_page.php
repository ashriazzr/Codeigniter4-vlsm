<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
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
        <h1>Hello, <?= $name ?>!</h1>
        <form action="/inputNetworks" method="post">
            <div class="form-group">
                <label for="number_of_networks">Enter Number of Networks</label>
                <input type="number" name="number_of_networks" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ip">Enter IP Address</label>
                <input type="text" name="ip" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </div>
</body>

</html>