# Dharan Kitchen

A hotel and restaurant website with online room booking and a full admin panel, built with Laravel 8.

Guests can browse room types, check dining menus, explore events and places, and submit booking requests. Staff manage bookings, check-ins and site content from a protected `/admin` area.

<!-- Add 2-3 screenshots here: home page, room booking form, admin bookings view.
![Home page](docs/home.png) -->

## Features

### Public site

- **Home page** with the latest events, featured places and an optional site-wide notice that admins can switch on or off
- **Rooms**: all room types, dedicated Deluxe / Standard / Normal pages, and a profile page per room type with its image gallery
- **Online booking**: booking form for each room type, submitted to the admin team for confirmation
- **Dining and menus**: menus for each venue, grouped by category
- **Meetings, packages, events and places**: listing and detail pages for each
- **Photo gallery** and a **contact / query form**

### Admin panel (`/admin`)

Protected by an `admin` middleware.

- **Bookings**: new and confirmed lists; confirm, cancel, check in and check out
- **Rooms**: manage room types and their images
- **Dining**: categories, venues and menu items
- **Content**: events, gallery, places, packages, meeting and dining pages, and notices
- **Inbox** for customer queries, plus **user management**

## Tech stack

- PHP 7.3+ / 8.0 and Laravel 8
- Laravel UI for authentication
- MySQL 8 and Redis
- Laravel Mix for front-end assets
- Docker via Laravel Sail (app, MySQL, Redis and Mailhog)

## Getting started

### Option 1: Local setup

Requirements: PHP 7.3+ (or 8.0), Composer, Node.js and MySQL.

```bash
git clone https://github.com/Thefakedeal/dharankitchen.git
cd dharankitchen

composer install
cp .env.example .env
php artisan key:generate
```

Create a database, set the `DB_*` values in `.env`, then run:

```bash
php artisan migrate
php artisan storage:link
npm install
npm run dev
php artisan serve
```

The site is now available at http://127.0.0.1:8000.

### Option 2: Docker (Laravel Sail)

Requirements: Docker. Run `composer install` first so the Sail files exist in `vendor/`.

```bash
cp .env.example .env
composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
```

| Service | Address |
| --- | --- |
| App | http://localhost (set `APP_PORT` in `.env` to change) |
| MySQL | port 3306 |
| Redis | port 6379 |
| Mailhog (catches outgoing mail) | http://localhost:8025 |

## Running tests

```bash
php artisan test
```

## Project layout

| Path | Contents |
| --- | --- |
| `routes/web.php` | Public routes and the `/admin` route group |
| `app/Http/Controllers/Admin` | Admin controllers (bookings, rooms, menus, events and so on) |
| `app/Models` | Room, RoomType, RoomImage, Category, Menu, Event, Gallery, Package, Place, Notice |
| `resources/views/frontend` | Public pages |
| `database` | Migrations, factories and seeders |
| `docker-compose.yml` | Sail services |
