<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorenzo von Matterhorn - Portofolio</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>

<body>
    <?php require_once("../includes/header.php"); ?>

    <main>
        <h1>Projecten</h1>
        <p>VUL MET DATABASE</p>

        <?php
        include '../admin/database.php';
        
        function getPhoto($uuid)
        {
            $sql = "SELECT * FROM tb_projectimages WHERE project_uuid = ?";
            global $conn;
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $uuid);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows === 0) {
                return "<img src='../images/projects/default.png' alt='Default Project Image' style='max-width:200px; height:auto;'>";
            }
            $stmt->close();

            $imagePath = "../public/images/projects/" . $uuid . ".png";
            if (file_exists($imagePath)) {
                return "<img src='../public/" . htmlspecialchars($imagePath) . "' alt='Project Image' style='max-width:200px; height:auto;'>";
            } else {
                return "<img src='../public/images/projects/default.png' alt='Default Project Image' style='max-width:200px; height:auto;'>";
            }
        }

        $sql = "SELECT * FROM tb_projects";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $uuid = $row["uuid"];
                $image = getPhoto($uuid);

                echo "<h2>" . htmlspecialchars($row["name"]) . "</h2>";
                echo $image;
                echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
                echo "<p><a href='" . htmlspecialchars($row["url"]) . "' target='_blank'>Bekijk Project</a></p>";
                echo "<hr>";
            }
        } else {
            echo "<p>Geen projecten gevonden.</p>";
        }

        $conn->close();
        ?>

    </main>
    <?php require_once("../includes/footer.php"); ?>
    <script src="../public/js/script.js"></script>
</body>

</html>