-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 09:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_font`
--

CREATE TABLE `tb_font` (
  `id` int(11) NOT NULL,
  `fontname` text NOT NULL,
  `font` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_font`
--

INSERT INTO `tb_font` (`id`, `fontname`, `font`) VALUES
(1, 'Kanit-Regular', 'Kanit-Regular.ttf'),
(2, 'SOV_samchuk', 'SOV_samchuk.ttf'),
(3, 'SOV_JD_KraNok', 'SOV_JD_KraNok.ttf'),
(4, 'Caroline', 'Caroline.otf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_lname` varchar(50) NOT NULL,
  `m_nname` varchar(50) NOT NULL,
  `m_tel` varchar(15) NOT NULL,
  `m_qr` text NOT NULL,
  `m_line` varchar(50) NOT NULL,
  `m_fb` varchar(50) NOT NULL,
  `m_ig` varchar(50) NOT NULL,
  `m_address` varchar(250) NOT NULL,
  `m_pic` text NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`m_id`, `m_name`, `m_lname`, `m_nname`, `m_tel`, `m_qr`, `m_line`, `m_fb`, `m_ig`, `m_address`, `m_pic`, `p_id`) VALUES
(1, 'Rachata', 'Arnankul', 'Bank', '0832459007', 'S__158433331.jpg', 'bong_bank2', 'Rachata Arnankul', 'daddybank', '23 เทียนทะเล 19 แยก 1-13 แขวงท่าข้าม เขตบางขุนเทียน กรุงเทพ 10150', '1212.jpg', 6),
(2, 'Pawarate', 'Masapan', 'Zack', '0658943818', 'S__158433332.jpg', 'sackpawarate', 'Zack Pawarate', 'zackpawarate', '88/75 ประชาอุทิศ 90 ตำบลบ้านคลองสวน อำเภอพระสมุทรเจดี สมุทรปราการ 10290', 'S__15843334.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_privilege`
--

CREATE TABLE `tb_privilege` (
  `p_id` int(11) NOT NULL,
  `p_code` varchar(255) NOT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_conditions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_privilege`
--

INSERT INTO `tb_privilege` (`p_id`, `p_code`, `p_name`, `p_conditions`) VALUES
(1, 'agent-1', 'ตัวแทนย่อย', 1),
(2, 'agent-2', 'ตัวแทนหลัก', 51),
(3, 'vip', 'VIP', 300),
(4, 'super-vip', 'Super VIP', 1000),
(5, 'dealer', 'Dealer', 5000),
(6, 'ex-dealer', 'Exclusive Dealer', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_template`
--

CREATE TABLE `tb_template` (
  `t_id` int(11) NOT NULL,
  `t_fname` text DEFAULT NULL,
  `t_lname` text DEFAULT NULL,
  `t_nname` text DEFAULT NULL,
  `t_tel` text DEFAULT NULL,
  `t_line` text DEFAULT NULL,
  `t_qrline` text DEFAULT NULL,
  `t_fb` text DEFAULT NULL,
  `t_ig` text DEFAULT NULL,
  `t_profilepic` text DEFAULT NULL,
  `t_background` text DEFAULT NULL,
  `t_address` text DEFAULT NULL,
  `t_containment` text DEFAULT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_template`
--

INSERT INTO `tb_template` (`t_id`, `t_fname`, `t_lname`, `t_nname`, `t_tel`, `t_line`, `t_qrline`, `t_fb`, `t_ig`, `t_profilepic`, `t_background`, `t_address`, `t_containment`, `p_id`) VALUES
(23, '{\"display\":\"none\"}', '{\"display\":\"none\"}', '{\"display\":\"none\"}', '{\"display\":\"none\"}', '{\"display\":\"none\"}', '{\"display\":\"none\"}', '{\"display\":\"none\"}', '{\"display\":\"none\"}', '{\"width\":\"371px\",\"height\":\"423px\",\"top\":\"257px\",\"left\":\"54px\",\"display\":\"block\",\"z-index\":\"-1\"}', '1.png', '{\"display\":\"none\"}', '{\"width\":\"804px\",\"height\":\"1140px\"}', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_font`
--
ALTER TABLE `tb_font`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `m_id_2` (`m_id`);

--
-- Indexes for table `tb_privilege`
--
ALTER TABLE `tb_privilege`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `id` (`p_id`);

--
-- Indexes for table `tb_template`
--
ALTER TABLE `tb_template`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `id` (`t_id`,`p_id`),
  ADD KEY `privilege` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_font`
--
ALTER TABLE `tb_font`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_privilege`
--
ALTER TABLE `tb_privilege`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_template`
--
ALTER TABLE `tb_template`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
