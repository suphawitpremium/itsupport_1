<?php
include 'db.php';

if ($_GET['type'] == 'cause' && isset($_GET['title_id'])) {
  $id = intval($_GET['title_id']);
  $result = $conn->query("SELECT * FROM cause_it WHERE title_id = $id");
  while ($row = $result->fetch_assoc()) {
    echo "<div class='option' onclick='selectCause({$row['id']}, this)'>{$row['title']}</div>";
  }
  exit;
}

if ($_GET['type'] == 'solution' && isset($_GET['cause_id'])) {
  $id = intval($_GET['cause_id']);
  $result = $conn->query("SELECT * FROM solution WHERE rs_id = $id");
  while ($row = $result->fetch_assoc()) {
    echo "<div class='option'><strong>{$row['title']}</strong><br><small>{$row['text']}</small></div>";
  }
  exit;
}
