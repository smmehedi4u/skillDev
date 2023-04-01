-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2023 at 08:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillDev`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

CREATE TABLE `inboxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inboxes`
--

INSERT INTO `inboxes` (`id`, `name`, `email`, `subject`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(4, 'john', 'john@gmail.com', 'course', 'How to start programming courses as beginners', 0, '2023-04-01 10:42:57', '2023-04-01 10:42:57'),
(5, 'Martin', 'martin@gmail.com', 'Web Development', 'Sir i learned c programming.Then how to start for web development journey.', 0, '2023-04-01 10:44:45', '2023-04-01 10:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_02_092829_create_skill_controllers_table', 1),
(6, '2023_01_02_093018_create_skills_table', 1),
(7, '2023_01_02_093116_create_topics_table', 1),
(8, '2023_01_02_093214_create_questions_table', 1),
(9, '2023_01_02_093244_create_results_table', 1),
(10, '2023_03_26_213310_add_image_to_skills', 1),
(11, '2023_03_29_095907_create_rich_texts_table', 2),
(12, '2023_03_31_175910_create_inboxes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `topic_id`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Is C a case sensitive or insensitive language?', 1, 'case sensitive', '2023-03-29 03:31:10', '2023-03-29 03:31:10', NULL),
(4, 'What is the full form of IDE?', 4, 'integrated development environment', '2023-03-29 12:45:25', '2023-03-29 12:45:25', NULL),
(5, '/*Comment of several lines */. Is this single line or multi line comment?', 5, 'multi line comment', '2023-03-29 12:53:02', '2023-03-29 12:53:02', NULL),
(6, 'For which type of the format specifier \"%d\" is used?', 6, 'integer', '2023-03-29 12:57:25', '2023-03-29 12:57:25', NULL),
(7, 'What is the value of a = 5++ after increment?', 7, '6', '2023-03-29 13:24:23', '2023-03-29 13:24:23', NULL),
(8, 'What is show in terminal : if(a>b); print(\'a\');else print(\'b\');', 8, 'a', '2023-03-29 14:00:22', '2023-03-29 14:00:22', NULL),
(9, 'What is the output in terminal : for(i=7;i<9;i++) {printf(\'%d\',i);}', 9, '8', '2023-03-29 14:09:48', '2023-03-29 14:09:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `result` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rich_texts`
--

CREATE TABLE `rich_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `record_type` varchar(255) NOT NULL,
  `record_id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) NOT NULL,
  `body` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'C programming', 'courses-6.jpg', '2023-03-29 03:24:55', '2023-03-29 03:24:55', NULL),
