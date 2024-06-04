<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин бытовой техники</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Магазин бытовой техники</a>
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

<div class="container">
    <h1 class="mt-5 mb-4 text-center">Каталог</h1>

    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="/img/<?php echo e('холодильник.png'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Холодильник</h5>
                    <p class="card-text">Отличный способ сохранить свежесть продуктов</p>
                    <a href="/payment" class="btn btn-dark">Купить</a>
                    <a href="/info1" class="btn btn-dark">Подробнее</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="/img/<?php echo e('пылесос.png'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Пылесос</h5>
                    <p class="card-text">Поможет сохранить вашу жилплощадь в чистоте</p>
                    <a href="/payment" class="btn btn-dark">Купить</a>
                    <a href="/info2" class="btn btn-dark">Подробнее</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="/img/<?php echo e('стиральная машина.png'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Стиральная машина</h5>
                    <p class="card-text">Позволит вам сделать одежду чистой</p>
                    <a href="/payment" class="btn btn-dark">Купить</a>
                    <a href="/info3" class="btn btn-dark">Подробнее</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="/img/<?php echo e('микроволновка.png'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Микроволновая печь</h5>
                    <p class="card-text">Подарит возможность разогреть что-нибудь</p>
                    <a href="/payment" class="btn btn-dark">Купить</a>
                    <a href="/info4" class="btn btn-dark">Подробнее</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="/img/<?php echo e('мультиварка.png'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Мультиварка</h5>
                    <p class="card-text">Быстрый способ что-нибудь приготовить</p>
                    <a href="/payment" class="btn btn-dark">Купить</a>
                    <a href="/info5" class="btn btn-dark">Подробнее</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="/img/<?php echo e('телевизор.png'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Телевизор</h5>
                    <p class="card-text">Поможет скоротать вечер</p>
                    <a href="/payment" class="btn btn-dark">Купить</a>
                    <a href="/info6" class="btn btn-dark">Подробнее</a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <h1 class="mt-5 mb-4"></h1>
</div>

<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2024 Магазин бытовой техники. Все права защищены.</p>
            </div>
            
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH D:\OSPanel\domains\the_end\resources\views/list.blade.php ENDPATH**/ ?>