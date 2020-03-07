INSERT INTO `teams` (`id`, `name`, `logo_url`, `club_state`, `created_at`, `updated_at`) VALUES
(1, 'Team A', 'https://img3.stockfresh.com/files/g/ggs/m/97/6679172_stock-vector-a-letter-logo-template.jpg', 'Uttar Pradesh', '2020-03-06 11:47:19', NULL),
(2, 'Team B', 'https://cdn.shopify.com/s/files/1/1605/0385/t/2/assets/logo.png?v=8578013749749515367', 'New-Delhi', '2020-03-06 11:47:19', NULL),
(3, 'Team C', 'https://images-na.ssl-images-amazon.com/images/I/81PnPoVSpjL._AC_UL600_SR480,600_.jpg', 'Bhopal', '2020-03-06 11:47:19', NULL);

INSERT INTO `players` (`id`, `first_name`, `last_name`, `image_url`, `jersey_number`, `country`, `created_at`, `updated_at`) VALUES
(1, 'M S', 'Dhoni', 'https://www.cricket.com.au/-/media/Players/Men/International/India/ODIWC19/MS-Dhoni-CWC19.ashx', 1, 'India', '2020-03-07 10:47:19', NULL),
(2, 'Virat', 'Kohli', 'https://www.cricket.com.au/-/media/Players/Men/International/India/ODIWC19/Virat-Kohli-CWC19.ashx', 2, 'India', '2020-03-07 10:47:19', NULL),
(3, 'David', 'Warner', 'https://statics.sportskeeda.com/editor/2018/03/a755a-1520334315-800.jpg', 3, 'Australia', '2020-03-07 10:47:19', NULL),
(4, 'Glenn', 'Maxwell', 'https://www.cricket.com.au/-/media/Players/Men/International/Australia/Glenn-Maxwell-CWC19.ashx', 4, 'Australia', '2020-03-07 10:47:19', NULL);

INSERT INTO `player_histories` (`id`, `player_id`, `matches`, `run`, `high_scores`, `fifties`, `hundreds`, `age`, `created_at`, `updated_at`) VALUES
(1, 1, 350, 10773, 183, 73, 10, 38, '2020-03-07 10:50:19', NULL),
(2, 2, 247, 11858, 183, 58, 43, 31, '2020-03-07 10:50:19', NULL),
(3, 3, 121, 5196, 179, 20, 18, 33, '2020-03-07 10:50:19', NULL),
(4, 4, 110, 2877, 102, 19, 1, 31, '2020-03-07 10:50:19', NULL);

INSERT INTO `points` (`id`, `team_id`, `points`, `created_at`, `updated_at`) VALUES
(1, 1, 10.00, '2020-03-07 11:10:19', NULL),
(2, 2, 10.00, '2020-03-07 11:10:19', NULL),
(3, 3, 20.00, '2020-03-07 11:10:19', NULL);

INSERT INTO `player_teams` (`id`, `team_id`, `player_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4);

INSERT INTO `matches` (`id`, `team_first`, `team_second`, `winner_team`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, NULL, NULL),
(2, 1, 3, 3, NULL, NULL),
(3, 2, 3, 2, NULL, NULL),
(4, 3, 1, 3, NULL, NULL);



INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'PlkIE1ehMh221B07L2CfY67vaBstbk6UjFnmMYas', 'http://localhost', 1, 0, 0, '2020-03-05 07:24:03', '2020-03-05 07:24:03'),
(2, NULL, 'Laravel Password Grant Client', 'HOLlY4EMY56TKYJsmfm42jlG46kO4a7onJwM08Dg', 'http://localhost', 0, 1, 0, '2020-03-05 07:24:04', '2020-03-05 07:24:04');

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-03-05 07:24:04', '2020-03-05 07:24:04');