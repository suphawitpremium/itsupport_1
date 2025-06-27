<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>ระบบช่วยเหลือ IT</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- ✅ ชื่อเว็บไซต์ -->
  <div class="site-title">IT SUPPORT - SRTET</div>

  <div class="main-layout">
    
    <!-- ✅ แถบด้านซ้าย: แสดงหัวข้อทั้งหมดแนวตั้ง -->
    <div class="sidebar">
      <h2>เลือกหัวข้อ</h2>
      <?php
      $result = $conn->query("SELECT * FROM title_it");
      while ($row = $result->fetch_assoc()) {
        echo "
          <div class='step-box'>
            <div class='option' onclick='selectTitle({$row['id']}, this)'>{$row['title']}</div>
          </div>
        ";
      }
      ?>
    </div>

    <!-- ✅ พื้นที่ฝั่งขวาสำหรับแสดงสาเหตุและวิธีแก้ไข -->
    <div class="flow-container" id="flowRoot"></div>

  </div>

  <script src="script.js"></script>
</body>
</html>
