<?php require dirname(__FILE__) . '/../../v/header.php';
session_destroy();
?>
<script>        window.location.replace("<?= $path_project; ?>v/index.php");</script>
