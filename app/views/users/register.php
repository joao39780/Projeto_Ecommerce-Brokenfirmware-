<?php require APPROOT . '/views/inc/form_header.php' ?>
<body>
<div class="row">
    <div class="col-md-5 mx-auto mt-5">
        <div class="card card-body border-muted bg-transparent text-dark mt-5">
        <div class="card-header border-dark">
        <img src="<?php echo URLROOT;?>/images/logo_form.png"  class="logoimg">  
        </div>
         <h2 class="card-title"><i class="fas fa-edit"style="color:#cc3300;"></i>Crie uma conta</h2>
            <p>Preecha o formulário abaixo para cadastrar-se em nosso sistema</p>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">
            <div class="form-group">
                <label for="name">Nome: <sup class="text-danger">*</sup></label>
                <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name'];?>">
                <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
            </div>
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
            <div class="form-group">
                <label for="confirm_password">Confirme sua senha: <sup class="text-danger">*</sup></label>
                <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password'];?>">
                <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
            </div>
            <div class="card-footer">
            <div class="row">
                <div class="col mt-2">
                    <input type="submit" value="Cadastrar" class="btn btn-block" style="width:300px;background-color:#cc3300;color:#fff;">
                </div>
                <div class="col">
                    <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-block text-dark">Já possui uma conta? <strong>Então faça login em nosso sistema</strong></a>
                </div>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>

</body>
</html>