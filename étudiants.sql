-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2025 at 10:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `module6`
--

-- --------------------------------------------------------

--
-- Table structure for table `étudiants`
--

CREATE TABLE `étudiants` (
  `id` int(11) NOT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT '',
  `cv` text NOT NULL DEFAULT "CV de l\'étudiant",
  `dt_naissance` date NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `dt_mis_a_jour` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `étudiants`
--

INSERT INTO `étudiants` (`id`, `prenom`, `nom`, `email`, `cv`, `dt_naissance`, `isAdmin`, `dt_mis_a_jour`) VALUES
(1, 'Alice ', 'Dupont', 'alice.dupont@gmail.com', 'CV de l\'étudiant', '2000-01-15', 0, '2025-02-19 17:49:51'),
(2, 'Bob', 'Martin', 'bob.martin@gmail.Com', 'CV de l\'étudiant', '1999-03-10', 0, '2025-02-19 17:49:51'),
(3, 'Chloé', 'Lemoine', 'chloe.lemoine@example.com', 'CV de l\'étudiant', '1998-12-10', 0, '2025-02-19 17:50:55'),
(4, 'David', 'Bernard', 'david.bernard@example.com', 'CV de l\'étudiant', '2001-05-25', 0, '2025-02-19 17:50:55'),
(5, 'Eve', 'Robert', 'eve.robert@example.com', 'CV de l\'étudiant', '2002-08-30', 0, '2025-02-19 17:52:19'),
(6, 'François', 'Perrier', 'francois.perrier@example.com', 'CV de l\'étudiant', '1997-10-17', 0, '2025-02-19 17:52:19'),
(7, 'Gabrielle', 'Moreau', 'gabrielle.moreau@example.com', 'CV de l\'étudiant', '2003-07-22', 0, '2025-02-19 17:53:14'),
(8, 'Hugo', 'Fournier', 'hugo.fournier@example.com', 'CV de l\'étudiant', '2000-11-05', 0, '2025-02-19 17:53:14'),
(9, 'Isabelle', 'Lemoine', 'isabelle.lemoine@example.com', 'CV de l\'étudiant', '1996-02-19', 0, '2025-02-19 17:54:15'),
(10, 'Julien', 'Lemoine', 'julien.lemoine@example.com', 'CV de l\'étudiant', '1995-06-13', 0, '2025-02-19 17:54:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `étudiants`
--
ALTER TABLE `étudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `étudiants`
--
ALTER TABLE `étudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
