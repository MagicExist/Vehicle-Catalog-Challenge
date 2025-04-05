# 🚗 Vehicle Catalog Challenge

This project is a technical challenge focused on building a web server that manages a functional vehicle catalog with full CRUD operations.

## ✨ Features
- Create, read, update, and delete vehicles  
- Follows best coding practices   
- Factories and seeder database

 
## 📁 Repository Structure

```bash
📦 Vehicle-Catalog/
├── 📁 app/             # Main application logic (MVC structure)
│   ├── 📁 Http/        # Controllers, middleware, and requests
│   ├── 📁 Models/      # Eloquent models
│   ├── 📁 Providers/   # Service providers for binding dependencies, event handling, and application bootstrapping
│   └── ...
├── 📁 bootstrap/       # Laravel bootstrapping files
├── 📁 config/          # Configuration files (database, auth, etc.)
├── 📁 database/        # Migrations, seeders, and factories
├── 📁 public/          # Public assets (CSS, JS, images)
├── 📁 resources/       # Views, components, and assets
├── 📁 routes/          # Web and API route definitions
├── 📁 storage/         # Logs, cache, and uploaded files
├── 📁 tests/           # Application tests
├── 📄 .env.example     # Environment variables template
├── 📄 composer.json    # PHP dependencies
├── 📄 README.md        # Project documentation
└── ...
```

## 🎯 Installation Guide
### 🏁Prerequisites 
Before installing this Laravel project, make sure your system meets the following requirements:

- PHP >= 8.1
- Composer
- PostgreSQL
- Node.js & NPM (for frontend assets)
- Git

### 🚀Installation Steps
1. __Clone the Repository__
```bash
clone https://github.com/yourusername/your-project-name.git
cd your-project-name
```
2. __Install PHP Dependencies__
```bash
composer install
```
3. __Configure Environment Variables__
```bash
cp .env.example .env
php artisan key:generate
```
4. __Edit the .env file to configure your database connection__
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
5. __Set Up the Database__
```bash
php artisan migrate
To include seed data (optional):
php artisan db:seed
```
6. __Start the Development Server__
```bash
php artisan serve
```
__✅Your application should now be running.__

## 📌 Contribution
Please remember to check the [CONTRIBUTING.md](https://github.com/MagicExist/Vehicle-Catalog-Challenge/blob/main/CONTRIBUTING.md)  file before making any contributions.

## 👥 Authors  

- [@Johhan Parra](https://github.com/MagicExist) 