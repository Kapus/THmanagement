<?php
// THmanagement - Contact Page
// Created: July 9, 2025

// Start session
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THmanagement - Kontakta oss</title>
    
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
            width: 900px !important; /* Fixed width for main section - force it */
            margin: 0 auto; /* Center the container */
            position: relative; /* Ensure proper positioning */
            overflow: hidden; /* Prevent content from overflowing */
            box-sizing: border-box; /* Include padding in width calculation */
        }
        
        /* Custom contact layout to replace Bootstrap grid */
        .contact-layout {
            display: flex;
            gap: 30px;
            width: 100%;
            max-width: 100%;
        }
        
        .form-section {
            flex: 2;
            min-width: 0; /* Prevent flex item from growing beyond container */
        }
        
        .info-section {
            flex: 1;
            min-width: 0; /* Prevent flex item from growing beyond container */
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .contact-layout {
                flex-direction: column;
            }
            
            .main-container {
                width: 95% !important; /* Use percentage width on mobile */
                margin: 0 auto;
                padding: 20px;
            }
        }
        
        /* Mobile styles */
        @media (max-width: 576px) {
            .main-container {
                width: 98% !important; /* Even more width on small mobile */
                padding: 15px;
            }
            
            .contact-layout {
                gap: 20px;
            }
        }
        
        h1, h2, h3 {
            color: #F5E9A1; /* Light golden yellow color for titles */
        }
        
        .contact-info-box h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            margin-top: 0;
        }
        
        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid #F5E9A1;
            color: #ffffff;
            max-width: 400px; /* Limit the width of input fields */
            font-size: 0.9rem; /* Slightly smaller font size */
            padding: 8px 12px; /* Reduce padding for smaller fields */
        }
        
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: #F5E9A1;
            box-shadow: 0 0 0 0.2rem rgba(245, 233, 161, 0.25);
            color: #ffffff;
        }
        
        /* Make textarea same width as other inputs */
        textarea.form-control {
            max-width: 400px; /* Same as other input fields */
            resize: vertical; /* Allow only vertical resizing */
        }
        
        /* Responsive form fields */
        @media (max-width: 768px) {
            .form-control,
            textarea.form-control {
                max-width: 100%; /* Full width on mobile */
            }
        }
        
        /* Adjust form group spacing */
        .mb-3 {
            margin-bottom: 1rem !important; /* Reduce spacing between form groups */
        }
        
        .btn-primary {
            background-color: #F5E9A1;
            border-color: #F5E9A1;
            color: #343a40;
            font-weight: bold;
        }
        
        .btn-primary:hover {
            background-color: #e6d790;
            border-color: #e6d790;
            color: #343a40;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php include '../partials/navbar.php'; ?>
        
        <div class="content">
            <div class="main-container mt-4">
                <h1 data-translate="contact_title">Kontakta oss</h1>
                <p data-translate="contact_text">Vi är här för att hjälpa dig. Fyll i formuläret nedan så återkommer vi till dig så snart som möjligt.</p>
                
                <div class="contact-layout">
                    <div class="form-section">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label" data-translate="name_label">Namn</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label" data-translate="email_label">E-post</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label" data-translate="phone_label">Telefon</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label" data-translate="subject_label">Ämne</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label" data-translate="message_label">Meddelande</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" data-translate="send_button">Skicka meddelande</button>
                        </form>
                    </div>
                    <div class="info-section">
                        <div class="contact-info-box" style="background-color: rgba(255, 255, 255, 0.05); border-radius: 10px; padding: 25px; border: 1px solid rgba(245, 233, 161, 0.3);">
                            <h3 data-translate="contact_info_title">Kontaktinformation</h3>
                            <div class="mb-3">
                                <h5 data-translate="address_title">Adress</h5>
                                <p data-translate="address_text">
                                    THmanagement AB<br>
                                    Företagsgatan 123<br>
                                    123 45 Stockholm
                                </p>
                            </div>
                            <div class="mb-3">
                                <h5 data-translate="phone_title">Telefon</h5>
                                <p>+46 8 123 456 78</p>
                            </div>
                            <div class="mb-3">
                                <h5 data-translate="email_title">E-post</h5>
                                <p>info@thmanagement.se</p>
                            </div>
                            <div class="mb-3">
                                <h5 data-translate="hours_title">Öppettider</h5>
                                <p data-translate="hours_text">
                                    Måndag - Fredag: 08:00 - 17:00<br>
                                    Lördag - Söndag: Stängt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../partials/footer.php'; ?>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Translation System -->
    <script>
    // Translation dictionary
    const translations = {
        en: {
            choose_language: "Choose Language",
            contact_title: "Contact Us",
            contact_text: "We are here to help you. Fill out the form below and we will get back to you as soon as possible.",
            name_label: "Name",
            email_label: "Email",
            phone_label: "Phone",
            subject_label: "Subject",
            message_label: "Message",
            send_button: "Send Message",
            contact_info_title: "Contact Information",
            address_title: "Address",
            address_text: "THmanagement AB<br>Business Street 123<br>123 45 Stockholm",
            phone_title: "Phone",
            email_title: "Email",
            hours_title: "Opening Hours",
            hours_text: "Monday - Friday: 08:00 - 17:00<br>Saturday - Sunday: Closed",
            copyright: "THmanagement. All rights reserved.",
            contact_us: "Contact Us"
        },
        sv: {
            choose_language: "Välj Språk",
            contact_title: "Kontakta oss",
            contact_text: "Vi är här för att hjälpa dig. Fyll i formuläret nedan så återkommer vi till dig så snart som möjligt.",
            name_label: "Namn",
            email_label: "E-post",
            phone_label: "Telefon",
            subject_label: "Ämne",
            message_label: "Meddelande",
            send_button: "Skicka meddelande",
            contact_info_title: "Kontaktinformation",
            address_title: "Adress",
            address_text: "THmanagement AB<br>Företagsgatan 123<br>123 45 Stockholm",
            phone_title: "Telefon",
            email_title: "E-post",
            hours_title: "Öppettider",
            hours_text: "Måndag - Fredag: 08:00 - 17:00<br>Lördag - Söndag: Stängt",
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
                if (key === 'address_text' || key === 'hours_text') {
                    element.innerHTML = translations[lang][key];
                } else {
                    element.textContent = translations[lang][key];
                }
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
