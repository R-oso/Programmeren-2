<?php

date_default_timezone_set('Europe/Amsterdam');

$date = date('a');
$otherDate = date('H');
$eveningDay = "Goedemorgen";

if ($otherDate > "07" and $otherDate < "12") {
    $eveningDay = "Goedemorgen";
} elseif ($otherDate > "12" && $otherDate < "19") {
    $eveningDay = "Goedemiddag";
} elseif ($otherDate > "19" && $otherDate < "07") {
    $eveningDay = "Goedenavond";
}

echo $eveningDay;

//Multi dimensional array with the music collection data
$musicAlbums = array(
    1 => array(
        "albumName" => "Poop shIt gAng",
        "artist" => "Naga",
        "releaseDate" => "4 Januari",
        "tracks" => "7",
        "genre" => "Hiphop",
        "albumCover" => "https://3xlbea253907ff1y7v6f5yyv-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/brown-poop-300x267.png"
    ),
    2 => array(
        "albumName" => "Poop shIt gAng",
        "artist" => "Naga",
        "releaseDate" => "4 Januari",
        "tracks" => "7",
        "genre" => "Hiphop",
        "albumCover" => "https://3xlbea253907ff1y7v6f5yyv-wpengine.netdna-ssl.com/wp-content/uploads/2020/01/brown-poop-300x267.png"
    ),

)
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<h1>Music Collection</h1>
<hr/>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; My Collection</td>
    </tr>
    </tfoot>
    <tbody>
    <tb class="table">
    <?php foreach ($musicAlbums as $value => $musicAlbum): ?>
        <tr>
            <td class="table"> <?= $value ?> </td>
            <td class="table"> <?= $musicAlbum['albumName'] ?> </td>
            <td class="table2"> <?= $musicAlbum['artist'] ?> </td>
            <td class="table"> <?= $musicAlbum['releaseDate'] ?> </td>
            <td class="table"> <?= $musicAlbum['tracks'] ?> </td>
            <td class="table2"> <?= $musicAlbum['genre'] ?> </td>
            <td class="table"> <img src="<?= $musicAlbum['albumCover'] ?>" width="100" height="100"></td>
        </tr>
    <?php endforeach; ?>
    </tb>
    </tbody>
</table>
</body>
</html>
