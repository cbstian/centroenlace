<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Enlace</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }

        /* Animated background particles */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) { width: 4px; height: 4px; top: 20%; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 6px; height: 6px; top: 60%; left: 20%; animation-delay: 1s; }
        .particle:nth-child(3) { width: 3px; height: 3px; top: 30%; left: 70%; animation-delay: 2s; }
        .particle:nth-child(4) { width: 5px; height: 5px; top: 80%; left: 80%; animation-delay: 3s; }
        .particle:nth-child(5) { width: 4px; height: 4px; top: 10%; left: 60%; animation-delay: 4s; }
        .particle:nth-child(6) { width: 7px; height: 7px; top: 70%; left: 40%; animation-delay: 5s; }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.7; }
            50% { transform: translateY(-20px) rotate(180deg); opacity: 1; }
        }

        /* Main container */
        .container {
            text-align: center;
            z-index: 2;
            position: relative;
        }

        /* Main title */
        .main-title {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 300;
            color: white;
            letter-spacing: 0.1em;
            margin-bottom: 2rem;
            position: relative;
            opacity: 0;
            animation: fadeInUp 1.5s ease-out 0.5s forwards;
        }

        /* Subtle subtitle */
        .subtitle {
            font-size: clamp(1rem, 2.5vw, 1.5rem);
            color: rgba(255, 255, 255, 0.8);
            font-weight: 200;
            letter-spacing: 0.05em;
            margin-bottom: 3rem;
            opacity: 0;
            animation: fadeInUp 1.5s ease-out 1s forwards;
        }

        /* Coming soon indicator */
        .status {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
            font-weight: 300;
            letter-spacing: 0.05em;
            opacity: 0;
            animation: fadeInUp 1.5s ease-out 1.5s forwards;
            transition: all 0.3s ease;
        }

        .status:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }

        /* Animations */
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

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .main-title {
                margin-bottom: 1.5rem;
            }

            .subtitle {
                margin-bottom: 2rem;
            }
        }

        /* Loading animation for the title */
        .main-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);
            animation: underline 2s ease-out 2s forwards;
        }

        @keyframes underline {
            to {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Animated background particles -->
    <div class="particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Main content -->
    <div class="container">
        <h1 class="main-title">Centro Enlace</h1>
        <p class="subtitle">Investigación, Ciencia y Tecnología</p>
        <div class="status">Sitio en construcción</div>
    </div>
</body>
</html>
