

# Project Setup Guide

## Overview

This project consists of a **frontend** and a **backend**. The frontend is built with modern web technologies and the backend is powered by **Laravel**. To get the project up and running on your server, follow the steps below.

## Prerequisites

Before you begin, make sure you have the following installed:

- **Node.js** and **npm** (for the frontend)
- **PHP** and **Composer** (for the backend)
- **MySQL** or **SQLite** (for the database)

---

## Step-by-Step Setup

### 1. Clone the Frontend Repository

First, clone the frontend repository to your local machine or server:

```bash
git clone https://github.com/hardeex/bitz-frontend
cd frontend
```

### 2. Build the Frontend

In your terminal, navigate to the **frontend** directory and run the following command to build the project:

```bash
npm run build
```

This will compile and optimize the frontend assets for production.

### 3. Upload Frontend to the Server

Once the build is complete, upload the **`build`** directory to your server. This is the folder that contains the compiled frontend assets.

---

### 4. Clone the Backend Repository

Next, clone the **backend** repository:

```bash
git clone https://github.com/hardeex/bitz-backend
cd bitz-backend
```

### 5. Install Backend Dependencies

Install the required PHP dependencies using **Composer**:

```bash
composer install
```

This will download all necessary libraries for the backend.

### 6. Set Up the Database

1. **Create the Database**: Create a MySQL or SQLite database (depending on your configuration).
2. **Configure `.env`**: Copy the `.env.example` file to `.env` and configure the database and other environment variables accordingly.

For MySQL, set the database connection(Only for the backend as the frontend is not handling any database operations):

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

For SQLite:

```dotenv
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database/database.sqlite
```

### 7. Run Migrations

Run the database migrations to set up the necessary tables:

```bash
php artisan migrate
```

---

### 8. Configure the Frontend to Communicate with the Backend

After uploading both the frontend and backend to the server, you need to ensure they are connected correctly.

1. **Update `.env` in Frontend**:
   In the frontend project, locate the `.env` file and set the API URL for the backend:

   ```dotenv
   API_BASE_URL=http://127.0.0.1:9001/api
   ```

   This URL should match the backend server’s URL.

2. **Update API URL in Frontend Configuration**:
   Open the **config/api.php** file in the frontend project and update the backend URL as follows:

   ```javascript
   const API_BASE_URL = 'http://127.0.0.1:9001/api'; // Update with your backend's URL
   ```

---

### 9. Test the Application

Once everything is set up, you can test the application by visiting the frontend in your browser. The frontend should now be able to communicate with the backend API and everything should work as expected.

---

## Troubleshooting

### Common Issues:

- **CORS Issues**: If you are facing CORS (Cross-Origin Resource Sharing) errors, make sure the backend is configured to allow requests from the frontend's domain. You can handle this by updating the CORS settings in the `app/Http/Middleware/HandleCors.php` file in the backend.

- **Database Connection Errors**: If you receive a database connection error, double-check your `.env` settings, ensuring the database credentials are correct and the database is running.

- **Frontend Not Displaying Correctly**: If the frontend is not displaying as expected, ensure that the assets are properly built (`npm run build`), and the `build` folder is uploaded correctly.

---

## Need Help?

If you encounter any issues during the setup process or with connecting the frontend and backend, feel free to reach out. I’ll be happy to assist you with any troubleshooting or technical support.

---

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

---

<!-- ## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details. -->

---

