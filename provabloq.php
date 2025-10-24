<script src="https://cdn.tailwindcss.com"></script>

<!-- Fundo do site -->
<body class="bg-[#f3f1ff] min-h-screen flex items-center justify-center">

  <!-- Modal de Login/Cadastro -->
  <div id="loginModal"
       class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
    <div class="bg-white rounded-lg shadow-xl w-11/12 max-w-md p-10 relative transition">
      
      <!-- Logo -->
      <img src="<?= HOME_ASSETS ?>imgs/LogoOrca.svg"
           id="logo-topo"
           alt="Logo empresa"
           class="w-[40px] h-[40px] mx-auto mb-4" />

      <!-- Mensagem -->
      <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">
        Você precisa estar cadastrado para acessar este conteúdo!
      </h2>

      <?php if (!empty($mensagem)): ?>
        <p class="text-red-600 font-semibold text-center mb-3">
          <?= htmlspecialchars($mensagem) ?>
        </p>
      <?php endif; ?>

      <!-- Conteúdo do Modal -->
      <div class="space-y-4">

        <!-- Formulário de Login -->
        <div id="loginForm" class="space-y-4">
          <form action="<?= BASE_URL ?>?page=login" method="post" class="flex flex-col gap-3">
            <input type="email" name="email" placeholder="E-mail"
                   class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#5f58e7]"
                   required>

            <input type="password" name="senha" placeholder="Senha"
                   class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#5f58e7]"
                   required>

            <button type="submit"
                    class="bg-[#5f58e7] text-white rounded-md py-2 font-medium hover:bg-[#4f49d1] transition">
              Entrar
            </button>
          </form>

          <div class="text-center text-sm">
            <a href="#" id="showCadastro" class="text-[#5f58e7] hover:underline">Criar nova conta</a> |
            <a href="#" class="text-[#5f58e7] hover:underline">Esqueci a senha</a>
          </div>
        </div>

        <!-- Formulário de Cadastro -->
        <div id="cadastroForm" class="hidden space-y-4">
          <form action="<?= BASE_URL ?>?page=cadastro" method="post" class="flex flex-col gap-3">
            <input type="text" name="nome" placeholder="Nome completo"
                   class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#5f58e7]" required>

            <input type="email" name="email" placeholder="E-mail"
                   class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#5f58e7]" required>

            <input type="password" name="senha" placeholder="Senha"
                   class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#5f58e7]" required>

            <input type="password" name="confirmar_senha" placeholder="Confirmar senha"
                   class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#5f58e7]" required>

            <button type="submit"
                    class="bg-[#5f58e7] text-white rounded-md py-2 font-medium hover:bg-[#4f49d1] transition">
              Cadastrar
            </button>
          </form>

          <div class="text-center text-sm">
            <a href="#" id="showLogin" class="text-[#5f58e7] hover:underline">Já tenho uma conta</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Script -->
<script>
  const showCadastro = document.getElementById('showCadastro');
  const showLogin = document.getElementById('showLogin');
  const loginForm = document.getElementById('loginForm');
  const cadastroForm = document.getElementById('cadastroForm');

  showCadastro.addEventListener('click', (e) => {
    e.preventDefault();
    loginForm.classList.add('hidden');
    cadastroForm.classList.remove('hidden');
  });

  showLogin.addEventListener('click', (e) => {
    e.preventDefault();
    cadastroForm.classList.add('hidden');
    loginForm.classList.remove('hidden');
  });
</script>
