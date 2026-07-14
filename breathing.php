<?php

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

$exerciseName = $_GET["exercise"] ?? "box";

if ($exerciseName === "custom") {
    $exercise = [
        "name" => "Custom Breathing",
        "inhale" => (int) ($_GET["inhale"] ?? 4),
        "hold_in" => (int) ($_GET["holdin"] ?? 4),
        "exhale" => (int) ($_GET["exhale"] ?? 4),
        "hold_out" => (int) ($_GET["holdout"] ?? 4),
        "description" => "Your personalized breathing rhythm."
    ];
} else {
    $exercise = $exercises[$exerciseName] ?? $exercises["box"];
}

$totalTime =
    $exercise["inhale"] +
    $exercise["hold_in"] +
    $exercise["exhale"] +
    $exercise["hold_out"];

include "./includes/header.php";
include "./includes/nav.php";

?>

<section class="breathing-hero">
    <h1>Breathing Exercises</h1>
    <p>Breathe in. Breathe out. You're okay.</p>
</section>

<section class="exercise-selector">
    <h2>Choose a breathing exercise</h2>

    <div class="exercise-buttons">
        <a href="breathing.php?exercise=box">Box Breathing</a>

        <a href="breathing.php?exercise=alternate">
            Alternate Nostril
        </a>

        <a href="breathing.php?exercise=478">
            4-7-8 Breathing
        </a>

        <a href="breathing.php?exercise=custom">
            Custom Exercise
        </a>
    </div>
</section>

<?php if ($exerciseName === "custom"): ?>

<form class="custom-form" method="get" action="breathing.php">

    <input type="hidden" name="exercise" value="custom">

    <label>
        Inhale
        <input
            type="number"
            name="inhale"
            min="1"
            max="15"
            value="<?= htmlspecialchars((string) $exercise["inhale"]) ?>"
        >
    </label>

    <label>
        Hold Full
        <input
            type="number"
            name="holdin"
            min="0"
            max="15"
            value="<?= htmlspecialchars((string) $exercise["hold_in"]) ?>"
        >
    </label>

    <label>
        Exhale
        <input
            type="number"
            name="exhale"
            min="1"
            max="15"
            value="<?= htmlspecialchars((string) $exercise["exhale"]) ?>"
        >
    </label>

    <label>
        Hold Empty
        <input
            type="number"
            name="holdout"
            min="0"
            max="15"
            value="<?= htmlspecialchars((string) $exercise["hold_out"]) ?>"
        >
    </label>

    <button type="submit">Start Custom Exercise</button>

</form>

<?php endif; ?>

<div class="breathing-layout">

    <div class="breathing-instructions">
        <h2>How It Works</h2>

        <ul>
            <li>Match your breathing with the rhythm of the circle.</li>
            <li>Find a comfortable position.</li>
            <li>Relax your shoulders and jaw.</li>
            <li>Close your eyes if you feel comfortable.</li>
            <li>Take slow and relaxed breaths.</li>
        </ul>
    </div>

    <div class="breathing-center">
        <div class="breathing-guide">

            <div
                class="breathing-circle"
                style="animation-duration: <?= $totalTime ?>s;"
            >
                <span>Breathe</span>
            </div>

        </div>
    </div>

    <div class="breathing-settings">
        <h2>
            <?= htmlspecialchars($exercise["name"]) ?>
        </h2>

        <p>
            <?= htmlspecialchars($exercise["description"]) ?>
        </p>

        <div class="timings">
            <p>Inhale: <?= $exercise["inhale"] ?> seconds</p>
            <p>Hold Full: <?= $exercise["hold_in"] ?> seconds</p>
            <p>Exhale: <?= $exercise["exhale"] ?> seconds</p>
            <p>Hold Empty: <?= $exercise["hold_out"] ?> seconds</p>
        </div>
    </div>

</div>

<?php include "./includes/footer.php"; ?>
