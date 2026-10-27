# Dharan Kitchen

A comprehensive hotel and restaurant management website built with Laravel 8, featuring an intuitive public-facing interface and a secure, full-featured administrative panel. The platform allows guests to explore available room types, browse restaurant menus, discover local attractions and events, and submit room booking requests through an online reservation system.

The website includes dedicated sections for hotel accommodations, dining services, events, and nearby places of interest, providing visitors with a convenient way to explore the hotel's offerings and plan their stay. Guests can view room details, review available amenities, explore dining options, and submit booking inquiries online without needing to contact the hotel directly.

On the administrative side, the system provides a protected `/admin` dashboard where authorized staff can manage room information, review and process booking requests, coordinate guest check-ins, and maintain website content. Administrators can update room listings, manage restaurant menus, publish events, and maintain information about nearby attractions, keeping the website's content accurate and up to date.

Built using Laravel 8, the application follows a structured backend architecture with server-side functionality for managing reservations, handling administrative operations, and organizing website content. The integration of guest-facing features and administrative tools provides a centralized platform for managing hotel and restaurant information while improving the overall booking experience and simplifying day-to-day operations.

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
