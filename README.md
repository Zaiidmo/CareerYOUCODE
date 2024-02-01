# CareerYOUCODE
Welcome to CareerYOUCODE, the ultimate platform bridging the gap between YOUCODE and your dream career! Unleash the
power of connections at our exclusive Job Dating event. Connect, network, and pave the way for your future success.
Swipe right on your dream career with CareerYoucode!

# Installation

To set up CareerYOUCODE, follow these steps:

1. **Configure Development Environment:**
- Use Laragon as the preferred development environment. You can download it [here](https://laragon.org/index.html).

2. **Clone The Project's Repository:**
- Clone the CareerYOUCODE repository using the following command:
```bash
git clone https://github.com/Zaiidmo/CareerYOUCODE
```

3. **Install Dependencies:**
- Install Node.js and Composer.
- Open the command prompt from the project directory and run the following commands:
```bash
npm install
composer update
composer dump-autoload
```
4. **Configure LARAVEL Environment**
- Open the command prompt from the project directory and run the following commands:
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan cache:clear
```
## CareerYOUCODE Features

- Light/dark mode toggle
- nteractive learning modules
- Job search functionality
- Personalized career planning
- User authentication and profiles
- Responsive design for various devices

## Roadmap

1. Design phase, including use cases and class diagrams.
2. Jira planning for development milestones.
3. Mock-up creation.
4. Development phase.

## Tech Stack

**Client:** HTML, JavaScript, TailwindCSS

**Server:** Laravel(PHP), MySQL

## What do you need to do

1. After Setting Up The Environment (Steps 3-4)
You'll find that all the needed tables and Data for the Project all Already Created in the data base folder All you
need to do is to change the credentials in the .env file to match those in your database
2. Open The Repository Using Your Own Code Editor and Run the following commands
```bash
npm run dev
```
```bash
npx tailwindcss -i ./resources/css/styles.css -o ./public/css/app.css --watch --minify
```
```bash
php artisan serve
```
This will start a local server on port 8000. You can access it by
going to http://localhost:8000 in your web browser.
---
ENJOY EXPLORING THE MAGIC BEHIND THE SCENES 

## Author

- [@Zaiid-Moumni](https://github.com/Zaiidmo/)
