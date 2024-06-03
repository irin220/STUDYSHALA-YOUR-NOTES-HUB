<link rel="stylesheet" href="css/search_style.css">

<?php
include ("inc/db.php");

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT distinct(sub_name) FROM subjects WHERE sub_name like '%$search%'";
    $result = $con->query($sql);
    ?>
    <div class="container">
        <?php
        $output = "<ul class='search'>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $output .= "<li class='list-group-item'>{$row['sub_name']}</li>";
            }
        } else {
            $output .= "<li class='list-group-item'>Subject Not Found</li>";
        }

        $output .= "</ul>";
        ?>
    </div>
    <?php
    echo $output;
}
?>