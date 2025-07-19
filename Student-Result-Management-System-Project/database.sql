CREATE DATABASE IF NOT EXISTS student_result;
USE student_result;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    roll VARCHAR(50) UNIQUE,
    class VARCHAR(50)
);

CREATE TABLE results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    subject VARCHAR(100),
    marks INT,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE
);