-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 23 2023 г., 16:21
-- Версия сервера: 10.3.36-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `RetroGames`
--

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id` mediumint(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `way` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`id`, `name`, `way`, `description`, `type`, `content`) VALUES
(1, 'Ну, погоди!', '-.-', 'Четыре курицы, сидящие на насестах, несут яйца, скатывающиеся вниз по четырём лоткам. Управляя Волком (из мультфильма «Ну, погоди!»), который может принимать четыре положения (напротив каждого лотка), требуется наловить как можно больше яиц в корзину. За каждое пойманное яйцо игроку добавляется по одному очку. Сначала яйца катятся медленно, но постепенно темп игры ускоряется. После набора каждой целой сотни очков темп игры немного замедляется.', 'Электроника ИМ 02', '<div class=\"blockGame\">\r\n				<a href=\"ExclusiveGame.php?name=\'Ну, погоди!\'\">\r\n					<img src=\"Images/nupogodi.png\">\r\n					<p> \r\n						Ну погоди!\r\n					</p>\r\n				</a>\r\n			</div>'),
(2, 'Battletoads (nes)', 'roms/nes/Battletoads.nes', 'Профессор Т. Бёрд и три боевые жабы, Рэш, Зитц и Пимпл сопровождают принцессу Анжелику на её родную планету на своем космическом корабле «Стервятник». Пимпл и Анжелика решают совершить неторопливую прогулку на летающей машине Пимпла. Однако Темная Королева устраивает засаду и захватывает их своим кораблём, «Гаргантюа». Пимпл посылает сигнал бедствия на «Стервятник» и предупреждает профессора Т. Бёрда, Рэша и Зитца о том, что он сам и Анжелика схвачены. Узнав о том, что «Гаргантюа» скрывается под поверхностью ближайшей планеты, названной «Мир Рагнарёка», профессор Т. Бёрд отправляет Рэша и Зитца на их спасение.', 'nes', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'Battletoads (nes)\'\">\r\n					<div>\r\n						<img src=\"Images/battletoads.jpg\">\r\n						<p> \r\n							Battletoads\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(3, 'Battle City (nes)', 'roms/nes/Battle City.nes', 'Игрок должен, управляя своим танком, уничтожить все вражеские танки на уровне, которые постепенно появляются вверху игрового поля. Враги пытаются уничтожить штаб игрока (внизу игрового поля в виде орла) и его танк. На каждом уровне нужно уничтожить двадцать единиц бронетехники противника разных видов. Если противник (или игрок) сможет разрушить штаб или лишит игрока всех жизней — игра окончена. ', 'nes', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'Battle City (nes)\'\">\r\n					<div>\r\n						<img src=\"Images/battlecity.jpg\">\r\n						<p> \r\n							Battle City\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(4, 'TMNT - Tournament Fighters (nes)', 'roms/nes/TMNT - Tournament Fighters.nes', 'Черепахи (Леонардо, Донателло, Рафаэль и Микеланджело) были вызваны Шреддером на поединок, но перед боем черепашки решили сразиться между собой, чтобы выяснить, кто из них является сильнейшим. Всего в игре семь персонажей: четыре черепахи, Кейси Джонс, Хотхед (Самурай Дракон в первой линии игрушек, основанный на Воине Драконе — персонаже комиксов Archie) и Шреддер. Сплинтер по сюжету схвачен Шреддером, но присутствует в качестве неигрового персонажа — время от времени подбрасывает на арену так называемые ультраболы (англ. Ultra Balls). Любой из игроков может подобрать такой ультрабол и метнуть в противника. Это единственная игра в серии, где черепахи не используют оружие в бою. ', 'nes', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'TMNT - Tournament Fighters (nes)\'\">\r\n					<div>\r\n						<img src=\"Images/tmnttf.jpg\">\r\n						<p> \r\n							TMNT Tournament Fighters\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(5, 'Super Mario Bros (nes)', 'roms/nes/Super Mario Bros.nes', 'Super mario bros — видеоигра в жанре платформера, разработанная и выпущенная в 1985 году японской компанией Nintendo для платформы Famicom. Занесена в «Книгу рекордов Гиннесса» как самая продаваемая игра в истории. После успеха игры её главный герой, Марио, стал символом компании Nintendo и одним из самых известных игровых персонажей в мире.', 'nes', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'Super Mario Bros (nes)\'\">\r\n					<div>\r\n						<img src=\"Images/supermariobros.jpg\">\r\n						<p> \r\n							Super Mario Bros\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(6, 'Comix Zone (gen)', 'roms/sega/Comix Zone.gen', 'Однажды ночью, когда Скетч спокойно трудился над комиксом, начинается сильная гроза, и одна из молний ударяет в дом Тёрнера, затрагивая и его рабочий стол. В тот же момент главный злодей комикса, Мортус, вырывается в реальный мир и забрасывает в Comix Zone опешившего художника. Поскольку сам Мортус является рисованным персонажем, он не может полностью воплотиться физически в реальном мире, пока автор комикса жив.', 'sega', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'Comix Zone (gen)\'\">\r\n					<div>\r\n						<img src=\"Images/comixzone.jpg\">\r\n						<p> \r\n							Comix Zone\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(7, 'Ultimate Mortal Kombat 3 (gen)', 'roms/sega/Ultimate Mortal Kombat 3.gen', 'Шао Кан, проигравший Лю Кану в битве (события МК2) и уставший от поражений его слуг на турнирах против землян, начинает приводить в действие план, начало которому было положено 10000 лет назад. По его приказу Теневые жрецы, возглавляемые Шан Цзуном должны были оживить бывшую королеву Кана — Синдел, которая умерла почти сразу после захвата Каном Эдении. По замыслу Кана, Синдел должна была воскреснуть не во Внешнем Мире, а на Земле, что дало бы право Кану открыть портал в Земное Царство и захватить планету, обойдя правила Смертельной Битвы.', 'sega', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'Ultimate Mortal Kombat 3 (gen)\'\">\r\n					<div>\r\n						<img src=\"Images/ultimatemortalkombat3.jpg\">\r\n						<p> \r\n							Ultimate Mortal Kombat 3\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(8, 'Battletoads Double Dragon (gen)', 'roms/sega/Battletoads and Double Dragon.gen', 'Темная Королева, поверженная боевыми жабами в первой игре серии, не успокоилась – она страстно жаждет реванша и, для подмоги, пригласила своих помощников: великана Абобо, киборга Робомануса, Биг Блэга и других злобных инопланетян. В этот раз ее цель – Земля, поэтому Раш, Пимпл и Зиц, решили, для решающей схватки, пригласить своих земных друзей, признанных мастеров боевых искусств – братьев Ли.', 'sega', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'TMNT - The Hyperstone Heist (gen)\'\">\r\n					<div>\r\n						<img src=\"Images/battletoadsdoubledragon.jpg\">\r\n						<p> \r\n							Battletoads Double Dragon\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(9, 'TMNT - Hyperstone Heist (gen)', 'roms/sega/TMNT \\- The Hyperstone Heist.gen', 'Эйприл О’Нил ведет репортаж с острова Эллис, как вдруг со вспышкой света ее аудитория вместе с островом Манхэттен многократно уменьшается в размерах. В это время Шреддер вторгается в телевизионную трансляцию и объявляет, что это была лишь демонстрация силы, и скоро он планирует захватить весь мир, используя Hyperstone — сокровище из Измерения Х. У черепашек нет выбора: они должны остановить его.', 'sega', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'TMNT - Hyperstone Heist (gen)\'\">\r\n					<div>\r\n						<img src=\"Images/tmntheist.jpg\">\r\n						<p> \r\n							TMNT - Hyperstone Heist \r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(10, 'Earthworm Jim 2 (gen)', 'roms/sega/Earthworm Jim 2.gen', 'Джим играет на аккордеоне для своей возлюбленной — принцессы Как-её-там-зовут, однако злодей Психоворон отвлекает Джима и похищает принцессу. Главный герой решает победить злодея и спасти принцессу.', 'sega', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'Earthworm Jim 2 (gen)\'\">\r\n					<div>\r\n						<img src=\"Images/earthwormjim2.jpg\">\r\n						<p> \r\n							Earthworm Jim 2\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(11, 'Dune - The Battle for Arrakis (gen)', 'roms/sega/Dune.gen', 'По сюжету игры, император Фредерик IV из дома Коррино отчаянно нуждается в сборе Пряности, чтобы выплатить весь свой долг, возникший в результате междоусобных войн с членами семьи. Задача игрока — стать полноправным хозяином Дюны; для этого нужно завоевать целевую территорию, поделённую на девять секторов.\r\n\r\nВойна начинается, когда на Арракис прибывают корабли с армиями всех трёх Домов. В начальных миссиях цели состоят в том, чтобы отстроить и укрепить базу на незанятой территории Арракиса, собрать Пряность и победить первых неприятелей. Позже, когда нейтральных территорий не остаётся, все три Дома сталкиваются на границах секторов и делят между собой Арракис, игроку предстоит штурмовать и захватывать вражеские территории. Когда игрок захватит Арракис полностью, две другие вражеские фракции объединяются против него. Финальное столкновение — это битва между Домом игрока против трёх вражеских сторон (третьей силой являются войска самого Фредерика, сардаукары, неиграбельные элитные бойцы, чья тяжёлая пехота особенно сильна). Вступительные ролики, брифинг миссий и финальные ролики различны для каждого Дома в соответствии с их весьма разными политическими взглядами. Юниты и военная техника также варьируются от дома к дому.', 'sega', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'Dune - The Battle for Arrakis (gen)\'\">\r\n					<div>\r\n						<img src=\"Images/dunebfa.jpg\">\r\n						<p> \r\n							Dune\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>'),
(12, 'Chip n Dale Rescue Rangers (nes)', 'roms/nes/Chip n Dale Rescue Rangers.nes', 'Чип, Дейл и их друзья снова в деле! Из всех игрушек, созданных компанией Капком по Диснею, эта, пожалуй, ближе всего к первоисточнику-мультсериалу. Тут мы повоюем с робо-псами профессора Нимнула, прогоним мимикрирующих под бурундуков инопланетян, дадим под жабры наглой бойцовой рыбке, побываем на заводе кота Толстопуза - все, как в разных сериях мультика. ', 'nes', '<div class=\"blockGame\">\r\n				<a href=\"game.php?name=\'Chip n Dale Rescue Rangers (nes)\'\">\r\n					<div>\r\n						<img src=\"Images/chipndale.jpg\">\r\n						<p> \r\n							Chip \'n Dale Rescue Rangers\r\n						</p>\r\n					</div>\r\n				</a>\r\n			</div>');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datatime` datetime NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `img`, `datatime`, `content`) VALUES
(1, 'Открытие RetroGames!', 'Добро пожаловать на сайт эмулирования ретро игр! Здесь вы сможете запустить приставки которых не стоит покупать, а требуется только доступ к интернету. Ни скачиваний, ни установки, а садитесь поудобнее и выберите игру которая вас привлекает!', 'Images/logo.png', '2023-04-13 15:44:55', '<div class=\"blockNews\" align=\"center\">\r\n					<p class=\"newsTitle\" align=\"center\">Открытие сайта!</p>\r\n					<img src=\"Images/newsOpenSite.jpg\" class=\"newsImg\" align=\"center\"> 	\r\n					<p align=\"left\" class=\"newsDescription\">Добро пожаловать на сайт эмулирования ретро игр! Здесь вы сможете запустить приставки которых не стоит покупать, а требуется только доступ к интернету. Ни скачиваний, ни установки, садитесь поудобнее и выберите игру которая вас привлекает!</p><p class=\"dataTime\">Опубликовано: 2023-04-13 15:44:55</p> \r\n				</div>'),
(2, 'Обновление', 'Lorem ipsum', '', '2023-04-13 19:35:00', '<div class=\"blockNews\" align=\"center\">\r\n					<p class=\"newsTitle\" align=\"center\">Обновление</p>\r\n					<img src=\"Images/newsDevelop.png\" class=\"newsImg\" align=\"center\"> 	\r\n					<p align=\"left\" class=\"newsDescription\">Lorem ipsum...</p><p class=\"dataTime\">Опубликовано: 2023-04-13 19:35:00</p> \r\n				</div>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(40) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hash` varchar(255) CHARACTER SET utf8 NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `hash`, `admin`) VALUES
(56, 'qqwweerr', '5321aad430cfde564417663f486cb240', 'tsibindanila@gmail.com', '6fbefe4aa96c50c81d49c6e57b6f44d0', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `whats`
--

CREATE TABLE `whats` (
  `questions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `games`
--
ALTER TABLE `games`
  MODIFY `id` mediumint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
