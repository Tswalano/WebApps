-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 01:24 PM
-- Server version: 5.6.25
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ops_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drinks`
--

CREATE TABLE IF NOT EXISTS `tbl_drinks` (
  `drink_id` int(11) NOT NULL,
  `drink` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_drinks`
--

INSERT INTO `tbl_drinks` (`drink_id`, `drink`, `price`) VALUES
(1, 'Select Drink', ''),
(2, 'No Drink', ''),
(3, 'Apple Juice', 'R15.00'),
(4, 'Cider Beer', 'R10.00'),
(5, 'Draught Beer', 'R10.00'),
(6, '500ml Sprite', 'R8.00'),
(7, 'Soft Drink', 'R10.00'),
(8, '440ml Fanta', 'R8.00'),
(9, '330ml Coca Cola', 'R6.00'),
(10, '2L Coca Cola', 'R15,00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `name` varchar(50) NOT NULL,
  `img_path` bigint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu`, `price`, `name`, `img_path`) VALUES
(1, 'Beef, Salad, Stew Soap, Cabbege and Rice', 45, 'Beef Plate', 0),
(2, 'Pap, Chicken, Soup and Salad', 32, 'Chicken Plate', 0),
(3, '4 Slice, Achar, Cheese, Vienna and Egg', 18, 'Kota Cheese', 0),
(4, 'Rice, Beef Stew, Salads', 23.5, 'Beef Stew', 0),
(5, 'Pap, chips, Salad, Soup, Beef and Surce', 34.6, 'Full Plate and Beef', 0),
(6, 'Pap, chips, Salad, Soup, Beef and Surce', 62, 'Full Plate and Beef', 0),
(7, 'Fish, Chips, Source, Half Bread', 22, 'Fish & Chips', 0),
(8, 'Beef, Salad, Stew Soap, Cabbege and Rice', 33, 'Full Meal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(4) unsigned zerofill NOT NULL,
  `odr_name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_num` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `staff_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `shop` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `surname`, `email`, `number`, `password`, `shop`) VALUES
(1, 'Glen Bond', 'Mogane', 'moganegb@gmail.com', 2147483647, '12345', 'Shop 1</br>\r\nStreet 0001</br>\r\nJohannesburg'),
(2, 'Admin', 'Admin', 'Admin@admin.com', 617262421, '12345', 'Shop 2</br>\r\nStreet 0002</br>\r\nJohannesburg'),
(3, 'Justice Brux', 'Dyk', 'justice@gmail.com', 2147483647, '12345', 'Shop 4</br>\r\nStreet 0004</br>\r\nJohannesburg'),
(4, 'Mark Van', 'Dyk', 'Markjv@gmaIl.com', 617262421, '12345', 'Shop 5</br>\r\nStreet 0005</br>\r\nJohannesburg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_drinks`
--
ALTER TABLE `tbl_drinks`
  ADD PRIMARY KEY (`drink_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_drinks`
--
ALTER TABLE `tbl_drinks`
  MODIFY `drink_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
