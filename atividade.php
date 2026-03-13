    <?php

    echo "<hr>";
    echo "<h2> Pausa Exercicio </h2> <br>";

    $emails = "ADMIN@EMPRESA.COM ,  contato@Site.COM  ,SUPORTE@dominio.com  ,   vendas@Empresa.com ";
    
    $emailExplodido = explode(',',$emails);
    $emailsLimpo = trim($emails);
    $emailCerto = strtolower($emailExplodido[0]);

    
    echo "$emailCerto". "<br>";

    ?>