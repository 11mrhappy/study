SELECT
    CONCAT(last_name, first_name) "名前",
    COUNT(*) "コマ数"
FROM shifts s
JOIN users u ON s.user_id = u.id
WHERE date = "2015-07-01"
GROUP BY user_id