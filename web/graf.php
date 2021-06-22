<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php web</title>
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <!--    <script src="https://ajax.googleapis.com/ajax/ libs/jquery/3.5.1/jquery.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="../resources/boostrap/bootstrap-4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/boostrap/css/fon.css">
    <script src="../resources/boostrap/bootstrap-4.5.3/js/bootstrap.min.js"></script>
    <script src="../resources/boostrap/JS/jQuery/jquery.js"></script>
    <script src="../resources/boostrap/JS/charts/Chart.js"></script>


</head>
<body>

<div class="container">
    <div class="header">
        <h1>My web application</h1>
        <p>A website created by me.</p>
    </div>

    <div class="navbar">
        <a href="add.html" title="Добавить">Добавить</a>
        <a href="update.php" title="Информация">Вывод информации</a>
        <a href="index.html" title="Назад">Меню</a>
    </div>


    <div class="row">
        <div class="container">
            <div class="jumbotron">

                <?php
                include 'C:\xampp\htdocs\dashboard\php-web\controller\Diagram.php';


                $mass1 = array('B1', 'B2', 'B3', 'B4', 'B5');
                $mass2 = array(5, 8784, 7, 8999, 8, 8787, 5, 8767, 10, 6865);


                $diagram = new Diagram();
                $diagram->paramData($mass1, $mass2);
                ?>

                <div class="text">
                    <h2>
                        10 лучших JavaScript библиотек для визуализации данных на графиках и диаграммах
                    </h2>

                    <p class="col-form-label">
                        Объемы данных, с которыми нужно работать, постоянно увеличиваются.
                        И чем больше информации, тем сложнее ее обрабатывать.
                        Вот почему сейчас стала особенно популярна тема визуализации данных — в виде графиков, диаграмм,
                        дашбордов, желательно интерактивных. Визуальное представление данных позволяет нам, людям,
                        тратить меньше времени и сил на их просмотр, анализ и осмысление, а также на принятие
                        правильных, информированных решений на основе этого.
                    </p>
                    <p>
                        Вряд ли кто-то станет отрицать, что в современном HTML5 вебе JavaScript — самая универсальная и
                        простая технология для визуализации данных. Так что, если вы занимаетесь фронтенд-разработкой,
                        то вы, скорее всего, либо уже имели дело с созданием JS чартов, либо столкнетесь с этим в
                        (скором) будущем.
                    </p>
                </div>
                <div class="image">
                    <img src="https://habrastorage.org/webt/ob/nj/79/obnj79drephojpxybt16szulo1k.jpeg" class="rounded"
                         alt="Cinque Terre" width="200" height="150">
                </div>
                <div class="video">
                    <video controls width="400" height="300">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>

                    <iframe width="420" height="345" src="https://www.youtube.be/embed/tgbNymZ7vqY">
                    </iframe>

                </div>

            </div>
        </div>
        <div class="container mt-3">
            <div class="footer">
                <div class="media border p-3">
                    <img src="../resources/image/face.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle"
                         style="width:60px;">
                    <div class="media-body">
                        <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>


                        <p style="font-size:30px">
                            &#128512; &#128516; &#128525; &#128400;
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>


</body>
</html>