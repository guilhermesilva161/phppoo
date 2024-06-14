<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retangulo</title>
</head>
<body>
    <?php
        if(isset ($_POST["botao"])){
            include_once("Retangulo.class.php");
            $retangulo = new Retangulo();
            $retangulo->setLadoMaior($_POST["largura"]);
            $retangulo->setLadoMenor($_POST["altura"]);
            $area = $retangulo->calculaArea();
            echo "A área é: ".$area;
        } 
        else{
    ?>
    <form action="retangulo.php" method="post">
        Informe a largura: <input type="text" name="largura"><br>
        Informe a altura: <input type="text" name="altura"><br>
        <input type="submit" name="botao" value="Calcula Área">
        </form>
        <?php
        }
    ?>
</body>
</html>