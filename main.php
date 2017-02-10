<?php
    include("header.php");

    $messages = array();

    if (!isset($_GET["artiest"]) && !isset($_GET["album"])) {
        $messages[] = "Je moet eerst het formulier invullen";
    } else if (strlen($_GET["artiest"]) < 2 || strlen($_GET["artiest2"]) < 2 || strlen($_GET["artiest3"]) < 2) {
        $messages[] = "De naam van de artiesten moet minimaal 2 letters bevatten";
    } else if (strlen($_GET["album"]) < 2 || strlen($_GET["album2"]) < 2 || strlen($_GET["album3"]) < 2) {
        $messages[] = "De naam van het album moet minimaal 2 letters bevatten";
    }

    if (count($messages) > 0) {
        $html = "<ul>";
        foreach ($messages as $message) {
            $html .= "<li>" . $message . "</li>";
        }
        $html .= "</ul>";
        echo $html;
    } else {
        echo "Je favoriete artiesten: " . "<br>" . $_GET["artiest"] . "<br>" . $_GET["artiest2"] . "<br>" . $_GET["artiest3"] . "<br><br>";
        echo "De laatste albums: " . "<br>" . "\"" . $_GET["album"] . "\"" . "<br>" . "\"" . $_GET["album2"] . "\"" . "<br>" . "\"" . $_GET["album3"] . "\"" . "<br>";
    }


?>

<?php

    include("footer.php");
?>