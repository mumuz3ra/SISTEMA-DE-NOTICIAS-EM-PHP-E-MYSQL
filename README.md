##  SISTEMA DE NOTÍCIAS EM PHP E MYSQL

Este é um sistema de gerenciamento de notícias desenvolvido com "PHP" e "MySQL". É um sistema simples e funcional que permite a criação e organização de conteúdo de forma prática e segura.

##  FUNCIONALIDADES

- Sistema de login
- Diferentes níveis de acesso `Usuário` e `Admin`
- Login com autenticação segura
- CRUD de notícias
- CRUD de usuários
- Sistema de Busca
- Comentários via disqus
- Estrutura de pastas organizada

##  TECNOLOGIAS UTILIZADAS

- PHP
- MySQL
- HTML5 + CSS3
- JavaScript
- Disqus (Plataforma externa de comentários)
- API TRANSLATION (para tradução das páginas)

##  POSTS / NOTÍCIAS

- Todos as notícias do sistema foram criadas por mim e são legítimas.

##  COMO EXECUTAR O PROJETO

- Clone ou baixe o repositório
- Renomeie a pasta principal para `nerkodex`
- Coloque-a dentro do diretório `htdocs` (XAMPP) ou `www` (LAMP)
- Importe o banco de dados `nerkodex.sql` que está na pasta `db` para o phpMyAdmin
- Acesse o projeto no navegador

##  CREDENCIAIS DO SISTEMA
- Usuário: `nerkodex`
- Senha: `nerkodex`

##  IMPORTANTE SOBRE O SSL
Se o servidor local estiver com "SSL (HTTPS) ativado", será necessário alterar a URL base do projeto no arquivo `path.php`.  
Edite a variável:

```php
$base_url = 'http://localhost/nerkodex';   //SEM SSL

$base_url = 'https://localhost/nerkodex';  //COM SSL
```

## FOTOS DO SISTEMA