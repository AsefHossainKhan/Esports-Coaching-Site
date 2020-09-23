-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 12:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `profilePicture` varchar(255) NOT NULL,
  `root` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `userId`, `adminName`, `profilePicture`, `root`) VALUES
(1, 22, 'admin', '../res/default.jpg', 'masterAdmin'),
(2, 23, 'admin1', '', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `coachId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `phone` int(15) NOT NULL,
  `IGN` varchar(255) NOT NULL,
  `discord` varchar(255) NOT NULL,
  `steam` varchar(255) NOT NULL,
  `mmr` int(11) NOT NULL,
  `primaryRole` varchar(255) NOT NULL,
  `wallet` int(11) NOT NULL,
  `achievements` text NOT NULL,
  `timetable` text NOT NULL,
  `aboutMe` text NOT NULL,
  `profilePicture` varchar(255) NOT NULL,
  `setupStatus` varchar(50) NOT NULL DEFAULT 'false',
  `approveStatus` varchar(50) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`coachId`, `userId`, `phone`, `IGN`, `discord`, `steam`, `mmr`, `primaryRole`, `wallet`, `achievements`, `timetable`, `aboutMe`, `profilePicture`, `setupStatus`, `approveStatus`) VALUES
(1, 9, 1878120028, 'Hazin', '123', '123', 123, '123', 0, '1. Head Coach for Pro Team Enterprise Gaming\n2. Featured on: CBS, CNBC, TechRadar and The Daily Telegraph\n3. Qualified for 7/10 World Cup Final Weekends\n4. 2,000  Wins / Multiple 25  Kill games\n5. BP Pro FunCup - 1st Place', 'Monday 02:00a - 03:00a\nTuesday	12:00a - 06:00a,\n09:00p - 10:00p\nWednesday 12:00a - 06:00a\nThursday 12:00a - 06:00a\nFriday 12:00a - 06:00a\nSaturday 12:00a - 06:00a\nSunday	Not Available', 'Hey, I’m Harry Darwin (DarzFN). I’ve been a competitive gamer for the last 10 years across multiple titles including CS:GO, PUBG, Call of Duty, Apex Legends and most importantly Fortnite. I have been coaching for over a year now, fine tuning my coaching skills and curriculum to be one of the most efficient and professional Fortnite coaches in the world.\r\n\r\nProfessional Fortnite Player for EIG eSports (6 month contract)\r\nThousands in Fortnite winnings. Qualified for all World Cup Finals as of yet.\r\nProfessional Fortnite Scrim experience since the first pro scrims.\r\nFeatured on CBS, WSJ, CNBC, TechRadar, The Daily Telegraph, The Spectator, MSN, Dailymotion, Businessinsider, Yahoo finance and more…\r\nBP Pro FunCup – 1st Place\r\nTop 10KD Globally (FortniteTracker)\r\n500+ hours Coaching experience\r\nArena / Competitive Expert\r\n\r\nTo start your coaching experience I will run you through a quick creative course to asses and fully understand your skill level. From here I can tailor your coaching experience to really take your game to the next level. No student has the same program. I am quick to analyze your strong and weak points to create a personal program for each student. I have coached players from all age groups and had excellent feedback from my students.\r\n\r\nI like to create a fun atmosphere for my students and make sure everyone is always comfortable during our sessions. “He have so much respect for his clients and knows what he’s doing.” “Extremely down to earth and helpful!” “I was super nervous before our lesson but after a couple of minutes, I thought I was playing with one of my best friends! “\r\n\r\nI would consider myself a competitive coaching specialist. Unlike other coaches I have been a successful Fortnite professional since day one with great success. I transfer my skills that have taken me thousands of hours to learn and fine tune. I have coached multiple semi-pro players helping them improve their competitive strategy. One of my recent students just qualified for week 2 finals and came away with $350 in prize winnings.\r\n\r\nI’m a very laid back person with excellent social skills. I’m quick to connect with my students asses their gameplay and my style is down to earth and friendly. If you choose me as your coach I really look forward to meeting you!', '../res/9.png', 'true', 'false'),
(3, 11, 1878120028, 'tabiul', 'tabiul', 'tabiul', 10000, 'tabiul', 0, 'tabiul', 'tabiul', 'tabiul', '../res/default.jpg', 'true', 'false'),
(4, 14, 2147483647, 'Hundulala', 'hundulala', 'hundulala', 3000, 'hundulala', 0, 'hundulala', 'hundulala', 'hundulala', '../res/default.jpg', 'true', 'false'),
(6, 18, 123, '123', '123', '123', 123, '123', 0, '123', '123', '123', '../res/default.jpg', 'true', 'false'),
(7, 19, 123, '123', '123', '123', 123, '123', 0, '1. Ex-teammate of GH-GOD\n2. Beat OG 1 game in TI 2018 EU Open Qualifiers\n3. Full-Time Coach since 2016 (500  students coached)\n4. Peak MMR 7500 >\n5. Former Carry: Unchained Esports\nFirst in X-Bet.co Rampage Series #3\nFirst Place in the GALAXY BATTLES: EMERGING WORLDS 2018 Major EU Open Qualifier\nFormer captain of team Slice N Dice\nKIEV Major EU Open Qualifier 1 Semi-Final\nKIEV Major EU Open Qualifier 2 Semi-Final\nManila Major EU Open Qualifier Semi-Final\nProDota Cup Europe #27\nSecond Place: World E Games\nThe International 2017 EU Open Qualifier 1 Semi-Final\nTop 20 WESG 2017 China LAN Grand Finals\nTop 4 in the Galaxy Battles Major of EU Closed Qualifier\nTop 52 EU Leaderboards\nWinner: D2CL Open Qualifier', '123', '123', '../res/default.jpg', 'true', 'false'),
(8, 17, 1878120028, 'copyCat', 'copyCat #6024', 'copyCat', 6000, 'Offlane', 1100, '\'1. Ex-teammate of GH-GOD\n2. Beat OG 1 game in TI 2018 EU Open Qualifiers\n3. Full-Time Coach since 2016 (500  students coached)\n4. Peak MMR 7500 >\n5. Former Carry: Unchained Esports', 'Monday	12:00a - 02:00p,\n08:00p - 11:59p\nTuesday	12:00a - 03:00p\nWednesday	02:00a - 02:00p\nThursday	12:00a - 02:00p,\n07:00p - 11:59p\nFriday	01:00a - 11:59p\nSaturday	Anytime\nSunday	Anytime', 'Hello, my name is Hady! I am a 26 years old Egyptian Pro DOTA player. I\'ve been perfecting my DOTA skills for more than 10 years! I\'ve played for many Pro Teams, including: Team Abraxas, Goomba, Cyclones, E-Lab and Slice N\' Dice. I am the manager and captain of team Slice N\' Dice which reached the Semi-Final of TI 2017, KIEV Major and Manila Major EU Open Qualifiers. ( Jafar-KaratehKid-Ar3a-', '../res/17.jpeg', 'true', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginId`, `userId`, `password`, `question`, `answer`) VALUES
(1, 9, '123123123', 'What was your first competitive game?', 'cs'),
(2, 10, '123123123', '', ''),
(3, 11, '123123123', 'tabiul', 'tabiul'),
(4, 12, '123123123', '', ''),
(5, 13, '123123123', '', ''),
(6, 14, '123123123', 'hundulala', 'hundulala'),
(7, 15, '123123123', '', ''),
(9, 17, 'copycat8', 'Who was the senpai you had a crush on?', 'Fahmida'),
(10, 18, '123123123', '123', '123'),
(11, 19, '123123123', '123', '123'),
(12, 20, '123123123', '', ''),
(13, 21, '123123123', '', ''),
(14, 22, 'adminadmin', '', ''),
(15, 23, 'adminadmin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `packageId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `packagePrice` varchar(255) NOT NULL,
  `packageDuration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`packageId`, `userId`, `packageName`, `packagePrice`, `packageDuration`) VALUES
(15, 9, 'Economy', '10', '1 hour'),
(16, 9, 'test', '123', '123'),
(24, 9, 'test', 'test', 'test'),
(27, 14, 'hourly', '200', '1 hour'),
(29, 14, 'monthly', '10000', '1 month'),
(31, 17, 'Gorib er BSJ', '500', '1 hour'),
(32, 17, '50/50 EE', '600', '1.5 hours'),
(33, 17, 'Backseat Gaming 101', '5000', '24/7');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `reviewerId` int(11) NOT NULL,
  `review` text NOT NULL,
  `featuredReview` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `userId`, `reviewerId`, `review`, `featuredReview`) VALUES
(1, 9, 10, 'Good player', 'true'),
(2, 9, 10, 'Good player', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `phone` int(15) NOT NULL,
  `IGN` varchar(255) NOT NULL,
  `discord` varchar(255) NOT NULL,
  `steam` varchar(255) NOT NULL,
  `wallet` int(30) NOT NULL DEFAULT 0,
  `profilePicture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentId`, `userId`, `phone`, `IGN`, `discord`, `steam`, `wallet`, `profilePicture`) VALUES
(1, 15, 2147483647, 'Robot', 'Eagle', 'Eagles', 0, '../res/default.jpg'),
(2, 20, 0, '0', '0', '0', 0, '../res/default.jpg'),
(3, 21, 0, '0', '0', '0', 0, '../res/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactionId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `coachId` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transactionId`, `studentId`, `coachId`, `amount`, `date`) VALUES
(1, 1, 8, 500, '3:01 AM 23-SEP-20'),
(2, 1, 8, 600, '3:01 AM 23-SEP-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `name`, `email`, `userType`) VALUES
(9, 'asefs', 'Asef Hossain Khan', 'asefhossain@gmail.com', 'Coach'),
(10, 'Hazin', 'Asef Hossain', 'hazin@yahoo.com', 'Student'),
(11, 'asef', 'Asef Khan', 'asefhossain123@gmail.com', 'Coach'),
(12, 'tabiul', 'Tabiul', 'tabiul@gmail.com', 'Student'),
(13, 'joardar', 'joardar', 'joardar@yahoo.com', 'Coach'),
(14, 'hundulala', 'asef hundulala', 'hundulala@gmail.com', 'Coach'),
(15, 'RobotEagle', 'Mobin Vai', 'mobinvai@gmail.com', 'Student'),
(17, 'copycat', 'Ferdous Utsho', 'copycat@gmail.com', 'Coach'),
(18, 'test', '123', '123@gmail.com', 'Coach'),
(19, 'raikiri', 'Anurag', 'raikiri@gmail.com', 'Coach'),
(20, 'student1', 'student1', 'student1@gmail.com', 'Student'),
(21, 'student2', 'student2', 'student2@gmail.com', 'Student'),
(22, 'admin', 'admin', 'admin@admin.com', 'Admin'),
(23, 'admin1', 'admin1', 'admin1@gmail.com', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`coachId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`packageId`),
  ADD KEY `packages_ibfk_1` (`userId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactionId`),
  ADD KEY `studentId` (`studentId`),
  ADD KEY `coachId` (`coachId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `coachId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `packageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `coaches`
--
ALTER TABLE `coaches`
  ADD CONSTRAINT `coaches_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`studentId`) REFERENCES `students` (`studentId`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`coachId`) REFERENCES `coaches` (`coachId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
