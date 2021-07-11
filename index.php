<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saebio</title>
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
</head>
<body class="background">
<nav class="nav-var nav-var-fixed">
    <a href="index.php"><img class="logo" alt="Saebio logo" src="images/saebio_render.png"></a>
</nav>
<div class="container">
    <div class="col-md-12 column padding-t-60">
        <form name="input_form" id="input_form" method="post" enctype="multipart/form-data" action="http://localhost:4567/add">
            <div class="form-row">
                <div class="col-md-6 mb-3 custom-file offset-md-1">
                    <input class="custom-file-input form-control-lg" lang="es" name="file" id="file" type="file" accept=".csv" required>
                    <label class="custom-file-label col-form-label-lg" for="file" data-browse="Seleccionar archivo">Ningún archivo seleccionado</label>
                </div>
                <div class="col-md-2 padding-l-40">
                    <input class="btn btn-light btn-lg btn-lg-rounded" type="submit" value="Procesar">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container padding-t-200">
    <div class="row">
        <div class="col-md-6 text-center padding-l-180">
            <div class="white-lg-btn">
                <form action="dashboard.php">
                    <input type="image" name="submit" alt="Cuadro de mando" src="images/circle_graphic.jpg">
                </form>
                <form action="dashboard.php">
                    <input class="btn btn-dark btn-lg btn-dark-lg-rounded" type="submit" value="Visualizar cuadro de mando">
                </form>
            </div>
        </div>
        <div class="col-md-6 text-center padding-l-90">
            <div class="white-lg-btn">
                <form action="pdf_report.php">
                    <input class="resize_btn" type="image" name="submit" alt="PDF" src="images/pdf_logo.png">
                </form>
                <form action="pdf_report.php">
                    <input class="btn btn-dark btn-lg btn-dark-lg-rounded" type="submit" value="Generar PDF">
                </form>
            </div>
        </div>
    </div>
</div>


<footer class="bg-light text-center text-lg-start footer">
    <div class="text-center footer-bck">
        Saebio Project
    </div>
</footer>

<script>
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>

</body>
</html>

<!--
<ul>
    <li><a href="addData.html">Añadir datos</a></li>
    <a href="done.php">Done</a>
</ul>


<form name="input_form" id="input_form" method="post" action="http://localhost:4567/add" enctype="multipart/form-data">

    Ingresa el archivo:

    <input name="file" id="file" type="file" accept=".csv" required>
    <input type="submit" value="hola">

</form>-->