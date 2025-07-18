<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Charset & Viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>License Manager | Home</title>

    <!-- 🌐 Open Graph for Discord embeds -->
    <meta property="og:title" content="License Manager | Discord x Roblox Integration">
    <meta property="og:description" content="A powerful license and role management bot for Discord, fully integrated with Roblox.">
    <meta property="og:image" content="https://i.ibb.co/ymGZd6nJ/Licence-Manager.png"> <!-- Your working banner URL -->
    <meta property="og:url" content="https://licencemanager.infy.uk">
    <meta property="og:type" content="website">

    <!-- 🐦 Twitter Meta (optional but nice to have) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="License Manager | Discord x Roblox Integration">
    <meta name="twitter:description" content="A powerful license and role management bot for Discord, fully integrated with Roblox.">
    <meta name="twitter:image" content="https://i.ibb.co/ymGZd6nJ/Licence-Manager.png">

    <!-- 🧠 Favicon & Fonts -->
    <link rel="icon" href="https://i.ibb.co/tTdGm1y4/License-Manager-B-1.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- 🎨 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    <style>
      
        :root {
            --bg-dark: #121212;
            --bg-darker: #0a0a0a;
            --accent: #7B2CBF;
            --accent-light: #9D4EDD;
            --text-primary: #f5f5f5;
            --text-secondary: #b3b3b3;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: var(--bg-darker);
            padding: 20px 0;
            border-bottom: 1px solid rgba(123, 44, 191, 0.2);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--text-primary);
            display: flex;
            align-items: center;
        }
        
        .logo span {
            color: var(--accent);
        }
        
        .logo-icon {
            margin-right: 10px;
            font-size: 28px;
            color: var(--accent);
        }
        
        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
        }
        
        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }
        
        .nav-links a:hover {
            color: var(--accent);
        }
        
        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent);
            transition: width 0.3s;
        }
        
        .nav-links a:hover:after {
            width: 100%;
        }
        
        .coming-soon {
            background-color: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 10px;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(1); opacity: 0.8; }
        }
        
        /* Account Dropdown */
        .account-dropdown {
            position: relative;
            display: inline-block;
        }
        
        .account-btn {
            background-color: rgba(123, 44, 191, 0.2);
            color: var(--text-primary);
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
        }
        
        .account-btn:hover {
            background-color: rgba(123, 44, 191, 0.4);
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: var(--bg-darker);
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
            overflow: hidden;
            border: 1px solid rgba(123, 44, 191, 0.3);
        }
        
        .dropdown-content a {
            color: var(--text-secondary);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: all 0.3s;
        }
        
        .dropdown-content a:hover {
            background-color: rgba(123, 44, 191, 0.2);
            color: var(--accent);
        }
        
        .account-dropdown:hover .dropdown-content {
            display: block;
            animation: fadeIn 0.3s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Hero Section */
        .hero {
            padding: 180px 0 100px;
            text-align: center;
            background: linear-gradient(135deg, var(--bg-darker) 0%, var(--bg-dark) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .hero:before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(123, 44, 191, 0.1) 0%, transparent 70%);
            animation: rotate 30s linear infinite;
            z-index: 0;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            background: linear-gradient(to right, var(--accent), var(--accent-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: slideIn 0.8s ease-out;
        }
        
        .hero p {
            font-size: 18px;
            color: var(--text-secondary);
            max-width: 800px;
            margin: 0 auto 40px;
            animation: slideIn 1s ease-out;
        }
        
        .cta-button {
            display: inline-block;
            background-color: var(--accent);
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            animation: fadeInUp 1.2s ease-out;
        }
        
        .cta-button:after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.5s;
        }
        
        .cta-button:hover {
            background-color: var(--accent-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(123, 44, 191, 0.3);
        }
        
        .cta-button:hover:after {
            left: 100%;
        }
        
        .secondary-button {
            background-color: transparent;
            border: 1px solid var(--accent);
            color: var(--accent);
            margin-left: 15px;
        }
        
        .secondary-button:hover {
            background-color: rgba(123, 44, 191, 0.1);
        }
        
        /* Features Section */
        .features {
            padding: 100px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            font-size: 36px;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, transparent, var(--accent), transparent);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background-color: var(--bg-darker);
            border-radius: 8px;
            padding: 30px;
            border-left: 3px solid var(--accent);
            transition: all 0.3s;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .feature-card.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .feature-card:nth-child(1) { transition-delay: 0.1s; }
        .feature-card:nth-child(2) { transition-delay: 0.2s; }
        .feature-card:nth-child(3) { transition-delay: 0.3s; }
        .feature-card:nth-child(4) { transition-delay: 0.4s; }
        .feature-card:nth-child(5) { transition-delay: 0.5s; }
        .feature-card:nth-child(6) { transition-delay: 0.6s; }
        
        .feature-card:hover {
            transform: translateY(-5px) !important;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        
        .feature-icon {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--accent);
        }
        
        .feature-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }
        
        .feature-card p {
            color: var(--text-secondary);
        }
        
        /* Detailed Features Section */
        .detailed-features {
            padding: 80px 0;
            background-color: var(--bg-darker);
        }
        
        .feature-row {
            display: flex;
            align-items: center;
            margin-bottom: 60px;
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.6s;
        }
        
        .feature-row.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .feature-row:nth-child(even) {
            flex-direction: row-reverse;
            transform: translateX(50px);
        }
        
        .feature-row:nth-child(even).visible {
            transform: translateX(0);
        }
        
        .feature-img {
            flex: 1;
            padding: 20px;
            position: relative;
        }
        
        .feature-img:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 2px solid var(--accent);
            border-radius: 10px;
            z-index: 1;
            opacity: 0.3;
        }
        
        .feature-img img {
            width: 100%;
            border-radius: 8px;
            position: relative;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        
        .feature-text {
            flex: 1;
            padding: 0 40px;
        }
        
        .feature-text h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: var(--accent);
        }
        
        .feature-text ul {
            list-style-type: none;
            margin-top: 20px;
        }
        
        .feature-text li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 30px;
            color: var(--text-secondary);
        }
        
        .feature-text li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent);
            font-weight: bold;
        }
        
        /* Pricing Section */
        .pricing {
            padding: 100px 0;
            background: linear-gradient(to bottom, var(--bg-dark) 0%, var(--bg-darker) 100%);
        }
        
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .pricing-card {
            background-color: var(--bg-darker);
            border-radius: 8px;
            padding: 40px 30px;
            text-align: center;
            border: 1px solid rgba(123, 44, 191, 0.3);
            transition: all 0.3s;
            opacity: 0;
            transform: translateY(30px);
        }
        
        .pricing-card.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .pricing-card:nth-child(1) { transition-delay: 0.1s; }
        .pricing-card:nth-child(2) { transition-delay: 0.3s; }
        .pricing-card:nth-child(3) { transition-delay: 0.5s; }
        
        .pricing-card:hover {
            transform: translateY(-10px) scale(1.02) !important;
            box-shadow: 0 15px 30px rgba(123, 44, 191, 0.2);
            border-color: var(--accent);
        }
        
        .pricing-card.popular {
            border: 1px solid var(--accent);
            position: relative;
            transform: translateY(0);
        }
        
        .popular-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .pricing-card h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .price {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--accent);
        }
        
        .price span {
            font-size: 16px;
            color: var(--text-secondary);
        }
        
        .pricing-features {
            list-style: none;
            margin-bottom: 30px;
        }
        
        .pricing-features li {
            margin-bottom: 10px;
            color: var(--text-secondary);
            position: relative;
            padding-left: 20px;
        }
        
        .pricing-features li:before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--accent);
        }
        
        /* Stats Section */
        .stats {
            padding: 80px 0;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .stat-card {
            background-color: var(--bg-darker);
            border-radius: 8px;
            padding: 30px;
            border-top: 3px solid var(--accent);
            transition: all 0.3s;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        
        .stat-number {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--accent);
        }
        
        .stat-label {
            font-size: 16px;
            color: var(--text-secondary);
        }
        
        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(135deg, rgba(123, 44, 191, 0.1) 0%, transparent 100%);
            position: relative;
            overflow: hidden;
        }
        
        .cta-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(123, 44, 191, 0.05)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
            z-index: -1;
        }
        
        .cta-section h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            font-size: 18px;
            color: var(--text-secondary);
            max-width: 700px;
            margin: 0 auto 40px;
        }
        
        /* Footer */
        footer {
            background-color: var(--bg-darker);
            padding: 60px 0 30px;
            border-top: 1px solid rgba(123, 44, 191, 0.2);
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: var(--accent);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column li {
            margin-bottom: 10px;
        }
        
        .footer-column a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column a:hover {
            color: var(--accent);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            color: var(--text-secondary);
            font-size: 20px;
            transition: color 0.3s, transform 0.3s;
        }
        
        .social-links a:hover {
            color: var(--accent);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(123, 44, 191, 0.1);
        }
        
        .footer-bottom p {
            color: var(--text-secondary);
            font-size: 14px;
        }
        
        /* Animations */
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .feature-row, .feature-row:nth-child(even) {
                flex-direction: column;
                transform: translateX(0) !important;
            }
            
            .feature-text {
                padding: 20px 0 0 0;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .nav-links {
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <i class="fas fa-key logo-icon"></i>
                    License<span>Manager</span>
                </div>
                <div class="nav-links">
                    <a href="#features">Features</a>
                    <a href="#details">How It Works</a>
                    <a href="#pricing">Pricing</a>
                    <a href="TermsofService">Terms Of Service</a>
                    <div class="account-dropdown">
                        <button class="account-btn">
                            <i class="fas fa-user"></i> Account <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="Soon"><i class="fas fa-sign-in-alt"></i> Login</a>
                            <a href="Soon"><i class="fas fa-user-plus"></i> Register</a>
                            <a href="Soon"><i class="fas fa-cog"></i> Dashboard</a>
                            <a href="Soon"><i class="fas fa-key"></i> Coming Soon</a>
                        </div>
                    </div>
                    <span class="coming-soon">COMING SOON</span>
                </div>
            </nav>
        </div>
    </header>
    
    <section class="hero">
        <div class="hero-content container">
            <h1>Licence Manager [COMING SOON]</h1>
            <p>LicenseManager is the ultimate solution for managing digital licenses, Discord roles, and Roblox integrations. Automate your verification processes, protect your premium content, and streamline your community management with our powerful bot.</p>
            <div>
                <a href="#pricing" class="cta-button">Get Started</a>
                <a href="#details" class="cta-button secondary-button">Learn More</a>
            </div>
        </div>
    </section>
    
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Core Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-link"></i></div>
                    <h3>Account Linking</h3>
                    <p>Secure Discord to Roblox account verification with OAuth2 flow and manual verification options for complete control.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-id-card"></i></div>
                    <h3>License Management</h3>
                    <p>Create, distribute, and manage licenses with expiration dates, usage limits, and blacklisting capabilities.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Role Automation</h3>
                    <p>Automatically assign and remove Discord roles based on license status, purchases, or manual overrides.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h3>Roblox Integration</h3>
                    <p>Seamless connection with Roblox game passes and developer products to automatically grant licenses on purchase.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-tasks"></i></div>
                    <h3>Admin Dashboard</h3>
                    <p>Comprehensive web dashboard with analytics, user management, and license tracking for complete oversight.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-code"></i></div>
                    <h3>API Access</h3>
                    <p>RESTful API for custom integrations with your website, applications, or other services.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="detailed-features" id="details">
        <div class="container">
            <h2 class="section-title">How LicenseManager Works</h2>
            
            <div class="feature-row">
                <div class="feature-img">
                    <!-- Placeholder for image -->
                    <img src="https://i.ibb.co/5hYkCKDz/image.png" alt="Discord Integration">
                </div>
                <div class="feature-text">
                    <h3>Discord Integration</h3>
                    <p>LicenseManager connects directly to your Discord server to handle all license verification and role management automatically.</p>
                    <ul>
                        <li>Slash commands for easy user interaction</li>
                        <li>Automatic role assignment based on license status</li>
                        <li>Customizable verification messages</li>
                        <li>Detailed audit logging for all actions</li>
                        <li>Support for multiple server configurations</li>
                    </ul>
                </div>
            </div>
            
            <div class="feature-row">
                <div class="feature-img">
                    <!-- Placeholder for image -->
                    <img src="https://i.ibb.co/5t05TYt/image-1.png" alt="Roblox Sales Hub">
                </div>
                <div class="feature-text">
                    <h3>Roblox Sales Hub</h3>
                    <p>Our proprietary Roblox integration handles purchases automatically and grants licenses instantly.</p>
                    <ul>
                        <li>Automatic license creation on product purchase</li>
                        <li>Support for game passes and developer products</li>
                        <li>Detailed purchase analytics and reporting</li>
                        <li>Webhook notifications for all transactions</li>
                        <li>Fraud detection and prevention systems</li>
                    </ul>
                </div>
            </div>
            
            <div class="feature-row">
                <div class="feature-img">
                    <!-- Placeholder for image -->
                    <img src="https://i.ibb.co/wZCFGCgb/dashboard.jpg" alt="Web Dashboard">
                </div>
                <div class="feature-text">
                    <h3>Web Dashboard</h3>
                    <p>Manage your entire system through our intuitive web interface with real-time data.</p>
                    <ul>
                        <li>User management and search</li>
                        <li>License creation and bulk operations</li>
                        <li>Revenue and conversion analytics</li>
                        <li>Custom branding options</li>
                        <li>Team permission system</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="stats">
        <div class="container">
            <h2 class="section-title">Why Choose LicenseManager?</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">99.9%</div>
                    <div class="stat-label">Uptime Guarantee</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Support Available</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">10K+</div>
                    <div class="stat-label">Licenses Managed</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">100ms</div>
                    <div class="stat-label">Average Response Time</div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="pricing" id="pricing">
        <div class="container">
            <h2 class="section-title">Simple, Transparent Pricing</h2>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 50px; color: var(--text-secondary);">Choose the plan that fits your needs. No hidden fees, cancel anytime.</p>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3>Free</h3>
                    <div class="price">$0<span>/forever</span></div>
                    <ul class="pricing-features">
                        <li>Up to 5,000 licenses</li>
                        <li>Basic Discord integration</li>
                        <li>Manual license management</li>
                        <li>Community support</li>
                        <li>1 Discord server</li>
                        <li>Basic analytics</li>
                    </ul>
                    <a href="#" class="cta-button">Get Started</a>
                </div>
                <div class="pricing-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <h3>Professional</h3>
                    <div class="price">$6.99<span>/month</span></div>
                    <ul class="pricing-features">
                        <li>Up to 50,000 licenses</li>
                        <li>Advanced Discord features</li>
                        <li>Roblox Sales Hub integration</li>
                        <li>Priority support</li>
                        <li>3 Discord servers</li>
                        <li>Advanced analytics</li>
                        <li>Webhook notifications</li>
                        <li>Basic API access</li>
                    </ul>
                    <a href="#" class="cta-button">Choose Plan</a>
                </div>
                <div class="pricing-card">
                    <h3>Enterprise</h3>
                    <div class="price">Custom</div>
                    <ul class="pricing-features">
                        <li>Unlimited licenses</li>
                        <li>All Professional features</li>
                        <li>Unlimited Discord servers</li>
                        <li>Dedicated support</li>
                        <li>Custom integrations</li>
                        <li>White-label options</li>
                        <li>Full API access</li>
                        <li>Custom development</li>
                    </ul>
                    <a href="#" class="cta-button">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Transform Your License Management?</h2>
            <p>Join hundreds of creators and businesses who trust LicenseManager to handle their digital licenses and community management.</p>
            <a href="#pricing" class="cta-button">Get Started Today</a>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>LicenseManager</h3>
                    <p style="color: var(--text-secondary); margin-bottom: 20px;">The ultimate solution for Discord license and role management with Roblox integration.</p>
                    <div class="social-links">
                        <a href="https://discord.gg/M823NF5K7s"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Product</h3>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="Soon">Documentation</a></li>
                        <li><a href="Soon">Changelog</a></li>
                        <li><a href="https://licensemanager.betteruptime.com/">Status</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Resources</h3>
                    <ul>
                        <li><a href="Soon">Blog</a></li>
                        <li><a href="Soon">Tutorials</a></li>
                        <li><a href="Soon">API Reference</a></li>
                        <li><a href="Soon">Community</a></li>
                        <li><a href="Soon">Support</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="Soon">About Us</a></li>
                        <li><a href="Soon">Careers</a></li>
                        <li><a href="Soon">Contact</a></li>
                        <li><a href="TermsofService">Legal</a></li>
                        <li><a href="PrivacyPolicy">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 Arriva Corporation | LicenceManager. All rights reserved. | Currently in development - COMING SOON</p>
            </div>
        </div>
    </footer>

    <script>
        // Scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            // Observe feature cards
            document.querySelectorAll('.feature-card').forEach(card => {
                observer.observe(card);
            });
            
            // Observe pricing cards
            document.querySelectorAll('.pricing-card').forEach(card => {
                observer.observe(card);
            });
            
            // Observe feature rows
            document.querySelectorAll('.feature-row').forEach(row => {
                observer.observe(row);
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Header scroll effect
            const header = document.querySelector('header');
            let lastScroll = 0;
            
            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll <= 0) {
                    header.style.transform = 'translateY(0)';
                    return;
                }
                
                if (currentScroll > lastScroll && currentScroll > 100) {
                    // Scrolling down
                    header.style.transform = 'translateY(-100%)';
                } else {
                    // Scrolling up
                    header.style.transform = 'translateY(0)';
                }
                
                lastScroll = currentScroll;
            });
        });
    </script>
</body>
</html>