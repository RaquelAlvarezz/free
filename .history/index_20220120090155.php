<!DOCTYPE html>
<html>
<head>
	<title>Mi gestión simple de proyectos| phpGrid</title>

</head>
<body>

<style>
body {
  background: linear-gradient(to top, rgba(0, 0, 0, 0.698) 0%, rgba(0, 0, 0, 0.637) 45%, rgba(0,0,0,0.65) 100%),  url(https://images.pexels.com/photos/3183186/pexels-photo-3183186.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260) no-repeat;
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