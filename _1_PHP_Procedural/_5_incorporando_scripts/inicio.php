<?php 
	/*comandos que importam e exportam scripts 'como links'

	No 'include' o erro dispara um warning mas publica o conteudo da pagina
	quantas vezes ele for solicitado,
	ja no 'include_once' mesmo que ele for solicitado 2 ou mais vezes,
	somente imprime a primeira solicitação

	No 'require' o erro dispara um fatal error e bloqueia a aplicação
	e o 'require_once' mesmo que ele for solicitado 2 ou mais vezes,
	somente imprime a primeira solicitação		*/


    //include "menu.php"; //warning
    include_once "menu.php"; //warning
    //require "menu2.php"; //fatal error
    require_once "menu.php"; //fatal error (melhor / usado para controle de acesso)
?>

	Conteúdo da página ( inicio )
	<br/>

<?php 
    //include "menu.php"; //warning
    include_once "menu.php"; //warning
    //require "menu.php"; //fatal error
    require_once "menu.php"; //fatal error (melhor / usado para controle de acesso)
?>
