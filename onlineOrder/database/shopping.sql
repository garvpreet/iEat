-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 02:26 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(3, 'Pizzas', 'Pizzas', '2017-01-24 19:17:37', '02-08-2018 07:48:42 AM'),
(4, 'Desserts', 'Desserts', '2017-01-24 19:19:32', '02-08-2018 07:48:59 AM'),
(5, 'Beverages', 'Beverages', '2017-01-24 19:19:54', '02-08-2018 07:49:12 AM'),
(6, 'Sides', 'Sides', '2017-02-20 19:18:52', '02-08-2018 07:49:23 AM');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL,
  `productAddOns` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`, `productAddOns`) VALUES
(11, 6, 21, 4, '2018-08-03 01:45:23', 'Debit / Credit card', NULL, ''),
(12, 4, 27, 1, '2018-08-03 03:01:40', 'COD', NULL, ''),
(13, 1, 27, 1, '2018-08-03 04:16:33', 'COD', NULL, ''),
(14, 1, 21, 1, '2018-08-03 04:34:33', 'COD', NULL, 'test'),
(15, 1, 21, 1, '2018-08-03 05:01:53', 'COD', NULL, ''),
(16, 1, 27, 1, '2018-08-03 05:02:40', 'COD', NULL, 'test'),
(17, 1, 21, 1, '2018-08-03 05:05:09', 'COD', NULL, 'test'),
(18, 1, 22, 1, '2018-08-03 05:05:09', 'COD', NULL, 'test'),
(19, 1, 27, 2, '2018-08-03 05:05:09', 'COD', NULL, 'test'),
(20, 1, 28, 1, '2018-08-03 05:05:09', 'COD', NULL, 'test'),
(21, 1, 21, 1, '2018-08-03 05:18:01', 'COD', NULL, 'test'),
(22, 1, 22, 1, '2018-08-03 05:18:01', 'COD', NULL, 'test'),
(23, 1, 27, 2, '2018-08-03 05:18:01', 'COD', NULL, 'test'),
(24, 1, 28, 1, '2018-08-03 05:18:01', 'COD', NULL, 'test'),
(25, 1, 21, 1, '2018-08-03 05:18:18', 'COD', NULL, 'test'),
(26, 1, 22, 1, '2018-08-03 05:18:18', 'COD', NULL, 'test'),
(27, 1, 27, 2, '2018-08-03 05:18:18', 'COD', NULL, 'test'),
(28, 1, 28, 1, '2018-08-03 05:18:18', 'COD', NULL, 'test'),
(29, 1, 21, 1, '2018-08-03 05:18:58', NULL, NULL, 'test'),
(30, 1, 21, 1, '2018-08-03 05:19:38', NULL, NULL, 'test'),
(31, 1, 21, 1, '2018-08-03 05:20:00', NULL, NULL, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 19:36:45'),
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext,
  `reviewDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`id`, `productId`, `quality`, `price`, `value`, `name`, `summary`, `review`, `reviewDate`) VALUES
