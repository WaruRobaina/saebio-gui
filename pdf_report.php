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
    <div class="col-md-12 column padding-t-100">
        <form name="select_form" id="select_form" method="post" enctype="multipart/form-data" action="">
            <div class="form-row">
                <div class="col-md-8 mb-3 custom-file offset-md-1">
                    <h4 class="white-font-2" ">Seleccione un informe:</h4>
                    <select class="form-select form-select-lg mb-3 select-style" name="origin_selector" id="origin_selector"  title="Seleccione un informe"required>
                        <option value="http://localhost:4567/generate/atencion primaria area norte,2020" selected="selected">  Atención Primaria Área Norte, 2020</option>
                        <option value="http://localhost:4567/generate/hospital de gran canaria dr. negrin,2020">  Hospital Doctor Negrín, 2020</option>
                        <option value="http://localhost:4567/generate/hospital materno infantil,2020">  Hospital Materno Infantil, 2020</option>
                    </select>
                </div>
                <div class="col-md-2 padding-l-40">
                    <input class="btn btn-light btn-lg btn-lg-rounded" type="submit" value="Generar">
                </div>
            </div>
        </form>
    </div>
</div>

<footer class="bg-light text-center text-lg-start footer">
    <div class="text-center footer-bck">
        Saebio Project
    </div>
</footer>

<script>
    document.getElementById('select_form').origin_selector.onchange = function() {
        var action = this.value;
        document.getElementById('select_form').action = action;
    };
</script>

</body>
</html>
