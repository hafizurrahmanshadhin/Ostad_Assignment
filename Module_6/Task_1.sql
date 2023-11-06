SELECT
    c.customer_id,
    c.name AS customer_name,
    c.email,
    c.location,
    COUNT(o.order_id) AS total_orders_placed
FROM
    Customers c
LEFT JOIN
    Orders o ON c.customer_id = o.customer_id
GROUP BY
    c.customer_id,
    customer_name,
    c.email,
    c.location
ORDER BY
    total_orders_placed DESC;
