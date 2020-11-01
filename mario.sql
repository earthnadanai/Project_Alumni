-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2020 at 03:37 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mario`
--

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `P_id` int(5) NOT NULL,
  `P_name` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `P_email` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `P_position` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `P_img` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`P_id`, `P_name`, `P_email`, `P_position`, `P_img`) VALUES
(1, 'อาจารย์ นฤพล  สุวรรณวิจิตร', 'naruapon@webmail.npru.ac.th', 'ประธานสาขาวิชาวิศวกรรมซอฟต์แวร์', 'c_nrp.png'),
(2, 'อาจารย์ สุธารัตน์ ชาวนาฟาง', 'sutarat@webmail.npru.ac.th', 'รองประธานฯ ฝ่ายกิจการนักศึกษา', 'c_nuy.png'),
(3, 'อาจารย์ ดร. วรเชษฐ์  อุทธา', 'wuttha@webmail.npru.ac.th', 'รองประธานฯ ฝ่ายวิชาการ', 'c_nab.png'),
(4, 'อาจารย์ สุพิฌาย์  จันทร์เรือง	', 'suphitcha@webmail.npru.ac.th', '-', 'c_su.png'),
(5, 'อาจารย์ สมเกียรติ ช่อเหมือน', 'tko@webmail.npru.ac.th', '-', 'c_ko.png'),
(6, 'อาจารย์ ดร.อุษณีย์  ภักดีตระกูลวงศ์', 'Dr. Udsanee  Pakdeetrakulwong', '-', 'c_nee.png');

-- --------------------------------------------------------

--
-- Table structure for table `seniors`
--

CREATE TABLE `seniors` (
  `S_id` int(5) NOT NULL,
  `S_firstname` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_lastname` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_email` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_codestu` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_sex` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_addres` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_tell` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_facebook` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_Graduate` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_addressjob` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `S_birthdate` date NOT NULL,
  `S_img` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seniors`
--

INSERT INTO `seniors` (`S_id`, `S_firstname`, `S_lastname`, `S_email`, `S_codestu`, `S_sex`, `S_addres`, `S_tell`, `S_facebook`, `S_Graduate`, `S_addressjob`, `S_birthdate`, `S_img`) VALUES
(1, 'Gullanat', 'chunchom', '581603058@webmail.npru.ac.th', '581603058', 'หญิง', 'เทศบาลเมืองกาญจนบุรี', '0954812687', 'Kate Gullanat', 'ปริญญาตรี', '7/222 ถนนอรุณอมรินทร์ แขวงบางกอกน้อย เขตบางกอกน้อย กทม.', '2539-02-16', '72480308_2505897742833093_8588933499547811840_o.jpg'),
(2, 'Patthamaphon', 'masuk', '581603023@webmail.npru.ac.th', '581603023', 'หญิง', 'จ.นครปฐม', '0856459526', 'Bombam Patthamaphon\r\n', 'ปริญญาตรี', '754 ถ.เพชรเกษม ตำบลห้วยจรเข้ อำเภอเมืองนครปฐม นครปฐม ', '2540-01-14', '58756872_2268269943262612_2113629560426725376_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `codestu` int(9) NOT NULL,
  `sex` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '-',
  `addres` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tell` varchar(10) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `position` varchar(150) NOT NULL,
  `addressjob` varchar(250) NOT NULL,
  `birthdate` date NOT NULL,
  `img` varchar(240) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'defined.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `codestu`, `sex`, `addres`, `tell`, `facebook`, `position`, `addressjob`, `birthdate`, `img`) VALUES
(4, 'earth', '12345678', '614259015@webmail.npru.ac.th', 'ณัฐดนัย', 'กุไรรัตน์', 614259015, 'ชาย', '99/3 หมู่ 9 ซอยนวลทอง อ.กระทุ่มแบน จ.สมุทรสาคร 74110', '0951126224', 'Earth nadanai', 'นักศึกษา', '-', '2542-07-07', '56162831_1933613043433133_427066911981830144_o.jpg'),
(5, 'tae', '12345678', '614259011@webmail.npru.ac.th', 'ฐิติศักดิ์', 'มาสุข', 614259011, 'ชาย', '45/10หมู่4 ต.ห้วยม่วง อ.กำแพงแสน จ.นครปฐม', '0952623494', 'Tae Thitisak', 'นักศึกษา', '-', '2543-05-19', '101945622_3258585434166315_4151552157528621056_n.jpg'),
(6, 'pu', '12345678', '614259023@webmail.npru.ac.th', 'ภูริภัทร', ' รักคง', 614259023, 'ชาย', '17 หมู่3 ตำบลสระกระเทียม อ.เมือง จ.นครปฐม', '0951246859', 'Phuriphat Rakkhong', 'นักศึกษา', '-', '2542-03-28', '80357600_2535730043361816_8782168270082932736_o.jpg'),
(7, 'bew', '12345678', '614259053@webmail.npru.ac.th', 'วรวุฒิ ', 'บุญศรี', 614259053, 'ชาย', 'จ.นครปฐม', '0955896970', 'สะ บิว', 'นักศึกษา', '-', '2538-07-25', '71184534_2417948875147290_2892221833141026816_o.jpg'),
(8, 'rew', '12345678', '614259040@webmail.npru.ac.th', 'พิชญุตย์', 'อินทรัตน์', 614259040, 'ชาย', 'เทศบาลเมืองระนอง', '0854268541', 'Pichayut Intharat', 'นักศึกษา', '-', '2542-01-31', '41092935_1000761790103986_6370794091885625344_n.jpg'),
(9, 'pao', '12345678', '614259013@webmail.npru.ac.th', 'ณัฐนัย', 'ตีรกานนท์', 614259013, 'ชาย', 'จ. สมุทรสาคร', '0956849258', 'Nattanai Teerakanon', 'นักศึกษา', '-', '2542-07-16', '56532414_1128766570623168_7762585202001444864_o.jpg'),
(10, 'ee', '12345678', 'EE@gmail.com', 'EE1', 'EE', 0, '', 'EE', '0956860751', 'EE', 'นักศึกษา', 'EE', '0000-00-00', 'defined.png'),
(11, 'da', '12345678', 'DA@gmail.com', 'Da', 'Da', 614259024, 'ชาย', 'DA', '0956800000', 'Dachachan Buasang', 'นักศึกษา', 'Da', '2020-10-23', 'defined.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `seniors`
--
ALTER TABLE `seniors`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `P_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seniors`
--
ALTER TABLE `seniors`
  MODIFY `S_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
