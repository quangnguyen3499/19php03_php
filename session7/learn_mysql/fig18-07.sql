SELECT productName FROM products
WHERE productName LIKE 'Fender%' --bat dau voi 'Fender...'

SELECT productName FROM products
WHERE productName LIKE '%cast%' --co chuoi 'cast' tai vi tri giua bat ki

SELECT zipCode FROM addresses
WHERE zipCode LIKE '076__' --bat dau voi '076' va co dung 5 ki tu

SELECT orderDate FROM orders
WHERE orderDate LIKE '2010-06-__%' --bat dau voi '2010-06-' va co it nhat 10 ki tu
