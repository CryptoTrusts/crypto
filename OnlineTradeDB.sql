-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2018 at 05:36 AM
-- Server version: 10.1.35-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptotrust`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `agent` varchar(20) NOT NULL,
  `total_refered` varchar(20) NOT NULL DEFAULT '0',
  `total_activated` varchar(20) DEFAULT '0',
  `earnings` varchar(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cp_transactions`
--

CREATE TABLE `cp_transactions` (
  `id` int(11) NOT NULL,
  `txn_id` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_number` varchar(255) DEFAULT NULL,
  `amount_paid` varchar(100) DEFAULT NULL,
  `user_plan` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `amount1` varchar(100) DEFAULT NULL,
  `amount2` varchar(100) DEFAULT NULL,
  `currency1` varchar(100) DEFAULT NULL,
  `currency2` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `status_text` varchar(255) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `cp_p_key` varchar(255) DEFAULT NULL,
  `cp_pv_key` varchar(255) DEFAULT NULL,
  `cp_m_id` varchar(255) DEFAULT NULL,
  `cp_ipn_secret` varchar(255) DEFAULT NULL,
  `cp_debug_email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp_transactions`
--

INSERT INTO `cp_transactions` (`id`, `txn_id`, `item_name`, `item_number`, `amount_paid`, `user_plan`, `user_id`, `amount1`, `amount2`, `currency1`, `currency2`, `status`, `status_text`, `type`, `created_at`, `updated_at`, `cp_p_key`, `cp_pv_key`, `cp_m_id`, `cp_ipn_secret`, `cp_debug_email`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2018-08-05 00:00:00', '2018-08-19 13:01:33', 'aa3f6948307c4fc318be48571d0f33603f9479d9e084ab9eee0601eeb25b09ad', 'd57F069303fFDa7a88A6Ba121E7bFd19C4026Fcb789c874D04190773873E80Df', '6c0ec8a4a9fc05cc6843418cbdd5c08e', 'jhdjhj', 'khjhjhj@jhj.jd');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `plan` varchar(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `proof` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Rejoice2017@gmail.com', '1a637489097377dbf21c8a7a7ba973d63a25f2f4ef2c483edb62f104a2182f1c', '2017-02-26 23:29:47'),
('rialebrume@gmail.com', 'd53c6a25865107ac7400f22436e6d37da6721bcdd36e9a67b86afee9c9fc9b7d', '2017-03-09 18:19:02'),
('test123@HApp.com', '$2y$10$mN9hSkvaFInMWnRyzCYWeO5JdoAXlINNi2Kh8TyZ79g8VnTr1UtD6', '2018-04-28 08:44:44'),
('rialekingsley@gmail.com', '$2y$10$TqfdtPyuOdtHzO.Be6fZluYayQtGVrzuDxCjB6tbpvVmyUJ78ip9C', '2018-08-13 17:27:48'),
('dynamixng@gmail.com', '$2y$10$nel4xzM2Dvii86czm4YQxuH0nzdDUximHJM3QVkkkRmky1C.48GRy', '2018-08-14 12:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `expected_return` varchar(20) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `increment_interval` varchar(20) NOT NULL,
  `increment_type` varchar(20) NOT NULL,
  `increment_amount` varchar(20) DEFAULT NULL,
  `expiration` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `price`, `expected_return`, `type`, `created_at`, `updated_at`, `increment_interval`, `increment_type`, `increment_amount`, `expiration`) VALUES
(1, 'Micro', '1000', '5000', 'Promo', '2018-04-24 21:25:37', '2018-05-18 13:26:21', '', '', NULL, ''),
(2, 'Basic', '5000', '15000', 'Promo', '2018-04-25 09:33:37', '2018-05-18 13:26:29', '', '', NULL, ''),
(7, 'Basic', '100', '20', 'Main', '2018-05-16 10:40:27', '2018-08-15 06:04:38', 'Daily', 'Fixed', '0.67', 'Three months'),
(9, 'Premium', '10000', '25000', 'Promo', '2018-05-18 13:20:51', '2018-05-18 13:26:41', '', '', NULL, ''),
(5, 'Beginner', '30', '6', 'Main', '2018-04-25 15:02:29', '2018-08-15 09:16:16', 'Daily', 'Fixed', '0.2', 'Three months'),
(6, 'Starter', '50', '10', 'Main', '2018-04-28 12:58:40', '2018-08-15 06:01:59', 'Daily', 'Fixed', '0.34', 'Three months'),
(8, 'Silver', '200', '40', 'Main', '2018-05-16 10:41:02', '2018-08-15 06:07:06', 'Daily', 'Fixed', '1.34', 'Three months'),
(10, 'Gold', '300', '60', 'Main', '2018-05-18 13:21:17', '2018-08-15 06:08:33', 'Daily', 'Fixed', '2', 'Three months'),
(14, 'Diamond', '500', '100', 'Main', '2018-08-01 05:39:49', '2018-08-15 06:09:51', 'Daily', 'Fixed', '3.34', 'Three months'),
(15, 'Special', '1000', '200', 'Main', '2018-08-01 05:42:25', '2018-08-15 06:11:10', 'Daily', 'Fixed', '6.67', 'Three months'),
(16, 'Classic', '2000', '400', 'Main', '2018-08-01 05:44:48', '2018-08-15 06:15:30', 'Daily', 'Fixed', '13.34', 'Three months'),
(17, 'VIP', '5000', '1000', 'Main', '2018-08-01 05:46:26', '2018-08-15 06:17:17', 'Daily', 'Fixed', '33.34', 'Three months'),
(18, 'VIP Classic', '10000', '2000', 'Main', '2018-08-01 05:48:52', '2018-08-15 06:18:04', 'Daily', 'Fixed', '66.67', 'Three months'),
(19, 'Utimate', '20000', '4000', 'Main', '2018-08-01 05:50:32', '2018-08-15 06:19:01', 'Daily', 'Fixed', '133.34', 'Three months'),
(20, 'Test', '40', '10', 'Main', '2018-08-16 23:05:36', '2018-08-16 23:05:36', 'Hourly', 'Percentage', '0.02', 'One week');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `s_currency` varchar(20) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `account_number` varchar(20) DEFAULT NULL,
  `eth_address` varchar(200) DEFAULT NULL,
  `btc_address` varchar(200) DEFAULT NULL,
  `ltc_address` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `s_s_k` varchar(200) DEFAULT NULL,
  `s_p_k` varchar(200) DEFAULT NULL,
  `keywords` varchar(255) NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `site_address` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `trade_mode` varchar(20) DEFAULT NULL,
  `contact_email` varchar(50) DEFAULT NULL,
  `referral_commission` varchar(20) DEFAULT NULL,
  `tawk_to` text,
  `update` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `description`, `currency`, `s_currency`, `bank_name`, `account_name`, `account_number`, `eth_address`, `btc_address`, `ltc_address`, `payment_mode`, `s_s_k`, `s_p_k`, `keywords`, `site_title`, `site_address`, `logo`, `trade_mode`, `contact_email`, `referral_commission`, `tawk_to`, `update`, `created_at`, `updated_at`) VALUES
(1, 'Crypto Trust Funds', 'online forex and cryptocurrencies Investment system', '$', 'USD', '', '', '', NULL, '1FPrSwVpuL2dwjeC3NZgnCzknppvjkA8t4', NULL, '12345', 'sk_test_BQokikJOvBiI2HlWgH4olfQ2', 'pk_test_6pRNASCoBOKtIshFeQd4XMUh', 'make money online, hyips', 'No. 1 investment system. Simple and secure and reliable', 'www.cryptotrustsfunds.com', '', 'on', 'Support@cryptotrustsfunds.com', '2.5', 'var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/5aed917a5f7cdf4f0533e35c/default\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();', 'Online trade got an update! 19th Aug. 2018.', '2017-02-27 01:10:03', '2018-08-21 16:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `tp_transactions`
--

CREATE TABLE `tp_transactions` (
  `id` int(11) NOT NULL,
  `plan` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `account_no` varchar(50) DEFAULT NULL,
  `btc_address` varchar(255) DEFAULT NULL,
  `eth_address` varchar(255) DEFAULT NULL,
  `ltc_address` varchar(255) DEFAULT NULL,
  `plan` varchar(25) DEFAULT '0',
  `user_plan` varchar(20) DEFAULT NULL,
  `promo_plan` varchar(20) NOT NULL DEFAULT '0',
  `confirmed_plan` varchar(25) DEFAULT '0',
  `inv_duration` varchar(100) DEFAULT NULL,
  `account_bal` varchar(20) NOT NULL DEFAULT '0',
  `roi` varchar(50) NOT NULL DEFAULT '0',
  `ref_bonus` varchar(20) NOT NULL DEFAULT '0',
  `bonus_released` varchar(20) NOT NULL DEFAULT '0',
  `ref_by` varchar(20) DEFAULT NULL,
  `ref_link` varchar(100) DEFAULT NULL,
  `entered_at` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `status` varchar(25) DEFAULT 'active',
  `type` varchar(25) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `password`, `remember_token`, `bank_name`, `account_name`, `account_no`, `btc_address`, `eth_address`, `ltc_address`, `plan`, `user_plan`, `promo_plan`, `confirmed_plan`, `inv_duration`, `account_bal`, `roi`, `ref_bonus`, `bonus_released`, `ref_by`, `ref_link`, `entered_at`, `activated_at`, `last_growth`, `status`, `type`, `created_at`, `updated_at`) VALUES
(2, 'test account', 'test123@happ.com', NULL, '$2y$10$w/NJcrs3lpM4dcwrvn11eOrgdXdoqaei.lndpzXQFu/.24ZDemT1q', 'n5fjeI1kAJspVqbbEx8XvEE4t1N7J1TfxnkynDR8wsDdL6VvskYiCmruq8eu', NULL, NULL, NULL, 'ec8f567d4aa969f9aedc609798bee890', NULL, NULL, '0', '0', '0', '0', NULL, '1695.20000000021', '0', '0', '0', '2', 'trade.brynamics.xyz/ref/2', '2018-09-06 08:45:39', NULL, NULL, 'active', '1', '2018-08-19 12:47:48', '2018-09-06 08:45:39'),
(3, 'test account2', 'test1234@happ.com', NULL, '$2y$10$B3ZgryiTtDnMuSwPlIS.NOBRNVOk1fh2xL1b3V/PFu18rPn/LsAfO', 'cGUMEGCO1OGMLIH8xI8Fx9JHuKVhR7jvLUqT8ldTRzJdBycMlk8QjnUzW0nc', NULL, NULL, NULL, '1PRG2gJWqtrcGaBgeJCEr9bjFRUmgWXSM', NULL, NULL, '5', '4', '0', '0', NULL, '258830.74999999', '0', '0', '0', NULL, 'trade.brynamics.xyz/ref/3', '2018-09-06 09:25:56', '2018-09-05 23:32:19', '2018-09-05 23:32:19', 'active', '0', '2018-08-19 12:48:39', '2018-09-06 09:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `id` int(11) NOT NULL,
  `plan` varchar(20) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `active` varchar(20) DEFAULT NULL,
  `inv_duration` varchar(50) DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `plan`, `user`, `active`, `inv_duration`, `activated_at`, `last_growth`, `created_at`, `updated_at`) VALUES
(1, '7', '3', 'yes', 'Three months', '2018-09-06 09:01:09', '2018-09-06 09:01:09', '2018-09-06 09:01:09', '2018-09-06 09:01:09'),
(2, '19', '3', 'yes', 'Three months', '2018-09-06 09:03:02', '2018-09-06 09:03:02', '2018-09-06 09:03:02', '2018-09-06 09:03:02'),
(3, '7', '3', 'yes', 'One month', '2018-09-06 09:13:39', '2018-09-06 09:13:39', '2018-09-06 09:13:39', '2018-09-06 09:13:39'),
(4, '5', '3', 'yes', 'Three months', '2018-09-06 09:25:56', '2018-09-06 09:25:56', '2018-09-06 09:25:56', '2018-09-06 09:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `wdmethods`
--

CREATE TABLE `wdmethods` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `minimum` varchar(50) NOT NULL,
  `maximum` varchar(50) NOT NULL,
  `charges_fixed` varchar(50) NOT NULL,
  `charges_percentage` varchar(50) NOT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wdmethods`
--

INSERT INTO `wdmethods` (`id`, `name`, `minimum`, `maximum`, `charges_fixed`, `charges_percentage`, `duration`, `type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Bitcoin', '40', '5000', '0', '5', '24 - 48 hours', 'withdrawal', 'enabled', '2018-07-11 11:51:45', '2018-08-18 23:51:35'),
(8, 'Bank deposit', '40', '100000', '0', '5', '1 - 2 days', 'withdrawal', 'enabled', '2018-07-11 14:43:06', '2018-08-15 04:14:56'),
(9, 'Ethereum', '50', '2000', '10', '5', 'Instant', 'withdrawal', 'enabled', '2018-08-18 21:41:35', '2018-09-02 14:18:16'),
(10, 'Litecoin', '50', '2000', '10', '5', 'Instant', 'withdrawal', 'enabled', '2018-08-18 21:42:07', '2018-09-04 17:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `to_deduct` varchar(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_transactions`
--
ALTER TABLE `tp_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users` ADD FULLTEXT KEY `name` (`name`);
ALTER TABLE `users` ADD FULLTEXT KEY `email` (`email`);
ALTER TABLE `users` ADD FULLTEXT KEY `name_2` (`name`);
ALTER TABLE `users` ADD FULLTEXT KEY `name_3` (`name`);
ALTER TABLE `users` ADD FULLTEXT KEY `email_2` (`email`);
ALTER TABLE `users` ADD FULLTEXT KEY `name_4` (`name`,`email`);

--
-- Indexes for table `user_plans`
--
ALTER TABLE `user_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wdmethods`
--
ALTER TABLE `wdmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tp_transactions`
--
ALTER TABLE `tp_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wdmethods`
--
ALTER TABLE `wdmethods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
