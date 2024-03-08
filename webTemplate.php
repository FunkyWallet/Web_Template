<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Template</title>
</head>
<body>
    <?php include "inc_header.html"; ?>
    <div style="width:20%; text-align:center; float:left;">
        <?php include("inc_buttonnav.html"); ?>
    </div>
    <?php
    // Check which button was clicked
        if (isset($_GET["content"])) {
            switch($_GET["content"]) {
                case "About Me":
                    include "inc_about.html";
                    break;
                case "Contact Us":
                    include "inc_contact.html";
                    break;
                default:
                    include "inc_home.html";
                    break;
            } // End Switch
        } else {
        // No button is clicked
            include "inc_home.html";
        } // End if/else
    ?>
    <hr>
    <?php include "inc_footer.php" ?>
</body>
</html>