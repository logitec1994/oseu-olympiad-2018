
<table>
    <thead>
        <tr><td>Ф.И.О</td><td>E-Mail</td><td>Уровень доступа</td></tr>
    </thead>

<?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['lastname'] ?>, <?= $user['firstname'] ?>, <?= $user['patronymic'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><?= implode(",", array_map(function($e) { return $e["role"]; }, $user['roles'])) ?></td>
    </tr>
<?php endforeach; ?>
</table>
