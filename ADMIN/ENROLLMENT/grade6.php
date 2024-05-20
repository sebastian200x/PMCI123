<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles.css">
    <script src="./script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include 'header.php'; ?>

<body>

    <main>

        <nav>
            <div class="navi">

                <a class="active" href="../enrollment.php">Enrollment</a>
                <a href="../holiday.php">Holiday</a>
            </div>
        </nav>

        <div class="enroll">

        <?php
            $grades = [
                "KINDER 1" => "./kinder1.php",
                "KINDER 2" => "./kinder2.php",
                "GRADE 1" => "./grade1.php",
                "GRADE 2" => "./grade2.php",
                "GRADE 3" => "./grade3.php",
                "GRADE 4" => "./grade4.php",
                "GRADE 5" => "./grade5.php",
                "GRADE 6" => "./grade6.php",
                "GRADE 7" => "./grade7.php",
                "GRADE 8" => "./grade8.php",
                "GRADE 9" => "./grade9.php",
                "GRADE 10" => "./grade10.php",
                "GRADE 11" => "./grade11.php",
                "GRADE 12" => "./grade12.php"
            ];
            ?>

            <div class="grade">
                <?php foreach ($grades as $grade => $link): ?>
                    <a href="<?= $link ?>" <?= $grade === "GRADE 6" ? 'class="active"' : '' ?>><?= $grade ?>
                        <?php
                        $pending = pending_enrollment_grade($grade);
                        if (isset($pending) && $pending > 0): ?>
                            <span class="span2"><?= $pending ?></span>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <?php
                        echo getenrollment('GRADE 6');
                        ?>
            

    </main>

</body>

</html>