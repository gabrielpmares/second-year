<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <script src="processa.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>


  
<body>


<?php
    // POR UMA VARIÁVEL DE SESSÃO PARA QUEM ESTÁ A FALAR

    // $envia = $_SESSION...

    $envia = "José";
    $recebe = "ahaha";
?>

<script>
  window.onload = trataMensagem( '<?php echo $envia; ?>',  '<?php echo $recebe; ?>');
  // setInterval(function(){trataMensagem('<?php echo $envia; ?>',  '<?php echo $recebe; ?>')}, 500);
</script>

<form action="">
    <input type="text" name="msg" id="msg" placeholder = "Envie a sua mensagem">
    <input type="button" value="Enviar" class="submit" id="submit" name="submit" onclick= "trataMensagem( '<?php echo $envia; ?>',  '<?php echo $recebe; ?>');"/>
</form>

<div id="mensagens_emissor">

</div>

</body>
</html>