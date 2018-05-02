<?php
include 'init-secure.php';

$data = file("Task.csv");
$data = array_map(function($el) {
$task = explode(",", $el);
    return ["name" => $task[0], "category" => $task[1], "status" => $task[2]];
}, $data);

$tarefa = array_filter($data, function($el) {
    return $el["status"] == "done";
});

$done_tasks = array_filter($data, function($el) {
    return $el['status'] == 'done';
});

$categories = file("categories.csv");
sort($categories);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

<link rel="stylesheet" type="text/css" href="csslist.css">
</head>
<body>
    <h1>Opiniões da baladas</h1>
    <p>Usuário: <?= currentUser() ?> | <a href="logout.php">Sair</a></p>
    <table>
        <tr>
            <th>Local</th>
            <th>Classificação das baladas</th>
            <th>Excluir comentario</th>
        </tr>
           <?php
                $categories=file('categories.csv');
                $tasks= file('Task.csv');
         foreach ($tasks as $key =>$task): ?>
            <tr>
                <?php $task = explode(',', $task);?>
                <td><?= $task[0] ?></td>
                <td><?= $task[1] ?></td>
                <td class="action">
                     <a href="delete.php?id=<?php echo $key ?>">&#10004;</a>
                </td>
            </tr>
        <?php endforeach ?>
        <?php foreach ($tarefa as $key =>$task): ?>
            <tr>
                <td><?= $task['name'] ?></td>
                <td><?= $task['category'] ?></td>
                <td class="action">
                <td><a href="delete.php?id=<?php echo $key ?>"></a></td>
                </td>
            </tr>
        <?php endforeach ?>
        <?php foreach ($done_tasks as $key => $task): ?>
            <tr>
                <td class="done"><?= $task['name'] ?></td>
                <td class="done"><?= $task['category'] ?></td>
                <td class="action">
                    <a href="delete.php?id=<?php echo $key ?>">&#10007;</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <form action="addTask.php" method="POST">
        <table>
            <tr>
                <td><input type="text" name="title" placeholder="Tarefa" required></td>
                <td>
                    <select name="category" required>
                        <option disabled="" selected>Classificação</option>
                        <option disabled="">--</option>
                        <?php foreach ($categories as $categorie): ?>
                            <option value="<?= $categorie ?>"><?= $categorie ?></option>
                        <?php endforeach ?>
                    </select>
                </td>
                <td class="action"><input type="submit" value="ok"></td>
            </tr>
        </table>
    </form>
    <form action="addCategory.php" method="POST">
        <input type="text" name="category" placeholder="adicionar Classificação">
        <input type="submit" value="ok">
    </form>
</body>
</html>