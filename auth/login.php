<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Log in</title>
    <style>
        :root {
            --card-bg: #ffffff;
            --page-bg-1: #eef2ff;
            --page-bg-2: #f8fafc;
            --accent: #0d6efd
        }

        body {
            background: linear-gradient(180deg, var(--page-bg-1), var(--page-bg-2));
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #1f2937
        }

        .card {
            max-width: 420px;
            border-radius: 12px;
            overflow: hidden;
        }
        .logo-wrap{
            width: 72px;
            height: 72px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: linear-gradient(180deg, #ffffff, #f1f5f9);
            box-shadow: 0 6px 18px rgba(15, 23, 42, .06)

        }
        .system{
            font-weight: 700;
            letter-spacing: 0.2rem;
            color: var(--accent);
        }
    </style>
</head>

<body>
    <div class="container  mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card shadow">
                    <div class="card-body border-0  ">
                        <div class="logo-wrap">
                            <svg class="mx-auto text-center" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                        </div>
                        <div class="system">School system</div>
                        <h5 class="mb-5">Sign in your account</h5>
                        <form action="islogin.php" method="post">
                        <div class="mt-5">
                            <label for="user_name" class="form-label">User Name</label>
                            <input type="text" class="form-control my-3 py-2" name="user_name" id="user_name">
                        </div>
                        <div class="mt-5">
                            <label for="password">Password</label>
                            <input type="password" class="form-control my-3 py-2" name="password" id="password">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary" value="Log in">
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>