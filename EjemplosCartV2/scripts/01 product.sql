<?php

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `model` varchar(64) NOT NULL,
  `sku` varchar(64) NOT NULL,
  `quantity` int(4) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `date_available` date NOT NULL DEFAULT '0000-00-00',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` varchar(12) NOT NULL,
  `date_modified` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
?>
