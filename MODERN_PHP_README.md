# MkopoSafi Loans - Modern PHP Application

A modern, secure loan application platform built with clean PHP architecture and contemporary web standards.

## Features

- ✅ **Modern PHP 8.2+** - Using latest PHP features and PSR standards
- ✅ **MVC Architecture** - Organized controllers, models, and views
- ✅ **RESTful API** - JSON-based API endpoints
- ✅ **Professional Design** - Inspired by NYOTA Project (nyotaproject.go.ke)
- ✅ **Responsive UI** - Mobile-first Bootstrap 5 design
- ✅ **Security** - Prepared statements, input validation, CSRF protection
- ✅ **M-Pesa Integration** - STK Push and transaction callbacks
- ✅ **Database Ready** - MySQL/MariaDB support

## Project Structure

```
mkoposafi/
├── config/
│   ├── autoload.php          # PSR-4 Autoloader
│   └── env.php               # Environment configuration
├── src/
│   ├── Application.php       # Main application class
│   ├── Database.php          # Database connection
│   ├── Router.php            # URL routing
│   └── Controllers/
│       ├── Controller.php    # Base controller
│       ├── HomeController.php
│       ├── EligibilityController.php
│       ├── LoanController.php
│       ├── MpesaController.php
│       └── TransactionController.php
├── views/
│   ├── layout.php            # Main layout template
│   └── home.php              # Home page view
├── css/
│   └── modern.css            # Modern styling
├── js/
│   └── app.js                # Frontend application logic
├── .env                      # Environment variables (never commit)
├── .env.example              # Environment template
├── index-modern.php          # Modernized entry point
└── README.md
```

## Quick Start

### 1. Installation

```bash
git clone https://github.com/PTTZSURV/nyoteka.git
cd nyoteka
```

### 2. Environment Setup

```bash
cp .env.example .env
```

Edit `.env` and add your database credentials:
```env
DB_HOST=localhost
DB_USER=your_user
DB_PASSWORD=your_password
DB_NAME=mkopscle_mkoposafiloans
```

### 3. Running the Application

For development (using PHP built-in server):
```bash
php -S localhost:8000 -t . index-modern.php
```

For production, point your web server's root to the project directory.

## Modern PHP Architecture

### 1. Namespacing & Autoloading
```php
// PSR-4 compliant namespacing
namespace App\Controllers;
class HomeController extends Controller { }
```

### 2. Type Declarations
```php
declare(strict_types=1);

public function query(string $sql, array $params = []): \mysqli_result|bool
```

### 3. DB Access with Prepared Statements
```php
$result = $this->database->query(
    "SELECT * FROM transactions WHERE id = ?",
    [$id]
);
```

### 4. Proper Error Handling
```php
try {
    $app->run();
} catch (\Exception $e) {
    error_log($e->getMessage());
}
```

## API Endpoints

### Check Eligibility
```
POST /check-eligibility
Content-Type: application/json

{
  "name": "John Doe",
  "phone_number": "0712345678",
  "id_number": "12345678",
  "loan_type": "Car Loan"
}

Response:
{
  "eligible": true,
  "loan_amount": 15000,
  "message": "You qualify for a loan!"
}
```

### Apply for Loan
```
POST /apply-loan
```

### Query Transaction
```
GET /query/{transaction_id}
```

### M-Pesa Callbacks
```
POST /mpesa-callback
POST /mpesa-validation
POST /mpesa-confirmation
```

## User Interface

### Design Features
- **Professional Color Scheme**: Primary purple (#564FF9) with teal accent (#00C4B4)
- **Modern Typography**: Plus Jakarta Sans & Sora fonts
- **Responsive Grid**: Mobile-first Bootstrap 5 layout
- **Interactive Components**: Smooth animations and transitions
- **Form Validation**: Real-time client and server-side validation

### Sections
1. **Hero Section** - Call-to-action and loan amount info
2. **Eligibility Form** - Quick loan check form
3. **How It Works** - 4-step process explanation
4. **Features** - 6 key benefits with icons
5. **FAQ** - Common questions accordion
6. **CTA** - Final call-to-action

## Security

- **SQL Injection Protection**: Prepared statements with parameter binding
- **XSS Prevention**: HTML output escaping and CSP headers
- **CSRF Protection**: Token validation on forms
- **Environment Variables**: Sensitive data in `.env` file
- **HTTPS Ready**: Supports SSL/TLS encryption
- **Input Validation**: Type checking and rule-based validation

## Database Schema

```sql
CREATE TABLE transactions (
  merchant_request_id VARCHAR(255) NOT NULL,
  checkout_request_id VARCHAR(255) NOT NULL,
  result_code INT(255) NOT NULL,
  result_desc VARCHAR(255) NOT NULL,
  amount DECIMAL(10,0) NOT NULL,
  mpesa_receipt_number VARCHAR(255) NOT NULL,
  transaction_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  phone_number INT(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

## Deployment

### Railway.app
```bash
git push origin main
```

The app auto-deploys via Railway with:
- PHP 8.2
- Automatic HTTPS
- Environment variable management
- Database integration

### Traditional Server
```bash
# Copy files to public_html
# Set proper permissions
chmod -R 755 .

# Update .env with server database credentials
```

## Performance

- **Minified CSS/JS** - Production-ready assets
- **Lazy Loading** - Images and non-critical resources
- **Database Indexing** - Optimized queries
- **Caching** - Browser and server-side caching
- **CDN Resources** - Bootstrap and Font Awesome from CDN

## Development

### Adding a New Controller

```php
// src/Controllers/MyController.php
namespace App\Controllers;

class MyController extends Controller {
    public function action(): void {
        $this->render('my-view', ['data' => $data]);
    }
}
```

### Adding a Route

```php
// In Application.php registerRoutes()
$this->router->post('/my-route', Controllers\MyController::class, 'action');
```

### Adding a View

```php
// views/my-view.php
<h1><?php echo htmlspecialchars($data); ?></h1>
```

## Testing

```bash
# Manual API testing
curl -X POST http://localhost:8000/check-eligibility \
  -H "Content-Type: application/json" \
  -d '{"name":"John","phone_number":"0712345678",...}'
```

## Support

For issues and questions:
- **Email**: info@mkoposafi.com
- **Phone**: +254 800 222 221
- **GitHub**: https://github.com/PTTZSURV/nyoteka

## License

This project is proprietary. All rights reserved © 2026 MkopoSafi.

## Version

Current Version: **2.0.0** (Modern PHP Edition)

---

**Last Updated**: February 2026
**Maintained By**: MkopoSafi Development Team
