select Author, count(Book) as result from library group by Author having count(Book) < 6


