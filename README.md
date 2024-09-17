# MVC Signup and Login System

This is a user authentication system built using the **MVC (Model-View-Controller)** architecture. It allows users to sign up, log in and log out with their Name displayed on the home page after successful login.

## Features

- User registration with form validation
- User login and logout functionality
- Session management to track logged-in users

## File Structure

```
The project follows the MVC architecture, with the following structure:
mvc-signup-system/
│
├── app/
│   ├── controllers/
│   │   ├── 404.php
│   │   ├── home.php
│   │   ├── login.php
│   │   ├── logout.php
│   │   └── signup.php
│   ├── core/
│   │   ├── app.php
│   │   ├── config.php
│   │   ├── controller.php
│   │   ├── database.php
│   │   ├── functions.php
│   │   ├── init.php
│   │   └── model.php
│   ├── models/
│   │   └── user.php
│   └── views/
│       ├── 404.view.php
│       ├── home.view.php
│       ├── login.view.php
│       └── signup.view.php
│
├── public/
│   ├── assets/
│   │   ├── css/
│   │   ├── fonts/
│   │   ├── images/
│   │   └── js/
│   ├── index.php
│   ├── .htaccess
│   └── robots.txt
```

```markdown
- **app/**: Contains the core application files, Controllers and views.
  - **controllers/** : Handles user interactions and page logic (404, home, login, logout, signup).
  - **core/** : core functionality files such as app initialization, database connection and helper functions.
  - **models/** : Database models, such as `user.php`.
  - **views/** : The frontend templates for rendering pages.

- **puplic/**: Public assets and main entry point (`index.php`)
  - **assets/**: Contains all static assets like CSS, JS, Images and fonts.
```  

## Technology Used

  - **PHP** (for backend logic)
  - **MYSQL** (for database)
  - **MVC** (to organize code structure)
 
## How to Run

1. Clone the repository:
   ```bash
   git clone https://github.com/Hagar-Elbakry/mvc-signup-system.git
2. Run the project locally using a server like XAMPP:
     - Move the project files to your htdocs folder.
3. Access the system by visiting http://localhost/signup-with-mvc.

## Previous Version

  The previous version without MVC is available in the [Learning_Recap](https://github.com/Hagar-Elbakry/Learning_Recap) repository.
