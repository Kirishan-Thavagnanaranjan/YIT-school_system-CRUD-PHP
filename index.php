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
    require_once("./auth/usercheck.php");
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
                <li><a href="students/index.php" target="iframe_a"> Students</a></li>
                <li><a href="subjects/index.php" target="iframe_a"> Subjects</a></li>
                <li><a href="grades/index.php" target="iframe_a"> Grades</a></li>
            </ul>
        </aside>

        <!-- Main content area -->
        <main class="content">
            <a href="./auth/logout.php">Logout<button></button></a>
            <iframe src="students/index.php" name="iframe_a" height="500px" width="120%" title="Iframe Example"></iframe>
        </main>
    </div>

    <!-- Footer -->
    <footer>
        <p>© <?php echo date('Y'); ?> School Management System | Designed by Kirishan</p>
    </footer>

</body>

</html>