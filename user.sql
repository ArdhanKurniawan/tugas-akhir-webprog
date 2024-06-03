-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2024 at 09:13 PM
-- Server version: 8.0.36-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anggrekm_delovery`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1 : Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `whatsapp`, `email`, `password`, `role_id`, `role`, `status`) VALUES
(1, 'Henry', '6281380502552', 'henry@memeflorist.com', '7327834844a56fdf83a21ef125521b2a3cb8ccc928659eea962d2b7f4f64b283', 1, 'manager', 1),
(2, 'RnD', '62858-4271-6719', 'bd@memeflorist.com', '4d5ba6d9a85b181fbf77086a25c87ad13801d9bec32af5b210b27caa20f889a5', 3, 'PM', 1),
(3, 'Siti', '628995758545', 'siti@memeflorist.com', 'cff4ef2944e7d133bc3b89423054eb5fe08a0d39bfa4f412d98d56130f1c29be', 4, 'manager', 1),
(4, 'Vivin', '6285799995250', 'vivin@memeflorist.com', 'cff4ef2944e7d133bc3b89423054eb5fe08a0d39bfa4f412d98d56130f1c29be', 4, 'sales', 1),
(5, 'Mika', '6281370770708', 'mika@memeflorist.com', 'cff4ef2944e7d133bc3b89423054eb5fe08a0d39bfa4f412d98d56130f1c29be', 2, 'sales', 1),
(7, 'Devina', '6285601821421 ', 'purchase1@delovery.com', '1ccd9c936ec840620a60e3ca7653082cb1a7477996aaad1b6612ee053595124c', 3, 'purchase', 1),
(8, 'Hero Wijayadi', '085641205060', 'hero@memeflorist.com', '7327834844a56fdf83a21ef125521b2a3cb8ccc928659eea962d2b7f4f64b283', 1, 'manager', 1),
(9, 'Purchase SPV', '6289681272554', 'purchase@memeflorist.com', 'fab6839f611c27a0886c2d34a207abd8c35827af2ab5356848820866cf95e153', 5, 'spvpurchase', 1),
(10, 'Tiara', '628995758545', 'tiara@memeflorist.com', 'cff4ef2944e7d133bc3b89423054eb5fe08a0d39bfa4f412d98d56130f1c29be', 4, 'sales', 1),
(11, 'Rachel', '6281380502552', 'rachel@memeflorist.com', 'cff4ef2944e7d133bc3b89423054eb5fe08a0d39bfa4f412d98d56130f1c29be', 2, 'sales', 1),
(12, 'Devi CR', '+628999979776', 'cr@memeflorist.com', '69eca97f94aa5ce67487783c2f05cd1cc65b5dbd2ae2ad6a7db818a6ebc92ee8', 6, 'relation', 1),
(13, 'SEO', '', 'seo@memeflorist.com', '05d8c4155da8068b470345abfee43b13a00a59a3f4e7effd6b6a9e3dafb3b2e6', 1, 'manager', 1),
(14, 'Sales SPV ', '08123456789', 'spvsales.memeflorist@gmail.com', 'fae4fa0f387c279d00c2350fe28f048f48ad658212211d5873a1a25bb775d68b', 3, 'spvsales', 1),
(15, 'VR', '62812345678', 'vr@delovery.com', '1ccd9c936ec840620a60e3ca7653082cb1a7477996aaad1b6612ee053595124c', 4, 'PM', 1),
(16, 'Intan', '6281384241199', 'purchase2@delovery.com', '1ccd9c936ec840620a60e3ca7653082cb1a7477996aaad1b6612ee053595124c', 0, 'purchase', 1),
(17, 'Putri', '6281329511327', 'purchase3@delovery.com', '1ccd9c936ec840620a60e3ca7653082cb1a7477996aaad1b6612ee053595124c', 0, 'purchase', 1),
(18, 'Satria', '6285875526962', 'purchase4@delovery.com', '1ccd9c936ec840620a60e3ca7653082cb1a7477996aaad1b6612ee053595124c', 0, 'purchase', 1),
(19, 'Desmia', '6285742939369', 'purchase5@delovery.com', '1ccd9c936ec840620a60e3ca7653082cb1a7477996aaad1b6612ee053595124c', 0, 'purchase', 1),
(20, 'Ocha', '08123456789', 'ocha@memeflorist.com', 'cff4ef2944e7d133bc3b89423054eb5fe08a0d39bfa4f412d98d56130f1c29be', 0, 'sales', 1),
(22, 'Tim SEO', '', 'seo@delovery.com', '331b264e4a33c70a698f9185a9bf443d6b7fd0e06edd0e0f3d20bc3c964ad5f2', 0, 'seo', 1),
(23, 'ardhan', '081226086356', 'testing@gmail.com', '9faf70f80fc784b3a8e63af5f717851a6c2d6396b16fde32708c68cab7dcc4d7', 0, 'manager', 1),
(28, 'callback', '08966734', 'callback@gmail.com', '$2a$08$mkpF/o6k5O.FwXTLMdXh0OyVIFtUXDuG/7KAAiWJxAjraNpNjYNO2', 0, 'manager', 1),
(29, 'spvpurchase2', '028387387444', 'ardhantesting@gmail.com', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 0, 'spvpurchase', 1),
(30, 'test', '6281226086356', 'test@gmail.com', '11277132dc47e6a052f471ceb770f0b573e5ab208b0ef9905eb4d812902c0852', 0, 'manager', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
