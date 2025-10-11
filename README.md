# 📚 OnlineBookstore: E-commerce Platform with MySQL Integration
A full-featured e-commerce solution for selling books online. This project focuses on Database Management, User Authentication and implementing part of a purchase workflow.

### Project Overview
The core challenge of this project was to successfully integrate a robust MySQL database with the application layer to handle dynamic inventory, secure user data and manage transactional logic. It successfully demonstrates the ability to handle CRUD (Create, Read, Update, Delete) operations in a real-world scenario.

### 🌟 Key Features & Functionalities
This platform offers a complete user experience from browsing to checkout.
Secure User Authentication: Implemented a full registration and login system to handle user sessions and personal data.
Dynamic Product Catalog: Books are fetched from the MySQL database and dynamically organized into categories ensuring easy browsing.
Shopping Cart Management: Allows users to add, remove and update quantities of items before purchase.
Data Persistence: All user and book data is securely managed and persisted using MySQL.

### 🛠️ Technology Stack
This project was developed using the following technologies, showcasing competence in both the application logic and data layers:

![HTML5](https://img.shields.io/badge/-HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/-CSS3-1572B6?style=flat-square&logo=css3)
![JavaScript](https://img.shields.io/badge/-JavaScript-black?style=flat-square&logo=javascript)
![PHP](https://img.shields.io/badge/-PHP-777BB4?style=flat-square&logo=php)
![MySQL](https://img.shields.io/badge/-MySQL-black?style=flat-square&logo=mysql)

### 🚀 Getting Started (How to Run Locally)
To run this project on your local machine, please follow the steps below:

#### Prerequisites
1.  You will need a local development environment that supports PHP and MySQL/MariaDB.
2.  **Local Server (Required):** **XAMPP** (Ensure that the Apache and MySQL services are running).
3.  **Code Editor:** Any code editor of your choice (VS Code, Sublime Text, etc.).

#### Installation

### 1. Clone the Repository

Open your terminal or command prompt and execute the following commands to clone the project:

```bash 
git clone https://github.com/thaisliira/magicbook.git
cd magicbook
```
### 2. Set Up the XAMPP Environment
Move the Project: Copy the cloned magicbook folder and paste it into your XAMPP web root directory, which is the htdocs folder.
Typical Path: C:\xampp\htdocs\

### 3. Database Setup
The project uses a database named library_magicbook.
Start Services: Make sure both Apache and MySQL services are running in your XAMPP control panel.
Access phpMyAdmin: Open your web browser and navigate to: http://localhost/phpmyadmin

I) Create a new database with the exact name: library_magicbook<br>
II) Import the Schema: Select the newly created library_magicbook database<br>
III) Click on the "Import" tab.<br>
IV)Locate and select the SQL file from the repository, named: library_magicbook.sql.<br>
V) Click "Go" or "Run" to import the tables and initial data.

### 4. Run the Application
Open your web browser and navigate to the local address of the project:
http://localhost/magicbook/ <br>
The application should now be running and connected to the database.
