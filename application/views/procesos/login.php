<?php echo form_open('Login/login'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Por favor inicie sesion</h3>
                </div>
                <div class="panel-body">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Recordarme
                            </label>
                            
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <input type="submit" name="btnInicio" value="Login" class="btn btn-lg btn-success btn-block">
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>