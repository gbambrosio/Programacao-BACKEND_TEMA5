<?php

//Criando o estoque inicial:
$estoque = array("Caneta", "Lápis", "Borracha");

//exibindo o array inicial:
echo "Array Inicial: ";
echo "<br>";
print_r($estoque);
echo "<br>";
echo "<br>";

//Atualizando o array:
$estoque[1] = "Marcador";

//Exibindo a atualização do array, trocando Lapis por Marcador
echo "Array após a atualização, trocando Lapis por Marcador: ";
echo "<br>";
print_r($estoque);
echo "<br>";
echo "<br>";

//Adicionando o item Grampeador ao final do Array
$estoque[] = "Grampeador";

//Exibindo a atualização do Array, após a adição do item Grampeador
echo "Array após a atualização, adicionando o Item Grampeador";
echo "<br>";
print_r($estoque);
echo "<br>";
echo "<br>";

//Adicionando o Item Clips na segunda posição sem eliminar ou substituir outros elementos
array_splice($estoque, 2, 0, "Clips");

//Exibindo a atualização do Array após a inserção do Item Clips
echo "Array após a atualização, adicionando o Item Clips";
echo "<br>";
print_r($estoque);
echo "<br>";
echo "<br>";

//Removendo o item da posição 1 (Marcador)
unset($estoque[1]);

//Exibindo a atualização do Array, após a remoçao do elemento 1 (Marcador)
echo "Array após a remoção do Item Marcador.";
echo "<br>";
print_r($estoque);
echo "<br>";
echo "<br>";
//Reindexando o Array
$estoque = array_values($estoque);

//Exibindo o Array após a reindexação
echo "Array após o reindex:";
echo "<br>";
print_r($estoque);

?>