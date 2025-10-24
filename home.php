<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SimulaEtec</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= HOME_ASSETS ?>css/hometw.css" />
  <style>
    @font-face {
      font-family: 'Poppins';
      src: url('<?= HOME_ASSETS ?>fonts/Poppins.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    /* ======== SIDEBAR ======== */
    .sidebar {
      position: fixed;
      top: 0;
      left: -260px;
      width: 250px;
      height: 100%;
      background-color: #fff;
      box-shadow: 2px 0 10px rgba(0,0,0,0.1);
      transition: left 0.3s ease;
      z-index: 4000;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 1rem;
    }

    .sidebar.show {
      left: 0;
    }

    .sidebar .nav-section {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .nav-item {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      padding: 0.5rem 0.75rem;
      border-radius: 6px;
      transition: background 0.2s ease, color 0.2s ease;
    }

    .nav-item:hover {
      background-color: #f2f2ff;
      color: #5f58e7;
    }

    .nav-item.active {
      background-color: #eae8ff;
      color: #5f58e7;
    }

    .login-container {
      border-top: 1px solid #e0e0e0;
      padding-top: 1rem;
    }

    .category-link {
      display: block;
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.2s;
    }

    .category-link:hover {
      color: #5f58e7;
    }

    /* Botão hamburguer */
    #btnSidebarToggle {
      position: fixed;
      top: 1rem;
      left: 1rem;
      background: none;
      border: 0;
      z-index: 4100;
      cursor: pointer;
    }

    #btnSidebarToggle svg rect {
      transition: fill 0.2s ease;
    }

    #btnSidebarToggle:hover svg rect {
      fill: #7a73ff;
    }
  </style>

    <!-- CONTEÚDO PRINCIPAL -->
      <div  class="login-container" style="position: fixed; top: 45px; right: 35px; z-index: 5000; border: none; border-radius: 30px; padding: 8px 16px; height: 30px;
  border : 2px solid #7c3aed;">
      <a href="#" class="category-link">Entrar</a>
    </div>
</head>

