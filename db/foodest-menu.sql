CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `ingredients` varchar(255) NOT NULL
);

INSERT INTO `menu_items` (`id`, `name`, `category`, `price`, `ingredients`) VALUES
-- BURGER
(1, 'Hamburger', 'burger', 10, 'Black Angus Irlanda, pomodoro verde, lattuga, ketchup, mayonese'),
(2, 'Cheeseburger', 'burger', 10, 'Black Angus Stati Uniti, cheddar, bacon croccante, lattuga, pomodoro verde, salsa americana'),
(3, 'Pita', 'burger', 12, 'Pollo, pomodoro verde, ketchup, lattuga'),
(4, 'Fish Burger', 'burger', 12, 'Salmone norvegese, fiordilatte, pomodoro, basilico, mandorle e frutti rossi'),
(5, 'Premium Burger', 'burger', 15, 'Black Angus Scozia, mozzarella di bufala campana, melanzana teriaky, capocollo croccante, basilico'),
-- FRITTURE
(6, 'Chips', 'fritture', 3, 'Chips con buccia'),
(7, 'Straccetti', 'fritture', 8, 'Straccetti di pollo in crosta di tarallo con salsa alla paprika ed erba cipollina'),
(8, 'Gamberi', 'fritture', 9, 'Gamberi su nuvole di kataifi con mayo agli agrumi e salsa teriaky'),
(9, 'Bocconcini', 'fritture', 10, 'Bocconcini di patate e baccalà con mayo al peperone crusco'),
-- TOAST
(10, 'Toast Classico', 'toast', 3, 'Prosciutto cotto, philadelphia, sottiletta, insalata'),
(11, 'Big Toast', 'toast', 4, 'Prosciutto cotto, philadelphia, sottiletta, insalata, pomodoro verde'),
(12, 'Big Toast al crudo', 'toast', 5, 'Prosciutto crudo di Parma, fiordilatte, lattuga, burro al tartufo'),
(13, 'Cotoletta Toast', 'toast', 5, 'Cotoletta di pollo, cavolo alla menta, mayo alla senape, ketchup'),
-- BEER & WINE
(14, 'Alta Falanghina I.G.T', 'beer&wine', 16, '1 l'),
(15, 'Adelphòs I.G.P Vivo', 'beer&wine', 15, '1 l'),
(16, 'Candòra I.G.T', 'beer&wine', 16, '1 l'),
(17, 'Pilsner Urquell', 'beer&wine', 3, '33 cl'),
(18, 'Landbier Original', 'beer&wine', 3, '35 cl'),
(19, 'Charles Quint Rouge', 'beer&wine', 5, '33 cl'),
-- DRINK
(20, 'Acqua', 'drink', 1, '50 cl'),
(21 , 'Coca Cola', 'drink', 2, '33 cl'),
(22 , 'Fanta', 'drink', 2, '33 cl');

ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);
