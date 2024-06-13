<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Networks</title>
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
        <h1>Enter Host Requirements for Each Network</h1>
        <h2>Input jumlah host dari yang paling banyak</h2>
        <form action="/calculate" method="post">
            <input type="hidden" name="ip" value="<?= esc($ip) ?>"> <!-- Gunakan variabel $ip dari controller -->
            <?php for ($i = 0; $i < $number_of_networks; $i++) : ?>
                <div class="form-group">
                    <label for="hosts">Hosts for Network <?= $i + 1 ?></label>
                    <input type="number" name="hosts[]" class="form-control" required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </div>
</body>

</html>