# Inventory Management System
Inventory Management System (a.k.a IMS) is a web application powered by Laravel and Bootstrap CSS framework. A little bit history of this project --- it was initially made for the requirement of my diploma internship program around year 2018, in which to accomplish a project including building a system development.

This system consists of account login, registration and logout, basic Create, Read, Update, Delete (CRUD) operations and a dashboard page displaying the statistics of assets or inventory in pie charts.

Alright moving forward to present day, this project is currently modified, maintained and all the outdated packages were updated to latest version too --- including the Laravel itself!

TL/DR: This is a Laravel V8.83.23 web app + auth + CRUD. 
Updated on 13/9/2022

## Table of Content:
 - [Requirements](#Requirements)
 - [Installation](#Installation)
 - [Usage](#Usage)
 - [Future improvements](#Future-improvements)

## Requirements
- Composer: 2.4.1 (latest)
- PHP: 7.3 - 8.1 (using 7.4.3)
- MySQL: 8.0.30 (latest)
- Nginx: 1.23.1 (latest, or Apache should do)

## Installation
1) Clone this project.
2) Delete `composer.lock` and rename `.env.example` into `.env`.
3) Run `php artisan key:generate`
4) Run `composer install`
5) Create a new database, `ims` with collation `utf8mb4_unicode_ci`
6) Run `php artisan migrate`
7) Run `php artisan serve` to start the server at http://localhost:8000/

## Usage
1) Visit http://localhost:8000/register to create new account.
2) Visit http://localhost:8000/ or http://localhost:8000/login to login.
3) You may try the CRUD operations by exploring the links in the left sidebar.
4) Click your name at your top corner right and logout to log out from the system.

## Future Improvements
- Storing required assets (js and css) into local directory instead of using CDN to improve the performance of the server.
- Implementing containerized services such as Docker and Kubernetes.