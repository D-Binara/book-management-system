# 📚 Book Management System

A Laravel-based Book Management System that allows users to manage books effortlessly. The system includes
functionalities to add, edit, delete, and list books, with a clean and professional user interface.

---

## 🔧 Features

- **Add New Books**: Easily add books with a title, author, and publication year.
- **Edit Books**: Update the details of an existing book.
- **Delete Books**: Remove unwanted books from the system.
- **List and Search**: View all books in a table with real-time search functionality.
- **Responsive UI**: Built with Bootstrap, ensuring mobile-friendly design.
- **Real-Time Feedback**: Includes SweetAlert for confirmation dialogs.

---

## 🛠️ Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/D-Binara/book-management-system.git
   cd book-management-system

2. **Install dependencies**:
   ```bash

   composer install
   npm install

3. Set up environment variables:

   - Copy .env.example to .env:
    ```bash
   cp .env.example .env
   Update the .env file with your database credentials.

4. Run migrations:

    ```bash

    php artisan migrate

5. Seed the database with dummy data:

    ```bash
    php artisan db:seed --class=BookSeeder

6. Run the application:

    ```bash
    php artisan serve

7. Compile assets:

    ```bash
    npm run dev

## 💻 Usage

**Add a New Book**

**Edit a Book**

**List of Books**

**Delete Confirmation**

## 🛠️ Technologies Used
- Backend: Laravel
- Frontend: Bootstrap, Blade templates, SweetAlert
- Database: MySQL
- CSS: Custom styles and Bootstrap

## 📹 Video Demo
[Click here to watch the demo video](readmeDemo/demo.mp4)


## 📄 License
This project is licensed under the MIT License. See the LICENSE file for details.

## 🙋‍♂️ Support
For any issues or feature requests, feel free to create a new issue.

## 🎉 Contributions
Contributions are welcome! Feel free to fork the repository and submit a pull request.
