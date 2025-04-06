## 🔧 How to View the Dynamic Website Locally (PHP + MySQL)

This project uses PHP and MySQL, so you'll need XAMPP to run it locally.

### 🧪 Prerequisites
- [Download & install XAMPP](https://www.apachefriends.org/index.html)
- A browser (e.g., Chrome, Firefox)

---

### 🚀 Steps to Run

1. **Start XAMPP**
   - Launch the XAMPP Control Panel
   - Start both **Apache** and **MySQL**

2. **Set Up the Project**
   - Copy or clone this repository into:
     ```
     xampp/htdocs/novella
     ```

3. **Import the Database**
   - Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Click **Import**
   - Choose the file: `novella_db.sql` (included in this repo)
   - Click **Go** to import the database

4. **Visit the Site**
   - Go to your browser and enter:
     ```
     http://localhost/novella/index.php
     ```

---

### 📁 Required Files

The below files are located in the "dynamic_version" folder in the repository:

- `index.php` – Homepage with login
- `register.php` – User registration page
- `register_process.php` – Handles new user registration
- `login.php` – Login validation
- `db.php` – Database connection config
- `books.php` – Book inventory + search filters
- `menu.html` – Coffee shop menu
- `styles.css`, `menu.css`, `books.css` – Styling
- `images/` – Folder with your images (used on homepage/menu)
- `novella_db.sql` – MySQL export of your full database

---

### 🗃️ How to Export the Database

If you're preparing the `novella_db.sql` file for someone else:
1. Go to **phpMyAdmin**
2. Select your database (`novella_db`)
3. Click the **Export** tab
4. Choose **Quick** and **SQL**
5. Click **Go** to download it
6. Add it to your repo

---
