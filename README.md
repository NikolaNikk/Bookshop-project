# Bookshop Application

This is a PHP-based bookshop management application containerized with Docker.

## Prerequisites

- Docker
- Docker Compose

## Running the Application

1. Clone or navigate to the project directory.

2. Build and start the containers:
   ```
   docker-compose up --build
   ```

3. Access the application at http://localhost:8080

The application will be running on port 8080, and the MySQL database on port 3306.

## Services

- **web**: PHP application with Apache server
- **db**: MySQL database

## Database Initialization

The database is automatically initialized with the schema from `sql_queries.sql` on first run.