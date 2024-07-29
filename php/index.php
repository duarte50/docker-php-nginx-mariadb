<?php
    $hostname = "db";
    $username = "root";
    $password = "rootpassword";
    $database = "docker";

    $con = new mysqli($hostname, $username, $password, $database);

    if ($con->connect_error) {
        die("Database connection error: {$con->connect_error}");
    }

    $query = "SELECT * FROM clothes";

    $res = $con->query($query);
    $con->close();

    if ($res->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                </tr>";
        while ($row = $res->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                </tr>";
        }
        echo "</table>";
    }
