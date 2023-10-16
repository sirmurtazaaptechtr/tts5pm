-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 03:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test16oct2023_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `lat`, `lng`) VALUES
(1, 'Abbottabad', 34.1463, 73.21168),
(2, 'Adilpur', 27.93677, 69.31941),
(3, 'Ahmadpur East', 29.14269, 71.25771),
(4, 'Ahmadpur Sial', 30.67791, 71.74344),
(5, 'Akora', 34.00337, 72.12561),
(6, 'Aliabad', 36.30703, 74.61545),
(7, 'Alik Ghund', 30.48976, 67.52177),
(8, 'Alipur', 29.38242, 70.91106),
(9, 'Alizai', 33.53613, 70.34607),
(10, 'Alpurai', 34.92039, 72.63265),
(11, 'Aman Garh', 34.00584, 71.92971),
(12, 'Amirabad', 34.18729, 73.09078),
(13, 'Arifwala', 30.29058, 73.06574),
(14, 'Ashanagro Koto', 34.10773, 72.24517),
(15, 'Athmuqam', 34.57173, 73.89724),
(16, 'Attock City', 33.76671, 72.35977),
(17, 'Awaran', 26.45677, 65.23144),
(18, 'Baddomalhi', 31.99042, 74.6641),
(19, 'Badin', 24.656, 68.837),
(20, 'Baffa', 34.4377, 73.22368),
(21, 'Bagarji', 27.75431, 68.75866),
(22, 'Bagh', 33.98111, 73.77608),
(23, 'Bahawalnagar', 29.99835, 73.25272),
(24, 'Bahawalnagar', 30.55083, 73.39083),
(25, 'Bahawalpur', 29.39779, 71.6752),
(26, 'Bakhri Ahmad Khan', 30.73586, 70.83796),
(27, 'Bandhi', 26.58761, 68.30215),
(28, 'Bannu', 32.98527, 70.60403),
(29, 'Barishal', 36.32162, 74.69502),
(30, 'Barkhan', 29.89773, 69.52558),
(31, 'Basirpur', 30.57759, 73.83912),
(32, 'Basti Dosa', 30.78769, 70.86853),
(33, 'Bat Khela', 34.6178, 71.97247),
(34, 'Battagram', 34.67719, 73.02329),
(35, 'Begowala', 32.43816, 74.26794),
(36, 'Bela', 26.22718, 66.31178),
(37, 'Berani', 25.78497, 68.80754),
(38, 'Bhag', 29.04174, 67.82394),
(39, 'Bhakkar', 31.62685, 71.06471),
(40, 'Bhalwal', 32.26576, 72.89809),
(41, 'Bhan', 26.55831, 67.72139),
(42, 'Bhawana', 31.56884, 72.64917),
(43, 'Bhera', 32.48206, 72.90865),
(44, 'Bhimbar', 32.97465, 74.07846),
(45, 'Bhiria', 26.91041, 68.19466),
(46, 'Bhit Shah', 25.80565, 68.49143),
(47, 'Bhopalwala', 32.42968, 74.3635),
(48, 'Bozdar Wada', 27.183, 68.6358),
(49, 'Bulri', 24.86667, 68.33333),
(50, 'Būrewāla', 30.16667, 72.65),
(51, 'Chak', 27.85838, 68.83378),
(52, 'Chak Azam Sahu', 30.75202, 73.02834),
(53, 'Chak Five Hundred Seventy-five', 31.54514, 73.82891),
(54, 'Chak Jhumra', 31.56808, 73.18317),
(55, 'Chak One Hundred Twenty Nine Left', 30.42919, 73.04522),
(56, 'Chak Thirty-one -Eleven Left', 30.42388, 72.69737),
(57, 'Chak Two Hundred Forty-nine Thal Development Authority', 31.17772, 71.2048),
(58, 'Chakwal', 32.93286, 72.85394),
(59, 'Chaman', 30.91769, 66.45259),
(60, 'Chamber', 25.29362, 68.81176),
(61, 'Charsadda', 34.14822, 71.7406),
(62, 'Chawinda', 32.34434, 74.70507),
(63, 'Chenab Nagar', 31.75511, 72.91403),
(64, 'Cherat Cantonement', 33.82342, 71.89292),
(65, 'Chhor', 25.5126, 69.78437),
(66, 'Chichawatni', 30.5301, 72.69155),
(67, 'Chilas', 35.41287, 74.10407),
(68, 'Chiniot', 31.72091, 72.97836),
(69, 'Chishtian', 29.79713, 72.85772),
(70, 'Chitral', 35.8518, 71.78636),
(71, 'Choa Saidan Shah', 32.71962, 72.98625),
(72, 'Chowki Jamali', 28.01944, 67.92083),
(73, 'Chuchar-kana Mandi', 31.75, 73.8),
(74, 'Chuhar Jamali', 24.3944, 67.99298),
(75, 'Chunian', 30.96621, 73.97908),
(76, 'Dadhar', 29.47489, 67.65167),
(77, 'Dadu', 26.73033, 67.7769),
(78, 'Daggar', 34.51106, 72.48438),
(79, 'Daira Din Panah', 30.57053, 70.93722),
(80, 'Dajal', 29.55769, 70.37614),
(81, 'Dalbandin', 28.88846, 64.40616),
(82, 'Dandot RS', 32.64167, 72.975),
(83, 'Daromehar', 24.79382, 68.17978),
(84, 'Darya Khan', 31.78447, 71.10197),
(85, 'Darya Khan Marri', 26.67765, 68.28666),
(86, 'Daska Kalan', 32.32422, 74.35039),
(87, 'Dasu', 35.29169, 73.2906),
(88, 'Daud Khel', 32.87533, 71.57118),
(89, 'Daulatpur', 26.50158, 67.97079),
(90, 'Daultala', 33.19282, 73.14099),
(91, 'Daur', 26.45528, 68.31835),
(92, 'Dera Allahyar', 28.37353, 68.35078),
(93, 'Dera Bugti', 29.03619, 69.15849),
(94, 'Dera Ghazi Khan', 30.04587, 70.64029),
(95, 'Dera Ismail Khan', 31.83129, 70.9017),
(96, 'Dera Murad Jamali', 28.54657, 68.22308),
(97, 'Dhanot', 29.57991, 71.75213),
(98, 'Dhaunkal', 32.40613, 74.13706),
(99, 'Dhoro Naro', 25.50484, 69.5709),
(100, 'Digri', 25.15657, 69.11098),
(101, 'Dijkot', 31.21735, 72.99621),
(102, 'Dinan Bashnoian Wala', 29.76584, 73.26557),
(103, 'Dinga', 32.64101, 73.72039),
(104, 'Dipalpur', 30.66984, 73.65306),
(105, 'Diplo', 24.46688, 69.58114),
(106, 'Doaba', 33.4245, 70.73676),
(107, 'Dokri', 27.37421, 68.09715),
(108, 'Duki', 30.15307, 68.57323),
(109, 'Dullewala', 31.83439, 71.43639),
(110, 'Dunga Bunga', 29.74975, 73.24294),
(111, 'Dunyapur', 29.80275, 71.74344),
(112, 'Eidgah', 35.34712, 74.85632),
(113, 'Eminabad', 32.04237, 74.25996),
(114, 'Faisalabad', 31.41554, 73.08969),
(115, 'Faqirwali', 29.46799, 73.03489),
(116, 'Faruka', 31.88642, 72.41362),
(117, 'Fazilpur', 32.17629, 75.06583),
(118, 'Fort Abbas', 29.19344, 72.85525),
(119, 'Gadani', 25.11853, 66.72985),
(120, 'Gakuch', 36.17683, 73.76383),
(121, 'Gambat', 27.3517, 68.5215),
(122, 'Gandava', 28.61321, 67.48564),
(123, 'Garh Maharaja', 30.83383, 71.90491),
(124, 'Garhi Khairo', 28.06029, 67.98033),
(125, 'Garhiyasin', 27.90631, 68.5121),
(126, 'Gharo', 24.74182, 67.58534),
(127, 'Ghauspur', 28.13882, 69.08245),
(128, 'Ghotki', 28.00437, 69.31569),
(129, 'Gilgit', 35.91869, 74.31245),
(130, 'Gojra', 31.14926, 72.68323),
(131, 'Goth Garelo', 27.43521, 68.07572),
(132, 'Goth Phulji', 26.88099, 67.68239),
(133, 'Goth Radhan', 27.19846, 67.95348),
(134, 'Gujar Khan', 33.25411, 73.30433),
(135, 'Gujranwala', 32.15567, 74.18705),
(136, 'Gujrat', 32.5742, 74.07542),
(137, 'Gulishah Kach', 32.67087, 70.33917),
(138, 'Gwadar', 25.12163, 62.32541),
(139, 'Hadali', 32.64043, 74.56898),
(140, 'Hafizabad', 32.07095, 73.68802),
(141, 'Hala', 25.81459, 68.42198),
(142, 'Hangu', 33.53198, 71.0595),
(143, 'Haripur', 33.99783, 72.93493),
(144, 'Harnai', 30.10077, 67.93824),
(145, 'Harnoli', 32.27871, 71.55429),
(146, 'Harunabad', 29.61206, 73.13802),
(147, 'Hasilpur', 29.69221, 72.54566),
(148, 'Hattian Bala', 34.1691, 73.7432),
(149, 'Haveli Lakha', 30.45097, 73.69371),
(150, 'Havelian', 34.05348, 73.15993),
(151, 'Hazro City', 33.9099, 72.49179),
(152, 'Hingorja', 27.21088, 68.41598),
(153, 'Hujra Shah Muqim', 30.74168, 73.82327),
(154, 'Hyderabad', 25.39242, 68.37366),
(155, 'Islamabad', 33.72148, 73.04329),
(156, 'Islamkot', 24.69904, 70.17982),
(157, 'Jacobabad', 28.28187, 68.43761),
(158, 'Jahanian Shah', 31.80541, 72.2774),
(159, 'Jalalpur Jattan', 32.64118, 74.20561),
(160, 'Jalalpur Pirwala', 29.5051, 71.22202),
(161, 'Jampur', 29.64235, 70.59518),
(162, 'Jamshoro', 25.43608, 68.28017),
(163, 'Jand', 33.43304, 72.01877),
(164, 'Jandiala Sher Khan', 31.82098, 73.91815),
(165, 'Jaranwala', 31.3332, 73.41868),
(166, 'Jati', 24.35492, 68.26732),
(167, 'Jatoi Shimali', 29.51827, 70.84474),
(168, 'Jauharabad', 32.29016, 72.28182),
(169, 'Jhang City', 31.30568, 72.32594),
(170, 'Jhang Sadr', 31.26981, 72.31687),
(171, 'Jhawarian', 32.36192, 72.62275),
(172, 'Jhelum', 32.93448, 73.73102),
(173, 'Jhol', 25.95533, 68.88871),
(174, 'Jiwani', 25.04852, 61.74573),
(175, 'Johi', 26.69225, 67.61431),
(176, 'Jām Sāhib', 26.29583, 68.62917),
(177, 'Kabirwala', 30.40472, 71.86269),
(178, 'Kadhan', 24.48041, 68.98551),
(179, 'Kahna Nau', 31.36709, 74.36899),
(180, 'Kahror Pakka', 29.6243, 71.91437),
(181, 'Kahuta', 33.59183, 73.38736),
(182, 'Kakad Wari Dir Upper', 34.99798, 72.07295),
(183, 'Kalabagh', 32.96164, 71.54638),
(184, 'Kalaswala', 32.20081, 74.64858),
(185, 'Kalat', 29.02663, 66.59361),
(186, 'Kaleke Mandi', 31.97597, 73.59999),
(187, 'Kallar Kahar', 32.77998, 72.69793),
(188, 'Kalur Kot', 32.15512, 71.26631),
(189, 'Kamalia', 30.72708, 72.64607),
(190, 'Kamar Mushani', 32.84318, 71.36192),
(191, 'Kambar', 27.58753, 68.00066),
(192, 'Kamoke', 31.97526, 74.22304),
(193, 'Kamra', 33.74698, 73.51229),
(194, 'Kandhkot', 28.24574, 69.17974),
(195, 'Kandiari', 26.9155, 68.52193),
(196, 'Kandiaro', 27.05918, 68.21022),
(197, 'Kanganpur', 30.76468, 74.12286),
(198, 'Karachi', 24.8608, 67.0104),
(199, 'Karak', 33.11633, 71.09354),
(200, 'Karaundi', 26.89709, 68.40643),
(201, 'Kario Ghanwar', 24.80817, 68.60483),
(202, 'Karor', 31.2246, 70.95153),
(203, 'Kashmor', 28.4326, 69.58364),
(204, 'Kasur', 31.11866, 74.45025),
(205, 'Keshupur', 32.26, 72.5),
(206, 'Keti Bandar', 24.14422, 67.45094),
(207, 'Khadan Khak', 30.75236, 67.71133),
(208, 'Khadro', 26.14713, 68.71777),
(209, 'Khairpur', 28.06437, 69.70363),
(210, 'Khairpur Mir’s', 27.52948, 68.75915),
(211, 'Khairpur Nathan Shah', 27.09064, 67.73489),
(212, 'Khairpur Tamewah', 29.58139, 72.23804),
(213, 'Khalabat', 34.05997, 72.88963),
(214, 'Khandowa', 32.74255, 72.73478),
(215, 'Khanewal', 30.30173, 71.93212),
(216, 'Khangah Dogran', 31.83294, 73.62213),
(217, 'Khangarh', 29.91446, 71.16067),
(218, 'Khanpur', 28.64739, 70.65694),
(219, 'Khanpur Mahar', 27.84088, 69.41302),
(220, 'Kharan', 28.58459, 65.41501),
(221, 'Kharian', 32.81612, 73.88697),
(222, 'Khewra', 32.6491, 73.01059),
(223, 'Khurrianwala', 31.49936, 73.26763),
(224, 'Khushāb', 32.29667, 72.3525),
(225, 'Khuzdar', 27.81193, 66.61096),
(226, 'Kohat', 33.58196, 71.44929),
(227, 'Kohlu', 29.89651, 69.25324),
(228, 'Kot Addu', 30.46907, 70.96699),
(229, 'Kot Diji', 27.34156, 68.70821),
(230, 'Kot Ghulam Muhammad', 32.33311, 74.54694),
(231, 'Kot Malik Barkhurdar', 30.20379, 66.98723),
(232, 'Kot Mumin', 32.18843, 73.02987),
(233, 'Kot Radha Kishan', 31.17068, 74.10126),
(234, 'Kot Rajkour', 32.41208, 74.62855),
(235, 'Kot Samaba', 28.55207, 70.46837),
(236, 'Kot Sultan', 30.7737, 70.93125),
(237, 'Kotli', 33.51836, 73.9022),
(238, 'Kotli Loharan', 32.58893, 74.49466),
(239, 'Kotri', 25.36566, 68.30831),
(240, 'Kulachi', 31.93058, 70.45959),
(241, 'Kundian', 32.45775, 71.47892),
(242, 'Kunjah', 32.52982, 73.97486),
(243, 'Kunri', 25.17874, 69.56572),
(244, 'Lachi', 33.38291, 71.33733),
(245, 'Ladhewala Waraich', 32.15692, 74.11564),
(246, 'Lahore', 31.558, 74.35071),
(247, 'Lakhi', 27.84884, 68.69972),
(248, 'Lakki', 32.60724, 70.91234),
(249, 'Lala Musa', 32.70138, 73.95746),
(250, 'Lalian', 31.82462, 72.80116),
(251, 'Landi Kotal', 34.0988, 71.14108),
(252, 'Larkana', 27.55898, 68.21204),
(253, 'Layyah', 30.96128, 70.93904),
(254, 'Liliani', 32.20393, 72.9512),
(255, 'Lodhran', 29.5339, 71.63244),
(256, 'Loralai', 30.37051, 68.59795),
(257, 'Mach', 29.86371, 67.33018),
(258, 'Madeji', 27.75314, 68.45166),
(259, 'Mailsi', 29.80123, 72.17398),
(260, 'Malakand', 34.56561, 71.93043),
(261, 'Malakwal', 32.55449, 73.21274),
(262, 'Malakwal City', 32.55492, 73.2122),
(263, 'Malir Cantonment', 24.94343, 67.20591),
(264, 'Mamu Kanjan', 30.83044, 72.79943),
(265, 'Mananwala', 31.58803, 73.68927),
(266, 'Mandi Bahauddin', 32.58704, 73.49123),
(267, 'Mangla', 31.89306, 72.38167),
(268, 'Mankera', 31.38771, 71.44047),
(269, 'Mansehra', 34.33023, 73.19679),
(270, 'Mardan', 34.19794, 72.04965),
(271, 'Mastung', 29.79966, 66.84553),
(272, 'Matiari', 25.59709, 68.4467),
(273, 'Matli', 25.0429, 68.65591),
(274, 'Mehar', 27.18027, 67.82051),
(275, 'Mehmand Chak', 32.78518, 73.82306),
(276, 'Mehrabpur', 28.10773, 68.02554),
(277, 'Mian Channun', 30.44067, 72.35679),
(278, 'Mianke Mor', 31.2024, 73.94857),
(279, 'Mianwali', 32.57756, 71.52847),
(280, 'Minchianabad', 30.16356, 73.56858),
(281, 'Mingora', 34.7795, 72.36265),
(282, 'Miran Shah', 33.00059, 70.07117),
(283, 'Miro Khan', 27.75985, 68.09195),
(284, 'Mirpur Bhtoro', 24.72852, 68.2601),
(285, 'Mirpur Khas', 25.5276, 69.01255),
(286, 'Mirpur Mathelo', 28.02136, 69.54914),
(287, 'Mirpur Sakro', 24.54692, 67.62797),
(288, 'Mirwah Gorchani', 25.30981, 69.05019),
(289, 'Mitha Tiwana', 32.2454, 72.10615),
(290, 'Mithi', 24.73701, 69.79707),
(291, 'Moro', 26.66317, 68.00016),
(292, 'Moza Shahwala', 30.80563, 70.84911),
(293, 'Multan', 30.19679, 71.47824),
(294, 'Muridke', 31.80258, 74.25772),
(295, 'Murree', 33.90836, 73.3903),
(296, 'Musa Khel Bazar', 30.85944, 69.82208),
(297, 'Mustafābād', 30.89222, 73.49889),
(298, 'Muzaffargarh', 30.07258, 71.19379),
(299, 'Muzaffarābād', 34.37002, 73.47082),
(300, 'Nabisar', 25.06717, 69.6434),
(301, 'Nankana Sahib', 31.4501, 73.70653),
(302, 'Narang Mandi', 31.90376, 74.51587),
(303, 'Narowal', 32.10197, 74.87303),
(304, 'Nasirabad', 27.38137, 67.91644),
(305, 'Naudero', 27.66684, 68.3609),
(306, 'Naukot', 24.85822, 69.40153),
(307, 'Naushahra Virkan', 31.96258, 73.97117),
(308, 'Naushahro Firoz', 26.8401, 68.12265),
(309, 'Nawabshah', 26.23939, 68.40369),
(310, 'Nazir Town', 33.30614, 73.4833),
(311, 'New Bādāh', 27.34167, 68.03194),
(312, 'New Mirpur', 33.14782, 73.75187),
(313, 'Noorabad', 34.25195, 71.96656),
(314, 'Nowshera', 34.01583, 71.98123),
(315, 'Nowshera Cantonment', 33.99829, 71.99834),
(316, 'Nushki', 29.55218, 66.02288),
(317, 'Okara', 30.81029, 73.45155),
(318, 'Ormara', 25.2088, 64.6357),
(319, 'Pabbi', 34.00968, 71.79445),
(320, 'Pad Idan', 26.77455, 68.30094),
(321, 'Paharpur', 32.10502, 70.97055),
(322, 'Pakpattan', 30.34314, 73.38944),
(323, 'Panjgur', 26.97186, 64.09459),
(324, 'Pano Aqil', 27.85619, 69.11111),
(325, 'Parachinar', 33.89968, 70.10012),
(326, 'Pasni', 25.26302, 63.46921),
(327, 'Pasrur', 32.26286, 74.66327),
(328, 'Pattoki', 31.02021, 73.85333),
(329, 'Peshawar', 34.008, 71.57849),
(330, 'Phalia', 32.43104, 73.579),
(331, 'Pind Dadan Khan', 32.58662, 73.04456),
(332, 'Pindi Bhattian', 31.89844, 73.27339),
(333, 'Pindi Gheb', 33.24095, 72.2648),
(334, 'Pir Jo Goth', 27.59178, 68.61848),
(335, 'Pir Mahal', 30.76663, 72.43455),
(336, 'Pishin', 30.58176, 66.99406),
(337, 'Pithoro', 25.51122, 69.37803),
(338, 'Qadirpur Ran', 30.29184, 71.67164),
(339, 'Qila Abdullah', 30.72803, 66.66117),
(340, 'Qila Saifullah', 30.70077, 68.35984),
(341, 'Quetta', 30.18414, 67.00141),
(342, 'Rahim Yar Khan', 28.41987, 70.30345),
(343, 'Raiwind', 31.24895, 74.21534),
(344, 'Raja Jang', 31.22078, 74.25483),
(345, 'Rajanpur', 29.10408, 70.32969),
(346, 'Rajo Khanani', 24.98391, 68.8537),
(347, 'Ranipur', 27.2872, 68.50623),
(348, 'Rasulnagar', 32.32794, 73.7804),
(349, 'Ratodero', 27.80227, 68.28902),
(350, 'Rawala Kot', 33.85782, 73.76043),
(351, 'Rawalpindi', 33.59733, 73.0479),
(352, 'Renala Khurd', 30.87878, 73.59857),
(353, 'Risalpur Cantonment', 34.06048, 71.99276),
(354, 'Rohri', 27.69203, 68.89503),
(355, 'Rojhan', 28.68735, 69.9535),
(356, 'Rustam', 27.96705, 68.80386),
(357, 'Saddiqabad', 28.3091, 70.12652),
(358, 'Sahiwal', 31.97386, 72.33109),
(359, 'Sahiwal', 30.66595, 73.10186),
(360, 'Saidu Sharif', 34.74655, 72.35568),
(361, 'Sakrand', 26.13845, 68.27444),
(362, 'Samaro', 25.28143, 69.39623),
(363, 'Sambrial', 32.47835, 74.35338),
(364, 'Sanghar', 26.04694, 68.94917),
(365, 'Sangla Hill', 31.71667, 73.38333),
(366, 'Sanjwal', 33.76105, 72.43315),
(367, 'Sann', 26.0403, 68.13763),
(368, 'Sarai Alamgir', 32.90495, 73.75518),
(369, 'Sarai Naurang', 32.82581, 70.78107),
(370, 'Sarai Sidhu', 30.59476, 71.9699),
(371, 'Sargodha', 32.08586, 72.67418),
(372, 'Sehwan', 26.42495, 67.86126),
(373, 'Setharja Old', 27.2127, 68.46883),
(374, 'Shabqadar', 34.21599, 71.5548),
(375, 'Shahdad Kot', 27.84726, 67.90679),
(376, 'Shahdadpur', 25.92539, 68.6228),
(377, 'Shahkot', 31.5709, 73.48531),
(378, 'Shahpur', 32.2682, 72.46884),
(379, 'Shahpur Chakar', 26.15411, 68.65013),
(380, 'Shahr Sultan', 29.57517, 71.02209),
(381, 'Shakargarh', 32.26361, 75.16008),
(382, 'Sharqpur Sharif', 31.46116, 74.10091),
(383, 'Shekhupura', 31.71287, 73.98556),
(384, 'Shikarpur', 27.95558, 68.63823),
(385, 'Shingli Bala', 34.67872, 72.98491),
(386, 'Shinpokh', 34.32959, 71.17852),
(387, 'Shorkot', 31.91023, 70.87757),
(388, 'Shujaabad', 29.88092, 71.29344),
(389, 'Sialkot', 32.49268, 74.53134),
(390, 'Sibi', 29.54299, 67.87726),
(391, 'Sillanwali', 31.82539, 72.54064),
(392, 'Sinjhoro', 26.03008, 68.80867),
(393, 'Skardu', 35.29787, 75.63372),
(394, 'Sobhodero', 27.30475, 68.39715),
(395, 'Sodhri', 32.46211, 74.18207),
(396, 'Sohbatpur', 28.52038, 68.54298),
(397, 'Sukheke Mandi', 31.86541, 73.50875),
(398, 'Sukkur', 27.70323, 68.85889),
(399, 'Surab', 28.49276, 66.25999),
(400, 'Surkhpur', 32.71816, 74.44773),
(401, 'Swabi', 34.12018, 72.46982),
(402, 'Sīta Road', 27.03333, 67.85),
(403, 'Talagang', 32.92766, 72.41594),
(404, 'Talamba', 30.52693, 72.24079),
(405, 'Talhar', 24.88454, 68.81437),
(406, 'Tandlianwala', 31.03359, 73.13268),
(407, 'Tando Adam', 25.76818, 68.66196),
(408, 'Tando Allahyar', 25.4605, 68.71745),
(409, 'Tando Bago', 24.78914, 68.96535),
(410, 'Tando Jam', 25.42813, 68.52923),
(411, 'Tando Mitha Khan', 25.99625, 69.20251),
(412, 'Tando Muhammad Khan', 25.12384, 68.53677),
(413, 'Tangi', 34.3009, 71.65238),
(414, 'Tangwani', 28.27886, 68.9976),
(415, 'Tank', 32.21707, 70.38315),
(416, 'Taunsa', 30.70358, 70.65054),
(417, 'Thal', 35.47836, 72.24383),
(418, 'Tharu Shah', 26.9423, 68.11759),
(419, 'Thatta', 24.74745, 67.92353),
(420, 'Thul', 28.2403, 68.7755),
(421, 'Timargara', 34.82659, 71.84423),
(422, 'Toba Tek Singh', 30.97127, 72.48275),
(423, 'Topi', 34.07034, 72.62147),
(424, 'Turbat', 26.00122, 63.04849),
(425, 'Ubauro', 28.16429, 69.73114),
(426, 'Umarkot', 25.36329, 69.74184),
(427, 'Upper Dir', 35.2074, 71.8768),
(428, 'Usta Muhammad', 28.17723, 68.04367),
(429, 'Uthal', 25.80722, 66.62194),
(430, 'Utmanzai', 34.18775, 71.76274),
(431, 'Vihari', 30.0445, 72.3556),
(432, 'Wana', 32.29889, 69.5725),
(433, 'Warah', 27.44805, 67.79654),
(434, 'Wazirabad', 32.44324, 74.12),
(435, 'Yazman', 29.12122, 71.74459),
(436, 'Zafarwal', 32.34464, 74.8999),
(437, 'Zahir Pir', 28.81284, 70.52341),
(438, 'Zaida', 34.0595, 72.4669),
(439, 'Zhob', 31.34082, 69.4493),
(440, 'Ziarat', 30.38244, 67.72562);

