<h1>Welcome</h1>

<p><?= $title ?></p>

<?php if(isset($_SESSION['user'])): ?>
<form action="/authenticate" method="POST">
    <input type="hidden" name="_method" value="DELETE"/>
    <button type="submit">Logout</button>
</form>
<?php endif ?>