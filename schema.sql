CREATE DATABASE crud_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE crud_db;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    owner_name VARCHAR(100) NOT NULL,
    pet_name VARCHAR(100) NOT NULL,
    weight_ DECIMAL(5,2),
    base_groom_fee_ DECIMAL(7,2),
    add_on_count_ INT,
    add_on_price_ DECIMAL(7,2),
    paid_amount_ DECIMAL(7,2)
);