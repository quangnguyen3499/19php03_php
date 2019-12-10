SELECT * FROM products;

--sap xep tang dan theo cot listPrice
SELECT productID, productName, listPrice
FROM products
ORDER BY listPrice;

--sap xep tang dan cac doi tuong < 450 trong cot listPrice
SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 450
ORDER BY listPrice;

SELECT productID, productName, listPrice
FROM products
WHERE listPrice < 10;


