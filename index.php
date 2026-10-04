<?php
    include 'pure_php.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3103</title>

</head>
<body>
    <a href="next_page.php">Next Page</a>

    <h3>
        <label><u>Output from php to HTML Elements</label>
        First Name: <u><?php echo $firstname; ?></u>
        <br>
        Last Name: <u><?php echo $lastname; ?></u>      
        <br>
        Age: <u><?php echo $age; ?></u>
        <br>
        Sex: <u><?php echo $sex; ?></u>s
        <br>
        UserID: <u><?php echo $user_id; ?></u>                      
    </h3>

    <button type="button" onclick="greetUser()">Greet User</button>
    <!-- internal javascript -->
    <script>
        const firstname = "<?php echo $firstname; ?>";
        const lastname = "<?php echo $lastname; ?>";
        const age = "<?php echo $age; ?>";
        const sex = "<?php echo $sex; ?>";
        const userId = "<?php echo $user_id; ?>";

        function greetUser() {
            alert("HOLLA " + firstname + " " + lastname + "! You are  " + age + " years old and your Sex is: " + sex + ". Your User ID is: " + userId);
        }
    </script>
</body>
</html>