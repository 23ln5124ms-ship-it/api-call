# API-CALL

# Author & Course
Mariel V. Viray 

III-BSIT-B

# Laravel Students REST API Description

A simple RESTful API built with Laravel 11 and SQLite that handles CRUD operations for a Students record system. Each student has a name, email, and course. All endpoints were tested using the Postman extension inside Visual Studio Code.

This project was created as a hands-on exercise to understand how REST APIs work in Laravel — covering routing, controllers, models, migrations, and request validation.

---

## Requirements

- PHP 8.2 or higher
- Composer
- Laravel 11
- Visual Studio Code (with Postman extension for testing)
- SQLite (already bundled with PHP — no separate install needed)

---

## Setup Instructions

### Step 1 — Create the project

composer create-project laravel/laravel api-call
cd api-call

### Step 2 — Configure the database

Open the .env file and set DB_CONNECTION to sqlite. Remove the following lines:

DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD

Then create the SQLite file (Windows PowerShell):

New-Item database/database.sqlite

### Step 3 — Install API scaffolding

php artisan install:api

When prompted, type `yes` to run migrations.


### Step 4 — Set up routes

Open routes/api.php and replace its contents with:

Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/{id}', [StudentsController::class, 'show']);
Route::post('/students', [StudentsController::class, 'store']);
Route::put('/students/{id}', [StudentsController::class, 'update']);
Route::patch('/students/{id}', [StudentsController::class, 'patch']);
Route::delete('/students', [StudentsController::class, 'destroyAll']);
Route::delete('/students/{id}', [StudentsController::class, 'destroy']);

### Step 5 — Create the Student model

php artisan make:model Student

Inside Student.php, add name, email, and course to the $fillable array.

### Step 6 — Create and run the migration

php artisan make:migration create_students_table

Add the columns (id, name, email unique, course, timestamps) in the migration file, then run:

php artisan migrate

### Step 7 — Create the controller

php artisan make:controller StudentsController

Add the index, show, store, update, patch, destroy, and destroyAll methods inside the controller.

### Step 8 — Run the server

php artisan serve

The API will be available at:

http://127.0.0.1:8000/api/students

---

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | /api/students | Returns a list of all students |
| GET | /api/students/{id} | Returns a single student by ID |
| POST | /api/students | Creates a new student record |
| PUT | /api/students/{id} | Updates all fields of an existing student |
| PATCH | /api/students/{id} | Updates only specific fields of a student |
| DELETE | /api/students/{id} | Deletes one student by ID |
| DELETE | /api/students | Deletes all student records |

**Note:** For `POST`, `PUT`, and `PATCH` requests, the body must be **raw JSON** with the fields `name`, `email`, and `course`.
- `PUT` requires all three fields.
- `PATCH` only needs the fields you want to update.


### Example Request Body

{
  "name": "Juan dela Cruz",
  "email": "juan@example.com",
  "course": "BSCS"
}

---

## Screen Recording Demonstration

Watch the full demonstration of this project here:

[View on Google Drive](https://drive.google.com/drive/folders/1gG-3lrgVOr6Ex8T8Dx5pfRNSwzw5MK1k?usp=sharing)
img.shields.io