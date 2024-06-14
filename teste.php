<?php
echo'Teste com valores Atividade 125'. "<br>";
include 'Aeroporto.class.php';

$aeroporto = new Aeroporto();

$aeroporto->setNome("Aeroporto Internacional");
$aeroporto->setCidade("Brasilia");

echo "Nome do Aeroporto: " . $aeroporto->getNome() . "<br>";
echo "Cidade do Aeroporto: " . $aeroporto->getCidade() . "<br>";
?>
<br>
<?php
echo'Teste com valores Atividade 126.a'. "<br>";
include 'Quadrado.class.php';

$quadrado = new Quadrado();

$quadrado->setLado(5);
echo 'Área do Quadrado '. $quadrado->calculaArea();

?>

<br>
<br>
<?php
echo'Teste com valores Atividade 126.d'. "<br>";
include 'Triangulo.class.php';

$triangulo = new Triangulo();

$triangulo->setBase(2);
$triangulo->setAltura(10);

echo 'Área do Triangulo '. $triangulo->calculaAreaTriangulo();

?>