SELECT
    c.category_name,
    SUM(p.price * oi.quantity) AS total_revenue
FROM
    Categories c
JOIN
    Products p ON c.category_id = p.category_id
JOIN
    Order_Items oi ON p.product_id = oi.product_id
GROUP BY
    c.category_name
ORDER BY
    total_revenue DESC;
