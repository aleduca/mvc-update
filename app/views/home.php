<h2>Users (<?php echo count($users) ?>)</h2>

<ul>

<?php foreach ($users as $user): ?>
    <li><?php echo $user->firstName; ?> | <a href="/user/edit/<?php echo $user->id ?>">Edit</a></li>
<?php endforeach; ?>
</ul>