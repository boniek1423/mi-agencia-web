<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kayubo - Soluciones Innovadoras">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Kayubo - Soluciones Innovadoras</title>
    <style>
        :root {
            --primary-color: #4361ee;
            --success-color: #4cc9f0;
            --dark-bg: #1a1a1a;
            --card-bg: rgba(255, 255, 255, 0.05);
            --navbar-height: 70px;
        }
        body {
            background: linear-gradient(135deg, var(--dark-bg) 0%, #0d0d0d 100%);
            color: #f8f9fa;
            padding-top: var(--navbar-height);
            min-height: 100vh;
        }
        .custom-navbar { backdrop-filter: blur(10px); background: rgba(0, 0, 0, 0.8); border-bottom: 1px solid rgba(255,255,255,0.1); }
        .floating-card {
            background: var(--card-bg);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease;
        }
        .floating-card:hover { transform: translateY(-5px); }

        /* En tu archivo style.css */
.custom-navbar {
    backdrop-filter: blur(10px);
    background: rgba(0, 0, 0, 0.8);
}

.floating-card {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: transform 0.3s ease;
}

.floating-card:hover {
    transform: translateY(-5px);
}

@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

 :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --dark-bg: #1a1a1a;
            --card-bg: rgba(255, 255, 255, 0.05);
            --text-light: #f8f9fa;
            --text-muted: #adb5bd;
            --border-color: rgba(255, 255, 255, 0.1);
            --success-color: #4cc9f0;
            --error-color: #f72585;
            --navbar-height: 70px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: linear-gradient(135deg, var(--dark-bg) 0%, #0d0d0d 100%);
            color: var(--text-light);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            line-height: 1.6;
            min-height: 100vh;
            padding-top: var(--navbar-height);
        }

        /* ===== BARRA DE NAVEGACIÓN COMO REGISTRO ===== */
        .navbar-kayubo {
            background: rgba(26, 26, 26, 0.95);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid var(--border-color);
            height: var(--navbar-height);
            padding: 0 1rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .navbar-kayubo.scrolled {
            background: rgba(13, 13, 13, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand-kayubo {
            color: var(--text-light) !important;
            font-weight: 800;
            font-size: 1.8rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: color 0.3s ease;
        }

        .navbar-brand-kayubo:hover {
            color: var(--primary-color) !important;
        }

        .navbar-brand-kayubo i {
            color: var(--success-color);
            font-size: 1.5rem;
        }

        .nav-link-kayubo {
            color: var(--text-light) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.25rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link-kayubo:hover {
            color: var(--primary-color) !important;
            background: rgba(67, 97, 238, 0.1);
        }

        .nav-link-kayubo.active {
            color: var(--success-color) !important;
            background: rgba(76, 201, 240, 0.1);
        }

        .nav-link-kayubo.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 3px;
            background: var(--success-color);
            border-radius: 2px;
        }

        .nav-btn-kayubo {
            padding: 0.5rem 1.5rem !important;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .nav-btn-register {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            color: white !important;
        }

        .nav-btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
        }

        .nav-btn-logout {
            background: rgba(247, 37, 133, 0.1);
            border: 1px solid var(--error-color);
            color: var(--error-color) !important;
        }

        .nav-btn-logout:hover {
            background: rgba(247, 37, 133, 0.2);
            transform: translateY(-2px);
        }

        .navbar-toggler-kayubo {
            border: 1px solid var(--border-color);
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-toggler-kayubo:hover {
            border-color: var(--primary-color);
        }

        .navbar-toggler-kayubo:focus {
            box-shadow: 0 0 0 2px rgba(67, 97, 238, 0.25);
        }

        /* ===== CONTENIDO PRINCIPAL ===== */
        .main-content {
            min-height: calc(100vh - var(--navbar-height));
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-card {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 20px;
            backdrop-filter: blur(15px);
            border: 1px solid var(--border-color);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .login-card:hover {
            transform: translateY(-3px);
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-header h2 {
            color: var(--text-light);
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, var(--success-color), var(--primary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .login-header p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* ===== FORMULARIO ===== */
        .form-label {
            font-weight: 600;
            color: var(--text-light);
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.07);
            border: 1px solid var(--border-color);
            color: var(--text-light);
            padding: 0.75rem 1rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.1);
            border-color: var(--primary-color);
            color: var(--text-light);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
            outline: none;
        }

        .password-section {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            padding: 5px;
            transition: color 0.3s ease;
            z-index: 10;
        }

        .password-toggle:hover {
            color: var(--text-light);
        }

        .btn-login {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            color: white;
            padding: 1rem;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            width: 100%;
        }

        .btn-login:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(67, 97, 238, 0.3);
        }

        .btn-login:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        /* ===== FOOTER ===== */
        .footer-kayubo {
            background: rgba(13, 13, 13, 0.95);
            border-top: 1px solid var(--border-color);
            padding: 2rem 0;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-logo {
            color: var(--text-light);
            font-weight: 700;
            font-size: 1.5rem;
            text-decoration: none;
        }

        .footer-links {
            display: flex;
            gap: 2rem;
        }

        .footer-link {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: var(--primary-color);
        }

        .footer-copyright {
            color: var(--text-muted);
            font-size: 0.9rem;
            text-align: center;
            width: 100%;
            margin-top: 1rem;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 991.98px) {
            .navbar-collapse-kayubo {
                background: rgba(26, 26, 26, 0.98);
                backdrop-filter: blur(20px);
                border-radius: 15px;
                padding: 1rem;
                margin-top: 1rem;
                border: 1px solid var(--border-color);
            }

            .nav-link-kayubo {
                margin: 0.25rem 0;
                padding: 0.75rem 1rem !important;
            }

            .nav-btn-kayubo {
                margin-top: 0.5rem;
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 1.75rem;
            }
            
            .main-content {
                padding: 1rem;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }
        }

        /* ===== MEJORAS DE ACCESIBILIDAD ===== */
        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            
            html {
                scroll-behavior: auto;
            }
            
            .btn-login:hover {
                transform: none;
            }
            
            .nav-btn-register:hover {
                transform: none;
            }
            
            .login-card:hover {
                transform: none;
            }
        }
    
    </style>
</head>