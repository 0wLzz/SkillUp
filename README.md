![Skill Up Logo](public\assets\SkillUp.png)

SkillUp is a web application designed to help users develop soft skills that support their journey toward a successful career. This project was developed as the final assignment for the *Software Engineering* course and demonstrates practical use of a modern PHP framework along with utility-first CSS.


## Table of Contents

- [About the Project](#about-the-project)  
- [Features](#features)  
- [Tech Stack](#tech-stack)  
- [Getting Started](#getting-started)  
  - [Prerequisites](#prerequisites)  
  - [Installation](#installation)  
---

## About the Project

SkillUp is aimed at empowering learners to build and enhance their soft skills through a structured web interface. The platform is implemented with a focus on clean separation between backend logic and frontend presentation, using Blade templating and Tailwind CSS utility classes for responsive UI.

Live demo: https://skillup-production-2661.up.railway.app/

---

## Features

- User-focused interface for exploring soft skill resources  
- Responsive layout powered by Tailwind CSS  
- Modular backend built with Laravel MVC architecture  
- Database schema managed with migrations and seeders

---

## Tech Stack

| Component | Technology |
|-----------|------------|
| Backend Framework | Laravel 12.x |
| Templating | Blade |
| CSS Framework | Tailwind CSS |
| Database | Local SQL (configurable) |
| Build Tools | Vite (for assets) |

---

## Getting Started

Follow these steps to run the SkillUp website locally.

### Prerequisites

Ensure the following are installed on your machine:

- PHP (compatible with Laravel 12.x)
- Composer
- Node.js and npm
- A local database (MySQL, SQLite, etc.)

---

### Installation

Clone the repository and navigate into the project:

```bash
git clone https://github.com/0wLzz/SkillUp.git
cd SkillUp
```

Install PHP & JS Dependencies:
```bash
composer install
npm install
```

Generate the Laravel application key:
```bash
php artisan key:generate
```

Connect to storage:
```bash
php artisan storage:link
```

Run the database migration and seed tables using Laravel Artisan commands:
```bash
php artisan migrate
php artisan db:seed
```

Compile frontend assets (CSS/JS) using Vite:
```bash
npm run dev
npm run build
```

Start the application
```bash
php artisan serve
```

By default, the site will be available at:
```bash
http://localhost:8000
```

## All Set!
Enjoy to use and explore our website! Thank you.