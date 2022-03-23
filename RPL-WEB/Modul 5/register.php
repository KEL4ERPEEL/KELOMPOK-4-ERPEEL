<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .regis-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }

        .regis-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .regis-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="regis-form">

        <form action="simpan-user.php" method="post" id="register">
            <h2 class="text-center">Register</h2>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required" id="username">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required" id="password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn regis-button btn-primary btn-block">Register</button>
            </div>
            <div class="form-group">
                <a href="index.php" class="btn btn-secondary btn-block" role="button">Login</a>
            </div>
            <div class="form-group">
                <p class="text-pesan text-center" id="text-pesan">

                </p>
            </div>
        </form>

    </div>


    <script>
        $("#register").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr("action"),
                data: $(this).serialize(),
                success: function(response) {
                    $("#text-pesan").html(response);
                }
            });
        });
    </script>
</body>

</html>