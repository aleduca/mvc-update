<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <h2>Curso de MVC</h2>

    <?php require $controller->view; ?>
</body>
</html>