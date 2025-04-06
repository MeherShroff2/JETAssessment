<?php
$URL = "https://uk.api.just-eat.io/discovery/uk/restaurants/enriched/bypostcode/EC4M7RF";
$response = file_get_contents($URL);

if($response == false){
    die("Error: Could not retrieve data from the API");
}
$data = json_decode($response, true);
if(!isset($data['restaurants'])){
    die("Error: 'restaurants' data not found in API response");
}
$restaurants_data = $data['restaurants'];
?>

<!DOCTYPE html>
<html lang = "en">
    <head> 
        <meta charset = "UTF-8">
        <title> Just Eat Restaurants - EC4M 7RF</title>
        <link rel = "stylesheet" href="stylesheet.css">
</head>
<body>
    <h1> Restaurants in EC4M 7RF </h1>
    <div id = "restaurants-list">
        <?php foreach(array_slice($restaurants_data,0,10) as $restaurant): ?>
            <div class = "restaurant-card">
                <strong>Name:</strong> 
                <?= htmlspecialchars($restaurant['name']) ?><br>
                <strong>Cuisines:</strong>
                <?= implode(", ", array_map(fn($c) => $c['name'], $restaurant['cuisines']))?><br>
                <strong>Rating:</strong>
                <?= $restaurant['rating']['starRating'] ?? 'N/A' ?><br>
                <strong>Address:</strong>
                <?php
                $firstline = $restaurant['address']['firstLine'] ?? '';
                $postal = $restaurant['address']['postalCode'] ?? '';
                echo htmlspecialchars(trim($firstline . ', ' . $postal)); 
                ?>
        </div>
        <?php endforeach; ?>
        </div>        
</body>
</html>