# Vroom

## To run the project
```
git clone https://github.com/jessLijie/Vroom.git
git pull
php artisan migrate
```

## SQL Insert Satement 

> Users
```
INSERT INTO capbayvroom.users (username, role, email, password) VALUES

('Admin', 'admin', 'admin@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 1', 'customer', 'user1@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 2', 'customer', 'user2@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 3', 'customer', 'user3@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 4', 'customer', 'user4@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 5', 'customer', 'user5@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 6', 'customer', 'user6@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 7', 'customer', 'user7@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 8', 'customer', 'user8@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 9', 'customer', 'user9@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 10', 'customer', 'user10@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 11', 'customer', 'user11@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 12', 'customer', 'user12@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 13', 'customer', 'user13@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 14', 'customer', 'user14@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 15', 'customer', 'user15@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 16', 'customer', 'user16@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 17', 'customer', 'user17@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 18', 'customer', 'user18@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 19', 'customer', 'user19@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'),

('User 20', 'customer', 'user20@gmail.com', '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW');
```

> Customers
```
INSERT INTO capbayvroom.customers (name, mobile, userid, status, eligibility) VALUES

('Customer A', '0123456789', 2, 'pending', 'ineligible'),

('Customer B', '0153468954', 3, 'rejected', 'ineligible'),

('Customer M', '0124586542', 4, 'pending', 'ineligible'),

('Customer D', '0123875487', 5, 'pending', 'ineligible'),

('Customer F', '0123427759', 7, 'pending', 'ineligible'),

('Customer G', '01143456789', 8, 'pending', 'ineligible'),

('Customer H', '0158375777', 9, 'pending', 'ineligible'),

('Customer I', '0173456789', 10, 'pending', 'ineligible'),

('Customer J', '0173456789', 11, 'pending', 'ineligible'),

('Customer K', '0163456789', 12, 'pending', 'ineligible'),

('Customer C', '0163456789', 14, 'pending', 'ineligible'),

('Customer O', '0163456789', 16, 'pending', 'ineligible'),

('Customer Q', '0183457579', 18, 'rejected', 'ineligible'),

('Customer R', '0143456749', 19, 'pending', 'ineligible'),

('Customer S', '0143456780', 20, 'pending', 'ineligible');
```
```
UPDATE capbayrooom.customers SET status = 'approved', downpayment = 20 where userid = 2

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 10 where userid = 4

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 15 where userid = 5

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 10 where userid = 7

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 10 where userid = 8

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 20 where userid = 9

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 20 where userid = 10

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 20 where userid = 11

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 20 where userid = 12

UPDATE capbayrooom.customers SET status = 'rejected' where userid = 14

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 20 where userid = 19

UPDATE capbayrooom.customers SET status = 'approved', downpayment = 20 where userid = 20
```


