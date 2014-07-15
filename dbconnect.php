<?
$password = 'eugens mom';
$connection = mysql_connect ("localhost",
    "eugen", "$password")
    or die ("keine Verbindung möglich.
    Benutzername oder Passwort sind falsch");

mysql_query("SET NAMES 'utf8'");

mysql_select_db("tsb")
    or die ("Die Datenbank existiert nicht.");
?>
