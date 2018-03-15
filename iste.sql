--
-- Table structure for table `qstns`
--

DROP DATABASE IF EXISTS iste;
CREATE DATABASE IF NOT EXISTS iste;
USE iste;

CREATE TABLE `qstns` (
  `qname` text NOT NULL,
  `c_a` text NOT NULL,
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qstns`
--

INSERT INTO `qstns` (`qname`, `c_a`, `qid`) VALUES
('What is (void*)0?', 'opta', 0),
('In which header file is the NULL macro defined?', 'optc', 1),
(' If a variable is a pointer to the structure, then hich of the folloing operator is used to access data members of the structure through the pointer variable ?', 'optc', 2),
('The keyword used to transfer control from a function back to the calling function is', 'optd', 3),
('Which of the following cannot be checked in a switch-case statement?', 'optc', 4),
('Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?', 'optc', 5),
('Which of the following special symbol allowed in a variable name?', 'optd', 6),
('What will happen if in a C program you assign a value to an array element whose subscript exceeds the size of array?', 'optc', 7),
('In C, if you pass an array as an argument to a function, what actually gets passed?', 'optc', 8),
('9.jpg', 'Vvvv', 9),
('21.jpg', '2222', 21),
('55.jpg', 'ahah', 55),
('212212.jpg', '2121', 12121);

-- --------------------------------------------------------

--
-- Table structure for table `qstns_users`
--

CREATE TABLE `qstns_users` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `qstns_id` int(11) NOT NULL DEFAULT '0',
  `submission` int(11) NOT NULL DEFAULT '0',
  `submit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `question_id` int(11) NOT NULL DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `college` int(11) DEFAULT NULL,
  `fbid` bigint(22) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `qstns`
--
ALTER TABLE `qstns`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `qstns_users`
--
ALTER TABLE `qstns_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `qstns_id` (`qstns_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qstns_users`
--
ALTER TABLE `qstns_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `qstns_users`
--
ALTER TABLE `qstns_users`
  ADD CONSTRAINT `qstns_id` FOREIGN KEY (`qstns_id`) REFERENCES `qstns` (`qid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

