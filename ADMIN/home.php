<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/home.css">
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include 'header.php'; ?>
</head>

<body>
    <main>

        <div class="form-container">
            <div class="form">
                <?php
                if (!isset($_SESSION['admin'])) {
                    header('location: ./index.php');
                    exit();
                }

                if (isset($_POST["add"])) {
                    $uploadResult = uploadnews($_FILES["image"], $_POST["title"], $_POST["description"], $_POST["date"]);
                    if ($uploadResult == "success") {
                        echo '<p class="success"> <i class="fas fa-check"></i> News updated successfully</p>';
                        $_POST = array_map('trim', $_POST);
                        $_POST['title'] = '';
                        $_POST['description'] = '';
                        $_POST['date'] = '';
                    } else {
                        echo '<p class="error"> <i class="fas fa-times"></i> ' . @$uploadResult . '</p>';
                    }
                }
                ?>
                <h2>CREATE NEW NEWS</h2>
                <form method="POST" autocomplete="off" enctype="multipart/form-data">
                    <label for="image">IMAGE</label>
                    <input type="file" name="image" id="image" accept="image/*" required><br>

                    <label for="title">TITLE</label>
                    <input class="title" type="text" name="title" id="title" value="<?php echo @$_POST['title']; ?>"
                        placeholder="Title of the News" required><br>

                    <label for="description">DESCRIPTION</label>
                    <textarea name="description" class="desc" id="description" placeholder="Description of the News"
                        required><?php echo @$_POST['description']; ?></textarea>

                    <label for="date">DATE</label>
                    <input type="date" name="date" id="date" class="date" value="<?php echo @$_POST['date']; ?>"
                        required><br>

                    <div class="sub">
                        <input class="submit" type="submit" value="Add" name="add">
                    </div>
                </form>
            </div>
        </div>
        <div class="display">
            <?php
            // Get the current page from the URL, default to 1 if not set
            $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
            // Call the news function with pagination
            $news_data = getnews($current_page);
            ?>
            <div class="container">
                <div class="pagination">
                    <?php
                    // Calculate the start and end page numbers to always show 3 pages
                    $total_pages = $news_data['total_pages'];
                    $current_page = $news_data['current_page'];

                    if ($total_pages <= 3) {
                        // If there are 3 or fewer total pages, show all of them
                        $start_page = 1;
                        $end_page = $total_pages;
                    } else {
                        // Otherwise, determine the start and end pages based on the current page
                        if ($current_page == 1) {
                            $start_page = 1;
                            $end_page = 3;
                        } elseif ($current_page == $total_pages) {
                            $start_page = $total_pages - 2;
                            $end_page = $total_pages;
                        } else {
                            $start_page = $current_page - 1;
                            $end_page = $current_page + 1;
                        }
                    }

                    // Show left arrow
                    if ($current_page > 1) {
                        echo '<a href="?page=' . ($current_page - 1) . '"><i class="fa-solid fa-arrow-left"></i></a>';
                    } else {
                        echo '<span class="disabled"><i class="fa-solid fa-arrow-left"></i></span>';
                    }

                    // Display page numbers
                    for ($page = $start_page; $page <= $end_page; $page++) {
                        echo '<a href="?page=' . $page . '"';
                        if ($page == $current_page) {
                            echo ' class="active"';
                        }
                        echo '>' . $page . '</a>';
                    }

                    // Show right arrow
                    if ($current_page < $total_pages) {
                        echo '<a href="?page=' . ($current_page + 1) . '"><i class="fa-solid fa-arrow-right"></i></a>';
                    } else {
                        echo '<span class="disabled"><i class="fa-solid fa-arrow-right"></i></span>';
                    }
                    ?>
                    <input class="fa" style="padding: 10px" type="text" id="searchInput"
                        placeholder=" &#xf002; Search News..." onkeyup="searchNews()">
                </div>
            </div>
            <div class="news-container">
                <div class="errora" id="errora">
                    <h1>
                        Search not found
                    </h1>
                </div>
                <?php
                echo $news_data['news_items'];
                ?>
            </div>
        </div>
    </main>

</body>
<script>
    function searchNews() {

        const searchValue = document.getElementById('searchInput').value.toLowerCase();
        const error = document.getElementById('errora');

        const newsItems = document.querySelectorAll('.news');

        let foundResults = false;

        newsItems.forEach(item => {
            const titleElement = item.querySelector('h1');

            const title = titleElement.innerText.toLowerCase();
            if (title.includes(searchValue)) {
                highlightText(titleElement, searchValue)
                item.style.display = '';
                foundResults = true;
            } else {
                item.style.display = 'none';
            }
        });

        // Show or hide the error message based on search results
        if (foundResults) {
            error.style.display = 'none';
        } else {
            error.style.display = 'block';
        }
    }

    function highlightText(element, searchValue) {
        const text = element.innerText;
        const regex = new RegExp(`(${searchValue})`, 'gi');
        const newText = text.replace(regex, '<span class="highlight">$1</span>');
        element.innerHTML = newText;
    }

</script>

</html>