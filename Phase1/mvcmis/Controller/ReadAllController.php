<?php
require_once 'Model/ReadClass.php';
$read = new ReadClass();
$result = $read->readAll();
if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Name</th>";
    echo "<th>Date</th>";
    echo "<th>Address</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>";
        echo "<a href='View/read.php?id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'>
							<span class='glyphicon glyphicon-eye-open'></span>
						  </a>";
        echo "<a href='View/update.php?id=" . $row['id'] . "' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
        echo "<a href='View/delete.php?id=" . $row['id'] . "' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    mysqli_free_result($result);
} else {
    echo "<p class='lead'><em>No records were found.</em></p>";
}
?>