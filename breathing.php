<?php

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

            "inhale" => $_GET['inhale'] ?? 4,
            "hold_in" => $_GET['holdin'] ?? 4,
            "exhale" => $_GET['exhale'] ?? 4,
            "hold_out" => $_GET['holdout'] ?? 4,

            "description" => "Your personalized breathing rhythm."
        ];

    } else {

/* Otherwise load one of the preset exercises */
        $exercise = $exercises[$exerciseName] ?? $exercises["box"];

    }

/* Include the shared header and navigation */
    include './includes/header.php';
    include './includes/nav.php';

?>