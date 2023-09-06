<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" /> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


    <title>Login</title>
</head>
<body>
    <div class="container-fluid mt-5">
        <header>
            <div class="row">
                <h1 style="font-size: 37px; font-family: 'Poppins';">Welcome to <br></h1>
                <img src="bootstrap/img/1.png" alt="logo" class="img-fluid rounded float-start" style="height: 75px; width: 180px;">
            </div>
        </header>
    </div>
    <main>
        <div class="container-fluid mt-5">
            <div class="row fw-semibold">
                <h2>Login</h2>
                <p>This will help to keep your account safe </p>
                <br><br><br><br>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                </div>
                <br><br>
                <div class="form-group">
                    <div class="password-input-container">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        <span class="toggle-password" id="togglePassword">
                            <i class="bi bi-eye-slash"></i>
                        </span>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-primary w-100" >Login</button>
                    <br><br>
                </div>                
                <div class="container">
                    <div class="row">
                        <br><br>
                      <a href="register.php" class="link-dark pt-2 text-center">Don't have an account?</a>
                      <a href="register.php" class="link-dark pt-2 text-center">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const togglePassword = document
            .querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
            password.setAttribute('type', type);
            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script> 
</body>
</html>