-- --------------------------------------------------------
--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `email`, `city_id`) VALUES
(1, 'Ali Khan', 21, 'ali.khan@example.com', NULL),
(2, 'Sara Ahmed', 22, 'sara.ahmed@example.com', NULL),
(3, 'Mohammad Hassan', 20, 'mohammad.hassan@example.com', 155),
(4, 'Aisha Malik', 23, 'aisha.malik@example.com', 351),
(5, 'Ahmed Raza', 19, 'ahmed.raza@example.com', 114),
(6, 'Fatima Zaidi', 20, 'fatima.zaidi@example.com', 293),
(7, 'Bilal Mahmood', 22, 'bilal.mahmood@example.com', 329),
(8, 'Hina Abbas', 21, 'hina.abbas@example.com', 341),
(9, 'Kamran Ali', 24, 'kamran.ali@example.com', 389),
(10, 'Nadia Khan', 19, 'nadia.khan@example.com', 135),
(11, 'Imran Amin', 23, 'imran.amin@example.com', 154),
(12, 'Sadia Iqbal', 20, 'sadia.iqbal@example.com', 398),
(13, 'Asad Ali', 21, 'asad.ali@example.com', 252),
(14, 'Ayesha Siddiqui', 22, 'ayesha.siddiqui@example.com', 136),
(15, 'Omar Shah', 20, 'omar.shah@example.com', 25),
(16, 'Saima Akhtar', 19, 'saima.akhtar@example.com', 371),
(17, 'Nabeel Ahmed', 24, 'nabeel.ahmed@example.com', 198),
(18, 'Bushra Riaz', 23, 'bushra.riaz@example.com', 299),
(19, 'Adnan Khan', 21, 'adnan.khan@example.com', 1),
(20, 'Fariha Aslam', 22, 'fariha.aslam@example.com', 393);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `age`, `email`, `city_id`) VALUES
(1, 'Miss Nadia Khan', 29, 'nadia.khan@example.com', 135),
(2, 'Sir Imran Amin', 33, 'imran.amin@example.com', 154),
(3, 'Miss Sadia Iqbal', 30, 'sadia.iqbal@example.com', 398),
(4, 'Sir Asad Ali', 31, 'asad.ali@example.com', 252),
(5, 'Miss Ayesha Siddiqui', 32, 'ayesha.siddiqui@example.com', 136),
(6, 'Sir Omar Shah', 30, 'omar.shah@example.com', 25),
(7, 'Miss Saima Akhtar', 29, 'saima.akhtar@example.com', 371);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_city_id_foreign` (`city_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_city_id_foreign` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