(2, 'Web Design and Development courses for Beginners', '20230330183608.jpg', '2023-03-30 12:36:08', '2023-03-30 12:36:08', NULL),
(3, 'Application Design and Development courses for Beginners', '20230330183724.jpg', '2023-03-30 12:37:24', '2023-03-30 12:37:24', NULL),
(4, 'Learning English', '20230330183854.jpg', '2023-03-30 12:38:54', '2023-03-30 12:38:54', NULL),
(5, 'Digital Marketing', '20230330183954.jpg', '2023-03-30 12:39:54', '2023-03-30 12:39:54', NULL),
(6, 'UI/UX Design', '20230330184108.jpg', '2023-03-30 12:41:08', '2023-03-30 12:41:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skill_controllers`
--

CREATE TABLE `skill_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `docs` text NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `docs`, `skill_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Introduction', '<div><em>C </em>is a powerful general-purpose <em>programming language</em>.It was created in the 1970s by Dennis Ritchie, and remains very widely used. The features of it,</div><div><br><br></div><div>1.Case-Sensitive: it will behave differently for an upper case and lower case letter.</div><div>2. Simple &amp; Efficient: The syntax of C language is simple and easy understand.</div><div>3. Fast: it a statically typed programming language, it is much faster.</div><div>4. Portable: C programs are machine independent which means that a single C program code can be executed in multiple systems depending on the requirement.&nbsp;</div><div>5. Extensibility: An existing C program can easily be extended by adding new features to it.</div><div>6. Function-Rich Libraries: C language has an extensive set of libraries with several build-in functions. These functions make the work of the programmer a lot easier.</div><div>7. Modullarity: C language allows to break the code into different parts using functions. Structuring the code using functions increases the visual appeal and makes the program more organized and less prone to errors.</div>', 1, '2023-03-29 03:31:10', '2023-03-29 12:46:51', NULL),
(4, 'Requirments', '<div>1. A text editor to write C code. Example, Notepad, Nodepad++, Visual Studio Code etc.&nbsp;</div><div>2.A compiler named GCC that will translate the code written in C to the machine language so that the computer can understand.&nbsp;</div><div>IDE(Integrated Development Environment) can also be used to edit and compile the code. Example, Code Blocks, Clion, Eclipse etc.</div><div><br><br></div><div>A C program file has an extension .c after its file name.</div><div>&nbsp;FileName.c</div><div>After compiling it using ‘gcc’ compiler, it will create an executable file with an extention .exe</div><div>&nbsp;FileName.exe</div><div>This file will give the desired result according to the code written in C file.</div><div>With an IDE there will not be any complexity of doing all of these work manually.&nbsp;</div>', 1, '2023-03-29 12:45:25', '2023-03-29 12:45:25', NULL),
(5, 'Comment', '<div>&nbsp;Comment Statements are optional. The contents of a comment are ignored by the compiler. So it, doesn’t effect the program or output. Instead, a comment describes or explains the operation of the program to anyone who is reading its source code.&nbsp;<br><br></div><div>Single-line comments start with two forward slashes (//). Any text starting with // and ending with the end of the line is considered as one line comment.</div><div>// Comment of one line</div><div><br></div><div>Multi-line comments start with /* and ends with */. Any text between /* and */ is considered as a multiline comment.</div><div>/<em>*</em>Comment of several lines<em> *</em>/&nbsp;</div>', 1, '2023-03-29 12:53:02', '2023-03-29 12:53:02', NULL),
(6, 'Variable', '<div>&nbsp;Variable is the name of a certain radius of memory needed to reserve the data. A variable is a named memory location. Variables are containers for storing data values, like numbers and characters.</div><div>To define a variable in C,</div><div>data_type variable_name;&nbsp;</div><div>If more than one variable of same specific type has to be created then, use a comma separated list of variable names.&nbsp;</div><div>data_type variable1, variable2;</div><div>Variable name can be any valid identifier name.</div><div><br></div><div>In C there are different types of data types that defines the kind of data.</div><div>&nbsp;int, refers to the integer values which are whole numbers without any decimals.</div><div>&nbsp;float, refers to the floating point numbers that has a decimals.</div><div>&nbsp;Double, refers to the floating point number with greater precision.</div><div>&nbsp;char, refers to the characters as alphabets or other special characters.</div><div>Any variable declared with these data types will denote that the declared variable can hold a data of that specific type only.</div><div>A variable can be printed using the print funtion by giving the variable as an argument.</div><div>&nbsp;Int a = 10;</div><div>&nbsp;printf(a);</div><div>Here, it will print the value 10.</div><div>It can also be printed using format specifiers inside the string element and specifying the variable using argument passing.</div><div>&nbsp;Int a = 10;</div><div>&nbsp;printf(“The variable is %d”,a);</div><div>Output:</div><div>&nbsp;The variable is 10</div>', 1, '2023-03-29 12:57:25', '2023-03-29 12:57:25', NULL),
(7, 'Operator', '<div>An operator is a symbol that takes one or more arguments and operates on them to produce a result. Symbol for performing certain manipulation. Variables on which the operator performs their operation on is known as operands.</div><div>Unary operators: If an operator works on only one operand.</div><div><br><br></div><ul><li>Unary plus → +(variable or expression); for indicating positive value.</li><li>Unary minus → -(variable or expression); for indicating negative value.</li><li>Increment &amp; Decrement → ++operand; --operand;</li></ul><div>++m; and m++; are the same statements independently. In expression(or assigned to a variable), A prefix operator. Prefix Operator(++m) first add 1 to the operand value and then the result is assigned to the variable of left or used in the expression. Postfix operator(m++) first assigns the value to the variable on left and then increments the operand, the next time the operand it is used shows 1 added value. Same goes for decrement.</div>', 1, '2023-03-29 13:24:23', '2023-03-29 13:24:23', NULL),
(8, 'Conditional Statement', '<div>&nbsp;<strong>Conditional Decision making and branching:</strong> In the case of decision control statements in C language, a group of available statements will get executed in case the conditions we have are true.<br><br></div><ul><li>if statements: It is basically a two way decision making statement. Here, if the conditional_expression is true then Expression1 will be executed otherwise expression2 will be executed.</li><li>simple if statement: Here the statement-block is a block of code or statements. These will be executed if the test condition inside the if statement is true. Otherwise it will not be executed. The statements after the if statement will be executed sequentially.</li></ul><div><br></div><div>if(test condition){</div><div>&nbsp;statement-block; \\\\True Block</div><div>&nbsp;}</div><div>&nbsp;statement – x;<br><br></div><ul><li>if...else statement: In case of if else statement, there are two block of code which will be executed depending upon the result of test condition.</li></ul><div>if(test condition){</div><div>&nbsp;statement-block1; \\\\True Block</div><div>&nbsp;}</div><div>&nbsp;else{</div><div>&nbsp;statement-block2; \\\\False Block</div><div>&nbsp;}</div><div>&nbsp;statement – x;</div><div><br></div><ul><li>Nesting if...else: It is possible to performing nesting of if-else statement. This means there can be multiple if-else statement inside the block of code. These will be executed level-wise sequentially.</li></ul><div><br></div><div>if(test condition){</div><div>&nbsp;if(test condition2){</div><div>&nbsp;statement-block1;&nbsp;</div><div>&nbsp;}</div><div>&nbsp;else{</div><div>&nbsp;statement-block2;&nbsp;</div><div>&nbsp;}</div><div>&nbsp;}</div><div>&nbsp;else{</div><div>&nbsp;statement-block3;</div><div>&nbsp;}</div><div>&nbsp;statement – x;<br><br></div><ul><li>else if ladder: It is used to execute a specific block of code between multiple blocks. It will be based on the test conditions. If a condition is returning true, then the corresponding statement block will be executed and the other block will be executed.&nbsp;</li></ul><div><br></div><div>if(condition1){</div><div>&nbsp;statement-block1;&nbsp;</div><div>}</div><div>&nbsp;else if(condition2){</div><div>&nbsp;statement-block2;&nbsp;</div><div>}</div><div>&nbsp;else if(condition3){</div><div>&nbsp;statement-block3;&nbsp;</div><div>}</div><div>&nbsp;… … … … … … … …&nbsp;</div><div>&nbsp;else{</div><div>&nbsp;default statement;&nbsp;</div><div>}</div><div><br></div><ul><li>Conditional Statement:</li></ul><div>Conditional_expression?expression1:expression2;</div><div><br><br></div><div>works as, if(conditional expression){</div><div>&nbsp;expression1; } \\\\True Block</div><div>else{</div><div>expression2; } \\\\False Block<br><br></div><div>So it works as an if-else statement, where if the conditional_expression is true then Expression1 will be executed otherwise expression2 will be executed.</div>', 1, '2023-03-29 14:00:22', '2023-03-29 14:00:22', NULL),
(9, 'Loop statement', '<div>&nbsp;Loop is used to execute the block of code several times according to the condition given in the loop. It means it executes the same set of code multiple times.</div><div>There are to types of looping statements,</div><div>&nbsp;<strong>Entry controlled loop:</strong> Pre-test loop. That means it will perform the block of code after checking the condition. If the condition is true by the statement then it will execute.</div><div>&nbsp;<strong>Exit controlled loop: </strong>Post-test loop. That means it will perform the block of code before checking its condition. After that it will check the condition if it is true, then it will execute the block of code again.</div><div><br></div><div>Based on other characteristics, there can be two types of looping.</div><div><br></div><div>Counter controlled loop: Knowing in advance exactly how many times the loop will be executed. The control variable works as a counter. It is a definite repetition loop.</div><div><br></div><div>Sentinel controlled loop: Sentinel value changes loop control expression from true or false the number of repetition is not known before the loop begins executing. It is an infinite repetition loop.</div><div><br></div><ul><li>while Statement: while(test-condition){</li></ul><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(pre-test) Body-block of the loop;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(Sentinal based) counter increment or decrement;</div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;}</div><ul><li>do Statement: do{</li></ul><div>&nbsp;(post-test) Body-block of the loop;</div><div>&nbsp;Counter increment or decrement;</div><div>&nbsp;}while(test-condition);</div><div><br></div><ul><li>for Statement: for(initialization;test-condition;increment or decrement of counter){</li></ul><div>&nbsp;(pre-test) Body-block of the statement;</div><div>&nbsp;(counter based) }</div><div><br><br></div><div>More than one part can be used in initialization, test-condition and increment- decrement by using comma between the parts. One or more sections can be omitted in for loop but blank section must remain in that, for( ;test-condition; ){</div><div>&nbsp;}</div><div><br><br></div><div>If there is no test condition section, the for statement sets an infinite loop. If there is nothing defined in for loop parenthesis then it will be and infinite loop. If body of the loop contains only semicolon (;) then, it works as a null statement. It produces time delay loops.</div><div>for(initialization;test-condition;increment or decrement of counter)</div><div>&nbsp;;</div>', 1, '2023-03-29 14:09:48', '2023-03-29 14:09:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `user_role` smallint(6) NOT NULL DEFAULT 0 COMMENT '0:User,1:Admin',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `user_role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 1, '$2y$10$YvXmN5PPyhrV.1tHLB3f6uwwoKNZ.xRr/r5.GD/wTJSVBappCYAMy', NULL, '2023-03-29 03:21:29', '2023-03-29 03:21:29'),
(2, 'mehedi', 'mehedi@gmail.com', NULL, 0, '$2y$10$E1wfJ6xGfZfeOSImL8SRXO2uXwJFZezF8BiGSRDEBv7QnjF8qVlAe', NULL, '2023-03-29 03:32:39', '2023-03-29 03:32:39'),
(3, 'siam', 'siam@gmail.com', NULL, 0, '$2y$10$G.nPAgiJdn4IW8N18P5lxeWvgkcbH/t6qLlUluO2zE/4vSDdS5Y5e', NULL, '2023-03-29 04:42:50', '2023-03-29 04:42:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inboxes`
--
ALTER TABLE `inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_topic_id_foreign` (`topic_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_topic_id_foreign` (`topic_id`),
  ADD KEY `results_user_id_foreign` (`user_id`);

--
-- Indexes for table `rich_texts`
--
ALTER TABLE `rich_texts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rich_texts_field_record_type_record_id_unique` (`field`,`record_type`,`record_id`),
  ADD KEY `rich_texts_record_type_record_id_index` (`record_type`,`record_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_controllers`
--
ALTER TABLE `skill_controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_skill_id_foreign` (`skill_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inboxes`
--
ALTER TABLE `inboxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rich_texts`
--
ALTER TABLE `rich_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill_controllers`
--
ALTER TABLE `skill_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
