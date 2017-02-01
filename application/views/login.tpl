<h2>Using Smarty Template Tag</h2>

<a href="/user/view/{$id}">User</a>
<a href="/user/view/<?php echo $id ?>">User</a>
<a href="/user/view/<? id ?>">User</a>

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
