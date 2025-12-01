<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School System</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.5/css/dataTables.dataTables.css" />

</head>

<body>
    <?php
    require_once("auth/usercheck.php");
    define("SECURE_ACCESS", true);
    require_once("config.php");
    ?>

    <!-- Header -->
    <header>
        <h1> School System</h1>
    </header>

    <!-- Layout container -->
    <div class="container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <ul>
                <li><a href="index.php?section=students&page=index"> Students</a></li>
                <li><a href="index.php?section=subjects&page=index"> Subjects</a></li>
                <li><a href="index.php?section=grades&page=index"> Grades</a></li>
                <li><a href="auth/logout.php">Logout</a></li>
            </ul>
        </aside>

        <!-- Main content area -->
        <main class="content">
            <?php

            if (isset($_GET["page"])) {
                $page = $_GET["page"];
            } else {
                $page = "index";
            }
            if (isset($_GET["section"])) {
                $section = $_GET["section"];
            } else {
                $section = "students";
            }

            $path = $section . "/" . $page . ".php";
            if (file_exists($path)) {
                include $path;
            } else {
                echo "404 Page not found!";
            }
            ?>


        </main>
    </div>

    <!-- Footer -->
    <footer>
        <p>© <?php echo date('Y'); ?> School Management System | Designed by Kirishan</p>
    </footer>
    <script src="//cdn.datatables.net/2.3.5/js/dataTables.min.js"></script>


</body>

</html>