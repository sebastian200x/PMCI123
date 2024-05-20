<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/enrollment.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include (__DIR__ . '/header.php');


if (!isset($_SESSION['admin'])) {
    header('location: ./index.php');
    exit();
}
?>

<body>

    <main>

        <div class="pending">
            <p>Pending Enroll: <span><?php echo pending_enrollment() ?></span></p>
        </div>

        <nav>
            <div class="navi">

                <a class="active" href="./enrollment.php">Enrollment</a>
                <a href="./holiday.php">Holiday</a>
            </div>
        </nav>

        <div class="enroll">
            <?php
            $grades = [
                "KINDER 1" => "./ENROLLMENT/kinder1.php",
                "KINDER 2" => "./ENROLLMENT/kinder2.php",
                "GRADE 1" => "./ENROLLMENT/grade1.php",
                "GRADE 2" => "./ENROLLMENT/grade2.php",
                "GRADE 3" => "./ENROLLMENT/grade3.php",
                "GRADE 4" => "./ENROLLMENT/grade4.php",
                "GRADE 5" => "./ENROLLMENT/grade5.php",
                "GRADE 6" => "./ENROLLMENT/grade6.php",
                "GRADE 7" => "./ENROLLMENT/grade7.php",
                "GRADE 8" => "./ENROLLMENT/grade8.php",
                "GRADE 9" => "./ENROLLMENT/grade9.php",
                "GRADE 10" => "./ENROLLMENT/grade10.php",
                "GRADE 11" => "./ENROLLMENT/grade11.php",
                "GRADE 12" => "./ENROLLMENT/grade12.php"
            ];
            ?>

            <div class="grade">
                <?php foreach ($grades as $grade => $link): ?>
                    <a href="<?= $link ?>">
                        <span class="span1"><?= $grade ?></span>
                        <?php
                        $pending = pending_enrollment_grade($grade);
                        if (isset($pending) && $pending > 0): ?>
                            <span class="span2"><?= $pending ?></span>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="tbl">
                <p>Choose a grade level</p>
            </div>
        </div>

    </main>

</body>

</html>