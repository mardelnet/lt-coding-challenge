# Coding Challenge

## Comments
- This plugin needs the ACF plugin to work correctly. If ACF is not installed, this plugin won't activate and an error message will be shown.
- After activating the plugin, six courses posts will be automatically added with their corresponding ACFs and content.
- Items to improve:
  - I could not find a way to enqueue the template scripts within the plugin, so I called the external css and js files normally.
  - The "append" function in the "load_more_courses.js" file could be improved.

### Objectives
Create a custom WordPress plugin to manage and render a list of courses as shown on the provided designs.
The plugin should be following WordPress development standards and fulfill the following technical requirements.

### Designs
https://www.figma.com/file/aUaTM5fKobKPI97qFmanCM/Learning-Tapestry-%E2%80%93-Coding-Challenge

### Technical requirements:
- The project should be setup as a Git repository.
- The plugin should contain a page template named "Course Overview".
- The courses should be registered as their own post type and content should be managed via Advanced Custom Fields.
- The page template should render the first page automatically, and allow to load more courses using a "load more" button.
- That "load more" button should retrieve the following pages using the WP REST API endpoint `/wp/v2/posts`.
- PHP v7.4, Node.js v14.16.0, WordPress 5.6

Important note: when returning the project to us, please send us a zipped copy of the repository folder and make sure to
include the `.git` folder that contains the commit history.
