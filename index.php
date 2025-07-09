<?php
// THmanagement - Index Page
// Created: July 9, 2025

// Start session
session_start();

// Include configuration file (if you create one later)
// include_once 'config/config.php';

// Include database connection (if you create one later)
// include_once 'config/database.php';
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THmanagement - Home</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Immediate Language Setup -->
    <script>
    // Get saved language immediately
    const currentLang = localStorage.getItem('selectedLanguage') || 'sv';
    
    // Set document language attribute immediately
    document.documentElement.lang = currentLang;
    
    // Store current language for use after DOM loads
    window.currentLanguage = currentLang;
    </script>
    
    <style>
        html, body {
            height: 100%;
            background-color: #343a40; /* Dark grey background */
            color: #ffffff; /* White text for better readability */
        }
        
        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .content {
            flex: 1;
        }
        
        .main-container {
            background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent white background for content */
            border-radius: 10px;
            padding: 30px;
            backdrop-filter: blur(10px);
            max-width: 900px; /* Slightly larger width for main section */
            margin: 0 auto; /* Center the container */
        }
        
        /* Responsive design for main container */
        @media (max-width: 768px) {
            .main-container {
                width: 95% !important;
                margin: 0 auto;
                padding: 20px;
            }
        }
        
        /* Mobile styles */
        @media (max-width: 576px) {
            .main-container {
                width: 98% !important;
                padding: 15px;
            }
        }
        
        h1, h2, h3 {
            color: #F5E9A1; /* Light golden yellow color for titles */
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php include 'partials/navbar.php'; ?>
        
        <div class="content">
            <div class="main-container mt-4">
                <h1 data-translate="welcome_title">Välkommen till THmanagement</h1>
                <p data-translate="welcome_text">Detta är en testsida för att verifiera att navigeringsfältet fungerar.</p>
                <div class="alert alert-info">
                    <strong>Info:</strong> <span data-translate="info_text">Om du kan se detta innehåll och navigeringsfältet ovan fungerar allt korrekt!</span>
                </div>
            </div>
        </div>

        <?php include 'partials/footer.php'; ?>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Translation System -->
    <script>
    // Translation dictionary
    const translations = {
        en: {
            choose_language: "Choose Language",
            welcome_title: "Welcome to THmanagement",
            welcome_text: "This is a test page to verify the navbar is working.",
            info_text: "If you can see this content and the navbar above, everything is working correctly!",
            copyright: "THmanagement. All rights reserved.",
            contact_us: "Contact Us"
        },
        sv: {
            choose_language: "Välj Språk",
            welcome_title: "Välkommen till THmanagement",
            welcome_text: "Detta är en testsida för att verifiera att navigeringsfältet fungerar.",
            info_text: "Om du kan se detta innehåll och navigeringsfältet ovan fungerar allt korrekt!",
            copyright: "THmanagement. Alla rättigheter förbehållna.",
            contact_us: "Kontakta oss"
        }
    };

    // Function to change language
    function changeLanguage(lang) {
        // Update all elements with data-translate attribute
        document.querySelectorAll('[data-translate]').forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[lang] && translations[lang][key]) {
                element.textContent = translations[lang][key];
            }
        });
        
        // Save selected language to localStorage
        localStorage.setItem('selectedLanguage', lang);
        
        // Update the dropdown flag icon based on language
        const dropdownElement = document.getElementById('languageDropdown');
        if (dropdownElement) {
            if (lang === 'en') {
                dropdownElement.innerHTML = '<i class="fa fa-globe me-1"></i>🇺🇸';
            } else {
                dropdownElement.innerHTML = '<i class="fa fa-globe me-1"></i>🇸🇪';
            }
            // Maintain the light golden yellow color
            dropdownElement.style.color = '#F5E9A1';
        }
        
        // Update document language attribute
        document.documentElement.lang = lang;
    }

    // Apply language immediately when DOM content is loaded
    document.addEventListener('DOMContentLoaded', function() {
        const savedLang = window.currentLanguage || localStorage.getItem('selectedLanguage') || 'sv';
        changeLanguage(savedLang);
    });
    </script>
</body>
</html>
