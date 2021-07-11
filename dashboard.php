<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saebio</title>
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="scripts/iframeResizer.min.js"></script>
</head>
<body class="background">
<nav class="nav-var nav-var-fixed" id="navbar">
    <a href="index.php"><img class="logo" alt="Saebio logo" src="images/saebio_render.png"></a>
    <div class="btn-navbar-div">
        <form>
            <input class="btn btn-outline-dark btn-navbar" type="button" value="Guardar como PDF" onclick="printDashboard()">
        </form>
    </div>
</nav>

<iframe
    id="iframe-metabase"
    src="http://localhost:3000/public/dashboard/32940229-2e9f-4f6b-a650-ef4488cf7aa2"
    onload="iFrameResize({}, this)"
    style="width: 100%;"
    frameborder="0"
    width="800"
    height="600"
    allowtransparency
></iframe>

<footer class="bg-light text-center text-lg-start footer" id="footer">
    <div class="text-center footer-bck">
        Saebio Project
    </div>
</footer>
</body>
</html>

<script type="text/javascript">
    const that = this;
    function printDashboard() {
        const footer = document.getElementById('footer');
        const nav = document.getElementById('navbar');
        footer.style.display = 'none';
        nav.style.display = 'none';
        window.print();
        footer.style.display = '';
        nav.style.display = '';
    }
</script>
