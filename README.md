
# Skill Development System Management


An e-learning platform where users can develop skills through topic-based learning. Each course consists of multiple topics, with each topic featuring a quiz question. Upon completing all topics, users face a final test to evaluate their understanding of the course. This platform is designed with a role-based authentication system and controlled by an admin panel for managing courses, topics, and user messages.




## Features

- User Interface Users can browse available courses, learn through structured topics, and complete quizzes. Each topic has a single quiz question, with a final test upon completing all topics.

- Admin Panel Admin can create and manage courses, topics, and details for each topic. The admin panel also enables CRUD operations for user and course management. Admins receive messages from users and can reply to users through email.

- Role-Based Authentication Secure role-based access control with middleware for users and admins. Users must log in to enroll in and complete courses


## Technologies Used

- Frontend: HTML, CSS, Bootstrap
- Backend: Laravel Framework
- Database: MySQL

## Installation Guide

Follow these steps to set up the project on your local machine:

### Prerequisites

- PHP (>= 8.0)
- Composer
- MySQL
- Git




## Setup Instructions

 1. Clone the repository:

```bash
    git clone https://github.com/smmehedi4u/skill-development-project.git
```
2. Moved new Folder
```bash
    cd skill-development-project
```

3. Install dependencies:

```bash
    composer install
```

4. Setup Environment: 

```bash
    cp .env.example .env
```

5. Open .env and configure the following:

```bash
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
```

6. Generate application key:

```bash
    php artisan key:generate
```

7. Run migrations and seed the database:

This command will create the database tables and populate initial data using seeders.

```bash
    php artisan migrate --seed
```

8. Serve the application:

Start the Laravel development server.

```bash
    php artisan serve
```

9.Access the application:

Open your browser and visit http://localhost:8000.

## Usage

- User Access Register or log in to view courses. Enroll in courses, learn through topic-based lessons, and complete quizzes. View course progress and final test results upon completion.

- Admin Access Log in to the admin panel to create or manage courses, topics, and user messages. Respond to user messages via email. Manage users, control content, and monitor course analytics.




