<?php include 'header.php';?>
<form  action="add_usuario.php" id="form_cadastro" method="POST">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <div class="container text-center"><!-- formlário cadastro -->
        <div class="form-row">
            <div class="col-md-6">

                <div class="col-md-7">
                    <label for="exampleAccount">Nome</label>
                    <input type="text" action="" name="usuario" class="form-control" id="exampleAccount" placeholder="nome" required>
                </div>

                <div class="col-md-7">
                    <label for="passwd">Senha</label>
                    <input type="password" name="senha" class="form-control" id="passwd" placeholder="Password" required>
                </div>

                <div class="col-md-7">
                    <label for="confirm_passwd">Confirmar Senha</label>
                    <input type="password" name="confirm-senha" class="form-control" id="confirm_passwd" placeholder="Confirm Password" required>
                    <?php if (isset($_SESSION['flash'])): ?>
                        <span><?=$_SESSION['flash']?></span>
                        <?php unset($_SESSION['flash']) ?>
                    <?php endif ?>
                    <div class="col-md-7"> 
                     <label for="promoter">Você e promoter?</label>
                    <select  class="form-control" name="promoter">
                        <option  value="default">Selecionar</option>
                        <option  value="sim">Sim</option>
                        <option  value="nao">Não</option>
                    </select>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="button" align="center">
        <div class="col-md-5">
            <button style=" position: absolute;  top:6px; left:580px;" type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {
        var password;
        var confirm_password;
        $('#passwd').blur(function() {
            password = $(this).val();
        });

        $('#confirm_passwd').blur(function() {
            confirm_password = $(this).val();
        });

        $('#form_cadastro').submit(function() {
                // e.preventDefault();
                password = $('input[name=senha]').val();
                confirm_password = $('input[name=confirm-senha]').val();
                if (password == confirm_password) {
                    $(this).submit();
                } else {
                    alert("Senhas diferentes");
                    return false;
                }
            });
    });

</script>
<?php include "rodape.php" ; ?>