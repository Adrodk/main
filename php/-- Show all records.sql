-- Show all records
SELECT * FROM `users`;

-- Show all records in FL
SELECT * FROM `users` WHERE state = "FL";

-- Show just the first and last names of the records in FL
SELECT fname, lname FROM `users` WHERE state = "FL";

-- Show all records NOT in FL
SELECT fname, lname FROM `users`  WHERE NOT state = "FL";


-- Show all records in FL that have no cars
SELECT * FROM `users`  WHERE state = "FL" AND cars = "0";

-- Show all records in FL and display them alphabetically by last name (hint: ORDER BY...)
SELECT * FROM `users` ORDER BY `lname`;

-- Show just the records where the state is NULL
SELECT * FROM `users` WHERE state IS NULL;

-- Show the most recent 3 people who have opted in (hint: ORDER BY... LIMIT...)
SELECT * FROM `users` ORDER BY optin DESC LIMIT 3;

-- Change Betty Doe’s email address from betty@test.test to bdoe@test.test. You can write this statement two different ways:
-- - accessing the record by ID
-- - accessing the record by email address
UPDATE users SET email = "bdoe@test.test" WHERE email = "betty@test.test";

-- Change Sue Jones from FL to NY
UPDATE users SET state = "NY" WHERE id = "2";

-- Add a new record for Bill Williams, bwilliams@test.test, NJ, 5 cars, opted in June 23, 2013` -- HAD TO INSERT ID NUMBER TO MAKE IT WORK ERROR #1136
INSERT INTO users VALUES ("8", "Bill", "Williams", "bwilliams@test.test", "NJ", "5", "2013-06-23", "1"); 






