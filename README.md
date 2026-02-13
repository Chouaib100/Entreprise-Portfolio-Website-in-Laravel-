# 🚀 Laravel Web Application

A modern and responsive web application built with **Laravel 11**, designed with a modular architecture and integrated management system.

---

## 📌 Project Overview

This project is a full-stack Laravel application that includes both **Frontend** and **Admin Panel** functionalities.

It provides content management, candidate applications handling, email campaigns, and authentication features with strong security practices.

---

## 📋 Core Modules

The system is structured into **10 main modules**:

- **Home** – Landing page with dynamic content  
- **About** – Company/Platform information  
- **Services** – Services listing and management  
- **Portfolio** – Projects showcase with file uploads  
- **Team** – Team members management  
- **Candidates** – Job application system  
- **Contacts** – Contact form submissions  
- **Email** – Email campaigns & notifications  
- **Auth** – Authentication system  
- **Admin Dashboard** – Content & system management  

---

## 🔌 Key Integrations

- 📧 **Email System** – Laravel Mail integration  
- 📂 **File Upload System** – Secure file handling (CVs, portfolio images)  
- 🗄 **Database Integration** – MySQL relational database  
- 🖥 **Frontend + Admin Panel** – Separated management structure  

---

## 📊 Data Workflows

### 👨‍💼 Candidate Applications

1. User submits application form  
2. CV & data stored securely  
3. Admin reviews submissions from dashboard  

### 📝 Content Management

Admin manages:

- Services  
- Portfolio items  
- Team members  
- About section  

### 📧 Email Campaigns

- Admin can send structured email messages  
- Integrated mail system for notifications  

---

## 🔐 Security Features

This project follows Laravel best practices:

- ✅ CSRF Protection  
- ✅ Authentication & Authorization  
- ✅ Form Validation  
- ✅ Secure File Upload Handling  
- ✅ Protected Admin Routes  
- ✅ Input Sanitization  

---

## 💾 Tech Stack

| Technology   | Description               |
|--------------|---------------------------|
| Laravel 11   | Backend Framework         |
| MySQL        | Relational Database       |
| Bootstrap 5  | Frontend UI Framework     |
| PHP 8+       | Server-side language      |

---

## 🚀 Development Status

### ✅ Completed Features

- All 10 core modules implemented  
- Full Admin CRUD system  
- Email integration  
- Candidate management system  
- Responsive frontend  

### 🔧 Phase 1 Fixes Applied

- Improved validation rules  
- Enhanced security checks  
- Refactored controllers  
- Optimized routes structure  

---

## ⚙ Installation

```bash
git clone https://github.com/your-username/your-repository.git
cd your-repository
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

---

## 📂 Environment Setup

Configure your `.env` file:

```env
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=your_mail_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
```

---

## 👨‍💻 Author

**Chouaib Zouine**

- 💼 Full-Stack Developer  
- 🌍 Passionate about secure web development  
- 🔐 Interested in Web Security & Backend Architecture  

---

## 📄 License

This project is open-source and available under the MIT License.
