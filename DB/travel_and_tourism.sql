-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 06:19 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_and_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `admin_password`) VALUES
(1, 'mithun', 'admin'),
(2, 'greeshma', '098');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `seats` int(5) NOT NULL,
  `priice` int(3) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `seats`, `priice`, `image`) VALUES
(16, 'lambo', 2, 1000, '../uploaded_images/car/Top Luxury Cars Women Are Most Attracted To.jfif'),
(17, 'bugatti', 2, 5000, '../uploaded_images/car/Top Luxury Cars Women Are Most Attracted To (1).jfif'),
(20, 'martin', 2, 1000, '../uploaded_images/car/Top Luxury Cars Women Are Most Attracted To (2).jfif'),
(21, 'mustang', 2, 3000, '../uploaded_images/car/American muscle car stance.jfif'),
(22, 'nano', 4, 500, '../uploaded_images/car/This is a 230bhp Tata Nano.jfif'),
(23, 'nano', 4, 500, '../uploaded_images/car/This is a 230bhp Tata Nano.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `flight_book`
--

CREATE TABLE `flight_book` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `_from` varchar(100) NOT NULL,
  `_to` varchar(100) NOT NULL,
  `_date` date NOT NULL,
  `seats` int(2) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_book`
--

INSERT INTO `flight_book` (`id`, `name`, `_from`, `_to`, `_date`, `seats`, `price`) VALUES
(1, 'MITHUN M R', 'mysore', 'banglore', '2019-11-21', 2, 30000),
(3, 'MITHUN M R', 'mysore', 'banglore', '2019-11-14', 1, 15000),
(4, 'MITHUN M R', 'mysore', 'banglore', '2019-11-14', 1, 15000),
(5, 'MITHUN M R', 'sullya', 'udupi', '2019-11-07', 1, 1000),
(6, 'MITHUN M R', 'sullya', 'udupi', '2019-11-07', 1, 1000),
(7, 'MITHUN M R', 'sullya', 'udupi', '2019-11-07', 1, 1000),
(8, 'MITHUN M R', 'sullya', 'udupi', '2019-11-07', 1, 1000),
(9, 'MITHUN M R', 'sullya', 'udupi', '2019-11-07', 1, 1000),
(10, '', 'sullya', 'banglore', '2019-11-06', 2, 4000),
(11, 'MITHUN M R', 'india', 'london', '2019-11-07', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(3) NOT NULL,
  `place` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `place`, `description`, `price`, `image`) VALUES
(17, 'GOA', 'Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the areaâ€™s tropical spice plantations. Goa is also known for its beaches, ranging from popular stretches at Baga and Palolem to those in laid-back fishing villages such as Agonda.', 5999, '../uploaded_images/pack/Goa Special.png'),
(21, 'dubai', 'Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene. Burj Khalifa, an 830m-tall tower, dominates the skyscraper-filled skyline. At its foot lies Dubai Fountain, with jets and lights choreographed to music. On artificial islands just offshore is Atlantis, The Palm, a resort with water and marine-animal parks.', 2000, '../uploaded_images/pack/Switzerland Tour Packages - Choose from a wideâ€¦.jfif'),
(22, 'goa', 'Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the areaâ€™s tropical spice plantations', 5000, '../uploaded_images/pack/Enjoy your holidays in Goa__.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `email`, `userid`, `password`, `phone`, `dob`) VALUES
(1, 'mithun', 'mithunmr@gamil.com', 'mrm', 'admin', 959174298, '2019-10-16'),
(2, 'MITHUN M R', 'mithunmr286@gmail.com', '123', '123', 2147483647, '0000-00-00'),
(4, 'deekshith b s', 'deekshithgowda018@gmail.com', 'deekshi', 'deekshith4444', 2147483647, '1998-04-02'),
(5, 'greesh', 'greeshmaanjerira@gmail.com', 'greeshma', '0987', 65786786, '2019-11-28'),
(6, 'bru', 'brunda@gmail.com', '345', '369', 4613, '2019-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `name`, `address`, `price`, `description`, `image`) VALUES
(21, 'OYO', 'GOA', 1400, 'Spacious rooms with 5-star facilities designed for optimal comfort including Deluxe, Executive, Suite & Presidential Suite categories.', '../uploaded_images/room/30 Stylish Gray Living Room Ideas To Inspire You.jfif'),
(22, 'taj', 'madikeri', 2800, 'At Taj Palace, choose from 403 grand rooms and suites, each planned precisely to offer you the very best experience. Tastefully done interiors and all modern amenities make the hotel ideal for a business or pleasure visit.', '../uploaded_images/room/A handy guide with the differences betweenâ€¦.jfif'),
(23, 'ocean pearl', 'manglore', 2600, 'The Ocean Pearl hotel at Mangalore, one of the finest from The Ocean Pearl stable, stands true to its name with architecture, hospitality and an experience as rare and exquisite as the pristine pearl in the ocean. It is conceptualized and developed to cater to the leisure travelers, business travelers and those looking for corporate and family events alike.', '../uploaded_images/room/Parents, Stop Decorating Your Kidâ€™s Freshman Dorm With Fluffy Rugs and Big-Screen TVs.jfif'),
(24, 'gold finch', 'kudla', 3000, 'Goldfinch Hotels currently has a network of 6 of the finest boutique hotels spread across Bengaluru, Delhi, Mangaluru & Mumbai with strategic locations. Take a quick tour of all the hotel facilities, amenities, dining options, banqueting and conference facilities, and much more.', '../uploaded_images/room/Sunny Circle Studio.jfif'),
(25, 'gold finch', 'kudla', 3000, 'Goldfinch Hotels currently has a network of 6 of the finest boutique hotels spread across Bengaluru, Delhi, Mangaluru & Mumbai with strategic locations. Take a quick tour of all the hotel facilities, amenities, dining options, banqueting and conference facilities, and much more.', '../uploaded_images/room/Sunny Circle Studio.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `spacial_flight_offers`
--

CREATE TABLE `spacial_flight_offers` (
  `id` int(3) NOT NULL,
  `depart_from` varchar(100) NOT NULL,
  `going_to` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spacial_flight_offers`
--

INSERT INTO `spacial_flight_offers` (`id`, `depart_from`, `going_to`, `price`, `image`) VALUES
(34, 'mysore', 'banglore', 1000, '../uploaded_images/flight/How to Find the Cheapest Flight Possible, Every Time.jfif'),
(35, 'goa', 'banglore', 2000, '../uploaded_images/flight/Search and Book cheap flights from San Franciscoâ€¦.jfif'),
(36, 'manglore', 'madikri', 15000, '../uploaded_images/flight/3d517a95-de18-42e6-a3dd-6ccbb02f4294.jfif'),
(37, 'sullya', 'banglore', 2000, '../uploaded_images/flight/The Best Flight Booking Hacks.png'),
(38, 'delhi', 'banglore', 3000, '../uploaded_images/flight/19 Cheap Flight Hacks That Will Save You Money.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_book`
--
ALTER TABLE `flight_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`,`userid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spacial_flight_offers`
--
ALTER TABLE `spacial_flight_offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `flight_book`
--
ALTER TABLE `flight_book`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `spacial_flight_offers`
--
ALTER TABLE `spacial_flight_offers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
