<!--HEADER-->
<?php include_once '../includes/templates/header_url.php';?>
<body>
  <div class="contenedor">
      <div class="hero">
          <img src="../img/hero.jpg" alt="imagen del hero">
      </div>
    <div class="productos">
        <?php 
        try{
            $carrera = $_GET; 
            $nombreCarrera = $carrera['carrera'];
            require_once('../includes/funciones/bd_conexion.php');
            $sql = "SELECT * FROM producto WHERE facultad = '$nombreCarrera'";
            $resultado = $conn->query($sql);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        switch($nombreCarrera){
            case 'derecho':
                echo "Estas viendo las camisetas de " . $nombreCarrera;
                break;
            case 'ade': 
                echo "Estas viendo las camisetas de " . $nombreCarrera;
                break;
            default:
                echo "Todavia esta sin poner camisetas";
        }
        ?>
        <h2 class = "h2_url">NUESTROS PRODUCTOS</h2>
        <ul class="lista clearfix">
        <?php while ($productos = $resultado->fetch_assoc()){ ?>
                <li>
                <a href="../url_detalles/detalles_producto.php?carrera=<?php echo $nombreCarrera ?>">
                <img src="../img/<?php echo $productos['imagen']?>" alt="<?php echo $productos['id'] ?>">
                </a>
                <p><?php echo $productos['id'] ?> <span><?php echo $productos['precio'] ?> $</span></p>
                </li>
        <?php } ?>
        </ul>   
    </div><!--productos-->
  </div><!--contenedor--> 
    <!--FOOTER-->
    <?php include_once '../includes/templates/footer.php';?>
    <!--SCRIPTS DEL INDEX -->
    <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="../js/main.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/jquery.flexslider.js"></script>
    <script src="../js/lightbox.js"></script>
    <?php $conn->close(); ?>
</html>