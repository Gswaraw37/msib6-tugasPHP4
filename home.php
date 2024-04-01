<?php
$name = 'Genta Swarawisesa Erliarto Putra';
$desc = 'I am a student majoring in Information Systems at Gunadarma University. I have a keen interest in the field of programming, particularly with a focus on backend development. I have experience in creating websites, primarily working on the backend. Proficient in programming language PHP with the Laravel framework.';
$date = 9;
$month = 'December';
$year = 2002;
$address = 'Jakarta, Indonesia';
$phone = '081283594072';
$email = 'genta.swara@gmail.com';
$edu1 = 'Universitas Gunadarma';
$time1 = '2021 - Present';
$edu2 = 'SMAN 113 Jakarta';
$time2 = '2018 - 2021';
$exp1 = 'PKKMB FIKTI Volunteer';
$bem = 'BEM FIKTI UG';
$timexp1 = 'Sept 2023';
$exp2 = 'Sept 2023';
$timexp2 = 'Jun 2022';
$proj1 = 'News Portal Website';
$tp1 = 'Oct 2023 - Present';
$proj2 = 'Menfess Website';
$tp2 = 'Dec 2022 - Present';
$proj3 = 'ToDoList API';
$tp3 = 'Jan 2022 - Present';
$role1 = 'Project Leader and Back End Developer';
$role2 = 'Back End Developer';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div style="padding-top: 20px; padding-bottom: 5px;">
        <h1 align="center">
            Welcome!
        </h1>

        <center>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbtAdkAsbpKNypUBgxkmJLW_zzjT5AsjwoDdbkQKupsA&s" alt="" width="13%" class="profile">
        </center>
        <p align="justify">
            <?= $desc ?>
        </p>

        <fieldset class="border">
            <legend class="biodata">Biodata</legend>
            <ol class="isi">
                <li><b>Personal Information</b></li><br>
                    <ul>
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>&nbsp;<?= $name ?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>:</td>
                                <td>&nbsp;<?= $date ?><sup>th</sup> <?= $month . '&nbsp' . $year ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>&nbsp;<?= $address ?></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:</td>
                                <td>&nbsp;<?= $phone ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>&nbsp;<?= $email ?></td>
                            </tr>
                        </table>
                    </ul><br><hr><br>
                <li><b>Education</b></li><br>
                    <ul>
                        <li><?= $edu1 ?></li>
                            <pre><?= $time1 ?></pre><br>
                        <li><?= $edu2 ?></li>
                            <pre><?= $time2 ?></pre>
                    </ul><br><hr><br>
                <li><b>Experience</b></li><br>
                    <ul>
                        <li><?= $exp1 ?></li>
                            <pre><?= $bem ?></pre>
                            <pre><?= $timexp1 ?></pre><br>
                        <li><?= $exp2 ?></li>
                            <pre><?= $bem ?></pre>
                            <pre><?= $timexp2 ?></pre>
                    </ul><br><hr><br>
                <li><b>Projects</b></li><br>
                    <ul>
                        <li><?= $proj1 ?></li>
                            <pre><?= $role1 ?></pre>
                            <pre><?= $tp1 ?></pre><br>
                        <li><?= $proj2 ?></li>
                            <pre><?= $role1 ?></pre>
                            <pre><?= $tp2 ?></pre><br>
                        <li><?= $proj3 ?></li>
                            <pre><?= $role2 ?></pre>
                            <pre><?= $tp3 ?></pre>
                    </ul><br>
            </ol>
        </fieldset>
    </div>
</body>
</html>