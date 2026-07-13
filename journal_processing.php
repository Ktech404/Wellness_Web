<?php

require "./journal_functions.php";

saveJournalEntry();

include './includes/header.php';
include './includes/nav.php';
?>

<div class="hero-section">

    <h1>Journal Saved</h1>

    <p>
        We logged your journal entry successfully.
    </p>

</div>

<div class="journal-card">

    <h2>Your Reflection</h2>

    <p>
        <?= nl2br(htmlspecialchars(sessionValue('journalEntry'))); ?>
    </p>

</div>

<div class="insight-card">

    <h2>Feedback</h2>

    <p>
        <?= htmlspecialchars(moodMessage()); ?>
    </p>

</div>

<?php include './includes/footer.php'; ?>

