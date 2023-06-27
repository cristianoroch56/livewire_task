# Project Name - Demo for Livewire and Jetstream

This guide will walk you through the steps required to set up and run a Livewire and Jetstream Laravel project on your computer. Assuming you already have the project cloned from the Git repository, follow the steps below to get started.

## Prerequisites

Make sure you have the following dependencies installed on your machine:

- PHP (>= 8.0)
- Composer
- Node.js (>= 18)
- NPM or Yarn
- Laravel (>= 10)
- MySQL or any other database server

## Setup Instructions

1. Open a terminal or command prompt and navigate to the project's root directory.

2. Install PHP dependencies by running the following command:
   ```
   composer install
   ```

3. Copy the `.env.example` file and rename it to `.env`:
   ```
   cp .env.example .env
   ```

4. Generate an application key:
   ```
   php artisan key:generate
   ```

5. Configure the database connection in the `.env` file. Provide the necessary credentials for your MySQL server or any other database you're using.

6. Run the database migrations:
   ```
   php artisan migrate
   ```

7. Seed the database with admin user and default roles:
   ```
   php artisan db:seed
   ```

8. Install the NPM dependencies:
   ```
   npm install
   ```

9. Compile the frontend assets:
   ```
   npm run dev
   ```

10. Serve the application locally:
    ```
    php artisan serve
    ```

11. Open your web browser and visit `http://localhost:8000` to access the application.