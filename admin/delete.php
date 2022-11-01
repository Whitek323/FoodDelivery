<?php
include_once('../server.php');
$data->delete($_GET['id']);
echo '<script>window.location.href="index.php"</script>'
?>