-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2025 at 09:06 AM
-- Server version: 8.0.35
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumini`
--

CREATE TABLE `alumini` (
  `prn_no` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `clg_name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `crs_start_year` int NOT NULL,
  `passout_year` int NOT NULL,
  `employment_status` varchar(50) DEFAULT NULL,
  `oraganization_name` varchar(100) DEFAULT NULL,
  `experience` int DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `income` int DEFAULT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ph_no` bigint NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alumini`
--

INSERT INTO `alumini` (`prn_no`, `first_name`, `last_name`, `clg_name`, `branch`, `crs_start_year`, `passout_year`, `employment_status`, `oraganization_name`, `experience`, `designation`, `income`, `email_id`, `password`, `ph_no`, `verified`) VALUES
('123213', 'fldjf', 'sdfdsf', '', '', 2019, 2029, 'unemployed', '', 0, '', 0, 'harry@gmail.com', '123456', 0, 1),
('175', 'Haridas', 'Khambe', 'college 2', 'Information Technology', 2017, 2025, 'employed', '', 0, '', 0, 'hary@gmail.com', 'ksdhfkdfhksd', 9404016059, 1),
('157', 'harry', 'khambe', 'college 2', 'Computer Science & Engineering', 2023, 2026, 'employed', 'abc', NULL, 'tester', 40000, 'harrykhambe@gmail.com', 'harry@123', 9404016059, 1),
('157', 'abhi', 'gurav', 'college 1', 'Computer Science & Engineering', 2023, 2026, 'employed', 'abc', NULL, 'tester', 40000, 'harrykhambe@gmail.com', 'abhi@gmail.com', 94040167878, 1),
('156', 'aryan', 'shinde', 'college 3', 'Computer Science & Engineering', 2023, 2026, 'self-employed', 'abc', NULL, 'tester', 40000, 'aryanshinde@gmail.com', 'aryan@123', 9404016765, 0),
('188', 'harry', 'khambe', 'college 1', 'Computer Science & Engineering', 2023, 2026, 'employed', '', 2, 'CEO', 50000, 'haridas@gmail.com', 'hari@123', 9404016059, 1);

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`username`, `password`) VALUES
('shindearyan12nov@gmail.com', '12345'),
('hary@gmail.com', 'ksdhfkdfhksd'),
('harrykhambe@gmail.com', 'harry@123'),
('haridas@gmail.com', 'hari@123'),
('harry@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `title` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`title`, `event_date`, `description`, `department`) VALUES
('Campus Closure Due to Inclement Weather', '2024-03-22', 'Dear Students,\r\n\r\nDue to the forecasted severe weather conditions, we regret to inform you that the college campus will be closed tomorrow, [Date], for the safety of all students, faculty, and staff.', 'computer engineering '),
('Annual College Fest - Call for Volunteers!', '2024-03-18', 'Dear Students,\r\n\r\nExciting times are ahead as we gear up for our Annual College Fest, scheduled to take place on [Date]. We\'re looking for enthusiastic volunteers to join our organizing team and make this event a huge success!', 'civil engineering '),
('Engineering Innovators Symposium 2024', '2024-10-11', 'The Engineering Innovators Symposium 2024 will highlight cutting-edge research and projects in AI, robotics, and sustainable solutions.', 'Computer Science & Engineering'),
('Workshop on Artificial Intelligence and Machine Learning', '2024-10-12', 'Join us for a full-day workshop on Artificial Intelligence and Machine Learning, where industry experts and professors will cover the basics of AI, ML algorithms, and practical applications.', 'Information Technology'),
('Campus Closure Due to Inclement Weather', '2024-12-30', 'Due to the forecasted severe weather conditions, the campus will be closed for the day. Please stay safe and check for further updates.', 'General'),
('Annual College Fest - Call for Volunteers!', '2024-12-25', 'Exciting times are ahead as we gear up for the Annual College Fest! Volunteers are needed to help with various activities and events. Sign up now!', 'General'),
('Engineering Innovators Symposium 2024', '2024-12-15', 'The Engineering Innovators Symposium 2024 will highlight cutting-edge technological advancements and innovations across various engineering disciplines.', 'Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`date`, `description`, `department`) VALUES
('2024-03-22', 'We hope this notice finds you well. We would like to inform you about some important changes in the college timetable effective from [Date].', 'computer engineering '),
('2024-03-13', 'Benefits of volunteering include gaining valuable experience, building leadership skills, networking with peers and professionals, and earning recognition for your contributions.', 'civil engineering ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
