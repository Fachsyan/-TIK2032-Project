-- Create database and tables
CREATE DATABASE website;
USE website;

CREATE TABLE images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    src VARCHAR(255) NOT NULL,
    alt VARCHAR(255) NOT NULL
);

CREATE TABLE blogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    category VARCHAR(50) NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image_src VARCHAR(255) NOT NULL
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert data into images table
INSERT INTO images (src, alt) VALUES
('gallery/stretched-1920-1080-1147275.jpg', 'Hutao Picture'),
('gallery/wallpaperflare.com_wallpaper (3).jpg', 'Makima Picture'),
('gallery/Yoru.png', 'Yoru Picture'),
('gallery/furina_background2.jpg', 'Furina Picture'),
('gallery/wallpaperflare.com_wallpaper (41).jpg', 'Makima Picture 2'),
('gallery/wallpaperflare.com_wallpaper (21).jpg', 'Denji And Pochita');

-- Insert data into blogs table
INSERT INTO blogs (date, category, title, content, image_src) VALUES
('2024-04-01', 'Waifu', 'Makima The Control Devil, A Devil Yet So Beautiful?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident ullam quis cum quas numquam! Molestias sed debitis consequatur! Eos, assumenda modi exercitationem magni fugiat natus temporibus earum provident aliquam?', 'gallery/wallpaperflare.com_wallpaper (75).jpg'),
('2024-02-04', 'Sport', 'The Reds, The Biggest Club In England!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident ullam quis cum quas numquam! Molestias sed debitis consequatur! Eos, assumenda modi exercitationem magni fugiat natus temporibus earum provident aliquam?', 'gallery/np_file_192978.jpeg'),
('2024-04-04', 'Movie', 'The New Release, Chainsaw Man Movie!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident ullam quis cum quas numquam! Molestias sed debitis consequatur! Eos, assumenda modi exercitationem magni fugiat natus temporibus earum provident aliquam?', 'gallery/Chainsaw_Man___The_Movie_Reze_Arc.jpg');
