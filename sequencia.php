<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Sequência</title>
</head>
<body>
    <?php
        if(isset($_POST["botao"])){
            include_once("Sequencia.class.php");
            $sequencia = new Sequencia();
            $sequencia->setInicio($_POST["inicio"]);
            $sequencia->setFim($_POST["fim"]);
            if($_POST["mostrar"] == "todos")
            $sequencia->exibirTodosNumeros();
        elseif ($_POST["mostrar"] == "impares")
        $sequencia->exibirImpares();
        }
        else{
    ?>
    <form action="sequencia.php" method="post">
        Selocione o valor inicial:
        <select name="inicio">
        <option value="1" selected>1</option>;
        <?php
            for($i =2; $i <= 100; $i++){
                echo '<option value=>"'.$i.'">'.$i.'</option>';
            }     
    ?>
    </select>
    <select name="fim">
    <?php
        for($i = 1; $i <= 99; $i++){
            echo'<option value=>"'.$i.'">'.$i.'</option>';
        }
    ?>
    <option value="100" selected>100</option>;
    </select>
    Mostrar:<br>
    <input type="radio" name="mostrar" value="todos" checked>Todos<br>
    <input type="radio" name="mostrar" value="pares" checked>Apenas os pares<br>
    <input type="radio" name="mostrar" value="impares" checked>Apenas os impares<br>
    <input type="submit" name="botao" value="Enviar">
    </form>
    <?php
    }
    ?>    
    
</body>
</html>