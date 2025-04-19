# 🛍️ Laravel Products App

A lightweight and clean Laravel 11 application that allows users to manage a list of products through a simple interface. This project demonstrates core Laravel features like routing, controllers, models, and views — focused entirely on CRUD operations.

![Screenshot](/public/cover-image.png)

## 🚀 Features

-   📝 Create, Read, Update, Delete products
-   📦 Simple UI for managing products
-   🧪 Includes seeder for demo data
-   🗃️ Utilizes Laravel’s MVC architecture
-   ⚡ Powered by Vite for lightning-fast frontend builds

## 🛠 Technologies Used

-   Laravel 11
-   PHP 8.2+
-   Vite (for asset bundling)
-   SQLite/MySQL (depending on your .env setup)
-   Blade templates
-   Composer & npm

## 📦 Installation

```bash
# Clone the repository
git clone https://github.com/your-username/laravel-products-app.git

cd laravel-products-app

# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install && npm run dev

# Set up environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Run migrations (optional: add seed)
php artisan migrate --seed

# Start development server
php artisan serve

```

## 🌱 Seeder

To quickly populate the database with dummy product data, use:

```bash

php artisan db:seed

```
