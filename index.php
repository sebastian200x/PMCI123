<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./styles/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMCI Webpage</title>
</head>

<?php include (__DIR__ . '/header.php'); ?>

<body>
    <main>
        <div class="welc">
            <h3 class="mobile">WELCOME TO PMCI</h3>
        </div>

        <div class="img-cont">
            <div class="img">
                <img src="./styles/images/school2.png" alt="">

                <div class="desc">

                    <h1>PMCI</h1>
                    <P>
                        Founded in 1958 by Chinese-Filipino businessmen, the Philippine Malabon Cultural Institute
                        (PMCI) started with elementary education under Mr. Co San. Through contributions, PMCI expanded
                        with a kindergarten building in 1961 and a main building extension in 1964. SEE MORE ABOUT PMCI <a style="color: Yellow; " href="about.php">  HERE</a></P>
                    <div class="mob">PHILIPPINE MALABON CULTURAL INSTITUTE</div>
                </div>
            </div>
        </div>



        <div class="mv">
            <div class="card">
                <img src="./styles/images/mission.png" alt="PMCI">
                <div class="det">
                    <h1>MISSION</h1>
                    <p>PMCI is committed to provide affordable education that emphasizes excellence in character,
                        academic,
                        and social interactions.</p>
                </div>
            </div>

            <div class="card">

                <img src="./styles/images/vision.jpg" alt="PMCI">
                <div class="det">
                    <h1>VISION</H1>
                    <p>PMCI is a Filipino Chinese learning community that nurtures the full potential of students to
                        become
                        responsible citizens and future leaders and that celebrates and promotes the integration of
                        Eastern
                        and Western cultures.</p>
                </div>
            </div>
        </div>
        <h1 class="core-values">
            PMCI CORE VALUES
        </h1>
        <div class="core">

            <div class="pmci">
                <img src="./styles/images/PMCI/p.png" alt="P" class="pmci-img" draggable="false">
                <h3>PERSEVERANCE</h3>
            </div>

            <div class="pmci">
                <img src="./styles/images/PMCI/m.png" alt="M" class="pmci-img" draggable="false">
                <H3>MORAL-INTEGRITY</H3>
            </div>

            <div class="pmci">
                <img src="./styles/images/PMCI/c.png" alt="C" class="pmci-img" draggable="false">
                <H3>COMPETITIVE</H3>
            </div>

            <div class="pmci">
                <img src="./styles/images/PMCI/i.png" alt="I" class="pmci-img" draggable="false">
                <H3>INCLUSIVENESS</H3>
            </div>


        </div>

    </main>




    <?php include 'footer.php'; ?>

</body>

</html>