-- Create the `user` table
CREATE TABLE `user` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `address` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL
);

-- Insert sample data into the `user` table
INSERT INTO `user` (`name`, `email`, `address`, `password`, `created_at`, `updated_at`)
VALUES
('John Doe', 'john.doe@example.com', '123 Main Street', 'password123', NOW(), NOW()),
('Jane Smith', 'jane.smith@example.com', '456 Elm Street', 'securepassword', NOW(), NOW()),
('Bob Johnson', 'bob.johnson@example.com', '789 Oak Street', 'qwerty123', NOW(), NOW());

-- Create the `category` table
CREATE TABLE `category` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `description` TEXT DEFAULT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME DEFAULT NULL
);

-- Insert sample data into the `category` table
INSERT INTO `category` (`name`, `description`, `created_at`, `updated_at`)
VALUES
('Electronics', 'Devices and gadgets like phones, laptops, and TVs', NOW(), NULL),
('Books', 'Various genres of books including fiction, non-fiction, and academic', NOW(), NULL),
('Clothing', 'Apparel for men, women, and children', NOW(), NULL);

-- Create the `product` table
CREATE TABLE `product` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `category_id` INT(11) UNSIGNED NOT NULL,
    `price` DECIMAL(10,2) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `updated_at` DATETIME NOT NULL,
    FOREIGN KEY (`category_id`) REFERENCES `category`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Insert sample data into the `product` table
INSERT INTO `product` (`name`, `category_id`, `price`, `image`, `created_at`, `updated_at`)
VALUES
('iPhone 14', 1, 999.99, 'iphone14.jpg', NOW(), NOW()),
('Samsung Galaxy S23', 1, 899.99, 'galaxy_s23.jpg', NOW(), NOW()),
('MacBook Pro', 1, 1999.99, 'macbook_pro.jpg', NOW(), NOW()),
('Fiction Book: The Great Adventure', 2, 19.99, 'great_adventure.jpg', NOW(), NOW()),
('Men\'s T-Shirt', 3, 12.99, 'mens_tshirt.jpg', NOW(), NOW()),
('Women\'s Dress', 3, 29.99, 'womens_dress.jpg', NOW(), NOW());
