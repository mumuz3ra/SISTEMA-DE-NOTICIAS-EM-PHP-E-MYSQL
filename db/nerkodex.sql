-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/03/2025 às 01:05
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nerkodex`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `featured_collections`
--

CREATE TABLE `featured_collections` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `featured_posts`
--

CREATE TABLE `featured_posts` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `featured_posts`
--

INSERT INTO `featured_posts` (`id`, `post_id`, `created_at`) VALUES
(3, 2, '2025-03-09 01:00:09');

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `password_resets`
--

INSERT INTO `password_resets` (`id`, `user_id`, `token`, `expires_at`, `created_at`) VALUES
(1, 1, '70fd6db527a68e3633d3f6be10e38e64f77f2e98555e1dd7a7e08a30daeff5e5b7a0db82dc216883d8d2b2b4dc33a0f2d38a', '2025-02-11 00:19:55', '2025-02-10 00:19:55'),
(2, 1, '0b5a2d3c85e03e68c32ecf9d02d207ff8294cb422f1b01f3b016c168db307f5fd2b3d389920250e59a9126a1efa64e142906', '2025-02-11 00:19:59', '2025-02-10 00:19:59');

-- --------------------------------------------------------

--
-- Estrutura para tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `body` mediumtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 0,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `slug`, `body`, `image`, `published`, `view_count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Grass recolha seus tokens verdes!', 'grass-recolha-seus-tokens-verdes', '&lt;p&gt;A &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt; &eacute; uma inovadora plataforma que conecta pessoas a uma experi&ecirc;ncia de minera&ccedil;&atilde;o digital e ganhos passivos, permitindo que voc&ecirc; acumule tokens enquanto navega na internet. Com a miss&atilde;o de tornar o processo de &quot;farmar&quot; tokens mais acess&iacute;vel e simples, a &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt; oferece uma maneira pr&aacute;tica de gerar ganhos di&aacute;rios sem precisar de equipamentos especializados ou de conhecimento t&eacute;cnico avan&ccedil;ado.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#01 Cadastro no $Grass:&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Acesse o &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt; preencha seu e-mail, crie um nome de usu&aacute;rio e defina uma senha, concorde com os termos de uso e complete o captcha, verifique se o c&oacute;digo de refer&ecirc;ncia &eacute; ***** depois clique em registrar para concluir o cadastro.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_01_1_1731679600.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#02 Baixar a Extens&atilde;o do $Grass:&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Ap&oacute;s fazer login na sua conta, acesse a &lt;span style=&quot;color: rgb(55, 56, 58);&quot;&gt;extens&atilde;o &lt;/span&gt;&lt;a href=&quot;https://chromewebstore.google.com/detail/grass-lite-node/ilehaonighjijnmpnagapkhpcdbhclfg?hl=en&amp;authuser=0&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$GrassEx&lt;/u&gt;&lt;/a&gt; e clique em Clique em &quot;Add to Chrome&quot; para adicionar a extens&atilde;o ao seu navegador, use o Chrome no computador, para dispositivos m&oacute;veis a empresa recomenda os navegadores &quot;Kiwi&quot; ou &quot;Mises&quot; (n&atilde;o testados oficialmente).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_02_1_1731679611.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#03 Conectar a Extens&atilde;o ao $Grass:&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Ap&oacute;s a instala&ccedil;&atilde;o da extens&atilde;o, clique no &iacute;cone de quebra-cabe&ccedil;a no canto superior direito do Chrome para abrir as extens&otilde;es, selecione a &quot;Grass Extension&quot; e clique em login, entre com a conta que voc&ecirc; acabou de cadastrar no &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_03_1_1731679619.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#04 Comece a Farmar $Grass:&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Ap&oacute;s alguns minutos, a extens&atilde;o no navegador indicar&aacute; que voc&ecirc; est&aacute; conectado e come&ccedil;ar&aacute; a acumular tokens de &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;Importante: Voc&ecirc; estar&aacute; farmando &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt; enquanto seu navegador estiver aberto e conectado, quanto mais tempo conectado, mais tokens voc&ecirc; ganha.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_04_1_1731679629.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#05 Ganhe Mais Tokens com uma Conex&atilde;o R&aacute;pida:&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Quanto mais r&aacute;pida for a sua conex&atilde;o &agrave; internet, maior ser&aacute; o n&uacute;mero de tokens que voc&ecirc; receber&aacute; diariamente, voc&ecirc; pode instalar a extens&atilde;o &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt; em outros dispositivos para aumentar a quantidade de tokens, conectando redes extras.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_05_1_1731679644.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#06 Pr&oacute;ximos Passos:&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Em breve, publicaremos um tutorial sobre como negociar seus tokens de &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt; no site &lt;a href=&quot;https://app.whales.market/points-markets?project=Grass&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$whales&lt;/u&gt;&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_06_1_1731679653.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;A &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt; n&atilde;o &eacute; apenas uma forma de ganhar dinheiro; &eacute; uma oportunidade de participar de uma nova economia digital, onde a minera&ccedil;&atilde;o e os ganhos passivos s&atilde;o democratizados. Se voc&ecirc; quer aproveitar o potencial da internet para gerar renda de forma simples e pr&aacute;tica, a &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt; &eacute; a plataforma ideal para voc&ecirc;.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;N&atilde;o perca tempo! Cadastre-se agora, baixe a extens&atilde;o e comece a farmar seus tokens de &lt;a href=&quot;https://app.getgrass.io/register?referralCode=8rEDKzLxpKooM7D&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Grass&lt;/u&gt;&lt;/a&gt;!&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;➤ Se voc&ecirc; achou essas informa&ccedil;&otilde;es &uacute;teis, n&atilde;o se esque&ccedil;a de deixar um coment&aacute;rio e compartilhar nosso post!&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;➤ Fique de olho em nossas redes para mais novidades (links no site).&lt;/p&gt;', 'grass-recolha-seus-tokens-verdes_1731639070.png', 1, 483, '2024-11-15 06:51:10', '2024-11-15 06:51:10', NULL),
(2, 1, 2, 'Analisando HTTP com WIRESHARK', 'analisando-http-com-wireshark', '&lt;p&gt;Se voc&ecirc; est&aacute; monitorando a rede na sua m&aacute;quina, o &lt;a href=&quot;https://www.wireshark.org/&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Wireshark&lt;/u&gt;&lt;/a&gt; s&oacute; pode capturar o tr&aacute;fego da sua pr&oacute;pria m&aacute;quina (ou seja, o tr&aacute;fego que est&aacute; indo para ou vindo de sua m&aacute;quina).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Agora, se voc&ecirc; estiver monitorando o tr&aacute;fego em uma rede local, como uma rede Wi-Fi compartilhada com outros dispositivos, as coisas mudam um pouco.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Se o dispositivo est&aacute; na mesma rede (Wi-Fi ou LAN): Se voc&ecirc; estiver capturando pacotes em uma rede local onde outros dispositivos (como celulares, laptops, etc...) tamb&eacute;m est&atilde;o conectados, o Wireshark poder&aacute; ver o tr&aacute;fego entre esses dispositivos&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Tr&aacute;fego HTTP: Se os dispositivos est&atilde;o acessando sites via HTTP (n&atilde;o seguro), o Wireshark pode capturar dados como senhas, e-mails, mensagens e outros dados pessoais, desde que o tr&aacute;fego esteja vis&iacute;vel para a sua m&aacute;quina na rede.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Tr&aacute;fego HTTPS: O Wireshark n&atilde;o conseguir&aacute; ler o conte&uacute;do de conex&otilde;es HTTPS (como quando os usu&aacute;rios acessam sites banc&aacute;rios, e-commerce, Gmail, etc...), pois o tr&aacute;fego ser&aacute; criptografado. Para esses casos, voc&ecirc; ver&aacute; pacotes TLS/SSL, mas n&atilde;o ser&aacute; poss&iacute;vel visualizar o conte&uacute;do sem ter a chave privada de descriptografia, o que n&atilde;o &eacute; algo acess&iacute;vel para quem est&aacute; apenas monitorando a rede local.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Para capturar o tr&aacute;fego de outros dispositivos conectados &agrave; mesma rede Wi-Fi, voc&ecirc; precisaria configurar o seu adaptador de rede em modo prom&iacute;scuo (modo que permite capturar todo o tr&aacute;fego de rede, n&atilde;o apenas o que vai para o seu dispositivo).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Wi-Fi: Ao capturar pacotes de outros dispositivos conectados &agrave; mesma rede sem o uso de t&eacute;cnicas de &quot;Man-in-the-Middle&quot; (MITM) ou outras ferramentas espec&iacute;ficas &eacute; mais dif&iacute;cil, pois a criptografia (como WPA2) protege as comunica&ccedil;&otilde;es. O Wireshark n&atilde;o pode simplesmente capturar pacotes criptografados de outros dispositivos se eles n&atilde;o estiverem direcionados para a sua m&aacute;quina.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Ethernet: Em uma rede com fio, o Wireshark pode capturar todos os pacotes na rede local se a m&aacute;quina estiver configurada para isso (e.g., em um switch de rede n&atilde;o gerenciado, onde todo tr&aacute;fego &eacute; enviado para todas as portas).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;Como usar o Wireshark de maneira &eacute;tica:&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Vou te dar uma vis&atilde;o geral de como voc&ecirc; pode usar o Wireshark para testar se o seu site ou os sites no ambiente controlado como o (&lt;a href=&quot;http://testphp.vulnweb.com/&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Acuart&lt;/u&gt;&lt;/a&gt;) est&atilde;o utilizando HTTPS de forma eficaz e se h&aacute; tr&aacute;fego inseguro (HTTP) que precisa ser corrigido.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#01 Captura de pacotes na sua rede local:&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Abra o Wireshark em seu computador e selecione a interface de rede que voc&ecirc; usar&aacute; para capturar o tr&aacute;fego (seja Wi-Fi ou Ethernet). Inicie a captura clicando no bot&atilde;o de &quot;Iniciar Captura&quot;. No campo de filtro do Wireshark, voc&ecirc; pode aplicar filtros espec&iacute;ficos para facilitar a visualiza&ccedil;&atilde;o do tr&aacute;fego:&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Para capturar tr&aacute;fego HTTP (n&atilde;o seguro): Use o filtro http.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_01_1_1732476881.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#02 Monitorando o tr&aacute;fego HTTP (n&atilde;o criptografado):&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Quando voc&ecirc; acessar um site que utiliza HTTP, o tr&aacute;fego ser&aacute; transmitido em texto simples. Isso significa que qualquer dado enviado, como senhas, e-mails, dados de formul&aacute;rios, entre outros, ser&aacute; vis&iacute;vel no tr&aacute;fego de rede. No Wireshark, voc&ecirc; pode ver diretamente esses dados, desde que o tr&aacute;fego n&atilde;o seja criptografado.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Acesse o site que deseja testar (de prefer&ecirc;ncia, em um ambiente de teste ou com permiss&atilde;o).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_02_1_1732476918.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;No Wireshark, procure os pacotes que cont&ecirc;m informa&ccedil;&otilde;es de formul&aacute;rios talvez possa estar em (POST).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_03_1_1732476944.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Voc&ecirc; poder&aacute; visualizar informa&ccedil;&otilde;es como email, password, e outros dados, dependendo do site e de como ele envia as informa&ccedil;&otilde;es.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#03 Como visualizar um login em texto simples:&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Se voc&ecirc; acessar um site que utiliza HTTP e enviar um formul&aacute;rio com dados como um nome de usu&aacute;rio e senha, voc&ecirc; ver&aacute; essas informa&ccedil;&otilde;es abertas no Wireshark. O pacote HTTP pode conter informa&ccedil;&otilde;es importantes:&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_04_1_1732477016.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/nerkodex/assets/images/in_post_images/_05_1_1732477025.png&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;#04: Como for&ccedil;ar o uso de HTTPS no seu site&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Para garantir que todas as conex&otilde;es ao seu site sejam seguras, voc&ecirc; pode configurar o redirecionamento de HTTP para HTTPS. Isso pode ser feito de forma simples, dependendo do servidor que voc&ecirc; est&aacute; utilizando:&lt;/p&gt;&lt;p&gt;Apache: No arquivo .htaccess, adicione o seguinte c&oacute;digo para redirecionar todo o tr&aacute;fego HTTP para HTTPS:&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;...&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Nginx: No arquivo de configura&ccedil;&atilde;o nginx.conf, adicione o seguinte bloco de c&oacute;digo para garantir que o tr&aacute;fego seja redirecionado para HTTPS:&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;...&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Certificado SSL/TLS:&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Al&eacute;m de for&ccedil;ar o HTTPS, &eacute; necess&aacute;rio garantir que seu site tenha um certificado SSL/TLS v&aacute;lido. Esse certificado permite que o site seja acessado de forma segura usando HTTPS.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Voc&ecirc; pode obter um certificado SSL/TLS gratuito por meio do LET&#039;S ENCRYPT, que oferece uma maneira f&aacute;cil de implementar HTTPS no seu site.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;O Wireshark pode ser uma ferramenta extremamente &uacute;til para monitorar o tr&aacute;fego de rede e identificar se o seu site ou ambiente de testes est&aacute; utilizando conex&otilde;es seguras (HTTPS) ou n&atilde;o (HTTP). Em um ambiente de testes controlado, como o &lt;a href=&quot;http://testphp.vulnweb.com/&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Acuart&lt;/u&gt;&lt;/a&gt;, voc&ecirc; pode identificar se o tr&aacute;fego est&aacute; sendo transmitido de forma segura, sem comprometer a privacidade ou a seguran&ccedil;a de outras pessoas&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Se voc&ecirc; encontrar um site que est&aacute; usando HTTP, voc&ecirc; pode alertar eles sobre os riscos de seguran&ccedil;a e tomar medidas para for&ccedil;ar o uso de HTTPS, garantindo que os dados dos usu&aacute;rios estejam sempre criptografados.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;➤ Se voc&ecirc; achou essas informa&ccedil;&otilde;es &uacute;teis, n&atilde;o se esque&ccedil;a de deixar um coment&aacute;rio e compartilhar nosso post!&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;➤ Fique de olho em nossas redes para mais novidades (links no site).&lt;/p&gt;', 'analisando-http-com-wireshark_1741478528.png', 1, 505, '2024-12-10 05:56:46', '2025-03-09 04:02:08', NULL),
(3, 1, 3, 'Valve reforça proibição de anúncios forçados em jogos na Steam', 'valve-reforca-proibicao-de-anuncios-forcados-em-jogos-na-steam', '&lt;h3&gt;&lt;strong&gt;$Valve Implementa Novas Regras Contra Publicidade Intrusiva no $Steam&lt;/strong&gt;&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;A &lt;a href=&quot;https://www.valvesoftware.com/pt-br/&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Valve&lt;/u&gt;&lt;/a&gt; anunciou mudan&ccedil;as significativas na forma como os jogos podem gerar receita na plataforma &lt;a href=&quot;https://store.steampowered.com/?curator_clanid=4&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Steam&lt;/u&gt;&lt;/a&gt;. A principal novidade &eacute; a proibi&ccedil;&atilde;o de jogos que dependem de an&uacute;ncios para gerar receita. A partir de agora, t&iacute;tulos que forcem os jogadores a interagir com propagandas ou ofere&ccedil;am recompensas por assisti-las n&atilde;o ser&atilde;o permitidos na loja.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;As principais restri&ccedil;&otilde;es incluem:&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;&lt;strong&gt;#01 Proibi&ccedil;&atilde;o de an&uacute;ncios:&lt;/strong&gt;&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Jogos n&atilde;o poder&atilde;o exigir que os jogadores assistam ou interajam com an&uacute;ncios para continuar jogando ou desbloquear recursos.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;&lt;strong&gt;#02 Recompensas por an&uacute;ncios s&atilde;o proibidas:&lt;/strong&gt;&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;N&atilde;o ser&aacute; permitido oferecer recompensas para os jogadores que assistirem propagandas dentro do jogo.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;&lt;strong&gt;#03 Proibi&ccedil;&atilde;o de cobran&ccedil;a:&lt;/strong&gt;&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Desenvolvedores n&atilde;o poder&atilde;o cobrar outros est&uacute;dios pelo acesso a ferramentas da &lt;a href=&quot;https://store.steampowered.com/?curator_clanid=4&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Steam&lt;/u&gt;&lt;/a&gt;, como p&aacute;ginas promocionais, bundles ou p&aacute;ginas de franquias.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;&lt;strong&gt;Mudan&ccedil;as nas Regras da Loja&lt;/strong&gt;&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Essas atualiza&ccedil;&otilde;es complementam a proibi&ccedil;&atilde;o de tecnologias de blockchain, como a emiss&atilde;o de criptomoedas e NFTs, implementada pela &lt;a href=&quot;https://www.valvesoftware.com/pt-br/&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Valve&lt;/u&gt;&lt;/a&gt; em 2021. Apesar da restri&ccedil;&atilde;o, a &lt;a href=&quot;https://www.valvesoftware.com/pt-br/&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Valve&lt;/u&gt;&lt;/a&gt; esclarece que a publicidade n&atilde;o est&aacute; sendo banida da plataforma de forma geral. Modelos tradicionais de marketing, como o uso de produtos reais dentro dos jogos, promo&ccedil;&otilde;es cruzadas entre t&iacute;tulos e an&uacute;ncios pagos fora do &lt;a href=&quot;https://store.steampowered.com/?curator_clanid=4&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Steam&lt;/u&gt;&lt;/a&gt;, continuam permitidos.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;O foco da mudan&ccedil;a &eacute;, principalmente, em combater os formatos de publicidade intrusiva encontrados com frequ&ecirc;ncia em jogos mobile. A &lt;a href=&quot;https://www.valvesoftware.com/pt-br/&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Valve&lt;/u&gt;&lt;/a&gt;deseja garantir que os jogos no &lt;a href=&quot;https://store.steampowered.com/?curator_clanid=4&quot; target=&quot;_blank&quot;&gt;&lt;u&gt;$Steam&lt;/u&gt;&lt;/a&gt; n&atilde;o forcem os jogadores a assistir a an&uacute;ncios como parte da experi&ecirc;ncia de jogo, um problema comum nos dispositivos m&oacute;veis.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;&lt;strong&gt;O que isso significa para os desenvolvedores?&lt;/strong&gt;&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Os est&uacute;dios agora precisam se adaptar a esses novos par&acirc;metros para garantir que seus jogos permane&ccedil;am na plataforma. Modelos de monetiza&ccedil;&atilde;o mais tradicionais, como vendas diretas ou DLCs, seguem sendo bem-vindos.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;➤ Se voc&ecirc; achou essas informa&ccedil;&otilde;es &uacute;teis, n&atilde;o se esque&ccedil;a de deixar um coment&aacute;rio e compartilhar nosso post!&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;➤ Fique de olho em nossas redes para mais novidades (links no site).&lt;/p&gt;', 'valve-reforca-proibicao-de-anuncios-forcados-em-jogos-na-steam_1739407501.jpg', 1, 184, '2025-02-13 04:45:01', '2025-02-13 04:45:01', NULL),
(4, 1, 4, 'Hacker Coloca DOOM no Site Oficial do Exército Brasileiro', 'hacker-coloca-doom-no-site-oficial-do-exercito-brasileiro', '&lt;h3&gt;DOOM aparece rodando em site do Ex&eacute;rcito Brasileiro&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Nos &uacute;ltimos dias, a comunidade gamer e especialistas em seguran&ccedil;a digital ficaram perplexos com uma cena nada convencional: DOOM, o cl&aacute;ssico FPS que roda at&eacute; em testes de gravidez, apareceu em um site oficial do Ex&eacute;rcito Brasileiro. Mas calma, n&atilde;o foi um hack complexo nem um soldado jogando no expediente &ndash; foi uma falha de seguran&ccedil;a simples, mas bizarra.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;O que aconteceu?&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Um usu&aacute;rio encontrou uma vulnerabilidade do tipo XSS Refletido (Cross-Site Scripting) em um site do Ex&eacute;rcito. Em termos simples, foi como se um portal para o inferno tivesse sido aberto, mas ao inv&eacute;s de dem&ocirc;nios, o que apareceu foi um script que permitiu carregar DOOM diretamente na p&aacute;gina do site.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;A falha funcionava assim: manipulando a URL do site, o navegador carregava dinamicamente um iframe com DOOM. Ou seja, ao inv&eacute;s de o jogo ser hospedado no servidor do Ex&eacute;rcito, ele estava apenas sendo emulado na interface da p&aacute;gina, como um dem&ocirc;nio disfar&ccedil;ado de humano.&lt;/p&gt;&lt;h3&gt;&lt;br&gt;&lt;/h3&gt;&lt;iframe class=&quot;ql-video&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;true&quot; src=&quot;https://www.youtube.com/embed/3S2DmZI9xZ8?si=AoBCOmNXFwOic-as&quot; height=&quot;315&quot; width=&quot;100%&quot;&gt;&lt;/iframe&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h3&gt;Como o XSS permitiu rodar o game?&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;A falha era um XSS Refletido, um tipo de vulnerabilidade onde um script malicioso &eacute; refletido em uma p&aacute;gina web. Essa falha &eacute; t&atilde;o comum quanto um Zombieman aparecendo em um corredor apertado, e basicamente permitia que qualquer usu&aacute;rio injetasse um c&oacute;digo que carregava conte&uacute;do externo na p&aacute;gina &ndash; no caso, DOOM. Foi como se o script tivesse invocado um dos maiores cl&aacute;ssicos dos games diretamente no site do Ex&eacute;rcito.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Agora, a equipe de TI do Ex&eacute;rcito deve estar enfrentando um verdadeiro Ultra-Nightmare Mode: revisando c&oacute;digos, corrigindo falhas e, provavelmente, lidando com muita press&atilde;o. Normalmente, falhas como essa s&atilde;o corrigidas com filtros de entrada e sanitiza&ccedil;&atilde;o de dados &ndash; medidas que, se estivessem implementadas corretamente, teriam evitado a invas&atilde;o de DOOM.&lt;/p&gt;&lt;h3&gt;&lt;br&gt;&lt;/h3&gt;&lt;h3&gt;DOOM rodando em qualquer coisa&lt;/h3&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Este caso mostra como falhas &quot;simples&quot; podem gerar resultados hil&aacute;rios. Enquanto os programadores do Ex&eacute;rcito tentam corrigir o erro, o mundo ganha mais um cap&iacute;tulo na saga de DOOM rodando onde menos se espera.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Quem sabe o pr&oacute;ximo local n&atilde;o seja um painel de controle nuclear? (Brincadeira, pelo amor de Doomguy, n&atilde;o tentem isso). Agora, a pergunta que fica &eacute;: se voc&ecirc; pudesse &quot;instalar&quot; DOOM em qualquer lugar, onde seria?&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;➤ Se voc&ecirc; achou essas informa&ccedil;&otilde;es &uacute;teis, n&atilde;o se esque&ccedil;a de deixar um coment&aacute;rio e compartilhar nosso post!&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;➤ Fique de olho em nossas redes para mais novidades (links no site).&lt;/p&gt;', 'hacker-coloca-doom-no-site-oficial-do-exercito-brasileiro_1740453010.png', 1, 356, '2025-02-20 05:59:12', '2025-02-25 07:10:10', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `post_collections`
--

CREATE TABLE `post_collections` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `description` mediumtext NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `post_collections`
--

INSERT INTO `post_collections` (`id`, `title`, `slug`, `description`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Últimos posts adicionados', 'ultimos-posts-adicionados', 'Aqui você encontra os conteúdos mais recentes publicados em nosso website. Fique por dentro das novidades e informações assim que forem adicionadas!', 1, '2025-02-25 03:12:07', NULL),
(2, 'Posts recomendados', 'posts-recomendados', 'Uma seleção de artigos que foram especialmente escolhidos para você, com base na relevância e popularidade. Se você está buscando conteúdos essenciais e altamente recomendados, esta é a seção para você.', 2, '2025-02-25 03:12:32', '2025-02-25 03:12:36'),
(3, 'Guias e Tutoriais', 'guias-e-tutoriais', 'Artigos passo a passo que ensinam desde conceitos básicos até técnicas avançadas em programação, hacking, criptomoedas e muito mais. Aprenda na prática com tutoriais focados em desenvolvimento de software, segurança cibernética e outras áreas.', 3, '2025-02-25 03:15:41', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `post_collection_posts`
--

CREATE TABLE `post_collection_posts` (
  `id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `post_collection_posts`
--

INSERT INTO `post_collection_posts` (`id`, `collection_id`, `post_id`, `sort_order`, `created_at`, `updated_at`) VALUES
(45, 3, 2, 1, '2025-02-12 23:05:54', NULL),
(46, 3, 1, 2, '2025-02-12 23:05:54', NULL),
(66, 6, 1, 1, '2025-02-12 23:33:29', NULL),
(71, 1, 4, 1, '2025-02-24 22:59:30', NULL),
(76, 1, 3, 6, '2025-02-24 22:59:31', NULL),
(77, 1, 1, 7, '2025-02-24 22:59:31', NULL),
(78, 1, 2, 8, '2025-02-24 22:59:31', NULL),
(79, 2, 4, 1, '2025-02-24 23:13:44', NULL),
(80, 2, 3, 2, '2025-02-24 23:13:44', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `related_posts`
--

CREATE TABLE `related_posts` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `related_post_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'O Admin é um usuário que tem a responsabilidade de gerenciar outros usuários dentro do sistema. Ele controla as funções e permissões de cada usuário, podendo definir o que cada um pode ou não fazer. Esse papel inclui a capacidade de adicionar, editar ou remover usuários, além de configurar as permissões e garantir que o sistema funcione corretamente para todos.', '2024-11-15 06:03:49', NULL),
(2, 'Editor', 'editor', 'O Editor é um usuário que tem permissão para criar, editar e gerenciar conteúdos dentro do sistema, mas com menos privilégios do que o Admin. Ele pode modificar textos, imagens, publicações e outros elementos, dependendo das permissões atribuídas. No entanto, o Editor não tem a capacidade de gerenciar usuários ou modificar configurações de sistema, como o Admin.', '2024-11-15 06:05:04', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Criptomoedas', 'criptomoedas', 'Criptomoedas são Mmoedas digitais baseadas em tecnologia blockchain, como Bitcoin, Ethereum, e outras altcoins.', '2025-02-25 06:20:26', NULL),
(2, 'Ferramentas', 'ferramentas', 'Ferramentas são softwares e utilitários usados para facilitar o desenvolvimento, testes e segurança em programação e hacking.', '2025-02-25 06:20:41', NULL),
(3, 'Games', 'games', 'Tutoriais e recursos sobre como criar, desenvolver e modificar jogos. Aprenda sobre programação, design e mecânicas de jogos.', '2025-02-25 06:20:58', NULL),
(4, 'Hacking', 'hacking', 'Práticas de exploração de sistemas para entender, testar ou melhorar sua segurança, com foco em métodos éticos.', '2025-02-25 06:21:26', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `verified` tinyint(4) DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `bio` mediumtext DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `email`, `verified`, `image`, `bio`, `password`, `token`, `linkedin`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 1, 'nerkodex', 'nerkodex@gmail.com', 0, 'nerkodex_1739412977.png', '\"Olá Mundo!\"', '$2y$12$3nRBa2tLwPg70tQwsXUrW.KWYS5Uh8AZZspBQBj1I7NOD/OaxTy4m', 'fe148c99bcda83399bc4f8318a0f4a0641c36938d05383c620059b49fd88e8cdceab27b262f42d8a345904f1ec3f7f65f829', '', '', '', '0000-00-00 00:00:00', '2025-03-09 03:59:48');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `featured_collections`
--
ALTER TABLE `featured_collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Índices de tabela `featured_posts`
--
ALTER TABLE `featured_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Índices de tabela `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_id` (`role_id`,`permission_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Índices de tabela `post_collections`
--
ALTER TABLE `post_collections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Índices de tabela `post_collection_posts`
--
ALTER TABLE `post_collection_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_id` (`collection_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Índices de tabela `related_posts`
--
ALTER TABLE `related_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `related_post_id` (`related_post_id`);

--
-- Índices de tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Índices de tabela `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `token` (`token`),
  ADD KEY `users_ibfk_1` (`role_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `featured_collections`
--
ALTER TABLE `featured_collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `featured_posts`
--
ALTER TABLE `featured_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `post_collections`
--
ALTER TABLE `post_collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `post_collection_posts`
--
ALTER TABLE `post_collection_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de tabela `related_posts`
--
ALTER TABLE `related_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `featured_collections`
--
ALTER TABLE `featured_collections`
  ADD CONSTRAINT `featured_collections_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `featured_posts`
--
ALTER TABLE `featured_posts`
  ADD CONSTRAINT `featured_posts_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `password_resets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Restrições para tabelas `post_collection_posts`
--
ALTER TABLE `post_collection_posts`
  ADD CONSTRAINT `post_collection_posts_ibfk_1` FOREIGN KEY (`collection_id`) REFERENCES `post_collections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_collection_posts_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `related_posts`
--
ALTER TABLE `related_posts`
  ADD CONSTRAINT `related_posts_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `related_posts_ibfk_2` FOREIGN KEY (`related_post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
