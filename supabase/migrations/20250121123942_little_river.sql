/*
  # UIkit Demo Database Schema

  1. New Tables
    - slider_images
      - id (uuid, primary key)
      - title (text)
      - url (text)
      - created_at (timestamptz)
      - updated_at (timestamptz)
    
    - slideshow_images
      - id (uuid, primary key)
      - title (text)
      - description (text)
      - url (text)
      - created_at (timestamptz)
      - updated_at (timestamptz)
    
    - heroes
      - id (uuid, primary key)
      - title (text)
      - description (text)
      - primary_button (text)
      - secondary_button (text)
      - created_at (timestamptz)
      - updated_at (timestamptz)
    
    - gallery_images
      - id (uuid, primary key)
      - title (text)
      - url (text)
      - thumbnail (text)
      - created_at (timestamptz)
      - updated_at (timestamptz)
    
    - features
      - id (uuid, primary key)
      - icon (text)
      - title (text)
      - description (text)
      - created_at (timestamptz)
      - updated_at (timestamptz)

  2. Security
    - Enable RLS on all tables
    - Add policies for public read access
*/

-- Create slider_images table
CREATE TABLE slider_images (
    id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
    title text NOT NULL,
    url text NOT NULL,
    created_at timestamptz DEFAULT now(),
    updated_at timestamptz DEFAULT now()
);

ALTER TABLE slider_images ENABLE ROW LEVEL SECURITY;
CREATE POLICY "Allow public read access" ON slider_images FOR SELECT USING (true);

-- Create slideshow_images table
CREATE TABLE slideshow_images (
    id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
    title text NOT NULL,
    description text NOT NULL,
    url text NOT NULL,
    created_at timestamptz DEFAULT now(),
    updated_at timestamptz DEFAULT now()
);

ALTER TABLE slideshow_images ENABLE ROW LEVEL SECURITY;
CREATE POLICY "Allow public read access" ON slideshow_images FOR SELECT USING (true);

-- Create heroes table
CREATE TABLE heroes (
    id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
    title text NOT NULL,
    description text NOT NULL,
    primary_button text NOT NULL,
    secondary_button text NOT NULL,
    created_at timestamptz DEFAULT now(),
    updated_at timestamptz DEFAULT now()
);

ALTER TABLE heroes ENABLE ROW LEVEL SECURITY;
CREATE POLICY "Allow public read access" ON heroes FOR SELECT USING (true);

-- Create gallery_images table
CREATE TABLE gallery_images (
    id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
    title text NOT NULL,
    url text NOT NULL,
    thumbnail text NOT NULL,
    created_at timestamptz DEFAULT now(),
    updated_at timestamptz DEFAULT now()
);

ALTER TABLE gallery_images ENABLE ROW LEVEL SECURITY;
CREATE POLICY "Allow public read access" ON gallery_images FOR SELECT USING (true);

-- Create features table
CREATE TABLE features (
    id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
    icon text NOT NULL,
    title text NOT NULL,
    description text NOT NULL,
    created_at timestamptz DEFAULT now(),
    updated_at timestamptz DEFAULT now()
);

ALTER TABLE features ENABLE ROW LEVEL SECURITY;
CREATE POLICY "Allow public read access" ON features FOR SELECT USING (true);

-- Insert sample data
-- Slider Images
INSERT INTO slider_images (title, url) VALUES
('Nature', 'https://images.unsplash.com/photo-1472214103451-9374bd1c798e'),
('Architecture', 'https://images.unsplash.com/photo-1511818966892-d7d671e672a2'),
('Technology', 'https://images.unsplash.com/photo-1518770660439-4636190af475');

-- Slideshow Images
INSERT INTO slideshow_images (title, description, url) VALUES
('Beautiful Landscapes', 'Discover nature''s beauty', 'https://images.unsplash.com/photo-1469474968028-56623f02e42e'),
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
('settings', 'Customizable', 'Easily customize and extend with UIkit''s flexible framework.'),
('mail', 'Responsive', 'Fully responsive design that works on all devices.');