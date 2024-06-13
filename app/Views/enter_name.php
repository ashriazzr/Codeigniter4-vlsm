<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Name</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3e5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mb-4">Welcome! Please Enter Your Name</h1>
        <form action="/mainPage" method="post">
            <input type="text" name="name" class="form-control mb-3" placeholder="Enter your name">
            <button type="submit" class="btn btn-primary">Next</button>
        </form>
    </div>
</body>

</html>