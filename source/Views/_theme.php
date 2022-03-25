<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= url('/public/assets/css/style.css')  ?>">
</head>
<body>
    <header>
        <nav>
            <a href="<?= url('') ?>" class="logo"><img src="<?= url('/public/assets/img/88585385.png') ?>"></a>

            <ul>
                <li><a href="<?= url('') ?>">Home</a></li>
                <li><a href="<?= url('/importar') ?>">Importar  </a></li>
            </ul>
        </nav>
    </header>
    <main>
       <?= $v->section('content'); ?>
    </main>   



    

    <script>
        <?= $v->section('scripts'); ?>
      
    </script>
</body>
</html>