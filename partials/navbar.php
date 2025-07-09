<?php
// Determine the base path based on the current directory
$basePath = (basename(dirname($_SERVER['SCRIPT_NAME'])) === 'pages') ? '../' : '';
?>
<nav class="navbar navbar-expand-lg navbar-dark" style="padding: 5px; background-color: #292929;">
    <div class="container-fluid" style="padding: 5px;">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="<?php echo $basePath; ?>index.php" style="margin: 0; padding: 5px;">
            <img src="<?php echo $basePath; ?>images/navbar-bg.jpg" alt="Home" class="navbar-logo">
        </a>
        
        <!-- Hamburger Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Collapsible Navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link contact-link" href="<?php echo $basePath; ?>pages/contact.php" data-translate="contact_us">Kontakta oss</a>
                </li>
            </ul>
            
            <!-- Language selector -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1.5em; color: #F5E9A1;">
                        <i class="fa fa-globe me-1"></i>🇸🇪
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown" style="background-color: #292929;">
                        <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')" style="color: #F5E9A1;"><i class="fa fa-flag me-2"></i>🇺🇸 English</a></li>
                        <li><a class="dropdown-item" href="#" onclick="changeLanguage('sv')" style="color: #F5E9A1;"><i class="fa fa-flag me-2"></i>🇸🇪 Svenska</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Navbar responsive styles */
.navbar-logo {
    height: 80px;
    max-height: 80px;
}

.contact-link {
    color: #F5E9A1 !important;
    font-size: 1.0em;
    font-weight: normal;
    font-style: italic;
    padding: 0 !important; /* Remove all padding */
}

/* Desktop styles - align with content */
@media (min-width: 1200px) {
    .contact-link {
        margin-left: calc((100vw - 900px) / 2 - 80px); /* Align with main content left edge */
    }
}

@media (min-width: 992px) and (max-width: 1199px) {
    .contact-link {
        margin-left: calc((100vw - 900px) / 2 - 60px); /* Adjust for smaller screens */
    }
}

/* Tablet styles */
@media (min-width: 768px) and (max-width: 991px) {
    .navbar-logo {
        height: 60px;
        max-height: 60px;
    }
    
    .contact-link {
        margin-left: calc(5% - 40px); /* Align with responsive container */
    }
}

/* Mobile styles */
@media (max-width: 767px) {
    .navbar-logo {
        height: 50px;
        max-height: 50px;
    }
    
    .contact-link {
        margin-left: calc(2% - 20px); /* Align with mobile container */
        text-align: left;
    }
}
    
    .navbar-collapse {
        margin-top: 10px;
    }
    
    .navbar-nav {
        text-align: center;
    }
    
    .dropdown-menu {
        text-align: center;
    }
}

/* Mobile styles */
@media (max-width: 576px) {
    .navbar-logo {
        height: 50px;
        max-height: 50px;
    }
    
    .navbar {
        padding: 3px !important;
    }
    
    .container-fluid {
        padding: 3px !important;
    }
}
</style>
