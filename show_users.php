<div class="users-list">
    
<?php

$sql = "SELECT * FROM User";
$res = $conn->query($sql);
while ($row = $res->fetch_assoc()) {
    echo "<div class='users'>

    <label class='users__title'>Nome:</label>
    <label>{$row["name"]}</label>
    <label class='users__title'>Email:</label>
    <label>{$row["email"]}</label>
    <img src='" . ($row["sex"] === "F" ? "assets/female.png" : "assets/male.png") . "'>
    <label class='users__title'>Date:</label>
    <label>{$row["date"]}</label>
    </div>";
}
?>
</div>