<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Semestres - SimulaEtec</title>
  <link rel="icon" href="<?= HOME_ASSETS ?>imgs/LogoOrca.svg" type="image/svg+xml">
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    @font-face {
      font-family: 'Poppins';
      src: url('<?= HOME_ASSETS ?>fonts/Poppins.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }

    body {
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
      font-family: 'Poppins', sans-serif;
      background-color: #f9fafb;
    }

    .css-loaded body {
      opacity: 1;
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      left: -250px;
      width: 240px;
      height: 100vh;
      background: white;
      box-shadow: 2px 0 5px rgba(0,0,0,0.1);
      transition: left 0.3s ease;
      z-index: 4000;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 1rem 0;
    }

    .sidebar.show {
      left: 0;
    }

    .nav-item {
      display: block;
      padding: 12px 20px;
      color: #333;
      text-decoration: none;
      transition: background 0.2s;
    }

    .nav-item:hover, .nav-item.active {
      background-color: #e9e9ff;
      color: #5f58e7;
    }

    .login-container {
      border-top: 1px solid #e5e7eb;
      padding-top: 1rem;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(() => document.documentElement.classList.add('css-loaded'), 150);
    });
  </script>
</head>

<body>

  <!-- Botão do menu -->
  <button id="btnSidebarToggle" aria-label="Abrir menu" class="ml-5 mt-2 relative z-[4100] bg-transparent">
    <svg width="25" height="60" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" style="cursor:pointer;">
      <rect y="4" width="24" height="2" fill="#5f58e7" rx="1" ry="1" />
      <rect y="11" width="24" height="2" fill="#5f58e7" rx="1" ry="1" />
      <rect y="18" width="24" height="2" fill="#5f58e7" rx="1" ry="1" />
    </svg>
  </button>

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="nav-section"><br><br>
      <a href="home.php" class="nav-item active">Home</a>
      <a href="#" class="nav-item">Guia de Estudos</a>
      <!-- <a href="perfil.php" class="nav-item">Perfil</a> -->
    </div>
      <a href="perfil.php" class="nav-item">Perfil</a>
    </div> 
  </aside>

  <!-- Ícone de voltar -->
  <!-- <a href="javascript:void(0);" onclick="history.back()" class="inline-block ml-4 mt-4">
    <svg width="40" height="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Voltar para a página anterior" role="img">
      <path d="M15 18l-6-6 6-6" stroke="#5f58e7" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </a> -->

  <!-- CONTEÚDO -->
  <div class="mb-24 sm:mb-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 pt-6">
      <div class="mx-auto max-w-2xl lg:text-center">
        <h2 class="text-base font-semibold text-indigo-600">SIMULAETEC - BLOQ</h2>
        <p class="mt-2 text-4xl font-semibold tracking-tight text-gray-900">Escolha o semestre e a prova que deseja iniciar.</p>
        <p class="mt-6 text-lg text-gray-700">O simulado do Vestibulinho ajuda você a praticar com foco, identificar pontos fracos e ganhar confiança.</p>
      </div>

      <main class="main-content flex flex-wrap gap-4 justify-center mt-10">
        <!-- ITEM 2025 -->
        <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4 relative" style="height: 4.25rem;">
          <div class="bg-[#7541FA] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
            <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-8 h-8 invert" style="transform: scale(0.9);">
          </div>
          <div class="flex-1 px-4 py-2 text-left">
            <p class="text-gray-900 font-semibold">2025</p>
            <p class="text-gray-500 text-sm">1º Semestre</p>
          </div>
          <div class="relative px-2">
            <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
              </svg>
            </button>
            <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
              <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/20251468190/Gabarito.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
              <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/20251468190/Prova.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>
            </div>
          </div>
        </div>


    <!-- ITEM 2024 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Card + Modal Login Original</title>
<style>
  /* Seu estilo básico do modal login (copiado e adaptado) */
  .login-box {
    display: none;
    position: fixed;
    top: 80px;
    left: 50%;
    transform: translateX(-50%);
    background: white;
    border-radius: 12px;
    padding: 24px;
    width: 320px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    z-index: 9999;
  }
  .login-box.show {
    display: block;
  }
  .login-title {
    font-weight: 700;
    font-size: 1.25rem;
    margin-bottom: 1rem;
  }
  .login-input {
    width: 100%;
    padding: 0.5rem 0.75rem;
    margin-bottom: 0.75rem;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 1rem;
    box-sizing: border-box;
  }
  .login-button {
    width: 100%;
    padding: 0.75rem;
    background-color: #6b46c1; /* Roxo vibrante */
    color: white;
    font-weight: 700;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.1rem;
  }
  .register-link {
    display: block;
    margin-top: 0.75rem;
    color: #6b46c1;
    font-size: 0.9rem;
    text-align: center;
    cursor: pointer;
    text-decoration: underline;
  }
  .form-container {
    margin-bottom: 1rem;
  }
  .login-box p {
    color: red;
    font-weight: bold;
  }
</style>
</head>
<body>

<!-- Seu card -->
<div id="prova-card" class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4" style="height: 4.25rem; cursor: pointer; padding: 10px; border: 1px solid #ccc; user-select: none;">
  <div class="bg-[#e60076] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2" style="background:#e60076; border-radius: 9999px; display: flex; align-items: center; justify-content: center; width: 48px; height: 48px; margin-left: 0.5rem; margin-right: 1rem;">
    <img src="Today.svg" class="w-10 h-10 invert" alt="Ícone" style="width: 40px; height: 40px; filter: invert(100%);">
  </div>
  <div style="flex-grow: 1; padding: 0.5rem 1rem; text-align: left;">
    <p style="font-weight: 600; color: #1a202c;">2024</p>
    <p style="color: #718096; font-size: 0.875rem;">1º Semestre</p>
  </div>
  <div style="position: relative; padding: 0 0.5rem;">
    <button class="menuBtn text-black hover:text-gray-600 focus:outline-none" style="background:none; border:none; cursor:pointer;">
      <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px;" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
      </svg>
    </button>
    <div class="dropdownMenu hidden" style="position: absolute; right: 0; margin-top: 0.5rem; width: 160px; background: white; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); display:none; z-index: 10;">
      <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/20242918930/Gabarito-retificado.pdf'" style="width: 100%; padding: 0.5rem 1rem; border:none; background:none; text-align:left; cursor:pointer;">Ver Gabarito</button>
      <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/20242918930/Prova.pdf'" style="width: 100%; padding: 0.5rem 1rem; border:none; background:none; text-align:left; cursor:pointer;">Ver Prova</button>
    </div>
  </div>
</div>

<!-- Modal login original -->
<div class="login-box">
  <!-- Mensagem de erro, se tiver -->
  <p id="login-error" style="display:none;"></p>

  <!-- Formulário Login -->
  <div class="form-container login-form-container">
    <h3 class="login-title">Login</h3>
    <form class="login-form" action="#" method="post">
      <input type="email" name="email" placeholder="E-mail" id="input1" class="login-input" required />
      <input type="password" name="senha" placeholder="Senha" class="login-input" required />
      <button type="submit" class="login-button">Entrar</button>
    </form>
    <a href="#" class="register-link toggle-form" data-target="cadastro">Criar nova conta</a>
    <a href="#" class="register-link toggle-form" data-target="esqueci">Esqueci a senha</a>
  </div>

  <!-- Formulário Cadastro (inicialmente escondido) -->
  <div class="form-container cadastro-form-container" style="display:none;">
    <h3 class="login-title">Criar Conta</h3>
    <form class="login-form" action="#" method="post">
      <input type="text" name="nome" placeholder="Nome completo" class="login-input" required />
      <input type="email" name="email" placeholder="E-mail" class="login-input" required />
      <input type="password" name="senha" placeholder="Senha" class="login-input" required />
      <input type="password" name="confirmar_senha" placeholder="Confirmar senha" class="login-input" required />
      <button type="submit" class="login-button">Cadastrar</button>
    </form>
    <a href="#" class="register-link toggle-form" data-target="login">Já tenho uma conta</a>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const card = document.getElementById('prova-card');
  const loginBox = document.querySelector('.login-box');
  const toggleLinks = document.querySelectorAll('.toggle-form');

  // Abrir modal ao clicar no card
  card.addEventListener('click', function () {
    loginBox.classList.add('show');
  });

  // Alternar entre login e cadastro no modal
  toggleLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const target = this.getAttribute('data-target');
      const loginForm = loginBox.querySelector('.login-form-container');
      const cadastroForm = loginBox.querySelector('.cadastro-form-container');
      if (target === 'cadastro') {
        loginForm.style.display = 'none';
        cadastroForm.style.display = 'block';
      } else if (target === 'login') {
        loginForm.style.display = 'block';
        cadastroForm.style.display = 'none';
      }
    });
  });

  // Fechar o modal ao clicar fora dele (opcional)
  window.addEventListener('click', function (e) {
    if (e.target === loginBox) {
      loginBox.classList.remove('show');
    }
  });
});
</script>

