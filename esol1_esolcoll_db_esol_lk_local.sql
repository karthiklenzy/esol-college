-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2020 at 03:00 PM
-- Server version: 5.6.45
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
-- Database: `esol1_esolcoll_db_esol_lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `footer_contact`
--

CREATE TABLE `footer_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_city` varchar(20) NOT NULL,
  `contact_link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission`
--

CREATE TABLE `tbl_admission` (
  `parent_id` int(255) NOT NULL,
  `admission_reference_number` varchar(200) NOT NULL,
  `parent_title` varchar(200) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `parent_surname` varchar(255) NOT NULL,
  `parent_profession` varchar(255) NOT NULL,
  `parent_relation` varchar(255) NOT NULL,
  `parent_landline` varchar(255) NOT NULL,
  `parent_mobile` varchar(100) NOT NULL,
  `parent_address` varchar(1000) NOT NULL,
  `parent_mail` varchar(255) NOT NULL,
  `for_register` int(11) NOT NULL,
  `for_request` int(11) NOT NULL,
  `branch_name` varchar(1000) NOT NULL,
  `parent_contact_method` varchar(200) NOT NULL,
  `parent_contact_time` varchar(400) NOT NULL,
  `further_information_way` varchar(255) NOT NULL,
  `further_information_message` varchar(1000) NOT NULL,
  `admission_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admission`
--

INSERT INTO `tbl_admission` (`parent_id`, `admission_reference_number`, `parent_title`, `parent_name`, `parent_surname`, `parent_profession`, `parent_relation`, `parent_landline`, `parent_mobile`, `parent_address`, `parent_mail`, `for_register`, `for_request`, `branch_name`, `parent_contact_method`, `parent_contact_time`, `further_information_way`, `further_information_message`, `admission_date`) VALUES
(111, 'ADM-GEN_1', '', 'Hemal', 'Lakpethum', 'Town Planner', 'Father', '0718558380', '0777420177', '510/52, Randiya Uyana, Meegoda', 'kwahlakpethum@gmail.com', 1, 1, 'Malabe, Maharagama', '', '', '', '', '0000-00-00 00:00:00'),
(113, 'ADM-MG_2', '', 'Udayangani', 'Sugathapala', 'Human Resources Assistant', 'Mother', '0112160902', '0714430936', '311 E, Pelanwatta, Pannipitiya', 'chamudagedara@yahoo.com', 0, 1, 'Maharagama', '', '', '', '', '2019-07-01 00:00:00'),
(114, 'ADM-MG_3', '', 'Sanduka', 'Gamage', 'Senior Executive', 'Mother', '0112077860', '0773986100', 'No 83/1/A , Meemenagoda Road, Kalalgoda, Pannipitiya', 'sanduka.lakshini@gmail.com', 1, 0, 'Maharagama', '', '', '', '', '2019-07-03 00:00:00'),
(115, 'ADM-MG_4', '', 'Chandima', 'Suraweera', '', 'Mother', '0776622726', '0776622726', '', 'chandimaniroshini@gmail.com', 1, 0, 'Maharagama', '', '', '', '', '2019-07-05 00:00:00'),
(116, 'ADM-MG_5', '', 'Prasad', 'Sandamal', 'Software Engineer', 'Father', '0774548687', '0774548687', 'Kottawa', 'dlpsandamal@gmail.com', 0, 1, 'Maharagama', '', '', '', '', '2019-07-10 00:00:00'),
(117, 'ADM-BM_1', '', 'thusangi', 'Pelawatta', 'Managament assistant', 'Mother', '0342246086', '0718656042', '', 'thusangipelawatta@yahoo.com', 1, 0, 'Battaramulla', '', '', '', '', '2019-07-17 00:00:00'),
(118, 'ADM-HW_1', '', 'Suneth', 'Sameera', 'Engineer', 'Father', '0112858593', '0716363960', '92/11, Horana Rd,Padukka', 'bss.sameera@gmail.com', 0, 1, 'Hanwella', '', '', '', '', '2019-07-17 00:00:00'),
(119, 'ADM-MG_6', '', 'Janaka Prabath', 'Padukkage Don', 'Software engineer', 'Father', '0112702469', '0774364676', 'No.120/B,Makandana,Madapatha,Piliyandala', 'janakapdj@gmail.com', 1, 0, 'Maharagama', '', '', '', '', '2019-07-22 00:00:00'),
(120, 'ADM-GEN_2', '', 'Krishanthi', 'Godakumbura', 'Software Engineer', 'Mother', '0112799770', '0772491585', '230, dhammarthana mawatha, madiwela, kotte', 'erandi.godakumbura@gmail.com', 1, 0, 'Maharagama, Battaramulla', '', '', '', '', '2019-07-30 00:00:00'),
(121, 'ADM-HW_2', '', 'Buddhi', 'Matharage', 'Teacher', 'Mother', '0772938782', '0772938782', '451/2,pitipana south,homagama', 'nuwan.hewaduli@gmail.com', 1, 0, 'Hanwella', '', '', '', '', '2019-08-02 00:00:00'),
(126, 'ADM-BM_3', '', 'Anushka', 'Wekadapola', '-', 'Mother', '0768277877', '0773958641', '4B 84/1, jayawadanagama,baththaramulla', 'anushka88w@gmail.com', 0, 1, 'Battaramulla', 'email', 'Anytime', '', '', '2019-08-06 00:00:00'),
(130, 'ADM-MG_7', 'Mrs', 'THANUJA', 'VAIRAWANADAN', 'MANAGER', 'Mother', '0771576308', '0776144728', 'NO.226/C KUDAMADUWA ,SIDDAMULLA', 'thanujar@daya-trading.com', 1, 0, 'Maharagama', 'email', '10am-5pm', '', '', '2019-08-09 00:00:00'),
(131, 'ADM-MG_8', 'Mrs', 'Minukshi', 'Welgama', '', 'Mother', '0112619359', '0777350943', '58/1, Madapatha Rd, Kolamunna, Piliyandala', 'minukshiwelgama@gmail.com', 0, 1, 'Maharagama', 'email', 'Minukshi', '', '', '2019-08-09 00:00:00'),
(132, 'ADM-BM_4', 'Mrs', 'Thushara', 'Jayaweera', 'Development Officer', 'Mother', '0777344904', '0718950552', '160B, Perakum Mw, Bangalawatta, Kottawa', 'thusharageethanjalee@gmail.com', 1, 0, 'Battaramulla', 'call', '10am- 6pm', '', '', '2019-08-09 00:00:00'),
(133, 'ADM-MG_9', 'Mrs', 'SURANGA', 'PALLEGAMGODA', 'DEVELOPMENT OFFICER', 'Mother', '0711957722', '0711972666', '195/1/J , CHARLI&#39; S MAWATHA , RATHMALDENIYA ROAD, PANNIPITIYA', 'padmisuranga11@gmail.com', 1, 0, 'Maharagama', 'call', '10.00 a.m.', '', '', '2019-08-09 00:00:00'),
(134, 'ADM-MG_10', 'Mrs', 'Chintha', 'Jeewanie', 'Doctor', 'Mother', '0713092109', '0713092109', '62/31/f, peris road kalubowila ', 'chinthajeewanie@gmail.com', 1, 1, 'Maharagama', 'email', '6pm', '', '', '2019-08-24 00:00:00'),
(135, 'ADM-HW_3', 'Mr', 'Janaka', 'Wijethilaka', 'Draughtsman', 'Father', '0770448531', '0714066083', '6/5, Nanda Ellawala Mawatha, Ethoya, Ratnapura', 'jas.janaka@gmail.com', 1, 0, 'Hanwella', 'call', '10.00-6.00', '', '', '2019-09-02 00:00:00'),
(136, 'ADM-HW_4', 'Mr', 'Wijerathne', 'Kelum', 'Deputy Commissioner', 'Father', '0112415591', '0761490420', 'No.29/15, Avissawella Road, Ranala', 'wijerathnekelum@gmail.com', 0, 1, 'Hanwella', 'call', 'between 10.00 - 16.00', '', '', '2019-09-05 00:00:00'),
(137, 'ADM-HW_5', 'Mr', 'Janaka', 'Wijethilaka', 'Draughtsman', 'Father', '0770448531', '0714066083', '6/5, Nanda Ellawala Mawatha, Ethoya, Ratnapura', 'jas.janaka@gmail.com', 1, 0, 'Hanwella', 'call', '10.00 am - 6.00 pm', '', '', '2019-09-06 00:00:00'),
(138, 'ADM-MLB_1', 'Mr', 'Sanjaya bandara', 'Yasarathna', 'Marketing executive', 'Father', '0112744366', '0777354172', '65/I, horahena road, hokandara east', 'irsanjayaby@gmail.com', 1, 0, 'Malabe', 'call', '3p.m. _ 6.p.m', '', '', '2019-09-09 00:00:00'),
(139, 'ADM-MG_11', 'Mrs', 'PRABHA SHIROMALIE', 'UDUWERIYA', 'MANAGER -ADMINISTRATION & OPERATIONS - SMB MONEY BROKERS (PVT) LTD', 'Mother', '0112189831', '0777862287', '# 752/1/35, PELANGAHA WATTA,RUKMALE ROAD, PANNIPITIYA', 'prabhashiromalie@yahoo.com', 1, 0, 'Maharagama', 'email', 'after 4.00 p.m.', '', '', '2019-09-10 00:00:00'),
(140, 'ADM-BM_5', 'Mrs', 'DEEPIKA', 'SUBHASHINIE', 'SENIOR EXECUTIVE', 'Mother', '0112410755', '0779169225', '657 HALGAHADENIYA ANGODA', 'deepikasubhashinie@yahoo.com', 0, 1, 'Battaramulla', 'email', '3.00 pm', '', '', '2019-09-10 00:00:00'),
(141, 'ADM-MG_12', 'Mr', 'Tharinda', 'Kumarapperuma Arachchige', 'Engineer', 'Father', '0112141055', '0772311780', 'Lanka Tiles PLC, Marriage Quarters, Jalthara, Ranala', 'nuwanwasanatharinda@gmail.com', 1, 0, 'Maharagama', 'call', '5.30 p.m', '', '', '2019-09-10 00:00:00'),
(143, 'ADM-MG_13', 'Mrs', 'Nelum Kumari', 'Pitawela', 'Housewife', 'Mother', '0112180073', '0779941485', '377/8/11,Nagaha mawatha, Pelanwatta, Pannipitiya', 'mano@elsa.clothing', 1, 0, 'Maharagama', 'call', '8.00am - 5.0pm', '', '', '2019-09-14 00:00:00'),
(144, 'ADM-MG_14', 'Mrs', 'Muditha Samanthi', 'Eramudugodagamage', 'Housewife', 'Mother', '0772553522', '0773143522', 'no.27, Plamu kottawa , Patumaga, Ambuldeniya, Nugegoda', 'mano@elsa.clothing', 1, 0, 'Maharagama', 'call', '8.00am - 5.00pm', '', '', '2019-09-14 00:00:00'),
(145, 'ADM-MG_15', 'Mrs', 'M Siromala', 'Perera', 'Business Woman', 'Mother', '0112156625', '0729917446', '260/3, Meda Mawatha, Athurugiriya', 'lionel.civilect@gmail.com', 1, 0, 'Maharagama', 'call', '8.00am - 5.00pm', '', '', '2019-09-14 00:00:00'),
(147, 'ADM-MG_16', 'Mr', 'Shiromal', 'Amarasinghe', 'Senior Merchandiser', 'Father', '0112750610', '0773998940', '102/20/2 Dimuthu Uyana Meegoda', 'shiromal@yahoo.com', 1, 0, 'Maharagama', 'call', 'Morning', '', '', '2019-09-14 00:00:00'),
(149, 'ADM-MG_17', 'Mr', 'Dinesh', 'Panapitiya', 'Finance Manager', 'Father', '0112488674', '0777756505', '491/1, Walgama, Malwana', 'dinesh.sandeepabr@gmail.com', 1, 0, 'Maharagama', 'call', 'Any Time', '', '', '2019-09-14 00:00:00'),
(157, 'ADM-MG_18', 'Mrs', 'hearh', '', '', 'Aunt', '2354234234', '5232423542', '', 'ed@er', 1, 0, 'Maharagama', 'call-tamil', 'wer', 'Internet', 'topjob', '2019-09-20 10:41:29'),
(158, 'ADM-HW_6', 'Mrs', 'Disna', 'Ranaweera', 'Commercial & Logistics Executive', 'Mother', '0362233096', '0772929158', 'C197, Ihala Thalduwa, Avissawella', 'disnar@masholdings.com', 1, 0, 'Hanwella', 'call-sinhala', '11.00am to 2.00 pm Except Wednesday', 'Publications', 'I appreciate your response for this registration please.', '2019-09-23 01:02:55'),
(159, 'ADM-HW_7', 'Mrs', 'Disna', 'Ranaweera', 'Commercial & Logistics Executive', 'Mother', '0362233096', '0772929158', 'C197, Ihala Thalduwa, Avissawella', 'disnar@masholdings.com', 1, 0, 'Hanwella', 'call-sinhala', '11.00am to 2.00 pm Except Wednesday', 'Publications', 'I appreciate your response for this registration please.', '2019-09-23 01:03:01'),
(160, 'ADM-MG_19', 'Mr', 'Gihan AKALANKA', 'GALABADA', 'Assistant Manger', 'Father', '0718221280', '0718221280', '', 'gihanakalanka@gmail.com', 1, 1, 'Maharagama', 'call-sinhala', '5.30pm', 'Professional recommendation', 'None', '2019-09-24 12:20:18'),
(161, 'ADM-MG_20', 'Mrs', 'Thilini', 'Jayakody', 'Management Assistant', 'Mother', '0112617629', '0718178856', '336 G, Ganewaththa Road, Mampe, Piliyandala', 'tsjayakody83@gmail.com', 1, 1, 'Maharagama', 'call-sinhala', '10 am to 12pm', 'Internet', 'i want to know details about English cources and cambridge exams', '2019-09-28 10:49:55'),
(162, 'ADM-BM_6', 'Mrs', 'Hansani', 'Gunasena', 'Secretary', 'Mother', '0701988424', '0777988424', '17/10, Maliban Aramaya Road, Baddagana Kotte', 'hansaniv@dmslanka.com', 0, 1, 'Battaramulla', 'call-sinhala', 'Any time during the time shown', 'word of mouth', 'Appreciate, if you could enclose the Fee structure also', '2019-10-04 01:52:18'),
(163, 'ADM-MG_21', 'Mrs', 'Dilshi', 'Gamage', 'Housewife', 'Mother', '0710521819', '0714665124', '30/3(1)school lane,niwanthidiya,piliyandala.', 'gamagedil@gmail.com', 0, 1, 'Maharagama', 'call-sinhala', '4-5pm', 'Professional recommendation', 'Need more details ', '2019-10-04 09:59:38'),
(164, 'ADM-GEN_3', 'Mr', 'Prasad', 'Habarakada', 'production manager', 'Father', '0342256599', '0763803955', '145 Horana road,Handapangoda ', 'tharangah@helaclothing.com', 1, 0, 'Maharagama, Hanwella', 'call-sinhala', '10am to 6pm', 'Internet', 'None', '2019-10-14 03:31:06'),
(165, 'ADM-MG_22', 'Mrs', 'Harshani', 'Palliyaguru', 'Managment S O', 'Mother', '0718112823', '0777660791', '518/14/2,Wasana Road, Old Road, Kottawa', 'groovypromo@yahoo.com', 1, 0, 'Maharagama', 'call-sinhala', '11 am', 'word of mouth', 'None', '2019-10-14 05:00:44'),
(166, 'ADM-MG_23', 'Mr', 'Chinthaka', 'Ranaweera', 'Assistan Engineer', 'Father', '0777316880', '0759315131', '55/2 Kandaheneawatta Depanama Pannipitiya', 'chinthaka.el@gmail.com', 1, 0, 'Maharagama', 'call-sinhala', '10.30AM TO 6.00PM', 'Internet', 'no', '2019-10-15 10:16:43'),
(167, 'ADM-MLB_2', 'Mrs', 'Nilanthi', 'Perera', 'Management Service Officer', 'Mother', '0112077185', '0788169098', '166/D, Maligagodalla Road, Mulleriyawa.', 'knperera78@gmail.com', 0, 1, 'Malabe', 'call-sinhala', 'Anytime', 'word of mouth', 'None', '2019-10-15 11:42:33'),
(168, 'ADM-MG_24', 'Mrs', 'Diana', 'Gray', 'Teacher', 'Mother', '0717433768', '0717423768', '84/5A polgasowita rd, Mattegoda', 'dianagrayr@gmail.com', 1, 0, 'Maharagama', 'email', '3-7pm', 'Internet', 'None', '2019-10-20 10:04:07'),
(169, 'ADM-MG_25', 'Mrs', 'Tharaka', 'Ranasinghe', 'House wife', 'Mother', '0711443014', '0718525305', 'No,586/8,jayanthi road ,Athurugiriya ', 'sujithkumarajk@gmail.com', 0, 1, 'Maharagama', 'call-sinhala', 'Any time', 'Internet', 'My son next year  grade \r\n01.how to jonin your school ?', '2019-10-21 08:12:39'),
(170, 'ADM-MG_26', 'Mrs', 'Hansi', 'Munasinghe', 'Housewife', 'Mother', '0776063000', '0717732000', '1538/ 14 Katukurunda kottawa pannipitiya', 'nimaya1990@gmail.com', 1, 0, 'Maharagama', 'call-sinhala', '11', 'Internet', 'None', '2019-11-04 01:21:06'),
(171, 'ADM-MLB_3', 'Mr', 'Harendra', 'Jayasuriya', 'Management Service Officer (Government)', 'Father', '0112672539', '0717432045', '1087, 1st Lane, Zone 5, Millennium City, Athurugiriya', 'neharendraj@gmail.com', 1, 0, 'Malabe', 'email', '9 a.m - 5 p.m.', 'word of mouth', 'let me know the registration process and the payment details pls', '2019-11-05 11:46:47'),
(172, 'ADM-MG_27', 'Mr', 'KELUM PUSHPAKUMARA', 'PORAGE', 'ASSISSTANT VICE PRESIDENT', 'Father', '0112891669', '0773958871', '659/c,Galavilla rd.,Homagama', 'kelumpushpakumara.kp@gmail.com', 1, 0, 'Maharagama', 'call-english', '10.00am-11.00am', 'Professional recommendation', 'None', '2019-11-05 11:02:27'),
(173, 'ADM-MG_28', 'Mr', 'KELUM PUSHPAKUMARA', 'PORAGE', 'ASSISSTANT VICE PRESIDENT', 'Father', '0112891669', '0773958871', '659/c,Galavilla rd.,Homagama', 'kelumpushpakumara.kp@gmail.com', 1, 0, 'Maharagama', 'call-english', '10.00am-11.00am', 'Professional recommendation', 'None', '2019-11-05 11:02:29'),
(174, 'ADM-MG_29', 'Mr', 'Madura', 'Thewrapperuma', 'Army', 'Father', '0782049856', '0782049856', '646/1 A arawwala pannipitiya ', 'susaduranvan2010@gmail.com', 1, 0, 'Maharagama', 'call-sinhala', '12- 3', 'Professional recommendation', 'None', '2019-11-06 07:07:41'),
(175, 'ADM-MG_30', 'Mrs', 'Inoka Priyangani', 'Wadumethri', 'Commision Officer', 'Mother', '0113608734', '0718067462', '5C9/ Army, Homagama', 'ipwadu@gmail.com', 1, 0, 'Maharagama', 'call-sinhala', '5pm', 'word of mouth', 'None', '2019-11-07 04:58:26'),
(176, 'ADM-MG_31', 'Mrs', 'Sajeewanee', 'Korala Gamage Don', '', 'Mother', '0719545460', '0714273685', 'No:159,5th lane ,siddemulla,piliyandala', 'laniruwan2000@gmail.com', 1, 0, 'Maharagama', 'call-sinhala', 'Anytime', 'word of mouth', 'None', '2019-11-07 06:25:37'),
(177, 'ADM-MLB_4', 'Mrs', 'INDIKA', 'ADIKARI', 'ACCOUNTANT', 'Mother', '0115927771', '0768295719', '261/C, UDAYA MAWATHA, HEIYANTHUDUWA', 'indika@gasworld.lk', 0, 1, 'Malabe', 'email', '2.00 p.m', 'word of mouth', 'None', '2019-11-18 01:09:04'),
(178, 'ADM-BM_7', 'Mr', 'Chaminda', 'Mirando', 'General Manager', 'Father', '0112836298', '0776999411', '42/10, Kumbukgahapokuna Road, Udahamulla, Nugegod,', 'mirandoc@gmail.com', 1, 0, 'Battaramulla', 'call-english', 'Any time', 'word of mouth', 'None', '2019-11-19 11:09:21'),
(179, 'ADM-MG_32', 'Mrs', 'Ashela Nilmini', 'Loku Hewage', 'Computer Programmer', 'Mother', '0112881895', '0776742106', '27/2 sirieardene road Dehiwala', 'ashela@sjp.ac.lk', 0, 1, 'Maharagama', 'email', '10-11', 'word of mouth', 'None', '2019-11-21 10:11:22'),
(180, 'ADM-HW_8', 'Mrs', 'Hansi', 'Kapukatinage', '', 'Mother', '0000000000', '0712040344', 'No. 280,Ranasinghe mawatha,Yattowita,Thittapattara', 'hansianuththara89@gmail.com', 1, 0, 'Hanwella', 'call-sinhala', '9am to 9pm', 'word of mouth', 'None', '2019-11-22 07:41:33'),
(181, 'ADM-MLB_5', 'Mrs', 'Chathuri', 'Amaraperuma', 'House wife', 'Mother', '0112173537', '0729036787', '', 'kwsdesh@gmail.com', 0, 1, 'Malabe', 'email', 'during day time', 'Professional recommendation', 'send a brochure with details and fee structure', '2019-12-03 10:49:34'),
(182, 'ADM-MG_33', 'Mr', 'Dumith', 'Rupasinghe', 'Marketing Manager', 'Father', '0000000000', '0718734604', '806/4A, Henawatta Road, Kottawa South', 'dumith1974@outlook.com', 1, 1, 'Maharagama', 'call-sinhala', 'Any time', 'word of mouth', 'Need an appointment for a placement test', '2019-12-03 12:09:30'),
(183, 'ADM-MG_34', 'Mrs', 'Dilshi', 'Gamage', 'Housewife', 'Mother', '0710521819', '0714665124', '30/3,school lane,niwanthidiya,piliyandala', 'gamagedil@gmail.con', 1, 1, 'Maharagama', 'call-sinhala', '11 AM', 'Professional recommendation', 'None', '2019-12-03 12:44:49'),
(184, 'ADM-MG_35', 'Mrs', 'Malkanathi', 'Kariyawasam', '-', 'Mother', '0112779193', '0773532239', '245/2,Chandrawimala Mawatha, Thalapathpitiya', 'rstmalka@gmail.com', 1, 0, 'Maharagama', 'call-sinhala', '11 am', 'word of mouth', 'None', '2019-12-03 01:06:52'),
(185, 'ADM-HW_9', 'Mrs', 'Damayanthi', 'Peters', 'Housewife', 'Mother', '0000000000', '0779210505', 'No. 56/1, waragoda rd, bollathawa, kosgama', 'nliyanage931@gmail.com', 1, 0, 'Hanwella', 'call-sinhala', '24 hours', 'word of mouth', 'None', '2019-12-03 10:17:01'),
(186, 'ADM-BM_8', 'Mr', 'HARENDRA', 'JAYASURIYA', 'PUBLIC MANAGEMENT OFFICER (GOVERNMENT OFFICE)', 'Father', '0112672539', '0717432045', 'No: 1087, 1st Lane, Zone 5, Millennium City, Athurugiriya', 'neharendraj@gmail.com', 1, 0, 'Battaramulla', 'email', '10 a.m. - 6 p.m.', 'word of mouth', 'appreciate the details of the fees, class times and the text books need to be purchaesd', '2019-12-04 06:32:31'),
(187, 'ADM-MG_36', 'Mrs', 'Moulima', 'Senaderagee', '', 'Mother', '0112782022', '0773382314', '162/1 brahagmanagama pannipitiya ', 'perera.mashinka@gmail.com', 1, 0, 'Maharagama', 'call-english', '10am 6pm', 'Internet', 'None', '2019-12-05 03:00:08'),
(188, 'ADM-MLB_6', 'Mrs', 'Kasuri', 'Jayasekara', 'Teacher', 'Mother', '0112561713', '0759453452', '934/2B, Udawatta Road, Malabe', 'kasujay24@gmail.com', 1, 0, 'Malabe', 'call-english', '4pm', 'Internet', 'How can my child face a placement test? ', '2019-12-06 09:00:03'),
(189, 'ADM-MG_37', 'Mrs', 'Thilini', 'Jayakody', 'Managment assistant', 'Mother', '0112617629', '0718178856', '336 G, Ganewaththa, Mampe, Piliyandala', 'tsjayakody83@gmail.com', 1, 0, 'Maharagama', 'call-sinhala', '10.30am', 'word of mouth', 'None', '2019-12-07 03:07:40'),
(190, 'ADM-MG_38', 'Mr', 'JAYAMAL', 'PADMAKUMARA', 'BANKER', 'Father', '0112754324', '0712919586', 'NO 286 A,MAGAMMANA,HOMAGAMA', 'samithamal@gmail.com', 1, 0, 'Maharagama', 'call-english', 'ANY TIME', 'word of mouth', 'None', '2019-12-07 04:33:29'),
(191, 'ADM-BM_9', 'Mrs', 'Udeshika', 'Weerakoon', 'Accountancy', 'Mother', '0342256490', '0702696543', '86 D Kirigala Road , Handapangoda.', 'udeshika11685@gmail.com', 1, 0, 'Battaramulla', 'call-sinhala', '10.00Am-6.00 Pm', 'word of mouth', 'None', '2019-12-07 05:38:36'),
(192, 'ADM-MG_39', 'Mrs', 'Shiromani', 'Egodagamage', 'Teacher', 'Mother', '0705793342', '0774295774', '38/8, Wekada Rd, Malapalla, Kottawa', 'shiromaniegodagamage@yahoo.com', 1, 0, 'Maharagama', 'call-sinhala', '10 am - 4 pm', 'Publications', 'None', '2019-12-09 11:43:58'),
(193, 'ADM-GEN_4', 'Mr', 'Miraj', 'Galagamage', 'Pharmacist', 'Father', '0112855206', '0714453827', '227/8A,Temple Road,Uduwana,Homagama ', 'mmgalagamage2000@gmail.com', 0, 1, 'Maharagama, Battaramulla', 'call-sinhala', '5pm-6pm', 'Internet', 'None', '2019-12-09 01:18:49'),
(194, 'ADM-MG_40', 'Mr', 'Thanuja', 'Pathiraja', 'Software Engineer', 'Father', '0112612604', '0719300757', '135/21, C.P. De Silva Mawatha, Kaldemulla, Moratuwa', 'thanujapathiraja@gmail.com', 1, 0, 'Maharagama', 'call-english', '12.30 p.m.', 'word of mouth', 'None', '2019-12-09 03:17:16'),
(195, 'ADM-BM_10', 'Mr', 'kathri arachchi pinnawalage', 'sajeewa rathna kumara', 'business', 'Father', '0777514700', '0777514700', '189 residencies, 189/5a,  baseline road, dematagoda', 'kapsajeewarathnakumara@gmail.com', 1, 0, 'Battaramulla', 'call-english', 'sajeewa', 'Professional recommendation', 'None', '2019-12-10 11:16:03'),
(196, 'ADM-MG_41', 'Mr', 'Chamara', 'Disanayake', 'Engineer', 'Father', '0112173714', '0774805491', '53/7, Mullegama, Homagama', 'chamara.disanayake@gmail.com', 1, 0, 'Maharagama', 'email', '-', 'word of mouth', 'I have mentioned the grades as in 2019 - This year', '2019-12-11 12:08:56'),
(197, 'ADM-MG_42', 'Mrs', 'Nisansala', 'Samarakoon', 'Senior Software Engineer', 'Mother', '0112669598', '0772258524', '12/107, Gajaba Road, Borella, Col-08', 'nisansalas@scienter.lk', 1, 0, 'Maharagama', 'call-sinhala', 'After 10 a.m', 'word of mouth', 'I need to teach to my daughter from beginner level. So that\'s why I chose this institute. I want to admit my daughter to a classroom which have few no.of students.', '2019-12-12 12:05:33'),
(198, 'ADM-HW_10', 'Mr', 'Indila Sujith Prathapa', 'Horawala Mawathalage', 'quantity surveyor', 'Father', '0362237707', '0771353346', 'No-20/A, Halthota watta,Avissawella.', 'iprathapa@gmail.com', 0, 1, 'Hanwella', 'call-sinhala', '5.00 to 6 .00', 'word of mouth', 'None', '2019-12-15 09:42:27'),
(199, 'ADM-MG_43', 'Mrs', 'Ruvini', 'Wickramasinghe', 'lawyer', 'Mother', '0112848451', '0777751501', '280, Alhena Road, Siddhamulla, Piliyandala', 'ruvini.wickramasinghe@yahoo.com', 1, 0, 'Maharagama', 'call-english', '10. 00 a.m. to 6.00 p.m.', 'word of mouth', 'Hope you have an English speaking club and if so, really want to join my 2 children to it. ', '2019-12-15 07:13:10'),
(200, 'ADM-MLB_7', 'Mrs', 'SHIROMI PRIYADARSHANI', 'ELPITIYA BADALGE DONA', '', 'Mother', '0112750643', '0773594473', '292/6, PELENDAGODA ROAD, PANAGODA, HOMAGAMA', 'shiromi_27@yahoo.com', 1, 0, 'Malabe', 'call-sinhala', 'AFTER 10am', 'word of mouth', 'COULD YOU PLEASE KINDLY LET ME KNOW THE FEES?', '2019-12-16 11:04:13'),
(201, 'ADM-MG_44', 'Ms', 'priyadrshani', 'Hewa Thuiyappu Arachchilage Aujeewa', 'Agriculture Instructor', 'Mother', '0112752600', '0716900881', '713/7, 7th Lane, Romiyel Mw, Panagoda, Homagama', 'saptaramd@gmail.com', 1, 0, 'Maharagama', 'call-sinhala', '12.00-1.00', 'word of mouth', 'None', '2019-12-18 12:40:55'),
(202, 'ADM-MG_45', 'Ms', 'priyadrshani', 'Hewa Thuiyappu Arachchilage Aujeewa', 'Agriculture Instructor', 'Mother', '0112752600', '0716900881', '713/7, 7th Lane, Romiyel Mw, Panagoda, Homagama', 'saptaramd@gmail.com', 1, 0, 'Maharagama', 'call-sinhala', '12.00-1.00', 'word of mouth', 'None', '2019-12-18 12:41:01'),
(203, 'ADM-MG_46', 'Mr', 'Ajith', 'Ratnayake', 'Asst Manager', 'Father', '0112189289', '0714933845', '1561/9, katukurunda, Kottawa, Pannipitiya.', 'ajithr@slt.com.lk', 1, 0, 'Maharagama', 'call-sinhala', 'any', 'word of mouth', 'None', '2019-12-18 04:24:44'),
(204, 'ADM-MLB_8', 'Mrs', 'Udeni', 'Sebastian', 'house wife', 'Mother', '0112540109', '0728499524', '1/3B9, kadirana watta, ekamuthupura, mattakkuliya, colombo - 15', 'prabuddhaasanka@gmail.com', 1, 0, 'Malabe', 'call-sinhala', '10 am to 7 pm', 'Internet', 'when is your next batch start and also i want to know which level will be suitable for my child', '2019-12-20 10:30:55'),
(205, 'ADM-MG_47', 'Mrs', 'Charani', 'Peiris', 'Parliamentary Officer', 'Mother', '0112612604', '0713547202', '135/21 C.P. De Silva Mawatha, Kaldemulla, Moratuwa', 'charani83@gmail.com', 1, 0, 'Maharagama', 'email', '10.00 a.m', 'word of mouth', 'None', '2019-12-31 09:37:11'),
(206, 'ADM-MG_48', 'Mr', 'Chandika', 'Mahatantila', 'Media', 'Father', '0714869831', '0767915831', 'No 39/8, Dinamina Mawatha, Kirigampamunuwa, Polgasowitta.', 'cmahatantila@gmail.com', 1, 0, 'Maharagama', 'email', '9.30', 'Publications', 'No', '2019-12-31 01:48:24'),
(207, 'ADM-MG_49', 'Mrs', 'Dilhani', 'Udawela', 'Development Officer', 'Mother', '0112780695', '0753593171', '193/55,2nd Lana, Prasanna Uyana, Mattegoda', 'dilhani@trc.gov.lk', 1, 1, 'Maharagama', 'call-sinhala', '3 pm', 'Publications', 'None', '2020-01-02 12:45:48'),
(208, 'ADM-MG_50', 'Mrs', 'Eshanika', 'Gunasekara', 'Teacher', 'Mother', '0112850949', '0721058044', '286/3, mahalwarawa road , pannipitiya', 'girleshi@yahoo.com', 1, 0, 'Maharagama', 'call-english', 'Any time', 'Publications', 'How can I enrol my son and how much is the course fee?', '2020-01-05 04:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission_child`
--

