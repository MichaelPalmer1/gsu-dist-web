<html>
<head>
    <style type="text/css">
        th, td {
            border-top: 1px solid black;
            border-left: 1px solid black;
            text-align: center;
        }

        th:last-child, td:last-child {
            border-right: 1px solid black;
        }

        tr:last-child td {
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>

<table cellspacing="0">
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>

    <?php

    $db = new mysqli('127.0.0.1', 'root', 'student', 'db');
    $db->query("DROP TABLE IF EXISTS `data`");
    $db->query("CREATE TABLE `data` (`key` VARCHAR(255) NOT NULL, `value` TEXT, PRIMARY KEY (`key`))");
    $db->query("INSERT INTO `data` VALUES ('bye', 'goodbye cruel world'),('hello', 'hello world')");

    $result = $db->query("SELECT * FROM data");

    while ($row = $result->fetch_object()) {
        echo '<tr>';
        echo '<td>' . $row->key . '</td>';
        echo '<td>' . $row->value . '</td>';
        echo '</tr>';
    }

    $result->free();
    $db->close();

    ?>

</table>
</body>
</html>