<body>

  <!-- Caixa de login/cadastro abaixo do header -->
  <div class="login-box <?= (isset($_GET['show_login']) || !empty($mensagem)) ? 'show' : '' ?>">
    <?php if (!empty($mensagem)): ?>
        <p style="color: red; font-weight: bold;"><?= htmlspecialchars($mensagem) ?></p>
    <?php endif; ?>

    <!-- Formulário de Login -->
    <div class="form-container login-form-container">
      <h3 class="login-title">Login</h3>
      <form class="login-form" action="<?= BASE_URL ?>?page=login" method="post">
        <input type="email" name="email" placeholder="E-mail" id="input1" class="login-input" required>
        <input type="password" name="senha" placeholder="Senha" class="login-input" required>
        <button type="submit" class="login-button">Entrar</button>
      </form>
      <a href="#" class="register-link toggle-form" data-target="cadastro">Criar nova conta</a>
      <a href="#" class="register-link toggle-form" data-target="esqueci">Esqueci a senha</a>
    </div>

    <!-- Formulário de Cadastro -->
    <div class="form-container cadastro-form-container">
      <h3 class="login-title">Criar Conta</h3>
      <form class="login-form" action="<?= BASE_URL ?>?page=cadastro" method="post">
        <input type="text" name="nome" placeholder="Nome completo" class="login-input" required>
        <input type="email" name="email" placeholder="E-mail" class="login-input" required>
        <input type="password" name="senha" placeholder="Senha" class="login-input" required>
        <input type="password" name="confirmar_senha" placeholder="Confirmar senha" class="login-input" required>
        <button type="submit" class="login-button">Cadastrar</button>
      </form>
      <a href="#" class="register-link toggle-form" data-target="login">Já tenho uma conta</a>
    </div>
  </div>

 






  <div class="bloco1">
    <main class="main-content">
      <section class="hero">
        <h1><span class="texto-roxo">ESTUDE</span> PARA O <br /> VESTIBULINHO</h1>
        <p>Prepare-se para o Vestibulinho das Etecs com nosso simulado online.</p>

        <div class="hero-buttons">
          <a href="<?= BASE_URL ?>?page=bloqmenuprovas" class="btn btn-primary" >Começar</a>
          <a href="#" class="btn btn-secondary">Guia de estudos ⭢</a>
        </div>

        <div class="iconsText">
          <div class="iconItem">
            <img src="<?= HOME_ASSETS ?>imgs/svgs/ok.svg" alt="Análise de Desempenho" />
            <p class="descIcons">Análise de Desempenho</p>
          </div>

          <div class="iconItem">
            <img src="<?= HOME_ASSETS ?>imgs/svgs/timer.svg" alt="Cronômetro" />
            <p class="descIcons">Cronômetro</p>
          </div>

          <div class="iconItem">
            <img src="<?= HOME_ASSETS ?>imgs/svgs/ferramenta.svg" alt="Correção Imediata" />
            <p class="descIcons">Correção Imediata</p>
          </div>
        </div>

        <div id="meio">
          <div class="texto2">
            <h2>Análise de desempenho</h2>
            <p>Conheça as funcionalidades que vc poderá utilizar aqui no SimulaEtec</p>
          </div>

          <div class="retangulos">
            <div class="retangulo">
              <img src="<?= HOME_ASSETS ?>imgs/svgs/caderno.svg" alt="Correção imediata" class="icone" />
              <h3>Estatísticas</h3>
              <p>Geração da contabilidade de acertos e erros realizados durante o simulado.</p>
              <ul>
                <li>Acertos</li>
                <li>Erros</li>
              </ul>
            </div>

            <div class="retangulo">
              <img src="<?= HOME_ASSETS ?>imgs/svgs/fogo.svg" alt="Correção imediata" class="icone" />
              <h3>Correção imediata</h3>
              <p>Assim que terminar o simulado, entregamos todas as questões corrigidas.</p>
              <ul>
                <li>Acompanhe seu progresso</li>
                <li>Evolução</li>
              </ul>
            </div>

            <div class="retangulo">
              <img src="<?= HOME_ASSETS ?>imgs/svgs/timer.svg" alt="Cronômetro" class="icone" />
              <h3>Cronômetro</h3>
              <p>Utilizamos um cronômetro integrado para ajudar você a medir e controlar melhor o tempo de estudo.</p>
              <ul>
                <li>Tempo real</li>
                <li>Incentivo</li>
              </ul>
            </div>
          </div>

          <!-- FOOTER -->
          <footer class="footer">
            <div class="footer-container">
              <div class="footer-col">
                <h3><span class="highlight">SIMULA</span>ETEC</h3>
                <p>
                  Plataforma de preparação para os vestibulinhos da ETEC,
                  com simulados atualizados e baseados em provas anteriores,
                  ajudando na melhoria do desempenho dos candidatos.
                </p>
                <p>📞 1306420691</p>
                <p>📧 simulaetec@gmail.com</p>
                <p>📷 @simulaetec</p>
              </div>
              <div class="footer-col">
                <h4>Links</h4>
                <ul>
                  <li><a href="#">Simulados</a></li>
                  <li><a href="#">Guia de Estudos</a></li>
                  <li><a href="#">Login</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Instituições</h4>
                <ul>
                  <li><a href="https://etec.sp.gov.br/">ETEC</a></li>
                  <li><a href="https://www.vestibulinhoetec.com.br/">Vestibulinho</a></li>
                  <li><a href="https://www.cps.sp.gov.br/">CPS</a></li>
                </ul>
              </div>
            </div>
          </footer>
        </div>
      </section>
    </main>
  </div>

  <!-- Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Login box toggle
      const loginBtn = document.querySelector('.login-container .category-link');
      const loginBox = document.querySelector('.login-box');

      if (loginBtn) {
        loginBtn.addEventListener('click', function(e) {
          e.preventDefault();
          loginBox.classList.toggle('show');
          document.querySelector('.login-form-container').style.display = 'block';
          document.querySelector('.cadastro-form-container').style.display = 'none';
        });
      }

      document.querySelectorAll('.toggle-form').forEach(link => {
        link.addEventListener('click', function(e) {
          e.preventDefault();
          const target = this.getAttribute('data-target');
          if (target === 'login') {
            document.querySelector('.login-form-container').style.display = 'block';
            document.querySelector('.cadastro-form-container').style.display = 'none';
          } else if (target === 'cadastro') {
            document.querySelector('.login-form-container').style.display = 'none';
            document.querySelector('.cadastro-form-container').style.display = 'block';
          } else if (target === 'esqueci') {
            alert('Funcionalidade de recuperação de senha ainda não implementada.');
          }
        });
      });

      // Sidebar toggle
      const btnSidebarToggle = document.getElementById('btnSidebarToggle');
      const sidebar = document.querySelector('.sidebar');

      btnSidebarToggle.addEventListener('click', function() {
        sidebar.classList.toggle('show');
      });

      // Fecha sidebar clicando fora
      window.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && !btnSidebarToggle.contains(e.target)) {
          sidebar.classList.remove('show');
        }
      });
    });
  </script>

</body>
</html>
