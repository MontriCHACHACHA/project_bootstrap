<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Modal</title>
</head>

<body>
    <!-- Modal  register-->
    <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="registerForm" action="register.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="password">
                            <label for="password">Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--modal login  -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="LoginModalLabel">Login</h5>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="LoginForm" action="login.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="password">
                            <label for="password">Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>

</html>