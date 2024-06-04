<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }

        .container2{
            padding-top: 306px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Магазин бытовой техники</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/list">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Пылесос</h1>
        <p>Поможет сохранить вашу жилплощадь в чистоте</p>
        
        <div class="row">
            <div class="col-md-6">
                <img src="/img/<?php echo e('пылесос.png'); ?>" class="img-fluid" alt="Изображение">
            </div>
            <div class="col-md-6">
                <p>Тип устройства ........................................................</p>
                <p>Мощность всасывания ........................................</p>
                <p>Фильтрация ...............................................................</p>
                <p>Емкость пылесборника ........................................</p>
                <p>Тип фильтра ...............................................................</p>
                <p>Длина шнура и радиус действия .....................</p>
                <p>Уровень шума ............................................................</p>
                <p>Дополнительные насадки и аксессуары .......</p>
            </div>
        </div>
    </div>

    <div class="container2">
        <h1 class="mt-5 mb-4"> </h1>
    </div>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Магазин бытовой техники. Все права защищены.</p>
                </div>
                
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\OSPanel\domains\the_end\resources\views//info2.blade.php ENDPATH**/ ?>