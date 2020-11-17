SELECT *
FROM users
WHERE id NOT IN (
    SELECT user_id
    FROM shifts
    WHERE date = "2015-07-01"
)