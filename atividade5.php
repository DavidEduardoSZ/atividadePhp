<?php
 
$alunos = [
    ["nome" => "Ana", "idade" => 18, "nota" => 8.5],
    ["nome" => "Bruno", "idade" => 20, "nota" => 7.0],
    ["nome" => "Carlos", "idade" => 19, "nota" => 9.2],
    ["nome" => "Daniela", "idade" => 21, "nota" => 6.8],
    ["nome" => "Eduardo", "idade" => 22, "nota" => 5.9],
    ["nome" => "Fernanda", "idade" => 18, "nota" => 7.8],
    ["nome" => "Gabriel", "idade" => 20, "nota" => 8.1],
    ["nome" => "Helena", "idade" => 19, "nota" => 9.0],
    ["nome" => "Igor", "idade" => 23, "nota" => 6.4],
    ["nome" => "Juliana", "idade" => 21, "nota" => 7.5],
    ["nome" => "Lucas", "idade" => 20, "nota" => 8.9],
    ["nome" => "Mariana", "idade" => 18, "nota" => 9.4],
];
 
usort($alunos, function($a, $b) {
    return $b['nota'] <=> $a['nota'];
});
 
$somanotas = 0;
$totalalunos = count($alunos);
 
echo "<table border='1' style='border-collapse: collapse;'>
        <thead>
            <tr>
                <th>nome</th>
                <th>idade</th>
                <th>nota</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>";
 
foreach ($alunos as $aluno) {
    $somanotas += $aluno['nota'];
    $cor = ($aluno['nota'] < 7) ? "style='background-color: #ee392cff;'" : "";
    $status = ($aluno['nota'] >= 7) ? "aprovado" : "reprovado";
 
    echo "<tr $cor>
            <td>{$aluno['nome']}</td>
            <td>{$aluno['idade']}</td>
            <td>{$aluno['nota']}</td>   
            <td>$status</td>
          </tr>";
}
 
$media = $somanotas / $totalalunos;
 
echo "</tbody>
    </table>";
 
echo "<br>"."Media das notas: " . number_format($media, 2, ',', '.');
 
?>