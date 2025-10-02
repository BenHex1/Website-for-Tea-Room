# Chollerton Tearooms Website

A responsive website for Chollerton Tearooms, a charming tea room and bed & breakfast located in the picturesque hamlet of Chollerton in the North Tyne Valley. This project features a full-stack web application with a customer interest form and administrative dashboard.

![Project Banner](roomPic.jpg)

## 📋 Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [Pages](#pages)
- [Security Features](#security-features)
- [Responsive Design](#responsive-design)
- [Credits](#credits)
- [License](#license)

## 🌟 Overview

This website serves as a digital presence for Chollerton Tearooms, showcasing their services including:
- Traditional tearoom with freshly baked goods
- Bed and Breakfast accommodation
- Local activities and attractions
- Craft shop, village store, and post office services

The site allows visitors to express interest in various services and provides an administrative interface to view all submitted requests.

## ✨ Features

### Customer-Facing Features
- **Responsive Design**: Fully responsive layout that adapts to mobile, tablet, and desktop screens
- **Interactive Navigation**: Clean navigation bar with hover effects
- **Information Sections**: Detailed information about the tearoom, B&B, and local activities
- **Google Maps Integration**: Embedded map showing the location
- **Interest Form**: Multi-field form for customers to express interest in various services
- **Form Validation**: Client-side validation for all required fields
- **Success Confirmation**: Dedicated success page displaying submitted information

### Administrative Features
- **Request Dashboard**: View all customer interest submissions in a sortable table
- **Database Integration**: MySQL database for persistent data storage
- **Real-time Updates**: Automatic page refresh to display new submissions
- **Organized Data Display**: Requests sorted alphabetically by surname

### Security Features
- **XSS Protection**: `htmlspecialchars()` used throughout to prevent cross-site scripting attacks
- **SQL Injection Prevention**: Prepared statements and proper query handling
- **Input Validation**: Required fields and type validation on forms

## 🛠 Technologies Used

### Frontend
- **HTML5**: Semantic markup and structure
- **CSS3**: Custom styling with flexbox and grid layouts
- **Responsive Design**: Media queries for mobile optimization

### Backend
- **PHP**: Server-side processing and database interactions
- **MySQL**: Relational database management

### Additional Technologies
- **Google Maps API**: Location embedding
- **Form Handling**: POST method for secure data submission

## 📁 Project Structure

```
Website-for-Tea-Room/
│
├── index.html              # Homepage with about us, B&B, and activities info
├── findMore.html           # Interest expression form
├── viewReq.php            # Admin dashboard to view all requests
├── success.php            # Form submission confirmation page
├── credits.html           # Credits and references page
│
├── submit.php             # Form processing and database insertion
├── conn.php               # Database connection configuration
│
├── style.css              # Main stylesheet with responsive design
│
├── CT.sql                 # Database schema and initial data
│
└── Assets/
    ├── logo.png           # Tearooms logo
    ├── roomPic.jpg        # Header background image
    ├── aboutUsPic.jpg     # About us section image
    ├── bedPic.jpg         # B&B section image
    └── hikingPic.jpg      # Activities section image
```

## 🚀 Installation

### Prerequisites
- Web server (Apache/Nginx)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web browser

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/Website-for-Tea-Room.git
   cd Website-for-Tea-Room
   ```

2. **Configure your web server**
   - Point your web server's document root to the project directory
   - Ensure PHP is enabled

3. **Update database credentials**
   - Open `conn.php`
   - Update the database connection parameters:
   ```php
   $conn = new mysqli('localhost', 'your_username', 'your_password', 'your_database');
   ```

4. **Set up the database** (see Database Setup section below)

## 💾 Database Setup

1. **Create a new MySQL database**
   ```sql
   CREATE DATABASE chollerton_tearooms;
   ```

2. **Import the database schema**
   ```bash
   mysql -u your_username -p chollerton_tearooms < CT.sql
   ```

   Or use phpMyAdmin to import the `CT.sql` file.

### Database Structure

The database consists of two main tables:

#### `CT_category`
Stores service categories:
- `catID` (varchar): Primary key (c1-c5)
- `catDesc` (varchar): Category description

Categories include:
- Tearoom
- Craft Shop
- Village Store
- Post Office
- Bed and Breakfast

#### `CT_expressedInterest`
Stores customer interest submissions:
- `expressInterestID` (int): Auto-increment primary key
- `forename` (varchar): Customer's first name
- `surname` (varchar): Customer's last name
- `postalAddress` (varchar): Postal address
- `mobileTelNo` (varchar): Mobile telephone number
- `email` (varchar): Email address
- `sendMethod` (varchar): Preferred contact method (post/email)
- `catID` (varchar): Foreign key to CT_category

## 📖 Usage

### For Visitors

1. **Browse Information**: Navigate to the homepage to learn about the tearooms, B&B, and local activities
2. **Express Interest**: Click "Find out more" to access the interest form
3. **Submit Form**: Fill in your details and select a category of interest
4. **Confirmation**: View your submitted information on the success page

### For Administrators

1. **View Requests**: Navigate to "View requests" in the navigation menu
2. **Review Submissions**: See all customer interest submissions in a sortable table
3. **Contact Customers**: Use the displayed contact information to follow up with interested customers

## 📄 Pages

### Home (`index.html`)
- Welcome header with background image
- About Us section describing the tearoom
- Bed & Breakfast information
- Local activities overview
- Embedded Google Maps location
- Directions by car and public transport

### Find Out More (`findMore.html`)
- Customer interest form with fields:
  - First name and last name
  - Postal address
  - Phone number
  - Email address
  - Category selection (Tearoom, Craft Shop, Village Store, Post Office, B&B)
  - Preferred contact method (post/email)
- Form validation for all required fields

### View Requests (`viewReq.php`)
- Administrative dashboard
- Tabular display of all submissions
- Columns: Name, Postal Address, Phone Number, Email, Send Method, Category
- Sorted alphabetically by surname
- Hover effects on table rows
- Responsive table with horizontal scrolling on mobile

### Success (`success.php`)
- Confirmation message
- Display of all submitted information
- XSS protection on all displayed data

### Credits (`credits.html`)
- Author information
- Image and resource references

## 🔒 Security Features

### Cross-Site Scripting (XSS) Prevention
All user input displayed on pages uses `htmlspecialchars()` to convert special characters to HTML entities:
```php
<?php echo htmlspecialchars($row->forename); ?>
```

### SQL Injection Prevention
Database queries use proper escaping and parameterization to prevent SQL injection attacks.

### Input Validation
- Required field validation on all form inputs
- Type-specific validation (email, telephone)
- Server-side validation in addition to client-side

## 📱 Responsive Design

The website is fully responsive with specific optimizations for mobile devices:

### Mobile Breakpoint (max-width: 480px)
- **Grid Layout**: Changes from 2-column to 1-column layout
- **Table Display**: Horizontal scrolling enabled for wide tables
- **Navigation**: Flexible wrapping for navigation items
- **Images**: Properly scaled background images

### CSS Features
- Flexbox for navigation
- CSS Grid for content layout
- Media queries for responsive behavior
- Hover effects for interactive elements

## 👤 Credits

**Author**: Ben Hugill
**Student ID**: w22011554
**Email**: ben.hugill@northumbria.ac.uk

### Image Credits
- Interior photo by Ksenia Chernaya from Pexels
- Teapot icon from Adobe Stock
---

**Note**: This project was developed as part of a web development course at Northumbria University. The database credentials in `conn.php` should be updated before deployment to a production environment.
