<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>

<body>
    
    <center>
    <h4>Formulario de envio de mensajes de texto</h4>
    <hr>
    <div class="modal-dialog text-center">
        <div class="col-sm-12 main-section">
            <div class="modal-content">
    <form  action="recibe.php" method="POST" class="col-12" style="position: relative; margin: auto; width: 500px;">
    <table>
    <tr>
        <td><b>Digita tu numero de teléfono</b></td>
        <div class="form-group">
        <td><input type="text" name="txtTelefono" class="form-control" placeholder="Introduce tu # de teléfono"></td>
        </div>
    </tr><br><br>
    <tr>
        <td><b>Digita el mensaje a enviar</b></td>
        <td>
            <div class="form-group">
            <textarea name="Mensaje" id="" cols="30" rows="5" class="form-control">Escriba su mensaje....</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="btnEnviar" value="Enviar mensaje" class=" btn btn-primary">
        </td>
    </tr>
    </table>
    </form>
            </div>
        </div>
    </div>
    </center>
   
    
</body>

</html>