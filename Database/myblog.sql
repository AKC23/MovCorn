-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 08:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, ' Fantasy '),
(2, 'Science Fiction'),
(3, 'Horror'),
(4, 'Drama'),
(5, 'Comedy'),
(6, 'Thriller'),
(7, 'Action'),
(8, 'Crime'),
(9, 'Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `name` varchar(200) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `name`, `post_id`, `created_at`) VALUES
(1, 'Great Movie ', 'Dr. Strange', 3, '2022-02-14 08:55:11'),
(2, 'Fantastic Movie', 'Hero Alam', 3, '2022-02-14 08:55:11'),
(4, 'Mind-blowing', 'Ahnaf Bro', 5, '2022-02-14 13:26:47'),
(5, 'Mind-blowing', 'Ahnaf Bro', 5, '2022-02-14 13:27:30'),
(6, 'Most scary movie of all time lol', 'Bhootnath', 19, '2022-02-14 13:29:56'),
(7, 'Hilarious Movie ', 'Asif', 22, '2022-02-14 18:37:33'),
(8, 'Lol Movie', 'Ahmad', 22, '2022-02-15 05:54:16'),
(9, 'Awesome Movie ', 'Karim', 31, '2022-02-19 17:38:44'),
(10, 'Double Trouble', 'Asif Iftekher Fahim', 13, '2022-02-20 05:46:17'),
(11, 'awesome movie', 'Asif Iftekher Fahim', 2, '2022-02-20 07:59:49'),
(12, 'great movie', 'ahmad', 2, '2022-02-20 08:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_id`, `image`) VALUES
(1, 1, '1.jpg'),
(2, 2, '2.jpg'),
(3, 3, '3.jpg'),
(4, 4, '4.jpg'),
(5, 5, '5.jpg'),
(6, 6, '6.jpg'),
(7, 7, '7.jpg'),
(8, 8, '8.jpg'),
(9, 9, '9.jpg'),
(10, 10, '10.jpg'),
(11, 11, '11.jpg'),
(12, 12, '12.jpg'),
(13, 13, '13.jpg'),
(14, 14, '14.jpg'),
(15, 15, '15.jpg'),
(16, 16, '16.jpg'),
(17, 17, '17.jpg'),
(18, 18, '18.jpg'),
(19, 19, '19.jpg'),
(20, 20, '20.jpg'),
(21, 21, '21.jpg'),
(22, 22, '22.jpg'),
(23, 24, '24.jpg'),
(24, 25, '25.jpg'),
(25, 26, '26.jpg'),
(26, 27, '27.jpg'),
(27, 28, '28.jpg'),
(30, 31, '31.jpg'),
(31, 32, '32.jpg'),
(32, 33, '33.jpg'),
(33, 34, '34.jpg'),
(34, 35, '35.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `action`) VALUES
(1, 'Home', 'index.php'),
(2, 'Genre', '#'),
(3, 'Ticket', '../Ticket/ticket_form.php'),
(4, 'Post', 'ad/form.php');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL,
  `pname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Title`, `content`, `created_at`, `category_id`, `pname`) VALUES
(1, 'The Shawshank Redemption', 'Andy Dufresne, a successful banker, is arrested for the murders of his wife and her lover, and is sentenced to life imprisonment at the Shawshank prison. He becomes the most unconventional prisoner.', '2022-02-13 05:26:13', 4, 'Asif Iftekher Fahim'),
(2, 'Se7en', 'A serial killer begins murdering people according to the seven deadly sins, and it is up to a detective who is about to retire and another who just moved to the city to bring him to justice.', '2022-02-13 05:26:13', 6, 'Ahmadul Karim Chowdhury'),
(3, 'Vertigo', 'Detective Scottie who suffers from acrophobia is hired to investigate the strange activities of an old friend\'s wife. She commits suicide while Scottie becomes dangerously obsessed with her.', '2022-02-13 12:14:16', 6, 'Tamim Iqbal'),
(4, 'The Dark Knight', 'After Gordon, Dent and Batman begin an assault on Gotham\'s organised crime, the mobs hire the Joker, a psychopathic criminal mastermind who offers to kill Batman and bring the city to its knees.', '2022-02-13 12:14:16', 7, 'Nilab Rahman'),
(5, 'Inception', 'Cobb steals information from his targets by entering their dreams. Saito offers to wipe clean Cobb\'s criminal history as payment for performing an inception on his sick competitor\'s son.', '2022-02-13 12:15:17', 2, 'Tahsina Mutthaki'),
(6, 'Tenet', 'When a few objects that can be manipulated and used as weapons in the future fall into the wrong hands, a CIA operative, known as the Protagonist, must save the world.', '2022-02-13 12:15:17', 2, 'Sakib Al Hasan'),
(7, 'The Godfather', 'Don Vito Corleone, head of a mafia family, decides to hand over his empire to his youngest son Michael. However, his decision unintentionally puts the lives of his loved ones in grave danger.', '2022-02-13 12:16:45', 8, 'Mehedi Hasan Abir'),
(8, 'The Godfather: Part II', 'Michael, Vito Corleone\'s son, attempts to expand his family\'s criminal empire. While he strikes a business deal with gangster Hyman Roth, he remains unaware of the lurking danger.', '2022-02-13 12:16:45', 8, 'Akib Al Azhar'),
(9, 'The Lord of the Rings: The Fellowship of the Ring', 'A young hobbit, Frodo, who has found the One Ring that belongs to the Dark Lord Sauron, begins his journey with eight companions to Mount Doom, the only place where it can be destroyed.', '2022-02-13 12:18:58', 1, 'Ahtar Ali Khan'),
(10, 'The Lord of the Rings: The Two Towers', 'Frodo and Sam arrive in Mordor with the help of Gollum. A number of new allies join their former companions to defend Isengard as Saruman launches an assault from his domain.', '2022-02-13 12:18:58', 1, 'Imrul kayes'),
(11, 'Harry Potter and the Sorcerer\'s Stone', 'Harry Potter, an eleven-year-old orphan, discovers that he is a wizard and is invited to study at Hogwarts. Even as he escapes a dreary life and enters a world of magic, he finds trouble awaiting him.', '2022-02-13 12:20:21', 1, 'Gal Gadot'),
(12, 'Harry Potter and the Chamber of Secrets', 'A house-elf warns Harry against returning to Hogwarts, but he decides to ignore it. When students and creatures at the school begin to get petrified, Harry finds himself surrounded in mystery.', '2022-02-13 12:20:21', 1, 'Farhana Binte Anis'),
(13, 'Harry Potter and the Prisoner of Azkaban', 'Harry, Ron and Hermoine return to Hogwarts just as they learn about Sirius Black and his plans to kill Harry. However, when Harry runs into him, he learns that the truth is far from reality.', '2022-02-13 12:21:42', 1, 'Dipu Deb'),
(14, 'Harry Potter and the Goblet of Fire', 'When Harry is chosen as a fourth participant of the inter-school Triwizard Tournament, he is unwittingly pulled into a dark conspiracy that endangers his life.', '2022-02-13 12:21:42', 1, 'Arfayet Alam Provat'),
(15, 'Harry Potter and the Order of the Phoenix', 'Harry Potter and Dumbledore\'s warning about the return of Lord Voldemort is not heeded by the wizard authorities who, in turn, look to undermine Dumbledore\'s authority at Hogwarts and discredit Harry.', '2022-02-13 12:22:27', 1, 'karim Benzema'),
(16, 'Harry Potter and the Half-Blood Prince', 'Dumbledore and Harry Potter learn more about Voldemort\'s past and his rise to power. Meanwhile, Harry stumbles upon an old potions textbook belonging to a person calling himself the Half-Blood Prince.', '2022-02-13 12:22:27', 1, 'Samantha Ruth Pravu'),
(17, 'Harry Potter and the Deathly Hallows: Part 1', 'After Voldemort takes over the Ministry of Magic, Harry, Ron and Hermione are forced into hiding. They try to decipher the clues left to them by Dumbledore to find and destroy Voldemort\'s Horcruxes.', '2022-02-13 12:23:26', 1, 'Ahmed Al Wasi'),
(18, 'Harry Potter And The Deathly Hallows II', 'Harry, Ron and Hermione race against time to destroy the remaining Horcruxes. Meanwhile, the students and teachers unite to defend Hogwarts against Lord Voldemort and the Death Eaters.', '2022-02-13 12:23:26', 1, 'Tanjila Broti'),
(19, 'The Nun', 'A priest and a novice arrive in Romania to investigate the death of a young nun. However, things take an ugly turn after they encounter a supernatural force.', '2022-02-13 16:03:37', 3, 'Tahsina Aziz'),
(20, 'The Conjuring', 'The Perron family moves into a farmhouse where they experience paranormal phenomena. They consult demonologists, Ed and Lorraine Warren, to help them get rid of the evil entity haunting them.', '2022-02-13 16:06:22', 3, 'Jeba Sultana'),
(21, 'The Hangover', 'Doug and his three best men go to Las Vegas to celebrate his bachelor party. However, the three best men wake up the next day with a hangover and realise that Doug is missing.', '2022-02-13 16:06:22', 5, 'Asif Mamun Hridoy'),
(22, 'We\'re the Millers', 'David, a drug dealer, is forced by his boss to smuggle drugs from Mexico. He hires a stripper, a petty thief and a teenage neighbour and forms a fake family to help him smuggle the drugs.', '2022-02-13 16:07:06', 5, 'Saidur Rahman Sujon'),
(24, 'Jai Bhim', 'A brave activist-lawyer fights for justice when a poor tribal man, who gets falsely accused of robbery, goes missing from the police custody.', '2022-02-15 16:15:24', 4, 'Asif Iftekher Fahim'),
(25, 'Ratsasan', 'Arun gives up on his dream of becoming a filmmaker and takes up the job of a police officer after his father\'s death. He then attempts to track down a psychotic killer who targets schoolgirls.', '2022-02-15 18:08:26', 6, 'Mainul Islam'),
(26, 'Aeon Flux', 'Aeon Flux, who is a member of an underground organisation, is tasked with assassinating a high-ranking government official. On her mission to achieve this, she uncovers a larger conspiracy.', '2022-02-15 18:17:13', 2, 'Asif Iftekher Fahim'),
(27, 'Dune', 'Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, must travel to the most dangerous planet in the universe to ensure the future of his family and his people. As malevolent forces explode into conflict over the planet\'s exclusive supply of the most precious resource in existence, only those who can conquer their own fear will survive.', '2022-02-15 18:21:00', 2, 'Abdullah Al Mamun'),
(28, 'Pirates of the Caribbean: The Curse of the Black Pearl', 'A blacksmith joins forces with Captain Jack Sparrow, a pirate, in a bid to free the love of his life from Jack\'s associates, who kidnapped her suspecting she has the medallion', '2022-02-15 19:16:32', 9, 'Safwan Ibne Masuk'),
(31, 'Mad Max: Fury Road', 'In a post-apocalyptic wasteland, Max, a drifter and survivor, unwillingly joins Imperator Furiosa, a rebel warrior, in a quest to overthrow a tyrant who controls the land\'s water supply.', '2022-02-19 13:56:29', 7, 'Asif Mamun Hridoy'),
(32, 'Pirates of the Caribbean: The Curse of the Black Pearl', 'A blacksmith joins forces with Captain Jack Sparrow, a pirate, in a bid to free the love of his life from Jack\'s associates, who kidnapped her suspecting she has the medallion.', '2022-02-20 05:30:19', 9, 'Safwan Ibne Masuk'),
(33, 'Parasite', 'The struggling Kim family sees an opportunity when the son starts working for the wealthy Park family. Soon, all of them find a way to work within the same household and start living a parasitic life.', '2022-02-20 07:58:28', 4, 'Sohom Sahaun'),
(34, 'Shoot \'Em Up', 'Smith runs into a pregnant woman being pursued by killers. With the woman dead and the killers in pursuit, he fights to keep the newborn alive with the help of a prostitute and discovers a grim plot.', '2022-02-20 08:29:26', 7, 'Asif Iftekher Fahim'),
(35, 'Man of Steel', 'Clark learns about the source of his abilities and his real home when he enters a Kryptonian ship in the Artic. However, an old enemy follows him to Earth in search of a codex and brings destruction.', '2022-03-05 12:42:13', 7, 'Azizur Rahman Anik');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `parent_menu_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `parent_menu_id`, `name`, `action`) VALUES
(1, 2, 'Fantasy', 'index1.php'),
(2, 2, 'Science Fiction', 'index2.php'),
(3, 2, 'Horror', 'index3.php'),
(4, 2, 'Drama', 'index4.php'),
(5, 2, 'Comedy', 'index5.php'),
(6, 2, 'Thriller', 'index6.php'),
(7, 2, 'Action', 'index7.php'),
(8, 2, 'Crime', 'index8.php'),
(9, 2, 'Adventure', 'index9.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
