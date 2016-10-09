<style>
html, body{
	height: 100%;
	width: 100%;
	margin: 0;
}

nav ul ul 
{
    display: none;
}

nav ul li:hover > ul 
{
    display: block;
}

nav 
{
    margin: 0 auto;
    text-align: center;
}
nav ul 
{
	background: #efefef; 
	/*background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); */
	border-width: 0px 0px 1px 0px;
	box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.5);
	border-radius: 0px;  

	border-style: solid;
	border-color: grey;
	margin-top: 0;
	padding: 0 20px;
	list-style: none;
	width: 97%;
	margin:0;
	position: relative;
	display: inline-table;
}

nav ul li ul
{
	max-width: 180px;
}
nav ul:after 
{
	content: ""; clear: both; display: block;
}

nav ul li 
{
	float: left;

}
nav ul li:hover 
{
	background: #4b545f;
	background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
	background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
	background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
}
nav ul li:hover a 
{
	color: #fff;
}
		
nav ul li a 
{
	display: block; padding: 15px 20px;
	margin:0;
	/*background-color: blue;*/
	color: #000575; text-decoration: none;
}

nav ul ul 
{
	background: #5f6975; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
}
nav ul ul li 
{
	float: none; 
	border-top: 1px solid #6b727c;
	border-bottom: 1px solid #575f6a; position: relative;
}
nav ul ul li a 
{
	/*padding: 15px 20px;*/
	color: #fff;
}	

nav ul ul li a:hover 
{
	background: #4b545f;
}

nav ul ul ul 
{
	position: absolute; left: 100%; top:0;
}

.Menu
{
	width: 100%;
	height: 7%;
	/*overflow: auto;*/
	margin:0;
	background-color: #f5f5f5;
}
</style>
<?php
require_once("banco-usuario.php");
require_once("logica-usuario.php");

if(!usuarioEstaLogado())
{
	header("Location: index.php");
} 
?>

<div class="Menu" id="Menu">

<nav>
	<ul>
		<li><a href="default.php">Home</a></li>
		<!-- <li><a href="#">Tutoriais</a>
			<ul>
				<li><a href="#">CSS</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">JavaScript</a>
					<ul>
						<li><a href="#">jQuery</a></li>
						<li><a href="#">Angular</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="#">Artigos</a>
			<ul>
				<li><a href="#">Node.js</a></li>
				<li><a href="#">MongoDB</a></li>
			</ul>
		</li>
		<li><a href="#">Crie seu Próprio Menu</a></li> -->
		<li><a>Cadastro</a>
			<ul>
				<li><a href="cadastroUsuario.php">Cadastro de usuario</a></li>
			</ul>
		</li>
		<li style=" float: right; ">
	  		<a href="logout.php">
	  			Sair
	  		</a>
	  	</li>
	</ul>
</nav>
</div>	
<!-- 
<div style=
" 
	margin: 0 auto;
	height: 300px;
	width: 300px;

	border-top: 50px solid green; 
	border-left: 50px solid blue;
	border-right: 50px solid red;  
	border-bottom: 50px solid black;

"> </div>
 -->
 <div style=" height: 93%; width: 100%; background-color: #f5f5f5; overflow: auto; margin:0; padding: 0;  ">
 	

