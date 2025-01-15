# Consultoria Vida Segura WordPress Template

Official website for Consultoria Vida Segura products and services. Insurance, Health Plans and consortium. Adapted to the specific needs of the client.

## 🚀 Features
- **WordPress** serves as the CMS with ACF, WP REST API, and Safe SVG plugins.

## 🛠️ Requirements
To run this project, make sure you have the following:

- **Node.js**: Version 16 or above
- **PHP**: Version 7.4 or above
- **WordPress**: Latest version
- **MySQL**: Database for WordPress

## 📦 Installation
### 0. Create those folders

````bash
git clone https://github.com/yourusername/blank-wordpress-template.git
cd blank-wordpress-template
mkdir backend
````
### 1. Install WordPress
- Download the latest version of WordPress.
- Extract it into your backend directory.
- Configure the wp-config.php file with your database credentials.

### 2. Install WordPress Plugins
WP REST API: This will enable WordPress to interact with the React and Laravel setup.
ACF (Advanced Custom Fields): For creating custom content fields within WordPress.
Safe SVG: Allows the safe upload and use of SVG files in WordPress.
Contact Form 7
You can install these plugins directly via the WordPress admin dashboard or download and place them in the wp-content/plugins directory.

- Active the theme and all the presets plugins
- Urls examples at rest api
/index.php?rest_route=/wp/v2/pages&slug=homepage
/index.php?rest_route=/wp/v2/pages&slug=pages&slug=about

### 5. Run the Project

````bash
cd frontend
npm start
