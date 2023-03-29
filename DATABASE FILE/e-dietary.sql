-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 09:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-dietary`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(10) NOT NULL,
  `about_heading` text NOT NULL,
  `about_short_desc` text NOT NULL,
  `about_long_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `about_heading`, `about_short_desc`, `about_long_desc`) VALUES
(1, 'About Us ', '<p>E-dietary is a system for everyone who involves in food service industry namely hospitals and nursing homes. The ultimate objective of this food management system is to meet the third Sustainability Development Goal (SDG 3) which is Good Health and Well Being by providing nutritious food to the patients based on the right diets. <br /><br /></p>\r\n<p><strong>Vision:</strong> \"To be the leading provider of web-based dietary system in Malaysia.\"</p>\r\n<p><strong>Mission: </strong>\"Maintaining all residents&rsquo; diet preference in one area for users such as Nurse, Diet Clerk, Dietician and Chef Manager to access, modify and maintain the data.\"</p>', '<p><strong>Type of Meals Portion Available:</strong></p>\r\n<ul>\r\n<li>Normal Diet (ND)</li>\r\n<li>Diabetic Diet (DD)</li>\r\n<li>Low Salt Diet (LS)</li>\r\n<li>Low Fat Diet (LF)</li>\r\n<li>Diabetic Diet, Low Salt Diet (DDLS)</li>\r\n<li>Diabetic Diet, Low Fat Diet (DDLF)</li>\r\n<li>Diabetic Diet, Low Fat Diet, Low Salt Diet (DDLFLS)</li>\r\n<li>Soft</li>\r\n<li>Minced and Moist (M&amp;M)</li>\r\n<li>Child (&lt;1 year old)</li>\r\n<li>Child (1 - 3 years old)</li>\r\n<li>Child (4 - 6 years old)</li>\r\n<li>Child (&gt;7 years old)</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Penalty</strong></p>\r\n<p>= 20% * Total Pack * RM10</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_fname` varchar(255) NOT NULL,
  `admin_lname` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_position` varchar(255) NOT NULL,
  `admin_image` text DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_email`, `admin_pass`, `admin_contact`, `admin_position`, `admin_image`, `created_date`) VALUES
