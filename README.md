## Table of contents
* [General info](#General-info)
* [Features](#Features)
* [Screenshots](#Screenshots)
* [Technologies](#Technologies)
* [Setup](#Setup)

## General info
Nexa-Client is an example of Customer Relationship Management (CRM) application designed to facilitate robust interaction between customers and service representatives in a call center environment.
The application's architecture supports data handling and processing capabilities to manage customer interactions, complaints, inquiries, and other service-related activities for various brands. Made using Filament and Blueprint for rapid laravel development.

## Features
* Address Management
* Order Handling
* Complaints and Inquiries Management
* Interactions Tracking
* Soft Deletion
* UUIDs
* Roles
* etc...

### Screenshots
![DBML](https://i.imgur.com/6R9GOuB.png) | ![Customer View](https://i.imgur.com/QZVNdeE.png) | ![Address Modal](https://i.imgur.com/qtiVI3M.png)|
|-|-|-|

## Technologies
* Laravel 11
* Livewire 3
* Tailwind CSS v3.4
* Filament 3
* Blueprint
	
## Setup

### Installation Instructions
1. Download the archive or clone the project using git `git@github.com:drajin/nexa-client.git`

2. Run `cd nexa-client`.

3. Rename `.env.example` file to `.env`.

4. Update `.env` to your specific needs.
  
5. Run `composer install`.   

6. Run `npm install`.

7. Run `npm run build`.

8. Run `php artisan migrate --seed`.

9. Run `php artisan serve`.

After installed, you can access `http://localhost:8000` in your browser.

### Demo Access   
-  **Email:**  `admin@nexa-client.com`  
-  **Password:**  `password`
