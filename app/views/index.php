<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title><?php echo $title ?></title>
</head>
<body>
<div class="container">

    <section style="display: flex;justify-content: space-between;">
        <ul style="list-style: none;display:flex;justify-content: space-between;">
            <li><a href="/">Home</a></li>
            <li><a href="/login">Login</a></li>
        </ul>

        <div>
            Bem vindo <?php echo welcome('user');  ?>
        </div>
    </section>

    <?php require $this->controller->view; ?>
</div>
</body>
</html>