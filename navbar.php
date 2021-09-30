<nav class="navbar navbar-dark" style="background-color: #BDBDBD;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- glyphicon glyphicon-object-align-vertical -->
            <a class="navbar-brand" href="index.php">Phazon</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">HOME<span class="sr-only">(current)</span></a></li>
                <li><a href="lanc.php">LANÇAMENTOS</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">CATEGORIAS<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="categoria.php?cat=Periferico">Periféricos</a></li>
                        <li><a href="categoria.php?cat=Uniforme">Uniformes</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="nav-item"><a class="nav-link disabled">Em breve...</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar na loja...">
                </div>
                <button type="submit" class="btn btn-default">Pesquisar</button>
            </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Contato</a></li>

                    <?php if (empty($_SESSION['ID'])) { ?>
                        <li><a href="formlogin.php"><span class="glyphicon glyphicon glyphicon-log-in"> Login</a></li>
                    <?php } else {

                       $consulta_usuario = $cn->query("select usuario_client from cliente where id_client = '$_SESSION[ID]'");
                       $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
                    ?>
                        <li><a href="#"><span class="glyphicon glyphicon-user"><?php echo $exibe_usuario['usuario_client'];?></a></li>
                        <li><a href="sair.php"><span class="glyphicon glyphicon glyphicon-log-out">Sair</a></li>
                <?php }?>

            </ul>
        </div>
    </div>
</nav>