-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2020 at 10:41 AM
-- Server version: 10.2.34-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alorjibon_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `donorlist`
--

CREATE TABLE `donorlist` (
  `id` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `BloodGroup` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `FBID` varchar(200) NOT NULL,
  `EmailAddress` varchar(100) NOT NULL,
  `LastDonated` varchar(100) NOT NULL,
  `Approved` varchar(2) NOT NULL,
  `Remarks` varchar(1000) NOT NULL,
  `Reference` varchar(100) NOT NULL,
  `DonorStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorlist`
--

INSERT INTO `donorlist` (`id`, `Name`, `Password`, `DOB`, `BloodGroup`, `Gender`, `City`, `Area`, `Mobile`, `FBID`, `EmailAddress`, `LastDonated`, `Approved`, `Remarks`, `Reference`, `DonorStatus`) VALUES
('45037', 'Anik Kumar Chakrabortty', '1234', '14/03/1998', 'B+', 'Male', 'Dhaka', 'Jatrabari', '01720124494', 'fb.me/th3.anik', 'anikchakrabortty22@gmail.com', 'N/A', '1', 'Can\'t donate', 'anik', 'Yet to Donate');

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `id` int(11) NOT NULL,
  `Name` varchar(22) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `DOB` varchar(10) DEFAULT NULL,
  `BloodGroup` varchar(3) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `City` varchar(25) DEFAULT NULL,
  `Area` varchar(31) DEFAULT NULL,
  `Mobile` varchar(24) DEFAULT NULL,
  `FBID` varchar(100) DEFAULT NULL,
  `EmailAddress` varchar(100) DEFAULT NULL,
  `LastDonated` varchar(13) DEFAULT NULL,
  `Approved` int(1) DEFAULT NULL,
  `Remarks` varchar(25) DEFAULT NULL,
  `Reference` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`id`, `Name`, `Password`, `DOB`, `BloodGroup`, `Gender`, `City`, `Area`, `Mobile`, `FBID`, `EmailAddress`, `LastDonated`, `Approved`, `Remarks`, `Reference`) VALUES
