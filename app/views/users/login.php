<?php require APPROOT . '/views/inc/form_header.php' ?>
<body>
<div class="row">
    <div class="col-md-5 mx-auto mt-5">
        <div class="card card-body border-muted bg-transparent text-dark mt-5">
        <div class="card-header border-dark">
        <img src="<?php echo URLROOT;?>/images/logo_form.png"  class="logoimg">  
        </div>
        <div class="mt-2">
        <?php flash('register_success'); ?>
        </div>
         <h2 class="card-title"><i class="fas fa-sign-in-alt"style="color:#cc3300;"></i> Login</h2>
            <p>Preecha o formulário abaixo para entrar no sistema</p>
            <form action="<?php echo URLROOT; ?>/users/login" method="post">

            <div class="form-group">
                <label for="email">Email: <sup class="text-danger">*</sup></label>
                <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email'];?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Senha: <sup class="text-danger">*</sup></label>
                <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password'];?>">
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="card-footer">
            <div class="row">
                <div class="col mt-2">
                    <input type="submit" value="Entrar" class="btn btn-block" style="width:300px;background-color:#cc3300;color:#fff;">
                </div>
                <div class="col">
                    <a href="<?php echo URLROOT; ?>/users/register/" class="btn btn-block text-dark">Ainda não tem uma conta? <strong>cadastre-se!</strong></a>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>

</body>
</html>