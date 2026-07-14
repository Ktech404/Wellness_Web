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


    $exerciseName = $_GET['exercise'] ?? "box";


    if ($exerciseName === "custom") {

        $exercise = [
            "name" => "Custom Breathing",

            "inhale" => $_GET['inhale'] ?? 4,
            "hold_in" => $_GET['holdin'] ?? 4,
            "exhale" => $_GET['exhale'] ?? 4,
            "hold_out" => $_GET['holdout'] ?? 4,

            "description" => "Your personalized breathing rhythm."
        ];

    } else {

        $exercise = $exercises[$exerciseName] ?? $exercises["box"];

    }


    include './includes/header.php';
    include './includes/nav.php';

?>
<section class="breathing-hero">

    <h1>
        Breathing Exercises.
    </h1>

    <p>
        Breathe in. Breath out. You're okay.
    </p>

</section>


<section class="exercise-selector">

    <h2>
        Choose a breathing exercise
    </h2>

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


<?php if ($exerciseName === "custom"): ?>

    <form class="custom-form" method="get">

        <label>
            Inhale
            <input
                type="number"
                name="inhale"
                min="1"
                value="<?= $_GET['inhale'] ?? 4 ?>">
        </label>

        <label>
            Hold Full
            <input
                type="number"
                name="holdin"
                min="0"
                value="<?= $_GET['holdin'] ?? 4 ?>">
        </label>

        <label>
            Exhale
            <input
                type="number"
                name="exhale"
                min="1"
                value="<?= $_GET['exhale'] ?? 4 ?>">
        </label>

        <label>
            Hold Empty
            <input
                type="number"
                name="holdout"
                min="0"
                value="<?= $_GET['holdout'] ?? 4 ?>">
        </label>

        <button type="submit">
            Start Custom Exercise
        </button>

        <input type="hidden" name="exercise" value="custom">

    </form>

<?php endif; ?>

<?php

    $totalTime =
        $exercise["inhale"] +
        $exercise["hold_in"] +
        $exercise["exhale"] +
        $exercise["hold_out"];

?>

<div class="breathing-layout">

    <div class="breathing-instructions">

        <h2>
            How it works
        </h2>

        <ul>
            <li>Match your breathing with the rhythm of the circle.</li>
            <li>Find a comfortable position.</li>
            <li>Relax your shoulders and jaw.</li>
            <li>Close your eyes if you feel comfortable.</li>
            <li>Take slow, relaxed breaths.</li>
        </ul>

    </div>

    <div class="breathing-center">

        <div class="breathing-guide">

            <div
                class="breathing-circle"
                style="animation-duration: <?= $totalTime ?>s;">

                <span>
                    Breathe
                </span>

            </div>

        </div>

    </div>

    <div class="breathing-settings">

        <h2>
            <?= $exercise["name"]; ?>
        </h2>

        <p>
            <?= $exercise["description"]; ?>
        </p>

        <div class="timings">

            <p>
                Inhale: <?= $exercise["inhale"]; ?> seconds
            </p>

            <p>
                Hold Full: <?= $exercise["hold_in"]; ?> seconds
            </p>

            <p>
                Exhale: <?= $exercise["exhale"]; ?> seconds
            </p>

            <p>
                Hold Empty: <?= $exercise["hold_out"]; ?> seconds
            </p>

        </div>

    </div>

</div>

<?php include './includes/footer.php'; ?>