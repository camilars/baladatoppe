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
            <label for="exampleSt">Estado</label>
            <select name="estado" class="form-control" id="exampleSt">
                <option>selecionar</option>
                <option>Acre-AC</option>
                <option>Alagoas-AL</option>
                <option>Amapá-AP</option>
                <option>Amazonas-AM</option>
                <option>Bahia-BA</option>
                <option>Ceará-CE</option>
                <option>Distrito Federal-DF</option>
                <option>Espírito Santo-ES</option>
                <option>Goiás-GO</option>
                <option>Maranhão-MA</option>
                <option>Mato Grosso-MT</option>
                <option>Mato Grosso do Sul-MS</option>
                <option>Minas Gerais-MG</option>
                <option>Pará-PA</option>
                <option>Paraíba-PB</option>
                <option>Paraná-PR</option>
                <option>Pernambuco-PE</option>
                <option>Piauí-PI</option>
                <option>Rio de Janeiro-RJ</option>
                <option>Rio Grande do Norte-RN</option>
                <option>Rio Grande do Sul-RS</option>
                <option>Rondônia-RO</option>
                <option>Roraima-RR</option>
                <option>Santa Catarina-SC</option>
                <option>São Paulo-SP</option>
                <option>Sergipe-SE</option>
                <option>Tocantins-TO</option>
            </select>
        </div>
    </div>
</div>
    <div class="button" align="center">
            <div class="col-sm-5 pb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>