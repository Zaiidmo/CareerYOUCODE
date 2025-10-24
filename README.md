# 🚀 CareerYOUCODE

**CareerYOUCODE** is a web platform designed to bridge the gap between **YOUCODE students** and their future careers.  
It empowers students to connect, network, and showcase their skills through events like the exclusive **Job Dating**, offering a fun, interactive way to meet potential employers.

<p align="left">
  <img alt="Laravel" src="https://img.shields.io/badge/Laravel-11.x-red">
  <img alt="PHP" src="https://img.shields.io/badge/PHP-8.x-blue">
  <img alt="MySQL" src="https://img.shields.io/badge/Database-MySQL-orange">
  <img alt="TailwindCSS" src="https://img.shields.io/badge/Frontend-TailwindCSS-teal">
  <img alt="License" src="https://img.shields.io/badge/License-MIT-green">
</p>

---

## ✨ Key Features

-   🌗 Light/dark mode toggle
-   🧩 Interactive learning and job modules
-   💼 Job search functionality
-   🧭 Personalized career planning
-   🔐 Authentication and profile system
-   📱 Fully responsive design

---

## 🧠 Tech Stack

**Frontend:** HTML, JavaScript, TailwindCSS  
**Backend:** Laravel (PHP), MySQL  
**Dev Environment:** [Laragon](https://laragon.org/index.html)

---

## ⚙️ Installation

### 1️⃣ Prerequisites

-   [Laragon](https://laragon.org/index.html)
-   [Node.js](https://nodejs.org/en)
-   [Composer](https://getcomposer.org/)
-   PHP 8.x, MySQL 8.x

### 2️⃣ Clone the Repository

```bash
git clone https://github.com/Zaiidmo/CareerYOUCODE.git
cd CareerYOUCODE
```

### 3️⃣ Install Dependencies

```bash
npm install
composer update
composer dump-autoload
```

### 4️⃣ Configure Laravel

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan cache:clear
```

### 5️⃣ Run the Project

```bash
npm run dev
npx tailwindcss -i ./resources/css/styles.css -o ./public/css/app.css --watch --minify
php artisan serve
```

> App runs locally on [http://localhost:8000](http://localhost:8000)

---

## 🗄️ Database Setup

All required tables and data are located in the `/database` folder.  
You only need to update the credentials in `.env` to match your MySQL setup.

Example `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=careeryoucode
DB_USERNAME=root
DB_PASSWORD=
```

To import sample data:

```bash
mysql -u root -p careeryoucode < database/seeders
```

---

## 🎨 Design & Roadmap

1. Design phase (UML diagrams, use cases)
2. Jira sprint planning
3. UI mock-ups
4. Development and testing

---

## 👤 Author

-   [@Zaiid-Moumni](https://github.com/Zaiidmo)

---

## 🪪 License

Released under the **MIT License** — see [LICENSE](LICENSE).

---

## ❤️ Contributing

Contributions are welcome!  
Please read [CONTRIBUTING.md](CONTRIBUTING.md) before submitting pull requests.

---

## 🛡️ Security

Found a vulnerability? Check [SECURITY.md](SECURITY.md) for how to report it securely.
