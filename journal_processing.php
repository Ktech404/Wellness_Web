<?php

/* Load the journal helper functions */
require "./journal_functions.php";

/* Save the submitted journal entry and mood */
saveJournalEntry();

/* Include the shared header and navigation */
include './includes/header.php';
include './includes/nav.php';
?>

<!-- Journal confirmation message -->
<div class="hero-section">

    <h1>- Journal Saved -</h1>

    <p>
        Thank you for taking time to reflect today. Head back to the main page to make another reflection, or explore other resources in the navigation bar!
    </p>

</div>

<!-- Display the user's journal entry -->
<div class="journal-card">

    <h2>Your Reflection</h2>

    <p>
        <?= nl2br(htmlspecialchars(sessionValue('journalEntry'))); ?>
    </p>

</div>

<!-- Display personalized feedback based on the selected mood -->
<div class="insight-card">

    <h2>Feedback:</h2>

    <p>
        <?= htmlspecialchars(moodMessage()); ?>
    </p>

</div>

<!-- Include the shared footer -->
<?php include './includes/footer.php'; ?>