<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 text-center p-4 rounded desenfoque">
            <div class="container">
                <h2 class="text-dark text-left">Nuevo Autor</h2>
                <br>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <form role="form" action="actions/new.act.php" method="post">

                            <div class="form-group row p-3">
                                <label for="display_name" class="col-lg-2 col-form-label mr-4 text-dark">Nombre</label>
                                
                                <div class="col-lg-6 text-lett">
                                    <input type="text" class="form-control" id="display_name" name="display_name" placeholder="">
                                </div>
                            
                            </div>

                            <div class="form-group row p-3">
                                <label for="email" class="col-lg-2 col-form-label mr-4 text-dark">Email</label>
                                
                                <div class="col-lg-6 text-lett">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="">
                                </div>
                                
                            </div>

                            <div class="form-group row p-3">
                                <label for="password" class="col-lg-2 col-form-label mr-4 text-dark">Contraseña</label>
                                
                                <div class="col-lg-6 text-lett">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                                </div>
                            
                            </div>
                    
                            
                            <div class="form-group row">
                                <label for="enabled" class="col-lg-2 col-form-label text-dark">Activado</label>
                                
                                <div class="col-lg-3 text-lett">
                                    <input type="checkbox"  id="enabled" name="enabled">
                                </div>
                                
                            </div>



                            <br><br>
                            <button type="submit" class="btn btn-dark">Enviar</button>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>