# Hotel App

A hotel management application built with Laravel.

## Requirements

- PHP 8.1+
- Composer
- MySQL or PostgreSQL
- Node.js & NPM

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/tuurosung/hotel-app.git
   cd hotel-app
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install NPM dependencies:
   ```bash
   npm install
   ```

4. Copy the environment file and configure it:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. (Optional) Seed the database:
   ```bash
   php artisan db:seed
   ```

## Running the Application

Start the development server:
```bash
php artisan serve
```

Compile assets:
```bash
npm run dev
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
