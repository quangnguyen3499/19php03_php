SELECT productName, listPrice, discountPercent
FROM products
WHERE listPrice < 500
ORDER BY productName

SELECT productName, listPrice, discountPercent
FROM products
WHERE listPrice < 500
ORDER BY listPrice DESC --sap xep giam dan

SELECT productName, listPrice, discountPercent
FROM products
ORDER BY discountPercent, listPrice DESC --sap xep giam dan cho gia tri sau (listPrice), thu tu uu tien cho gia tri dung truoc