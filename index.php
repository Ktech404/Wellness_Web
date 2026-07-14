<?php

/* Display PHP errors while debugging */
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* Available breathing exercises and their timings */
$exercises = [
    "box" => [
        "name" => "Box Breathing",
        "inhale" => 4,
        "hold_in" => 4,
        "exhale" => 4,
        "hold_out" => 4,
        "description" => "A balanced breathing technique that creates a steady rhythm."
    ],

    "alternate" => [
        "name" => "Alternate Nostril Breathing",
        "inhale" => 4,
        "hold_in" => 0,
        "exhale" => 4,
        "hold_out" => 0,
        "description" => "A calming practice that alternates breathing between nostrils."
    ],

    "478" => [
        "name" => "4-7-8 Breathing",
        "inhale" => 4,
        "hold_in" => 7,
        "exhale" => 8,
        "hold_out" => 0,
        "description" => "A slow breathing pattern focused on relaxation."
    ]
];

/* Get the selected exercise from the URL */
$exerciseName = $_GET['exercise'] ?? "box";

/* Build a custom breathing exercise if selected */
if ($exerciseName === "custom") {
    $exercise = [
        "name" => "Custom Breathing",
        "inhale" => max(1, (int) ($_GET['inhale'] ?? 4)),
        "hold_in" => max(0, (int) ($_GET['holdin'] ?? 4)),
        "exhale" => max(1, (int) ($_GET['exhale'] ?? 4)),
        "hold_out" => max(0, (int) ($_GET['holdout'] ?? 4)),
        "description" => "Your personalized breathing rhythm."
    ];
} else {
    /* Load the selected preset or use Box Breathing */
    $exercise = $exercises[$exerciseName] ?? $exercises["box"];
}

/* Calculate the duration of one complete breathing cycle */
$totalTime =
    $exercise["inhale"] +
    $exercise["hold_in"] +
    $exercise["exhale"] +
    $exercise["hold_out"];

$totalTime = max(1, $totalTime);

/* Include the shared header and navigation */
include './includes/header.php';
include './includes/nav.php';

?>

<!-- Breathing page introduction -->
<section class="breathing-hero">

    <h1>Breathing Exercises</h1>

    <p>
        Breathe in. Breathe out. You're okay.
    </p>

</section>

<!-- Exercise selection buttons -->
<section class="exercise-selector">

    <h2>Choose a breathing exercise</h2>

    <div class="exercise-buttons">

        <a href="?exercise=box">
            Box Breathing
        </a>

        <a href="?exercise=alternate">
            Alternate Nostril
        </a>

        <a href="?exercise=478">
            4-7-8 Breathing
        </a>

        <a href="?exercise=custom">
            Custom Exercise
        </a>

    </div>

</section>

<!-- Display custom timing controls when selected -->
<?php if ($exerciseName === "custom"): ?>

    <form class="custom-form" method="get">

        <label>
            Inhale

            <input
                type="number"
                name="inhale"
                min="1"
                value="<?= htmlspecialchars((string) $exercise["inhale"]); ?>"
            >
        </label>

        <label>
            Hold Full

            <input
                type="number"
                name="holdin"
                min="0"
                value="<?= htmlspecialchars((string) $exercise["hold_in"]); ?>"
            >
        </label>

        <label>
            Exhale

            <input
                type="number"
                name="exhale"
                min="1"
                value="<?= htmlspecialchars((string) $exercise["exhale"]); ?>"
            >
        </label>

        <label>
            Hold Empty

            <input
                type="number"
                name="holdout"
                min="0"
                value="<?= htmlspecialchars((string) $exercise["hold_out"]); ?>"
            >
        </label>

        <button type="submit">
            Start Custom Exercise
        </button>

        <input type="hidden" name="exercise" value="custom">

    </form>

<?php endif; ?>

<!-- Breathing exercise layout -->
<div class="breathing-layout">

    <!-- Exercise instructions -->
    <div class="breathing-instructions">

        <h2>How It Works</h2>

        <ul>
            <li>Match your breathing with the rhythm of the circle.</li>
            <li>Find a comfortable position.</li>
            <li>Relax your shoulders and jaw.</li>
            <li>Close your eyes if you feel comfortable.</li>
            <li>Take slow, relaxed breaths.</li>
        </ul>

    </div>

    <!-- Animated breathing circle -->
    <div class="breathing-center">

        <div class="breathing-guide">

            <div
                class="breathing-circle"
                style="animation-duration: <?= (int) $totalTime; ?>s;"
            >
                <span>Breathe</span>
            </div>

        </div>

    </div>

    <!-- Selected exercise details -->
    <div class="breathing-settings">

        <h2>
            <?= htmlspecialchars($exercise["name"]); ?>
        </h2>

        <p>
            <?= htmlspecialchars($exercise["description"]); ?>
        </p>

        <div class="timings">

            <p>
                Inhale:
                <?= (int) $exercise["inhale"]; ?> seconds
            </p>

            <p>
                Hold Full:
                <?= (int) $exercise["hold_in"]; ?> seconds
            </p>

            <p>
                Exhale:
                <?= (int) $exercise["exhale"]; ?> seconds
            </p>

            <p>
                Hold Empty:
                <?= (int) $exercise["hold_out"]; ?> seconds
            </p>

        </div>

    </div>

</div>

<!-- Include the shared footer -->
<?php include './includes/footer.php'; ?>