(1, 'Shahriar Ahmed Shawon', 'shawon2015', '26/9/1996', 'O+', 'Male', 'Dhaka', 'Moghbazar', '01928788735', 'shahriarahmed.shawon.60', 'sashawon60@gmail.com', '01/06/2018', 1, 'Donate Blood, Save Lives', ''),
(2, 'Mariam Khadem ', '2394', '01/01/1997', 'B+', 'Female', 'Dhaka', 'Rampura, banasree ', '01635421561 ', 'Mariam Khadem ', 'mariamkhadem95@gmail.com', '07/04/2018', 1, 'No', ''),
(3, 'Shafi Md Rawfur Raad', '45cse242', '22-06-1996', 'B+', 'Male', 'Dhaka', 'Dhaka', '01750919495', 'rawfur.raad ', 'rawfur.raad@gmail.com', '27-01-2019', 1, '', ''),
(4, 'Al-Amin  Islam Joy', 'alamin111', '18-12-1998', 'B+', 'Male', 'Dhaka', 'Nikunja-2', '01749411185', 'alaminislamjoy111', 'alaminislam3555@gmail.com', '19/07/18', 1, '', ''),
(5, 'Nishad Khan', '1087', '04/10/1996', 'AB+', 'Male', 'Dhaka', 'Dhaka Cantonment, Dhaka-1206.', '+880 1735663967', 'surreal.poetry', 'cse.nishad@gmail.com', '15/12/2018', 1, '', ''),
(6, 'Saki', 'saki', '11/04/1998', 'O+', 'Male', 'Dhaka', 'Cantonment ', '01686639786', 'profile.php?id=100021055477197', 'shabikshuvo62@gmai.com ', '20/12/2018', 1, '', ''),
(7, 'Mosaddek Molla', '2222', '02/02/1996', 'B+', 'Male', 'Dhaka', 'khilkhat', '01761616062', 'mosaddekmollaa', 'mosaddek6@gmail.com', '05/05/18', 1, '', ''),
(8, 'Abrar Kamal', 'Abrar1110.', '13/12/1997', 'O+', 'Male', 'Dhaka', 'Kuril bishwa road', '01841981110', 'abrar.kamal.3', 'abrarkamal007@gmail.com', '01/05/2017', 1, '', ''),
(9, 'Mamun-or-Rashid Ratul', 'ratul420', '01-02-1996', 'A+', 'Male', 'Dhaka', 'Uttara , Dhaka-1230', '01954081254', 'RatulPatuary', 'ratulpatuary.mor9999@gmail.com', '02-09-2018', 1, 'Umm Back....... ', ''),
(10, 'Md. Masum Reza', '1334', '05/08/1996', 'B+', 'Male', 'Dhaka', 'Gazipur', '01756862143', '', 'mdmasumreza02@gmail.com ', '09/11/18', 1, '', ''),
(11, 'Mohammad Sapan', '7878', '28/09/1997', 'A+', 'Male', 'Dhaka', 'Nikhunja-2, Khilkhet', '+8801776837364', 'facebook.com/mscsapan', 'mscsapan@gmail.com', '02/01/2019', 1, '', ''),
(12, 'md yousuf', 'abc100859', '24/04/1997', 'B+', 'Male', 'Dhaka', 'cantonment', '01889143297', 'mdyousuf', 'mdyousuf.my274@gmail.com', '', 1, '', ''),
(14, 'Mahfuzur Rahman Miad', '12345miad', '31/01/94', 'O+', 'Male', 'Dhaka', 'all over Dhaka', '01991162665', 'https://www.facebook.com/tricky.potter', 'trickypotter274789@gmail.com', '17/10/18', 1, 'n/a', ''),
(15, 'Md. Arif Hossain', 'dpsarif', '01/11/1997', 'A+', 'Male', 'Dhaka', 'Nikunja 2', '01912136862', 'https://www.facebook.com/profile.php?id=100000922518660', 'arifhossain6862@gmail.com', '26/09/2018', 1, '', ''),
(16, 'Tonmoy Chakraborty', '1234', '21/01/1995', 'O+', 'Male', 'Dhaka', 'Mohakhali', '01713583855', 'sagar.chakraborty.3576', 'tonmoychakrabortty11@gmail.com', '04/08/2018', 1, '', ''),
(17, 'Abir bin sanbi', '018339911', '17-1-1998', 'O+', 'Male', 'Dhaka', 'dhaka', '01833991186', 'à¦†à¦¬à¦¿à¦° à¦¬à¦¿à¦¨ à¦¸à¦¾à¦¨à¦¬à¦¿', 'abiranbir142@gmail.com ', '24-11-2017', 1, 'no', ''),
(19, 'upal rahman', 'upalkhan', '18/1/1996', 'B+', 'Male', 'Dhaka', 'nikunjo,Dhaka', '01772765886', 'upal rahman', 'upalkhan222@gmail.com', '14/12/2018', 1, 'nothing', ''),
(22, 'Monowarul Islam', 'blood', '02/10/98', 'AB+', 'Male', 'Dhaka', '', '01521333910', '', 'linkonseucse45@gmail.com ', '22/11/18', 1, '', ''),
(23, 'Md.Abdullah Al Masum', '7247', '20/08/1997', 'AB+', 'Male', 'Dhaka', 'nikunjo ', '01758567247', 'http://facebook.com/bmabdullahal.masum', 'bmmasum.1994@gmail.com ', '01/01/2019', 1, 'Donate blood to save life', ''),
(24, 'Arup Deb Nath', '2787', '01/06/1998', 'B+', 'Male', 'Dhaka', 'Nikunjo-2', '01684674431', 'https://www.facebook.com/profile.php?id=100004189176982', 'arupdebn@gmail.com', '23/08/2018', 1, 'love to donate', ''),
(25, 'Mizanur Rahman', '9988', '08/08/1996', 'AB+', 'Male', 'Dhaka', 'Nikunja 2', '01783537322', 'Mizanur Rahman Moni', 'mizanur.moni88@gmail.com', '03.02.2019', 1, '', ''),
(26, 'Sudipta Paul Priya ', 'priya', '07/11/1998', 'O+', 'Female', 'Dhaka', 'Khilkhe, nikunza-2. ', '01849814888', 'sudipta.paulpiya', 'Piyapaul111@gmail.com', '', 1, '', ''),
(27, 'Mubashwir Amin', 'Mubashw1r', '09.06.1997', 'A+', 'Male', 'Dhaka', 'Khilgaon', '01628588756', 'Mubashwir.amin', 'mubashwiramin@gmail.com', '', 1, 'I do smoke(cigarette). :3', ''),
(28, 'sharin maria', 'maria', '12/12/1997', 'B+', 'Female', 'Dhaka', 'mirpur 14', '01985708526', 'sharin maria', 'sharin121maria@gmail.com', 'not yet', 1, '', ''),
(29, 'Younus Ahammod', '1322', '13/12/1999', 'O+', 'Male', 'Dhaka', 'Khilkhet', '8801734122804', 'younus.ahammod', 'younusahammod99@gmail.com', '13/12/2018', 1, '', ''),
(30, 'Mehedi Rahaman Sun', '9999', '17/3/95', 'AB-', 'Male', 'Dhaka', 'mirpur ', '01977989999', 'sun mehedi', 'mehedi.rahaman.sun@gmail.com', '', 1, '', ''),
(32, 'Jahir Raihan', '1234abcd', '25/04/1997', 'O+', 'Male', 'Dhaka', 'Mirpur', '01723907560', 'jahirraihanmsd', 'jahirraihanmsd@gmail.com', '15/06/2015', 1, '', ''),
(35, 'MD.SAMIUL ISLAM', '', '07-05-1998', 'AB+', 'Male', 'Dhaka', 'dhaka ,framget', '01748793885', 'mdsamiulislam.robin', 'samiulrobin6@gmail.com', 'nil', 1, 'nil', ''),
(36, 'Md abu nayeem', '', '21/11/1997', 'AB+', 'Female', 'Dhaka', 'Nikunja', '01936209794', 'Abu nayeem', 'Abu.nayyem2014@gmai.com ', '28/02/2019', 1, '', ''),
(37, 'Md. Mazed Hossain', '', '30/06/1994', 'AB+', 'Male', 'Dhaka', 'Mirpur', '01712678280', 'bmmazed', 'bmdmazed@gmail.com', '', 1, '', ''),
(38, 'arif juwel', '', '08-06-1998', 'B+', 'Male', 'Dhaka', 'banani', '01613539107', '', 'arifjuwel002@gmail.com', '11-03-2018', 1, '', ''),
(39, 'Hriday Saha', '', '12/12/1995', 'O+', 'Male', 'Dhaka', 'Nikunjo -2,khilkhet.', '01616303202', 'Hriday saha', 'hridaysaha.hs@gmail.com', '', 1, '', ''),
(40, 'Mohammad Sapan', '', '28/09/1997', 'A+', 'Male', 'Dhaka', 'Nikhunja 2', '+8801776837364', 'mscsapan', 'mscsapan@gmail.com', '03/01/2019', 1, '', ''),
(41, 'Mikdad Hasan', '', '01/02/1997', 'B+', 'Male', 'Dhaka', 'Khilkhe, nikunjo-2  ', '01610067888', 'Mikdad hasan', 'Mikdad.cse@gmail.com', '', 1, '', ''),
(43, 'Md Sharif Uddin Siddiq', '', '01.06.1997', 'O+', 'Male', 'Dhaka', 'Mirpur', '01671700902', 'Sharif Siddiqe', 'sharifsiddiqe97@gmail.com', '19.05.2019', 1, 'I am danate blood regular', ''),
(44, 'RomanosOG', '', '1978-11-12', 'AB+', '1', 'Dhaka', '', '89418447924', 'RomanosOG', 'romanilinin88@mail.ru', '1978-12-11', 1, 'No', ''),
(45, 'Muhammed Sazzed Hossai', '', '07/12/1996', 'O+', 'Male', 'Dhaka', 'Keraniganj ', '01966192557', 'Sazzed Hossain  ', 'sazzedhossain7777@gmail.com ', '26/08/2019', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$lExySHBrWG/zdol.WIVc0OekvHwBiyQMLGMZG/XOA4S0NBgf9uKJO', '2018-06-02 06:10:55'),
(2, 'volunteer', '$2y$10$lExySHBrWG/zdol.WIVc0OekvHwBiyQMLGMZG/XOA4S0NBgf9uKJO', '2018-08-06 06:37:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sheet1`
--
ALTER TABLE `sheet1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sheet1`
--
ALTER TABLE `sheet1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
