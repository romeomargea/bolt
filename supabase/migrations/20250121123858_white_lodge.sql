-- Create database
CREATE DATABASE IF NOT EXISTS uikit_demo;
USE uikit_demo;

-- Create slider_images table
CREATE TABLE IF NOT EXISTS slider_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create slideshow_images table
CREATE TABLE IF NOT EXISTS slideshow_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create heroes table
CREATE TABLE IF NOT EXISTS heroes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    primary_button VARCHAR(255) NOT NULL,
    secondary_button VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create gallery_images table
CREATE TABLE IF NOT EXISTS gallery_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    thumbnail VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create features table
CREATE TABLE IF NOT EXISTS features (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icon VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert sample data
-- Slider Images
INSERT INTO slider_images (title, url) VALUES
('Nature', 'https://images.unsplash.com/photo-1472214103451-9374bd1c798e'),
('Architecture', 'https://images.unsplash.com/photo-1511818966892-d7d671e672a2'),
('Technology', 'https://images.unsplash.com/photo-1518770660439-4636190af475');

-- Slideshow Images
INSERT INTO slideshow_images (title, description, url) VALUES
('Beautiful Landscapes', 'Discover nature\'s beauty', 'https://images.unsplash.com/photo-1469474968028-56623f02e42e'),
('Urban Life', 'Experience city vibes', 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000'),
('Ocean Views', 'Feel the ocean breeze', 'https://images.unsplash.com/photo-1505118380757-91f5f5632de0');

-- Hero
INSERT INTO heroes (title, description, primary_button, secondary_button) VALUES
('Welcome to UIkit Demo', 'A beautiful and modern website built with UIkit', 'Learn More', 'Get Started');

-- Gallery Images
INSERT INTO gallery_images (title, url, thumbnail) VALUES
('Art & Culture', 'https://images.unsplash.com/photo-1561214115-f2f134cc4912', 'https://images.unsplash.com/photo-1561214115-f2f134cc4912?w=400&h=300&fit=crop'),
('Travel', 'https://images.unsplash.com/photo-1488646953014-85cb44e25828', 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=400&h=300&fit=crop'),
('Food', 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38', 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=400&h=300&fit=crop'),
('Nature', 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e', 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=400&h=300&fit=crop'),
('Architecture', 'https://images.unsplash.com/photo-1487958449943-2429e8be8625', 'https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=400&h=300&fit=crop'),
('Technology', 'https://images.unsplash.com/photo-1518770660439-4636190af475', 'https://images.unsplash.com/photo-1518770660439-4636190af475?w=400&h=300&fit=crop');

-- Features
INSERT INTO features (icon, title, description) VALUES
('home', 'Modern Design', 'Clean and modern interface built with UIkit components.'),
('settings', 'Customizable', 'Easily customize and extend with UIkit\'s flexible framework.'),
('mail', 'Responsive', 'Fully responsive design that works on all devices.');