-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 08:48 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthlife`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hcp_id` bigint(20) UNSIGNED NOT NULL,
  `consultation_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `booking_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_date`, `booking_time`, `user_id`, `hcp_id`, `consultation_id`, `session_id`, `status`, `booking_total`, `created_at`, `updated_at`) VALUES
(1, '2019-11-14', '13:00:00', 1, 2, 3, 95, 'Completed', 400, '2019-11-13 16:40:17', '2019-11-14 05:04:42'),
(3, '2019-11-17', '13:00:00', 2, 1, 3, 432, 'pending', 400, '2019-11-16 03:15:40', '2019-11-16 03:15:40'),
(4, '2019-11-17', '15:00:00', 3, 2, 4, 273, 'pending', 300, '2019-11-16 03:29:07', '2019-11-16 03:29:07'),
(5, '2019-11-17', '11:00:00', 4, 3, 3, 266, 'pending', 400, '2019-11-16 03:35:29', '2019-11-16 03:35:29'),
(6, '2019-11-17', '11:00:00', 5, 1, 3, 565, 'pending', 400, '2019-11-16 03:39:23', '2019-11-16 03:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_body` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `c_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `c_name`, `c_desc`, `c_price`, `created_at`, `updated_at`) VALUES
(1, 'Check Up', 'At Health Life is Possible, we offer health check-ups that are tailored to your age, gender, and specific conditions that require medical follow-ups. This can be your starting point to a healthier well-being.\n                        <br><br>\n                        Health Life is Possible can provide you with an assessment of your medical history and your lifestyle habits. We will carry out an extensive physical exam that includes any necessary laboratory tests.\n                        <br><br>\n                        We will contact you to inform you of the results, often within 48 business hours of taking samples from you.\n                        <br><br>\n                        We will also provide you with appropriate recommendations and you will be able to get a follow-up appointment with one of our private clinic\'s family doctors.', 300, '2019-11-13 16:02:27', '2019-11-13 16:02:27'),
(2, 'Vaccination', 'Health life is possible private medical clinic offers all the most commonly-requested vaccinations:\n                        <br><br>\n                        <ol>\n                        <li>Diphtheria</li>\n                        <li>Tetanus</li>\n                        <li>Hepatitis A</li>\n                        <li>Hepatitis B</li>\n                        <li>HPV</li>\n                        <li>Influenza</li>\n                        <li>Shingles</li> </ol>', 500, '2019-11-13 16:02:27', '2019-11-13 16:02:27'),
(3, 'Personalized Medical Care', 'Each person is different and should have an overall health check-up that is tailored to their age and gender, and to their specific health needs. In some cases, studying the patient’s specific genetic traits may help identify the most appropriate treatment.\n                        <br><br>\n                        Good health involves a balanced combination of internal and external factors and requires active patient involvement. Following your check-up and the results of the various laboratory tests, we will draw up a personalized healthcare roadmap for you based on the five pillars of good health:\n                        <br><br>\n                        <ol>\n                            <li>Health-restoring slumber (elimination of sleeping disorders)</li>\n                            <li>Healthy immune system (elimination of food intolerances, intestinal hyperpermeability, endothelial dysfunction, or imbalance of the purification or elimination mechanisms)</li>\n                            <li>Optimization of hormonal balance and nutritional and energy intakes (hormone therapy and supplements if required)</li>\n                            <li>Musculoskeletal stimulation (personalized physical fitness program)</li>\n                            <li>Development of a positive relationship with yourself and your surroundings (stress management and senses management).</li>\n                        </ol>\n                        <br>\n                        <strong>We provide a roadmap to our clients so they can regain their physical health and enjoy a healthier lifestyle.<strong>', 400, '2019-11-13 16:02:27', '2019-11-13 16:02:27'),
(4, 'Blood Test', 'Health Life is Possible offers you: <br>\n\n            <ul>\n            <li>A wide range of blood and urinary testing, including some for genetic profiling; </li>\n            <li>Processing of laboratory tests prescribed by other clinics or physicians. In the event of significant anomalies, our nursing staff will ensure that your doctor is informed or that you are promptly referred for the appropriate treatment for your condition;</li>\n            <li>Receipt and archiving of your results in a digital format to facilitate optimal follow-up for each patient;</li>\n            <li>Most results ready for collection in less than 48 hours.</li>\n            </ul>\n            <br><br>\n            <strong>Please note that our rates are extremely competitive and are reimbursable by most collective insurance plans as well as being tax-deductible.</strong>', 300, '2019-11-13 16:02:27', '2019-11-13 16:02:27'),
(5, 'Menopause', 'When menopause begins, estrogen levels drop which often leads to hot flashes.  Doctors refer to this as a vasomotor symptom which is believed to be caused by hormonal fluctuations. The recurrence of these symptoms generally last between two and five years but in some cases can even last decades. The following are also common symptoms of menopause:\n\n                        <br><br>\n                        <ul>\n                            <li>Night sweats</li>\n                            <li>Nausea</li>\n                            <li>Dizzy spells</li>\n                            <li>Palpitations</li>\n                            <li>Vaginal dryness</li>\n                            <li>Reduced sex drive</li>\n                            <li>Genital or urinary disturbances</li>\n                        </ul>\n                        <br><br>\n                        Sex hormones regulate the high metabolism levels necessary for reproduction. Their decrease leads to a sudden lowering of the metabolism and acceleration of the aging process. This results in a higher risk of osteoporosis and disabilities.', 300, '2019-11-13 16:02:27', '2019-11-13 16:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `hcps`
--

CREATE TABLE `hcps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hcp_name` text COLLATE utf8_unicode_ci NOT NULL,
  `hcp_spec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hcp_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hcp_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hcp_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hcps`
--

INSERT INTO `hcps` (`id`, `hcp_name`, `hcp_spec`, `hcp_email`, `hcp_password`, `hcp_pic`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sibusiso Mhlanga', 'Family Health', 'xyz@gmail.com', '$2y$10$GOs39XVWBXB526HVV.WzZuZrwtj13TAFT06KaW2s0CUtbj/b.yZ.i', 'nothing', NULL, '2019-11-13 16:02:27', '2019-11-13 16:02:27'),
(2, 'Lorraine Kunaka', 'Family Health', 'lorraine@gmail.com', '$2y$10$ZG5sFzFFe1x2WLtszrhfDeYDb638xXkHseKJSqO9Ghfq5oWTcPRGS', 'nothing', NULL, '2019-11-13 16:02:28', '2019-11-13 16:02:28'),
(3, 'Van Heerden Van Staden', 'General Practitioner', 'test@gmail.com', '$2y$10$9yWYd05D40kN9v2ZdGeM8uiCNnCufKULD5hpvd5R.hYUf5tv7JGTa', 'nothing', NULL, '2019-11-13 16:02:28', '2019-11-13 16:02:28');

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
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2019_09_25_074817_create_consultations_table', 1),
('2019_09_25_074915_create_hcps_table', 1),
('2019_09_25_074930_create_comments_table', 1),
('2019_09_25_075307_create_bookings_table', 1),
('2019_09_26_080942_create_replies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reply_body` text COLLATE utf8_unicode_ci NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `hcp_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel_h` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel_w` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel_c` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `addr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tel_h`, `tel_w`, `tel_c`, `reference`, `dob`, `addr`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lorraine', 'xyz@gmail.com', '$2y$10$crZNpYkdGMzCiT.MocGAlev0u.0pRs7BYR2TytoLIRK3OEjp5figS', '0847878179', '0847878179', '0847878179', 'Instagram', '2019-11-11', '99 Church Street', 'F', 'w8Qyd3kgfXrJKZNZcPlfjBoGuZ2VPeWcu2Pe0nLXonbX0of6eJn0bptep9Ki', '2019-11-13 16:40:07', '2019-11-14 05:15:54'),
(2, 'Mduduzi  Buys', 'Mduduzi@mweb.co.za', '$2y$10$P62T60mKCSAm8wUmPfryEe8GHK2Gcvgelzg/KLE8qk6N/UPARWvEG', '0675924440', '0988390382', '0978371515', 'Internet', '1976-01-05', '06 Baileybridge Unit 9 Stonebridge Phoenix9068', 'M', 'T2JnFHAN64aHIo5RVAvcmciKC3QF7X4wJhKqr6VULRL5XJO7hX7VofCfOtCn', '2019-11-16 03:15:19', '2019-11-16 03:55:11'),
(3, 'Busisiwe Du Plessis', 'busisiwe@gmail.com', '$2y$10$OaN.Q3HgmPmY60WMOuKB3OggfFr7QvClQGsYj93hI.QP9b9Ij/QUG', '0312624821', '0861937436', '0589015043', 'Friends', '1981-10-11', '1 Kliprivier Avenue Secunda Secunda2302', 'F', 'ZLkWD5iuMVsu90fOS5MMBlyjpmlwMCU7dP7t6crCJScdbSznAbjPBVhQd4XC', '2019-11-16 03:28:47', '2019-11-16 03:30:05'),
(4, 'Moyahabo  Mbonani', 'Moyahabo@mweb.co.za', '$2y$10$RkJ7f1LXiyKPOhORgnn8tuy82S58bTCzKdUXF9akTgBYD6QGYwv5S', '0314567890', '03150456345', '0267244857', 'Facebook', '1967-08-24', '11 Gallinule Avenue Rooihuiskraal0157', 'M', 'epSY3NQiDRI2Q8xpGMSoXPmjTe9BnjPkoeZTgAya3d55KBJmyiS4vjm1qzUC', '2019-11-16 03:35:11', '2019-11-16 03:35:36'),
(5, 'Mduduzi Mangena', 'Mduduzi@rbiworld.co.za', '$2y$10$/WIDox.80ckrvBaAIQvlSev9TQOtwG932BNkx97.dKE1atUTN4TjC', '0601122791', '0408088039', '0961188709', 'Friends', '1991-05-22', '11 Mayibuye House No 19326 Joburg Ivory Park Ext 121685', 'M', '28wDpL77r221YeITnZcQdEZ7uvhKWqWYuz8wh9VhlNl6PvzV9kzFwWRSj5MY', '2019-11-16 03:39:01', '2019-11-16 03:44:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hcps`
--
ALTER TABLE `hcps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hcps_hcp_email_unique` (`hcp_email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hcps`
--
ALTER TABLE `hcps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
