CREATE TABLE `job_positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `no_of_vacancy` int(11) NOT NULL,
  `date_posted` datetime NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Active',
  `location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `experience_required` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qualification` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `job_positions` (
  `position_name`, 
  `description`, 
  `no_of_vacancy`, 
  `date_posted`, 
  `status`, 
  `location`, 
  `department`, 
  `experience_required`, 
  `qualification`,
  `created_by`
) VALUES
-- Sales Executive Positions at different locations
(
  'Sales Executive', 
  'Sell jewelry products to customers, maintain client relationships, and achieve sales targets.', 
  2, 
  '2024-01-10 09:00:00', 
  'Active', 
  'Paravoor', 
  'Sales', 
  '1+ years in retail sales', 
  'High school diploma required, sales certification preferred',
  1
),
(
  'Sales Executive', 
  'Sell jewelry products to customers, provide excellent customer service in our Kollam showroom.', 
  1, 
  '2024-01-12 10:00:00', 
  'Active', 
  'Kollam', 
  'Sales', 
  'Freshers welcome', 
  'Plus Two completed',
  1
),

-- Accountant Position (Head Office)
(
  'Accountant', 
  'Manage financial records, process transactions, and prepare reports for jewelry business.', 
  1, 
  '2024-01-05 11:00:00', 
  'Active', 
  'Kootikada', 
  'Finance', 
  '3+ years accounting experience', 
  'B.Com degree required',
  1
),

-- Goldsmith Positions
(
  'Goldsmith', 
  'Create and repair gold jewelry pieces with precision and artistic skill.', 
  3, 
  '2024-01-08 08:30:00', 
  'Active', 
  'Paravoor', 
  'Production', 
  '5+ years goldsmith experience', 
  'ITI/Jewelry making certification',
  1
),
(
  'Junior Goldsmith', 
  'Assist senior goldsmiths in jewelry making and repairs.', 
  2, 
  '2024-01-09 09:00:00', 
  'Active', 
  'Kollam', 
  'Production', 
  '1-2 years experience', 
  'Vocational training in jewelry',
  1
),

-- Customer Care Positions
(
  'Customer Care Representative', 
  'Handle customer inquiries, complaints, and after-sales service.', 
  2, 
  '2024-01-15 10:00:00', 
  'Active', 
  'Kootikada', 
  'Customer Service', 
  '1+ years in customer service', 
  'Any degree, good communication skills',
  1
),
(
  'Customer Care Executive', 
  'Manage premium customer relationships and special orders.', 
  1, 
  '2024-01-14 09:30:00', 
  'Active', 
  'Kollam', 
  'Customer Service', 
  '3+ years luxury retail experience', 
  'Degree in any field, multilingual preferred',
  1
);


=================================== END - 11/07/2025 ==============================



=============================== July 13 18.09 - neraj ===============
ALTER TABLE user_schemes 
ADD COLUMN code VARCHAR(20) DEFAULT NULL;


=============================== July 14 06.35 - neraj ===============

CREATE TABLE `gold_schemes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scheme_code` varchar(10) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'A, B, C, etc.',
  `scheme_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Basic, Premium, etc.',
  `monthly_installment` decimal(10,2) NOT NULL,
  `term_months` int(11) NOT NULL,
  `bonus_amount` decimal(10,2) NOT NULL,
  `final_value` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('active','inactive','archived') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `scheme_code` (`scheme_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `gold_schemes` 
(`scheme_code`, `scheme_name`, `monthly_installment`, `term_months`, `bonus_amount`, `final_value`, `description`, `status`) 
VALUES
('A', 'Basic', 500.00, 11, 600.00, 6100.00, 'Perfect for starting your gold savings', 'active'),
('B', 'Premium', 1000.00, 11, 1200.00, 12200.00, 'Best value for regular savings', 'active'),
('C', 'Elite', 2000.00, 11, 2400.00, 24400.00, 'Maximum benefits for serious investors', 'active'),
('D', 'Royal', 2500.00, 11, 3000.00, 30500.00, 'Premium plan with higher benefits', 'active'),
('E', 'Imperial', 5000.00, 11, 6000.00, 61000.00, 'For high-value gold investors', 'active'),
('F', 'Dynasty', 10000.00, 11, 12000.00, 122000.00, 'Ultimate gold investment plan', 'active');





=============================== 30 07 25 - neraj ===============


ALTER TABLE orders ADD COLUMN price DECIMAL(10,2) NOT NULL AFTER product_code;
