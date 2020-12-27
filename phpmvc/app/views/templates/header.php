<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <title>Halaman <?= $data['title']; ?></title>
 <link rel="stylesheet" href="http://localhost/PW20201_192101017/phpmvc/public/css/bootstrap.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container">
 <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" ariaexpanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
 <div class="navbar-nav">
 <a class="nav-link active" href="<?= BASEURL; ?>">Home <span class="sronly">(current)</span></a>
 <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
 <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
 </div>
 </div>
 </div>
 </nav>