CREATE TABLE `tbl_admission_child` (
  `child_id` int(255) NOT NULL,
  `parent_id` int(255) NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `child_surname` varchar(255) NOT NULL,
  `child_preff_name` varchar(1000) NOT NULL,
  `child_school` varchar(1000) NOT NULL,
  `child_dob` date NOT NULL,
  `child_gender` varchar(100) NOT NULL,
  `child_grade` varchar(255) NOT NULL,
  `child_marks` varchar(1000) NOT NULL,
  `child_preff_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admission_child`
--

INSERT INTO `tbl_admission_child` (`child_id`, `parent_id`, `child_name`, `child_surname`, `child_preff_name`, `child_school`, `child_dob`, `child_gender`, `child_grade`, `child_marks`, `child_preff_day`) VALUES
(145, 111, 'Sanithu', 'Laksithum', 'Laksithum', 'Subharathi Mahamathya Maha Vidyalaya - Godagama', '2012-04-18', 'Male', 'Grade 2', '', 'Saturday Morning, Saturday Afternoon, Saturday Evening'),
(146, 111, 'Navindu', 'Laknethum', 'Laknethum', 'Esther International Preschool - Meegoda', '2014-10-26', 'Male', 'Preschool', '', 'Saturday Morning, Saturday Afternoon, Saturday Evening'),
(148, 113, 'Randiv', 'Samarakoon', 'Randiv', 'Isipathana College ', '2012-06-28', 'Male', '2', '100', 'Saturday Morning'),
(149, 113, 'Thenuja', 'Samarakoon', 'Thenuja', 'Shinyo_en lanka free nursery School ', '2014-07-07', 'Male', '', '', 'Saturday Morning'),
(150, 114, 'Yemith', 'De Silva', 'Yemith', 'Louvre College - Nursery', '2014-10-23', 'Male', 'Nursery', '', 'Saturday Morning'),
(151, 115, 'Lithuli', 'Sethunga', 'Lithuli', 'Anula vidyalaya', '2010-08-03', 'Female', '4', '90', 'Saturday Morning'),
(152, 116, 'Sandil Vinvidu', 'Liyanawaduge', 'Sandil', 'Kids in action ', '2014-07-02', 'Male', '', '', 'Monday, Tuesday, Wednesday, Thursday, Friday'),
(153, 117, 'Akindu', 'Karunathilaka', 'Akindu', 'Spring field international ', '2014-09-13', 'Male', 'Upper kindergarten', '', 'Saturday Morning'),
(154, 117, 'Sanuri', 'Galagama arachchi', 'Sanuri', 'Spring field international', '2015-12-17', 'Female', 'Lower kindergarten', '', 'Saturday Morning'),
(155, 118, 'Ayuni', 'Thuhansa', 'Ayuni', 'Montessori', '2014-09-28', 'Female', '', '', 'Saturday Evening'),
(156, 119, 'Kenul Methdinu', 'Padukkage Don', 'Kenul', 'Guidence Internation School', '2015-10-03', 'Male', 'Nursery', '', 'Thursday'),
(157, 120, 'Suvin', 'Livinis', 'Suvin', 'NSEF Nursery', '2015-08-30', 'Male', '', '', 'Saturday Morning'),
(158, 121, 'Garuth', 'Hewaduli', 'Garuth', 'Kids in action', '2017-04-22', 'Male', 'Nursery', '', 'Thursday'),
(163, 126, 'Senula', 'Rajakaruna', 'Senula', 'Asian international school baththaramulla', '2014-09-11', 'Male', 'Kindergarten', '', 'Wednesday'),
(167, 130, 'ANUK', 'POTHUPITIYA', 'VISMITHA', 'SANGARAMA PRIMARY SCHOOL', '2011-08-22', 'Male', 'GRADE3', '', 'Saturday Afternoon'),
(168, 131, 'Ogeeshya', 'Karunaratne', 'Ogeeshya', 'Royal Institute ', '2015-05-29', 'Male', 'Pre Grade', '', 'Saturday Morning, Saturday Afternoon, Saturday Evening'),
(169, 131, 'Omeeshya', 'Karunaratne', 'Omeeshya', 'Royal Institute ', '2014-05-29', 'Female', 'Pre Grade', '', 'Saturday Morning, Saturday Afternoon, Saturday Evening'),
(170, 132, 'Kithmi Akeesha', 'Mirissa Malge', 'Akeesha', 'Christ king College - Pannipitiya', '2012-08-13', 'Female', '2', '95', 'Saturday Afternoon, Saturday Evening'),
(171, 133, 'LONINDU', 'LOKKU MARAKKALAGA CHENITHA', 'CHENITHA', '', '2015-11-24', 'Male', 'PRE SCHOOL', '', 'Friday, Saturday Morning'),
(172, 133, 'sehansa', 'loku marakkalage saheli', 'sehansa', 'Ananda Balika  maradana', '2009-01-12', 'Female', 'grade 06', '', 'Friday'),
(173, 134, 'Tharukshie', 'Jayasena', 'Tharukshie', 'Anula vidyalaya', '2011-07-28', 'Female', '3', '', 'Friday, Saturday Afternoon, Saturday Evening'),
(174, 134, 'shenal', 'Jayasena', 'Shenal', 'St.peters  college ', '2013-06-10', 'Male', '1', '', 'Friday, Saturday Afternoon, Saturday Evening'),
(175, 135, 'Suvisna Dahamdee', 'Wijethilaka', 'Suvisna', 'Sri Sumana Maha Vidyalaya', '2010-03-15', 'Female', '4', '', 'Saturday Evening'),
(176, 136, 'Kulani Visaka Wijerathne', 'Herath Pathirannahalage', 'Kulani Visaka', 'Visaka College Colombo', '2000-06-04', 'Female', 'Passed Advance Level', '58', 'Monday'),
(177, 137, 'Usara Rajin', 'Wijethilaka', 'Usara', 'Sri Sumana Maha Vidyalaya', '2012-10-05', 'Male', '2', '', 'Saturday Evening'),
(178, 138, 'Isuri chamathka', 'Yasarathna', 'Isuri', 'Rahula balika vidyalaya. Malabe', '2008-02-11', 'Female', '6', '97', 'Thursday, Saturday Morning, Saturday Afternoon, Saturday Evening'),
(179, 138, 'Vinuthi dewansa', 'Yasarathna', 'Vinuthi', 'Sri sangamiththa balika vidyalaya. Col. 10', '2013-01-02', 'Female', '2', '', 'Thursday, Saturday Morning, Saturday Afternoon, Saturday Evening'),
(180, 139, 'SENUTH GANUKA', 'RATHNAMALALA', 'GANUKA', 'ANANDA COLLEGE ,COLOMBO 10', '2009-01-26', 'Male', 'GRADE 6', '72', 'Saturday Evening'),
(181, 140, 'CHANITHU', 'RANDIRA', 'RANDIRA', 'D S SENANAYAKE COLLEGE- COLOMBO -07', '2013-10-01', 'Male', 'GRADE 1', '', 'Saturday Afternoon, Saturday Evening'),
(182, 141, 'Sethumlee Dahamsa', 'Kumarapperuma Arachchige', 'Sethumlee', 'Louvre College', '2013-05-30', 'Female', 'Grade 1', '100', 'Saturday Morning'),
(183, 141, 'Rithuli Sehansa', 'Kumarapperuma Arachchige', 'Rithuli', 'Louvre International School', '2015-06-28', 'Female', 'Nursery', '', 'Saturday Morning'),
(185, 143, 'Mihini Linara', 'Manohar', 'Mihini', 'Christ King Pannipitiya', '2009-10-15', 'Female', '5', '94', 'Tuesday, Thursday, Friday, Saturday Morning'),
(186, 144, 'Boomi Sathsarani', 'de silva', 'Boomi', 'Jayawardanapura Balika Vidyalaya', '2008-08-03', 'Female', '5', '94', 'Monday, Wednesday, Thursday, Friday, Saturday Morning, Saturday Afternoon, Saturday Evening'),
(187, 145, 'K K Januth', 'Thamira', 'Januth', 'Gunasekara Vidyalaya, Athurugiriya', '2009-02-21', 'Male', '5', '95', 'Monday, Tuesday, Saturday Morning, Saturday Afternoon, Saturday Evening'),
(189, 147, 'Jethya Senomee', 'Amarasinghe', 'Jethya', 'Vidyakara balika vidyalaya', '2011-06-19', 'Female', '3', '80', 'Saturday Morning'),
(191, 149, 'Savithi', 'Panapitiya', 'Savithi', 'Nursery from 2020..York International ', '2016-08-11', 'Female', '', '', 'Saturday Morning'),
(200, 158, 'Thisuni Senethma', 'Karunarathna', 'Thisuni', 'Seethawaka National School Avissawella', '2004-06-24', 'Female', '10', '', 'Saturday Morning'),
(201, 159, 'Thisuni Senethma', 'Karunarathna', 'Thisuni', 'Seethawaka National School Avissawella', '2004-06-24', 'Female', '10', '', 'Saturday Morning'),
(202, 160, 'Vihansie Okithma', 'Galabada', 'Vihansie', 'Musaeus College', '2012-03-01', 'Female', '2', '97', 'Saturday Evening'),
(203, 161, 'Anadi', 'Hikkaduwa', 'Anadi', 'St.Josephs&#39; Girl&#39;s School', '2007-12-27', 'Female', 'Grade 7', '82', 'Saturday Morning'),
(204, 162, 'Noveesha', 'Gunasena', 'Noveesha', 'Sri Sangamitta Balika Vidyalaya - Colombo 10', '2009-05-11', 'Female', '5', '85', 'Saturday Afternoon'),
(205, 162, 'Thimina', 'Gunasena', 'Thimina', 'Ananda Shastralaya - Kotte', '2006-12-17', 'Male', '8', '85', 'Saturday Afternoon'),
(206, 163, 'Dilen', 'Gunarathne', 'Dilen', 'Nursery(Linfield international college )', '2015-01-17', 'Male', 'Upper grade(Nursery)', '', 'Saturday Morning, Saturday Evening'),
(207, 164, 'Methma', 'Habarakada', 'Mihinadee', 'Taxila  primery collage ', '2009-05-31', 'Female', '5', '96', 'Saturday Evening'),
(208, 165, 'Sithuki', 'Weliwaththa', 'Sithuki Damsari Perera', 'Dharmapala Vidyalaya Pannipitiya', '2009-10-01', 'Female', '05', '88', 'Monday, Tuesday, Thursday, Friday'),
(209, 165, 'Mosandi', 'Weliwaththa', 'Mosandi Uthsari Perera', '', '2014-08-27', 'Female', 'Pre School', '', 'Monday, Tuesday, Wednesday, Thursday, Friday'),
(210, 166, 'Duleni Sanvidu', 'Ranaweera', 'Dulein', 'ST Jhone college Nugegoda ', '2009-12-19', 'Male', '', '', 'Monday, Tuesday, Wednesday, Thursday, Saturday Evening'),
(211, 167, 'Bavani', 'Vihara', 'Bavani', 'Rahula Balika Vidyalaya - Malabe', '2008-06-21', 'Female', '06', '65', 'Saturday Morning, Saturday Afternoon, Saturday Evening'),
(212, 168, 'Gavin', 'Rajapakse', 'Gavin', 'Lyceum International School', '2011-09-12', 'Male', '4', '96', 'Saturday Morning'),
(213, 168, 'Dilki Amaya', 'Rajapakse', 'Dilki', 'Lyceum International school', '2015-04-16', 'Female', 'Pre grade', '', 'Saturday Morning'),
(214, 169, 'Senul indiv', 'Jayawickrama kananamge', 'Senul', 'Subarathi maha vidyalaya ', '2014-03-31', 'Male', '01', '', 'Saturday Evening'),
(215, 170, 'Denuwan Nehansa', 'Munasinghe', 'Denuwan', 'Wesley College', '2008-12-26', 'Male', '6', '90', 'Saturday Morning, Saturday Afternoon, Saturday Evening'),
(216, 170, 'Dewmin Nuhansa', 'Munasinghe', 'Dewmin', 'Wesley College', '2011-05-06', 'Male', '3', '89', 'Saturday Morning, Saturday Afternoon, Saturday Evening'),
(217, 171, 'Sandasi', 'Jayasuriya', 'Sandasi', 'Oruwala vidyalaya', '2013-09-08', 'Female', '1', '', 'Saturday Morning'),
(218, 172, 'SENULA GIHEIN', 'PORAGE', 'SENULA', 'WP/HO/HOMAGAMA M.V.', '2009-11-11', 'Male', '5', '86', 'Monday'),
(219, 173, 'SENULA GIHEIN', 'PORAGE', 'SENULA', 'WP/HO/HOMAGAMA M.V.', '2009-11-11', 'Male', '5', '86', 'Monday'),
(220, 174, 'Susadu', 'Thewrapperuma', 'Ranvan', 'St.jhon’s nugegoda ', '2010-01-13', 'Male', '5', '98', 'Saturday Morning'),
(221, 175, 'Thinuri Gavesha', 'Rajapaksha', 'Thinuri Gavesha', 'Musaeus College', '2009-06-05', 'Female', '05', '80', 'Saturday Morning, Saturday Afternoon, Saturday Evening'),
(222, 175, 'Chenuka Lakdinu', 'Rajapaksha', 'Chenuka Lakdinu', 'Dharmapala Vidyalaya Panniptiya', '2012-09-04', 'Male', '02', '76', 'Saturday Morning, Saturday Afternoon, Saturday Evening'),
(223, 176, 'Timon', 'Ginialuge', 'Timon', 'Christ king nursery,pannipitiya', '2015-11-06', 'Male', '', '', 'Saturday Morning, Saturday Afternoon'),
(224, 177, 'YENULA', 'ABEYWARNA', 'YENULA', 'YOSHIDA SHOKANJI INTERNATIONAL SCHOOL', '2013-11-15', 'Male', 'GRADE 1', '', 'Saturday Afternoon'),
(225, 178, 'Vethmi', 'Mirando', 'Vethmi', 'Sirimavo Bandaranayeka  Vidyalaya -  Colombo 07', '2009-04-28', 'Female', 'Grade - 5', '98', 'Friday, Saturday Morning'),
(226, 179, 'Dulnitha sayul', 'peiris', 'Dulnitha', 'thurstern collage', '2016-01-24', 'Male', '1', '', 'Saturday Morning'),
(227, 180, 'Mihinula', 'Suraweera Arachchige Don', 'Insith', 'Nursery', '1992-10-12', 'Male', '', '', 'Saturday Morning'),
(228, 181, 'Roshith', 'Ranasinghe', 'Roshith', 'Habarakada Primary School', '2009-10-19', 'Male', '5', '97', 'Monday, Tuesday, Wednesday, Thursday, Friday'),
(229, 182, 'Yunila', 'Rupasinghe', 'Yunila', 'Dharmapala Vidyalaya, Pannipitiya', '2007-04-08', 'Male', '8', '87', 'Tuesday, Wednesday, Friday, Saturday Evening'),
(230, 183, 'Dilen', 'Gunarathne', 'Dilen', 'Linfield international college ', '2015-01-17', 'Male', '', '', 'Saturday Morning'),
(231, 184, 'Thenumi Dinethma', 'Wickramaarachchi', 'Thenymi Dinethma', 'Samudradevi Balika Vidyalaya', '2009-07-02', 'Female', '6', '96', 'Monday, Tuesday, Wednesday, Thursday'),
(232, 184, 'Vimath Sehansa', 'Wickramaarachchi', 'Vimath Sehansa', 'Weslye College', '2007-08-27', 'Male', '8', '67', 'Monday, Tuesday, Wednesday, Thursday'),
(233, 185, 'Dinuli', 'Liyanage', 'Dinuli', 'Bollathawa secondary school ', '2013-01-24', 'Female', '3', '80', 'Friday'),
(234, 186, 'SANDASI', 'JAYASURIYA', 'SANDASI', 'ORUWALA VIDYALAYA, ATHURUGIRIYA', '2013-09-08', 'Female', '01', '', 'Saturday Morning'),
(235, 187, 'Sahel', 'Jayakickrama kankanamaracchige', 'Dikon', 'Nursery', '2014-05-31', 'Male', '', '', 'Monday, Saturday Morning'),
(236, 188, 'Ometh', 'Gunawardena', 'Ometh Gunawardena', 'Dharmapala Vidyalaya', '2013-08-28', 'Male', '2', '', 'Saturday Evening'),
(237, 188, 'Muthuki', 'Gunawardena', 'Muthuki Gunawardena', 'Sineli pre school', '2016-01-26', 'Female', '', '', 'Saturday Evening'),
(238, 189, 'Anadi', 'Hikkaduwa', 'Anadi', 'St jasephs&#39; girls school nugegoda', '2007-12-27', 'Female', '8', '89', 'Saturday Morning'),
(239, 190, 'NETHMIKA', 'PADMAKUMARA', 'NETHMIKA', 'ROYAL COLLEGE,COLOMBO', '2006-09-01', 'Male', '9', '82', 'Saturday Morning, Saturday Evening'),
(240, 190, 'MINDINU', 'PADMAKUMARA', 'MINDINU', 'ROYAL COLLEGE,COLOMBO', '2007-12-28', 'Male', '8', '60', 'Saturday Morning, Saturday Evening'),
(241, 191, 'Senethma', 'Senanayake', 'Senanayakege dona Senethma Diwyangi', 'K/Horana Royall colledge ', '2009-02-26', 'Female', 'Grade 6', '', 'Saturday Morning'),
(242, 192, 'Yenuli Binanga Yethmini', 'Katuwanthuduwe Manage', 'Yethmini', 'Wp/Jp/ Ananda vidyalaya, Kottawa', '2011-05-20', 'Female', 'Grade 4 (2020)', '100', 'Tuesday, Wednesday, Thursday, Friday'),
(243, 193, 'Movindhie', 'Galagamage', 'Movindhie', 'Devi Balika Vidyalaya ', '2000-04-15', 'Female', 'Did a/levels in 2019', '85', 'Monday, Tuesday, Wednesday, Thursday, Friday, Saturday Morning, Saturday Afternoon, Saturday Evening'),
(244, 194, 'Geena', 'Pathiraja', 'Geena', 'Our Lady Of Victories Convent Moratuwa', '2014-03-28', 'Female', '1', '', 'Saturday Evening'),
(245, 195, 'kathri Karachi pinnawalage', 'sasath sandira kathriarachchi', 'sasath', 'Nalanda college ', '2009-12-05', 'Male', '6', '68', 'Saturday Evening'),
(246, 196, 'Isindu Manujaya', 'Disanayake', 'Isindu', 'S Thomas&#39; College Mt', '2006-10-17', 'Male', '9', '75', 'Monday, Wednesday'),
(247, 196, 'Pasindu Eranjaya', 'Disanayake', 'Pasindu', 'WP/JAYA/Kottawa Ananda Maha Vidyalaya', '2011-04-23', 'Male', '3', '', 'Monday, Wednesday, Friday'),
(248, 197, 'Neili', 'Devaraja Prasath', 'D.P.Neili Methsandi Nuthara', 'St.Joseph Girls School Nugegoda.', '2013-07-11', 'Female', '1', '', 'Friday, Saturday Morning'),
(249, 198, 'Nilaslee Tashelle Prathapa', 'Horawala Mawathalage', 'Tashelle', '', '2016-03-01', 'Female', '', '', 'Saturday Morning'),
(250, 199, 'Buthmin', 'Hettiarachchi', 'Buthmin', 'D.S.Senanayake.college colombo 7', '2003-04-22', 'Male', '2019 After O/l', '86', 'Monday, Tuesday, Wednesday, Thursday, Friday, Saturday Morning, Saturday Afternoon, Saturday Evening'),
(251, 199, 'Muthuli', 'Hettiarachchi', 'Muthuli', 'Sirimavo Bandaranayake Vidyalaya Colombo 7', '2007-09-10', 'Female', '8', '94', 'Saturday Morning'),
(252, 200, 'YENUKA DULMIRA', 'LOKU ACHARIGE', 'YENUKA', 'WP/HO SUBHARATHI MAHAMATHYA MAHA VIDYALAYA', '2013-01-10', 'Male', 'GRADE 2', '', 'Friday, Saturday Morning'),
(253, 201, 'Gunathilaka', 'Doraymuray Badalge Dewni Hiranya', 'Dewni', 'Current School', '2003-06-07', 'Female', 'Grade 11', '78', 'Saturday Morning'),
(254, 202, 'Gunathilaka', 'Doraymuray Badalge Dewni Hiranya', 'Dewni', 'Current School', '2003-06-07', 'Female', 'Grade 11', '78', 'Saturday Morning'),
(255, 203, 'Shanela', 'Ratnayake', 'Shanela', 'st.joseph&#39;s Girls School Nugegoda', '2013-07-01', 'Female', '1', '', 'Saturday Evening'),
(256, 204, 'avishka', 'warnakulasuriya', 'avishka', 'st. Anthony&#39;s Balika maha vidyalaya', '2003-05-22', 'Female', '11', '63', 'Monday, Tuesday, Wednesday, Thursday, Friday, Saturday Morning'),
(257, 205, 'Geena', 'Pathiraja', 'Geena', 'Our Lady of Victories Convent Moratuwa', '2014-03-28', 'Female', '1', '', 'Saturday Morning'),
(258, 206, 'Kumila Jayameth', 'Mahatantila', 'Jayameth', 'Dharmapala Vidyalaya - Pannipitiya', '2010-03-24', 'Male', '5', '', 'Saturday Afternoon'),
(259, 207, 'Binara', 'Udawela', 'Binara', 'D.S.senanayaka College, colombo', '2003-09-05', 'Male', 'Grade 12', '75', 'Monday'),
(260, 208, 'Vithum Deenuja', 'Dharmarathna', 'Vithum', 'Vidura College', '2013-08-28', 'Male', 'Grade 2', '85', 'Tuesday, Thursday, Saturday Morning, Saturday Afternoon, Saturday Evening');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission_tkt`
--

CREATE TABLE `tbl_admission_tkt` (
  `student_id` int(155) NOT NULL,
  `student_title` varchar(300) NOT NULL,
  `student_name` varchar(500) NOT NULL,
  `student_surname` varchar(500) NOT NULL,
  `student_dob` date NOT NULL,
  `student_landline` varchar(100) NOT NULL,
  `student_mobile` varchar(100) NOT NULL,
  `student_address` varchar(300) NOT NULL,
  `student_email` varchar(300) NOT NULL,
  `student_pre_con_time` varchar(100) NOT NULL,
  `student_pre_con_method` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL,
  `know_about_us` varchar(400) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admission_tkt`
--

INSERT INTO `tbl_admission_tkt` (`student_id`, `student_title`, `student_name`, `student_surname`, `student_dob`, `student_landline`, `student_mobile`, `student_address`, `student_email`, `student_pre_con_time`, `student_pre_con_method`, `reg_date`, `know_about_us`, `message`) VALUES
(12, 'Mrs', 'Buddhi', 'Matharage', '1988-10-18', '0112892193', '0772938782', '451/2,Pitipana South, Rideemudala,Homagama ', 'nuwan.hewaduli@gmail.com', '11am', 'email', '2019-09-14 11:00:00', 'Internet', 'I want to know the course fees'),
(13, 'Mr', 'Sritharan', 'Sockali gam', '1985-09-30', '0522223712', '0789025573', 'St,Leonard\'s Estate\r\nHalgaranoya', 'bingo.sri3@gmail.com', '8.00 -2.00', 'email', '2019-09-14 12:00:00', 'Professional recommendation', 'None'),
(15, 'Mr', 'Rajith', 'Ranasinghe', '1975-05-26', '0112893689', '0777393023', '24/8, Munasinghe Lane, 2nd Galavilawatta, Homagama ', 'rajithrana@gmail.com', 'Any', 'call', '2019-09-14 13:00:00', 'word of mouth', 'Want to know about placement test for kids targeting Cambridge exams '),
(16, 'Mr', 'Wasantha', 'Sri Gamage', '1985-12-18', '0112330145', '0766301941', 'No.34, Narahenpita Road, Nawala', 'srigamagewasantha@gmail.com', '11 a.m.', 'email', '2019-09-15 14:00:00', 'Internet', 'None'),
(17, 'Ms', 'Gimhani', 'Elvitigala', '1997-05-27', '0766147604', '0766147604', '759/2 Samagi Mawatha,\r\nErrawwala \r\nPannipitiya', 'gimhani.19975@gmail.com', '10am to 6pm', 'call', '2019-10-10 05:54:23', 'word of mouth', 'None'),
(18, 'Mrs', 'Nayomi', 'Hettiarachchi', '2015-01-05', '0715902665', '0779406476', 'No.197/1,maldeniya watta,arawwala,pannipitiya', 'lakmalinayomi13@yahoo.com', 'Working hours 8am to 9pm', 'call', '2019-11-23 04:55:11', 'Publications', 'Register my child to your college '),
(19, 'Mrs', 'Nayomi', 'Hettiarachchi', '2015-01-05', '0715902665', '0779406476', 'No.197/1,maldeniya watta,arawwala,pannipitiya', 'lakmalinayomi13@yahoo.com', 'Working hours 8am to 9pm', 'call', '2019-11-23 04:55:17', 'Publications', 'Register my child to your college '),
(20, 'Mr', 'Kuchila kethmina', 'Kodagidaarachchi', '2015-01-05', '0715902665', '0779406476', 'No 197/1,Maldeniya watta,arawwala ,pannipitiya', 'lakmalinayomi13@yahoo.com', '8 am to 10 pm', 'call', '2019-12-06 12:38:21', 'Publications', 'I need to register english course in maharagama branch'),
(21, 'Mr', 'Kuchila kethmina', 'Kodagidaarachchi', '2015-01-05', '0715902665', '0779406476', 'No 197/1,Maldeniya watta,arawwala ,pannipitiya', 'lakmalinayomi13@yahoo.com', '8 am to 10 pm', 'call', '2019-12-06 12:38:24', 'Publications', 'I need to register english course in maharagama branch'),
(22, 'Mr', 'Asel', 'De Silva', '2015-09-04', '0362254910', '0772980867', 'No. 245/2/2\r\nKelvin Garden\r\nBoralugoda\r\nKosgama', 'thushanthamalde@gmail.com', '6pm', 'email', '2019-12-11 07:47:20', 'press advert', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE `tbl_batch` (
  `batch_id` int(11) NOT NULL,
  `batch_name` varchar(255) NOT NULL,
  `batch_level` varchar(255) NOT NULL,
  `batch_day` varchar(255) NOT NULL,
  `batch_teacher_id` varchar(255) NOT NULL,
  `batch_assisting_teacher_id` int(11) NOT NULL,
  `batch_tute_number` int(11) NOT NULL,
  `batch_status` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`batch_id`, `batch_name`, `batch_level`, `batch_day`, `batch_teacher_id`, `batch_assisting_teacher_id`, `batch_tute_number`, `batch_status`, `branch_id`, `user_id`) VALUES
(1, 'MG_C1', 'Level 03', 'Monday', '40', 0, 41, 1, 1000, 1),
(2, 'MG_C2', 'Level 02', 'Monday', '105', 0, 30, 1, 1000, 1),
(3, 'MG_C3', 'Level 02', 'Monday', '71', 0, 28, 1, 1000, 1),
(4, 'MG_C4', 'Kindergarten', 'Monday', '107', 0, 25, 1, 1000, 1),
(5, 'MG_C5', 'Pre School', 'Monday', '91', 0, 45, 1, 1000, 1),
(6, 'MG_C6', 'Level 03', 'Tuesday', '105', 0, 18, 1, 1000, 1),
(7, 'MG_C7', 'Level 04', 'Tuesday', '103', 0, 8, 1, 1000, 1),
(8, 'MG_C8', 'Level 04', 'Tuesday', '40', 0, 40, 1, 1000, 1),
(9, 'MG_C9', 'Level 05', 'Tuesday', '91', 0, 38, 1, 1000, 1),
(10, 'MG_C10', 'Level 02', 'Tuesday', '38', 0, 0, 0, 1000, 1),
(11, 'MG_C11', 'Level 01', 'Tuesday', '41', 0, 35, 1, 1000, 1),
(12, 'MG_C12', 'KET', 'Tuesday', '108', 0, 6, 1, 1000, 1),
(13, 'MG_C13', 'Level 04', 'Wednesday', '71', 0, 3, 1, 1000, 1),
(14, 'MG_C14', 'KET', 'Wednesday', '110', 0, 36, 1, 1000, 1),
(15, 'MG_C15', 'FCE', 'Wednesday', '86', 0, 52, 1, 1000, 1),
(16, 'MG_C16', 'Level 03', 'Wednesday', '105', 0, 7, 1, 1000, 1),
(17, 'MG_C17', 'Level 01', 'Wednesday', '64', 0, 5, 0, 1000, 1),
(18, 'MG_C18', 'Level 04', 'Wednesday', '40', 0, 33, 1, 1000, 1),
(19, 'MG_C19', 'Pre School Junior', 'Wednesday', '107', 0, 14, 1, 1000, 1),
(20, 'MG_C20', 'Level 02', 'Thursday', '105', 0, 8, 1, 1000, 1),
(21, 'MG_C21', 'Level 02', 'Thursday', '27', 0, 6, 1, 1000, 1),
(22, 'MG_C22', 'Level 03', 'Thursday', '77', 0, 17, 1, 1000, 1),
(23, 'MG_C23', 'Level 04', 'Thursday', '91', 0, 8, 1, 1000, 1),
(24, 'MG_C24', 'PET', 'Thursday', '44', 0, 38, 1, 1000, 1),
(25, 'MG_C25', 'Level 05', 'Friday', '103', 0, 3, 1, 1000, 1),
(26, 'MG_C26', 'PET', 'Friday', '110', 0, 25, 1, 1000, 1),
(27, 'MG_C27', 'FCE', 'Friday', '86', 0, 45, 1, 1000, 1),
(28, 'MG_C28', 'Level 05', 'Friday', '77', 0, 29, 1, 1000, 1),
(29, 'MG_C29', 'Level 02', 'Friday', '71', 0, 14, 1, 1000, 1),
(30, 'MG_C30', 'PET', 'Friday', '108', 0, 9, 1, 1000, 1),
(31, 'MG_C31', 'Pre School', 'Friday', '92', 0, 20, 1, 1000, 1),
(32, 'MG_C32', 'Level 03', 'Saturday M', '27', 0, 7, 1, 1000, 1),
(33, 'MG_C33', 'Level 04', 'Saturday M', '103', 0, 30, 1, 1000, 1),
(34, 'MG_C34', 'Level 05', 'Saturday M', '108', 0, 36, 1, 1000, 1),
(35, 'MG_C35', 'KET', 'Saturday M', '40', 0, 31, 1, 1000, 1),
(36, 'MG_C36', 'Level 01', 'Saturday M', '92', 0, 30, 1, 1000, 1),
(37, 'MG_C37', 'FCE', 'Saturday M', '86', 0, 23, 1, 1000, 1),
(38, 'MG_C38', 'Level 01', 'Saturday M', '71', 0, 17, 1, 1000, 1),
(39, 'MG_C39', 'Level 02', 'Saturday M', '91', 0, 40, 1, 1000, 1),
(40, 'MG_C40', 'KET', 'Saturday M', '77', 0, 47, 1, 1000, 1),
(41, 'MG_C41', 'Level 01', 'Saturday M', '41', 0, 16, 1, 1000, 1),
(42, 'MG_C42', 'PET', 'Saturday M', '110', 0, 26, 1, 1000, 1),
(43, 'MG_C43', 'KET', 'Saturday A', '110', 0, 13, 1, 1000, 1),
(44, 'MG_C44', 'Level 04', 'Saturday A', '29', 0, 0, 0, 1000, 1),
(45, 'MG_C45', 'Level 02', 'Saturday A', '99', 0, 19, 1, 1000, 1),
(46, 'MG_C46', 'Level 02', 'Saturday A', '91', 0, 32, 1, 1000, 1),
(47, 'MG_C47', 'Level 03', 'Saturday A', '41', 0, 13, 1, 1000, 1),
(48, 'MG_C48', 'Level 04', 'Saturday A', '108', 0, 29, 1, 1000, 1),
(49, 'MG_C49', 'Level 02', 'Saturday A', '72', 0, 5, 1, 1000, 1),
(50, 'MG_C50', 'Level 03', 'Saturday A', '103', 0, 38, 1, 1000, 1),
(51, 'MG_C51', 'Level 02', 'Saturday A', '41', 0, 7, 0, 1000, 1),
(52, 'MG_C52', 'Level 01', 'Saturday E', '71', 0, 41, 1, 1000, 1),
(53, 'MG_C53', 'Level 01', 'Saturday E', '74', 0, 11, 0, 1000, 1),
(54, 'MG_C54', 'Level 02', 'Saturday E', '91', 0, 34, 1, 1000, 1),
(55, 'MG_C55', 'Level 03', 'Saturday E', '108', 0, 17, 1, 1000, 1),
(56, 'MG_C56', 'Level 02', 'Saturday E', '40', 0, 40, 0, 1000, 1),
(57, 'MG_C57', 'PET', 'Saturday E', '40', 0, 2, 1, 1000, 1),
(58, 'MG_C58', 'Level 05', 'Saturday E', '77', 0, 13, 1, 1000, 1),
(59, 'MG_C59', 'Level 02', 'Saturday E', '105', 0, 40, 1, 1000, 1),
(60, 'MG_C60', 'Level 01', 'Saturday E', '41', 0, 38, 1, 1000, 1),
(61, 'MG_C61', 'Pre School', 'Saturday E', '99', 0, 38, 1, 1000, 1),
(62, 'MG_C62', 'Pre School Junior', 'Saturday E', '72', 0, 21, 1, 1000, 1),
(63, 'HW_C1', 'Pre School', 'Monday', '18', 0, 37, 1, 1002, 1),
(64, 'HW_C2', 'Level 01', 'Monday', '5', 0, 32, 1, 1002, 1),
(65, 'HW_C3', 'Level 01', 'Monday', '3', 0, 37, 1, 1002, 1),
(66, 'HW_C4', 'Level 02', 'Monday', '2', 0, 28, 1, 1002, 1),
(67, 'HW_C5', 'Level 02', 'Monday', '111', 0, 10, 1, 1002, 1),
(68, 'HW_C6', 'Level 02', 'Monday', '59', 0, 43, 1, 1002, 1),
(69, 'HW_C7', 'Level 03', 'Monday', '94', 0, 5, 1, 1002, 1),
(70, 'HW_C8', 'Level 03', 'Monday', '75', 0, 7, 1, 1002, 1),
(71, 'HW_C9', 'Level 04', 'Monday', '83', 0, 11, 1, 1002, 1),
(72, 'HW_C10', 'Level 04', 'Monday', '100', 0, 4, 1, 1002, 1),
(73, 'HW_C11', 'Level 04', 'Monday', '115', 0, 44, 1, 1002, 1),
(74, 'HW_C12', 'Level 05', 'Monday', '7', 0, 36, 1, 1002, 1),
(75, 'HW_C13', 'KET', 'Monday', '1', 0, 9, 1, 1002, 1),
(76, 'HW_C14', 'PET', 'Monday', '85', 0, 4, 1, 1002, 1),
(77, 'HW_C15', 'PET', 'Monday', '1', 0, 32, 0, 1002, 1),
(78, 'HW_C16', 'Pre School Senior', 'Tuesday', '13', 0, 11, 1, 1002, 1),
(79, 'HW_C17', 'Pre School', 'Tuesday', '82', 0, 43, 1, 1002, 1),
(80, 'HW_C18', 'Pre School', 'Tuesday', '20', 0, 40, 1, 1002, 1),
(81, 'HW_C19', 'Pre School Senior', 'Tuesday', '96', 0, 19, 1, 1002, 1),
(82, 'HW_C20', 'Level 02', 'Tuesday', '100', 0, 8, 1, 1002, 1),
(83, 'HW_C21', 'Level 02', 'Tuesday', '3', 0, 43, 1, 1002, 1),
(84, 'HW_C22', 'Level 03', 'Tuesday', '7', 0, 24, 1, 1002, 1),
(85, 'HW_C23', 'Level 04', 'Tuesday', '75', 0, 4, 1, 1002, 1),
(86, 'HW_C24', 'Level 04', 'Tuesday', '115', 0, 17, 1, 1002, 1),
(87, 'HW_C25', 'Level 05', 'Tuesday', '94', 0, 2, 1, 1002, 1),
(88, 'HW_C26', 'Level 05', 'Tuesday', '7', 0, 41, 0, 1002, 1),
(89, 'HW_C27', 'KET', 'Tuesday', '85', 0, 3, 1, 1002, 1),
(90, 'HW_C28', 'KET', 'Tuesday', '83', 0, 31, 1, 1002, 1),
(91, 'HW_C29', 'PET', 'Tuesday', '106', 0, 26, 1, 1002, 1),
(92, 'HW_C30', 'Pre School', 'Wednesday', '113', 0, 47, 1, 1002, 1),
(93, 'HW_C31', 'Pre School', 'Wednesday', '20', 0, 24, 1, 1002, 1),
(94, 'HW_C32', 'Pre School Senior', 'Wednesday', '13', 0, 19, 1, 1002, 1),
(95, 'HW_C33', 'Level 01', 'Wednesday', '96', 0, 24, 1, 1002, 1),
(96, 'HW_C34', 'Level 01', 'Wednesday', '59', 0, 25, 1, 1002, 1),
(97, 'HW_C35', 'Level 01', 'Wednesday', '82', 0, 6, 1, 1002, 1),
(98, 'HW_C36', 'Level 01', 'Wednesday', '5', 0, 4, 1, 1002, 1),
(99, 'HW_C37', 'Level 02', 'Wednesday', '2', 0, 7, 1, 1002, 1),
(100, 'HW_C38', 'Level 02', 'Wednesday', '14', 0, 10, 1, 1002, 1),
(101, 'HW_C39', 'Level 04', 'Wednesday', '115', 0, 2, 1, 1002, 1),
(102, 'HW_C40', 'Level 04', 'Wednesday', '7', 0, 13, 1, 1002, 1),
(103, 'HW_C41', 'Level 05', 'Wednesday', '49', 0, 7, 1, 1002, 1),
(104, 'HW_C42', 'Level 05', 'Wednesday', '94', 0, 16, 1, 1002, 1),
(105, 'HW_C43', 'Level 05', 'Wednesday', '85', 0, 43, 1, 1002, 1),
(106, 'HW_C44', 'KET', 'Wednesday', '106', 0, 0, 1, 1002, 1),
(107, 'HW_C45', 'Pre School Senior', 'Thursday', '96', 0, 15, 1, 1002, 1),
(108, 'HW_C46', 'Pre School', 'Thursday', '56', 0, 45, 1, 1002, 1),
(109, 'HW_C47', 'Level 01', 'Thursday', '111', 0, 12, 1, 1002, 1),
(110, 'HW_C48', 'Level 02', 'Thursday', '2', 0, 10, 1, 1002, 1),
(111, 'HW_C49', 'Level 03', 'Thursday', '14', 0, 12, 1, 1002, 1),
(112, 'HW_C50', 'Level 03', 'Thursday', '75', 0, 13, 1, 1002, 1),
(113, 'HW_C51', 'Level 04', 'Thursday', '94', 0, 23, 1, 1002, 1),
(114, 'HW_C52', 'Level 04', 'Thursday', '100', 0, 45, 1, 1002, 1),
(115, 'HW_C53', 'Level 04', 'Thursday', '7', 0, 32, 0, 1002, 1),
(116, 'HW_C54', 'Level 05', 'Thursday', '7', 0, 25, 1, 1002, 1),
(117, 'HW_C55', 'KET', 'Thursday', '106', 0, 3, 1, 1002, 1),
(118, 'HW_C56', 'KET', 'Thursday', '83', 0, 31, 1, 1002, 1),
(119, 'HW_C57', 'Level 06', 'Thursday', '21', 0, 0, 0, 1002, 1),
(120, 'HW_C58', 'PET', 'Thursday', '49', 0, 6, 0, 1002, 1),
(121, 'HW_C59', 'Pre School', 'Friday', '18', 0, 1, 1, 1002, 1),
(122, 'HW_C60', 'Pre School Senior', 'Friday', '20', 0, 11, 1, 1002, 1),
(123, 'HW_C61', 'Pre School', 'Friday', '82', 0, 24, 1, 1002, 1),
(124, 'HW_C62', 'Level 01', 'Friday', '3', 0, 16, 1, 1002, 1),
(125, 'HW_C63', 'Level 01', 'Friday', '94', 0, 38, 1, 1002, 1),
(126, 'HW_C64', 'Level 01', 'Friday', '56', 0, 33, 1, 1002, 1),
(127, 'HW_C65', 'Level 02', 'Friday', '75', 0, 26, 1, 1002, 1),
(128, 'HW_C66', 'Level 03', 'Friday', '14', 0, 7, 1, 1002, 1),
(129, 'HW_C67', 'Level 04', 'Friday', '115', 0, 4, 1, 1002, 1),
(130, 'HW_C68', 'Level 05', 'Friday', '1', 0, 28, 1, 1002, 1),
(131, 'HW_C69', 'KET', 'Friday', '83', 0, 17, 1, 1002, 1),
(132, 'HW_C70', 'Level 07', 'Friday', '80', 0, 5, 0, 1002, 1),
(133, 'HW_C71', 'PET', 'Friday', '106', 0, 1, 1, 1002, 1),
(134, 'HW_C72', 'Pre School Junior', 'Saturday M', '82', 0, 25, 1, 1002, 1),
(135, 'HW_C73', 'Pre School', 'Saturday M', '18', 0, 44, 1, 1002, 1),
(136, 'HW_C74', 'Level 01', 'Saturday M', '56', 0, 19, 1, 1002, 1),
(137, 'HW_C75', 'Pre School Senior', 'Saturday M', '20', 0, 20, 1, 1002, 1),
(138, 'HW_C76', 'Level 01', 'Saturday M', '3', 0, 42, 1, 1002, 1),
(139, 'HW_C77', 'Level 02', 'Saturday M', '59', 0, 34, 1, 1002, 1),
(140, 'HW_C78', 'Level 03', 'Saturday M', '115', 0, 5, 1, 1002, 1),
(141, 'HW_C79', 'Level 03', 'Saturday M', '14', 0, 21, 1, 1002, 1),
(142, 'HW_C80', 'Level 03', 'Saturday M', '75', 0, 44, 1, 1002, 1),
(143, 'HW_C81', 'Level 04', 'Saturday M', '100', 0, 1, 1, 1002, 1),
(144, 'HW_C82', 'Level 04', 'Saturday M', '7', 0, 5, 1, 1002, 1),
(145, 'HW_C83', 'Level 05', 'Saturday M', '106', 0, 47, 1, 1002, 1),
(146, 'HW_C84', 'Level 05', 'Saturday M', '83', 0, 31, 1, 1002, 1),
(147, 'HW_C85', 'PET', 'Saturday M', '85', 0, 34, 0, 1002, 1),
(148, 'HW_C86', 'Pre School Senior', 'Saturday A', '2', 0, 15, 1, 1002, 1),
(149, 'HW_C87', 'Pre School', 'Saturday A', '20', 0, 28, 1, 1002, 1),
(150, 'HW_C88', 'Level 01', 'Saturday A', '56', 0, 40, 1, 1002, 1),
(151, 'HW_C89', 'Level 02', 'Saturday A', '3', 0, 34, 1, 1002, 1),
(152, 'HW_C90', 'Level 03', 'Saturday A', '100', 0, 13, 1, 1002, 1),
(153, 'HW_C91', 'Level 03', 'Saturday A', '14', 0, 29, 1, 1002, 1),
(154, 'HW_C92', 'Level 03', 'Saturday A', '59', 0, 18, 1, 1002, 1),
(155, 'HW_C93', 'Level 04', 'Saturday A', '75', 0, 10, 1, 1002, 1),
(156, 'HW_C94', 'Level 04', 'Saturday A', '7', 0, 44, 1, 1002, 1),
(157, 'HW_C95', 'Level 05', 'Saturday A', '115', 0, 9, 1, 1002, 1),
(158, 'HW_C96', 'PET', 'Saturday A', '83', 0, 4, 1, 1002, 1),
(159, 'HW_C97', 'PET', 'Saturday A', '49', 0, 13, 1, 1002, 1),
(160, 'HW_C98', 'KET', 'Saturday A', '85', 0, 47, 1, 1002, 1),
(161, 'HW_C99', 'Elementary', 'Saturday A', '1', 0, 22, 0, 1002, 1),
(162, 'HW_C100', 'Pre Intermediate', 'Saturday A', '1', 0, 25, 0, 1002, 1),
(163, 'HW_C101', 'Pre School Junior', 'Saturday E', '111', 0, 45, 1, 1002, 1),
(164, 'HW_C102', 'Pre School Senior', 'Saturday E', '56', 0, 16, 1, 1002, 1),
(165, 'HW_C103', 'Pre School', 'Saturday E', '112', 0, 19, 1, 1002, 1),
(166, 'HW_C104', 'Pre School Senior', 'Saturday E', '5', 0, 20, 1, 1002, 1),
(167, 'HW_C105', 'Level 01', 'Saturday E', '3', 0, 26, 1, 1002, 1),
(168, 'HW_C106', 'Level 02', 'Saturday E', '2', 0, 9, 1, 1002, 1),
(169, 'HW_C107', 'Level 02', 'Saturday E', '14', 0, 35, 1, 1002, 1),
(170, 'HW_C108', 'Level 03', 'Saturday E', '94', 0, 4, 1, 1002, 1),
(171, 'HW_C109', 'Level 04', 'Saturday E', '23', 0, 0, 1, 1002, 1),
(172, 'HW_C110', 'Level 05', 'Saturday E', '100', 0, 5, 1, 1002, 1),
(173, 'HW_C111', 'Level 05', 'Saturday E', '7', 0, 31, 1, 1002, 1),
(174, 'HW_C112', 'Level 04', 'Saturday E', '75', 0, 32, 0, 1002, 1),
(175, 'HW_C113', 'KET', 'Saturday E', '83', 0, 30, 1, 1002, 1),
(176, 'HW_C114', 'PET', 'Saturday E', '106', 0, 28, 1, 1002, 1),
(177, 'MLB_C1', 'Level 01', 'Monday', '118', 0, 17, 1, 1001, 1),
(178, 'MLB_C2', 'Level 01', 'Monday', '120', 0, 46, 1, 1001, 1),
(179, 'MLB_C3', 'Level 03', 'Monday', '88', 0, 27, 1, 1001, 1),
(180, 'MLB_C4', 'KET', 'Monday', '104', 0, 36, 1, 1001, 1),
(181, 'MLB_C5', 'Level 01', 'Tuesday', '88', 0, 44, 1, 1001, 1),
(182, 'MLB_C6', 'Level 04', 'Tuesday', '53', 0, 47, 1, 1001, 1),
(183, 'MLB_C7', 'KET', 'Tuesday', '116', 0, 12, 1, 1001, 1),
(184, 'MLB_C8', 'Pre School', 'Wednesday', '70', 0, 30, 1, 1001, 1),
(185, 'MLB_C9', 'Level 02', 'Wednesday', '120', 0, 29, 1, 1001, 1),
(186, 'MLB_C10', 'Level 03', 'Wednesday', '43', 0, 32, 0, 1001, 1),
(187, 'MLB_C11', 'Level 05', 'Wednesday', '104', 0, 22, 1, 1001, 1),
(188, 'MLB_C12', 'KET', 'Wednesday', '53', 0, 14, 1, 1001, 1),
(189, 'MLB_C13', 'FCE', 'Wednesday', '67', 0, 46, 1, 1001, 1),
(190, 'MLB_C14', 'Pre School Senior', 'Thursday', '120', 0, 0, 1, 1001, 1),
(191, 'MLB_C15', 'Level 03', 'Thursday', '88', 0, 26, 1, 1001, 1),
(192, 'MLB_C16', 'Level 04', 'Thursday', '53', 0, 21, 1, 1001, 1),
(193, 'MLB_C17', 'Level 05', 'Thursday', '116', 0, 3, 1, 1001, 1),
(194, 'MLB_C18', 'KET', 'Thursday', '51', 0, 35, 0, 1001, 1),
(195, 'MLB_C19', 'Level 01', 'Friday', '70', 0, 22, 1, 1001, 1),
(196, 'MLB_C20', 'Level 03', 'Friday', '50', 0, 13, 1, 1001, 1),
(197, 'MLB_C21', 'PET', 'Friday', '116', 0, 3, 1, 1001, 1),
(198, 'MLB_C22', 'KET', 'Friday', '51', 0, 14, 1, 1001, 1),
(199, 'MLB_C23', 'Level 01', 'Saturday M', '50', 0, 35, 1, 1001, 1),
(200, 'MLB_C24', 'Level 01', 'Saturday M', '120', 0, 36, 1, 1001, 1),
(201, 'MLB_C25', 'Level 03', 'Saturday M', '43', 0, 4, 1, 1001, 1),
(202, 'MLB_C26', 'Level 04', 'Saturday M', '53', 0, 8, 1, 1001, 1),
(203, 'MLB_C27', 'Level 04', 'Saturday M', '51', 0, 47, 1, 1001, 1),
(204, 'MLB_C28', 'Level 05', 'Saturday M', '104', 0, 27, 1, 1001, 1),
(205, 'MLB_C29', 'PET', 'Saturday M', '116', 0, 28, 1, 1001, 1),
(206, 'MLB_C30', 'FCE', 'Saturday M', '90', 0, 31, 0, 1001, 1),
(207, 'MLB_C31', 'Pre School Junior', 'Saturday A', '52', 0, 17, 1, 1001, 1),
(208, 'MLB_C32', 'Level 02', 'Saturday A', '50', 0, 38, 1, 1001, 1),
(209, 'MLB_C33', 'Level 03', 'Saturday A', '120', 0, 38, 1, 1001, 1),
(210, 'MLB_C34', 'Level 03', 'Saturday A', '88', 0, 27, 1, 1001, 1),
(211, 'MLB_C35', 'Level 04', 'Saturday A', '53', 0, 28, 1, 1001, 1),
(212, 'MLB_C36', 'Level 05', 'Saturday A', '104', 0, 25, 1, 1001, 1),
(213, 'MLB_C37', 'KET', 'Saturday A', '116', 0, 17, 1, 1001, 1),
(214, 'MLB_C38', 'Elementary', 'Saturday A', '67', 0, 19, 0, 1001, 1),
(215, 'MLB_C39', 'PET', 'Saturday A', '51', 0, 18, 1, 1001, 1),
(216, 'MLB_C40', 'Level 02', 'Saturday E', '120', 0, 16, 1, 1001, 1),
(217, 'MLB_C41', 'Level 02', 'Saturday E', '50', 0, 26, 1, 1001, 1),
(218, 'MLB_C42', 'Level 03', 'Saturday E', '88', 0, 38, 1, 1001, 1),
(219, 'MLB_C43', 'Level 05', 'Saturday E', '53', 0, 4, 1, 1001, 1),
(220, 'MLB_C44', 'KET', 'Saturday E', '51', 0, 22, 1, 1001, 1),
(221, 'MLB_C45', 'PET', 'Saturday E', '116', 0, 38, 1, 1001, 1),
(222, 'MLB_C46', 'PET', 'Saturday E', '116', 0, 20, 0, 1001, 1),
(223, 'MLB_C47', 'KET', 'Saturday E', '104', 0, 1, 1, 1001, 1),
(225, 'HW_C115', 'Pre School Junior', 'Tuesday', '18', 0, 21, 1, 1002, 11),
(226, 'MLB_C48', 'PET', 'Monday', '67', 0, 37, 1, 1001, 11),
(227, 'MLB_C49', 'PET', 'Monday', '53', 0, 18, 1, 1001, 11),
(228, 'MG_C63', 'Pre School', 'Wednesday', '72', 0, 14, 1, 1000, 11),
(229, 'MG_C64', 'Pre School Senior', 'Thursday', '41', 0, 13, 1, 1000, 11),
(230, 'MG_C65', 'Pre Intermediate', 'Saturday A', '39', 0, 19, 0, 1000, 11),
(231, 'MLB_C50', 'Level 02', 'Monday', '50', 0, 47, 1, 1001, 3),
(232, 'MLB_C51', 'Pre School', 'Saturday M', '70', 0, 17, 1, 1001, 3),
(233, 'MLB_C52', 'Pre School', 'Tuesday', '119', 0, 16, 1, 1001, 3),
(234, 'MLB_C53', 'Level 01', 'Tuesday', '50', 0, 16, 1, 1001, 3),
(235, 'MLB_C54', 'FCE', 'Wednesday', '116', 0, 37, 1, 1001, 3),
(236, 'MLB_C55', 'Level 04', 'Wednesday', '51', 0, 3, 1, 1001, 3),
(237, 'MG_C66', 'Level 01', 'Tuesday', '107', 0, 45, 1, 1000, 11),
(238, 'MG_C67', 'Level 03', 'Wednesday', '77', 0, 7, 1, 1000, 11),
(239, 'MG_C68', 'Level 04', 'Thursday', '108', 0, 7, 1, 1000, 11),
(240, 'MG_C69', 'Pre School', 'Thursday', '99', 0, 3, 1, 1000, 11),
(241, 'MG_C70', 'Level 01', 'Friday', '99', 0, 6, 1, 1000, 11),
(242, 'HW_C116', 'Pre School', 'Thursday', '13', 0, 16, 1, 1002, 3),
(243, 'HW_C117', 'Pre School', 'Thursday', '20', 0, 9, 1, 1002, 3),
(244, 'HW_C118', 'Pre School', 'Saturday M', '111', 0, 12, 1, 1002, 3),
(245, 'HW_C119', 'Pre School', 'Friday', '111', 0, 15, 1, 1002, 3),
(246, 'HW_C120', 'Pre School', 'Friday', '112', 0, 12, 1, 1002, 3),
(247, 'HW_C121', 'Pre School Junior', 'Friday', '5', 0, 7, 1, 1002, 3),
(248, 'MLB_C56', 'Pre School Senior', 'Thursday', '119', 0, 4, 1, 1001, 3),
(249, 'MG_C71', 'Pre School', 'Monday', '92', 0, 6, 1, 1000, 7),
(250, 'MG_C72', 'KET', 'Monday', '110', 0, 41, 1, 1000, 7),
(251, 'MG_C73', 'Level 03', 'Thursday', '108', 0, 43, 0, 1000, 11),
(252, 'MG_C74', 'Level 05', 'Thursday', '103', 0, 38, 1, 1000, 11),
(253, 'MLB_C57', 'Elementary', 'Thursday', '90', 0, 19, 0, 1001, 3),
(254, 'MLB_C58', 'FCE', 'Monday', '51', 0, 38, 1, 1001, 3),
(255, 'MG_C75', 'Level 01', 'Wednesday', '41', 0, 21, 1, 1000, 11),
(256, 'MLB_C59', 'Level 05', 'Friday', '104', 0, 39, 1, 1001, 31),
(258, 'MLB_C60', 'Pre School', 'Friday', '119', 0, 1, 1, 1001, 33),
(259, 'BM_C1', 'KET', 'Saturday M', '98', 0, 37, 1, 1003, 3),
(260, 'BM_C2', 'Level 05', 'Saturday M', '109', 0, 37, 1, 1003, 3),
(262, 'MLB_C61', 'Kindergarten Senior', 'Saturday A', '119', 0, 1, 1, 1001, 26),
(263, 'HW_C124', 'Pre School', 'Tuesday', '5', 0, 0, 1, 1002, 11),
(264, 'HW_C125', 'Elementary', 'Wednesday', '1', 0, 16, 0, 1002, 11),
(265, 'HW_C126', 'Pre School Junior', 'Saturday A', '18', 0, 11, 1, 1002, 11),
(266, 'MG_C76', 'Level 02', 'Monday', '71', 0, 5, 0, 1000, 7),
(269, 'MLB_C62', 'Pre School', 'Saturday M', '52', 0, 15, 1, 1001, 33),
(272, 'MG_C77', 'Pre Intermediate', 'Monday', '78', 0, 19, 0, 1000, 10),
(273, 'MG_C78', 'Pre Intermediate', 'Thursday', '78', 0, 19, 0, 1000, 10),
(274, 'BM_C3', 'Level 03', 'Saturday M', '45', 0, 37, 1, 1003, 3),
(276, 'BM_C4', 'FCE', 'Saturday A', '44', 0, 1, 1, 1003, 40),
(277, 'BM_C5', 'Elementary', 'Monday', '44', 0, 17, 1, 1003, 40),
(278, 'BM_C6', 'Level 05', 'Monday', '44', 0, 34, 1, 1003, 40),
(281, 'MG_C79', 'Pre School', 'Monday', '72', 0, 45, 1, 1000, 10),
(282, 'BM_C7', 'KET', 'Monday', '109', 0, 34, 1, 1003, 40),
(283, 'BM_C8', 'Pre Intermediate', 'Monday', '64', 0, 5, 0, 1003, 40),
(284, 'BM_C9', 'Level 01', 'Monday', '101', 0, 35, 1, 1003, 40),
(316, 'BM_C10', 'Pre School', 'Saturday M', '101', 0, 41, 1, 1003, 40),
(317, 'BM_C11', 'KET', 'Saturday A', '98', 0, 31, 1, 1003, 40),
(318, 'BM_C12', 'Level 01', 'Saturday A', '102', 0, 1, 1, 1003, 40),
(319, 'BM_C13', 'Level 03', 'Saturday A', '45', 0, 1, 1, 1003, 40),
(320, 'BM_C14', 'KET', 'Saturday E', '109', 0, 21, 1, 1003, 40),
(321, 'BM_C15', 'Level 03', 'Friday', '45', 0, 31, 1, 1003, 40),
(322, 'BM_C16', 'PET', 'Friday', '98', 0, 31, 1, 1003, 40),
(323, 'MLB_C63', 'Pre School', 'Saturday E', '119', 0, 36, 1, 1001, 26),
(324, 'MLB_C64', 'Pre Intermediate', 'Saturday A', '67', 0, 19, 0, 1001, 30),
(325, 'BM_C17', 'Level 02', 'Monday', '45', 0, 32, 1, 1003, 40),
(326, 'MG_C80', 'Level 01', 'Monday', '99', 0, 11, 1, 1000, 10),
(327, 'MLB_C65', 'Level 04', 'Thursday', '104', 0, 27, 1, 1001, 33),
(328, 'MG_C81', 'Pre School', 'Saturday E', '92', 0, 38, 1, 1000, 10),
(331, 'HW_C126', 'Level 06', 'Thursday', '85', 0, 31, 1, 1002, 15),
(332, 'BM_C18', 'Level 01', 'Saturday E', '101', 0, 29, 1, 1003, 40),
(333, 'BM_C19', 'Level 04', 'Saturday E', '45', 0, 27, 1, 1003, 40),
(334, 'MLB_C66', 'Level 05', 'Saturday E', '47', 0, 15, 0, 1001, 26),
(335, 'MLB_C67', 'Pre School Junior', 'Saturday E', '52', 0, 37, 1, 1001, 26),
(336, 'MLB_C68', 'Kindergarten Junior', 'Thursday', '50', 0, 36, 1, 1001, 26),
(337, 'MLB_C69', 'Level 01', 'Wednesday', '88', 0, 26, 1, 1001, 26),
(338, 'MG_C82', 'Pre School Senior', 'Saturday A', '105', 0, 31, 1, 1000, 10),
(339, 'MG_C83', 'Pre School Junior', 'Saturday A', '107', 0, 32, 1, 1000, 10),
(340, 'HW_C126', 'Pre School Junior', 'Monday', '56', 0, 32, 1, 1002, 15),
(341, 'HW_C127', 'Kindergarten', 'Saturday E', '96', 82, 32, 1, 1002, 15),
(343, 'HW_C128', 'Level 01', 'Saturday M', '13', 0, 6, 1, 1002, 15),
(344, 'HW_C129', 'Pre School Junior', 'Saturday E', '18', 0, 29, 1, 1002, 15),
(345, 'HW_C130', 'Kindergarten', 'Monday', '96', 97, 29, 1, 1002, 15),
(346, 'BM_C20', 'Elementary', 'Friday', '44', 0, 18, 1, 1003, 40),
(347, 'MG_C84', 'KET', 'Tuesday', '110', 0, 18, 1, 1000, 10),
(348, 'MG_C85', 'Pre Intermediate', 'Saturday A', '86', 0, 14, 1, 1000, 34),
(349, 'MG_C86', 'Kindergarten Junior', 'Monday', '93', 0, 0, 0, 1000, 34),
(350, 'BM_C21', 'Level 04', 'Tuesday', '98', 0, 19, 1, 1003, 40),
(351, 'HW_C131', 'Pre School', 'Saturday A', '82', 0, 21, 1, 1002, 26),
(352, 'HW_C132', 'Pre School Junior', 'Saturday E', '13', 0, 21, 1, 1002, 26),
(353, 'BM_C22', 'Pre School Junior', 'Saturday M', '102', 0, 21, 1, 1003, 40),
(354, 'BM_C23', 'Level 05', 'Saturday A', '109', 0, 16, 1, 1003, 3),
(355, 'BM_C24', 'Level 01', 'Saturday A', '101', 0, 21, 1, 1003, 40),
(356, 'BM_C25', 'Pre Intermediate', 'Tuesday', '44', 0, 12, 1, 1003, 40),
(357, 'BM_C26', 'Pre School', 'Wednesday', '102', 0, 16, 1, 1003, 40),
(358, 'MG_C87', 'Pre School Senior', 'Saturday A', '71', 0, 11, 1, 1000, 44),
(359, 'MG_C88', 'Kindergarten', 'Saturday E', '107', 0, 13, 1, 1000, 34),
(360, 'MLB_C70', 'Elementary', 'Thursday', '51', 0, 9, 1, 1001, 31),
(361, 'MLB_C71', 'Pre School Senior', 'Friday', '52', 0, 13, 1, 1001, 33),
(362, 'HW_C133', 'Elementary', 'Friday', '49', 0, 9, 1, 1002, 21),
(363, 'BM_C27', 'Level 01', 'Thursday', '102', 0, 4, 1, 1003, 41),
(364, 'BM_C28', 'PET', 'Saturday E', '44', 0, 4, 1, 1003, 40),
(365, 'MG_C89', 'Pre School', 'Saturday M', '107', 0, 3, 1, 1000, 34),
(366, 'HW_C134', 'Pre School Junior', 'Thursday', '82', 0, 3, 1, 1002, 26),
(367, 'MG_C90', 'Pre School Senior', 'Friday', '72', 0, 3, 1, 1000, 44),
(368, 'MG_C91', 'KET', 'Saturday A', '40', 0, 1, 1, 1000, 34),
(369, 'MG_C92', 'KET', 'Wednesday', '108', 0, 0, 1, 1000, 34),
(370, 'BM_C29', 'Level 03', 'Tuesday', '45', 0, 0, 1, 1003, 40),
(371, 'BM_C30', 'Level 04', 'Wednesday', '109', 0, 0, 1, 1003, 40),
(372, 'BM_C31', 'Level 05', 'Wednesday', '98', 0, 0, 1, 1003, 40),
(373, 'BM_C32', 'Pre School Junior', 'Saturday E', '102', 0, 1, 1, 1003, 40),
(374, 'MG_C93', 'Pre Intermediate', 'Tuesday', '86', 27, 0, 1, 1000, 44),
(375, 'MLB_C72', 'Pre School Junior', 'Saturday A', '70', 0, 0, 1, 1001, 31),
(376, 'MLB_C73', 'Pre School Junior', 'Friday', '120', 0, 0, 1, 1001, 31),
(377, 'BM_C33', 'Elementary', 'Saturday E', '98', 0, 1, 1, 1003, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_category`
--

CREATE TABLE `tbl_book_category` (
  `book_cat_id` int(255) NOT NULL,
  `book_cat_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book_category`
--

INSERT INTO `tbl_book_category` (`book_cat_id`, `book_cat_name`) VALUES
(1, 'KJ - Junior Beginners 1'),
(2, 'KS- Junior Beginners 2'),
(3, 'PSJ – Beginners 1'),
(4, 'PS - Beginners 2'),
(5, 'PSS - Beginners 3'),
(6, 'L1 – Elementary 1'),
(7, 'L2 - Elementary 2'),
(8, 'L3 - Elementary 3'),
(9, 'L4 – intermediate 1'),
(10, 'L5 - intermediate 2'),
(11, 'L6 - intermediate 3'),
(12, 'Ket - Advanced 1'),
(13, 'Pet - Advanced 2'),
(14, 'Fce - Advanced 3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `branch_address` varchar(255) NOT NULL,
  `branch_code` varchar(10) NOT NULL,
  `branch_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`branch_id`, `branch_name`, `branch_address`, `branch_code`, `branch_email`) VALUES
(1000, 'Maharagama', '307/1, Highlevel Road, Maharagama.', 'MG', 'maharagama@esol.lk'),
(1001, 'Malabe', '63/2, New Kandy Road, Kothalawala, Kaduwela.', 'MLB', 'malabe@esol.lk'),
(1002, 'Hanwella', 'ESOL College (Pvt) Ltd, Wanahagoda, Kaluaggala.', 'HW', 'hanwella@esol.lk'),
(1003, 'Battaramulla', '773, Pannipitiya Road, Pelawatte, Battaramulla.', 'BM', 'battaramulla@esol.lk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calendar`
--

CREATE TABLE `tbl_calendar` (
  `calendar_id` int(11) NOT NULL,
  `calendar_date` varchar(255) NOT NULL,
  `calendar_start_time` varchar(255) NOT NULL,
  `calendar_end_time` varchar(255) NOT NULL,
  `calendar_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_calendar`
--

INSERT INTO `tbl_calendar` (`calendar_id`, `calendar_date`, `calendar_start_time`, `calendar_end_time`, `calendar_location`) VALUES
(15, '2019-06-01', '11.00AM', '04.00PM', 'Maharagama'),
(16, '2019-06-15', '11.00AM', '04.00PM', 'Maharagama'),
(17, '2019-06-22', '11.00AM', '04.00PM', 'Malabe'),
(18, '2019-06-29', '11.00AM', '01.00PM', 'Battaramulla'),
(19, '2019-07-06', '11.00AM', '04.00PM', 'Maharagama'),
(20, '2019-07-13', '11.00AM', '04.00PM', 'Malabe'),
(21, '2019-07-18', '11.00AM', '04.00PM', 'Hanwella'),
(22, '2019-07-19', '11.00AM', '04.00PM', 'Hanwella'),
(23, '2019-07-20', '11.00AM', '04.00PM', 'Maharagama'),
(24, '2019-07-27', '11.00AM', '04.00PM', 'Battaramulla'),
(26, '2019-08-10', '11.00AM', '04.00PM', 'Malabe'),
(27, '2019-08-10', '11.00AM', '04.00PM', 'Battaramulla'),
(28, '2019-08-17', '11.00AM', '04.00PM', 'Maharagama'),
(29, '2019-09-11', '11.00AM', '04.00PM', 'Hanwella'),
(30, '2019-09-14', '11.00AM', '04.00PM', 'Malabe'),
(31, '2019-09-21', '11.00AM', '04.00PM', 'Maharagama'),
(32, '2019-09-24', '11.00AM', '04.00PM', 'Hanwella'),
(33, '2019-09-28', '11.00AM', '04.00PM', 'Battaramulla'),
(34, '2019-10-05', '11.00AM', '04.00PM', 'Maharagama'),
(35, '2019-10-12', '11.00AM', '04.00PM', 'Malabe'),
(36, '2019-10-19', '11.00AM', '04.00PM', 'Maharagama'),
(37, '2019-10-26', '11.00AM', '04.00PM', 'Battaramulla'),
(38, '2019-11-02', '11.00AM', '04.00PM', 'Maharagama'),
(39, '2019-11-12', '11.00AM', '04.00PM', 'Maharagama'),
(40, '2019-11-23', '11.00AM', '04.00PM', 'Malabe'),
(41, '2019-11-28', '11.00AM', '04.00PM', 'Hanwella'),
(43, '2019-11-30', '11.00AM', '04.00PM', 'Maharagama'),
(44, '2019-12-04', '11.00AM', '04.00PM', 'Hanwella'),
(46, '2019-12-11', '11.00AM', '04.00PM', 'Battaramulla'),
(48, '2019-12-12', '11.00AM', '04.00PM', 'Hanwella'),
(49, '2019-12-14', '11.00AM', '04.00PM', 'Maharagama'),
(50, '2019-12-16', '11.00AM', '04.00PM', 'Hanwella'),
(51, '2019-12-21', '11.00AM', '04.00PM', 'Malabe'),
(52, '2020-01-04', '11.00AM', '04.00PM', 'Maharagama'),
(53, '2020-01-09', '11.00AM', '04.00PM', 'Hanwella'),
(54, '2020-01-11', '11.00AM', '04.00PM', 'Malabe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calendar_alert`
--

CREATE TABLE `tbl_calendar_alert` (
  `calendar_alert_id` int(255) NOT NULL,
  `calendar_alert_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_description` varchar(3000) NOT NULL,
  `course_url` varchar(600) NOT NULL,
  `course_status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`course_id`, `course_name`, `course_description`, `course_url`, `course_status`) VALUES
(16, 'KJ - Junior Beginners 1', '<h3 style=\"text-align: justify;\"><strong>KJ- Junior Beginners 1</strong></h3>\r\n<p style=\"text-align: justify;\">Kindergarten is the preliminary level where young children are taught the alphabet and the words related to each letter. Basic things such as numbers, shapes and colors will also be taught in detail during this level and at the end of the level, young learners are expected to excel in identifying the said criteria effortlessly. This goal is achieved via our panel of teachers who will guide young learners with examples, revisionary tests and in class activities.</p>\r\n<p style=\"text-align: justify;\">A student friendly environment is infused to kindergarten classes that would make them comfortable for the learning process. Undivided individual attention will be provided to each student during the class time and parents are advised to keep constant communication with the class teacher regarding their progress and concerns. Kinder is not a level that focusses on in-depth English language activities but moreover a preliminary level that introduces young children into the English language and the journey of learning that awaits them.</p>', '16-KJ-Junior-Beginners-1', 0),
(17, 'KS- Junior Beginners 2', '<h3 style=\"text-align: justify;\"><strong>KS- Junior Beginners 2</strong></h3>\r\n<p style=\"text-align: justify;\">Kindergarten is the preliminary level where young children are taught the alphabet and the words related to each letter. Basic things such as numbers, shapes and colors will also be taught in detail during this level and at the end of the level, young learners are expected to excel in identifying the said criteria effortlessly. This goal is achieved via our panel of teachers who will guide young learners with examples, revisionary tests and in class activities.</p>\r\n<p style=\"text-align: justify;\">A student friendly environment is infused to kindergarten classes that would make them comfortable for the learning process. Undivided individual attention will be provided to each student during the class time and parents are advised to keep constant communication with the class teacher regarding their progress and concerns. Kinder is not a level that focusses on in-depth English language activities but moreover a preliminary level that introduces young children into the English language and the journey of learning that awaits them.</p>', '17-KS-Junior-Beginners-2', 0),
(18, 'PSJ – Beginners 1', '<h3 style=\"text-align: justify;\"><strong>PSJ &ndash; Beginners 1</strong></h3>\r\n<p style=\"text-align: justify;\">Pre School Junior course is designed for young learners that would encourage them to start learn English using their own experiences. This level focusses to encourage children to be more creative, expressive and learn English systematically. During Pre School Junior, students will be taught the language in a far less complex approach in contrast to other levels. The content that will be taught in the level will be age appropriate for young learners and will not burden them with a vast amount of knowledge.</p>\r\n<p style=\"text-align: justify;\">For each day, 2 nouns will be taught for children and the following week, what has been taught will be revised as well. Apart from that, nursery rhymes are recited in the class as groups and individually to familiarize students with the language and pronunciation. Teaching of Nursery Rhymes will also be a methodology of teaching vocabulary apart from the words the children are being taught in class. Vocabulary related activities will take place in the classroom every week to prepare young children to be effective speakers on a daily basis. The Alphabet which also has been taught previously will be revised until they get a good grasp on the letters and how to use them appropriately in words.</p>', '18-PSJ-Beginners-1', 0),
(19, 'PS - Beginners 2', '<h3 style=\"text-align: justify;\"><strong>PS - Beginners 2</strong></h3>\r\n<p style=\"text-align: justify;\">This is an intricately designed early childhood development program which primarily aims for the 6 -7 age category. In this level, learners will be mainly taught vocabulary that is required to carry out conversations on a daily basis. Young learners are being taught how to build 3 worded sentences and this level is the step where they get a proper first glimpse on sentence constructing. Later on, during more advanced levels, sentence construction is taught to a deeper extent where preschool level obtains this goal by introducing them into 3 worded sentences.</p>\r\n<p style=\"text-align: justify;\">During this level, their confidence in speaking is also being evaluated by teachers and steps are being taken to make students more comfortable and confident in using English language. Additionally, reading, writing, speaking and listening skills will be developed using in class activities as well. Exercises such as tongue twisters are being practiced to improve pronunciation, phonetics and accents. Preschool is a level that does not carry a heavy weight of academic knowledge but works as a stepping stone for young learners to enjoy learning while enhancing the skills they are gifted with.</p>', '19-PS-Beginners-2', 0),
(20, 'PSS - Beginners 3', '<h3 style=\"color: red;\">Required contents</h3>', '20-PSS-Beginners-3', 1),
(21, 'L1 – Elementary 1', '<h3 style=\"text-align: justify;\"><strong>L1 &ndash; Elementary 1</strong></h3>\r\n<p style=\"text-align: justify;\">L1 &ndash; Elementary 1 is a curriculum that is designed to familiarize young learners in the common vocabulary in the correct order which is designed for children in between 7 &ndash; 9 years. Level 01 is the starting point for young learners where they learn how to express their ideas through essay writing while being competent sentence constructors. Simple forms of grammar are expected to learn during this level and primary language skills are also expected to improve in this level as well.</p>', '22-L1-Elementary-1', 0),
(22, 'L2 - Elementary 2', '<h3 style=\"text-align: justify;\"><strong>L2 - Elementary 2</strong></h3>\r\n<p style=\"text-align: justify;\">Similar to L1 - Elementary 1, L2 - Elementary 2 is another level where young learners are being sent to Cambridge Starters examination. Apart from usual classes, they are being extensively trained for examinations through extra sessions where exam focus areas are being thoroughly discussed. This level is designed for young learners for aged around 10 years old. In this level, learners will be taught basic grammar structures. It is also a great opportunity for the learners to enhance their listening and speaking skills in and outside the classroom.</p>\r\n<p style=\"text-align: justify;\">As always, an atmosphere where students are encouraged to learn is maintained in our classrooms and a student centered teaching method is being followed where raising subject related questions is encouraged and appreciated. The teacher works as a facilitator where students are asked to get the best support out of them rather than having students depend on them to expand knowledge. Everything the students have learned in previous levels will be revised and the learning content in level 2 is purposely elevated to a slightly advance level than their previous levels. Teaching of grammar parts will be done through activities and examples while setting them different goals to explore the language into higher dimensions.</p>', '22-L2-Elementary-2', 0),
(23, 'L3 - Pre Intermediate 1', '<h3 style=\"text-align: left;\"><strong>L3 - Pre Intermediate 1</strong></h3>\r\n<p style=\"text-align: justify;\">This is a level that would continue for an approximate time period of 1 year where 48 tutorials are being covered each week. Especially designed for students of age 9 &ndash; 11, this course comprises of basic grammar parts as well. L3 - Pre-Intermediate 1 holds a significant place as a level where students are being prepared for YLE Movers examination. Similar to previous curriculums this level further focusses on reading ability, writing, listening and speaking skills of young learners to a more sophisticated level than early levels. The vocabulary of the students are being expanded during this level while they are taught how to apply what they learnt inside the classroom to their daily lives.</p>', '23-L3-Elementary-3', 0),
(24, 'L4 – Pre Intermediate 2', '<h3 style=\"text-align: justify;\"><strong>L4 &ndash; Pre Intermediate 2</strong></h3>\r\n<p style=\"text-align: justify;\">L4 &ndash; Pre Intermediate 2 is a continuation after L3 - Pre Intermediate 1 where everything they have learnt in the previous level are being elevated into a considerable extent. The learning experience is much similar to L3 - Pre Intermediate 1 but the focus on reading, writing, speaking and listening are far higher than their previous level. This is also a level where young learners are being prepared for YLE Movers exam module. Students who successfully complete this level are being promoted to L5 - Intermediate. The vocabulary, grammar parts and essay writing still happens in this stage but with more in depth knowledge that suits the age group this curriculum is looking at. L4 &ndash; Pre Intermediate 2 is especially designed for young learners in between age 10 &ndash; 13 years.</p>', '25-L4-intermediate-1', 0),
(25, 'L5 - Intermediate', '<h3 style=\"text-align: justify;\"><strong>L5 - Intermediate</strong></h3>\r\n<p style=\"text-align: justify;\">The aim of L5 - intermediate is to offer comprehensive insight into the English language through this tailor made learning program. Young learners are expected to apply theoretical knowledge in practical scenarios to enrich their knowledge on the language. Grammar is a prominent focal point in this level while other primal skills as reading, writing, listening and speaking are given much attention as well. One significant addition of this level is the inclusion of team activities and confidence building activities where personalities of the students are being sharpened. Reminiscent of the previous levels, individual attention will be played on the students where the teacher will keep in touch with the parents regarding the child&rsquo;s progress.</p>', '25-L5-intermediate-2', 0),
(26, 'L6 - intermediate 3', '<h3 style=\"color: red;\">Required contents</h3>', '26-L6-intermediate-3', 1),
(27, 'Ket - Upper Intermediate 1', '<h3><strong>KET - Upper Intermediate 1</strong></h3>\r\n<p style=\"text-align: justify;\">The Key English Test (KET) is designed for students who wish to communicate using a basic knowledge of the English language. For day-to-day living that requires the ability to communicate in simple English, this is the perfect module and is the most basic level of General English exams carried out by the Cambridge English series.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Eligibility criteria:</strong></p>\r\n<ul>\r\n<li>Be able to respond and ask questions relating to yourself or others.</li>\r\n<li>Follow instructions that are conveyed at a moderate speed, with clarity.</li>\r\n<li><span lang=\"EN-US\">Be able to share with someone what you think / feel about a particular subject.</span></li>\r\n</ul>', '27-Ket-Advanced-1', 0),
(28, 'Pet - Upper Intermediate 2', '<h3 style=\"text-align: justify;\"><strong>Pet - Upper Intermediate 2</strong></h3>\r\n<p style=\"text-align: justify;\">Preliminary English Test (PET) is a level which has a high emphasis on activity based learning. Where lower levels have more focus on providing theoretical knowledge and practical knowledge afterwards, levels such as PET which are aimed for intermediate level learners have less to do with theoretical knowledge and more to do with activity based interactive learning. Students are encouraged to interact with each other and with the teacher to discuss language related issues and improve their knowledge through activities, games and in class discussions. Grammar, reading and writing are the priorities in this stage which makes it a good foundation for students in their higher educational requirements. Successfully completion of PET level leads students to the next level named FCE.</p>', '28-Pet-Advanced-2', 0),
(29, 'Fce -  Advance', '<h3 style=\"text-align: justify;\"><strong>Fce - Advance</strong></h3>\r\n<p style=\"text-align: justify;\">The First Certificate in English (FCE) qualification comes in two forms, particularly for teens for a one year period along with a 6 month programme for FCE adults.</p>\r\n<p style=\"text-align: justify;\">This exam comprises four parts and students will complete the reading, writing, use of English and listening papers within a day. The speaking exam is carried out by two examiners along with another candidate facing the same exam.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\"><strong>Eligibility criteria:</strong></p>\r\n<ul>\r\n<li style=\"text-align: justify;\">Compose emails and short reports with confidence.</li>\r\n<li style=\"text-align: justify;\">Carry out a detailed conversation in English that involves explaining an idea.</li>\r\n<li style=\"text-align: justify;\">Have a sound understanding of general English being used in Media formats such as Press and Television.</li>\r\n</ul>', '29-Fce-Advanced-3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(1000) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_url` varchar(1000) NOT NULL,
  `event_order` int(150) NOT NULL,
  `event_gallery` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`event_id`, `event_name`, `event_description`, `event_date`, `event_url`, `event_order`, `event_gallery`) VALUES
(24, 'Alms Hall - 2018', 'Alms Hall 2018', '2018-06-20', '28-alms-hall-2018', 9, 1),
(25, 'Award Ceremony - 2018', 'Award Ceremony - 2018', '2018-08-23', '25-award-ceremony-2018', 8, 1),
(26, 'Summer Camp - 2018', 'Summer Camp - 2018', '2018-09-25', 'events?eventtitle=26-summer-camp-2018', 7, 1),
(27, 'ALLURE - 2018', 'ALLURE - 2018', '2018-10-26', '27-allure-2018', 10, 1),
(28, 'Art Competition - 2018', 'Art Competition 2018', '2018-09-19', '28-art-competition-2018', 11, 1),
(29, 'Water Day - 2018', 'Water Day 2018', '2018-10-30', '29-water-day-2018', 6, 1),
(36, 'Award Ceremony - 2017', 'Award Ceremony - 2017', '2017-06-11', '36-award-ceremony-2017', 5, 1),
(37, 'Award Ceremony - 2016', 'Award Ceremony - 2016', '2016-03-24', '37-award-ceremony-2016', 4, 1),
(38, 'Art Therapy - 2019', 'Art Therapy', '2019-05-30', '38-art-therapy', 3, 1),
(39, 'Alms Hall - 2019', 'Alms Hall - 2019', '2019-06-16', '39-alms-hall-2018', 2, 1),
(40, 'Annual Staff Trip 2019', 'Annual Staff Trip 2019', '2019-08-22', '40-annual-staff-trip-2019', 1, 1),
(41, 'Award Ceremony - 2019', 'Award Ceremony - 2019', '2019-09-22', '41-award-ceremony-2019', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events_image`
--

CREATE TABLE `tbl_events_image` (
  `image_id` int(11) NOT NULL,
  `event_id` int(10) NOT NULL,
  `event_image_path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events_image`
--

INSERT INTO `tbl_events_image` (`image_id`, `event_id`, `event_image_path`) VALUES
(43, 25, 'uploads/images/events/event_25-award-ceremony-2018/5c7a16c1d549d_award-ceremony-2018.jpg'),
(44, 25, 'uploads/images/events/event_25-award-ceremony-2018/5c7a16c1d5d8d_award-ceremony-2018.jpg'),
(45, 25, 'uploads/images/events/event_25-award-ceremony-2018/5c7a16c1daeb7_award-ceremony-2018.jpg'),
(46, 25, 'uploads/images/events/event_25-award-ceremony-2018/5c7a16c1db820_award-ceremony-2018.jpg'),
(47, 25, 'uploads/images/events/event_25-award-ceremony-2018/5c7a16c1dc0fb_award-ceremony-2018.jpg'),
(48, 25, 'uploads/images/events/event_25-award-ceremony-2018/5c7a16c1dc96e_award-ceremony-2018.jpg'),
(49, 25, 'uploads/images/events/event_25-award-ceremony-2018/5c7a16c1dd18d_award-ceremony-2018.jpg'),
(51, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a06534_summer-camp-2018.jpg'),
(52, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a06d9d_summer-camp-2018.jpg'),
(53, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a074ec_summer-camp-2018.jpg'),
(54, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a07f5c_summer-camp-2018.jpg'),
(55, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a0872a_summer-camp-2018.jpg'),
(56, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a08f15_summer-camp-2018.jpg'),
(57, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a0970b_summer-camp-2018.jpg'),
(58, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a09eae_summer-camp-2018.jpg'),
(59, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a0a668_summer-camp-2018.jpg'),
(60, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a0adf6_summer-camp-2018.jpg'),
(61, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a0b561_summer-camp-2018.jpg'),
(62, 26, 'uploads/images/events/event_26-summer-camp-2018/5c7a171a0bcee_summer-camp-2018.jpg'),
(63, 27, 'uploads/images/events/event_27-allure-2018/5c7a174ddcedc_allure-2018.jpg'),
(64, 27, 'uploads/images/events/event_27-allure-2018/5c7a174ddd48e_allure-2018.jpg'),
(65, 27, 'uploads/images/events/event_27-allure-2018/5c7a174dddab5_allure-2018.jpg'),
(66, 27, 'uploads/images/events/event_27-allure-2018/5c7a174de2cb7_allure-2018.jpg'),
(67, 27, 'uploads/images/events/event_27-allure-2018/5c7a174de3559_allure-2018.jpg'),
(68, 27, 'uploads/images/events/event_27-allure-2018/5c7a174de3d58_allure-2018.jpg'),
(69, 27, 'uploads/images/events/event_27-allure-2018/5c7a174de4550_allure-2018.jpg'),
(70, 27, 'uploads/images/events/event_27-allure-2018/5c7a174de4d42_allure-2018.jpg'),
(71, 27, 'uploads/images/events/event_27-allure-2018/5c7a174de552b_allure-2018.jpg'),
(72, 24, 'uploads/images/events/event_28-alms-hall-2018/5c85ecdf397bd_alms-hall-2018.jpg'),
(73, 24, 'uploads/images/events/event_28-alms-hall-2018/5c85ecdf39daa_alms-hall-2018.jpg'),
(74, 24, 'uploads/images/events/event_28-alms-hall-2018/5c85ecdf3a2b4_alms-hall-2018.jpg'),
(75, 24, 'uploads/images/events/event_28-alms-hall-2018/5c85ecdf3e7d6_alms-hall-2018.jpg'),
(77, 24, 'uploads/images/events/event_28-alms-hall-2018/5c85ecdf3fe5c_alms-hall-2018.jpg'),
(81, 25, 'uploads/images/events/event_27-award-ceremony-2018/5c86104a86b38_award-ceremony-2018.jpg'),
(82, 25, 'uploads/images/events/event_27-award-ceremony-2018/5c8610907858d_award-ceremony-2018.jpg'),
(85, 24, 'uploads/images/events/event_27-alms-hall-2018/5c8612d8b6aae_alms-hall-2018.jpg'),
(86, 28, 'uploads/images/events/event_28-art-competition-2018/5cd2ad414f3c2_art-competition-2018.jpg'),
(87, 28, 'uploads/images/events/event_28-art-competition-2018/5cd2ad414fe55_art-competition-2018.jpg'),
(88, 28, 'uploads/images/events/event_28-art-competition-2018/5cd2ad4150458_art-competition-2018.jpg'),
(89, 28, 'uploads/images/events/event_28-art-competition-2018/5cd2ad429d5d2_art-competition-2018.jpg'),
(90, 28, 'uploads/images/events/event_28-art-competition-2018/5cd2ad429de7f_art-competition-2018.jpg'),
(91, 28, 'uploads/images/events/event_28-art-competition-2018/5cd2ad429e8d9_art-competition-2018.jpg'),
(92, 28, 'uploads/images/events/event_28-art-competition-2018/5cd2ad429f26b_art-competition-2018.jpg'),
(93, 28, 'uploads/images/events/event_28-art-competition-2018/5cd2ad429fdb7_art-competition-2018.jpg'),
(94, 28, 'uploads/images/events/event_28-art-competition-2018/5cd2ad42caac9_art-competition-2018.jpg'),
(95, 29, 'uploads/images/events/event_29-water-day-2018/5cd3c0d2de1a6_water-day-2018.jpg'),
(96, 29, 'uploads/images/events/event_29-water-day-2018/5cd3c0d2de50c_water-day-2018.jpg'),
(97, 29, 'uploads/images/events/event_29-water-day-2018/5cd3c0d2de71d_water-day-2018.jpg'),
(98, 29, 'uploads/images/events/event_29-water-day-2018/5cd3c0d4340ad_water-day-2018.jpg'),
(99, 29, 'uploads/images/events/event_29-water-day-2018/5cd3c0d4342e9_water-day-2018.jpg'),
(100, 29, 'uploads/images/events/event_29-water-day-2018/5cd3c0d434527_water-day-2018.jpg'),
(101, 29, 'uploads/images/events/event_29-water-day-2018/5cd3c0d434660_water-day-2018.jpg'),
(102, 29, 'uploads/images/events/event_29-water-day-2018/5cd3c0d434845_water-day-2018.jpg'),
(103, 29, 'uploads/images/events/event_29-water-day-2018/5cd3c0d434a10_water-day-2018.jpg'),
(126, 36, 'uploads/images/events/event_36-award-ceremony-2017/5cf65502572d5_award-ceremony-2017.jpg'),
(127, 36, 'uploads/images/events/event_36-award-ceremony-2017/5cf6550257518_award-ceremony-2017.jpg'),
(128, 36, 'uploads/images/events/event_36-award-ceremony-2017/5cf65502576b5_award-ceremony-2017.jpg'),
(129, 36, 'uploads/images/events/event_36-award-ceremony-2017/5cf6550257805_award-ceremony-2017.jpg'),
(130, 36, 'uploads/images/events/event_36-award-ceremony-2017/5cf6550257950_award-ceremony-2017.jpg'),
(131, 36, 'uploads/images/events/event_36-award-ceremony-2017/5cf6550257a96_award-ceremony-2017.jpg'),
(132, 36, 'uploads/images/events/event_36-award-ceremony-2017/5cf6550257bd1_award-ceremony-2017.jpg'),
(133, 36, 'uploads/images/events/event_36-award-ceremony-2017/5cf6550257d06_award-ceremony-2017.jpg'),
(134, 36, 'uploads/images/events/event_36-award-ceremony-2017/5cf6550257e50_award-ceremony-2017.jpg'),
(135, 37, 'uploads/images/events/event_37-award-ceremony-2016/5cf656e016e34_award-ceremony-2016.jpg'),
(136, 37, 'uploads/images/events/event_37-award-ceremony-2016/5cf656e01711a_award-ceremony-2016.jpg'),
(137, 37, 'uploads/images/events/event_37-award-ceremony-2016/5cf656e0172b4_award-ceremony-2016.jpg'),
(138, 37, 'uploads/images/events/event_37-award-ceremony-2016/5cf656e017431_award-ceremony-2016.jpg'),
(139, 37, 'uploads/images/events/event_37-award-ceremony-2016/5cf656e0175a3_award-ceremony-2016.jpg'),
(140, 37, 'uploads/images/events/event_37-award-ceremony-2016/5cf656e017705_award-ceremony-2016.jpg'),
(141, 37, 'uploads/images/events/event_37-award-ceremony-2016/5cf656e017863_award-ceremony-2016.jpg'),
(142, 37, 'uploads/images/events/event_37-award-ceremony-2016/5cf656e0179ef_award-ceremony-2016.jpg'),
(143, 37, 'uploads/images/events/event_37-award-ceremony-2016/5cf656e017b53_award-ceremony-2016.jpg'),
(144, 38, 'uploads/images/events/event_38-art-therapy/5d0727e1d1cbc_art-therapy.jpg'),
(145, 38, 'uploads/images/events/event_38-art-therapy/5d0727e1d202f_art-therapy.jpg'),
(146, 38, 'uploads/images/events/event_38-art-therapy/5d0727e1d22ef_art-therapy.jpg'),
(147, 38, 'uploads/images/events/event_38-art-therapy/5d0727e366b1a_art-therapy.jpg'),
(148, 38, 'uploads/images/events/event_38-art-therapy/5d0727e3673a7_art-therapy.jpg'),
(149, 38, 'uploads/images/events/event_38-art-therapy/5d0727e367deb_art-therapy.jpg'),
(150, 38, 'uploads/images/events/event_38-art-therapy/5d0727e3687cf_art-therapy.jpg'),
(151, 38, 'uploads/images/events/event_38-art-therapy/5d0727e3691d5_art-therapy.jpg'),
(152, 38, 'uploads/images/events/event_38-art-therapy/5d0727e432ac7_art-therapy.jpg'),
(153, 39, 'uploads/images/events/event_39-alms-hall-2018/5d0b720b7bec1_alms-hall-2018.jpg'),
(154, 39, 'uploads/images/events/event_39-alms-hall-2018/5d0b720b7c307_alms-hall-2018.jpg'),
(155, 39, 'uploads/images/events/event_39-alms-hall-2018/5d0b720b7c546_alms-hall-2018.jpg'),
(156, 39, 'uploads/images/events/event_39-alms-hall-2018/5d0b720c6b165_alms-hall-2018.jpg'),
(157, 39, 'uploads/images/events/event_39-alms-hall-2018/5d0b720c6b420_alms-hall-2018.jpg'),
(158, 39, 'uploads/images/events/event_39-alms-hall-2018/5d0b720c6b6b0_alms-hall-2018.jpg'),
(159, 39, 'uploads/images/events/event_39-alms-hall-2018/5d0b720c6b8f4_alms-hall-2018.jpg'),
(160, 39, 'uploads/images/events/event_39-alms-hall-2018/5d0b720c6bac2_alms-hall-2018.jpg'),
(161, 39, 'uploads/images/events/event_39-alms-hall-2018/5d0b720c6bc6d_alms-hall-2018.jpg'),
(163, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7c88de42565_annual-staff-trip-2019.jpg'),
(164, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7c88e035f2c_annual-staff-trip-2019.jpg'),
(165, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7c88e036204_annual-staff-trip-2019.jpg'),
(166, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7c88e036479_annual-staff-trip-2019.jpg'),
(167, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7c88e036701_annual-staff-trip-2019.jpg'),
(168, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7c88e036bbd_annual-staff-trip-2019.jpg'),
(169, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7c88e036e95_annual-staff-trip-2019.jpg'),
(170, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7c88e0371bc_annual-staff-trip-2019.jpg'),
(171, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7c88e037467_annual-staff-trip-2019.jpg'),
(172, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7f158a27a7c_annual-staff-trip-2019.jpg'),
(173, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7f158a2ff6e_annual-staff-trip-2019.jpg'),
(174, 40, 'uploads/images/events/event_40-annual-staff-trip-2019/5d7f158a30144_annual-staff-trip-2019.jpg'),
(176, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da45502891d7_award-ceremony-2019.jpg'),
(177, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da455028934f_award-ceremony-2019.jpg'),
(178, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da45502894ec_award-ceremony-2019.jpg'),
(179, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da45502895f9_award-ceremony-2019.jpg'),
(180, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da4550289798_award-ceremony-2019.jpg'),
(181, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da45502898df_award-ceremony-2019.jpg'),
(182, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da4550289a45_award-ceremony-2019.jpg'),
(184, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da4550289cc6_award-ceremony-2019.jpg'),
(185, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da45503055a5_award-ceremony-2019.jpg'),
(186, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da4550305781_award-ceremony-2019.jpg'),
(187, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da4550305959_award-ceremony-2019.jpg'),
(188, 41, 'uploads/images/events/event_41-award-ceremony-2019/5da456447612b_award-ceremony-2019.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_contact_links`
--

CREATE TABLE `tbl_footer_contact_links` (
  `link_id` int(11) NOT NULL,
  `link_name` varchar(200) NOT NULL,
  `link_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer_contact_links`
--

INSERT INTO `tbl_footer_contact_links` (`link_id`, `link_name`, `link_url`) VALUES
(1, 'Hanwella', 'hanwella'),
(2, 'Maharagama', 'maharagama'),
(4, 'Malabe', 'malabe'),
(5, 'Battaramulla', 'battaramulla');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_forum_links`
--

CREATE TABLE `tbl_footer_forum_links` (
  `forum_id` int(11) NOT NULL,
  `forum_name` varchar(200) NOT NULL,
  `forum_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer_forum_links`
--

INSERT INTO `tbl_footer_forum_links` (`forum_id`, `forum_name`, `forum_link`) VALUES
(1, 'Our Courses', 'courses/schools'),
(2, 'Semester Intake', 'calendar'),
(3, 'Popular Courses', 'courses/schools');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_menu`
--

CREATE TABLE `tbl_footer_menu` (
  `footer_id` int(11) NOT NULL,
  `footer_heading` varchar(30) NOT NULL,
  `page_link` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer_menu`
--

INSERT INTO `tbl_footer_menu` (`footer_id`, `footer_heading`, `page_link`) VALUES
(1, 'Contact', 'edit-footer-contact'),
(2, 'Forum topics', 'edit-footer-forum'),
(3, 'Social media', 'edit-footer-social');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_social_link`
--

CREATE TABLE `tbl_footer_social_link` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(200) NOT NULL,
  `social_link` varchar(200) NOT NULL,
  `social_icon` varchar(25) NOT NULL,
  `social_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer_social_link`
--

INSERT INTO `tbl_footer_social_link` (`social_id`, `social_name`, `social_link`, `social_icon`, `social_status`) VALUES
(1, 'facebook', 'https://www.facebook.com/esolcollegeinternational/', 'facebook', 1),
(2, 'twitter', 'https://twitter.com/esolmaharagama?lang=en', 'google', 1),
(3, 'instagram', 'https://www.instagram.com/esolcollegeinternational/?hl=en', 'twitter', 1),
(4, 'youtube', 'https://www.youtube.com/channel/UCZQUhNdZHNJlwNaV5IOkJXw', 'pinterest', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

CREATE TABLE `tbl_inquiry` (
  `inquiry_id` int(200) NOT NULL,
  `inquiry_user_name` varchar(1000) NOT NULL,
  `inquiry_user_email` varchar(2000) NOT NULL,
  `inquiry_user_number` varchar(250) NOT NULL,
  `inquiry_user_message` varchar(4000) NOT NULL,
  `inquiry_date` varchar(400) NOT NULL,
  `inquiry_branch` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inquiry`
--

INSERT INTO `tbl_inquiry` (`inquiry_id`, `inquiry_user_name`, `inquiry_user_email`, `inquiry_user_number`, `inquiry_user_message`, `inquiry_date`, `inquiry_branch`) VALUES
(7, 'Wimala', 'wimala123@gmail.com', '0763029030', 'My daughter, is in grade 4 need to join with ESOL.which is possible. Class for her and how is the payments  and when is enrolment \r\n', '2019-06-20', ''),
(8, 'Wimala', 'wimalasam123@gmail.com', '0763029030', 'The email address which I sent moment ago should correct as above. Sorry for bothering.', '2019-06-20', ''),
(18, 'sanduka', 'sanduka.lakshini@gmail.com', '0773986100', 'try to contact several time on today ,but no one answer....', '2019-07-17', 'Maharagama'),
(20, 'Danushka', 'danushka.ancl@gmail.com', '0718466753', 'My child is now 5 1/2 years old. She currently follows English medium in her nursery. Please advice me on the available English courses for her to improve both Grammar & spoken English. Thanks.', '2019-07-23', 'Maharagama'),
(21, 'shalini Perera', 'shaliniwr2014@gmail.com', '0726375574', 'Pls, forward PET class details', '2019-07-26', 'Battaramulla'),
(35, 'Miladi', 'miladitharushika@gmail.com', '0719990825', 'How can I enroll if I want to do Cambridge exams?', '2019-08-29', 'Maharagama'),
(46, 'Imasha Ranwalage', 'chaparanwalage@gmail.com', '0779277578', 'Are there any vacancies for teachers in Malabe branch ?', '2019-09-18', 'Malabe'),
(48, 'Subhahs', 'subhashnandika@gmail.com', '0772103706', 'Need to contact someone to know about upcoming  Prize Awarding Ceremony, My son, Tharusha Nethman Karunaratne is studying at ESOL - Pannipitiya Branch', '2019-09-20', 'Malabe'),
(54, 'Tharangi Premathilake', 'tharangi@slt.com.lk', '0701313220', 'My son in now in grade 06 @ Nalanda College, Colombo 10. I need to enroll him for this course. May I know the details about the course and the  next intake ? Weekend class is preferred.  Even Malabe branch is also OK.', '2019-10-05', 'Hanwella'),
(56, 'Imani renuka ', 'nishalirenuka@gmail.com', '0774188969', 'I want join my son to ESOL college from grade 6. Can I kindly  get  some  information about the school fee  structure?', '2019-10-08', 'Battaramulla'),
(57, 'Mohamed Sadham', 'sadeem.inc@gmail.com', '9475441359', 'HI, My Brother Study In Grade 8 in Govement  School. What Is Procedure to Join him to Your Academy...', '2019-10-08', 'Hanwella'),
(64, 'Rovina', 'rovina.hallala@ymail.com', '0778083159', 'Any IELTS programme?', '2019-10-23', 'Maharagama'),
(69, 'Ruwani', 'ruwanivitharanage123@gmail.com', '0778134630', 'Hi,\r\nDo you have any spoken English classes for grade 5 student during the weekdays?\r\nThanks\r\nRuwani', '2019-10-31', 'Battaramulla'),
(71, 'Jk janani chamodya', 'jananichamodya222@gmail.com4', '0788483500', 'Are there any vacancies for trainee teachers in your school fo english language, english literature and ict?', '2019-11-04', 'Malabe'),
(72, 'Piyumi Rajakaruna', 'rajakarunapiyumi98@gmail.com', '0711600912', 'Are there any assistant teaching vacancies these days?\r\n', '2019-11-04', 'Maharagama'),
(73, 'Isuru Jayalath', 'isuruj550@gmail.com', '0772815041', 'Do you have classes for Grade 2 (English)? Local syllabus. ', '2019-11-07', 'Maharagama'),
(74, 'Michaelgaf', 'revollet.marketing@gmail.com', '82797331851', 'Hi. This is Chris from Revollet Marketing International, who is in charge of marketing for Revollet. \r\n \r\nRevollet is a debit card that can be used by charging Crypto currency such as BTC, ETH and XRP. \r\n \r\nBy using debit card, yo', '2019-11-20', 'Maharagama'),
(75, 'Eric Jones', 'eric@talkwithcustomer.com', '416-385-3200', 'Hey,\r\n\r\nYou have a website esol.lk, right?\r\n\r\nOf course you do. I am looking at your website now.\r\n\r\nIt gets traffic every day – that you’re probably spending $2 / $4 / $10 or more a click to get.  Not including all of the work you put into creating social media, videos, blog posts, emails, and so on.\r\n\r\nSo you’re investing seriously in getting people to that site.\r\n\r\nBut how’s it working?  Great? Okay?  Not so much?\r\n\r\nIf that answer could be better, then it’s likely you’re putting a lot of time, effort, and money into an approach that’s not paying off like it should.\r\n\r\nNow… imagine doubling your lead conversion in just minutes… In fact, I’ll go even better.\r\n \r\nYou could actually get up to 100X more conversions!\r\n\r\nI’m not making this up.  As Chris Smith, best-selling author of The Conversion Code says: Speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 14 minutes vs being contacted within 5 minutes.\r\n\r\nHe’s backed up by a study at MIT that found the odds of contacting a lead will increase by 100 times if attempted in 5 minutes or less.\r\n\r\nAgain, out of the 100s of visitors to your website, how many actually call to become clients?\r\n\r\nWell, you can significantly increase the number of calls you get – with ZERO extra effort.\r\n\r\nTalkWithCustomer makes it easy, simple, and fast – in fact, you can start getting more calls today… and at absolutely no charge to you.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive to find out how.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS: Don’t just take my word for it, TalkWithCustomer works:\r\nEMA has been looking for ways to reach out to an audience. TalkWithCustomer so far is the most direct call of action. It has produced above average closing ratios and we are thrilled. Thank you for providing a real and effective tool to generate REAL leads. - P MontesDeOca.\r\nBest of all, act now to get a no-cost 14-Day Test Drive – our gift to you just for giving TalkWithCustomer a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start converting up to 100X more leads today!\r\n\r\nIf you&#39;d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=esol.lk\r\n', '2019-11-21', 'Malabe'),
(76, 'Wanniarachchi', 'hasith.mcg@gmail.com', '0777577904', 'Dear Sir/ Madam,\r\n\r\nI am a PTE lecturer who has been conducting classes for one year. PTE stands for Pearson Test of English (a qualification equivalent to IELTS). I would like to know if I can conduct classes at ESOL college.', '2019-11-24', 'Maharagama'),
(77, 'Eric Jones', 'eric@talkwithcustomer.com', '416-385-3200', 'Hi,\r\n\r\nMy name is Eric and I was looking at a few different sites online and came across your site esol.lk.  I must say - your website is very impressive.  I am seeing your website on the first page of the Search Engine. \r\n\r\nHave you noticed that 70 percent of visitors who leave your website will never return?  In most cases, this means that 95 percent to 98 percent of your marketing efforts are going to waste, not to mention that you are losing more money in customer acquisition costs than you need to.\r\n \r\nAs a business person, the time and money you put into your marketing efforts is extremely valuable.  So why let it go to waste?  Our users have seen staggering improvements in conversions with insane growths of 150 percent going upwards of 785 percent. Are you ready to unlock the highest conversion revenue from each of your website visitors?  \r\n\r\nTalkWithCustomer is a widget which captures a website visitor’s Name, Email address and Phone Number and then calls you immediately, so that you can talk to the Lead exactly when they are live on your website — while they&#39;re hot! Best feature of all, International Long Distance Calling is included!\r\n  \r\nTry TalkWithCustomer Live Demo now to see exactly how it works.  Visit http://www.talkwithcustomer.com\r\n\r\nWhen targeting leads, speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 30 minutes vs being contacted within 5 minutes.\r\n\r\nIf you would like to talk to me about this service, please give me a call.  We have a 14 days trial.  Visit http://www.talkwithcustomer.com to start converting up to 100X more leads today!\r\n\r\nThanks and Best Regards,\r\nEric\r\n\r\nIf you&#39;d like to unsubscribe go to http://liveserveronline.com/talkwithcustomer.aspx?d=esol.lk\r\n', '2019-11-24', 'Malabe'),
(78, 'Thilini perera', 'thilinip715@gmail', '0713823871', 'I would like to know adult english course for enhansing knowlege of grammer and spoken english  ', '2019-11-25', 'Battaramulla'),
(79, 'Thilini perera', 'thilinip715@gmail.com', '0713823871', 'I would like to know adult english course for enhansing knowlege of grammer and spoken english  ', '2019-11-25', 'Battaramulla'),
(80, 'ClaytonLocky', 'noreply.venuscoin@gmail.com', '86687519762', 'Hi, This is Venus Coin Project. \r\n \r\nVenus Coin is a new cryptocurrency used in the $ 350 billion night entertainment market (clubs, bars, dating clubs, sexual customs, etc.). \r\n \r\nWe already developed wallet app, exceeded 100,000', '2019-11-28', 'Maharagama'),
(81, 'crypto-mmm', 'williamVex@gmail.com', '84158813756', 'The international Blockchain project &#34;CRYPTO-M&#34; \r\nLeader in short-term investing in the cryptocurrency market. \r\nThe leader in payments for the affiliate program. \r\n \r\nThe investment period is 2 days. \r\nMinimum profit is 10%   \r\nD', '2019-11-29', 'Battaramulla'),
(82, 'ThomasAnderson', 'anthonyswags@gmail.com', '86176773612', 'Hello \r\nI invite you to my team, I work with the administrators of the company directly. \r\n- GUARANTEED high interest on Deposit rates \r\n- instant automatic payments \r\n- multi-level affiliate program \r\nIf you want to be a successf', '2019-12-02', 'Battaramulla'),
(83, 'StephenNak', 'stephendex@gmail.com', '83533988711', 'hi there \r\nI have just checked %domain% for the ranking keywords and to see your SEO metrics and found that you website could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat', '2019-12-05', 'Maharagama'),
(84, 'Dilhani Udawela', 'dilhani@trc.gov.lk', '0753593171', 'When start new classes for 2019 O/L students', '2019-12-06', 'Maharagama'),
(85, 'Athma Ranathunga ', 'dakshikanayaniathma@gmail.com', '0775050910', 'Does your institute have classes for fce or cae. If then how is the course fee? What are the days of classes? I will be pleased if you can reply me with an email ', '2019-12-06', 'Malabe'),
(86, 'Movindhie Galagamage ', 'mmgalagamage2000@gmail.com', '0714453827', 'Hi, I&#39;m 19 years old and I did a/levels this year. Can I start Cambridge english pet/fce course at your institute?\r\n', '2019-12-07', 'Maharagama'),
(87, 'Movindhie Galagamage ', 'mmgalagamage2000@gmail.com', '0714453827', 'Hi,I&#39;m 19 years old and I went to Devi Balika Vidyalaya. I did A /levels this year. Are there any courses that are suitable for school leavers ? Can I start Cambridge english pet level course at your institute? ', '2019-12-09', 'Battaramulla'),
(88, 'pureiwzzup https://google.com', 'geosubcisur1981@mail.ru', '83366443788', 'terpwtupup https://google.com', '2019-12-09', 'Battaramulla'),
(89, 'http://bit.ly/2XJL3FE', 'obiettivoergoterapia@gmail.com', '85497412121', 'Please note an interestingoffers for you. http://bit.ly/2qyGUsj', '2019-12-13', 'Battaramulla'),
(90, 'Eric Jones', 'eric@talkwithcustomer.com', '416-385-3200', 'Hi,\r\n\r\nYou know it’s true…\r\n\r\nYour competition just can’t hold a candle to the way you DELIVER real solutions to your customers on your website esol.lk.\r\n\r\nBut it’s a shame when good people who need what you have to offer wind up settling for second best or even worse.\r\n\r\nNot only do they deserve better, you deserve to be at the top of their list.\r\n \r\nTalkWithCustomer can reliably turn your website esol.lk into a serious, lead generating machine.\r\n\r\nWith TalkWithCustomer installed on your site, visitors can either call you immediately or schedule a call for you in the future.\r\n \r\nAnd the difference to your business can be staggering – up to 100X more leads could be yours, just by giving TalkWithCustomer a FREE 14 Day Test Drive.\r\n \r\nThere’s absolutely NO risk to you, so CLICK HERE http://www.talkwithcustomer.com to sign up for this free test drive now.  \r\n\r\nTons more leads? You deserve it.\r\n\r\nSincerely,\r\nEric\r\nPS:  Odds are, you won’t have long to wait before seeing results:\r\nThis service makes an immediate difference in getting people on the phone right away before they have a chance to turn around and surf off to a competitor&#39;s website. D Traylor, Traylor Law  \r\nWhy wait any longer?  \r\nCLICK HERE http://www.talkwithcustomer.com to take the FREE 14-Day Test Drive and start converting up to 100X more leads today!\r\n\r\nIf you&#39;d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=esol.lk\r\n', '2019-12-14', 'Malabe'),
(91, 'vnxgzCoume', 'znzxmmvd@oiltempof.icu', '87764222188', 'cheap viagra online without prescription generic viagra sales viagra generic online pharmacy   viagra g', '2019-12-16', 'Maharagama'),
(92, 'Peterzep', 'inbox299@glmux.com', '81495893491', '   It&#39;s possible to fork over money for custom made essays via internet drafted by our workforce of United kingdom based mostly writers and editors.\r\n \r\nhttp://termpaper773.yolasite.com\r\nhttp://buycollegeessays841.mystrikingly.com', '2019-12-17', 'Maharagama'),
(93, 'Nipuni', 'nipunidinushika95@gmail.com', '0711535322', 'What are courses that have for after o/l students?', '2019-12-18', 'Maharagama'),
(94, 'ErnesztaSed', 'brown.vitya@bk.ru', 'brown.vitya@bk.ru', 'Recommended! Choose a proven club for gambling! https://drive.google.com/open?id=10lYMS-wi2i798h5zy5GLEVYEe9oEaQKg', '2019-12-18', 'Maharagama'),
(95, 'Danielneips', 'mail.arciris@gmail.com', '86196261217', '??????????????????????? \r\n?????&#2', '2019-12-18', 'Maharagama'),
(96, 'Shyama', 'shyamaherath11@gmail.com', '0718476059', 'My son is 10 now. Hoping to join him to Esol. When is the screening exam and what is the admission fee? ', '2019-12-20', 'Maharagama'),
(97, 'efanzdde https://google.com', 'clovadphovers7@mail.ru', '82114873243', 'ammfgdfe https://google.com', '2019-12-22', 'Battaramulla'),
(98, 'Shiromi', 'shiromi_27@yahoo.com', '0773594473', 'I have registered online application for my son. When is the start new intake and how much for course cost?', '2019-12-22', 'Malabe'),
(99, 'Pharma Exhibition', 'abcex.com@rediffmail.com', '89281282838', 'Hello, \r\n \r\n23rd South East Asian Healthcare Show. \r\n22 - 24 April 2020 - Kuala Lumpur Convention Centre \r\n \r\nKLCC in April will be where you&#39;ll have the opportunity to secure new business opportunities. \r\nSEACare for short covers', '2019-12-23', 'Malabe'),
(100, 'Ulrike Voyles', 'voyles.ulrike@gmail.com', '808-772-9090', 'Do you want to submit your advertisement on 1000&#39;s of Advertising sites every month? One tiny investment every month will get you virtually unlimited traffic to your site forever! Check out our site for details: http://www.postyouradsontonsofsites.xyz', '2019-12-27', 'Battaramulla'),
(101, 'MerlinUnmab', 'jackob.james@yandex.ru', '83563923553', 'Hello! \r\n \r\nDo you know how to spend working hours with benefit? \r\n \r\nYou can grow bitcoins by 1.1% per day! \r\nIt takes 1 minute to start, quicker than a cup of coffee \r\n \r\nTry http://satoshi2020.site \r\n \r\nPowered by Blockchain.', '2019-12-28', 'Battaramulla'),
(102, 'Harrypam', 'no-reply_Cax@gmail.com', '82723779158', 'hi there \r\nwould you want to receive more targeted traffic to esol.lk ? \r\nGet keywords based and Country targeted traffic with us today \r\n \r\nvisit our website for more details \r\nhttps://hyperlabs.co/ \r\n \r\nthanks and regards \r\nHype', '2019-12-31', 'Maharagama'),
(103, 'fenzaeas https://google.com', '12omsinwievar@list.ru', '88718279164', 'gnmdznzm https://google.com', '2020-01-01', 'Battaramulla'),
(104, 'MabelVam', 'alphazenith.info@gmail.com', '85719285754', 'Home movers, Office movers, Corporate movers, Disposal Services, Warehousing, Piano movers. Fast Reply, Affordable Rate, Free Consultation, Free Boxes, No Hidden Cost. Free Consultation. Experience Movers. Whatever your relocation', '2020-01-02', 'Battaramulla'),
(105, '&#39;', 'bas@gmail.com', '0777123456', '&#39;', '2020-01-03', 'Malabe'),
(106, 'Kennethfiess', 'raphaecaT@gmail.com', '86681695414', 'Hi!  esol.lk \r\n \r\nDid you know that it is possible to send letter   legal? \r\nWe tender a new legitimate method of sending commercial offer through contact forms. Such forms are located on many sites. \r\nWhen such appeal are sent, n', '2020-01-03', 'Malabe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE `tbl_level` (
  `level_id` int(255) NOT NULL,
  `level_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`level_id`, `level_name`) VALUES
(1, 'Primary'),
(2, 'Intermediate'),
(3, 'Upper Level');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lib_books`
--

CREATE TABLE `tbl_lib_books` (
  `lib_book_id` int(255) NOT NULL,
  `book_cat_id` int(255) NOT NULL,
  `lib_book_name` varchar(255) NOT NULL,
  `lib_book_url` varchar(1000) NOT NULL,
  `lib_book_image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lib_books`
--

INSERT INTO `tbl_lib_books` (`lib_book_id`, `book_cat_id`, `lib_book_name`, `lib_book_url`, `lib_book_image_url`) VALUES
(24, 13, 'Pet - Advanced 2', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/Compact-PET-SB.jpg'),
(25, 13, 'Pet - Advanced 2', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/Objective-PET-2e-SB.jpg'),
(26, 11, 'L6 - intermediate 3', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/New_Cutting_Edge_Pre-intermediate_Students_39_Boo.jpg'),
(27, 10, 'L5 - intermediate 2', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/New_Cutting_Edge_Upper_Intermediate_Students_39_B.jpg'),
(28, 9, 'L4 – intermediate 1', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/New_Cutting_Edge_Elementary_Students_39_Book_1.jpg'),
(29, 8, 'L3 - Elementary 3', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/home-fun-booklet-3.jpg'),
(30, 8, 'L3 - Elementary 3', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/home-fun-booklet-4.jpg'),
(31, 7, 'L2 - Elementary 2', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/home-fun-booklet-2.jpg'),
(32, 7, 'L2 - Elementary 2', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/storyfun-2-SB.jpg'),
(33, 6, 'L1 – Elementary 1', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/home-fun-booklet-1.jpg'),
(34, 6, 'L1 – Elementary 1', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/storyfun-1-sb.jpg'),
(35, 12, 'Ket - Advanced 1', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/compact-ket-sb.jpg'),
(36, 12, 'Ket - Advanced 1', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/compact-ket-sb-2.jpg'),
(37, 14, 'Fce - Advanced 3', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/fce-advanced-3-1.jpg'),
(38, 14, 'Fce - Advanced 3', 'uploads/images/books/5c6132599c7a7_lorem-isooooom.pdf', 'uploads/images/books_images/fce-advanced-3-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_menu`
--

CREATE TABLE `tbl_main_menu` (
  `main_menu_id` int(11) NOT NULL,
  `main_menu_name` varchar(20) NOT NULL,
  `main_menu_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_main_menu`
--

INSERT INTO `tbl_main_menu` (`main_menu_id`, `main_menu_name`, `main_menu_link`) VALUES
(1, 'About Us', 'about-us'),
(2, 'courses', 'courses'),
(3, 'Events', 'events'),
(4, 'Admissions', 'registrations'),
(5, 'Calendar', 'calendar'),
(6, 'Contact', 'contact-us');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_heading` varchar(100) NOT NULL,
  `news_url` varchar(1000) NOT NULL,
  `news_description` varchar(1000) NOT NULL,
  `news_image` varchar(200) NOT NULL,
  `news_location` varchar(200) NOT NULL,
  `news_time` varchar(20) NOT NULL,
  `news_type` varchar(100) NOT NULL,
  `news_date` date NOT NULL,
  `news_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_heading`, `news_url`, `news_description`, `news_image`, `news_location`, `news_time`, `news_type`, `news_date`, `news_status`) VALUES
(3, 'Fruit Kebab', '3-fruit-kebab', 'As a mean of promoting healthy eating habits, the Fruit Kebab day was held at ESOL Hanwella branch with the participation of teachers and students. In the present era where a high propensity is shown towards instant and processed foods, the Fruit Kebab day was celebrated to show children the significance of consuming natural food and how to enjoy your fruits apart from the usual way they are can be consumed. ', 'uploads/images/news/5c835dc223d2c_fruit-kebab.jpg', 'ESOL College, Hanwella.', '09.00AM', 'archival', '2018-10-03', 1),
(4, 'Art Competition', '4-art-workshop', 'The student life is not as smooth as it should be and sometimes children face a considerable amount of stress due to personal reasons and heavy academic contents. Art Therapy is a program which was initiated to ease the minds of students from the burdens they carry during the student life. Back in 2018 the Art Therapy program was held for the 1st time and in May 2019, it will again take place from a much grander scale. The Art Therapy program encourages students to be more descriptive of their emotions and  to be more creative.', 'uploads/images/news/5bab4e58cae21_art-workshop.jpg', 'ESOL College, Maharagama', '10.00AM', 'upcoming', '2018-08-01', 1),
(5, 'Water Day', '5-water-day', 'With the intention of enlightening young learners on the importance of water to sustain life, Water day was celebrated at Hanwella branch back in 2018. Various kinds of artwork, banners and posters related to the importance of preserving water was displayed at ESOL Hanwella premises and this event was a success thanks to the participation from students and encouragement of teachers. Not only this event was evocative in terms of student creativity, teamwork and motivation but it was widely educative as well.', 'uploads/images/news/5bab4f5a4c38b_water-day.jpg', 'ESOL College, Hanwella.', '10.00AM', 'archival', '2018-09-03', 1),
(6, 'Talent Show', '6-talent-show', 'Allure', 'uploads/images/news/5bab4e58cae21_art-workshop.jpg', 'ESOL College, Maharagama', '09.00AM', '', '2018-09-29', 0),
(7, 'lorem ipsome', '7-lorem-ipsome', 'sFrhetjh', 'uploads/images/news/5bc42de48ee7f_lorem-ipsome.jpg', 'ESOL College, Maharagama', '06.30AM', '', '2018-10-23', 0),
(8, 'ety', '8-ety', 'tjw4etj', 'uploads/images/news/5bc42e2a344b1_ety.jpg', 'hangwella', '04.00AM', '', '2018-10-24', 0),
(9, 'Art Therapy', '9-art-therapy', 'In May 2019, the Art Therapy program was successfully conducted at ESOL College Maharagama by their counseling department to evoke artistic qualities of young learners. The event was held to relax the minds of our young learners and enable them to express themselves through art. During the event, students were provided with art supplies and asked to draw according to their free will. The event ended up with students being not only entertained but with an awaken perspective on expressing themselves by visual mediums.', 'uploads/images/news/5cee734d655cc_art-therapy.jpg', 'ESOL College, Maharagama', '02.30PM', '', '2019-05-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_relation`
--

CREATE TABLE `tbl_relation` (
  `relation_id` int(5) NOT NULL,
  `relation_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_relation`
--

INSERT INTO `tbl_relation` (`relation_id`, `relation_name`) VALUES
(1, 'Father'),
(2, 'Mother'),
(3, 'Brother'),
(4, 'Sister'),
(5, 'Grandparent'),
(6, 'Stepmother'),
(7, 'Stepfather'),
(8, 'Aunt'),
(9, 'Uncle'),
(10, 'Grandmother'),
(11, 'Grandfather'),
(12, 'Guardian'),
(13, 'Trust'),
(14, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sem_calendar`
--

CREATE TABLE `tbl_sem_calendar` (
  `sem_cal_id` int(255) NOT NULL,
  `sem_cal_start_date` date NOT NULL,
  `sem_cal_end_date` date NOT NULL,
  `sem_cal_message` varchar(255) NOT NULL,
  `sem_cal_location` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sem_calendar`
--

INSERT INTO `tbl_sem_calendar` (`sem_cal_id`, `sem_cal_start_date`, `sem_cal_end_date`, `sem_cal_message`, `sem_cal_location`, `user_id`) VALUES
(5, '2019-01-01', '2019-01-01', 'Holiday', '999', 2),
(6, '2019-01-30', '2019-01-31', 'Holiday', '1002,1001,1003', 2),
(7, '2019-03-29', '2019-03-29', 'Holiday', '999', 2),
(8, '2019-03-31', '2019-03-31', 'Holiday', '999', 2),
(9, '2019-04-12', '2019-04-19', 'Holiday', '999', 2),
(10, '2019-05-01', '2019-05-01', 'Holiday', '999', 2),
(11, '2019-05-17', '2019-05-18', 'Holiday', '999', 2),
(12, '2019-07-15', '2019-07-17', 'Holiday', '999', 2),
(13, '2019-08-22', '2019-08-31', 'Holiday', '999', 2),
(14, '2019-09-01', '2019-09-02', 'Holiday', '999', 2),
(15, '2019-10-29', '2019-10-31', 'Holiday', '999', 2),
(17, '2019-12-22', '2019-12-31', 'Holiday', '999', 2),
(18, '2019-04-22', '2019-04-23', 'Holiday', '999', 2),
(19, '2019-04-26', '2019-04-27', 'Holiday', '999', 2),
(20, '2019-05-13', '2019-05-13', 'Holiday', '999', 2),
(21, '2019-11-01', '2019-11-01', 'Holiday', '999', 2),
(22, '2019-11-16', '2019-11-16', 'Holiday', '999', 2),
(23, '2020-01-01', '2020-01-01', 'Holiday', '999', 2),
(24, '2020-01-30', '2020-01-31', 'Holiday', '999', 2),
(25, '2020-02-01', '2020-02-01', 'Holiday', '999', 2),
(26, '2020-03-09', '2020-03-10', 'Holiday', '999', 2),
(27, '2020-04-11', '2020-04-17', 'Holiday', '999', 2),
(28, '2020-05-07', '2020-05-09', 'Holiday', '999', 2),
(29, '2020-06-12', '2020-06-12', 'Holiday', '999', 2),
(30, '2020-06-29', '2020-06-30', 'Holiday', '999', 2),
(31, '2020-07-29', '2020-07-31', 'Holiday', '999', 2),
(32, '2020-08-22', '2020-08-31', 'Holiday', '999', 2),
(33, '2020-09-01', '2020-09-02', 'Holiday', '999', 2),
(34, '2020-10-29', '2020-10-31', 'Holiday', '999', 2),
(35, '2020-11-30', '2020-11-30', 'Holiday', '999', 2),
(36, '2020-12-21', '2020-12-31', 'Holiday', '999', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_heading_one` varchar(255) NOT NULL,
  `slider_heading_two` varchar(1000) NOT NULL,
  `slider_main_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_heading_one`, `slider_heading_two`, `slider_main_img`) VALUES
(4, 'slider-1', 'spiritual energy', 'of wind', 'uploads/images/slider/5e0edfbe0c5d1_slider-1.jpg'),
(5, 'slider-2', 'Books, the children of ', 'the brain', 'uploads/images/slider/5e0d7e2d4cd17_slider-2.jpg'),
(6, 'slider-3', 'teaching to grow their ', 'own plants', 'uploads/images/slider/5e0edeab9dbf5_slider-3.jpg'),
(7, 'slider-4', 'Modesty is the color', 'of virtue', 'uploads/images/slider/5e0d7e63a0187_slider-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffs`
--

CREATE TABLE `tbl_staffs` (
  `staff_id` int(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_level` varchar(255) NOT NULL,
  `student_type` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_batch_id` varchar(255) NOT NULL,
  `student_password` varchar(1000) NOT NULL,
  `student_verify_code` varchar(255) NOT NULL,
  `student_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_level`, `student_type`, `student_email`, `student_batch_id`, `student_password`, `student_verify_code`, `student_status`) VALUES
(10, 'Karthik', 'KAT', 'old', 'admin@gmail.com', '', 'aaa', '', 0),
(20, 'billa', '', 'New', 'naflin576@gmail.com', '', 'aaaa', '8423189341', 0),
(21, 'karthik_kissy', '', 'new', 'naflin5666@gmail.com', '', 'aaaa', '6702320557', 0),
(22, 'ali akbar', '', 'new', 'naflin5676@gmail.com', '', 'aaa', '7984587227', 0),
(23, 'billaboss', '', 'new', 'naflin56688@gmail.com', '', 'aaa', '1696556320', 0),
(24, 'killbillpandy', '', 'new', 'naflin56hy6@gmail.com', '', 'aaa', '5808084444', 0),
(25, 'kissyboy', '', 'new', 'naflin56hh6@gmail.com', '', 'aaa', '7814592813', 0),
(26, 'kilbillabossarraya', '', 'new', 'naflin5jki66@gmail.com', '', 'aaa', '8198694868', 0),
(27, 'killadi', '', 'new', 'naflin566esfg@gmail.com', '', 'aaa', '1996851918', 1),
(28, 'jill kassidy', '', 'new', 'naflinfh566@gmail.com', '', 'aaa', '5582857921', 1),
(29, 'naarilatha', '', 'new', 'naflehin566@gmail.com', '', 'aaa', '5914536755', 1),
(30, 'rajagiriya', '', 'new', 'naflin5rtujer66@gmail.com', '', 'aaa', '4508162632', 1),
(31, 'ragawan', '', 'new', 'naflidtujhn566@gmail.com', '', 'aaa', '9178206136', 1),
(32, 'noodles', '', 'new', 'naflin566rt@gmail.com', '', 'aaa', '7669124257', 0),
(33, 'gilli', '', 'new', 'naflin5dewf66@gmail.com', '', 'aaa', '924035489', 1),
(34, 'rtertuaerh', '', 'new', 'naflin56rdtu6@gmail.com', '', 'aaaa', '8437443144', 1),
(35, 'aerh', '', 'new', 'naflindde566@gmail.com', '', 'aaa', '2934193090', 1),
(44, 'set', '', 'new', 'naflin56dfuyh6@gmail.com', '', 'aaa', '8391523637', 1),
(45, 'GWETG', '', 'new', 'naflin566@gmail.com', '', 'AAA', '6213322769', 1),
(46, 'afgb', '', 'new', 'nssd@gmail.com', '', 'aaa', '8150543381', 0),
(47, 'dgh', '', 'new', 'sdfh@gamail.com', '', '111', '202547636', 0),
(48, 'Shifaz Ameer', '', 'new', 'shifaz@esol.lk', '', 'Shifaz', '6603828883', 1),
(49, 'DanielWroky', '', 'new', 'yourmail240@gmail.com', '', '&Skb5w6x8gS', '-1360296841', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `users_name` varchar(32) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `password`, `users_name`, `user_type`, `user_status`) VALUES
(2, 'admin', '47bce5c74f589f4867dbd57e9ca9f808', 'administrator', 'admin', 1),
(4, 'zax', '0b3bc9ce555f07d127c6da44337e364f', 'kiran', 'admin', 1),
(5, 'Saumya', '0b3bc9ce555f07d127c6da44337e364f', 'rahul khan', 'editor', 1),
(6, 'anna', '0b3bc9ce555f07d127c6da44337e364f', 'anna', 'editor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `user_detail_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `user_type_name` varchar(40) NOT NULL,
  `user_description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `idTeacher` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `teacher_status` int(11) NOT NULL,
  `teacher_cat_id` int(255) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`idTeacher`, `Name`, `teacher_status`, `teacher_cat_id`, `branch_id`) VALUES
(1, 'Malki Konthasinghe', 1, 1, 1002),
(2, 'Chalani Darshika', 1, 1, 1002),
(3, 'Krishna Madushani', 1, 2, 1002),
(4, 'Kavindi Basnayake ', 1, 1, 1000),
(5, 'Anuja Balachandran ', 1, 1, 1001),
(6, 'Bhagya Dambagahagedara', 1, 3, 1003),
(7, 'Nimasha Pieris', 1, 3, 1003),
(8, 'Soquera Mercedita', 1, 1, 1002),
(9, 'Sachini Jayawardena', 1, 1, 1002),
(10, 'Nilakshika Ilangange', 1, 1, 1002),
(11, 'Chethana Hettiarachchi', 1, 3, 1001),
(12, 'Hasantha Sanjeewani', 1, 1, 1001),
(13, 'Dewmi Bartholomeues', 1, 2, 1001),
(14, 'Noshani Vitharana', 1, 1, 1002),
(15, 'Shavera Jayathilake', 1, 2, 1000),
(16, 'Amali Kumari', 1, 1, 1002),
(17, 'Harshani Nisansala', 1, 2, 1000),
(18, 'Yasintha Sewwandi', 1, 1, 1002),
(19, 'Seneli Peiris', 1, 3, 1001),
(20, 'Dhananjali Hindurangala', 1, 1, 1002),
(21, 'Dilmi Karunagoda', 1, 1, 1000),
(22, 'Aysha Nazeer', 1, 2, 1000),
(23, 'Nayagara Withanage', 1, 1, 1003),
(24, 'Piyumi Withanachchi', 1, 2, 1000),
(25, 'Shashikala Indunil', 1, 2, 1002),
(26, 'Thakshila Kulathunga', 1, 2, 1002),
(27, 'Ama Ranaweera', 1, 3, 1000),
(28, 'Fathima Safna', 1, 1, 1002),
(29, 'Sachini Rajapaksha', 1, 2, 1002),
(30, 'Thishuni Nawanjana', 1, 2, 1001),
(31, 'Gayathri Mihirika', 1, 2, 1002),
(32, 'Nirmani Perera', 1, 2, 1003),
(33, 'Isurika Marasinghe', 1, 2, 1003),
(34, 'Gayana Madhushani', 1, 3, 1003),
(35, 'Dulishi Samarawickrama', 1, 1, 1000),
(36, 'Sanchila Mudiyanselage', 1, 2, 1001),
(37, 'Ishini Amarasiri', 1, 2, 1000),
(38, 'Hirunika Suharshani', 1, 2, 1002),
(39, 'Nimesha Rupasinghe', 1, 2, 1003),
(40, 'Kumudu Gamage', 1, 2, 1000),
(41, 'Jayani Alwis', 1, 2, 1002),
(42, 'Hashini Wickramasinghe', 1, 3, 1000),
(43, 'Bhakthi Ranasinghe', 1, 4, 1002),
(44, 'Kamali Choudary', 1, 4, 1001),
(45, 'Sumali Nayanathara', 1, 4, 1001),
(46, 'Krishna Jayakody', 1, 4, 1002),
(47, 'Chalani Gangani ', 1, 4, 1001),
(48, 'Kaushalya Gunasekara', 1, 4, 1001),
(49, 'Chamali Madushika', 1, 4, 1000),
(50, 'Hashini Wickramasinghe', 1, 4, 1002),
(51, 'Hashini Yasora', 1, 4, 1001),
(52, 'Pawani De Silva', 1, 4, 1002),
(53, 'Vishmi Jayasekara', 1, 4, 1003),
(54, 'Ridmi Gamage', 1, 4, 1000),
(55, 'Natasha Hameed', 1, 4, 1000),
(56, 'Surangi Rajapaksha', 1, 4, 1002),
(57, 'Shashini Romesha ', 1, 4, 1002),
(58, 'Indeewari Chandrawansha', 1, 4, 1002),
(59, 'Piyumi Hewapaththuwa', 1, 4, 1002),
(60, 'Hasini Gamalath', 1, 4, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_old`
--

CREATE TABLE `teacher_old` (
  `idTeacher` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `teacher_status` int(11) NOT NULL,
  `teacher_cat_id` int(255) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `footer_contact`
--
ALTER TABLE `footer_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_admission`
--
ALTER TABLE `tbl_admission`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `tbl_admission_child`
--
ALTER TABLE `tbl_admission_child`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `tbl_admission_tkt`
--
ALTER TABLE `tbl_admission_tkt`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `tbl_book_category`
--
ALTER TABLE `tbl_book_category`
  ADD PRIMARY KEY (`book_cat_id`);

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `tbl_calendar`
--
ALTER TABLE `tbl_calendar`
  ADD PRIMARY KEY (`calendar_id`);

--
-- Indexes for table `tbl_calendar_alert`
--
ALTER TABLE `tbl_calendar_alert`
  ADD PRIMARY KEY (`calendar_alert_id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_events_image`
--
ALTER TABLE `tbl_events_image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tbl_footer_contact_links`
--
ALTER TABLE `tbl_footer_contact_links`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `tbl_footer_forum_links`
--
ALTER TABLE `tbl_footer_forum_links`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `tbl_footer_menu`
--
ALTER TABLE `tbl_footer_menu`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `tbl_footer_social_link`
--
ALTER TABLE `tbl_footer_social_link`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `tbl_lib_books`
--
ALTER TABLE `tbl_lib_books`
  ADD PRIMARY KEY (`lib_book_id`);

--
-- Indexes for table `tbl_main_menu`
--
ALTER TABLE `tbl_main_menu`
  ADD PRIMARY KEY (`main_menu_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_relation`
--
ALTER TABLE `tbl_relation`
  ADD PRIMARY KEY (`relation_id`);

--
-- Indexes for table `tbl_sem_calendar`
--
ALTER TABLE `tbl_sem_calendar`
  ADD PRIMARY KEY (`sem_cal_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_staffs`
--
ALTER TABLE `tbl_staffs`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`user_detail_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`idTeacher`);

--
-- Indexes for table `teacher_old`
--
ALTER TABLE `teacher_old`
  ADD PRIMARY KEY (`idTeacher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `footer_contact`
--
ALTER TABLE `footer_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admission`
--
ALTER TABLE `tbl_admission`
  MODIFY `parent_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `tbl_admission_child`
--
ALTER TABLE `tbl_admission_child`
  MODIFY `child_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `tbl_admission_tkt`
--
ALTER TABLE `tbl_admission_tkt`
  MODIFY `student_id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- AUTO_INCREMENT for table `tbl_book_category`
--
ALTER TABLE `tbl_book_category`
  MODIFY `book_cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `tbl_calendar`
--
ALTER TABLE `tbl_calendar`
  MODIFY `calendar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_calendar_alert`
--
ALTER TABLE `tbl_calendar_alert`
  MODIFY `calendar_alert_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_events_image`
--
ALTER TABLE `tbl_events_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `tbl_footer_contact_links`
--
ALTER TABLE `tbl_footer_contact_links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_footer_forum_links`
--
ALTER TABLE `tbl_footer_forum_links`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_footer_menu`
--
ALTER TABLE `tbl_footer_menu`
  MODIFY `footer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_footer_social_link`
--
ALTER TABLE `tbl_footer_social_link`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_inquiry`
--
ALTER TABLE `tbl_inquiry`
  MODIFY `inquiry_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tbl_lib_books`
--
ALTER TABLE `tbl_lib_books`
  MODIFY `lib_book_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_main_menu`
--
ALTER TABLE `tbl_main_menu`
  MODIFY `main_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_relation`
--
ALTER TABLE `tbl_relation`
  MODIFY `relation_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_sem_calendar`
--
ALTER TABLE `tbl_sem_calendar`
  MODIFY `sem_cal_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_staffs`
--
ALTER TABLE `tbl_staffs`
  MODIFY `staff_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `user_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `idTeacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `teacher_old`
--
ALTER TABLE `teacher_old`
  MODIFY `idTeacher` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
