# SWD-CA2-Secure-Blog (Secure PHP Blog Application)

PHP-based blogging web application built with PHP and MySQL. This repository contains a secured version of an open-source PHP blog system, hardened as part of Secure Web Development (CA2). The main focus of this work is implementing and demonstrating mitigations for common OWASP Top 10 risks, including Broken Access Control (IDOR), session security hardening, Stored XSS prevention, HTTP security headers, and secure handling of sensitive configuration data.

## Original Project Credit
This project is based on an open-source PHP Blog System used as a functional baseline.

- Original repository: https://github.com/krisnaajiep/php-blog-system

All security hardening, testing evidence, and documentation in this repository were implemented as part of CA2.

---

## Screenshots

### Main Page
![Simple-Blog-03-06-2025_05_31_PM](https://github.com/user-attachments/assets/33eeb68d-b38d-4c6a-95b3-27a8801e357a)

### Login Page
![Simple-Blog-03-08-2025_02_44_PM](https://github.com/user-attachments/assets/025e0582-ade8-4715-9fb7-ea5ce4fd40a0)


### Dashboard Page
![Simple-Blog-Dashboard-03-06-2025_05_42_PM](https://github.com/user-attachments/assets/0ab3c1ac-34cd-48b0-9bc0-18e5e60f24d0)


## Features and Security Objectives

### Functional Features
- User authentication (login, registration)
- Account activation and password recovery
- Blog post management (create, edit, delete)
- Categories, search, and pagination
- User roles (admin/user)

### Security Objectives (My Contributions)
- Prevent **Broken Access Control (IDOR)** by enforcing server-side ownership validation for post actions
- Strengthen **session security** using HttpOnly and SameSite cookie attributes
- Reduce **Sensitive Data Exposure** by removing secrets and database dumps from the repository and using safe config templates
- Implement **HTTP Security Headers** to reduce client-side attack surface (e.g., clickjacking and script injection risks)
- Prevent **Stored XSS** through output encoding when rendering user-generated content

---

## Project Structure
- `app/` – Application logic (controllers, models, views)
  - `controllers/` – Request handling and authorization logic
  - `models/` – Database interaction layer
  - `views/` – Rendering layer (output encoding applied)
- `config/` – Configuration templates and environment settings (sensitive configs excluded)
- `core/` – Framework bootstrap / core services
- `helpers/` – Reusable helper functions
- `assets/` – Static files (CSS/JS/images)
- `index.php` – Application entry point

---

## Setup and Installation (XAMPP)

### 1) Clone the repository
```bash
git clone https://github.com/diyasaravarghese/SWD-CA2-Secure-Blog.git
cd SWD-CA2-Secure-Blog

# PHP Blog System

PHP-based Blogging Platform Web Application built with PHP and MySQL. The system allows users to create accounts, authenticate, manage their profiles, and post blog content. Admin have additional control over user management. Key features include account activation, password recovery, and a user-friendly post management system.

## Screenshots

### Main Page

![Simple-Blog-03-06-2025_05_31_PM](https://github.com/user-attachments/assets/33eeb68d-b38d-4c6a-95b3-27a8801e357a)

### Login Page

![Simple-Blog-03-08-2025_02_44_PM](https://github.com/user-attachments/assets/025e0582-ade8-4715-9fb7-ea5ce4fd40a0)

### Dashboard Page

![Simple-Blog-Dashboard-03-06-2025_05_42_PM](https://github.com/user-attachments/assets/0ab3c1ac-34cd-48b0-9bc0-18e5e60f24d0)

## Features

- **User Authentication**: Secure login and registration with password hashing.
- **Account Activation**: Email-based account verification.
- **Password Recovery**: Reset forgotten passwords via email.
- **User Management**: Admin can manage user accounts; users can manage their own profiles.
- **Blog Post Management**: Create, edit, and delete blog posts.
- **Categories**: Organize posts with categories.
- **Search**: Search posts by keywords and categories.
- **Pagination**: Navigate through posts.
- **User Roles**: Different roles with specific permissions.

## Technologies

- PHP (for backend development)
- MySQL (for database management)
- HTML/CSS (for frontend design)
- JavaScript (for client-side interactions)
- Bootstrap 5 (for CSS framework)

## Project Structure

- `app/` – Application logic (controllers, models, views).
- `config/` – Configuration templates and environment     settings.
- `core/` – Core framework bootstrap files.
- `helpers/` – Reusable helper functions.
- `assets/` – Static files (CSS, JavaScript, images).
- `index.php` – Application entry point.


## Setup

1. Clone the repository:

   ```bash git clone https://github.com/diyasaravarghese/SWD-CA2-Secure-Blog.git ```

2. Navigate to the project directory:

   ```bash cd SWD-CA2-Secure-Blog ```

3. Move the project files to the XAMPP `htdocs` directory  (usually located in `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS):

   ```bash mv SWD-CA2-Secure-Blog /path-to-xampp/htdocs/ ```

4. Create new database

   ```bash
   mysql -u root -p -e "CREATE DATABASE simple_project_blog_system;"
   ```

5. Import `simple_project_blog_system.sql` file

   ```bash
   mysql -u root -p simple_project_blog_system < config/simple_project_blog_system.sql
   ```

6. Configure the database, base URL, and base directory settings using `config/config.example.php`, and create a local `config.php` file (not committed to the repository).

7. Start XAMPP Control Panel and launch the **Apache** and **MySQL** services.

8. Access the application at `http://localhost/php-blog-system/auth/signin` (adjust the URL if your project is in a subfolder within `htdocs`).

## Usage Guidelines

- Navigate to the login page and authenticate.
- Create, edit, and delete your own blog posts.
- Access control prevents modifying other users’ posts.
- Admin users can manage users and content.
- Search and category features support content browsing.



