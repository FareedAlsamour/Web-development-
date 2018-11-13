SELECT 
    customer.customer_id,
    CONCAT(customer.first_name,
            ' ',
            customer.last_name) AS 'full name',
    customer.email,
    address.address
FROM
    customer
        JOIN
    store ON customer.store_id = store.store_id
        JOIN
    address ON customer.address_id = address.address_id
WHERE
    customer.store_id = 1
        && address.city_id IN (1 , 42, 312, 459)
