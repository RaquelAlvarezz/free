<!DOCTYPE html>
<html>
<head>
	<title>Mi gestión simple de proyectos| phpGrid</title>

</head>
<body>

<style>
body {
  background: url(https://images.pexels.com/photos/3183183/pexels-photo-3183183.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940) no-repeat;
}
.centered {
    margin: 0;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align:center;
    font-size: 25px;
    font-family: Arial;
    color:white;
    background-color:white;
    
}
.footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
  font-family: arial;
}

</style>

<div class="centered">
<h1>Mi gestión simple de proyectos</h1>

<a href="manager/clients.php" target="_new">Entrar como manager</a> | <a href="employee/tasks.php" target="_new">Entrar como empleado</a>
</div>

<div class="footer"><strong>Build with love</strong> | phpGrid &copy; <?php echo date('Y'); ?>.</div>

</body>
</html>