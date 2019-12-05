--exercise 1
SELECT categoryID, productName, listPrice
FROM products
WHERE categoryID = 1 AND listPrice > 500

--exercise 2
SELECT listPrice, dateAdded, productName
FROM products
WHERE listPrice > 300 AND dateAdded LIKE '2014-07-__%'
ORDER BY listPrice DESC;

--exercise 3
SELECT * FROM `products` 
INNER JOIN categories
ON categories.categoryID = products.categoryID
WHERE  productName LIKE '%o%' AND categoryName = 'Basses'
ORDER BY productName DESC

--exercise 4
SELECT * 
FROM products
INNER JOIN orderitems
ON products.productID = orderitems.productID
INNER JOIN orders 
ON orders.orderID = orderitems.orderID
INNER JOIN customers
ON customers.customerID = orders.customerID
WHERE emailAddress LIKE '%@gmail.com'

--exercise 5
SELECT productName, listPrice, dateAdded, discountPercent
FROM products
WHERE listPrice > 300 AND dateAdded LIKE '2014%'
ORDER BY discountPercent DESC
LIMIT 3

--exercise 6
SELECT city
FROM products p
    INNER JOIN orderItems oi
        ON p.productID = oi.productID
    INNER JOIN orders o
        ON oi.orderID = o.orderID
    INNER JOIN addresses a
        ON o.customerID = a.customerID
    INNER JOIN customers c
ON c.customerID = a.customerID
WHERE productName = 'Yamaha FG700S'