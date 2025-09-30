<?php
if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) {
    echo "<h2 class='sucesso'>Formulário enviado com sucesso!</h2>";
}
if (isset($_GET['erro']) && $_GET['erro'] == 1) {
    echo "<h2 class='erro'>Formulário não enviado, gentileza tente novamente mais tarde.</h2>";
}
if (isset($_GET['erro']) && $_GET['erro'] == 2) {
    echo "<h2 class='erro'>Gentileza preencher todos os campos!</h2>";
}
?>