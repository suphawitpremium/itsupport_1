<?php
include 'db.php';

if (!isset($_GET['cause_id'])) {
    echo "ไม่พบรหัสสาเหตุของปัญหา";
    exit;
}

$cause_id = intval($_GET['cause_id']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>วิธีการแก้ไขปัญหา</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        h1 {
            color: #5a2ca0;
            text-align: center;
        }
        .solution {
            max-width: 800px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }
        .solution img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .solution-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .solution-text {
            white-space: pre-wrap;
            color: #555;
        }
    </style>
</head>
<body>

<h1>วิธีการแก้ไขปัญหา</h1>

<?php
$sql = "SELECT * FROM solution WHERE rs_id = $cause_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $title = htmlspecialchars($row['title']);
        $text = htmlspecialchars($row['text']);
        $photo = htmlspecialchars($row['photo']);

        echo "<div class='solution'>";
        echo "<div class='solution-title'>$title</div>";
        if (!empty($photo)) {
            echo "<img src='images/$photo' alt='รูปวิธีแก้'>";
        }
        echo "<div class='solution-text'>$text</div>";
        echo "</div>";
    }
} else {
    echo "<p style='text-align:center;'>ไม่พบวิธีการแก้ปัญหา</p>";
}
$conn->close();
?>

</body>
</html>
