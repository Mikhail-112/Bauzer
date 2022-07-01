-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 27, 2022 at 08:59 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contacts`
--

CREATE TABLE `Contacts` (
  `id_contact` int(11) NOT NULL,
  `fio` varchar(256) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `about` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `GymMasters`
--

CREATE TABLE `GymMasters` (
  `id_gym_master` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `description` text,
  `master_image` varchar(256) DEFAULT NULL,
  `length_of_service` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `GymMasters`
--

INSERT INTO `GymMasters` (`id_gym_master`, `name`, `description`, `master_image`, `length_of_service`) VALUES
(1, 'Анастасия Мельникова', 'Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Равным образом, укрепление и развитие внутренней структуры не оставляет шанса для системы массового участия', 'person_3.jpg', 2),
(2, 'Александр Иванов', 'Вот вам яркий пример современных тенденций — высокое качество позиционных исследований в значительной степени обусловливает важность переосмысления внешнеэкономических политик!', 'person_2.jpg', 6),
(3, 'Иван Алексеев', ' Равным образом, укрепление и развитие внутренней структуры не оставляет шанса для системы массового участия. Кстати, представители современных социальных резервов представляют собой не что иное, как \r\n', 'person_1.jpg', 3),
(4, 'Петр Мужиков', 'Кстати, представители современных социальных резервов представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. \r\n\r\n', 'person_4.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `GymMasters_on_Train`
--

CREATE TABLE `GymMasters_on_Train` (
  `ID_GymOnTrain` int(11) NOT NULL,
  `ID_train` int(11) DEFAULT NULL,
  `id_gym_master` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `GymMasters_on_Train`
--

INSERT INTO `GymMasters_on_Train` (`ID_GymOnTrain`, `ID_train`, `id_gym_master`) VALUES
(8, 1, 2),
(10, 1, 4),
(12, 2, 1),
(11, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE `News` (
  `id_news` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `content` text,
  `news_date` date DEFAULT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id_news`, `title`, `content`, `news_date`, `file`) VALUES
(11, '123', '123,mn', '2022-06-27', '62b963734897cabout_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Train`
--

CREATE TABLE `Train` (
  `ID_train` int(11) NOT NULL,
  `train_name` varchar(256) DEFAULT NULL,
  `description` text,
  `train_image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Train`
--

INSERT INTO `Train` (`ID_train`, `train_name`, `description`, `train_image`) VALUES
(1, 'Бодибилдинг', 'Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Равным образом, укрепление и развитие внутренней структуры не оставляет шанса для системы массового участия. Ясность нашей позиции очевидна: существующая теория требует анализа существующих финансовых и административных условий. Вот вам яркий пример современных тенденций — высокое качество позиционных исследований в значительной степени обусловливает важность переосмысления внешнеэкономических политик!', 'img_1.jpg'),
(2, 'Кроссфит', 'Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Равным образом, укрепление и развитие внутренней структуры не оставляет шанса для системы массового участия. Ясность нашей позиции очевидна: существующая теория требует анализа существующих финансовых и административных условий. Вот вам яркий пример современных тенденций — высокое качество позиционных исследований в значительной степени обусловливает важность переосмысления внешнеэкономических политик!', 'img_2.jpg'),
(3, 'Бокс ', 'Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Равным образом, укрепление и развитие внутренней структуры не оставляет шанса для системы массового участия. Ясность нашей позиции очевидна: существующая теория требует анализа существующих финансовых и административных условий. Вот вам яркий пример современных тенденций — высокое качество позиционных исследований в значительной степени обусловливает важность переосмысления внешнеэкономических политик!', 'img_3.jpg'),
(4, 'Тяжелая Атлетика', 'Кстати, многие известные личности объявлены нарушающими общечеловеческие нормы этики и морали. Равным образом, укрепление и развитие внутренней структуры не оставляет шанса для системы массового участия. Ясность нашей позиции очевидна: существующая теория требует анализа существующих финансовых и административных условий. Вот вам яркий пример современных тенденций — высокое качество позиционных исследований в значительной степени обусловливает важность переосмысления внешнеэкономических политик!', 'img_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID_user` int(11) NOT NULL,
  `login` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID_user`, `login`, `password`, `name`, `role`) VALUES
(1, '1', '1', '1', 1),
(4, '2', '2', '2', 0),
(5, '1123', '', '1', 0),
(6, '100', '100', '100', 0),
(7, '200', '200', 'Тест', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Users_trains`
--

CREATE TABLE `Users_trains` (
  `ID_user_train` int(11) NOT NULL,
  `ID_user` int(11) DEFAULT NULL,
  `ID_train` int(11) DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  `id_gym_master` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users_trains`
--

INSERT INTO `Users_trains` (`ID_user_train`, `ID_user`, `ID_train`, `dateEnd`, `id_gym_master`) VALUES
(25, 7, 1, '2022-07-27', 2),
(26, 7, 2, '2022-07-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Contacts`
--
ALTER TABLE `Contacts`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `GymMasters`
--
ALTER TABLE `GymMasters`
  ADD PRIMARY KEY (`id_gym_master`);

--
-- Indexes for table `GymMasters_on_Train`
--
ALTER TABLE `GymMasters_on_Train`
  ADD PRIMARY KEY (`ID_GymOnTrain`),
  ADD UNIQUE KEY `ID_train_2` (`ID_train`,`id_gym_master`),
  ADD KEY `id_gym_master` (`id_gym_master`),
  ADD KEY `ID_train` (`ID_train`) USING BTREE;

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `Train`
--
ALTER TABLE `Train`
  ADD PRIMARY KEY (`ID_train`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID_user`);

--
-- Indexes for table `Users_trains`
--
ALTER TABLE `Users_trains`
  ADD PRIMARY KEY (`ID_user_train`),
  ADD UNIQUE KEY `ID_train` (`ID_train`,`ID_user`),
  ADD KEY `ID_user` (`ID_user`),
  ADD KEY `id_gym_master` (`id_gym_master`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Contacts`
--
ALTER TABLE `Contacts`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `GymMasters`
--
ALTER TABLE `GymMasters`
  MODIFY `id_gym_master` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `GymMasters_on_Train`
--
ALTER TABLE `GymMasters_on_Train`
  MODIFY `ID_GymOnTrain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `News`
--
ALTER TABLE `News`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Train`
--
ALTER TABLE `Train`
  MODIFY `ID_train` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Users_trains`
--
ALTER TABLE `Users_trains`
  MODIFY `ID_user_train` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `GymMasters_on_Train`
--
ALTER TABLE `GymMasters_on_Train`
  ADD CONSTRAINT `gymmasters_on_train_ibfk_1` FOREIGN KEY (`ID_train`) REFERENCES `Train` (`ID_train`),
  ADD CONSTRAINT `gymmasters_on_train_ibfk_2` FOREIGN KEY (`id_gym_master`) REFERENCES `GymMasters` (`id_gym_master`);

--
-- Constraints for table `Users_trains`
--
ALTER TABLE `Users_trains`
  ADD CONSTRAINT `users_trains_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `Users` (`ID_user`),
  ADD CONSTRAINT `users_trains_ibfk_2` FOREIGN KEY (`ID_train`) REFERENCES `Train` (`ID_train`),
  ADD CONSTRAINT `users_trains_ibfk_3` FOREIGN KEY (`id_gym_master`) REFERENCES `GymMasters` (`id_gym_master`);
