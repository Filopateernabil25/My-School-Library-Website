# 📚 My School Library Website  

## Overview

My School Library Website is a simple dynamic website built using PHP and Bootstrap.  
The project displays a collection of books where users can browse books on the home page and click on any book to view its details.

This project helps students understand the basics of dynamic websites using PHP. 

<p align="center">
  <img src="https://github.com/user-attachments/assets/b525c07e-7c88-45c6-bc94-2eee4d6753dc" width="22%" />
  <img src="https://github.com/user-attachments/assets/a7c1eb6e-4d53-4533-9633-27fe5fa0cdb4" width="22%" />
  <img src="https://github.com/user-attachments/assets/e835d129-40e0-4b71-9ef6-a3c6755c6597" width="22%" />
</p>

## Pages & Features

### 1. Home Page (index.php)
- Bootstrap Carousel with 2–3 library or book images
- Featured Books section
- Each book is displayed as a card with:
  - Book title
  - Cover image
  - "Learn More" button

### 2. Book Details Page (details.php)
- Displays full book details:
  - Title
  - Cover image
  - Description
  - Author
- Uses GET parameter (id) to identify the selected book

### 3. About Page (about.php)
- Short description about the library or the importance of reading
- Simple image of books or a library

### 4. Includes Folder (inc/)
- header.php: Navbar with links (Home, About, Books)
- footer.php: Footer with copyright text
- data.php: Contains an array of books
  (title, image, description, author)

## Tech Stack

- PHP
- Bootstrap
- HTML & CSS
