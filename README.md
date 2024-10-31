#Skill Development Project

An e-learning platform where users can develop skills through topic-based learning. Each course consists of multiple topics, with each topic featuring a quiz question. Upon completing all topics, users face a final test to evaluate their understanding of the course. This platform is designed with a role-based authentication system and controlled by an admin panel for managing courses, topics, and user messages.

##Features

###User Interface
Users can browse available courses, learn through structured topics, and complete quizzes.
Each topic has a single quiz question, with a final test upon completing all topics.

##Admin Panel
Admin can create and manage courses, topics, and details for each topic.
The admin panel also enables CRUD operations for user and course management.
Admins receive messages from users and can reply to users through email.

##Role-Based Authentication
Secure role-based access control with middleware for users and admins.
Users must log in to enroll in and complete courses.

##Tech Stack
###Frontend: HTML, CSS, Bootstrap.
###Backend: Laravel (PHP framework).
###Database: MySQL.


#Installation

Follow these steps to install and set up the project locally.

Clone the Repository

git clone https://github.com/your-username/skill-development-project.git
cd skill-development-project

Install Dependencies Make sure you have Composer installed, then run:

'''composer install

'''npm install
'''npm run dev

Environment Configuration Copy the .env.example file to .env and configure your environment variables, especially the database settings:

-cp .env.example .env
-php artisan key:generate
Update the .env file with your database credentials:

##env

DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

Migrate and Seed Database Run migrations to set up tables in the database, and seed initial data if available:

###php artisan migrate
###php artisan db:seed

Start the Server Launch the Laravel development server:

php artisan serve
Visit http://127.0.0.1:8000 in your browser to access the application.

#Usage

##User Access
Register or log in to view courses.
Enroll in courses, learn through topic-based lessons, and complete quizzes.
View course progress and final test results upon completion.


##Admin Access
Log in to the admin panel to create or manage courses, topics, and user messages.
Respond to user messages via email.
Manage users, control content, and monitor course analytics.
