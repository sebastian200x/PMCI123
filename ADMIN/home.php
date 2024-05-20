<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/home.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>

<?php include 'header.php'; ?>

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
                    // Calculate the start and end page numbers
                    $start_page = max(1, $news_data['current_page'] - 1);
                    $end_page = min($news_data['total_pages'], $news_data['current_page'] + 1);

                    // Show left arrow if not on the first page
                    if ($news_data['current_page'] > 1) {
                        echo '<a href="?page=' . ($news_data['current_page'] - 1) . '"><i class="fa-solid fa-arrow-left"></i></a>';
                    }

                    // Display page numbers
                    for ($page = $start_page; $page <= $end_page; $page++) {
                        echo '<a href="?page=' . $page . '"';
                        if ($page == $news_data['current_page']) {
                            echo ' class="active"';
                        }
                        echo '>' . $page . '</a>';
                    }

                    // Show right arrow if not on the last page
                    if ($news_data['current_page'] < $news_data['total_pages']) {
                        echo '<a href="?page=' . ($news_data['current_page'] + 1) . '"><i class="fa-solid fa-arrow-right"></i></a>';
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