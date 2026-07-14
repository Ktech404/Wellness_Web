<?php

/* Self-care tips organized by category */
$selfCare = [

    "body" => [
        "Take a short walk and focus on your surroundings.",
        "Drink a glass of water eat something comforting.",
        "Stretch for five minutes and release tension.",
        "Get enough rest tonight to help your body recover."
    ],

    "mind" => [
        "Write down one thought that has been on your mind.",
        "Reflect on 5 things you're grateful for.",
        "Read or watch your favorite book or movie",
        "Take an hour break from devices.."
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
        "Create a calming space with lighting and music.",
        "Remove one thing from your environment that causes stress."
    ]

];

/* Randomly select one tip from each category */
$selectedCare = [];

foreach ($selfCare as $category => $statements) {
    $selectedCare[$category] = $statements[array_rand($statements)];
}

/* Include the shared header and navigation */
include './includes/header.php';
include './includes/nav.php';

?>

<div class="self-care-container">

    <!-- Page title and description -->
    <h1 class="page-title">
        Self-Care Tips
    </h1>
    
    <p class="page-desc">
        Here are self-care suggestions from four different
        categories: Body, Mind, Social, and Environment.
        Try to complete 1 from each every day!
        Click "New Tips" below at any time to generate a fresh set of tips.
    </p>

    <!-- Reload the page to generate new self-care tips -->
    <button
        class="refresh-btn"
        onclick="window.location.reload();">
        New Tips
    </button>

    <!-- Visual progress tracker -->
    <div class="challenge-progress">
        <p>Today's Progress</p>

        <div class="progress-track">
            <div class="progress-fill"></div>
        </div>
    </div>

    <!-- Self-care cards -->
    <div class="self-care-grid">

        <!-- Body tip -->
        <div class="care-card">
            <input type="checkbox" id="body-check">

            <label for="body-check" class="challenge-toggle">
                Complete
            </label>

            <h2>Body</h2>

            <p>
                <?= $selectedCare["body"]; ?>
            </p>
        </div>

        <!-- Mind tip -->
        <div class="care-card">
            <input type="checkbox" id="mind-check">

            <label for="mind-check" class="challenge-toggle">
                Complete
            </label>

            <h2>Mind</h2>

            <p>
                <?= $selectedCare["mind"]; ?>
            </p>
        </div>

        <!-- Social tip -->
        <div class="care-card">
            <input type="checkbox" id="social-check">

            <label for="social-check" class="challenge-toggle">
                Complete
            </label>

            <h2>Social</h2>

            <p>
                <?= $selectedCare["social"]; ?>
            </p>
        </div>

        <!-- Environment tip -->
        <div class="care-card">
            <input type="checkbox" id="environment-check">

            <label for="environment-check" class="challenge-toggle">
                Complete
            </label>

            <h2>Environment</h2>

            <p>
                <?= $selectedCare["environment"]; ?>
            </p>
        </div>

    </div>

</div>

<!-- Include the shared footer -->
<?php include './includes/footer.php'; ?>