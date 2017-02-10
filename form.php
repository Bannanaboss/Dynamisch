<?php
	include("header.php");
?>

<form action="main.php" method="get">
    Favoriete muziek-artiesten:<br>
    <input type="text" name="artiest"><br>
    <input type="text" name="artiest2"><br>
    <input type="text" name="artiest3"><br><br>
    Laatste albums:
    <input type="text" name="album"><br>
    <input type="text" name="album2"><br>
    <input type="text" name="album3"><br><br>
    <input type="submit">
</form>

<?php
    include("footer.php");
?>
