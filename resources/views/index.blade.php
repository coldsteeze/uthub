<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">
</head>
<body>
    <div class="navbar">
        <div>
            <img src="{{asset('public/images/logo.svg')}}"> 
        </div>
        <nav>
            <ul class="nav-list"> 
                <li><a href="#">О нас</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Цены</a></li>
                <li><a href="#">Мастера</a></li>
                <li><a href="#">Галерея</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </nav>
    </div>
	 <div class="masters-section">
		<h1>МАСТЕРА НАШЕГО БАРБЕРШОПА</h1>
		<p>Выберите мастера для записи</p>
	 </div>
    <div class="card-container">
        <div class="card"> 
            <img src="{{asset('public/images/1.jpg')}}" alt="Даша" class="profile-pic">
            <h2>Даша</h2>
            <div class="rating">
                <span>⭐⭐⭐⭐⭐</span>
                <span>(4.75/1881)</span>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('public/images/2.jpg')}}" alt="Никита" class="profile-pic">
            <h2>Никита</h2>
            <div class="rating">
                <span>⭐⭐⭐⭐</span>
                <span>(3.82/2228)</span>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('public/images/3.jpg')}}" alt="Михаил" class="profile-pic">
            <h2>Михаил</h2>
            <div class="rating">
                <span>⭐⭐⭐⭐⭐</span>
                <span>(4.82/2004)</span>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
