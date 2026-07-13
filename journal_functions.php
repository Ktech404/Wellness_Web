<?php

session_start();

function saveJournalEntry(): void {

    $entry = trim($_POST['journalEntry'] ?? '');
    $mood = trim($_POST['mood'] ?? '');

    $_SESSION['journalEntry'] = $entry;
    $_SESSION['mood'] = $mood;
}

function sessionValue(string $key): string {
    return $_SESSION[$key] ?? '';
}

function hasJournalEntry(): bool {
    return trim(sessionValue('journalEntry')) !== '';
}

function confirmationMessage(): string {

    if (!hasJournalEntry()) {
        return 'Write a journal entry to begin your reflection.';
    }

    return 'Your journal entry has been saved.';
}

function moodMessage(): string {

    $mood = sessionValue('mood');
    if ($mood === 'very happy') {
        return 'Awesome to hear you are having such a great day! Let this positivity carry over into the next.';
    }

    if ($mood === 'happy') {
        return 'It is wonderful to hear that today felt positive. Take a moment to appreciate what contributed to that feeling.';
    }

    if ($mood === 'neutral') {
        return 'Some days are calm and steady. Reflecting on the small moments can often reveal meaningful experiences.';
    }

    if ($mood === 'sad') {
        return 'Sorry to hear you are having a difficult day. Journaling can be a helpful way to process thoughts and emotions.';
    }
    if ($mood === 'distraught') {
        return 'Very sorry to hear you about how upset you are. If possible, try to talk to a close family member or friend, and practice self-care.';
    }

    return 'Writing is a great way to process your feelings, both good and bad. I hope you found this helpful!';
}

function moodSelected(string $mood): string {
    return sessionValue('mood') === $mood
        ? 'checked'
        : '';
}

?>

