<?php
#echo 'lkjslkdjflkjs'
$conn = mysqli_connect("localhost",$_POST['Usuario'],$_POST['Senha'],"loja");

if (!$conn) 
{
    //die("Connection failed: " . $conn->connect_error);
?>
<script type="text/javascript">
    alert('falha');
</script>
<?php
}
else
{
    echo 'sucesso';
} 

?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    html, body, form
    {
        height: 98%;
        width: 98%;
    }

</style>
  <title>Pagina Teste Php</title>
</head>
<body>
<form  action="index.html" name="form" method="post">
    <!--
    <div style="margin: 0 auto; background-color: blue; width: 10%; height: 10%;  display: block;    ">
        <div>
            <center>Teste</center>
  
        </div>
    </div>
    -->
<input type="text" name="Usuario" id="Usuario" value="" placeholder="Usuario">
<input type="password" name="Senha"   id="Senha"   value="" placeholder="Senha">
<button>Ok</button>
<br>
<br>
    <?php echo md5($_POST['subject']); ?>
<br>


          <?php 
                /*$result = mysqli_query($conn,"select linha from teste");

                if (mysqli_num_rows($result) > 0) 
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) 
                    {
                        echo $row["linha"]."<br>";
                    }
                } 
                else 
                {
                    echo "0 results";
                }

                mysqli_close($conn);
   */
            ?>
</form>
</body>
</html>