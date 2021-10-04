# Coding Challenge

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