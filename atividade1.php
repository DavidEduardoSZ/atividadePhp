<?php

$carrinho = [["id" => 1, "nome" => "SSD 512GB", "preco" => 280.00, "quantidade" => 1],
["id" => 2, "nome" => "Memória RAM 8GB", "preco" => 150.00, "quantidade" => 2], 
["id" => 3, "nome" => "Cabo HDMI 2.0", "preco" => 25.00, "quantidade" => 4], 
["id" => 4, "nome" => "Mouse Gamer", "preco" => 120.00, "quantidade" => 1], 
["id" => 5, "nome" => "Teclado Mecânico", "preco" => 350.00, "quantidade" => 1], 
["id" => 6, "nome" => "Fonte 600W", "preco" => 420.00, "quantidade" => 1], 
["id" => 7, "nome" => "HD Externo 1TB", "preco" => 390.00, "quantidade" => 1], 
["id" => 8, "nome" => "Headset USB", "preco" => 180.00, "quantidade" => 2],];

$totalGeral = 0;
 
echo "Resumo do pedido:<br><br>";
 
// subtotal pra todo item

foreach ($carrinho as $littleCarro) {
    $subtotalItem = $littleCarro['preco'] * $littleCarro['quantidade'];
    $totalGeral += $subtotalItem;
 
    echo "Produto: " . $littleCarro['nome'] . "<br>";
    echo "Quantidade: " . $littleCarro['quantidade'] . "<br>";
    echo "Subtotal: R$ " . number_format($subtotalItem, 2, ',', '.') . "<br>";
    echo "---------------------------<br>";
}
 
// AQUI logica descontlo
$desconto = 0;
if ($totalGeral > 200) {
    $desconto = $totalGeral * 0.10; // 10% de desconto
}
 

$totalFinal = $totalGeral - $desconto;
 
// menu

echo "<br><b>Subtotal da compra:</b> R$ " . number_format($totalGeral, 2, ',', '.') . "<br>";




if ($desconto > 0) {
    echo "<b>Desconto aplicado (10%):</b> R$ " . number_format($desconto, 2, ',', '.') . "<br>";
} else {
    echo "<b>Desconto aplicado:</b> R$ 0,00\n";
}




echo "<b>Total final a pagar:</b> R$ " . number_format($totalFinal, 2, ',', '.') . "<br>";



?>