<!doctype html>
<html>
<head>
    <title>Rishabh Bakery - <?php echo ucfirst(isset($_GET['page']) ? $_GET['page'] : "Home"); ?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
    <?php include "./navbar.php"; ?>

    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    switch ($page) {
        case 'about':
            include "about.php";
            break;
        case 'services':
            include "services.php";
            break;
        case 'products':
            include "products.php";
            break;
        case 'news':
            include "news.php";
            break;
        case 'contacts':
            include "contacts.php";
            break;
        case 'login':
            include "login.php";
            break;
        case 'curls':
            include "curls.php";
            break;
        default:
            include "home.php";
            break;
    }
    ?>

    <footer class="footer">
        <div class="container">
            <div class="credits">© 2024 Rishabh Bakery. All rights reserved.</div>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
