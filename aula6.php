<?php
//funcoes
function divide($v1,$v2){
	return $v1 / $v2;
}
function multiplica($m1,$m2) {
	return $m1 * $m2;
}
function somaTres($st1,$st2,$st3){
	return $st1 + $st2 + $st3;
}

//funcao de nome pessoa que retona um array sexo nome e idade
function pessoa($sexo,$nome,$idade){
	return array(
		'sexo'=>$sexo,
		'nome'=>$nome,
		'idade'=>$idade
		);
}

/*function pessoaEsta($pessoa,$nome){
		return $nome == $pessoa(['nome']);
*/	


$valor1 = 150;
$valor2 = 10;
$valor3 = 45;

echo "Valor da Divisao de ".$valor1." / ".$valor2." eh: ". divide($valo1,$valor2) . "<br>";
echo "Valor da Multiplicacao de ".$valor1." / ".$valor2." eh: ". multiplica($valor1,$valor2). "<br>";
echo "Valor dos tres: ".$valor1." / ".$valor2." / ".$valor3." eh: ". somaTres($valor1,$valor2,$valor3). "<hr>";

$nome = "Roberto";
$idade = "39";
$sexo = "M";

$aPessoa = pessoa($sexo,$nome,$idade);
var_dump($aPessoa);
echo "<hr><hr>"

//echo pessoaEsta("Roberto");



?>