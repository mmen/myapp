SELECT c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
FROM products  p LEFT JOIN categories c ON p.category_id = c.id
WHERE p.name LIKE "Bag" OR p.description LIKE "Bag"
ORDER BY p.name ASC
LIMIT 1, 19