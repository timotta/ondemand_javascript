<?php 
sleep(20);
$soma = $_REQUEST['numero1'] + $_REQUEST['numero2']; 
?>
<?php echo $_REQUEST['callback']; ?>({soma:<?php echo $soma; ?>});
