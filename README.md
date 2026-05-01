# StyleHub - Premium Fashion E-commerce Store

A modern, responsive e-commerce website built with PHP and MySQL, featuring user authentication, product catalog, shopping cart, and admin panel.

## Features

- 🛍️ Product catalog with categories (Men, Women, Kids, Accessories)
- 🔐 User registration and login
- 🛒 Shopping cart functionality
- 👨‍💼 Admin panel for managing products
- 📱 Responsive design
- 💳 Checkout system
- 🎨 Modern UI with CSS

## Tech Stack

- **Backend**: PHP 8+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Deployment**: Railway

## Local Development Setup

1. **Prerequisites**:
   - XAMPP (or any PHP/MySQL server)
   - Git

2. **Clone the repository**:
   ```bash
   git clone https://github.com/Cynth20/ecommerce.git
   cd ecommerce
   ```

3. **Database Setup**:
   - Start XAMPP MySQL
   - Create database: `stylehub`
   - Run the setup: Visit `http://localhost/stylehub/setup.php`

4. **Run locally**:
   - Place in `C:\xampp\htdocs\stylehub`
   - Visit `http://localhost/stylehub`

## Railway Deployment

### 1. Connect to Railway
1. Go to [Railway.app](https://railway.app)
2. Sign up/Login with your GitHub account
3. Click "New Project" → "Deploy from GitHub repo"

### 2. Select Repository
- Choose `Cynth20/ecommerce` from your GitHub repos
- Click "Deploy"

### 3. Add Database
1. In your Railway project, click "Add Plugin"
2. Select "Database" → "MySQL"
3. Railway will automatically create the database and provide environment variables

### 4. Configure Environment Variables
Railway automatically sets these variables for your MySQL database:
- `RAILWAY_DB_HOST`
- `RAILWAY_DB_PORT`
- `RAILWAY_DB_NAME`
- `RAILWAY_DB_USER`
- `RAILWAY_DB_PASSWORD`

Your `config.php` will automatically use these values.

### 5. Database Setup on Railway
1. Once deployed, visit your Railway app URL
2. Go to `/setup.php` to initialize the database tables and seed data
3. Create an admin user during setup

### 6. Access Your Site
- **Live URL**: Provided by Railway after deployment
- **Admin Panel**: `/admin.php` (login with admin credentials)

## Project Structure

```
stylehub/
├── config.php          # Database configuration (Railway-ready)
├── db.php              # Database connection bootstrap
├── index.php           # Homepage
├── login.php           # User authentication
├── products.php        # Product catalog
├── product_detail.php  # Individual product view
├── cart.php            # Shopping cart
├── checkout.php        # Checkout process
├── admin.php           # Admin panel
├── add_to_cart.php     # Cart functionality
├── logout.php          # User logout
├── setup.php           # Database setup script
├── style.css           # Main stylesheet
├── railway.env.example # Environment variables template
└── .gitignore          # Git ignore rules
```

## Database Schema

- **users**: User accounts (id, name, email, password, role)
- **categories**: Product categories (id, name)
- **products**: Product catalog (id, name, description, price, category_id)
- **orders**: Customer orders (id, user_id, total, status, created_at)
- **order_items**: Order line items (id, order_id, product_id, qty, price)

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test locally
5. Commit and push
6. Create a Pull Request

## License

Built with passion for fashion. All rights reserved.

---

**Deployed on Railway** 🚂