</body>
</html>


    <!-- ITEM 2023 -->
    <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4">
      <div class="bg-[#f0b100] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
        <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-10 h-10 invert">
      </div>
      <div class="flex-1 px-4 py-2 text-left">
        <p class="text-gray-900 font-semibold">2023</p>
        <p class="text-gray-500 text-sm">2º Semestre</p>
      </div>
      <div class="relative px-2">
        <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
          </svg>
        </button>
        <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
          <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/202323718/Gabarito.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
          <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/202323718/Prova.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>

        </div>
      </div>
    </div>

    <!-- ITEM 2022 -->
    <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4" style="height: 4.25rem;">
      <div class="bg-[#F9705E] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
        <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-10 h-10 invert">
      </div>
      <div class="flex-1 px-4 py-2 text-left">
        <p class="text-gray-900 font-semibold">2022</p>
        <p class="text-gray-500 text-sm">2º Semestre</p>
      </div>
      <div class="relative px-2">
        <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
          </svg>
        </button>
        <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
          <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/2022027483/Gabarito.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
          <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/2022027483/Prova.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>
        </div>
      </div>
    </div>

    <!-- ITEM 2021 -->
    <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4">
      <div class="bg-[#2898ee] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
        <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-10 h-10 invert">
      </div>
      <div class="flex-1 px-4 py-2 text-left">
        <p class="text-gray-900 font-semibold">2020</p>
        <p class="text-gray-500 text-sm">1º Semestre</p>
      </div>
      <div class="relative px-2">
        <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
          </svg>
        </button>
        <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
          <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/202017430/Gabarito_1modulo-retificado.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
          <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/202017430/Prova_1modulo.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>
        </div>
      </div>
    </div>

    <!-- ITEM 2020 -->
    <div class="flex items-center bg-white rounded-lg shadow-md w-80 mb-4">
      <div class="bg-[#7178df] flex items-center justify-center w-12 h-12 text-white font-bold text-lg rounded mr-4 ml-2">
        <img src="<?= BLOQMENUPROVAS_ASSETS ?>/imgs/Today.svg" class="w-10 h-10 invert">
      </div>
      <div class="flex-1 px-4 py-2 text-left">
        <p class="text-gray-900 font-semibold">2019</p>
        <p class="text-gray-500 text-sm">2º Semestre</p>
      </div>
      <div class="relative px-2">
        <button class="menuBtn text-black hover:text-gray-600 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6h.01M12 12h.01M12 18h.01" />
          </svg>
        </button>
        <div class="dropdownMenu hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
          <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/201927134/Gabarito_1modulo.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Gabarito</button>
          <button onclick="window.location.href='https://fatweb.s3.amazonaws.com/vestibulinhoetec/gabarito/201927134/Prova_1modulo.pdf'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Ver Prova</button>
        </div>
      </div>
    </div>
      </main>
    </div>
  </div>

  <!-- SCRIPTS -->
  <script>
    // Dropdown de cada item
    document.querySelectorAll('.menuBtn').forEach(button => {
      button.addEventListener('click', e => {
        e.stopPropagation();
        const dropdown = button.nextElementSibling;
        document.querySelectorAll('.dropdownMenu').forEach(menu => {
          if (menu !== dropdown) menu.classList.add('hidden');
        });
        dropdown.classList.toggle('hidden');
      });
    });

    // Fecha dropdowns ao clicar fora
    window.addEventListener('click', e => {
      if (![...document.querySelectorAll('.dropdownMenu, .menuBtn')].some(el => el.contains(e.target))) {
        document.querySelectorAll('.dropdownMenu').forEach(menu => menu.classList.add('hidden'));
      }
    });

    // Sidebar toggle
    document.getElementById('btnSidebarToggle').addEventListener('click', () => {
      document.querySelector('.sidebar').classList.toggle('show');
    });
  </script>
</body>
</html>
