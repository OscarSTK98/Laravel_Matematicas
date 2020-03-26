@extends('Layouts/HTMLStructure')

@section('content')

<div class="container">
    <center>

        <br />
        <br />

        <h3>Ingrese los datos correspondientes</h3>
        
        <br />
        <br />

        <form action="Cuentas.php" method='post'>

            <div class="form-group">
                <label for="email">Nombre de Usuario</label>
                <i class="glyphicon glyphicon-user"></i><input type="text" class="form-control" name="user" required style="width: 300px" id="user">
            </div>

            <div class="form-group">
                <label for="pwd">Contraseña</label>
                <i class="glyphicon glyphicon-lock"></i><input type="password" class="form-control" required style="width: 300px" name="pwd" id="pwd">
            </div>

            <br />

            <button type="submit" style="width: 200px;" class="btn btn-success">Entrar</button>                  
        
        </form> 
        
        <br />
     
        <a href="/"><button type="submit"  style="width: 200px;" class="btn btn-danger">Regresar</button></a>

        <br />
        <br />

        <img src="../../www/images/IPN.png" style="width: 200px; height: 200px;" alt="Login" />
            
        <br />
        <br />
                
        <div class="alert alert-danger" style="width: 70%;">
            <strong>Si olvidaste tu contraseña</strong> solicitar el reinicio de su clave al: <strong> Presidente de Academia</strong>
        </div>

        <div class="alert alert-danger" style="width: 70%;">
            <strong>Recuerda</strong> que para poder acceder, es necesario que el presidente de academia haya registrado previamente tu cuenta.
        </div>
                
    </center>
</div>