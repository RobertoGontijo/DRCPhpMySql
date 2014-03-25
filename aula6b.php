<?php
//funcoes 2 parte


$valorA = 50;
$valorB = 40;


function qualMenor($v1,$v2)
{
	if ($v1 > $v2) {
		return $v2;
	}else if ($v1 < $v2){
		return $v1;
	}else{
		return 'nao ha menor, sao iguais';
	}
}
echo 'MENOR = ' . qualMenor($valorA,$valorB) . '<br>';



/* = = = = = = = = = = = = = = = = = = = = = = */


function qualMaior($v1,$v2)
{
	//Usando a funcao MAX() ou MIN()
	// Se ha um Return eh como um aestrada, ignora-se o que vem a frente.
	// Apenas tem que ter a sintaxe correta
	return max($v1,$v2);

	//Usando os IFs / Mas nao esta sendo executada porque tem um return acima
	if ($v1 < $v2) {
		return $v2;
	}else if ($v1 > $v2){
		return $v1;
	}else{
		return 'nao ha maior, sao iguais';
	}

}


echo 'MAIOR = ' . qualMaior($valorA,$valorB) . '<hr>';
	

/* = = = = = = = = = = = = = = = = = = = = = = */


// de uma string e ela diz quantas letras tem no texo

function QC($texto){
	return strlen($texto);
}

$vTexto = "Roberto Lopes";
echo "Qtd Caracteres = " . QC($vTexto) . '<hr />';



/* = = = = = = = = = = = = = = = = = = = = = = */


function PGrande($p1,$p2){
	if ( strlen($p1) > strlen($p2) ){
		return $p1 . ' tem mais letras !';
	
	}else if ( strlen($p1) < strlen($p2) ) {
		return $p2 . ' tem mais letras !' ;
	
	}else{
		return $p1 .' e '. $p2 .' sao iguais !';
	}	

}


	/*
	// METODO MAIS SIMPLES DE RETURN SEM CHAVES E ELSE
	function PGrande($p1,$p2){
		if ( strlen($p1) > strlen($p2) )
			return $p1;
				return $p2;
	}


	// METODO MAIS SIMPLES DE RETURN SEM CHAVES E ELSE TERNARIO
	function PGrande($p1,$p2){
		return ( strlen($p1) > strlen($p2) )?$p1:$p2;
	}
	*/	




$palavra1 = 'sdfsd sdfsdf sdfteste';
$palavra2 = 'teste';

echo 'palavra 1 = : ' . $palavra1 . ' / Qtd = ' .strlen($palavra1). '<br />';
echo 'palavra 2 = : ' . $palavra2 . ' / Qtd = ' .strlen($palavra2). '<br />';

echo 'Aqui: ' . PGrande($palavra1,$palavra2);



/* = = = = = = = = = = = = = = = = = = = = = = */ echo '<hr />'



/*FUNCAO RECURSAO*/




?>