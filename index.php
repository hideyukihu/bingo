<?php
$nums = [];

for($i = 0; $i < 5; $i++) {
  $col = range($i * 15 + 1, $i * 15 + 15);
  shuffle($col);
  $nums[$i] = array_slice($col, 0, 5);

}
var_dump($nums);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bingo</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <table>
      <tr>
        <th>B</th>
        <th>I</th>
        <th>N</th>
        <th>G</th>
        <th>O</th>
      </tr>
      <tr>
        <th>1</th>
        <th>1</th>
        <th>1</th>
        <th>1</th>
        <th>1</th>
      </tr>
    </table>
  </div>
</body>

</html>