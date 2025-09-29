<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Ollie Missing! | SkateShop</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap');
        
        :root {
            --skate-red: #e74c3c;
            --skate-blue: #3498db;
            --skate-black: #2c3e50;
            --skate-concrete: #95a5a6;
        }
        
        body {
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            font-family: 'Open Sans', sans-serif;
            color: var(--skate-black);
            background-image: url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M30,10 L70,10 L90,50 L70,90 L30,90 L10,50 Z" fill="none" stroke="%23e0e0e0" stroke-width="1"/></svg>');
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }
        
        .skate-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 600px;
            margin: 20px;
            border-top: 5px solid var(--skate-red);
            position: relative;
            overflow: hidden;
        }
        
        .skate-container::before {
            content: "";
            position: absolute;
            top: -20px;
            right: -20px;
            width: 100px;
            height: 100px;
            background-color: var(--skate-blue);
            transform: rotate(45deg);
            z-index: 0;
            opacity: 0.1;
        }
        
        h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 5rem;
            margin: 0;
            color: var(--skate-red);
            position: relative;
            text-shadow: 3px 3px 0 rgba(0,0,0,0.1);
        }
        
        h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            margin: 15px 0;
            color: var(--skate-black);
        }
        
        p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            color: var(--skate-concrete);
        }
        
        .skate-illustration {
            width: 150px;
            height: 150px;
            margin: 0 auto 30px;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M20,60 Q50,20 80,60" fill="none" stroke="%23e74c3c" stroke-width="3" stroke-linecap="round"/><circle cx="30" cy="65" r="8" fill="%232c3e50"/><circle cx="70" cy="65" r="8" fill="%232c3e50"/><rect x="35" y="55" width="30" height="10" rx="2" fill="%233498db"/></svg>');
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--skate-red);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }
        
        .btn:hover {
            background-color: var(--skate-blue);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        .skate-links {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .skate-links a {
            color: var(--skate-blue);
            text-decoration: none;
            transition: all 0.2s ease;
            font-weight: bold;
        }
        
        .skate-links a:hover {
            color: var(--skate-red);
            text-decoration: underline;
        }
        
        @media (max-width: 600px) {
            h1 {
                font-size: 3.5rem;
            }
            
            h2 {
                font-size: 1.4rem;
            }
            
            .skate-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="skate-container">
        <div class="skate-illustration"></div>
        <h1>404</h1>
        <h2>¡OLLIE MISSING!</h2>
        <p>La página que buscas ha hecho un kickflip y ha desaparecido. Tal vez fue a grindar a otra parte del sitio.</p>
        <a href="index.html" class="btn">Volver al Home</a>
        
        <div class="skate-links">
             
            <a href="login.html" class="nav-item nav-link">registro</a>
            <a href="contact.html" class="nav-item nav-link">contacto</a>
        </div>
    </div>
</body>
</html>