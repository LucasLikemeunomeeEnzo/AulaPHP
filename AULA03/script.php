<?php
$nome = $_POST['Nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$media = ($n1+$n2) / 2;
if ($media > 7) {
    echo "$nome Aprovado, essa é sua média: $media";

} elseif ($media >= 5) {
    echo "Recuperação, $media";
}
else{
    echo "$nome Reprovado, essa é a sua média: $media";
}
?>