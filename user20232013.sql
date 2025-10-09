-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2025 at 04:56 AM
-- Server version: 10.11.13-MariaDB-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user20232013`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE `aboutme` (
  `id` int(11) NOT NULL,
  `tentang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`id`, `tentang`) VALUES
(1, 'I\'m a fast learner who loves creating new things in 2D and 3D model software and exploring different ideas. In my free time, I love photography, it help me capture moments from unique perspectives and express how I see the world.');

-- --------------------------------------------------------

--
-- Table structure for table `chartt`
--

CREATE TABLE `chartt` (
  `id` int(11) NOT NULL,
  `label` text NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chartt`
--

INSERT INTO `chartt` (`id`, `label`, `value`) VALUES
(1, 'CAD', 90),
(2, 'CAM', 90),
(3, 'Electrical\r\nMaintenance', 85),
(4, 'Programming', 60),
(5, 'Electrical Drawing', 80);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `tahunn` text NOT NULL,
  `institusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `tahunn`, `institusi`) VALUES
(1, '2023-2026', 'Diplom Engineering from ATMI Surakarta Polytechnic (Mechatronics Engineering)\r\n'),
(2, '2020-2023', 'St. Michael Vocational High School (Mechanical Engineering)');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `pengalaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `tahun`, `pengalaman`) VALUES
(1, '2022', 'Internship at Production Unit Michael Vocational High School (1 Month)');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicee`
--

CREATE TABLE `servicee` (
  `id` int(11) NOT NULL,
  `layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicee`
--

INSERT INTO `servicee` (`id`, `layanan`) VALUES
(1, 'CAD (Computer-Aided Design) services provide precise and efficient solutions for creating, modifying, and optimizing design projects in both 2D and 3D formats. These services include drafting detailed 2D mechanical drawings, developing 3D models, and producing accurate visualizations for engineering, manufacturing, and product design. Using advanced CAD software such as AutoCAD, SolidWorks, or Fusion360, can ensure accuracy, consistency, and adherence to industry standards. CAD services help streamline the design process, reduce human error, and enable clients to visualize and refine their concepts before production or construction begins.'),
(2, 'CAM (Computer-Aided Manufacturing) services focus on transforming digital designs into precise, real-world products through automated machining and production processes. By integrating with CAD models, CAM software controls CNC machines, optimizing tool paths, cutting speeds, and material usage to ensure high efficiency and accuracy in manufacturing. This technology minimizes waste, shortens production time, and enhances the quality of the final product.'),
(3, 'Electrical maintenance services involve the inspection, testing, repair, and servicing of electrical systems and equipment to ensure safe and reliable operation. In addition to routine maintenance and troubleshooting, provide detailed 2D and 3D electrical wiring drawings to support installation, layout planning, and system upgrades. These drawings help visualize complex wiring systems, improve coordination, and ensure compliance with design and safety standards. Regular electrical maintenance and precise wiring documentation reduce downtime, prevent system failures, and extend the lifespan of electrical infrastructure.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `keterangan`) VALUES
(1, 'CAD', 'Designing 2D and 3D Models'),
(2, 'CAM', 'Automate and Control Machine Using Software like MasterCAM, SolidCAM, Fusion 360'),
(3, 'Electrical', 'Electrical Maintenance, Electrical 2D and 3D Wiring');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chartt`
--
ALTER TABLE `chartt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicee`
--
ALTER TABLE `servicee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chartt`
--
ALTER TABLE `chartt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `servicee`
--
ALTER TABLE `servicee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
