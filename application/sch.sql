-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 06:50 PM
-- Server version: 5.0.27-community-nt
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sch`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_arm`
--

CREATE TABLE IF NOT EXISTS `academic_arm` (
  `arm_id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `class_teacher` varchar(255) NOT NULL,
  `create_id` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`arm_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

-- --------------------------------------------------------

--
-- Table structure for table `academic_assessment`
--

CREATE TABLE IF NOT EXISTS `academic_assessment` (
  `assessment_id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `min_score` int(11) NOT NULL,
  `max_score` int(11) NOT NULL,
  `percent` int(11) NOT NULL,
  `arm_id` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `create_id` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`assessment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `academic_class`
--

CREATE TABLE IF NOT EXISTS `academic_class` (
  `class_id` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `create_id` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `academic_grading`
--

CREATE TABLE IF NOT EXISTS `academic_grading` (
  `grading_id` int(11) NOT NULL auto_increment,
  `grade` varchar(50) NOT NULL,
  `max` varchar(50) NOT NULL,
  `min` varchar(50) NOT NULL,
  `assessment_id` varchar(50) NOT NULL,
  `create_id` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`grading_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `academic_session`
--

CREATE TABLE IF NOT EXISTS `academic_session` (
  `ses_id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `start_date` varchar(25) NOT NULL,
  `end_date` varchar(25) NOT NULL,
  `def` tinyint(1) NOT NULL,
  `create_id` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`ses_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20162018 ;

-- --------------------------------------------------------

--
-- Table structure for table `academic_subject`
--

CREATE TABLE IF NOT EXISTS `academic_subject` (
  `subject_id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `create_id` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `academic_subject_association`
--

CREATE TABLE IF NOT EXISTS `academic_subject_association` (
  `subject_association_id` int(11) NOT NULL auto_increment,
  `subject_id` int(11) NOT NULL,
  `arm_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `compulsory` tinyint(1) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `create_id` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`subject_association_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `academic_term`
--

CREATE TABLE IF NOT EXISTS `academic_term` (
  `id` int(11) NOT NULL auto_increment,
  `ses_id` varchar(25) character set latin1 collate latin1_general_ci NOT NULL,
  `ses_name` varchar(255) character set latin1 collate latin1_general_ci NOT NULL,
  `term` varchar(25) character set latin1 collate latin1_general_ci NOT NULL,
  `def` tinyint(1) NOT NULL,
  `create_id` varchar(255) character set latin1 collate latin1_general_ci NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `add_expenses`
--

CREATE TABLE IF NOT EXISTS `add_expenses` (
  `add_expenses_id` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  PRIMARY KEY  (`add_expenses_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1384 ;

-- --------------------------------------------------------

--
-- Table structure for table `add_income`
--

CREATE TABLE IF NOT EXISTS `add_income` (
  `add_income_id` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  PRIMARY KEY  (`add_income_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `bank_id` int(11) NOT NULL auto_increment,
  `bank_name` varchar(50) NOT NULL,
  `bank_account` varchar(50) NOT NULL,
  PRIMARY KEY  (`bank_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Table structure for table `bank_schedule`
--

CREATE TABLE IF NOT EXISTS `bank_schedule` (
  `bank_schedule_id` int(11) NOT NULL auto_increment,
  `employee_id` int(11) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `account_no` varchar(50) NOT NULL,
  `sort_code` varchar(50) NOT NULL,
  `bank_id` int(11) NOT NULL,
  PRIMARY KEY  (`bank_schedule_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=216 ;

-- --------------------------------------------------------

--
-- Table structure for table `benefit_deduction`
--

CREATE TABLE IF NOT EXISTS `benefit_deduction` (
  `benefit_deduction_id` int(11) NOT NULL auto_increment,
  `benefit` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `payroll_schedule_id` int(20) NOT NULL,
  PRIMARY KEY  (`benefit_deduction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `create_assessment`
--

CREATE TABLE IF NOT EXISTS `create_assessment` (
  `create_assessment_id` int(11) NOT NULL auto_increment,
  `student_id` int(11) NOT NULL,
  `arm_id` int(11) NOT NULL,
  `assessment_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `create_id` varchar(55) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`create_assessment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Table structure for table `daily_attendance`
--

CREATE TABLE IF NOT EXISTS `daily_attendance` (
  `daily_attendance_id` int(11) NOT NULL auto_increment,
  `class_id` int(11) NOT NULL,
  `arm_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `availability` int(1) NOT NULL,
  `reason` text NOT NULL,
  `create_id` varchar(55) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`daily_attendance_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL auto_increment,
  `Title` varchar(255) NOT NULL,
  `emp_join_date` date NOT NULL,
  `emp_first_name` varchar(30) NOT NULL,
  `emp_mid_name` varchar(30) NOT NULL,
  `emp_last_name` varchar(30) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_gender` varchar(6) NOT NULL,
  `emp_category` varchar(13) NOT NULL,
  `hardware_id` int(25) NOT NULL,
  `emp_job_title` varchar(30) NOT NULL,
  `emp_department` int(25) NOT NULL,
  `emp_qualification` varchar(30) NOT NULL,
  `emp_status` varchar(8) NOT NULL,
  `emp_address1` text NOT NULL,
  `emp_address2` text NOT NULL,
  `emp_city` varchar(15) NOT NULL,
  `emp_state` varchar(15) NOT NULL,
  `emp_pin` int(4) NOT NULL,
  `emp_country` varchar(20) NOT NULL,
  `emp_phone` varchar(50) NOT NULL,
  `emp_mobile` varchar(50) NOT NULL,
  `emp_email` varchar(12) NOT NULL,
  `emp_user_name` varchar(30) NOT NULL,
  `emp_pwd` varchar(30) NOT NULL,
  PRIMARY KEY  (`employee_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=222 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_department`
--

CREATE TABLE IF NOT EXISTS `employee_department` (
  `employee_department_id` int(11) NOT NULL auto_increment,
  `department` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `employee_section_id` int(11) NOT NULL,
  PRIMARY KEY  (`employee_department_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_job_title`
--

CREATE TABLE IF NOT EXISTS `employee_job_title` (
  `job_title_id` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  PRIMARY KEY  (`job_title_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE IF NOT EXISTS `employee_leave` (
  `leave_id` int(11) NOT NULL auto_increment,
  `employee_id` int(11) NOT NULL,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY  (`leave_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_section`
--

CREATE TABLE IF NOT EXISTS `employee_section` (
  `employee_section_id` int(11) NOT NULL auto_increment,
  `section_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`employee_section_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_timing`
--

CREATE TABLE IF NOT EXISTS `employee_timing` (
  `id` int(11) NOT NULL auto_increment,
  `emp_department` varchar(120) collate latin1_general_ci NOT NULL,
  `resume` varchar(120) collate latin1_general_ci NOT NULL,
  `close` varchar(120) collate latin1_general_ci NOT NULL,
  `grace_period` varchar(120) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `guardian_info`
--

CREATE TABLE IF NOT EXISTS `guardian_info` (
  `guardian_id` int(11) NOT NULL auto_increment,
  `first_name` varchar(100) NOT NULL,
  `mid_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_ob` varchar(20) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `education` varchar(100) NOT NULL,
  `occupation` varchar(500) NOT NULL,
  `income` varchar(50) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `address2` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `off_phone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`guardian_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs_hr_attendance`
--

CREATE TABLE IF NOT EXISTS `hs_hr_attendance` (
  `attendance_id` int(11) NOT NULL auto_increment,
  `employee_id` int(11) NOT NULL,
  `punchin_time` datetime default NULL,
  `punchout_time` datetime default NULL,
  `in_note` varchar(250) default NULL,
  `out_note` varchar(250) default NULL,
  `timestamp_diff` int(11) NOT NULL,
  `status` enum('0','1') default NULL,
  PRIMARY KEY  (`attendance_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10743 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs_hr_benefit_deduction`
--

CREATE TABLE IF NOT EXISTS `hs_hr_benefit_deduction` (
  `id` int(255) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `type` varchar(5) NOT NULL,
  `mode` int(3) NOT NULL default '1',
  `period` varchar(10) default NULL,
  `gross` int(5) default NULL,
  `active` varchar(5) default NULL,
  `company` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs_hr_timeattendance_log`
--

CREATE TABLE IF NOT EXISTS `hs_hr_timeattendance_log` (
  `id` int(11) NOT NULL auto_increment,
  `hardware_user_id` varchar(100) default NULL,
  `time_log` datetime default NULL,
  `location_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23851 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs_pr_ben_ded_details`
--

CREATE TABLE IF NOT EXISTS `hs_pr_ben_ded_details` (
  `id` int(25) NOT NULL auto_increment,
  `ben_id` int(25) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `emp_id` int(255) NOT NULL,
  `payperiod` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14702 ;

-- --------------------------------------------------------

--
-- Table structure for table `hs_pr_ben_ded_template`
--

CREATE TABLE IF NOT EXISTS `hs_pr_ben_ded_template` (
  `id` int(25) NOT NULL auto_increment,
  `ben_id` int(25) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `emp_id` int(255) NOT NULL,
  `payperiod` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=916 ;

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE IF NOT EXISTS `leave_type` (
  `type_id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `loan_advance`
--

CREATE TABLE IF NOT EXISTS `loan_advance` (
  `loan_advance_id` int(11) NOT NULL auto_increment,
  `payroll_schedule_id` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  PRIMARY KEY  (`loan_advance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_attendance`
--

CREATE TABLE IF NOT EXISTS `payroll_attendance` (
  `attendance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `punchin_time` datetime default NULL,
  `punchout_time` datetime default NULL,
  `in_note` varchar(250) default NULL,
  `out_note` varchar(250) default NULL,
  `timestamp_diff` int(11) NOT NULL,
  `status` enum('0','1') default NULL,
  PRIMARY KEY  (`attendance_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_schedule`
--

CREATE TABLE IF NOT EXISTS `payroll_schedule` (
  `payroll_schedule_id` int(11) NOT NULL auto_increment,
  `month` varchar(20) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  PRIMARY KEY  (`payroll_schedule_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `qualification_id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY  (`qualification_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `smsmessage`
--

CREATE TABLE IF NOT EXISTS `smsmessage` (
  `id` int(255) NOT NULL auto_increment,
  `message` text collate latin1_general_ci,
  `sender` varchar(255) collate latin1_general_ci default NULL,
  `phone` varchar(255) collate latin1_general_ci default NULL,
  `group` varchar(255) collate latin1_general_ci default NULL,
  `type` int(255) NOT NULL,
  `status` varchar(1000) collate latin1_general_ci default NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_bill_item`
--

CREATE TABLE IF NOT EXISTS `student_bill_item` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) collate latin1_general_ci NOT NULL,
  `amount` varchar(25) collate latin1_general_ci NOT NULL,
  `class` int(11) NOT NULL,
  `term` tinyint(11) NOT NULL,
  `compulsory` tinyint(1) NOT NULL,
  `boarder` tinyint(1) NOT NULL,
  `new` tinyint(1) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `sot` int(11) NOT NULL default '1',
  `create_id` varchar(25) collate latin1_general_ci NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=745 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_bill_period`
--

CREATE TABLE IF NOT EXISTS `student_bill_period` (
  `id` int(11) NOT NULL auto_increment,
  `period_name` varchar(255) NOT NULL,
  `session_id` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `start_date` varchar(25) NOT NULL,
  `end_date` varchar(25) NOT NULL,
  `updated` tinyint(1) NOT NULL,
  `create_id` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_bill_record`
--

CREATE TABLE IF NOT EXISTS `student_bill_record` (
  `id` int(11) NOT NULL auto_increment,
  `studentId` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `academic_year` varchar(255) collate latin1_general_ci NOT NULL,
  `term` tinyint(4) NOT NULL,
  `create_id` varchar(25) collate latin1_general_ci NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=15511 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_bill_record_details`
--

CREATE TABLE IF NOT EXISTS `student_bill_record_details` (
  `id` int(11) NOT NULL auto_increment,
  `bill_nr` int(11) NOT NULL,
  `item` varchar(500) collate latin1_general_ci NOT NULL,
  `amount` varchar(25) collate latin1_general_ci NOT NULL,
  `active` varchar(25) collate latin1_general_ci NOT NULL default '1',
  `sot` tinyint(1) NOT NULL default '1',
  `g` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=194901 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_discount`
--

CREATE TABLE IF NOT EXISTS `student_discount` (
  `id` int(11) NOT NULL auto_increment,
  `studentId` int(11) NOT NULL,
  `discount_amt` varchar(25) collate latin1_general_ci NOT NULL,
  `discount` varchar(25) collate latin1_general_ci NOT NULL,
  `item_id` int(11) NOT NULL,
  `term` varchar(25) collate latin1_general_ci NOT NULL,
  `session` varchar(25) collate latin1_general_ci NOT NULL,
  `bill_nr` int(11) NOT NULL,
  `notes` text collate latin1_general_ci NOT NULL,
  `create_id` varchar(225) collate latin1_general_ci NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5382 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `student_id` int(11) NOT NULL auto_increment,
  `photo` varchar(50) NOT NULL,
  `registerno` varchar(11) NOT NULL,
  `adm_date` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `midd_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_ob` varchar(10) NOT NULL,
  `guardian_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `arm_id` int(11) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `bloodgp` varchar(10) NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `mother_tongue` varchar(50) NOT NULL,
  `boarder` tinyint(1) NOT NULL,
  `category` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `left_school` tinyint(1) NOT NULL,
  `left_notes` varchar(255) NOT NULL,
  PRIMARY KEY  (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2335 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_payment`
--

CREATE TABLE IF NOT EXISTS `student_payment` (
  `id` int(11) NOT NULL auto_increment,
  `studentId` int(11) NOT NULL,
  `bill_nr` int(11) NOT NULL,
  `amount` varchar(255) collate latin1_general_ci NOT NULL,
  `payment_date` date NOT NULL,
  `method` varchar(25) collate latin1_general_ci NOT NULL,
  `bank` int(11) NOT NULL,
  `teller_id` varchar(25) collate latin1_general_ci NOT NULL,
  `notes` text collate latin1_general_ci NOT NULL,
  `create_id` varchar(25) collate latin1_general_ci NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12681 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_scholarship`
--

CREATE TABLE IF NOT EXISTS `student_scholarship` (
  `id` int(11) NOT NULL auto_increment,
  `studentId` int(11) NOT NULL,
  `scholarship_amt` varchar(50) collate latin1_general_ci NOT NULL,
  `scholarship` varchar(25) collate latin1_general_ci NOT NULL,
  `item_id` int(11) NOT NULL,
  `term` varchar(25) collate latin1_general_ci NOT NULL,
  `session` varchar(25) collate latin1_general_ci NOT NULL,
  `bill_nr` int(11) NOT NULL,
  `notes` text collate latin1_general_ci NOT NULL,
  `create_id` varchar(225) collate latin1_general_ci NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1145 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_subject_association`
--

CREATE TABLE IF NOT EXISTS `student_subject_association` (
  `id` int(11) NOT NULL auto_increment,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `arm_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `create_id` varchar(55) NOT NULL,
  `create_time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_category`
--

CREATE TABLE IF NOT EXISTS `transaction_category` (
  `transaction_category_id` int(11) NOT NULL auto_increment,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY  (`transaction_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) collate latin1_general_ci NOT NULL default '',
  `password` varchar(150) collate latin1_general_ci NOT NULL default '',
  `password_hint` varchar(255) collate latin1_general_ci NOT NULL default '',
  `lastname` varchar(50) collate latin1_general_ci NOT NULL default '',
  `firstname` varchar(50) collate latin1_general_ci NOT NULL default '',
  `email` varchar(100) collate latin1_general_ci NOT NULL default '',
  `phone` varchar(50) collate latin1_general_ci NOT NULL default '',
  `address1` varchar(100) collate latin1_general_ci NOT NULL default '',
  `address2` varchar(100) collate latin1_general_ci NOT NULL default '',
  `city` varchar(80) collate latin1_general_ci NOT NULL default '',
  `state` varchar(20) collate latin1_general_ci NOT NULL default '',
  `zip` varchar(20) collate latin1_general_ci NOT NULL default '',
  `country` varchar(50) collate latin1_general_ci NOT NULL default '',
  `url` varchar(125) collate latin1_general_ci NOT NULL default '',
  `permissions` varchar(20) collate latin1_general_ci NOT NULL default '1',
  `notes` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE IF NOT EXISTS `work_experience` (
  `work_experience_id` int(11) NOT NULL auto_increment,
  `employer` varchar(50) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `internal` varchar(50) NOT NULL,
  `comment` varchar(200) NOT NULL,
  PRIMARY KEY  (`work_experience_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
