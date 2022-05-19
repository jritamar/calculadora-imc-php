<?php
@$peso = $_POST['peso'];
@$altura = $_POST['altura'];
@$pesoideal = round((0.75*(100*($altura - 1.52)))+52);

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA IMC</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="js/jquery.mask.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#altura").mask("0.00");
         })
    </script>
</head>
<body>
    <div class="box1">

        <form action="index.php" method="POST">
            <fieldset>
        <legend><b>CALCULADORA IMC</b></legend>
        <br><br>
            <div class="inputBox">
                <input type="text" class="inputUser" name="peso" id="peso">
                <label for="peso" class="labelInput">PESO:</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" class="inputUser" name="altura" id="altura">
                <label for="altura" class="labelInput">ALTURA:</label>
            </div>
            <br>
            <input type="submit" class="btn btn-primary pakainfo" name="submit" value="CALCULAR" id="submit">
            </div>
        </form>
        </fieldset>
        </div>
        <br><br>
        <div class="box2">
    <fieldset>
<legend><b>RESULTADO</b></legend>
<br><br>

<?php

if(($peso / ($altura * $altura)) < 18.5){
    echo "<b> <font size=4 face='Verdana' width=100>Baixo Peso</font></b>" . "<br>" . "<br>";
    echo "<hr>" . "<br>";
    echo "Seu IMC é: " . round($peso / ($altura * $altura)) . "<br>" . "<br>" . "<br>";
    echo "Seu peso ideal é = " . $pesoideal . "kg" . "<br>" . "<br>" . "<br>";
    echo "Você engordando 100 Gramas por dia, irá alcançar seu Peso Ideal em:" . "<br>" . "<br>";
    return;
}
if(($peso / ($altura * $altura)) > 18.5 and ($peso / ($altura * $altura)) < 24.9){
    echo "<b> <font size=4 face='Verdana' width=100>Normal</font></b>" . "<br>";
    echo "<hr>";
    echo "Seu IMC é: " . ($peso / ($altura * $altura)) . "<br>";
    echo "Seu peso ideal é = " . $pesoideal . "kg";
}
if(($peso / ($altura * $altura)) > 25 and ($peso / ($altura * $altura)) < 29.9){
    echo "<b> <font size=4 face='Verdana' width=100>Sobrepeso</font></b>" . "<br>";
    echo "<hr>";
    echo "Seu IMC é: " . round($peso / ($altura * $altura)) . "<br>";
    echo "Seu peso ideal é = " . $pesoideal . "kg" . "<br>";
    echo "Perdendo 0.100 Gramas por dia você alcançara seu Peso Ideal em " . (($peso - $pesoideal)/0.100) . " Dias";
}
if(($peso / ($altura * $altura)) > 30 and ($peso / ($altura * $altura)) < 34.9){
    echo "<b> <font size=4 face='Verdana' width=100>Obesidade Grau I </font></b>" . "<br>";
    echo "<hr>";
    echo "Seu IMC é: " . round($peso / ($altura * $altura)) . "<br>";
    echo "Seu peso ideal é = " . $pesoideal . "kg" . "<br>";
    echo "Perdendo 0.100 Gramas por dia você alcançara seu Peso Ideal em " . (($peso - $pesoideal)/0.100) . " Dias";
}
if(($peso / ($altura * $altura)) > 35 and ($peso / ($altura * $altura)) < 39.9){
    echo "<b> <font size=4 face='Verdana' width=100>Obesidade Grau II </font></b>" . "<br>";
    echo "<hr>";
    echo "Seu IMC é: " . round($peso / ($altura * $altura)) . "<br>";
    echo "Seu peso ideal é = " . $pesoideal . "kg" . "<br>";
    echo "Perdendo 0.100 Gramas por dia você alcançara seu Peso Ideal em " . (($peso - $pesoideal)/0.100) . " Dias";
}
if(($peso / ($altura * $altura)) > 40){
    echo "<b> <font size=4 face='Verdana' width=100>Obesidade Grau III </font></b>" . "<br>" . "<br>";
    echo "<hr>" . "<br>";
    echo "Seu IMC é: " . round($peso / ($altura * $altura)) . "<br>" . "<br>";
    echo "Seu peso ideal é = " . $pesoideal . "kg" . "<br>" . "<br>";
    echo "Perdendo 0.100 Gramas por dia você alcançara seu Peso Ideal em " . (($peso - $pesoideal)/0.100) . " Dias" . "<br>" . "<br>";
}

?>
    
</fieldset>
</div>
        
</body>
</html>