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
        <?php
        // Get the current page from the URL, default to 1 if not set
        $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        // Call the news function with pagination
        $news_data = news($current_page);
        ?>
        <div class="news-container">
            <h1 class="head">NEWS</h1>

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

            <div id="newsContainer">
                <div class="error" id="error">
                    <h1>
                        Search not found
                    </h1>
                </div>
                <?php
                // Display news items
                echo $news_data['news_items'];
                ?>
            </div>
        </div>

    </main>

    <?php include 'footer.php'; ?>

    <script>
        function searchNews() {

            const searchValue = document.getElementById('searchInput').value.toLowerCase();
            const error = document.getElementById('error');

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

</body>

</html>