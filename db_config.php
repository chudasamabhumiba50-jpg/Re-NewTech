
<?php

try {
    $con = mysqli_connect(
        "localhost",
        "root",
        "",
        "re_new_tech"
    );

    mysqli_set_charset($con, "utf8mb4");

} catch (mysqli_sql_exception $e) {
    die("Database connection failed.");
}

?>
