SELECT productID, productName
FROM products
LIMIT 3; --lay 3 san pham dau tien

SELECT productID, productName
FROM products
LIMIT 0 , 3; --lay san pham bat dau tu vi tri 0, lay 3 san pham

SELECT productID, productName
FROM products
LIMIT 1, 3; --lay san pham bat dau tu vi tri 2, lay 3 san pham