(1, 'Nur Siri Aufa', 'Jalaluddin', 'admin@mail.com', 'Password@123', '013-498746', 'Developer', 'Admin Profile Image SSTHO.png', '2022-12-27 18:14:19'),
(10, 'Nur Amelia', 'Hudson', 'amelia@mail.com', '123', '013-4798365', 'Head of Department of Sales and Marketing Department', 'AmeliaHenderson.jpg', '2021-12-13 18:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `nurse_id` int(11) NOT NULL,
  `ward_id` text NOT NULL,
  `patient_id` int(11) NOT NULL,
  `complaint_reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `nurse_id`, `ward_id`, `patient_id`, `complaint_reason`) VALUES
(1, 111, '2', 3, 'Staff not friendly'),
(2, 12565, '2', 1, 'Food taste bad'),
(3, 1233, '3', 0, 'Late plate collection'),
(8, 3, '4', 48, 'Wrong diet');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `diseases_id` int(11) NOT NULL,
  `diseases_name` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`diseases_id`, `diseases_name`) VALUES
(1, 'Ear Infection'),
(2, 'Snoring and Obstructive Sleep Apnea (OSA)'),
(3, 'Head and Neck Surgery'),
(4, 'Speech and Swallowing Disorders'),
(5, 'Nose and Sinus Disorders'),
(6, 'Abdominal Pain'),
(7, 'Cancer'),
(8, 'Gallbladder Inflammation and Gallstones'),
(9, 'Gastrointestinal'),
(10, 'Hernia'),
(11, 'Thyroid Disorders'),
(12, 'Varicose Veins'),
(13, 'Anemia'),
(14, 'Asthma'),
(15, 'Leukemia'),
(16, 'Pneumonia'),
(17, 'Tuberculosis'),
(18, 'Candidiasis'),
(19, 'Chronic Obstructive Pulmonary Disease (COPD)'),
(20, 'Hypertension\r\n'),
(21, 'Malaria\r\n'),
(22, 'Diabetes'),
(23, 'Heart Failure'),
(24, 'Stroke'),
(25, 'Arthritis'),
(26, 'Fracture'),
(27, 'Endometriosis'),
(28, 'Fetal Anemia'),
(29, 'Ovarian Cysts\r\n'),
(30, 'Preterm Labor');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faqs_id` int(11) NOT NULL,
  `faqs_title1` text NOT NULL,
  `faqs_title1_sub1` text NOT NULL,
  `faqs_title1_sub1_details` text NOT NULL,
  `faqs_title1_sub2` text NOT NULL,
  `faqs_title1_sub2_details` text NOT NULL,
  `faqs_title1_sub3` text NOT NULL,
  `faqs_title1_sub3_details` text NOT NULL,
  `faqs_title2` text NOT NULL,
  `faqs_title2_sub1` text NOT NULL,
  `faqs_title2_sub1_details` text NOT NULL,
  `faqs_title2_sub2` text NOT NULL,
  `faqs_title2_sub2_details` text NOT NULL,
  `faqs_title3` text NOT NULL,
  `faqs_title3_sub1` text NOT NULL,
  `faqs_title3_sub1_details` text NOT NULL,
  `faqs_title3_sub2` text NOT NULL,
  `faqs_title3_sub2_details` text NOT NULL,
  `faqs_title4` text NOT NULL,
  `faqs_title4_sub1` text NOT NULL,
  `faqs_title4_sub1_details` text NOT NULL,
  `faqs_title4_sub2` text NOT NULL,
  `faqs_title4_sub2_details` text NOT NULL,
  `faqs_title4_sub3` text NOT NULL,
  `faqs_title4_sub3_details` text NOT NULL,
  `faqs_title4_sub4` text NOT NULL,
  `faqs_title4_sub4_details` text NOT NULL,
  `faqs_title4_sub5` text NOT NULL,
  `faqs_title4_sub5_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faqs_id`, `faqs_title1`, `faqs_title1_sub1`, `faqs_title1_sub1_details`, `faqs_title1_sub2`, `faqs_title1_sub2_details`, `faqs_title1_sub3`, `faqs_title1_sub3_details`, `faqs_title2`, `faqs_title2_sub1`, `faqs_title2_sub1_details`, `faqs_title2_sub2`, `faqs_title2_sub2_details`, `faqs_title3`, `faqs_title3_sub1`, `faqs_title3_sub1_details`, `faqs_title3_sub2`, `faqs_title3_sub2_details`, `faqs_title4`, `faqs_title4_sub1`, `faqs_title4_sub1_details`, `faqs_title4_sub2`, `faqs_title4_sub2_details`, `faqs_title4_sub3`, `faqs_title4_sub3_details`, `faqs_title4_sub4`, `faqs_title4_sub4_details`, `faqs_title4_sub5`, `faqs_title4_sub5_details`) VALUES
