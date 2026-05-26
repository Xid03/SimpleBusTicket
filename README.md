<div align="center">

# Simple Bus Ticket Booking System

### A PHP and MySQL web application for searching bus routes, booking seats, managing trips, and tracking passenger bookings.

![PHP](https://img.shields.io/badge/PHP-5.6%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Status](https://img.shields.io/badge/Status-Active-success?style=for-the-badge)

[Features](#features) | [Tech Stack](#tech-stack) | [Installation](#installation) | [Usage](#usage) | [Screenshots](#screenshots) | [Contact](#contact-information)

</div>

---

## Project Overview

**Simple Bus Ticket Booking System** is a web-based ticket reservation platform built with **PHP**, **MySQL**, **Bootstrap**, and **JavaScript**. It provides a complete workflow for customers to search available routes, book seats, receive a PNR-style booking reference, and view booking information.

The project also includes an admin dashboard for managing routes, buses, seats, bookings, customers, and administrator accounts. It is suitable as an academic project, portfolio project, or base system for learning full-stack PHP development.

---

## Features

### Customer Features

- Search bus routes by source, destination, and departure date.
- View available routes, departure time, fares, and seat availability.
- Select seats and create new ticket bookings.
- Generate unique booking or PNR numbers.
- Search booking details using PNR.
- Download booking information.
- Cancel or delete bookings.

### Admin Features

- Secure admin login flow.
- Dashboard summary for bookings, buses, routes, seats, customers, admins, and earnings.
- Add, update, and delete bus records.
- Add, update, and delete route records.
- View and manage customer data.
- View and manage bookings.
- Manage seat availability.
- Create additional admin users.

### System Highlights

- Database-backed booking workflow.
- Dynamic route search and fare calculation.
- Seat tracking per bus.
- Modular PHP partials for shared logic.
- Responsive Bootstrap-based interface.
- Included SQL dump for quick local setup.

---

## Tech Stack

| Layer | Technology |
| --- | --- |
| Frontend | HTML5, CSS3, Bootstrap 5, JavaScript |
| Backend | PHP |
| Database | MySQL / MariaDB |
| Icons & Fonts | Font Awesome, Google Fonts |
| Server | Apache through XAMPP, WAMP, MAMP, or a similar PHP stack |

---

## Installation

### Prerequisites

Make sure the following tools are installed:

- PHP 5.6 or newer
- MySQL or MariaDB
- Apache server, usually through XAMPP, WAMP, or MAMP
- Git
- phpMyAdmin, MySQL Workbench, or another database import tool

### Setup Steps

1. Clone the repository:

```bash
git clone https://github.com/Xid03/SimpleBusTicket.git
```

2. Move the project into your web server directory if needed:

```bash
# Example for XAMPP on Windows
C:\xampp\htdocs\SimpleBusTicket
```

3. Create a MySQL database:

```sql
CREATE DATABASE sbtbsphp;
```

4. Import the SQL file:

```text
DATABASE FILE/sbtbsphp.sql
```

You can import it using phpMyAdmin or the MySQL command line:

```bash
mysql -u root -p sbtbsphp < "DATABASE FILE/sbtbsphp.sql"
```

5. Update the database connection if your local credentials are different:

```php
// assets/partials/_functions.php
$servername = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'sbtbsphp';
```

6. Start Apache and MySQL, then open the project in your browser:

```text
http://localhost/SimpleBusTicket/
```

---

## Usage

### Customer Flow

1. Open the homepage.
2. Search for a route using source, destination, and date.
3. Choose an available route.
4. Select a seat and submit the booking form.
5. Save the generated PNR number.
6. Use the PNR search option to view or download booking details.

### Admin Flow

1. Open the admin login modal from the homepage.
2. Sign in with the demo admin account.
3. Use the dashboard to manage routes, buses, seats, bookings, customers, and admin users.

### Demo Admin Account

```text
Username: admin
Password: Password@123
```

> This account is intended for local/demo use only. Change the default credentials before using this project in any public or production environment.

---

## Screenshots

> Add real application screenshots to make the repository more attractive to visitors. Suggested paths are listed below and can be updated after screenshots are captured.

| Home Page | Booking / Route Search | Admin Dashboard |
| --- | --- | --- |
| `docs/screenshots/home.png` | `docs/screenshots/booking.png` | `docs/screenshots/admin-dashboard.png` |

### Visual Preview

<p align="center">
  <img src="assets/img/sbtbsimg.png" alt="Simple Bus Ticket Booking System preview" width="700">
</p>

---

## Demo

A hosted demo is not currently configured.

To run the project locally, follow the [Installation](#installation) steps and open:

```text
http://localhost/SimpleBusTicket/
```

Recommended demo route data is included in:

```text
DATABASE FILE/sbtbsphp.sql
```

---

## Folder Structure

```text
SimpleBusTicket/
|-- admin/                         # Admin dashboard pages
|   |-- booking.php                # Booking management
|   |-- bus.php                    # Bus management
|   |-- customer.php               # Customer management
|   |-- dashboard.php              # Admin overview dashboard
|   |-- route.php                  # Route management
|   |-- seat.php                   # Seat management
|   `-- signup.php                 # Admin account creation
|-- assets/
|   |-- img/                       # UI images and icons
|   |-- partials/                  # Shared PHP handlers and helpers
|   |-- scripts/                   # JavaScript files
|   `-- styles/                    # PHP-based CSS style includes
|-- DATABASE FILE/
|   `-- sbtbsphp.sql               # Database schema and sample data
|-- images/                        # Public image assets
|-- OnlineBus/                     # Static HTML prototype pages
|-- customerLogin.php              # Customer login/signup page
|-- index.php                      # Main customer-facing homepage
|-- indexCust.php                  # Customer page
|-- routes.php                     # Route search results page
`-- script.js                      # Shared JavaScript
```

---

## Future Improvements

- Replace raw SQL string interpolation with prepared statements.
- Add stronger password and session security.
- Add role-based access control for admin users.
- Add online payment gateway integration.
- Send email or SMS booking confirmations.
- Improve mobile responsiveness across all pages.
- Add booking status tracking.
- Add route filtering by price, time, and bus type.
- Add automated tests for booking and route workflows.
- Deploy a live demo using a PHP-compatible hosting service.

---

## Contact Information

**Author:** Xid03  
**GitHub:** [https://github.com/Xid03](https://github.com/Xid03)  
**Repository:** [https://github.com/Xid03/SimpleBusTicket](https://github.com/Xid03/SimpleBusTicket)

For feedback, suggestions, or collaboration, open an issue in this repository.

---

<div align="center">

Made for learning, portfolio building, and practical PHP/MySQL web development.

</div>
