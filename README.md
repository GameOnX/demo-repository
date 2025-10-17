# School Website

This is a professional school website built with Laravel. It includes a content management system that allows users to post content from a dashboard and display it on the front side. It also includes admin authentication and user creation.

## Installation

1. Clone the repository: `git clone https://github.com/your-username/your-repository.git`
2. Navigate to the project directory: `cd your-repository`
3. Install the dependencies: `composer install`
4. Copy the `.env.example` file to `.env`: `cp .env.example .env`
5. Generate a new application key: `php artisan key:generate`
6. Configure your database credentials in the `.env` file.
7. Run the database migrations: `php artisan migrate`
8. Seed the database with an admin user: `php artisan db:seed`
9. Start the development server: `php artisan serve`

You can now access the application at `http://127.0.0.1:8000`. The admin user's credentials are:
- **Email:** admin@example.com
- **Password:** password