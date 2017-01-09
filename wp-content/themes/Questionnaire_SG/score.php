<?php

session_start();

$host = "localhost";
$dbName = "sg_new";
$user = "root";
$password = "root";

try
{
	$db = new PDO("mysql:host=".$host.";dbname=".$dbName.";charset=utf8", $user, $password);
}
catch(Expection $e)
{
	die("Erreur : ".$e->getMessage());
}
?>

<?php

	$score = htmlspecialchars($_POST["score_hide"]);
/*	$request = $db->prepare("SELECT id FROM score WHERE score_obtenu LIKE :score_obtenu");
                $request->execute
                (
                    array
                    (
                        "score_obtenu" => $score
                    )
                );*/
    $request = $db->prepare("INSERT INTO score (score_obtenu, user_id) VALUES (:score_obtenu, 0)");
                    $request->execute
                    (
                        array
                        (
                            "score_obtenu" => $score
                        )
                    );
    header('Location: index.php');
?>