# Farmer John's Grocery Store - Employee Management System

## 🏪 About the Project
The **Farmer John's Grocery Store Employee Management System** is a web-based solution designed to streamline employee management operations for small grocery stores. The system allows admins to manage employee records, work schedules, salaries, and performance tracking.

## 📌 Features
- **Employee Registration & Login**: Secure authentication system.
- **Role-based Access Control**: Admins manage employees; employees access their profiles.
- **Work Schedule Management**: Assign shifts and track employee work hours.
- **Payroll System**: View salary breakdowns and payment history.
- **Performance Tracking**: Monitor attendance and employee ratings.

## 🛠️ Tech Stack
- **Backend**: PHP (MVC Architecture)
- **Database**: MySQL (PDO for database connection)
- **Frontend**: HTML, CSS, JavaScript (Bootstrap for UI)
- **Version Control**: Git & GitHub

## 📖 Installation Guide
1. Clone the repository:
   ```sh
   git clone https://github.com/JacobColburn/EmployeeManagementSystem.git
   ```
2. Set up a local server using **XAMPP** or **WAMP**.
3. Create a MySQL database and import the `database.sql` file.
4. Configure database connection in `/config/database.php`:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'employee_management');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   ```
5. Start your local server and open:
   ```
   http://localhost/EmployeeManagementSystem
   ```

## 📜 License
This project is licensed under the **MIT License**.

## 🤝 Contributing
Pull requests are welcome! If you encounter any issues, please open a GitHub issue.

## 📩 Contact
For any inquiries, reach out to **Jacob Colburn** at [Your Email] or check out my [GitHub Profile](https://github.com/JacobColburn).
