<?php
include "crud.php";

$vws = getVuurwerk();

echo "<table>";
foreach ($vws as $vw)
{
    echo "<tr>";
    echo "<td>". $vw["id"] . "</td>";
    echo "<td>". $vw["vuurwerkartikel"] . "</td>";
    echo "<td>". $vw["land"] . "</td>";
    echo "<td>";
    echo "<a href=\"update.php?id=$vw[id]\">";
    echo "update</a></td>";

    echo "</tr>";
}
echo "</table>";
?>
