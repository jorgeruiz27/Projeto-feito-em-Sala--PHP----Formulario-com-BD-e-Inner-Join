<!DOCTYPE html>
<html lang="pt-br">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Interação com Formulários</title>
</head>
<body>
<div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="../index.php" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuario
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="novoUsuario.php">Novo Usuario</a></li>
                        <li><a class="dropdown-item" href="listarUsuario.php">Listar Usuario</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Departamento
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="novoDepartamento.php">Novo Departamento</a></li>
                        <li><a class="dropdown-item" href="listarDepartamento.php">Listar Departamento</a></li>
                    </ul>
                </li>                
            </ul>
        </header>
    </div>
    <section>
        <?php 
            include "../sistema/configuracao.php";
            $sql = "SELECT * FROM departamento WHERE idDepartamento=".$_GET["id"];
            $res = $conn->query($sql);
            $row = $res->fetch_object();
        ?>
        <form action="../sistema/cadDepartamento.php" method="POST">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php echo $row->idDepartamento; ?>">
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome Departamento</label>
                <input type="text" class="form-control" name="nome" id="idNome" value="<?php echo $row->nomeDepartamento; ?>">
            </div>            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1"><i class="bi bi-bootstrap-fill" style="font-size:50px"></i></a>
                <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter" style="font-size:30px"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram" style="font-size:30px"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-facebook" style="font-size:30px"></i></a></li>
            </ul>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
