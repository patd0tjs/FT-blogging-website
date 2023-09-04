# Blogging Website

## Problem:
Acme company wants to have a blogging website for their employees.

## Prerequisite

1. Database design
   1. The design should be reflected in the migration/sql file uploaded from Part II. Section 3
2. Github account
3. Git installed in your personal machine
4. Fresh laravel copy. [link](https://laravel.com/docs/8.x/installation)

## Instruction

### Part I.

```diff
For full time position applicants only! 
```

Create a project proposal about the company, Acme Inc.'s need to have a blogging website that employees can read online.
1. Assuming that the client and you had already agreed to have a blogging website for employees but the client wants to have a formal proposal and implementation plan.
2. The client want to know the following details
   1. Timeline
   2. Use cases
   3. Technology to be used
   4. Infrastructure 
   5. Team and their responsibilities
   6. Codebase management
   7. Cost breakdown
  


### Part II.
1. Fork/Copy this repository as a personal project to your OWN github account.
   1. Do not clone
2. Implement the following user stories to your blogging website
   1. As a user, I should be able to signup my account with these following requirements:
      1. Id <sup>unique</sup>
      2. Email <sup>unique</sup>
      3. Password
      4. Employee ID <sup>unique</sup>
      5. Full name
      6. Date of Birth
      7. Date of registration
      8. Date of record update
   2. As a user, I should be able to login after signing up using my email and password
   3. As a user, I will be redirected to the dashboard/home page after signing in.
   4. As a user, I can post 3 types of blog posts with these following requirements:
      1. User who owns the blog post
      2. Title
      3. Description
      4. Content (Text post, Photo, Iframe of youtube a video)
      5. Creation Date
      6. Update Date
   5. As a user, I can view ALL blog posts posted by ALL users in the dashboard/home page
      1. Title
      2. Description
      3. Posted By
      4. Number of comments
        * pagination - bonus
   6. As a user, I can view a specific blog post and see all the details
   7. As a user, I can delete my posted blog and cannot be viewed from the dashboard page
   8. As a user, I can edit my blog post and show when was the last update in the dashboard and view page.
   9.  As a user, I can post a comment on the blog post I'm currently viewing
   10.  As an admin, I can delete or hide a blog post. 
   11. As a user, I can reply to a comment and display it as a thread similar to facebook (bonus)
    ```
    Post
      - title
      - content
      - description
      - comments
        - comment 1
            comment 1.1
            comment 1.2
        - comment 2
            comment 2.1
            comment 2.2
        - so on ...
    ```
3. Iterations and changes should be pushed to your personal github copy of the project.
   1. The repository should have the migration scripts or database included in the project.


### Bonus: A comment can have a link, picture aside from text
