<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 text-center text-dark p-4 rounded desenfoque">
            <div class="container">
                <h2 class="text-left">Login</h2>
                <br>
                <div class="row">
                    <div class="text-dark col-sm-8 offset-sm-2">
                        <form class="form-signin" method="post" action="actions/login.act.php">
                            <h5 class="form-signin-heading text-left">Bienvenido de nuevo!</h5><br>
                            <label for="inputEmail" class="sr-only">Email</label>
                            <input type="email" id="email_login" name="email_login" class="form-control frm_login_email" placeholder="Email" required autofocus>
                            <label for="inputPassword" class="sr-only">Contraseña</label><br>
                            <input type="password" id="login_password" name="login_password" class="form-control frm_login_pass" placeholder="Contraseña" required>
                            <br>
                            <button class="btn btn-lg btn-dark btn-block" type="submit">Entrar</button>
                            <br>
                            <a class="btn btn-lg btn-primary btn-block" href="index.php?page=new">Registrarse</a>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>