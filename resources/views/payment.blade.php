<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Оплата</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <h1 class="mt-5 mb-4">Оплата</h1>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="number">Номер карты</label>
                    <input type="text" class="form-control" id="number" placeholder="Введите номер карты">
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="yymm">Срок действия</label>
                        <input type="text" class="form-control" id="yymm" placeholder="MM/YY">
                    </div>
                    <div class="col">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" placeholder="CVV">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Имя владельца карты</label>
                    <input type="text" class="form-control" id="name" placeholder="Введите имя владельца карты">
                </div>
                <button type="submit" class="btn btn-dark">Оплатить</button>
                <a href="/" class="btn btn-dark">Назад</a>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
