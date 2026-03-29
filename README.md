# Login-PHP
Este é um sistema de login simples desenvolvido em PHP puro, com o objetivo de demonstrar os principais conceitos de autenticação de utilizadores em aplicações web, sem o uso de base de dados.

Os utilizadores são definidos localmente em um ficheiro PHP, e o sistema valida as credenciais fornecidas no formulário de login. As senhas são armazenadas de forma segura utilizando hash, evitando exposição em texto plano.

🚀 Funcionalidades
✅ Sistema de login com email e senha
🔒 Senhas protegidas com hash
📂 Armazenamento de utilizadores em ficheiro PHP
🧠 Validação de credenciais
🔑 Gestão de sessões com $_SESSION
🚫 Proteção de páginas privadas
🔓 Logout de utilizadores
🛠️ Tecnologias Utilizadas
PHP (sem frameworks)
HTML5
CSS (básico)
📁 Estrutura do Projeto
/project-root
│
├── index.php        # Página de login
├── home.php         # Área protegida
├── logout.php       # Encerrar sessão
├── users.php        # Lista de utilizadores (com hash de senha)
└── styles.css       # Estilo (opcional)
⚙️ Como Executar
Instala um servidor local (ex: XAMPP, WAMP ou Laragon)
Coloca o projeto na pasta htdocs ou equivalente
Inicia o servidor Apache
Acede no navegador:
http://localhost/nome-do-projeto
🔐 Segurança

As senhas dos utilizadores são armazenadas utilizando funções de hash do PHP, como:

password_hash($senha, PASSWORD_DEFAULT);

E verificadas com:

password_verify($senhaDigitada, $hashArmazenado);

Isso garante maior segurança em comparação ao armazenamento em texto plano.

🎯 Objetivo Educacional

Este projeto foi desenvolvido com fins de aprendizagem, com foco em:

Entender o fluxo de autenticação
Trabalhar com sessões
Implementar controlo de acesso
Introduzir boas práticas de segurança
⚠️ Limitações
Não utiliza base de dados
Não possui sistema de registo de utilizadores
Estrutura simples (não escalável para produção)
📈 Possíveis Melhorias
Integração com MySQL ou outro banco de dados
Sistema de registo de novos utilizadores
Validação avançada de inputs
Uso de arquitetura MVC
Implementação de tokens (CSRF)
👨‍💻 Autor

Desenvolvido por Delson
