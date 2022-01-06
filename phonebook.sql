-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 09:40 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mobile`, `email`, `created_at`) VALUES
(1, 'Ali', '09121234567', 'ali@king.com', '2022-01-05 15:49:20'),
(2, 'افسون چگنی', '08782150157', 'uebrahimi@mahmoudieh.ir', '2022-01-05 17:44:23'),
(3, 'روشاک نیلوفری', '04549698107', 'saman.khorsandi@hotmail.com', '2022-01-05 17:44:23'),
(4, 'حنا مجتهد', '09124566547', 'soroush.davoud@soomekh.info', '2022-01-05 17:44:23'),
(5, 'شده کاویانی', '01780695655', 'hanie.shojaei@soomekh.ac.ir', '2022-01-05 17:44:23'),
(6, 'دانه مرتضوی', '06136889091', 'ashraf97@hotmail.com', '2022-01-05 17:44:23'),
(7, 'هونام بزرگ‌نیا', '08399416208', 'soroush.hossein@hotmail.com', '2022-01-05 17:44:23'),
(8, 'گلگون شیروانی', '07443732182', 'zhila.khalaji@hotmail.com', '2022-01-05 17:44:23'),
(9, 'سنجر قهرمانیان', '08393674526', 'marzban.shahbazi@soroush.biz', '2022-01-05 17:44:23'),
(10, 'کاویان افخم', '05492925713', 'zare.sahar@gmail.com', '2022-01-05 17:44:23'),
(11, 'سحرناز آختاچی', '08771297988', 'bmirzaei@gmail.com', '2022-01-05 17:44:23'),
(12, 'شمیل فنایی', '03191712524', 'ksalemi@khalaji.ac.ir', '2022-01-05 17:44:23'),
(13, 'روشنا پستا', '05886033355', 'abedini.benyamin@javadi.org', '2022-01-05 17:44:24'),
(14, 'مهرگان سحاب', '02175051995', 'farrokh.yazdi@hotmail.com', '2022-01-05 17:44:24'),
(15, 'پرنگ ترکان', '03497280496', 'vfekri@nafisi.co.ir', '2022-01-05 17:44:24'),
(16, 'مهراشک طباطبائی', '07656917875', 'farhad.ahmadi@yahoo.com', '2022-01-05 17:44:24'),
(17, 'امید پیرحیاتی', '08385541531', 'brajaei@shahbazi.info', '2022-01-05 17:44:24'),
(18, 'طوفان حسابی', '06185662771', 'nili.babak@gmail.com', '2022-01-05 17:44:24'),
(19, 'شهراد مددی', '06190268062', 'vahid27@khomeini.sch.ir', '2022-01-05 17:44:24'),
(20, 'فائقه مستوفی', '05479974148', 'baraghani.garshasp@yahoo.com', '2022-01-05 17:44:24'),
(21, 'رامونا محمدرضایی', '08451572892', 'fekri.parvin@hamadani.org', '2022-01-05 17:44:24'),
(22, 'نینا غنی', '05403858703', 'ckadivar@shahidi.org', '2022-01-05 17:44:24'),
(23, 'تاج بانو کدیور', '01717660157', 'farshid.abbasi@kazmi.ac.ir', '2022-01-05 17:44:24'),
(24, 'گلمهر خدایی', '01393587211', 'aria95@gmail.com', '2022-01-05 17:44:24'),
(25, 'مهندس فریان وکیلی', '03845111902', 'norouzi.ashraf@gmail.com', '2022-01-05 17:44:24'),
(26, 'نازبو مجرد', '03123172576', 'arezu.mousavi@mokri.net', '2022-01-05 17:44:24'),
(27, 'فرشید قهستانی', '07410129100', 'ghorbani.arman@gmail.com', '2022-01-05 17:44:24'),
(28, 'حاتفه چاوشی', '06648103469', 'simin42@fanaei.ir', '2022-01-05 17:44:24'),
(29, 'استاد مهرتاش ضابطی', '07679874277', 'bardia79@gmail.com', '2022-01-05 17:44:25'),
(30, 'ارشیا اللهیاری', '02595629692', 'shojaei.ali@zare.net', '2022-01-05 17:44:25'),
(31, 'آتنه بختیاری', '04595308934', 'mohammady.azar@hotmail.com', '2022-01-05 17:44:25'),
(32, 'مهرآرا فرهنگ', '04523996243', 'tara.pejman@gmail.com', '2022-01-05 17:44:25'),
(33, 'رایان فارسی', '02371053266', 'paria.babak@mohammady.ac.ir', '2022-01-05 17:44:25'),
(34, 'استاد چمان هامون', '01728561193', 'arman.zandi@khorsandi.biz', '2022-01-05 17:44:25'),
(35, 'کیوان سبحانی', '02120392904', 'kourosh11@yahoo.com', '2022-01-05 17:44:25'),
(36, 'بارانه زرشناس', '02609537778', 'lsoroush@hotmail.com', '2022-01-05 17:44:25'),
(37, 'لیان کلباسی', '05180845915', 'oebrahimi@gmail.com', '2022-01-05 17:44:25'),
(38, 'فریان ابتکار', '05843428869', 'shirin65@husseini.ac.ir', '2022-01-05 17:44:25'),
(39, 'آسیا نوبخت', '02465418021', 'arezu44@hotmail.com', '2022-01-05 17:44:25'),
(40, 'گلنسا صباغ', '05172007176', 'qazwini.kiarash@alizadeh.info', '2022-01-05 17:44:25'),
(41, 'پردیس اشراقی', '07447719222', 'roxana65@qazwini.sch.ir', '2022-01-05 17:44:25'),
(42, 'پریور راسخ', '03490727317', 'khorshid.nalci@gmail.com', '2022-01-05 17:44:25'),
(43, 'خانم شوکت یلدا', '02669130084', 'onabavi@kazmi.biz', '2022-01-05 17:44:25'),
(44, 'زادفر درگاهی', '01771982719', 'jkhalaji@khomeini.net', '2022-01-05 17:44:25'),
(45, 'وهاب کمالی', '03494562575', 'eabdullahi@mahmoudieh.net', '2022-01-05 17:44:25'),
(46, 'دکتر مهراشک آریان‌پور', '04596173735', 'kahadi@soroush.info', '2022-01-05 17:44:25'),
(47, 'مهوند لاجوردی', '06127713965', 'fpashaei@hotmail.com', '2022-01-05 17:44:25'),
(48, 'زادفر همدانی', '07145988154', 'ukashani@rahmani.com', '2022-01-05 17:44:25'),
(49, 'صفا رحماندوست', '02591299471', 'sshahriari@yahoo.com', '2022-01-05 17:44:25'),
(50, 'مهرگان باطنی', '03802967799', 'nabavi.mahmoud@hotmail.com', '2022-01-05 17:44:25'),
(51, 'ساعد صدر', '06185031879', 'umazanderani@gmail.com', '2022-01-05 17:44:25'),
(52, 'نارین حکیمی', '05400303951', 'tousi.dariush@hotmail.com', '2022-01-05 17:44:25'),
(53, 'لوما توفیق', '08420432152', 'pedram.jamshidi@abdullahi.org', '2022-01-05 17:44:25'),
(54, 'استاد شیوه خمسه', '03568776257', 'parisa.baraghani@ahmadi.com', '2022-01-05 17:44:25'),
(55, 'آذربُد بختیار', '08188963627', 'khorshid08@ahmadi.sch.ir', '2022-01-05 17:44:26'),
(56, 'استاد خشایار تبریزی', '06119790101', 'soheila23@mousavi.ir', '2022-01-05 17:44:26'),
(57, 'محسن محجوبی', '03834599635', 'kasra.ebrahimi@yahoo.com', '2022-01-05 17:44:26'),
(58, 'زیکا نراقی', '02108655160', 'shahidi.arian@esfahani.sch.ir', '2022-01-05 17:44:26'),
(59, 'شروین اعتماد', '05185987108', 'salemi.parastoo@soleimani.net', '2022-01-05 17:44:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
