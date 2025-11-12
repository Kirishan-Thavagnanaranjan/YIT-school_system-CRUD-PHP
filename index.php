<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once("auth/usercheck.php");
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

</body>

</html>