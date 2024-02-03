<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <form action="index.php" method="post">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" placeholder="Enter your name" class="form-control" name="name" autocapitalize="none">
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" placeholder="Enter your email" class="form-control" name="email">
            </div>
            <div class="form-group mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text"  placeholder="Enter your phone number" class="form-control" name="phone">
            </div>
            <div class="form-group mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password"   placeholder="Enter your password" class="form-control" name="password">
            </div>
            <!-- <input type="submit" class="btn btn-primary" name="submit" value="Submit"> -->

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>

