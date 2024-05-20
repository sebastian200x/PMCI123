<link rel="stylesheet" href="./styles/header.css">
<link rel="icon" href="./styles/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<header>
    <h2 class="big">PHILIPPINE MALABON CULTURAL INSTITUTE</h2>

    <h2 class="small">菲律濱嗎拉汶文化書院</h2>

    <div class="set">
        <form action="" method="POST">
            <input type="submit" class="button" name="news" value="NEWS">
            <input type="submit" class="button" name="enrollment" value="ENROLLMENT">
            <input type="submit" class="button" name="profile" value="PROFILE">
            <input type="submit" class="button2" name="logout" value="LOGOUT" onclick="return confirmLogout()">
        </form>
    </div>

    <?php
    require (__DIR__ . '/functions.php');

    if (isset($_POST['profile'])) {
        header('Location: ./profile.php');
        exit();
    }

    if (isset($_POST['news'])) {
        header('Location: ./home.php');
        exit();
    }

    if (isset($_POST['enrollment'])) {
        header('Location: ./enrollment.php');
        exit();
    }

    if (isset($_POST['logout'])) {
        logout();
        exit();
    }
    ?>

    <script>
        function confirmLogout() {
            var response = confirm('Are you sure you want to log out?');
            if (response) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</header>