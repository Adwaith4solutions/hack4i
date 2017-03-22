
-- --------------------------------------------------------

--
-- Table structure for table `dept_info`
--

CREATE TABLE `dept_info` (
  `dept_id` varchar(5) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_info`
--

INSERT INTO `dept_info` (`dept_id`, `dept_name`) VALUES
('H4i01', 'Computer Science & Engineering(CSE)'),
('H4i02', 'Electronics & Communication Engineering(EC)'),
('H4i03', 'Electrical & Electronics Engineering(EEE)'),
('H4i04', 'Civil Engineering (CE)'),
('H4i05', 'Mechanical Engineering(ME)');
