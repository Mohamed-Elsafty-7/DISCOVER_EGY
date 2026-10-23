# Discover Egypt 🇪🇬

Discover Egypt is a tourism website project designed to introduce visitors to Egyptian destinations through image galleries, featured city cards, and short descriptions of selected locations.

The project is currently under development.

## ✨ Features

- Home page with an image carousel.
- Featured destination cards.
- Dedicated city details page.
- Destination content managed through a PHP data file.
- About Us page.
- Contact page with a message form interface.
- Shared navigation and page layout using PHP includes.
- Responsive layout components from Bootstrap.

## 🛠️ Built With

- PHP
- HTML5
- CSS3
- Bootstrap
- JavaScript for Bootstrap components

## 🗺️ Featured Destinations

The current destination data includes:

- Aswan
- Hurghada
- Port Said
- Sharm El Sheikh

The site also includes a collection of images for its home-page carousel.

## 🚀 Run Locally

PHP must be installed, or you can use a local PHP development environment such as XAMPP.

1. Clone the repository:

   ```bash
   git clone https://github.com/Mohamed-Elsafty-7/DISCOVER_EGY.git
   ```

2. Open the project directory in your terminal.
3. Start PHP's built-in development server from the project directory:

   ```bash
   php -S localhost:8000
   ```

4. Visit `http://localhost:8000` in your browser.

Ensure that PHP is installed and available in your system's PATH.

## 📂 Project Structure

- `index.php` — Home page and featured destinations.
- `cities.php` — Destination details.
- `info.php` — About Us page.
- `contact.php` — Contact form interface.
- `INC/data.php` — Carousel and destination data.
- `INC/header.php` — Shared header and navigation.
- `INC/footer.php` — Shared footer.
- `CSS/` — Stylesheets and Bootstrap assets.
- `JS/` — JavaScript assets.
- `IMG/` — Images used throughout the website.

## 📚 What I Practiced

- Building pages with PHP.
- Reusing layouts through PHP includes.
- Rendering page content from arrays.
- Passing a destination identifier through a URL query parameter.
- Organizing website content into separate files.
- Integrating Bootstrap components.

## ⚠️ Current Limitations

- The contact form is not connected to message-processing logic.
- Destination content is currently defined in PHP arrays rather than a database.
- The project does not yet provide a complete content-management or booking system.

## 🔮 Future Improvements

- Add more destinations and richer location information.
- Validate and safely handle destination parameters.
- Connect the contact form to server-side processing.
- Introduce a database for destination content.
- Improve accessibility and overall user experience.

---

A work-in-progress project exploring PHP and dynamic web-page rendering through Egyptian tourism content.
