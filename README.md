# Academic Records System

This repository contains the Academic Records System for the Spring 2025 Term Project in CPSC‑332 (File Structures and Database Systems) at California State University, Fullerton. It provides a MySQL database schema, sample data, and PHP web interfaces for managing and querying academic records.

---

## Table of Contents

1. [Project Overview](#project-overview)
2. [Prerequisites](#prerequisites)
3. [Installation & Setup](#installation--setup)
4. [Database Schema](#database-schema)
5. [Sample Data](#sample-data)
6. [Web Interface Scripts](#web-interface-scripts)
7. [File Structure](#file-structure)
8. [Usage](#usage)
9. [Technologies](#technologies)
10. [Author](#author)

---

## Project Overview

The Academic Records System manages information about professors, departments, courses, sections, students, minors, and enrollments. It includes:

* A normalized MySQL schema (`tables.sql`)
* A set of sample data for testing (`testing-data.sql`)
* PHP scripts to query and display information via a web interface

## Prerequisites

* PHP >= 8.0
* MySQL >= 5.7 (or MariaDB)
* Web server (Apache, Nginx, or PHP built‑in server)
* Git (to clone this repository)

## Installation & Setup

1. **Clone the repository**

   ```bash
   git clone https://github.com/your‑username/academic‑records.git
   cd academic‑records
   ```

2. **Import the database schema**

   ```bash
   mysql -u <username> -p < tables.sql
   ```

3. **Load sample data**

   ```bash
   mysql -u <username> -p academic_records < testing-data.sql
   ```

4. **Configure database connection**

   * Open `config.php`
   * Set your MySQL credentials (`$username`, `$password`)

5. **Run the web server**

   ```bash
   # Using PHP built‑in server (default port 8000)
   php -S localhost:8000
   ```

6. **Access the application**
   Open your browser at `http://localhost:8000/`

## Database Schema

Defined in `tables.sql`, the schema includes:

* **Professor**: personal and employment details
* **Department**: academic units, linked to professors as chairpersons
* **Course**: course metadata, linked to departments
* **Prerequisite**: course prerequisite relationships (self‑referencing)
* **Section**: individual course offerings (section number, schedule, instructor)
* **Student**: student personal and major department info
* **Minor**: student minor declarations
* **Enrollment**: student enrollments and grades in sections

Refer to `tables.sql` for full DDL definitions.

## Sample Data

* Inserted via `testing-data.sql` into the `academic_records` database
* Includes:

  * 3 professors
  * 2 departments
  * 4 courses + prerequisites
  * 6 sections with schedules and instructors
  * 8 students with majors/minors
  * Enrollment records with letter grades

## Web Interface Scripts

| File                    | Description                                                                |
| ----------------------- | -------------------------------------------------------------------------- |
| `config.php`            | Database connection settings (hostname, username, password, database name) |
| `professor-classes.php` | Lookup a professor’s scheduled courses and sections                        |
| `class-sections.php`    | View all sections of a given course and current enrollment numbers         |
| `student-courses.php`   | Display a transcript (courses and grades) for a specified student          |
| `count-grades.php`      | Generate grade distribution statistics for a course section                |

## File Structure

```
academic-records/
├── config.php
├── class-sections.php
├── count-grades.php
├── professor-classes.php
├── student-courses.php
├── tables.sql
├── testing-data.sql
└── README.md
```

## Usage

1. **Professor’s Classes**

   * Navigate to `professor-classes.php`
   * Enter a professor’s SSN to view their sections

2. **Course Sections & Enrollment**

   * Navigate to `class-sections.php`
   * Enter a course number (e.g., `CS101`) to view sections and seat availability

3. **Student Transcript**

   * Navigate to `student-courses.php`
   * Enter a student ID (e.g., `S001`) to view their transcript and grades

4. **Grade Distribution**

   * Navigate to `count-grades.php`
   * Select a section to see counts of each grade letter

## Technologies

* **MySQL**: relational database management
* **PHP**: server‑side scripting
* **HTML/CSS**: basic markup for output
* **Git**: version control

## Author

* Christian McGowan
* Third‑year Computer Science student, California State University, Fullerton

---

*Spring 2025 CPSC‑332 Term Project*
