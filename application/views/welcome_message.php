<p> This is our home page!</p>

<table class="table table-responsive">
    <thead>
    <th>Name</th>
    <th>Age</th>
    </thead>
    <tbody>
        <?php foreach ($users  as $user){
            echo '<tr><td>' . $user['name'] . '</td>' ;
            echo '<td>' . $user['age'] . '</td></tr>' ;
        }?>
    </tbody>
</table>
<h2>Using Php Template Tag</h2>
<table class="table table-responsive">
    <thead>
    <th>Name</th>
    <th>Age</th>
    </thead>
    <tbody>
        <?php foreach ($users  as $user) : ?>
           <tr><td> <?php echo $user['name'] ?></td>
           <td> <?php echo $user['age'] ?></td></tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h2>Using Smarty Template Tag</h2>
<table class="table table-responsive">
    <thead>
    <th>Name</th>
    <th>Age</th>
    </thead>
    <tbody>
        {foreach $users  as $user}
           <tr><td>{$user['name']}</td>
           <td>{$user['age']}</td></tr>
        {/foreach}
    </tbody>
</table>
