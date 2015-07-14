<?php

if (isset($_POST['submit'])) {

    $mysqli = new mysqli('localhost', 'root', '', 'dbtest');

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }




    $stmt = $mysqli->prepare("UPDATE users SET level = ? WHERE user = ? ");
    $stmt->bind_param('ss', $level, $user);   // bind $sample to the parameter

    $level = isset($_POST['level'])
              ? $_POST['level']
              : '';

    /* execute prepared statement */
    $stmt->execute();

    printf("%d Row inserted.\n", $stmt->affected_rows);

    /* close statement and connection */
    $stmt->close();

    /* close connection */
    $mysqli->close();
}

?>