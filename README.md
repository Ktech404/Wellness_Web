# The Wellness Web

## Project Overview

The Wellness Web is a wellness-focused web application designed to provide users with tools and resources that support mental wellbeing. The website offers guided breathing exercises, a session-based journaling functionality, self-care suggestions and tracker, and wellness resources through a simple and accessible interface.

The project was developed using PHP, HTML, and CSS.

---

## Technologies Used

* PHP
* HTML5
* CSS3

No external frameworks or libraries were used. The site was built using standard web technologies to demonstrate server-side processing, responsive design, and user interaction.

---

## Project Structure

```text
/
├── assets/
│   ├── emoji_buttons/
│   ├── heart.png
│   └── welcome_image.png
│
├── includes/
│   └── reusable PHP components(header, nav, footer)
│
├── index.php
├── breathing.php
├── self-care.php
├── resources.php
├── journal_functions.php
├── processing.php
├── styles.css
└── README.md
```

### Directory Descriptions

#### assets/

Contains images, icons, and other media used throughout the website.

#### includes/

Contains reusable header, nav, and footer PHP components and shared content that can be included across multiple pages.

#### styles.css

Contains all styling for all pages of the website, including layout, typography, navigation, responsive behavior, and page-specific styling.

---

## Pages

### Home Page (index.php)

The landing page of the website. This page introduces the application, provides access to the site's wellness tools and resources, and features a journaling section with emoji-based mood tracking and a rotating journal prompt..

Features:

* Navigation menu
* Wellness information
* Journal prompt display
* Unique journaling prompts
* Emoji list for emotion tracking
* Access to other sections of the site

### Journal Submission page (journal_proccessing.php)

This is a supplementary page that supports the functions of the main page; once the user submits a journal entry, it displays a confirmation message, the user's entry, and custom message depending on the emotion they indicated during in their journal.

Features:

* Personalized, custom feedback based on journal entry
* Confirmation and echo of journal entry

### Self-Care (self-care.php)

Provides four self-care recommendations and wellness activities that users can practice independently, one from each catergory of "Mind", "Body", "Enviroment" and "Social". These tips come from a randomly selected set of advice that the user can choose to refresh with a clear button.

The tips feature "Complete" buttons, and a tracker progress bar. The user is encouraged to complete one tip from each category every day, and as they complete requirements off the list, the tracker bar updates to show progress.

Features:

* Random assortment of self-care tips
* Refresh button to generate new set of tips.
* Checkboxes and a tracker bar to note progress


### Breathing Exercises (breathing.php)

Provides guided breathing exercises designed to help users relax and manage stress. A number of different exercises are available, such as box breathing, alternating nostril breathing, 4-7-8 breathing, and a custom setting to allow users to choose their experience.

The page displays information describing how to prepare for the activity, as well as how each breathing technique works. There is an animated breathing circle guide that users are ecouraged to follow along with.

Features:

* Animated breathing circle guide
* Timed breathing instructions
* Multiple breathing techniques
* Custom exercise input

### Resources (resources.php)

Provides users with access to wellness-related information and support resources. Encourages users to seek emergency services if necessary.

Features:

* Helpful links to variety of support services
* Descriptions of mental and social wellness resources

---

## Journal Functionality

### journal_functions.php

Contains reusable functions responsible for journal operations, including creating, storing, and retrieving journal entries.

### processing.php

Handles form submissions and server-side processing related to journal entries and session handling.

Features:

* Journal entry submission
* Data processing
* Entry management

---

## Highlighted Features

### Journaling System

Users can create journal entries through a dedicated form. Submitted entries are processed through PHP and displayed back to the user.

### Random Journal Prompts

The website displays a randomly selected journal prompt each time the page is loaded, encouraging reflection and self-awareness.

### Guided Breathing Exercises

Interactive breathing exercises use animation and timed instructions to guide users through relaxation techniques.

### Wellness Resources

Users can access curated wellness information and support resources.

### Consistent Navigation

A shared navigation system allows users to move easily between all sections of the website.

---

## Responsive Design Strategy

The website was designed using a mobile-friendly approach to ensure usability across different screen sizes.

Responsive techniques include:

* Flexible layouts using CSS.
* Relative sizing where appropriate.
* Content containers that adjust to available screen width and stack apropiately.
* Readable typography across desktop, tablet, and mobile devices.
* Navigation elements that remain accessible on smaller screens.
* Images and visual elements that scale appropriately.

Testing was conducted on multiple viewport sizes to ensure content remained usable and visually consistent.

---

## Design Decisions

### Minimalist Visual Style

A grayscale color palette was selected to create a calm and distraction-free experience that aligns with the wellness theme. Thin borders and generous whitespace were used to improve content separation, maintain a journal-like appearance, and keep the interface uncluttered.

### Emoji Mood Indicators
Mood tracking emojis were used  because:
- They are intuitive.
- They require minimal explanation.
- They provide quick emotional categorization.

### Interactive Breathing Tool

The breathing exercise page uses animation to provide visual guidance, making exercises easier to follow.

### Random Journal Prompts
Prompts are randomized to:
- Encourage varied reflection.
- Prevent repetitive journaling experiences.
- Increase user engagement.
---

## Installation and Running the Project

1. Place the project folder inside a PHP-enabled web server environment (such as XAMPP or WAMP).
2. Start the web server.
3. Navigate to:

```text
http://localhost/project-folder-name/
```

4. Open `index.php` to access the application.

---

## Future Improvements

Potential future enhancements include:

* Database-backed journal storage to have access to past entries
* User accounts and authentication
* Additional breathing exercises + better support for the animation using JS
* Expanded wellness resources + dynamic updating
* Journal search and filtering
* Accessibility improvements
* Dark mode support
* Enhanced mobile navigation

---

## AI Usage Disclosure
Note: Code provided by the instructor for classwork/homework assignments were primarily used for inspiration/guidance. 

Artificial intelligence tools were used during the development process to assist with:

* Brainstorming features
* Refactoring and Debugging code
* Code example templates
* Refining CSS layouts and cleaning up PHP logic
* Improving code organization
* Generating documentation template

Artificial intelligence tools were NOT used to:
* Generate the site
* Generate any of the art, graphics, or images used on the side
* Generate the project structure

All generated suggestions were reviewed, modified, tested, and if applicable, integrated by the team. Final implemention, design decisions, testing, and project integration were completed manually.
