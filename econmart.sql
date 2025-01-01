-- Users table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    createdat TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    role ENUM('user', 'admin') DEFAULT 'user'
);


-- Categories table
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL
);

-- Products table
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    image VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    categoryid INT,
    FOREIGN KEY (categoryid) REFERENCES categories(id)
);

-- Orders table
CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    productid INT,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    userid INT,
    orderdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userid) REFERENCES users(id),
    FOREIGN KEY (productid) REFERENCES products(id)
);

-- CartItems table
CREATE TABLE cart (
    id INT PRIMARY KEY AUTO_INCREMENT,
    userid INT,
    productid INT,
    FOREIGN KEY (userid) REFERENCES users(id),
    FOREIGN KEY (productid) REFERENCES products(id)
);

-- Payments table
CREATE TABLE payments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    product_id INT,
    ref VARCHAR(100) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     status ENUM('pending', 'completed', 'failed') NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);
CREATE TABLE email_campaign_template (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    html LONGTEXT NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, --
    status ENUM('active', 'inactive') DEFAULT 'active'
);

