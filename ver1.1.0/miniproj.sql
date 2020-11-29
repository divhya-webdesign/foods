-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 08:43 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('mm', 'mansi', 'mansi@sies.in', '8457693756', 'home at home', 'postgres'),
('test', 'test', 't@e.st', '9384738273', 'india', 'orange');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(58, 'Smoked Salmon', 40, 'Simple & delicious. Our salmon is served with roasted carrots, green peas & grass-fed dill ghee for a dose of fats, fiber, & vitamin K', 6, 'https://d37rttg87jr6ah.cloudfront.net/static/product_photo_web/naked_salmon-2018-12-09-23-57-16_1242x1242.png', 'ENABLE'),
(59, 'Salad', 60, 'A simple, speedy and satisfying salad with greens, almonds, sesame seeds, asparagus and much more. Dressings include soy sauce, vinegar and chilly oil.', 2, 'https://pluspng.com/img-png/png-plate-of-food-uniting-the-world-through-pure-food-500.png', 'ENABLE'),
(60, 'Chocolate Cookies', 99, 'Freshly baked chocolate chip cookies, made with stevia and rich cocoa powder.', 3, 'https://freepngimg.com/thumb/cookies/28609-9-cookies-transparent-background.png', 'ENABLE'),
(61, 'Stir-fried shrimp', 80, 'A plate of classic stir-fried shrimp with a touch of La Félicité flavours', 1, 'https://pluspng.com/img-png/png-plate-of-food-food-png-497.png', 'ENABLE'),
(62, 'Hamburger', 65, 'Delicious hamburgers with the most authentic taste and the freshest ingredients', 2, 'https://i2.wp.com/freepngimages.com/wp-content/uploads/2015/08/cheeseburger.png?fit=621%2C451', 'ENABLE'),
(63, 'walnut brownie', 75, 'A delightful brownie served with caramel sauce', 3, 'https://tse2.mm.bing.net/th?id=OIP.o8eu2wU2mOmXb1kJ4TWssAHaFP&pid=Api', 'ENABLE'),
(69, 'Cold brew coffee', 25, 'A strong espresso with no sugar, sugar packets available on request', 2, 'https://tse4.mm.bing.net/th?id=OIP.3ZZBEFymnkB3yE4z8tQ9VwHaGB&pid=Api', 'ENABLE'),
(70, 'Cappuccino', 20, 'Sweet and sugary cappuccino, with whole milk and fresh coffee extract', 2, 'https://tse2.mm.bing.net/th?id=OIP.ID7Il94GfsBRc_pwP3UklwHaF-&pid=Api', 'ENABLE'),
(71, 'Kids platter', 40, 'A plateful of hash browns and potato nuggets, served with ketchup', 2, 'http://d1fd34dzzl09j.cloudfront.net/Images/CFACOM/Menu%20Items/ChickenHashbrownBreakfastBowl-pdp_0001s_0006_Breakfast_Hearty-Breakfast-Bowl_resize2.png', 'ENABLE'),
(72, 'Paneer Pizza', 45, 'Pizza with fresh paneer a whole new flavor', 2, 'https://i.pinimg.com/originals/8f/ca/86/8fca868cf0a566675b963bd8d6b82959.png', 'ENABLE'),
(73, 'Fruit yogurt mousse', 35, 'A healthy desert, made with fresh yogurt, choice fruits and raw honey', 2, 'https://tse3.mm.bing.net/th?id=OIP.WofGu17GbA_k8jwSQkIvFgHaHa&pid=Api', 'ENABLE'),
(77, 'Cutlets and salad', 200, 'Potato cutlets with cashew and stir fried vegetable fillings, comes with a side of fresh salad', 2, 'https://pluspng.com/img-png/png-plate-of-food-plate-of-food-375.png', 'ENABLE'),
(78, 'Clear tea', 75, 'A cup of hot tea, without sugar or milk. Sugar and milk available on request', 2, 'https://purepng.com/public/uploads/large/tea-in-a-white-cup-e9k.png', 'ENABLE'),
(79, 'Bubble tea', 45, 'Our classic bubble tea, available in four flavors - chocolate, black currant, vanilla, matcha', 2, 'https://toppng.com/uploads/thumbnail/imyo-bubble-tea-powder-easy-to-prepare-and-taste-like-milk-tea-boba-115628927147shufk3dzn.png', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `O_ID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `O_ID`) VALUES
(58, 'Smoked Salmon', 40, 1, '2020-11-29', 'mm', 63240),
(59, 'Salad', 60, 1, '2020-11-29', 'mm', 63240),
(61, 'Stir-fried shrimp', 80, 1, '2020-11-29', 'mm', 63240),
(58, 'Smoked Salmon', 40, 1, '2020-11-29', 'mm', 283135),
(59, 'Salad', 60, 1, '2020-11-29', 'mm', 283135);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
