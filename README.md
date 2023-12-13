<!-- Preview Image -->

![Preview](https://github.com/alnahian2003/jobbar/raw/main/screenshots/preview.png)

# Jobbar — The Ultimate Job Board

Jobbar is a simple Job Listing Platform to easily find the desired job inspired from Larajobs.com.

## Features

-   Only Admin can Create, Read, Update & Delete Jobs from the Admin Panel.
-   Visitors can only browse jobs and see the details page.
-   Only Admin/Site Author can log-in.

## Installation

Please check the [Laravel Official Documentation](https://laravel.com/docs/master/installation) installation guide for server requirements before you start.

First, clone this repo

```bash
git clone https://github.com/alnahian2003/jobbar-blade
```

Switch to the repo folder

```bash
cd jobbar-blade
```

Install all the dependencies using composer and npm

```bash
composer install
```

```bash
npm install
```

Copy the `.env.example` file and make the required configuration changes in the .env file

```bash
cp .env.example .env
```

Generate a new application key

```bash
php artisan key:generate
```

Run the database migrations (Set the database connection in .env before migrating)

```bash
php artisan migrate
```

Start the local development server

```bash
php artisan serve
```

Start Vite for bundling the assets or Hot Module Reload (required)

```bash
npm run dev
```

**You can now access the server at http://localhost:8000.**

### TL;DR

All the command list

```bash
git clone https://github.com/alnahian2003/jobbar-blade
```

```bash
cd jobbar-blade
```

```bash
composer install
```

```bash
npm install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```bash
php artisan migrate
```

```bash
php artisan serve
```

```bash
npm run dev
```

## Database Seeding

Populate the database with seed data. This can help you to quickly get started and explore inside out of this project.

Run the database seeder, and this will do it!

```bash
php artisan db:seed
```

Note : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

```bash
php artisan migrate:refresh
```

## Tech Stack

**Client Side:** Laravel Blade, TailwindCSS AlpineJS

**Server Side:** PHP, Laravel

## Support

For support, [contact me](https://alnahian2003.github.io#contact) or pull an issue.
