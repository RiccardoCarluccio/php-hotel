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
  <div class="container">
    <form action="index.php" method="GET">
      <div class="filter">
        <input type="checkbox" name="parking" id="parking" value="checked">
        <label for="parking">Has a parking lot</label>
      </div>
      <div class="filter">
        <select name="review" id="review">
          <option selected value="default">Choose a rating</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>

      <button type="submit">Submit</button>
      <button type="reset">Clear options</button>
    </form>

    <table>
      <thead>
        <tr>
          <th>Hotel Name</th>
          <th>Parking</th>
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
            <td class="text-centered text-white"><?php echo $hotel['parking'] ? 'Yes' : 'No' ?></td>
            <td class="text-centered text-white"><?php echo $hotel['vote'] ?></td>
            <td class="text-centered text-white"><?php echo $hotel['distance_to_center'] ?> km</td>
          <tr>

      <?php
        }
      ?>
      
      </tbody>
    </table>
  </div>

  <div class="container">
    <div>Results</div>
    <table>
      <thead>
          <tr>
            <th>Hotel Name</th>
            <th>Parking</th>
            <th>Customer Vote</th>
            <th>Distance to Center</th>
          <tr>
      </thead>

      <tbody>
      <?php
        foreach($hotels as $hotel) {  
          if(!$_GET ||
            $_GET['parking'] == 'default' ||
            $_GET['review'] == 'default') {
      ?>

        <tr>
          <td><?php echo $hotel['name'] ?></td>
          <td class="text-centered text-white"><?php echo $hotel['parking'] ? 'Yes' : 'No' ?></td>
          <td class="text-centered text-white"><?php echo $hotel['vote'] ?></td>
          <td class="text-centered text-white"><?php echo $hotel['distance_to_center'] ?> km</td>
        <tr>

      <?php
          }
        }
      ?>
      
      </tbody>
    </table>
  </div>
</body>
</html>

<!-- oklch(45.59% 0.131 255.18) -->