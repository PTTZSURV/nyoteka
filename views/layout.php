<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MkopoSafi - Fast Loans to Your M-Pesa Account">
    <meta name="theme-color" content="#564FF9">
    
    <title><?php echo isset($title) ? htmlspecialchars($title) . ' | ' : ''; ?>MkopoSafi Loans</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Sora:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/modern.css">
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17044189271"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-17044189271');
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="/">
                <i class="fas fa-wallet me-2"></i>MkopoSafi
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tel:+254800222221">Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?php include $view; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">About MkopoSafi</h5>
                    <p class="text-muted">Fast, secure loans to your M-Pesa account with no paperwork or guarantors needed.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Quick Links</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="/" class="text-muted text-decoration-none">Home</a></li>
                        <li><a href="#terms" data-bs-toggle="modal" class="text-muted text-decoration-none">Terms & Conditions</a></li>
                        <li><a href="#policy" data-bs-toggle="modal" class="text-muted text-decoration-none">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="mb-3">Contact</h5>
                    <p class="text-muted">
                        <i class="fas fa-phone me-2"></i>+254 800 222 221<br>
                        <i class="fas fa-envelope me-2"></i>info@mkoposafi.com
                    </p>
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="text-center text-muted small">
                <p>&copy; 2026 MkopoSafi. All rights reserved. | Version <?php echo APP_VERSION; ?></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="/js/app.js"></script>
</body>
</html>
