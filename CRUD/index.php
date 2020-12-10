<?php

# Sessão
session_start();

# BDD
include 'db.php';

# Header
include 'header.php';

# Conteúdo da página
if(isset($_SESSION['login'])){
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 'cursos';
    }
} else {
    $pagina = 'home';
}

switch ($pagina) {
    case 'home':                include 'views/home.php';               break;
    case 'cursos':              include 'views/cursos.php';             break;
    case 'alunos':              include 'views/alunos.php';             break;
    case 'matriculas':          include 'views/matriculas.php';         break;
    case 'inserir_aluno':       include 'views/inserir_aluno.php';      break;
	case 'inserir_matricula':   include 'views/inserir_matricula.php';  break;
	case 'inserir_curso':       include 'views/inserir_curso.php';      break;
}

# Footer
include 'footer.php';