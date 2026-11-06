# Manager Library — Utilities & Demo Seeder

This repository is dedicated to support tools and data automation for the application.

## Demo Seeder (`seed.php`)
Strictly complying with data privacy policies and data model access patterns:
- Developed a native PHP script tasked with automating initial record seeding.
- **Insertion Policy:** Operates exclusively by consuming the secure API endpoint via structured HTTP requests using the Bearer token, completely avoiding direct SQL queries to the database engine to protect relational integrity.
