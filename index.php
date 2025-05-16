<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Arief Store</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
    rel="stylesheet"
    crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  require_once "includes.php";
  $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
  $uri = trim($uri, "/");
  $slugs = [];

  $sql = "SELECT * FROM game_list";
  $result = $koneksi->query($sql);

  if ($result) {
    while ($row = $result->fetch_assoc()) {
      $slugs[] = "games/" . $row["slug"];
    }
  }
  if (in_array($uri, $slugs)) {
    echo gamePage($uri);
  } else {
    switch ($uri) {
      case "":
        echo homePage();
        break;
      case "about":
        echo aboutPage();
        break;
      default:
        echo notFoundPage();
        break;
    }
  }
  ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
</body>

</html>