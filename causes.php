<?php
include 'db.php';

if (!isset($_GET['title_id'])) {
    echo "ไม่พบรหัสหัวข้อปัญหา";
    exit;
}

$title_id = intval($_GET['title_id']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>เลือกสาเหตุของปัญหา</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #5a2ca0;
        }
        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .cause-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: white;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #ccc;
            text-decoration: none;
            width: 180px;
            transition: 0.3s;
        }
        .cause-button:hover {
            border-color: #5a2ca0;
            box-shadow: 0 0 10px #aaa;
        }
        .cause-button img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
            object-fit: contain;
        }
        .cause-button span {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<h1>เลือกสาเหตุของปัญหา</h1>

<div class="button-container">
<?php
$sql = "SELECT * FROM cause_it WHERE title_id = $title_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $photo = htmlspecialchars($row['photo']);
        $title = htmlspecialchars($row['title']);
        $id = $row['id'];

        echo "<a class='cause-button' href='solution.php?cause_id=$id'>";
        if (!empty($photo)) {
            echo "<img src='images/$photo' alt='photo'>";
        } else {
            echo "<img src='images/default.png' alt='default'>";
        }
        echo "<span>$title</span>";
        echo "</a>";
    }
} else {
    echo "ไม่พบสาเหตุของปัญหานี้";
}
$conn->close();
?>
</div>

</body>
</html>
