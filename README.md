# mentalhospital

The Task Codes are here
#SetUp: you can install this theme or
you can Check **'functions.php' & 'custom-projects-template.php'** file






**Task Steps:**
1. Custom Post Type Setup:
In the theme's functions.php file,
I've created a custom post type called "project" using the "register_post_type" function.
Configured the post type to have labels for the admin dashboard, be publicly visible, and have an archive.
Enabled support for the 'title,' 'editor,' and 'thumbnail' fields for projects.


2. Custom Projects Template:
I've created a custom template named 'Custom Projects Template' using the Template Name comment at the beginning of my PHP file. This template is used to display your custom projects.


3. Querying and Displaying Custom Posts:

In my template, I'm querying custom posts of the 'project' type using 'WP_Query'. I retrieve all published projects and loop through them to display their title, thumbnail, and excerpt.

Here's a summary of the steps within the loop:

Use "the_post_thumbnail('project')" to display the project thumbnail.
"the_title()" displays the project title.
"the_excerpt()" displays the project excerpt.
Initialize a variable $i to keep track of the modals' unique IDs.
Inside this loop, i iterate through each custom project post.
Include a "View Project" button with a unique 'data-bs-target' attribute pointing to the corresponding modal's ID.
After each project iteration, i increment the '$i' variable to ensure that each modal has a unique ID.


4. Modal:
Introduction: 
I create a modal for each project using Bootstrap modal, it is used to display the modal content each project when a user clicks on a "View Project" button.
I create a Bootstrap modal for each project with a unique ID (#Modal-1, #Modal-2, etc.).
The modal includes a header with the project title, a close button, and a body section displaying the project thumbnail and excerpt.
The class "btn primary_btn" is used to styling the modal button.
Created a close button to hide the modal when clicked using bootstrap.
I used Bootsrap 5 for this Modal.
