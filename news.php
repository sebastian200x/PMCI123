<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/news.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
</head>

<?php include 'header.php'; ?>

<body>


    <main>

        <div class="news-container">
            <h1 class="head">NEWS</h1>

            <div class="container">
                <div class="search">
                    <button><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="active2">1</button>
                    <button>2</button>
                    <button>3</button>
                    <button><i class="fa-solid fa-arrow-right"></i></button>
                    &nbsp;
                    <input class="fa" style="padding: 10px" type="text" placeholder=" &#xf002; Search News...">
                </div>
            </div>

            <?php
            $news = news();
            echo $news;
            ?>

        </div>


    </main>

    <?php include 'footer.php'; ?>

</body>

</html>