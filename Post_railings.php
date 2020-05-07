<?php
require './get_railings_function.php';
require './get_length_function.php';

 ?>

<html lang="en-GB">
	<head>
		<title>Posts and Railings</title>
		<link rel="stylesheet" type="text/css" href="normalize.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet">
	</head>

	<body>
    <!-- top banner -->
		<header>
			<div class="container_top">
				<h1>Posts and Railings Calculator</h1>
			</div>
        </header>

    <!-- container with length calculator in -->
		<div class="container_main">
            <h2>Calculate length of fence</h2>
            <!-- input form for calculating length -->
            <form action="" method="post">
                <div class="one_field">
                    <label for="railings">Enter number of railings: </label>
                    <input type="text" id="railings" name="railings" placeholder="e.g 5"/>
                </div>
                <div class="one_field">
                    <input class="button" type="submit" value="Calculate length" name="calculate_length"/>
                </div>
            </form>

            <?php
            // Calling the get length function, if the 'Calculate Length' button is pressed
            if (isset($_POST['calculate_length'])) {
                $railings = htmlentities($_POST['railings']);
                $result = $railings;
                get_length((int)$result);
            }
            ?>
        </div>

    <!-- container with posts/railings calculator in -->
        <div class="container_main">
        <h2>Calculate number of railings and posts</h2>
            <!-- input form for calculating number of posts/railings -->
            <form action="" method="post">
                <div class="one_field">
                    <label for="length">Enter length of fence in metres: </label>
                    <input type="text" id="length" name="length" placeholder="e.g 5"/>
                </div>
                <div class="one_field">
                    <input class="button" type="submit" value="Calculate Fence" name="calculate_fence"/>
                </div>
            </form>

            <?php
            // Calling the get railings function, if the 'Calculate Fence' button is pressed
            if(isset($_POST['calculate_fence'])) {
                $length = htmlentities($_POST['length']);
                $result_length = $length;
                get_railings($result_length);
            }
            ?>
        </div>
    </body>
</html>




