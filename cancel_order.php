<?php
    require_once "./Includes/connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cancel_order'])) {
        $connection = new connection();
        $conn = $connection->getConnection();

        $orderDate = $_POST['order_date'];
        $orderTime = $_POST['order_time'];

        try {
            $sql = "DELETE FROM orders WHERE order_date = :order_date AND order_time = :order_time";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':order_date', $orderDate);
            $stmt->bindParam(':order_time', $orderTime);
        
            echo "SQL Query: $sql\n";
            $stmt->execute();
        
            $rowCount = $stmt->rowCount();
            if ($rowCount > 0) {
                echo '<script>alert("Orders canceled successfully.");</script>';
            } else {
                echo '<script>alert("No orders found to cancel.");</script>';
            }
        } catch (PDOException $e) {
            echo '<script>alert("Error canceling orders: ' . $e->getMessage() . '");</script>';
        }
        
        echo '<script>window.location.href = "order_items.php";</script>';
        exit();
    }
?>
