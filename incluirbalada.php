<?php include 'header.php';?>

<form action="add_usuario.php" method="POST">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
<div class="container text-center"><!-- formlário cadastro -->
    <div class="form-row mt-4">
        <div class="col-sm-5 pb-3">
            <label for="exampleAccount">Nome</label>
            <input type="text" action="" name="usuario" class="form-control" id="exampleAccount" placeholder="nome" required>
        </div>
    </div>

    <div class="form-row mt-4">
        <div class="col-sm-5 pb-3">
            <label for="exampleAccount">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleAccount" placeholder="Password" required>
        </div>
    </div>

    <div class="form-row mt-4">
        <div class="col-sm-5 pb-3">
            <label for="exampleCtrl"><i class="fas fa-at"></i>Email</label>
            <input type="email" action="" name="email" class="form-control" id="exampleCtrl" placeholder="exjoao123@gmail.com" required>
        </div>
    </div>
        <div class="form-row mt-4">
            <div class="col-sm-5 pb-3">
            <label for="exampleSt">Cidade</label>
            <select name="estado" class="form-control" id="exampleSt">
                <option>selecionar</option>
                <option>Recife-PE</option>
                <option>olinda-PE</option>
                <option>Paulista-PE</option>
                <option>Abreu e Lima-PE</option>
                 <option>Igarassu-PE</option>
             
            </select>
        </div>
    </div>
</div>
    <div class="button" align="center">
            <div class="col-sm-5 pb-3">
            <button style=" position: absolute; left:450px; top:-8px;"  type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

<?php include "rodape.php" ; ?>