(2, 3, 4, 5, 5, 'Anuj Kumar', 'BEST PRODUCT FOR ME :)', 'BEST PRODUCT FOR ME :)', '2017-02-26 20:43:57'),
(3, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:52:46'),
(4, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(21, 3, 8, 'Veggie Pizza', 'iEat', 9, 9, 'Hand Tossed Veggie Whole: Pizza Sauce, Extra Cheese, Black Olives, Green Pepper, Mushroom, Onion, Tomatoes<br>', 'veggie-pizza.png', 'veggie-pizza.png', 'veggie-pizza.png', 0, 'In Stock', '2018-08-02 17:54:59', NULL),
(22, 5, 9, 'Coke', 'Coke', 2, 2, 'Coke', 'coke.jpg', 'coke.jpg', 'coke.jpg', 0, 'In Stock', '2018-08-02 18:43:11', NULL),
(23, 4, 3, 'Chocolate Cake', 'iEat', 5, 5, 'Chocolate Cake', 'chocolate-cake.jpg', 'chocolate-cake.jpg', '', 0, 'In Stock', '2018-08-02 18:44:32', NULL),
(24, 6, 12, 'Garlic Bread', 'iEat', 3, 3, 'Garlic Bread<br>', 'garlic-bread.jpg', 'garlic-bread.jpg', '', 0, 'In Stock', '2018-08-02 18:45:30', NULL),
(25, 6, 12, 'Cheesy Bread', 'iEat', 4, 4, 'Cheesy Bread<br>', 'cheesy-bread.jpg', 'cheesy-bread.jpg', '', 0, 'In Stock', '2018-08-02 18:50:44', NULL),
(26, 6, 12, 'Parmesan Bites', 'iEat', 3, 3, 'Parmesan Bites<br>', 'parmesian-bread.jpg', 'parmesian-bread.jpg', 'parmesian-bread.jpg', 0, 'In Stock', '2018-08-02 18:52:03', NULL),
(27, 3, 8, 'Chicken Pizza', 'iEat', 12, 12, 'Chicken Pizza', 'chicken-pizza.jpg', 'chicken-pizza.jpg', '', 0, 'In Stock', '2018-08-02 18:53:04', NULL),
(28, 3, 8, 'Bacon Pizza', 'iEat', 11, 11, 'Bacon Pizza<br>', 'bacon-pizza.jpg', 'bacon-pizza.jpg', '', 0, 'In Stock', '2018-08-02 18:54:19', NULL),
(29, 4, 3, 'Cookie Brownie', 'iEat', 7, 7, 'Cookie Brownie<br>', 'cookie-brownie.jpg', 'cookie-brownie.jpg', '', 0, 'In Stock', '2018-08-02 18:55:36', NULL),
(30, 4, 3, 'Crunch Cake', 'iEat', 6, 6, 'Crunch Cake<br>', 'crunch-cake.jpg', 'crunch-cake.jpg', '', 0, 'In Stock', '2018-08-02 18:57:17', NULL),
(31, 5, 9, 'Ginger Ale', 'iEat', 2, 2, 'Ginger Ale', 'ginger-ale.jpg', 'ginger-ale.jpg', 'ginger-ale.jpg', 0, 'In Stock', '2018-08-02 18:58:49', NULL),
(32, 5, 9, 'Sprite', 'iEat', 3, 3, 'Sprite', 'sprite.jpg', 'sprite.jpg', '', 0, 'In Stock', '2018-08-02 18:59:50', NULL),
(33, 0, 0, 'Extra Cheese', 'IEat', 0, 0, '<br>', '', '', '', 0, 'In Stock', '2018-08-03 03:07:13', NULL),
(300, 0, 0, 'Green peppers', 'IEat', 0, 0, '<br>', '', '', '', 0, 'In Stock', '2018-08-03 03:07:13', NULL),
(500, 0, 0, 'Sausage', 'IEat', 0, 0, '<br>', '', '', '', 0, 'In Stock', '2018-08-03 03:07:13', NULL),
(2000, 0, 0, 'Black Olives', 'IEat', 0, 0, '<br>', '', '', '', 0, 'In Stock', '2018-08-03 03:07:13', NULL),
(2001, 0, 0, 'Pepperoni', 'IEat', 0, 0, '<br>', '', '', '', 0, 'In Stock', '2018-08-03 03:07:13', NULL),
(20001, 0, 0, 'jalapeno peppers', 'IEat', 0, 0, '<br>', '', '', '', 0, 'In Stock', '2018-08-03 03:07:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(3, 4, 'Desserts', '2017-01-26 16:29:09', '02-08-2018 07:53:04 AM'),
(8, 3, 'Pizzas', '2017-02-04 04:13:54', '02-08-2018 07:51:01 AM'),
(9, 5, 'Beverages', '2017-02-04 04:36:45', '02-08-2018 07:53:22 AM'),
(12, 6, 'Sides', '2017-03-10 20:12:59', '02-08-2018 11:11:08 PM');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(25, 'garv123@gmail.com', 0x3a3a3100000000000000000000000000, '2018-08-02 21:45:10', '03-08-2018 03:15:51 AM', 1),
(26, 'garvs123@gmail.com', 0x3a3a3100000000000000000000000000, '2018-08-02 21:46:08', NULL, 0),
(27, 'garv123@gmail.com', 0x3a3a3100000000000000000000000000, '2018-08-02 21:46:35', '03-08-2018 03:45:49 AM', 1),
(28, 'garv123@gmail.com', 0x3a3a3100000000000000000000000000, '2018-08-03 01:40:51', NULL, 0),
(29, 'mostakim@gmail.com', 0x3a3a3100000000000000000000000000, '2018-08-03 01:41:38', '03-08-2018 07:13:28 AM', 1),
(30, 'mostakim@gmail.com', 0x3a3a3100000000000000000000000000, '2018-08-03 01:44:54', NULL, 1),
(31, 'rahulgoyal0220@gmail.com', 0x3a3a3100000000000000000000000000, '2018-08-03 03:01:33', '03-08-2018 10:29:57 PM', 1),
(32, 'rahulgoyal0220@gmail.com', 0x3a3a3100000000000000000000000000, '2018-08-03 17:00:20', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` varchar(11) DEFAULT NULL,
  `billingAddress` longtext,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(4, 'Rahul Goyal', 'rahulgoyal0220@gmail.com', 9599708882, '098f6bcd4621d373cade4e832627b4f6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-02 02:15:46', NULL),
(5, 'Garv SIngh', 'garv123@gmail.com', 4389009009, 'ff11c27cd5abdc532d28e7d723b4fbc9', 'Downtown Street', 'Quebec', 'Montreal', NULL, NULL, NULL, NULL, NULL, '2018-08-02 21:44:04', NULL),
(6, 'Mostakim', 'mostakim@gmail.com', 9876543210, 'fef802ce1795b79d589024311f6272a4', 'Downtown', 'Quebec', 'Montreal', 'H3G2M2', NULL, NULL, NULL, NULL, '2018-08-03 01:41:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `PrimaryIndex` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `OrderInex` (`id`),
  ADD KEY `wwe` (`productId`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Histrory` (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product` (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub` (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userlog` (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20002;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `wwe` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
