<nav class="navbar navbar-expand-lg navbar-dark" style="padding: 5px; background-color: #292929;">
    <div class="container-fluid d-flex justify-content-between align-items-center" style="padding: 5px;">
        <!-- Left: Brand/Logo and Contact Us link -->
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="index.php" style="margin: 0; padding: 5px;">
                <img src="images/navbar-bg.jpg" alt="Home" height="80">
            </a>
            <div class="navbar-nav ms-3">
                <a class="nav-link" href="#" style="color: #F5E9A1; font-size: 1.0em; padding-top: 60px; padding-bottom: 0; font-weight: bold; margin-left: 200px;" data-translate="contact_us">Kontakta oss</a>
            </div>
        </div>
        
        <!-- Right: Language selector -->
        <div class="navbar-nav">
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1.5em; color: #F5E9A1;">
                    <i class="fa fa-globe me-1"></i>🇸🇪
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown" style="background-color: #292929;">
                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')" style="color: #F5E9A1;"><i class="fa fa-flag me-2"></i>🇺🇸 English</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('sv')" style="color: #F5E9A1;"><i class="fa fa-flag me-2"></i>🇸🇪 Svenska</a></li>
                </ul>
            </div>            </div>
    </div>
</nav>
