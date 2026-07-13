<?php

require "./journal_functions.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    saveJournalEntry();
}

if (isset($_GET['clear'])) {
    $_SESSION = [];
    session_destroy();

    header('Location: index.php');
    exit;
}
include './includes/header.php';
include './includes/nav.php';
?>

<div class="hero-section">
    <div class="hero-text">
        <h1>Welcome!</h1>
        <p>Your personal reflection space.</p>
    </div>

    <div class="hero-image">
        <img src="assets/welcome_image.png">
    </div>
</div>

<div class="journal-card">

    <h2 class="journal-title">
        Today's Check In:
    </h2>

    <form action="journal_processing.php" method="post">

        <div class="journal-top">

            <div class="mood-area">
                <h3>How are you feeling today?</h3>

                <div class="mood-selector">

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
                            alt="distraught"
                        >

                    <span>Upset</span>
                    </label>

                </div>

                <br>

            </div>

            <div class="journal-prompt">
                <p class="prompt">
                    What is one thing you learned about yourself today?
                </p>
            </div>

        </div>  
    
        <textarea
            name="journalEntry"
            rows="8"
            placeholder="Write about your day..."
        ><?= htmlspecialchars(sessionValue('journalEntry')); ?></textarea>

        <br><br>

        <button type="submit">
            Save Entry
        </button>

    </form>

</div>
<?php include './includes/footer.php'; ?>