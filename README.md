<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

## Laravel Form Handling and Eloquent Relationships

This is a Laravel Form Handling and Eloquent Relationships Application with a modular structure. It features an Admin Panel for managing posts, categories, and a Frontend for public-facing pages.

## 🚀 Features

### Admin Panel

- Dashboard overview

#### Category Management:
- Create a form to add new blog categories using
- Use to validate user input (e.g., required name, unique slug).
- Display error messages on the form when validation fails.
- Show a paginated list of categories in the admin panel.
- Blade layouts with reusable partials (header, sidebar, master layout)

#### Blog Management:
- Create a form to add new blog posts with fields like title, content, and category selection.
- Use to save post data, implementing a relationship (a category has many posts).
- Apply to ensure all fields are valid before submission.
- Display error messages clearly in the form upon validation failure.
- Show a paginated list of posts in the admin panel.

### Frontend
- Public blog listing
- Static pages (Home, About, etc.)
- Show blog categories and their respective posts.
- Show post titles, short description/content, and category name on the frontend page.

## 📂 Project Structure
#### 📂 Views (resources/views)

`admin/`

- `blog/` → Blog post views (`add-post.blade.php`, `all-posts.blade.php`)
- `category/` → Category management views
- `dashboard/` → Dashboard view
- `layouts/` → Master layout + partials (`header`, `sidebar`, `master`)

`frontend/`

- `auth/` → Login & Register views
- `blog/` → Blog listing views
- `categories/` → Category listing views
- `home/` → Homepage views
- `layouts/` → Frontend master layout
- `profile/` → User profile views


#### 📁 Controllers (app/Http/Controllers)

`Admin/`

- `AuthController.php` → Admin authentication  
- `CategoryController.php` → Manage categories  
- `DashboardController.php` → Admin dashboard  
- `PostController.php` → Manage blog posts  
- `UserProfileController.php` → Manage user profiles  

`Frontend/`

- `BlogController.php` → Display blogs  
- `CategoryController.php` → Display categories  
- `HomeController.php` → Frontend home  
- `PagesController.php` → Static pages  


#### 📁 Models (app/Models)

- `Category.php` → Category model  
- `Post.php` → Blog post model  
- `User.php` → User model  


#### 📁 Requests (app/Http/Requests)

- `CategoryRequest.php` → Validation for categories  
- `PostRequest.php` → Validation for posts

  ## ⚙️ Installation

### Clone the repo
```
git clone https://github.com/your-username/laravel-blog.git
cd laravel-blog
```
### Install dependencies
```
composer install
npm install && npm run dev
```
### Set up environment
```
cp .env.example .env
php artisan key:generate
```
### Configure your database in `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db
DB_USERNAME=root
DB_PASSWORD=yourpassword
```
### Run migrations
```
php artisan migrate --seed
```
### Start development server
```
php artisan serve
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
