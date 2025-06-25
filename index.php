<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เลือกหัวข้อปัญหา</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #111;
      color: #fff;
    }

    h1 {
      text-align: center;
      font-size: 36px;
      font-weight: 600;
      margin: 60px 0 30px;
      color: #fff;
    }

    .container {
      max-width: 1240px;
      margin: 0 auto;
      padding: 0 30px 80px;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 40px;
    }

    .card {
      background-color: #1a1a1a;
      border-radius: 14px;
      overflow: hidden;
      text-decoration: none;
      color: #fff;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 24px rgba(0,0,0,0.4);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-body {
      padding: 20px;
    }

    .title {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 6px;
    }

    .subtitle {
      font-size: 13px;
      color: #aaa;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 26px;
      }
    }
  </style>
</head>
<body>

  <h1>หมวดหมู่ปัญหา IT</h1>

  <div class="container">
    <?php
    $sql = "SELECT * FROM title_it";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $icon = htmlspecialchars($row['icon']);
            $title = htmlspecialchars($row['title']);
            $id = $row['id'];
            $imgSrc = !empty($icon) ? "images/$icon" : "images/default.png";

            echo "
            <a href='causes.php?title_id=$id' class='card'>
              <img src='$imgSrc' alt='$title'>
              <div class='card-body'>
                <div class='title'>$title</div>
                <div class='subtitle'>ดูรายละเอียดปัญหา</div>
              </div>
            </a>";
        }
    } else {
        echo "<p style='text-align:center;'>ไม่พบหัวข้อปัญหา</p>";
    }

    $conn->close();
    ?>
  </div>

</body>
</html>
