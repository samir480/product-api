# Laravel 11 API Application

This is a simple Laravel 11 application providing APIs for **user registration**, **login**, and **fetching products**. It uses **Laravel Sanctum** for authentication and **SQLite** for the database.

## Prerequisites

- **PHP 8.1+**
- **Composer 2.5+**

## Installation

1. Clone the repository and navigate into it:
   ```bash
   git clone git@github.com:samir480/product-api.git
   cd product-api
   
2. Install dependencies:
   ```bash
   composer install

3. Set up the environment file and generate the app key:
   ```bash
   cp .env.example .env
   php artisan key:generate

4. Set up SQLite by creating the database file:
   ```bash
   touch database/database.sqlite

4. Run migrations and seed data:
   ```bash
   php artisan migrate --seed

## API Endpoints

- **POST /api/register: User registration**
- **POST /api/login: User login**
- **POST /api/logout: User logout (requires authentication)**
- **GET /api/products: Fetch products (requires authentication)**
  
