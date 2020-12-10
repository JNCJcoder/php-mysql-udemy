<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>DogCursos</title>
</head>

<body>
    <div class="container">
    <header>
        <a href="?pagina=home">
            <img src="assets/logo.png" alt="Logo">
        </a>
        <nav class="menu" id="menu">
            <a href="?pagina=home">Home</a>
            <a href="?pagina=cursos">Cursos</a>
            <a href="?pagina=alunos">Alunos</a>
            <a href="?pagina=matriculas">Matriculas</a>
            <?php if(isset($_SESSION['login'])){ ?>
				<a href="logout.php">
					<?php echo $_SESSION['usuario']; ?> 
					(sair)		
				</a>
			<?php } ?>
        </nav>
    </header>

    <div class="content container">