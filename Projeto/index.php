<?php 
require_once("logica-usuario.php");
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    html, form, body
    {
        height: 98%;
        width: 98%;
    }

    .CardLogin
    {
        margin-left: auto;
        margin-right: auto;
        vertical-align: middle;
        display: block;
        align-self: center; 
        align-content: center; 
        background-color: #f2f2f2; 
        width: 280px;   
        border-style: solid;
        border-color: #d2d2D2;
        border-width: 1px 1px 4px 1px;

        -webkit-box-shadow: 2px 2px 4px 1px rgba(0,0,0,0.3);
        -moz-box-shadow: 2px 2px 4px 1px rgba(0,0,0,0.3);
        box-shadow: 2px 2px 4px 1px rgba(0,0,0,0.3);

        border-radius: 10px;
    }

    .DivMaster
    {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        width: 100%; 
        height: 40%; 
        margin: 0 auto;
    }
    .txtIndex , .txtIndex2
    {
        border-style: solid; 
        border-color: #aabbdd; 
        border-width: 1px; 
        height: 30px;
        width: 85%;
    }
    .txtIndex
    {
        border-radius: 5px 5px 0px 0px; 
    }

    .txtIndex2
    {
        border-radius: 0px 0px 5px 5px; 
    }
    
    
    .txtIndex:hover , .txtIndex2:hover
    {
        border-color: #6666ff; 
    }
</style>
    <title>Pagina Inicial</title>
</head>
<body>
<!--<h1>Seja bem-vindo! feito pelo github</h1>-->
<?php 
if(usuarioEstaLogado()) 
{ 
    header("Location: default.php");
} else { ?>
    <form action="login.php" method="post">
    <div class="DivMaster">
        <center>
            <font style=" color: red;  ">
                <?php echo $_SESSION["danger"]?>
            </font>
        </center>  
        <br>
        <div class="CardLogin" >
            <center>
                <div style="margin: 0 auto; height: 34px; ">
                    <input class="txtIndex" type="email" name="email" placeholder="Email" required />
                </div>
                <div style="margin: 0 auto; height: 34px;  ">
                    <input  class="txtIndex2" type="password" name="senha" placeholder="password" required />
                </div>
                <div style="  height: 20px; margin: 20px auto; ">
                    <button style="border-style: solid; border-color: #aabbdd; border-radius: 3px; border-width: 1px; width: 100px; height: 25px; ">
                        Login
                    </button>
                </div>
            </center>
        </div>
        </div>
          
    </form> 
<?php }?>   
</body>
</html>
