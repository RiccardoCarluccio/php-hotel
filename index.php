<?php
$hotels = [
  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP Hotel</title>
</head>
<body>
  <div class="main-container">
    <form action="index.php" method="GET">
      <div class="filter">
        <input type="checkbox" name="parking" id="parking">
        <label for="parking">Has a parking lot</label>
      </div>
      <div class="filter">
        <select name="review" id="review">
          <option value="">Choose a rating</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
    </form>

    <table>
      <thead>
        <tr>
          <th>Hotel Name</th>
          <th>Parking Spots</th>
          <th>Customer Vote</th>
          <th>Distance to Center</th>
        <tr>
      </thead>

      <tbody>
      <?php
        foreach($hotels as $hotel) {    
      ?>     

        <tr>
          <td><?php echo $hotel['name'] ?></td>
          <td class="text-centered"><?php echo $hotel['parking'] ?></td>
          <td class="text-centered"><?php echo $hotel['vote'] ?></td>
          <td class="text-centered"><?php echo $hotel['distance_to_center'] ?> km</td>
        <tr>

      <?php
        }
      ?>
      
      </tbody>
    </table>
  </div>
</body>
</html>