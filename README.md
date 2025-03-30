# 🚗 Vehicle Catalog Challenge

This project is a technical challenge focused on building a web server that manages a functional vehicle catalog with full CRUD operations. The goal is to implement best practices, containerization with Docker, unit testing, and more.

## ✨ Features
- Create, read, update, and delete vehicles  
- Follows best coding practices  
- Dockerized environment  
- Unit testing for reliability
## 👥 Authors  

- [@Johhan Parra](https://github.com/MagicExist)  
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