<?php
CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `salt` varchar(9) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `date_added` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
 
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);
 
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
 
?>