<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9f7ff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: white;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            display: flex;
        }

        .login-image {
            background-color: #e95c43;
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
        }

        .login-image img {
            max-width: 80%;
        }

        .login-form {
            padding: 30px;
            flex: 1;
        }

        .login-form h2 {
            margin-bottom: 20px;
            font-weight: bold;
        }

        .login-form .btn-primary {
            width: 100%;
        }

        .login-form .google-login {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .google-login img {
            width: 20px;
            margin-right: 10px;
        }

        .login-form .register-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>