(1, 'Patient Information', 'How do I insert a patient information?', '<p>To create a patient details form in the food management system, you will need to log in to the system and navigate to the appropriate section or module. From there, you can create a new form by selecting the \"Register Patient\" option and entering the necessary information. The form should include fields for the patient personal information, medical history, and any other relevant details.</p>', 'How patient data stored?', '<p>The patient information insert on the form will be automatically stored in the food management system database. It is important to ensure that the patient information is stored securely and is only accessible to authorized staff to protect patient privacy.</p>', 'How to update or access patient information?', '<p>To update or access the patient information stored on the form in the food management system, you will need to log in to the system and navigate to the appropriate section or module. From there, you can search for the patient record and make any necessary changes or updates. The system may also allow you to view or print the patient information as needed.<br /><br />It is important to regularly review and update the patient information in the system to ensure that it is accurate and up-to-date. This will help to ensure that patients are receiving the correct meals and care, and will help the food provider better manage their operations.<br /><br />If you have any questions or need assistance with accessing or updating the patient information in the food management system, you can contact the system support team for assistance.</p>', 'Penalty & Complaint', 'Who can set penalty and complaint?', '<p>Penalty charges and complaints can typically be submitted by authorized staff members, such as nurses or other healthcare workers. The system may also allow patients or other parties to submit complaints through a separate process.</p>', 'How to view penalty charges and complaints?', '', 'Meals', 'How does the system help reduce food wastage?', '<p>The system provides real-time consumption insights and has a food wastage calculator feature to help track and minimize food wastage. The food wastage calculator feature is a tool within the proposed food management system that helps track and minimize food wastage. It allows users to input the number of meals being produced and the leftover amounts, and the system will automatically calculate the total food wastage for the day. This information can be used to identify areas where food wastage is occurring and implement strategies to reduce it. By tracking food wastage on a daily basis, the system can help the food service provider better understand and manage their food waste, leading to cost savings and a more sustainable operation.</p>', 'How to ensure accurate portion sizes?', '', 'System', 'Can I Have An On-Premises Setup?', '<p>Yes, we fully support the on-premise set up. Whatfix guides can be exported and deployed on your own web server with our on-premises export version. An onpremise setup refers to a software or system that is installed and run on a company own servers and infrastructure, rather than being hosted and accessed through the cloud. In an on-premise setup, the company is responsible for maintaining and managing the hardware and software required to run the system, including servers, storage, and networking equipment. This can involve a significant upfront investment in hardware and IT infrastructure. One advantage of an on-premise setup is that the company has complete control over its own systems and data, and does not have to rely on external hosting providers or internet connectivity.</p>', 'How Secure Is E-dietary?', '<p>E-dietary supports HTTPS protocol and all accounts/data is access controlled. In self-hosted/on-premises option, we ensure that no web request or data flow is sent outside your servers/premises. In addition to supporting HTTPS, E-dietary has access controls in place to ensure that only authorized individuals can access specific accounts and data. Access controls are security measures that restrict access to a system, network, or data to only those individuals who have been granted permission. By using both HTTPS and access controls, E-dietary is able to provide a secure platform for its users. This helps to protect sensitive data and ensures that only authorized individuals are able to access it.</p>', 'How do I get started with the system?', '<p>o get started with the system, please contact the sales team at sales@edietary.com or by calling +60-184087929. The sales team will work with you to understand your specific needs and usage and provide you with a customized quote.</p>', 'Is there training available for the system?', '<p>Yes, training is available for the system. Please contact the sales team at sales@e-dietary.com or by calling +60-184087929 for more information on training options.</p>', 'Is technical support available for the system?', '<p>Yes, technical support is available for the system. Please contact the support team at support@e-dietary.com or by calling +60-184087929 for assistance.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `food_wastage`
--

CREATE TABLE `food_wastage` (
  `f_w_id` int(10) NOT NULL,
  `f_w_date` date NOT NULL,
  `f_w_percent_b` decimal(10,2) NOT NULL,
  `f_w_cost_b` decimal(10,2) NOT NULL,
  `f_w_percent_l` decimal(10,2) NOT NULL,
  `f_w_cost_l` decimal(10,2) NOT NULL,
  `f_w_percent_ht` decimal(10,2) NOT NULL,
  `f_w_cost_ht` decimal(10,2) NOT NULL,
  `f_w_percent_d` decimal(10,2) NOT NULL,
  `f_w_cost_d` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_wastage`
--

INSERT INTO `food_wastage` (`f_w_id`, `f_w_date`, `f_w_percent_b`, `f_w_cost_b`, `f_w_percent_l`, `f_w_cost_l`, `f_w_percent_ht`, `f_w_cost_ht`, `f_w_percent_d`, `f_w_cost_d`) VALUES
(10, '2022-12-26', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(11, '2022-12-26', '10.00', '1.00', '10.00', '1.00', '10.00', '1.00', '10.00', '1.00'),
(12, '2022-12-27', '20.00', '0.50', '10.00', '1.00', '10.00', '1.00', '10.00', '1.00'),
(13, '2021-12-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(14, '2021-12-01', '33.33', '1.60', '93.75', '0.90', '64.10', '0.78', '77.78', '0.90'),
(15, '2021-01-01', '33.33', '1.70', '93.75', '1.00', '64.10', '0.88', '77.78', '1.00'),
(16, '2020-12-01', '33.33', '1.69', '93.75', '0.99', '64.10', '0.79', '77.78', '0.99'),
(17, '2020-01-01', '33.33', '2.60', '93.75', '1.90', '64.10', '1.78', '77.78', '1.90'),
(20, '2023-02-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(21, '2023-03-02', '53.33', '2.50', '93.75', '0.60', '64.10', '0.88', '77.78', '0.88'),
(22, '2022-01-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(23, '2022-02-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(24, '2022-03-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(25, '2022-04-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(26, '2022-05-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(27, '2022-06-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(28, '2022-07-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(29, '2022-08-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(30, '2022-09-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(32, '2022-11-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(33, '2022-12-01', '33.33', '1.50', '93.75', '0.80', '64.10', '0.68', '77.78', '0.80'),
(35, '2022-02-01', '43.33', '900.00', '93.75', '400.00', '44.10', '700.00', '22.78', '900.00'),
(36, '2022-03-01', '43.33', '400.00', '93.75', '330.00', '44.10', '550.00', '22.78', '500.00'),
(37, '2022-04-01', '50.33', '400.00', '50.75', '330.00', '22.10', '550.00', '77.78', '400.00'),
(38, '2022-05-01', '50.33', '600.00', '70.75', '330.00', '52.10', '550.00', '97.78', '600.00'),
(39, '2022-06-01', '50.33', '900.00', '20.75', '330.00', '22.10', '550.00', '50.78', '600.00'),
(40, '2022-07-01', '50.33', '900.00', '20.75', '330.00', '22.10', '750.00', '50.78', '600.00'),
(41, '2022-08-01', '50.33', '900.00', '20.75', '330.00', '22.10', '750.00', '50.78', '300.00'),
(42, '2022-09-01', '50.33', '900.00', '50.75', '330.00', '22.10', '750.00', '50.78', '300.00'),
(45, '2022-10-01', '50.33', '900.00', '50.75', '330.00', '22.10', '550.00', '50.78', '300.00'),
(46, '2022-12-01', '50.33', '900.00', '50.75', '330.00', '22.10', '550.00', '50.78', '300.00'),
(47, '2022-11-01', '50.33', '900.00', '50.75', '330.00', '22.10', '750.00', '50.78', '700.00'),
(48, '2022-01-01', '50.33', '900.00', '50.75', '330.00', '22.10', '750.00', '50.78', '700.00'),
(49, '2023-01-01', '30.00', '500.00', '40.00', '600.00', '50.00', '700.00', '60.00', '800.00'),
(50, '2023-02-01', '30.00', '500.00', '40.00', '600.00', '50.00', '700.00', '60.00', '800.00'),
(51, '2023-03-01', '30.00', '200.00', '40.00', '400.00', '50.00', '700.00', '60.00', '800.00'),
(56, '2023-04-01', '30.00', '500.00', '40.00', '600.00', '50.00', '700.00', '60.00', '800.00'),
(57, '2023-05-01', '30.00', '500.00', '40.00', '600.00', '50.00', '500.00', '60.00', '500.00'),
(59, '2023-06-01', '30.00', '500.00', '40.00', '600.00', '50.00', '300.00', '60.00', '500.00'),
(61, '2023-08-01', '30.00', '400.00', '40.00', '400.00', '50.00', '700.00', '60.00', '800.00'),
(62, '2023-09-01', '30.00', '500.00', '40.00', '300.00', '50.00', '700.00', '60.00', '400.00'),
(63, '2023-10-01', '30.00', '300.00', '40.00', '300.00', '50.00', '700.00', '60.00', '800.00'),
(64, '2023-11-01', '30.00', '500.00', '40.00', '600.00', '50.00', '700.00', '60.00', '800.00'),
(66, '2023-12-01', '30.00', '500.00', '40.00', '600.00', '50.00', '700.00', '60.00', '800.00'),
(67, '2023-06-01', '30.00', '500.00', '40.00', '600.00', '50.00', '700.00', '60.00', '800.00'),
(68, '2023-12-01', '30.00', '500.00', '40.00', '600.00', '50.00', '700.00', '60.00', '800.00'),
(69, '2023-07-01', '30.00', '500.00', '40.00', '600.00', '50.00', '700.00', '60.00', '800.00'),
(70, '2023-01-06', '100.00', '1.00', '55.56', '1.60', '166.67', '2.00', '1.28', '1.20');

-- --------------------------------------------------------

--
-- Table structure for table `meals_menu_b`
--

CREATE TABLE `meals_menu_b` (
  `meals_menu_b_id` int(11) NOT NULL,
  `meals_portion_id` int(11) NOT NULL,
  `meals_menu_b` text NOT NULL,
  `meals_quantity_b` decimal(10,2) NOT NULL,
  `meals_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meals_menu_b`
--

INSERT INTO `meals_menu_b` (`meals_menu_b_id`, `meals_portion_id`, `meals_menu_b`, `meals_quantity_b`, `meals_cost`) VALUES
(2, 1, 'Fried Mee Hoon', '190.00', '9.00'),
(3, 1, 'Fried Penne\r\n', '190.00', '8.00'),
(4, 1, 'Fried Rice', '230.00', '8.00'),
(5, 1, 'Fried Kway Teow', '230.00', '8.00'),
(6, 1, 'Kway Teow Soup (Without Flavor)', '200.00', '8.00'),
(7, 1, 'Fried Mee', '150.00', '8.00'),
(8, 1, 'Mee Hoon Soup (Without Flavor)\n', '160.00', '8.00'),
(9, 1, 'Spaghetti (Without Flavor)', '200.00', '8.00'),
(10, 1, 'Egg Sandwich', '160.00', '8.00'),
(11, 1, 'White Bread + Frittata Egg', '70.00', '8.00'),
(12, 1, 'Baked Bean', '100.00', '8.00'),
(13, 2, 'White Bread + Scramble Egg', '160.00', '8.00'),
(14, 2, 'Fried Mee Hoon', '150.00', '8.00'),
(15, 2, 'Fried Penne', '150.00', '8.00'),
(16, 2, 'Fried Rice', '180.00', '8.00'),
(17, 2, 'Fried Kway Teow', '180.00', '8.00'),
(18, 2, 'Kway Teow Soup (Without Flavor)', '150.00', '8.00'),
(19, 2, 'Fried Mee', '120.00', '8.00'),
(20, 2, 'Mee Hoon Soup (Without Flavor)', '120.00', '8.00'),
(21, 2, 'Spaghetti', '150.00', '8.00'),
(22, 2, 'Egg Sandwich', '160.00', '8.00'),
(23, 2, 'White Bread + Frittata Egg', '70.00', '8.00'),
(193, 4, 'Egg Sandwich', '100.00', '8.00'),
(196, 3, 'Mixed Porridge', '400.00', '8.00'),
(197, 3, 'Bread', '60.00', '5.00'),
(198, 3, 'Fried Penne', '140.00', '8.00'),
(199, 3, 'Fried Rice', '170.00', '8.00'),
(200, 3, 'Kway Teow (Without Flavour)', '150.00', '8.00'),
(201, 3, 'Fried Mee', '110.00', '8.00');

-- --------------------------------------------------------

--
-- Table structure for table `meals_menu_d`
--

CREATE TABLE `meals_menu_d` (
  `meals_menu_d_id` int(11) NOT NULL,
  `meals_portion_id` int(11) NOT NULL,
  `meals_menu_d` text NOT NULL,
  `meals_quantity_d` decimal(10,2) NOT NULL,
  `meals_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meals_menu_d`
--

INSERT INTO `meals_menu_d` (`meals_menu_d_id`, `meals_portion_id`, `meals_menu_d`, `meals_quantity_d`, `meals_cost`) VALUES
(1, 1, 'Rice + Fish (Without Bone) + Leaf Vegetables', '410.00', '8.00'),
(2, 1, 'Rice + Chicken (Without Bone) + Watermelon', '490.00', '8.00'),
(3, 2, 'Rice + Fish (Without Bone) + Fruit Vegetables', '340.00', '8.00'),
(4, 2, 'Rice + Tauhu + Orange', '430.00', '8.00'),
(7, 3, 'Rice + Fish (Without Bone) + Orange', '270.00', '8.00'),
(8, 3, 'Rice + Chicken (With Bone)', '400.00', '9.00'),
(9, 4, 'Rice + Chicken (With Bone) + Apple (Red/ Green)', '360.00', '8.00'),
(10, 4, 'Rice + Fish (Without Bone) + Tauhu ', '360.00', '9.00');

-- --------------------------------------------------------

--
-- Table structure for table `meals_menu_ht`
--

CREATE TABLE `meals_menu_ht` (
  `meals_menu_ht_id` int(11) NOT NULL,
  `meals_portion_id` int(11) NOT NULL,
  `meals_menu_ht` text NOT NULL,
  `meals_quantity_ht` decimal(10,2) NOT NULL,
  `meals_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meals_menu_ht`
--

INSERT INTO `meals_menu_ht` (`meals_menu_ht_id`, `meals_portion_id`, `meals_menu_ht`, `meals_quantity_ht`, `meals_cost`) VALUES
(1, 1, 'Kuih-Muih', '100.00', '4.00'),
(2, 1, 'Bun', '60.00', '8.00'),
(3, 2, 'Biscuits', '30.00', '8.00'),
(4, 11, 'Cakes', '30.00', '8.00'),
(7, 3, 'Bun ', '60.00', '5.00'),
(8, 1, 'Cake', '60.00', '6.00'),
(9, 4, 'Fried Kuih-Muih ', '80.00', '6.00'),
(10, 4, 'Red Beans', '230.00', '7.00'),
(11, 2, 'Bun', '60.00', '3.00'),
(12, 3, 'Red Bean Bun', '230.00', '3.00'),
(13, 3, 'Biscuits', '30.00', '3.00');

-- --------------------------------------------------------

--
-- Table structure for table `meals_menu_l`
--

CREATE TABLE `meals_menu_l` (
  `meals_menu_l_id` int(11) NOT NULL,
  `meals_portion_id` int(11) NOT NULL,
  `meals_menu_l` text NOT NULL,
  `meals_quantity_l` decimal(10,2) NOT NULL,
  `meals_cost` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meals_menu_l`
--

INSERT INTO `meals_menu_l` (`meals_menu_l_id`, `meals_portion_id`, `meals_menu_l`, `meals_quantity_l`, `meals_cost`) VALUES
(1, 1, 'Rice + Fish (Without Bone)', '280.00', '8.00'),
(2, 1, 'Rice + Chicken (With Bone)', '270.00', '8.00'),
(3, 2, 'Rice + Fish (Without Bone)', '240.00', '8.00'),
(5, 8, 'Mix Porridge', '410.00', '8.00'),
(9, 3, 'RIce ', '240.00', '8.00'),
(10, 3, 'Rice + Chicken (With Bone) +Apple', '330.00', '9.00'),
(11, 3, 'Rice + Fish (With Bone) + Tauhu (2 exc)', '370.00', '9.00'),
(12, 4, 'White Bread + Scramble Egg + Butter', '300.00', '7.00'),
(13, 4, 'Wholemeal Bread + Scramble Egg + Butter', '330.00', '7.00'),
(14, 1, 'Plain Porridge', '320.00', '5.00'),
(15, 1, 'Mixed Porridge', '400.00', '5.00'),
(16, 2, 'Rice + Chicken (Without Bone)', '90.00', '8.00'),
(17, 2, 'Rice + Tofu', '130.00', '5.00'),
(18, 2, 'Rice + Tempe', '80.00', '5.00'),
(19, 3, 'Rice + Vegetable', '130.00', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `meals_portion`
--

CREATE TABLE `meals_portion` (
  `meals_portion_id` int(11) NOT NULL,
  `meals_portion` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals_portion`
--

INSERT INTO `meals_portion` (`meals_portion_id`, `meals_portion`) VALUES
(1, 'Normal Diet (ND)'),
(2, 'Diabetic Diet (DD)'),
(3, 'Low Fat Diet (LFD)'),
(4, 'Low Salt Diet (LSD)'),
(5, 'Diabetic Diet, Low Fat Diet (DDLF)'),
(6, 'Diabetic Diet, Low Salt Diet (DDLS)'),
(7, 'Diabetic Diet, Low Fat Diet, Low Salt Diet (DDLFLS)'),
(8, 'Soft'),
(9, 'Minced and Moist'),
(10, 'Child (<1 years old)'),
(11, 'Child (1-3 years old)'),
(12, 'Child (4-6 years old)'),
(13, 'Child (>7 years old)');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `nurse_id` int(10) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `nurse_fname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nurse_lname` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nurse_email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nurse_pass` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nurse_contact` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nurse_image` text CHARACTER SET utf8mb4 NOT NULL,
  `nurse_ip` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nurse_confirm_code` text CHARACTER SET utf8mb4 NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nurse_id`, `ward_id`, `nurse_fname`, `nurse_lname`, `nurse_email`, `nurse_pass`, `nurse_contact`, `nurse_image`, `nurse_ip`, `nurse_confirm_code`, `created_date`) VALUES
(8, 4, 'Nursyafiqah', 'Hapiz', 'syaf@mail.com', 'syaf00!', '012598746', '74cb32ce-becb-4ed9-939c-084604e6c719.jpg', '::1', '1564934014', '2023-01-06 03:06:44'),
(21, 7, 'Mira', 'Filzah', 'mirafilzah@gmail.com', 'Mirah00!', '011-56987412', 'Mira-Filzah-Biodata.jpg', '::1', '516602349', '2022-12-26 15:12:21'),
(111, 3, 'Sarah', 'Suhairi ', 'sara@mail.com', 'shillacantik123#', '017-2470328', 'sarah.jpg', '::1', '1185931710', '2023-01-03 15:35:49'),
(141, 2, 'Sarah', 'Ali', 'sarahali@gmail.com', 'Sarah00!', '013-5698324', '74cb32ce-becb-4ed9-939c-084604e6c719.jpg', '::1', '891949417', '2022-12-26 15:06:23'),
(1112, 3, 'Ali', 'Amri', 'ali@mail.com', 'ali1112', '017-6785676', 'ali.jpg', '::1', '1876620584', '2022-12-24 16:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `patient_id` int(10) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `diseases_id` int(11) NOT NULL,
  `patient_fname` text NOT NULL,
  `patient_lname` text NOT NULL,
  `patient_bed` int(11) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_admit_date` date NOT NULL,
  `patient_allergic` text NOT NULL,
  `patient_MAC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`patient_id`, `ward_id`, `diseases_id`, `patient_fname`, `patient_lname`, `patient_bed`, `patient_age`, `patient_admit_date`, `patient_allergic`, `patient_MAC`) VALUES
(27, 4, 7, 'Amelia', 'Hunderson', 17, 32, '2022-12-08', 'Egg', 'No'),
(33, 5, 19, 'Aniq', 'Suhair', 12, 28, '2022-12-15', 'Seafood', 'No'),
(41, 4, 8, 'Hun', 'Hakeem', 17, 32, '2022-12-08', 'No', 'No'),
(46, 9, 15, 'Norainaa', 'Azenan', 4, 45, '2023-01-06', 'No', 'No'),
(49, 5, 7, 'Nuir Iffah', 'Nazri', 56, 78, '2023-01-05', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `patient_m_menu`
--

CREATE TABLE `patient_m_menu` (
  `patient_m_menu_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `meals_portion_id` int(11) NOT NULL,
  `meals_menu_b_id` int(11) NOT NULL,
  `meals_menu_l_id` int(11) NOT NULL,
  `meals_menu_ht_id` int(11) NOT NULL,
  `meals_menu_d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_m_menu`
--

INSERT INTO `patient_m_menu` (`patient_m_menu_id`, `patient_id`, `meals_portion_id`, `meals_menu_b_id`, `meals_menu_l_id`, `meals_menu_ht_id`, `meals_menu_d_id`) VALUES
(1, 27, 1, 3, 1, 1, 1),
(2, 33, 1, 6, 1, 1, 1),
(4, 41, 2, 17, 3, 3, 3),
(13, 46, 1, 17, 1, 1, 1),
(14, 49, 2, 16, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `penalty_id` int(11) NOT NULL,
  `nurse_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `penalty_reason` text NOT NULL,
  `total_pack` int(11) NOT NULL,
  `penalty_amount` int(11) NOT NULL,
  `penalty_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penalty`
--

INSERT INTO `penalty` (`penalty_id`, `nurse_id`, `ward_id`, `patient_id`, `penalty_reason`, `total_pack`, `penalty_amount`, `penalty_date`) VALUES
(1, 111, 3, 3, 'Wrong diet', 0, 10, '2022-12-26'),
(143, 1279, 5, 3, 'Wrong diet', 0, 10, '2022-12-26'),
(146, 4333, 7, 3, 'Late serve', 0, 5, '2023-01-01'),
(147, 123, 3, 3, 'Wrong diet', 12, 4, '2023-01-02'),
(148, 12, 10, 1, 'Wrong diet', 1, 40, '2023-01-02'),
(150, 123, 9, 12, 'Wrong diet', 1, 60, '2023-01-02'),
(151, 2434, 3, 3, 'Wrong diet', 1, 40, '2023-01-03'),
(152, 1, 4, 3, 'Wrong diet', 2, 56, '2023-01-03'),
(153, 21, 7, 33, 'Late serve', 12, 96, '2023-01-05'),
(154, 112, 3, 46, 'Late serve', 4, 32, '2023-01-05'),
(155, 6, 2, 46, 'Late serve', 9, 72, '2023-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `price_info`
--

CREATE TABLE `price_info` (
  `price_info_id` int(11) NOT NULL,
  `price_charge` int(11) NOT NULL,
  `penalty_charge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price_info`
--

INSERT INTO `price_info` (`price_info_id`, `price_charge`, `penalty_charge`) VALUES
(3, 40, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `slider_img1` text NOT NULL,
  `slider_img2` text NOT NULL,
  `slider_img3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_img1`, `slider_img2`, `slider_img3`) VALUES
(1, '1.png', '2.png', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `ward_id` int(11) NOT NULL,
  `patient_ward` text CHARACTER SET utf8 NOT NULL,
  `no_beds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`ward_id`, `patient_ward`, `no_beds`) VALUES
(1, 'VIP', 17),
(2, 'Ear, Nose, and Throat (ENT)', 16),
(3, 'Pediatric', 37),
(4, 'Surgical', 28),
(5, 'Medical', 28),
(6, 'Orthopedic', 28),
(7, 'Obstetrics & Gynecology', 28),
(8, 'Neonatal Intensive Care Unit (NICU)', 20),
(9, 'Intensive Care Unit (ICU)', 14),
(10, 'Psychiatric', 16),
(11, 'Day Care', 42);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`diseases_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faqs_id`);

--
-- Indexes for table `food_wastage`
--
ALTER TABLE `food_wastage`
  ADD PRIMARY KEY (`f_w_id`);

--
-- Indexes for table `meals_menu_b`
--
ALTER TABLE `meals_menu_b`
  ADD PRIMARY KEY (`meals_menu_b_id`);

--
-- Indexes for table `meals_menu_d`
--
ALTER TABLE `meals_menu_d`
  ADD PRIMARY KEY (`meals_menu_d_id`);

--
-- Indexes for table `meals_menu_ht`
--
ALTER TABLE `meals_menu_ht`
  ADD PRIMARY KEY (`meals_menu_ht_id`);

--
-- Indexes for table `meals_menu_l`
--
ALTER TABLE `meals_menu_l`
  ADD PRIMARY KEY (`meals_menu_l_id`);

--
-- Indexes for table `meals_portion`
--
ALTER TABLE `meals_portion`
  ADD PRIMARY KEY (`meals_portion_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nurse_id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_m_menu`
--
ALTER TABLE `patient_m_menu`
  ADD PRIMARY KEY (`patient_m_menu_id`);

--
-- Indexes for table `penalty`
--
ALTER TABLE `penalty`
  ADD PRIMARY KEY (`penalty_id`);

--
-- Indexes for table `price_info`
--
ALTER TABLE `price_info`
  ADD PRIMARY KEY (`price_info_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`ward_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `diseases_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faqs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_wastage`
--
ALTER TABLE `food_wastage`
  MODIFY `f_w_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `meals_menu_b`
--
ALTER TABLE `meals_menu_b`
  MODIFY `meals_menu_b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `meals_menu_d`
--
ALTER TABLE `meals_menu_d`
  MODIFY `meals_menu_d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `meals_menu_ht`
--
ALTER TABLE `meals_menu_ht`
  MODIFY `meals_menu_ht_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `meals_menu_l`
--
ALTER TABLE `meals_menu_l`
  MODIFY `meals_menu_l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `meals_portion`
--
ALTER TABLE `meals_portion`
  MODIFY `meals_portion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nurse_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18766;

--
-- AUTO_INCREMENT for table `patient_m_menu`
--
ALTER TABLE `patient_m_menu`
  MODIFY `patient_m_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penalty`
--
ALTER TABLE `penalty`
  MODIFY `penalty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `price_info`
--
ALTER TABLE `price_info`
  MODIFY `price_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `ward_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
