<?php
// Name: Misael Diaz
// Date: November 1, 2026
// Project: Building a Database with Stored Procedures

$studentName = "Misael Diaz";
$projectDate = "November 1, 2026";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Building a Database with Stored Procedures</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <main>
        <h1>Building a Database with Stored Procedures</h1>

        <p>Name:
            <?php echo htmlspecialchars($studentName); ?>
        </p>

        <p>Date:
            <?php echo htmlspecialchars($projectDate); ?>
        </p>

        <p>
            This project demonstrates how to create
            database tables, relationships, views,
            and stored procedures using MySQL.
        </p>

        <h2>Database Project</h2>

        <p>
            The database contains student, class,
            and enrollment information.
        </p>
    </main>
</body>
</html>
