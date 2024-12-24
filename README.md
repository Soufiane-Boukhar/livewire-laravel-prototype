# Task and Post Management System

This is a Laravel application using Livewire for managing tasks and posts. It allows users to perform CRUD operations on tasks and posts, along with real-time updates for task management.

## Features

- **Task Management**:
    - Create, update, and delete tasks
    - Livewire integration for real-time updates
    - Search tasks by title or description
    - Pagination for task list

- **Post Management**:
    - Create, update, and delete posts
    - Edit post details with Livewire
    - Search posts by title or description
    - Pagination for post list

## Requirements

- PHP >= 7.4
- Composer
- Laravel 8.x or later
- Livewire
- MySQL or any other database supported by Laravel

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/Soufiane-Boukhar/livewire-laravel-prototype.git
    ```

2. Install the dependencies using Composer:
    ```bash
    cd livewire-laravel-prototype
    composer install
    ```

3. Set up the environment file:
    ```bash
    cp .env.example .env
    ```

4. Generate the application key:
    ```bash
    php artisan key:generate
    ```

5. Set up the database and run migrations:
    ```bash
    php artisan migrate
    ```

6. Serve the application:
    ```bash
    php artisan serve
    ```

Your application will be running on `http://localhost:8000`.

## Usage

### Task Management
- View tasks
- Add new tasks
- Edit existing tasks
- Delete tasks
- Search tasks by title abd filter by status

### Post Management
- View posts
- Add new posts
- Edit existing posts
- Delete posts
- Search posts by title or description

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

## License

This project is open-source and available under the [MIT License](LICENSE).
