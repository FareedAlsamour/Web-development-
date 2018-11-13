SELECT 
    customer.first_name,
    customer.last_name,
    customer.email,
    customer.address_id
FROM
    customer
        JOIN
    address ON customer.address_id = address.address_id
WHERE
    address.city_id = 312
