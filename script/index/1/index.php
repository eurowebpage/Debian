<!DOCTYPE html><html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-f>
</head>
<body>
<?php
$host_name = shell_exec("hostnamectl | grep 'hostname'");
$product_name = shell_exec("sudo dmidecode -s system-product-name");
$system_manufacturer = shell_exec("sudo dmidecode -s system-manufacturer");
$system_serial_number = shell_exec("sudo dmidecode -s system-serial-number");


?>
<p>Hostname : <?php echo $host_name;  ?></p>
<p>Product name : <?php echo $product_name;  ?></p>
<p>System manufacturer :<?php echo $system_manufacturer;  ?></p>
<p>System serial number :<?php echo $system_serial_number ;  ?></p>
</body></html>
