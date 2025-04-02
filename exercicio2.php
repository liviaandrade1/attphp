<?php 
	$num = 100;
	if ($num%10==0){
		echo "É divisível por 10";
	}elseif ($num%5==0){
		echo "É divisível por 5";
	}elseif ($num%2==0){
		echo "É divisível por 2";
	}else
		echo "Não é divisível por nenhuma das opções.";
 
?>
