<?php

$selfCare = [

    "body" => [
        "Take a short walk and focus on your surroundings.",
        "Drink a glass of water and give your body what it needs.",
        "Stretch for five minutes and release tension.",
        "Get enough rest tonight to help your body recover."
    ],

    "mind" => [
        "Write down one thought that has been on your mind.",
        "Take a few minutes to practice mindfulness.",
        "Read something that inspires you.",
        "Allow yourself a moment without distractions."
    ],

    "social" => [
        "Reach out to someone you care about.",
        "Spend time with someone who makes you feel supported.",
        "Share a positive thought with someone today.",
        "Remember that asking for help is a strength."
    ],

    "environment" => [
        "Clean one small area of your space.",
        "Open a window and let fresh air into your room.",
        "Create a calming space around you.",
        "Remove one thing from your environment that causes stress."
    ]

];


$selectedCare = [];

foreach ($selfCare as $category => $statements) {
    $selectedCare[$category] = $statements[array_rand($statements)];
}


include './includes/header.php';
include './includes/nav.php';

?>


<div class="self-care-container">

    <h1 class="page-title">
        Self-Care Tips
    </h1>


    <div class="self-care-grid">


        <div class="care-card">
            <h2>Body</h2>
            <p>
                <?= $selectedCare["body"]; ?>
            </p>
        </div>


        <div class="care-card">
            <h2>Mind</h2>
            <p>
                <?= $selectedCare["mind"]; ?>
            </p>
        </div>


        <div class="care-card">
            <h2>Social</h2>
            <p>
                <?= $selectedCare["social"]; ?>
            </p>
        </div>


        <div class="care-card">
            <h2>Environment</h2>
            <p>
                <?= $selectedCare["environment"]; ?>
            </p>
        </div>


    </div>


</div>


<?php include './includes/footer.php'; ?>