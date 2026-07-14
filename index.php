<?php

/* Load helper functions used for the journal page */
require "./journal_functions.php";

/* List of daily reflection prompts */
$journalPrompts = [
    "What is one thing you learned about yourself today?",
    "What is something small that brought you joy today?",
    "What is one challenge you faced recently, and how did you handle it?",
    "What is something you are grateful for today?",
    "What is one thing you would like to improve about tomorrow?",
    "Describe a moment today when you felt calm or peaceful.",
    "What is something you are proud of yourself for?",
    "What is one thought that has been on your mind lately?",
    "What is something you would like to let go of?",
    "What is one positive thing you can say about yourself today?"
];

/* Randomly select one prompt each time the page loads */
$dailyPrompt = $journalPrompts[array_rand($journalPrompts)];

/* Save the journal entry after the form is submitted */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    saveJournalEntry();
}

/* Clear the current journal session if requested */
if (isset($_GET['clear'])) {
    $_SESSION = [];
    session_destroy();

    header('Location: index.php');
    exit;
}

/* Include the shared header and navigation */
include './includes/header.php';
include './includes/nav.php';
?>

<!-- Welcome section -->
<div class="hero-section">
    <div class="hero-text">
        <h1>Welcome to the Wellness Web!</h1>

        <p>
            This is your personal reflection space to:
            -Record your thoughts and feelings
            -Get self-care tips
            -Practice calming breathing exercises
            -And explore additional resources, all in one place!
        </p>
    </div>

    <div class="hero-image">
        <img src="assets/welcome_image.png">
    </div>
</div>

<!-- Journal entry section -->
<div class="journal-card">

    <h2 class="journal-title">
        Today's Check In:
    </h2>

    <!-- Journal submission form -->
    <form action="journal_processing.php" method="post">

        <div class="journal-top">

            <!-- Mood selection -->
            <div class="mood-area">

                <h3>How are you feeling today?</h3>

                <div class="mood-selector">

                    <!-- Users select their current mood -->
                    <label class="mood-option">

                        <input
                            type="radio"
                            name="mood"
                            value="very happy"
                            required
                            <?= moodSelected('very happy'); ?>
                        >

                        <img
                            src="assets/emoji_buttons/happy.png"
                            alt="very happy"
                        >

                        <span>Very Happy</span>
                    </label>

                    <label class="mood-option">

                        <input
                            type="radio"
                            name="mood"
                            value="happy"
                            required
                            <?= moodSelected('happy'); ?>
                        >

                        <img
                            src="assets/emoji_buttons/content.png"
                            alt="Happy"
                        >

                        <span>Happy</span>

                    </label>

                    <label class="mood-option">

                        <input
                            type="radio"
                            name="mood"
                            value="neutral"
                            <?= moodSelected('neutral'); ?>
                        >

                        <img
                            src="assets/emoji_buttons/neutral.png"
                            alt="Neutral"
                        >

                        <span>Neutral</span>

                    </label>

                    <label class="mood-option">

                        <input
                            type="radio"
                            name="mood"
                            value="sad"
                            <?= moodSelected('sad'); ?>
                        >

                        <img
                            src="assets/emoji_buttons/sad.png"
                            alt="Sad"
                        >

                        <span>Sad</span>

                    </label>

                    <label class="mood-option">

                        <input
                            type="radio"
                            name="mood"
                            value="distraught"
                            required
                            <?= moodSelected('distraught'); ?>
                        >

                        <img
                            src="assets/emoji_buttons/distraught.png"
                            alt="Distraught"
                        >

                        <span>Upset</span>

                    </label>

                </div>

                <br>

            </div>

            <!-- Display a random daily reflection prompt -->
            <div class="journal-prompt">

                <h3>Daily Prompt:</h3>

                <p class="prompt">
                    <?= htmlspecialchars($dailyPrompt); ?>
                </p>

            </div>

        </div>

        <!-- Text area for writing the journal entry -->
        <textarea
            name="journalEntry"
            rows="8"
            placeholder="Write about your day..."
        ><?= htmlspecialchars(sessionValue('journalEntry')); ?></textarea>

        <br><br>

        <!-- Submit the journal entry -->
        <button type="submit">
            Save Entry
        </button>

    </form>

</div>

<!-- Shared footer -->
<?php include './includes/footer.php'; ?>