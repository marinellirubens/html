<?php 
require_once("logica-usuario.php");
?>
<p class="text-success">Você está logado como <?= usuarioLogado() ?>.</p>
<a href="logout.php">Deslogar</a></p>