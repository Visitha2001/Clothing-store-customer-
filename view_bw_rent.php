<?php
include './includes/connection.php';

$db = new connection();
$conn = $db->getConnection();

$sql = "SELECT * FROM rented_clothes";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Cloth Name</th>
                <th>Material</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sizes</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>";

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['cloth_name']}</td>
                <td>{$row['material']}</td>
                <td>{$row['description']}</td>
                <td>{$row['category']}</td>
                <td>{$row['price']}</td>
                <td>{$row['quantity']}</td>
                <td>{$row['sizes_BW']}</td>
                <td><img src='{$row['image_path']}' alt='Cloth Image' style='width: 50px; height: 50px;'></td>
                <td>
                    <a href='update_bw_rent.php?id={$row['id']}'>Update</a>
                    <a href='delete_bw_rent.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No clothing available.";
}

// Add your HTML and forms for delete and update actions here
?>