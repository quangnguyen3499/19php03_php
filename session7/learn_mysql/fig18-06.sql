SELECT orderID, orderDate, shipDate
FROM orders

SELECT orderID, orderDate, shipDate
FROM orders 
WHERE shipDate IS NULL --tai shipDate co gtri null

SELECT orderID, orderDate, shipDate
FROM orders 
WHERE shipDate IS NOT NULL --tai shipDate co gtri khac null