-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 07:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `item_name` varchar(15) NOT NULL,
  `item_desc` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `veg_nonveg` varchar(10) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_id`, `item_name`, `item_desc`, `image`, `price`, `veg_nonveg`, `availability`) VALUES
(1, 1, 'Paneer', 'paneer', 'image', 120, 'VEG', 0),
(2, 7, 'dapibus gravida', 'odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque', 'image', 438, 'VEG ', 0),
(3, 19, 'Cras dolor dolo', 'diam at pretium aliquet, metus urna convallis erat, eget tincidunt', 'image', 537, 'VEG ', 0),
(4, 2, 'non, lobortis q', 'lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus', 'image', 206, ' NONVEG', 0),
(5, 18, 'ornare, elit el', 'nibh enim, gravida sit amet, dapibus id, blandit at, nisi.', 'image', 220, ' NONVEG', 0),
(6, 9, 'arcu. Sed eu', 'Proin sed turpis nec mauris blandit mattis. Cras eget nisi', 'image', 742, 'VEG ', 0),
(7, 18, 'ac mi eleifend', 'Duis sit amet diam eu dolor egestas rhoncus. Proin nisl', 'image', 276, 'VEG ', 0),
(8, 17, 'sit amet ultric', 'dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue,', 'image', 315, ' NONVEG', 0),
(9, 8, 'augue scelerisq', 'auctor odio a purus. Duis elementum, dui quis accumsan convallis,', 'image', 84, ' NONVEG', 0),
(10, 15, 'sem ut cursus', 'non magna. Nam ligula elit, pretium et, rutrum non, hendrerit', 'image', 199, 'VEG ', 0),
(11, 16, 'Maecenas malesu', 'egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem', 'image', 790, 'VEG ', 0),
(12, 20, 'et, lacinia vit', 'Duis elementum, dui quis accumsan convallis, ante lectus convallis est,', 'image', 543, ' NONVEG', 0),
(13, 14, 'rutrum lorem ac', 'aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend', 'image', 665, ' NONVEG', 0),
(14, 7, 'imperdiet non, ', 'Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo.', 'image', 486, 'VEG ', 0),
(15, 11, 'egestas lacinia', 'rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in,', 'image', 749, 'VEG ', 0),
(16, 19, 'sapien imperdie', 'egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta', 'image', 55, ' NONVEG', 0),
(17, 5, 'in, dolor. Fusc', 'in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum', 'image', 498, ' NONVEG', 0),
(18, 9, 'sed orci lobort', 'nec mauris blandit mattis. Cras eget nisi dictum augue malesuada', 'image', 443, 'VEG ', 0),
(19, 16, 'in sodales elit', 'Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus,', 'image', 392, 'VEG ', 0),
(20, 5, 'dui augue eu', 'mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare,', 'image', 306, ' NONVEG', 0),
(21, 17, 'posuere at, vel', 'sodales elit erat vitae risus. Duis a mi fringilla mi', 'image', 59, ' NONVEG', 0),
(22, 17, 'purus, in moles', 'ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris', 'image', 581, 'VEG ', 0),
(23, 9, 'ante, iaculis n', 'magna. Nam ligula elit, pretium et, rutrum non, hendrerit id,', 'image', 404, 'VEG ', 0),
(24, 17, 'lacus. Quisque ', 'Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue', 'image', 788, ' NONVEG', 0),
(25, 17, 'ante blandit vi', 'dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit.', 'image', 235, ' NONVEG', 0),
(26, 5, 'in, dolor. Fusc', 'sem semper erat, in consectetuer ipsum nunc id enim. Curabitur', 'image', 568, 'VEG ', 0),
(27, 16, 'amet diam eu', 'pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac,', 'image', 232, 'VEG ', 0),
(28, 18, 'enim mi tempor', 'auctor non, feugiat nec, diam. Duis mi enim, condimentum eget,', 'image', 737, ' NONVEG', 0),
(29, 15, 'Proin eget odio', 'non nisi. Aenean eget metus. In nec orci. Donec nibh.', 'image', 677, ' NONVEG', 0),
(30, 3, 'Curabitur egest', 'at augue id ante dictum cursus. Nunc mauris elit, dictum', 'image', 319, 'VEG ', 0),
(31, 14, 'eros nec tellus', 'a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam', 'image', 376, 'VEG ', 0),
(32, 14, 'est ac facilisi', 'tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris.', 'image', 679, ' NONVEG', 0),
(33, 10, 'semper rutrum. ', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus', 'image', 239, ' NONVEG', 0),
(34, 7, 'neque pellentes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet,', 'image', 748, 'VEG ', 0),
(35, 20, 'et arcu imperdi', 'Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna.', 'image', 396, 'VEG ', 0),
(36, 4, 'Proin velit. Se', 'odio. Nam interdum enim non nisi. Aenean eget metus. In', 'image', 192, ' NONVEG', 0),
(37, 7, 'lorem, vehicula', 'sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum', 'image', 758, ' NONVEG', 0),
(38, 12, 'faucibus. Morbi', 'quam. Pellentesque habitant morbi tristique senectus et netus et malesuada', 'image', 99, 'VEG ', 0),
(39, 16, 'at pretium aliq', 'enim, gravida sit amet, dapibus id, blandit at, nisi. Cum', 'image', 383, 'VEG ', 0),
(40, 19, 'pharetra, felis', 'a feugiat tellus lorem eu metus. In lorem. Donec elementum,', 'image', 209, ' NONVEG', 0),
(41, 8, 'Sed et libero.', 'et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus', 'image', 464, ' NONVEG', 0),
(42, 9, 'Nunc commodo au', 'eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in', 'image', 423, 'VEG ', 0),
(43, 14, 'eu nibh vulputa', 'mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed', 'image', 427, 'VEG ', 0),
(44, 6, 'Donec sollicitu', 'nisi nibh lacinia orci, consectetuer euismod est arcu ac orci.', 'image', 302, ' NONVEG', 0),
(45, 4, 'Nulla aliquet. ', 'tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec,', 'image', 238, ' NONVEG', 0),
(46, 20, 'tincidunt aliqu', 'ipsum leo elementum sem, vitae aliquam eros turpis non enim.', 'image', 286, 'VEG ', 0),
(47, 13, 'nunc, ullamcorp', 'pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero', 'image', 476, 'VEG ', 0),
(48, 3, 'rutrum urna, ne', 'interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt', 'image', 230, ' NONVEG', 0),
(49, 18, 'molestie pharet', 'consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate', 'image', 187, ' NONVEG', 0),
(50, 19, 'eleifend egesta', 'elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et', 'image', 54, 'VEG ', 0),
(51, 4, 'dolor. Quisque ', 'turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus.', 'image', 254, 'VEG ', 0),
(52, 3, 'fermentum risus', 'Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat', 'image', 663, ' NONVEG', 0),
(53, 13, 'dolor quam, ele', 'venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec', 'image', 625, ' NONVEG', 0),
(54, 8, 'nibh. Donec est', 'Nam ligula elit, pretium et, rutrum non, hendrerit id, ante.', 'image', 536, 'VEG ', 0),
(55, 7, 'imperdiet non, ', 'eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus', 'image', 678, 'VEG ', 0),
(56, 9, 'ligula. Aenean ', 'commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa', 'image', 406, ' NONVEG', 0),
(57, 19, 'fringilla purus', 'tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem', 'image', 74, ' NONVEG', 0),
(58, 11, 'Quisque varius.', 'facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa.', 'image', 606, 'VEG ', 0),
(59, 13, 'cursus non, ege', 'et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim', 'image', 256, 'VEG ', 0),
(60, 5, 'dapibus rutrum,', 'leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis,', 'image', 690, ' NONVEG', 0),
(61, 12, 'libero. Morbi a', 'urna, nec luctus felis purus ac tellus. Suspendisse sed dolor.', 'image', 537, ' NONVEG', 0),
(62, 15, 'a felis ullamco', 'odio. Phasellus at augue id ante dictum cursus. Nunc mauris', 'image', 429, 'VEG ', 0),
(63, 3, 'Cras vehicula a', 'arcu. Vestibulum ante ipsum primis in faucibus orci luctus et', 'image', 491, 'VEG ', 0),
(64, 16, 'massa lobortis ', 'auctor odio a purus. Duis elementum, dui quis accumsan convallis,', 'image', 230, ' NONVEG', 0),
(65, 8, 'sagittis augue,', 'lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse', 'image', 277, ' NONVEG', 0),
(66, 9, 'dolor sit amet,', 'convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt', 'image', 240, 'VEG ', 0),
(67, 2, 'urna. Nunc quis', 'mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean', 'image', 513, 'VEG ', 0),
(68, 11, 'lorem fringilla', 'ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat', 'image', 327, ' NONVEG', 0),
(69, 5, 'dui, in sodales', 'Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat', 'image', 414, ' NONVEG', 0),
(70, 5, 'elit, pellentes', 'vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit', 'image', 80, 'VEG ', 0),
(71, 12, 'quam dignissim ', 'dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 'image', 784, 'VEG ', 0),
(72, 16, 'arcu ac orci.', 'non nisi. Aenean eget metus. In nec orci. Donec nibh.', 'image', 71, ' NONVEG', 0),
(73, 10, 'quam. Pellentes', 'Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui', 'image', 417, ' NONVEG', 0),
(74, 17, 'quam a felis', 'faucibus leo, in lobortis tellus justo sit amet nulla. Donec', 'image', 605, 'VEG ', 0),
(75, 8, 'metus. Aenean s', 'semper egestas, urna justo faucibus lectus, a sollicitudin orci sem', 'image', 165, 'VEG ', 0),
(76, 3, 'Fusce diam nunc', 'diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec,', 'image', 696, ' NONVEG', 0),
(77, 10, 'ut, sem. Nulla', 'fermentum metus. Aenean sed pede nec ante blandit viverra. Donec', 'image', 437, ' NONVEG', 0),
(78, 3, 'fermentum vel, ', 'Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque', 'image', 188, 'VEG ', 0),
(79, 6, 'montes, nascetu', 'vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue', 'image', 356, 'VEG ', 0),
(80, 9, 'Cras convallis ', 'purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis', 'image', 681, ' NONVEG', 0),
(81, 4, 'Donec egestas. ', 'et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus', 'image', 237, ' NONVEG', 0),
(82, 11, 'Quisque tincidu', 'enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus.', 'image', 651, 'VEG ', 0),
(83, 3, 'Ut semper preti', 'rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet, sem', 'image', 665, 'VEG ', 0),
(84, 19, 'dictum sapien. ', 'ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius', 'image', 254, ' NONVEG', 0),
(85, 10, 'nec metus facil', 'accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis diam.', 'image', 502, ' NONVEG', 0),
(86, 9, 'magna, malesuad', 'mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae,', 'image', 658, 'VEG ', 0),
(87, 13, 'Sed et libero.', 'in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum', 'image', 428, 'VEG ', 0),
(88, 12, 'augue scelerisq', 'at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et', 'image', 397, ' NONVEG', 0),
(89, 16, 'viverra. Maecen', 'In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede', 'image', 449, ' NONVEG', 0),
(90, 20, 'bibendum fermen', 'Cras eget nisi dictum augue malesuada malesuada. Integer id magna', 'image', 605, 'VEG ', 0),
(91, 20, 'scelerisque dui', 'dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum', 'image', 704, 'VEG ', 0),
(92, 14, 'et, euismod et,', 'senectus et netus et malesuada fames ac turpis egestas. Fusce', 'image', 785, ' NONVEG', 0),
(93, 9, 'Proin eget odio', 'tristique senectus et netus et malesuada fames ac turpis egestas.', 'image', 411, ' NONVEG', 0),
(94, 8, 'ridiculus mus. ', 'Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie', 'image', 664, 'VEG ', 0),
(95, 10, 'Nulla tincidunt', 'ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque', 'image', 562, 'VEG ', 0),
(96, 11, 'ut aliquam iacu', 'nisi nibh lacinia orci, consectetuer euismod est arcu ac orci.', 'image', 535, ' NONVEG', 0),
(97, 2, 'lacus. Cras int', 'non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum.', 'image', 137, ' NONVEG', 0),
(98, 11, 'Fusce dolor qua', 'justo. Proin non massa non ante bibendum ullamcorper. Duis cursus,', 'image', 777, 'VEG ', 0),
(99, 10, 'tempor diam dic', 'tellus faucibus leo, in lobortis tellus justo sit amet nulla.', 'image', 184, 'VEG ', 0),
(100, 19, 'enim diam vel', 'odio. Phasellus at augue id ante dictum cursus. Nunc mauris', 'image', 271, ' NONVEG', 0),
(101, 6, 'Vivamus molesti', 'purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula', 'image', 469, ' NONVEG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(30) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `units` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL DEFAULT 'PLACED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `item_id`, `item_name`, `user_id`, `restaurant_id`, `address`, `total_amount`, `units`, `timestamp`, `status`) VALUES
(37, '20200125162622000000', 2, 'dapibus gravida', '3', 7, 'AB Road Crossing', 438, 1, '2020-01-25 16:26:22', 'PLACED'),
(38, '20200125170538000000', 1, 'Paneer', '3', 1, 'AB Road Crossing', 240, 2, '2020-01-25 17:05:38', 'PLACED'),
(39, '20200125185921000000', 3, 'Cras dolor dolo', '3', 19, 'AB Road Crossing', 537, 1, '2020-01-25 18:59:21', 'PLACED'),
(40, '20200125185947000000', 1, 'Paneer', '18', 1, 'Gwalior', 600, 5, '2020-01-25 18:59:47', 'PLACED'),
(41, '20200125192127000000', 1, 'Paneer', '3', 1, 'AB Road Crossing', 120, 1, '2020-01-25 19:21:27', 'PLACED'),
(42, '20200125192201000000', 1, 'Paneer', '3', 1, 'Gwalior', 120, 1, '2020-01-25 19:22:01', 'PLACED');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `contact` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `veg_nonveg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `email`, `password`, `contact`, `address`, `veg_nonveg`) VALUES
(1, 'Ramendra Namdev', 'ramendranamdev@gmail.com', 'password', 898218549, 'AB ROAD CROSSING', 'VEG '),
(2, 'Nalina', 'consectetuer.mauris@Aenean.ca', 'password', 732, 'P.O. Box 410, 5406 Nunc Rd.', 'VEG '),
(3, 'Suryabhan', 'vitae.mauris.sit@variuseteuismod.ca', 'password', 758, 'Ap #733-9301 Odio. Rd.', 'VEG '),
(4, 'Ekisha', 'eget.dictum@bibendumullamcorper.edu', 'password', 582, '6614 Et Ave', ' NONVEG'),
(5, 'Gangesh', 'habitant.morbi.tristique@amet.com', 'password', 386, '921-2864 Turpis. St.', ' NONVEG'),
(6, 'Matangi', 'purus.sapien.gravida@Craspellentesque.edu', 'password', 206, 'Ap #615-320 Elementum Avenue', ' NONVEG'),
(7, 'Selvan', 'mauris.blandit.mattis@ipsumleoelementum.com', 'password', 8, 'Ap #141-5280 Interdum. Street', 'VEG '),
(8, 'Kausar', 'consequat.enim.diam@orci.co.uk', 'password', 465, 'Ap #354-5959 Nibh. Ave', 'VEG '),
(9, 'Pushpak', 'faucibus.orci@Donec.com', 'password', 374, '601 Orci St.', 'VEG '),
(10, 'Anya', 'erat@Mauris.org', 'password', 687, 'Ap #919-8605 Ultricies St.', ' NONVEG'),
(11, 'Arnesh', 'vulputate.eu@semper.com', 'password', 239, '807-1288 Nec Av.', ' NONVEG'),
(12, 'Dhwani', 'eu@Aliquam.ca', 'password', 519, 'Ap #335-3918 Duis Ave', ' NONVEG'),
(13, 'Indubhushan', 'et.commodo@cursusaenim.edu', 'password', 557, 'P.O. Box 620, 7190 Semper Road', 'VEG '),
(14, 'Swetaketu', 'In@volutpatornare.net', 'password', 496, '5427 Dis Av.', 'VEG '),
(15, 'Prakash', 'venenatis.lacus.Etiam@nonarcuVivamus.org', 'password', 485, '962-6955 Non Avenue', 'VEG '),
(16, 'Shameek', 'augue.eu@Uttincidunt.com', 'password', 810, '556-4162 Lorem. Av.', ' NONVEG'),
(17, 'Lokesh', 'imperdiet.erat@tinciduntDonecvitae.net', 'password', 714, 'P.O. Box 895, 1285 Ante Street', ' NONVEG'),
(18, 'Sikta', 'accumsan.neque@Pellentesquehabitantmorbi.edu', 'password', 559, 'P.O. Box 547, 1112 Cras Road', ' NONVEG'),
(19, 'Vanshika', 'enim.nec.tempus@hendrerit.net', 'password', 710, 'P.O. Box 350, 6580 Tortor, Rd.', 'VEG '),
(20, 'Brinda', 'fringilla@interdumSed.ca', 'password', 481, '379-4938 Nam Avenue', 'VEG ');

--
-- Triggers `restaurant`
--
DELIMITER $$
CREATE TRIGGER `add_menu_id` AFTER DELETE ON `restaurant` FOR EACH ROW DELETE FROM restaurantmenu WHERE restaurantmenu.restaurant_id = OLD.id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `generate_menu_id` AFTER INSERT ON `restaurant` FOR EACH ROW INSERT INTO restaurantmenu VALUES (NEw.id , '')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `restaurantmenu`
--

CREATE TABLE `restaurantmenu` (
  `restaurant_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurantmenu`
--

INSERT INTO `restaurantmenu` (`restaurant_id`, `menu_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `phone`, `email`, `address`) VALUES
(3, 'Ramendra Namdev', 'jkl;', 2147483647, 'ramendranamdev@gmail.com', 'AB Road Crossing , Shivpuri , MP'),
(18, 'Nikhil', 'jkl;', 123456, 'nikhil@gmail.com', 'Gwalior');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `restaurantmenu`
--
ALTER TABLE `restaurantmenu`
  ADD PRIMARY KEY (`restaurant_id`),
  ADD UNIQUE KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `restaurantmenu`
--
ALTER TABLE `restaurantmenu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
