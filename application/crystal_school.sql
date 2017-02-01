--
-- Database: `crystal_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_date` datetime DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `attendance_value` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `bank_acc` varchar(20) NOT NULL,
  `bank_dateadded` datetime NOT NULL,
  `bank_datedeleted` datetime NOT NULL,
  `bank_accname` varchar(50) NOT NULL,
  `user_id` int(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `staffstatus_id` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `teacher_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `SCHOOLARM_ID` varchar(20) NOT NULL,
  `user_id` int(5) DEFAULT '7'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(50) NOT NULL,
  `type` enum('TEXT','EMAIL') NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `mid_name` varchar(100) DEFAULT NULL,
  `parent_fullname` varchar(300) NOT NULL,
  `parent_fdob` varchar(20) DEFAULT NULL,
  `relation` varchar(50) DEFAULT NULL,
  `parent_fathersocc` varchar(500) DEFAULT NULL,
  `parent_address` varchar(500) DEFAULT NULL,
  `address2` varchar(500) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `parent_phone` varchar(15) DEFAULT NULL,
  `parent_phone2` varchar(15) DEFAULT NULL,
  `parent_email` varchar(50) DEFAULT NULL,
  `parent_alias` varchar(11) DEFAULT 'Mr and Mrs',
  `parent_mothersocc` varchar(255) DEFAULT NULL,
  `parent_mdob` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `parent_mothersemail` varchar(100) DEFAULT NULL,
  `parent_mothersphone` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_tellerno` int(11) NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_payer` varchar(100) NOT NULL,
  `payment_dateadded` datetime NOT NULL,
  `payment_dateedited` datetime NOT NULL,
  `bank_id` int(11) NOT NULL,
  `USER_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1',
  `payment_total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmode`
--

CREATE TABLE `paymentmode` (
  `paymentmode_id` int(11) NOT NULL,
  `paymentmode_name` varchar(225) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentmode`
--

INSERT INTO `paymentmode` (`paymentmode_id`, `paymentmode_name`, `user_id`) VALUES
(1, 'Teller', NULL),
(2, 'Cash', NULL),
(3, 'POS', NULL),
(4, 'Bank Transfer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `period_id` int(11) NOT NULL,
  `period_name` varchar(100) NOT NULL,
  `Duration` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schoolfees`
--

CREATE TABLE `schoolfees` (
  `schoolfees_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `schoolfees_amount` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT '7'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolfees`
--

INSERT INTO `schoolfees` (`schoolfees_id`, `department_id`, `schoolfees_amount`, `term_id`, `user_id`) VALUES
(1, 2, 105000, 8, 7),
(2, 3, 25000, 8, 7),
(3, 4, 500000, 8, 7),
(4, 5, 80000, 8, 7),
(5, 6, 85000, 8, 7),
(6, 19, 85000, 8, 7),
(7, 20, 20000, 8, 7),
(8, 1, 500000, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `schoolfeespayment`
--

CREATE TABLE `schoolfeespayment` (
  `schoolfeespayment_id` int(50) NOT NULL,
  `student_id` int(50) NOT NULL,
  `schoolfeespayment_datetime` date NOT NULL,
  `amount` int(20) NOT NULL,
  `session_id` int(11) DEFAULT NULL,
  `term_id` int(11) NOT NULL,
  `paymentmode_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tellerno` int(11) DEFAULT NULL,
  `activation` int(2) DEFAULT '0',
  `tellername` text,
  `bank_id` int(11) DEFAULT NULL,
  `schoolfeespayment_collectedby` text,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` bigint(50) NOT NULL,
  `subject_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `subject_desc` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `smsname` varchar(11) CHARACTER SET latin1 NOT NULL,
  `compilsory` int(2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;



--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `session_id` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `term_name` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `def` tinyint(1) DEFAULT NULL,
  `create_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `term_start` date DEFAULT NULL,
  `term_end` date DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '7',
  `term_order` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



CREATE TABLE `expenses` (
  `expenses_id` int(11) NOT NULL,
  `expenses_reason` varchar(120) DEFAULT NULL,
  `expenses_amount` int(11) NOT NULL,
  `expenses_datetime` date NOT NULL,
  `expensestype_id` int(11) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `expenses_status` int(2) DEFAULT '0',
  `expenses_dateadded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `expensestype` (
  `expensestype_id` int(11) NOT NULL,
  `expensestype_name` varchar(225) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `staff` (
  `staff_id` int(50) NOT NULL,
  `staff_fname` varchar(50) NOT NULL,
  `staff_mname` varchar(50) DEFAULT NULL,
  `staff_sname` varchar(50) NOT NULL,
  `staff_sex` varchar(50) NOT NULL,
  `staff_dept` int(11) NOT NULL,
  `staff_tel` varchar(255) NOT NULL,
  `staff_dob` date NOT NULL,
  `staff_state` varchar(255) DEFAULT NULL,
  `staff_lga` varchar(255) DEFAULT NULL,
  `staff_nationality` varchar(255) DEFAULT NULL,
  `staff_image` varchar(255) DEFAULT NULL,
  `staff_email` varchar(255) NOT NULL,
  `Staff_address` longtext,
  `staff_mstatus` varchar(255) DEFAULT NULL,
  `Staff_employ_name` varchar(255) DEFAULT NULL,
  `staff_employ_address` text,
  `staff_exit_reason` varchar(255) DEFAULT NULL,
  `staff_employ_from` date DEFAULT NULL,
  `staff_employ_to` date DEFAULT NULL,
  `best_food` varchar(255) DEFAULT NULL,
  `hobby` text,
  `other` text,
  `primary_attend` varchar(255) DEFAULT NULL,
  `primary_from` date DEFAULT NULL,
  `primary_to` date DEFAULT NULL,
  `primary_certificate` varchar(255) DEFAULT NULL,
  `secondary_attend` varchar(255) DEFAULT NULL,
  `secondary_from` date DEFAULT NULL,
  `secondary_to` date DEFAULT NULL,
  `secondary_certificate` varchar(255) DEFAULT NULL,
  `university_attend` varchar(255) DEFAULT NULL,
  `university_from` date DEFAULT NULL,
  `university_to` date DEFAULT NULL,
  `university_certificate` varchar(255) DEFAULT NULL,
  `staff_salary` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `period_id` int(11) DEFAULT '3',
  `staff_qua` text,
  `staff_Year_Joined_Establishment` varchar(150) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `staff_bankno` varchar(200) DEFAULT NULL,
  `staff_bankname` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `staffbank` (
  `staffbank_id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `bank_Acc` text NOT NULL,
  `staff_id` int(11) NOT NULL,
  `bank_Accno` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_lastloggedin` datetime NOT NULL,
  `user_privilege` varchar(15) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `setup_id` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `session_name` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `setup` (
  `setup_name` varchar(255) NOT NULL,
  `setup_value` varchar(255) NOT NULL,
  `setup_logo` varchar(255) DEFAULT NULL,
  `setup_smsname` varchar(255) NOT NULL,
  `setup_phone` varchar(255) NOT NULL,
  `setup_id` int(5) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `term_id` int(11) NOT NULL,
  `sms_id` int(11) NOT NULL,
  `pack_id` varchar(255) NOT NULL,
  `setup_address` text,
  `setup_slogan` text,
  `setup_senderid` varchar(100) DEFAULT NULL,
  `setup_smsusername` varchar(100) DEFAULT NULL,
  `setup_smspassword` varchar(100) DEFAULT NULL,
  `setup_dbusername` varchar(100) DEFAULT NULL,
  `setup_bstaff` text,
  `setup_bstudent` text,
  `setup_bday_batch` datetime DEFAULT NULL,
  `setup_sms_batchfile` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `paymentmode`
--
ALTER TABLE `paymentmode`
  ADD PRIMARY KEY (`paymentmode_id`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`period_id`);

--
-- Indexes for table `schoolfees`
--
ALTER TABLE `schoolfees`
  ADD PRIMARY KEY (`schoolfees_id`);

--
-- Indexes for table `schoolfeespayment`
--
ALTER TABLE `schoolfeespayment`
  ADD PRIMARY KEY (`schoolfeespayment_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staffbank`
--
ALTER TABLE `staffbank`
  ADD PRIMARY KEY (`staffbank_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paymentmode`
--
ALTER TABLE `paymentmode`
  MODIFY `paymentmode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `period_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schoolfees`
--
ALTER TABLE `schoolfees`
  MODIFY `schoolfees_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `schoolfeespayment`
--
ALTER TABLE `schoolfeespayment`
  MODIFY `schoolfeespayment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1954;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=810;
--
-- AUTO_INCREMENT for table `staffbank`
--
ALTER TABLE `staffbank`
  MODIFY `staffbank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2718;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
