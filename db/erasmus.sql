-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Ne 06.Okt 2019, 10:18
-- Verzia serveru: 10.1.28-MariaDB
-- Verzia PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `erasmus`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_05_123219_create_posts_table', 1),
(4, '2019_10_05_123818_create_tags_table', 1),
(5, '2019_10_05_124135_create_post_tag_pivot_table', 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `text`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'JV Asie – Chang Jung Christian University ', '\r\n2. Příprava pobytu\r\nPojištění\r\n\r\nPojištění jsem si zařídil od Fio banky a pokud to bude i příští rok možné, doporučuji vám to samé. Je třeba si založit účet, což je zdarma, pak vložit na účet nějaké peníze a pojištění je k účtu, na rok zhruba 700 korun, já jsem si zvolil nějaké s vyšším krytím, protože to bylo asi jen 100 korun navíc, člověk nikdy neví J. Toto pojištění ale nesplňuje jeden limit nastavený školou a my jsme dostali výjimečné povolení. Pojištění je také sice na rok, na jeden výjezd však platí jen na 180 dní (tzn., musíte se vrátit po půl roce do ČR, aby vám stále platilo, pak můžete znovu vycestovat). Já jsem byl letos v Asii 174 dní, takže to vyšlo taktak, takže si spočítejte, jak vám to vychází.\r\nOčkování, testy a vyšetření\r\n\r\nCelou tuto proceduru jsem zvolil ve fakultní nemocnici, kde to vychází nejlevněji, také musím říct, že v této ordinaci jsou velmi vstřícní, co se týče objednávání termínů a poradí vám, pokud se rozhodujete ohledně doporučených očkování. Nechal jsem se tedy povinně očkovat proti žloutence A, už z minulosti jsem měl očkování proti žloutence B a břišnímu tyfu, dále jsem se dobrovolně nechal očkovat proti vzteklině a meningokoku. S očkováním začněte nejdéle tak na začátku listopadu, některá očkování jsou na vícekrát a musí mezi nimi být určitá prodleva. Očkování + testy mě vyšlo na přibližně 5 000kč, z toho 500kč mi hradila VZP (hradí 500kč 1x za rok na očkování, takže když si necháte něco očkovat v listopadu nebo prosinci a něco pak v lednu, měla by vám dát 1000kč, u ostatních pojišťoven nevím, jak to funguje. Dále jsem v areálu fakultní nemocnice podstoupil testy na HIV s anglickým certifikátem, testy na syfilis a rentgen plic kvůli tuberkulóze.', 'JV-Asie', '2019-10-01 22:00:00', NULL),
(2, 1, 'Erasmus do Portugalska j', 'Na Erasmus do Portugalska jsem se vydala společně se svojí kamarádkou ze školy Pájou. Po dlouhém uvažování jsme se nakonec rozhodly, že pojedeme do Portugalska, protože tam bude krásně teplo. Opak byl ale pravdou. Ze začátku sice svítilo sluníčko a mohly jsme se opalovat na naší krásné terase s výhledem na oceán, ale po chvíli se počasí obrátilo proti nám. Začaly nám deštivé dny. Ani počasí nám ale nemohlo pokazit požitek z krásného Portugalska a zážitky z Erasmu.\r\n\r\nBydlely jsme v městečku na kopci v nádherném domě společně se čtyřmi Brazilkami, jednou Běloruskou a třemi Češkami. Ze začátku se zdálo jako nemožné, dělit se o vše s dalšími sedmi holkami, ale postupem času jsme si všechny přirostly k srdci. Byly jsme jako sestry, vše jsme si půjčovaly a pomáhaly jsme si.\r\n\r\nDojít do školy nám trvalo asi 15 minut. Pokaždé jsme musely zdolat tři malé kopce. Dolů to ještě šlo, ale zpáteční cesta byla vždy malinko náročná. Do školy jsme ale chodily jen málokdy, protože se všechny předměty vyučovaly v portugalštině a my portugalsky neumíme. Se všemi učiteli jsme se proto domluvily na schůzkách, které se konaly přibližně jednou za dva týdny.', 'erasmus-portugalsko', NULL, NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Livia', 'livia.kelebercova@gmail.com', '123', NULL, NULL, NULL);

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexy pre tabuľku `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`post_id`,`tag_id`),
  ADD KEY `post_tag_post_id_index` (`post_id`),
  ADD KEY `post_tag_tag_id_index` (`tag_id`);

--
-- Indexy pre tabuľku `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
