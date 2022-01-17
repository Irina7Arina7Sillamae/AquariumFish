<!-- Header        -->

<!DOCTYPE html>
<html lang="en">

<head>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Products</title>
</head>

<body>


    <!-- Раздел меню -->
    <nav class="one">
        <ul class="topmenu">
            <li><a class="zoom" href="#">Categories<i class="fa fa-angle-down"></i></a>
                <ul class="submenu">
                    <?php
                    Controller::AllCategory();
                    ?>
                </ul>
            </li>
            <li><a class="zoom" href="info">Info</a></li>
            <li><a class="zoom" href="aquarium">Aquarium</a></li>
            <li><a class="zoom" href="./">StartPage</a></li>
            <li><a class="zoom" href="OverProducts">OtherProducts</a></li>
            <li><a class="zoom" href="registerForm">Registration</a></li>
            <div class="pull-right">
                <li>
                    <form action="search">
                        <input type="text" name="search">
                        <input type="submit" value="search">
                    </form>
                </li>
            </div>
        </ul>
    </nav>

    <!-- Раздел содержания -->
    <section class="bg">
        <div class="divBox">
            <?php
            if (isset($content)) {
                echo $content;
            } else {
                echo '<h1>Content is gone</h1>';
            }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <hr>
    <p style="display:block; text-align:center; color:#007bff;"> &copy Trading 2021 </p>

</body>

</html>