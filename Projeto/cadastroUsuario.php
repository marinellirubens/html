<?php 
require_once("menu.php");
?>
<!--<p class="text-success">Você está logado como <?= usuarioLogado() ?>.</p>-->
<style type="text/css">
.Card
{
	background-color: #e0e0e0; 
	height: 450px; 
	width : 300px; 
	margin: 0 auto;
	
	border-width: 1px 1px 5px 1px;
	border-style: solid;
	border-color: #a0a0a0;
	border-radius: 6px;
	box-shadow: 1px 1px 6px 0px #a0a0a0;

 	position: relative;
  	top: 50%;
  	transform: translateY(-50%);	
}
.CardContent
{
	margin:0 auto;
	width: 80%;
	height: 80%;
	/*background-color: blue;*/
/*	text-align: center;
	align-content: center;*/
 	position: relative;	
  	top: 50%;
  	transform: translateY(-50%);		
}
.txtUser
{
	width: 100%; 
	height: 30px; 
	font-size: 15px;
	display: block;
	/*margin:0 auto;*/
}
</style>
<div class="Card">
	<div class="CardContent">
<form name="form1" id="form1" method="post">
		<center>
			<h3>Cadastro de Usuario</h3>
		</center>
		<br>

		<label style="text-align: left; align-content: left;">Usuario</label>
		<br>
		<input class="txtUser" type="text" name="Usuario" placeholder="Usuario" required/>
		<br>
		<label>Email</label>
		<br>
		<input class="txtUser" type="Email" name="Email" placeholder="Email" required/>
		<br>
		<label>Senha</label>
		<br>
		<input class="txtUser" type="Password" name="Senha" placeholder="Senha" required/>
		<br>
		<br>
		<br>
		<br>
		<br>
		<input style=" height: 30px; color: white; background-color: grey; margin-bottom: 0; width: 100%; " type="submit" name="Cadastro" value="Cadastro">
		</form>
	</div>
</div>
<?php 
require_once("rodape.php");
?>