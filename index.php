<?php

#Base de dados
include 'db.php';

#Cabeçalho
include 'header.php';

#Conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
} else {
	$pagina = 'home';
}


switch ($pagina) {
	case 'cursos':
		include 'views/cursos.php';
		break;
	case 'alunos':
		include 'views/alunos.php';
		break;
	case 'matriculas':
		 include 'views/matriculas.php';
		break;
	default:
		include 'views/home.php';
		break;
}



#Rodapé
include 'footer.php';
