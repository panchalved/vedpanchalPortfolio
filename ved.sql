-- Connect to the database or create it if it doesn't exist
CREATE DATABASE IF NOT EXISTS ved;
USE ved;

-- Create the 'contacts' table to store form submissions
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Message TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
