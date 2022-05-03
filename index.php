<?php
require __DIR__.'/vendor/autoload.php';

use App\Conn\ConnectionFactory;
use App\Conn\MySQL;
use App\Model\User;
use App\DAO\UserDAO;

$conn = ConnectionFactory::create(new MySQL());
$dao = UserDAO::createFromPDO($conn);

if(isset($_GET['type']) && $_GET['type'] == 'delete') {
    $user_delete = $dao->getById($_GET['id']);
    $user = new User(
            $user_delete['name'],
            $user_delete['last_name'],
            $user_delete['old'],
            $user_delete['id'],
    );
    $dao->delete($user);
}

if(isset($_GET['type']) && $_GET['type'] == 'update') {
    $user_update = $dao->getById($_GET['id']);

    echo "<form action='http://localhost:8080' method='post'>
     <p>Nome: <input type='hidden' name='id' value='".$user_update['id']."'/></p>
     <p>Nome: <input type='text' name='name' value='".$user_update['name']."'/></p>
     <p>Sobrenome: <input type='text' name='last_name' value='".$user_update['last_name']."'/></p>
     <p>Idade: <input type='text' name='old' value='".$user_update['old']."'/></p>
     <p><input type='submit'/></p>
    </form>";
}

if(isset($_GET['type']) && $_GET['type'] == 'create') {

    echo "<form action='http://localhost:8080' method='post'>
     <p>Nome: <input type='text' name='name'/></p>
     <p>Sobrenome: <input type='text' name='last_name'/></p>
     <p>Idade: <input type='text' name='old'/></p>
     <p><input type='submit'/></p>
    </form>";
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['id'])) {
        $user = new User(
            $_POST['name'],
            $_POST['last_name'],
            $_POST['old'],
            $_POST['id'],
        );
        $dao->update($user);
    } else {
        $user = new User(
            $_POST['name'],
            $_POST['last_name'],
            $_POST['old'],
            0
        );
        $dao->create($user);
    }

}

$users = $dao->getAll();
?>
<style>
    table {
        width: 100%;
    }

    table, th, td {
        border: 1px solid;
    }
</style>

<a href="http://localhost:8080?type=create">Criar um novo</a>
<br/>
<br/>
<br/>

<table style="border: 1px solid">
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Idade</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $item) {?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['name'] ?></td>
        <td><?= $item['last_name'] ?></td>
        <td><?= $item['old'] ?></td>
        <td><a href="http://localhost:8080?type=update&id=<?= $item['id'] ?>">Alterar</a></td>
        <td><a href="http://localhost:8080?type=delete&id=<?= $item['id'] ?>">Deletar</a></td>
    </tr>
    <?php }?>
    </tbody>
</table>
