@extends('welcome')
@section('contenido-principal')
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-image">
                    <img src="images\usuario.png">
                </div>
                <form action="" class="col-12">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group" id="rut-group">
                        <input type="text" class="form-control" placeholder="Rut">
                    </div>
                    <div class="form-group" id="edad-group">
                        <input type="text" class="form-control" placeholder="dd-mm-aaaa">
                    </div>
                    <div class="form-group" id="email-group">
                        <input type="email" class="form-control" placeholder="Correo electronico">
                    </div>
                    <div class="form-group" id="pass-group">
                        <input type="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Registrarse</button>
                </form>
                <div class="col-12 forgot">
                  
                </div>
            </div>
        </div>
    </div>
@endsection