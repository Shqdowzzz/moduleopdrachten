<?php

$sql = "SELECT * FROM ski_materials ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
        <th>Materials</th>
        <th>Image</th>
        <th>
            <a href='ski.php?page=toevoegen'>
                toevoegen<i class='fa fa-plus'></i>
            </a>
        </th>
      </tr>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["materials"] . "</td>";
        // echo "<td><img src='img/" . $row["img"] . "' alt='Foto van " . $row["naam"] . "' width='100'></td>";

        echo "<td><a href='ski.php?page=delete&id=" . $row["id"] . "'>delete<i class='fa fa-trash'></i></a></td>";
        // echo "<td><a href='index.php?page=toevoegen'><i class='fa fa-plus'></i></a></td>";
        echo "<td>
        <a href='ski.php?page=show&id=" . $row["id"] . "'>
            eye<i class='fa fa-eye'></i>
        </a>
      </td>";
      echo "<td><a href='ski.php?page=bewerk&id=" . $row["id"] . "'>bewerk<i class='fa fa-pencil'></i></a></td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>fout</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>