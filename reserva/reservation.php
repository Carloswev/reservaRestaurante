<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Faça uma Reserva</title>
</head>
<body>
<header>
    <div class="header-container">
        <div class="logo">
            <a href="#"><img src="img/rest.jpg" alt="Logotipo do Restaurante"></a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Início</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i> Sobre</a></li>
                <li><a href="#"><i class="fas fa-utensils"></i> Cardápio</a></li>
                <li><a href="#"><i class="fas fa-calendar-check"></i> Reservas</a></li>
                <li><a href="#"><i class="fas fa-phone-alt"></i> Contato</a></li>
            </ul>
        </nav>
        <div class="header-right">
            <div class="search-bar">
                <input type="text" placeholder="Buscar...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="hamburger-menu">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</header>

    <main>
        <form action="confirm.php" method="POST" class="reservation-form">
            <div class="form-group">
                <label for="customer_name"><i class="fas fa-user"></i> Nome:</label>
                <input type="text" id="customer_name" name="customer_name" placeholder="Digite seu nome completo" required>
            </div>

            <div class="form-group">
                <label for="phone"><i class="fas fa-phone-alt"></i> Telefone:</label>
                <input type="text" id="phone" name="phone" placeholder="Digite seu telefone" required>
            </div>

            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
            </div>

            <div class="form-group">
                <label for="date"><i class="fas fa-calendar-day"></i> Data:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="time"><i class="fas fa-clock"></i> Horário:</label>
                <input type="time" id="time" name="time" required>
            </div>

            <div class="form-group">
                <label for="guests"><i class="fas fa-users"></i> Número de Convidados:</label>
                <input type="number" id="guests" name="guests" min="1" placeholder="Quantidade de pessoas" required>
            </div>

            <div class="form-group">
                <label for="special_requests"><i class="fas fa-comment"></i> Pedidos Especiais:</label>
                <textarea id="special_requests" name="special_requests" placeholder="Digite seus pedidos especiais aqui..."></textarea>
            </div>

            <button type="submit" class="submit-button"><i class="fas fa-calendar-check"></i> Reservar Agora</button>
        </form>
    </main>
    <footer>
    <div class="footer-container">
        <div class="footer-about">
            <h2>Sobre Nós</h2>
            <p>Somos um restaurante dedicado a oferecer a melhor experiência gastronômica, com um ambiente acolhedor e atendimento de qualidade.</p>
        </div>
        <div class="footer-contact">
            <h2>Contato</h2>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> Rua Principal, 123, Centro, Cidade</li>
                <li><i class="fas fa-phone-alt"></i> (11) 98765-4321</li>
                <li><i class="fas fa-envelope"></i> contato@restaurante.com</li>
            </ul>
        </div>
        <div class="footer-links">
            <h2>Links Úteis</h2>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Página Inicial</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i> Sobre Nós</a></li>
                <li><a href="#"><i class="fas fa-concierge-bell"></i> Cardápio</a></li>
                <li><a href="#"><i class="fas fa-phone"></i> Contato</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <h2>Siga-nos</h2>
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Nosso Restaurante | Todos os direitos reservados.</p>
    </div>
</footer>
</body>
</html>
