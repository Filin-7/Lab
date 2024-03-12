<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Офіційний сайт Audi: Інноваційна технологія автомобілів</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222; /* змінили колір фону на темний */
            color: #ddd; /* змінили колір тексту на світлий */
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #111; /* змінили колір фону заголовка на темний */
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        section {
            padding: 20px;
        }
        .car-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }
        .car-info .car {
            flex-basis: 45%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #888; /* змінили колір меж на темний */
            border-radius: 5px;
            background-color: #333; /* змінили колір фону блоку з інформацією про автомобілі */
        }
        footer {
            background-color: #111; /* змінили колір фону футера на темний */
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        @media only screen and (max-width: 600px) {
            nav ul li {
                display: block;
                margin: 10px 0;
            }
            .car-info .car {
                flex-basis: 100%;
            }
            footer {
                position: static;
            }
        }
    </style>
</head>
<body>
<header>
    <h1>Ласкаво просимо на офіційний сайт Audi</h1>
    <nav>
        <ul>
            <li><a href="#about">Про нас</a></li>
            <li><a href="#models">Моделі</a></li>
            <li><a href="#technology">Технології</a></li>
            <li><a href="#contact">Контакти</a></li>
        </ul>
    </nav>
</header>

<section id="about">
    <h2>Про нас</h2>
    <p>Вітання від Audi! Ми - бренд автомобілів, який завжди ставить інновації та якість на перше місце. Наша місія - створювати автомобілі, які не просто задовольняють очі, але і викликають захоплення своїм дизайном та технологіями.</p>
</section>

<section id="models">
    <h2>Моделі</h2>
    <div class="car-info">
        <div class="car">
            <h3>Audi RS 5</h3>
            <p>Спортивний купе з потужним двигуном і спортивною підвіскою. RS 5 відомий своєю високою швидкістю та динамікою.</p>
            <img src="audi_rs5.jpg" alt="Audi RS 5">
        </div>
        <div class="car">
            <h3>Audi RS 6</h3>
            <p>Практичний седан з високою продуктивністю. RS 6 поєднує спортивні характеристики з комфортом і практичністю.</p>
            <img src="audi_rs6.jpg" alt="Audi RS 6">
        </div>
        <div class="car">
            <h3>Audi RS 7</h3>
            <p>Люксовий седан з вражаючим дизайном і потужним двигуном. RS 7 відомий своїм розкішним інтер'єром та високою швидкістю.</p>
            <img src="audi_rs7.jpg" alt="Audi RS 7">
        </div>
        <div class="car">
            <h3>Audi RS 8</h3>
            <p>Ексклюзивний спортивний купе з найновішою технологією і найкращими характеристиками. RS 8 - це елітна модель для тих, хто шукає найкраще.</p>
            <img src="audi_rs8.jpg" alt="Audi RS 8">
        </div>
    </div>
</section>

<section id="technology">
    <h2>Технології</h2>
    <p>В Audi ми завжди на передовій технологій. Від сучасних систем безпеки до передових р
