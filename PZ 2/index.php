<?php
if(isset($_GET["search"])) {
    $search = htmlspecialchars($_GET["search"]);
    $key1 = "AIzaSyB5d82gEJ68JHBbrSPyBKeRAhRN8VayZHY";
    $var1cx_c = "86046039f24644fc1";
    $url = "https://www.googleapis.com/customsearch/v1?key=$key1&cx=$var1cx_c&q=$search";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultJson = curl_exec($ch);
    curl_close($ch);
    $items = json_decode($resultJson, true)["items"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>My sites</h2>
<form method="GET" action="/PZ2/index.php">
    <label for="search">Search:</label>
    <input type="text" id="search" name="search" value=""><br><br>
    <input type="submit" value="Submit">
</ form >
<?php
if(!empty($items)) {
    foreach ($items as $item) {
        echo "<p>".$item['title']."</p>";
        echo "<a href='".$item['link']."'>".$item['link']."</a>";
        echo "<br>";
        echo $item['htmlTitle'];
    }
}
?>
</body>
</html>