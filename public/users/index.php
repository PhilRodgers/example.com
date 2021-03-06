<?php
include '../../core/db_connect.php';
//require '../../core/session.php';

require '../../core/bootstrap.php';

checkSession();

//Build the page metadata
$meta = [];
$meta['description'] = "MicroTrain2101 Users";
$meta['keywords'] = "users, MicroTrain2101, user";

$content=null;
$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"view.php?id={$row['id']}\">{$row['first_name']}
    {$row['last_name']}</a>" . '<br />';

}

$content .= <<<EOT
<br />
<div class="form-group">
    <a href="add.php" class="btn btn-primary">New User</a>
</div>
EOT;

include '../../core/layout.php';