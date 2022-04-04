<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

</head>

<body>
    @include('commons.navbar')

    <div class="card" style="width:600px; margin:auto;">
        <div class="card-header">Register</div>
        <div class="card-body" style="text-align:center">
            <form method="POST" action="" style="display: inline;">
                @csrf
                <label for="name" style="width:150px; text-align:right;">Name</label>
                <input type="text" name="name" size="30"><br>
                <label for="email" style="width:150px; text-align:right;">E-Mail Address</label>
                <input type="email" name="email" size="30"><br>
                <label for="password" style="width:150px; text-align:right;">Password</label>
                <input type="password" name="password" size="30"><br>
                <label for="password" style="width:150px; text-align:right;">Comfirm Password</label>
                <input type="password" name="confirmPassword" size="30"><br>
                <input type="submit" value="Register" class="btn btn-primary" style="margin-left:-25px;">
            </form>
        </div>
    </div>
</body>

</html>