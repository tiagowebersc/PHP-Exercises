select * from movies;
select * from directors;

insert into directors (first_name, last_name, date_of_birth, country) values (
		('David', 'Fincher', '1962-08-28', 'United States'),
		('George', 'Lucas ', '1944-05-14', 'United States'),
		('Dan', 'Gilroy', '1959-06-24', 'United States'),
		('Peter', 'Jackson', '1961-10-31', 'New Zealand'));
update movies set directorID = 1 where movie_id = 1;
update movies set directorID = 2 where movie_id = 2;
update movies set directorID = 3 where movie_id = 3;
update movies set directorID = 4 where movie_id = 4;
-- Part 2 ------------------------------------------
select first_name, date_of_birth from directors;
select first_name, date_of_birth, TIMESTAMPDIFF(YEAR, date_of_birth, now()) AS 'age' 
from directors where TIMESTAMPDIFF(YEAR, date_of_birth, now()) < 50;
select first_name, date_of_birth from directors where country = 'United States';
-- Part 3 ------------------------------------------
select * from movies order by views limit 1;
select * from movies order by views desc limit 1;
select * from movies order by views desc limit 3;
-- Part 4 ------------------------------------------
select m.title, m.releaseYear, concat(d.first_name,' ',d.last_name) as 'director' from movies m inner join directors d on m.directorID = d.director_id;
select m.*, concat(d.first_name,' ',d.last_name) as 'director' from movies m inner join directors d on m.directorID = d.director_id;
select m.title, concat(d.first_name,' ',d.last_name) as 'director' from movies m inner join directors d on m.directorID = d.director_id order by m.title;
select m.title, concat(d.first_name,' ',d.last_name) as 'director' from movies m inner join directors d on m.directorID = d.director_id order by concat(d.first_name,' ',d.last_name);
-- Part 5 ------------------------------------------
select m.title from movies m inner join directors d on m.directorID = d.director_id where concat(d.first_name,' ',d.last_name) = 'George Lucas';
select m.title from movies m inner join directors d on m.directorID = d.director_id where concat(d.first_name,' ',d.last_name) != 'George Lucas';
select m.title, concat(d.first_name,' ',d.last_name) as 'director' from movies m inner join directors d on m.directorID = d.director_id where lower(concat(d.first_name,' ',d.last_name)) like '%s%';
-- Part 6 ------------------------------------------
select m.title, m.releaseYear, concat(d.first_name,' ',d.last_name) as 'director', d.date_of_birth from movies m inner join directors d on m.directorID = d.director_id order by d.date_of_birth;
select concat(d.first_name,' ',d.last_name) as 'director', count(m.title) as 'number of movies' from movies m inner join directors d on m.directorID = d.director_id group by concat(d.first_name,' ',d.last_name);
-- Part 7 ------------------------------------------
select sum(m.views) as 'sum of the views' from movies m inner join directors d on m.directorID = d.director_id where concat(d.first_name,' ',d.last_name) = 'George Lucas';
select concat(d.first_name,' ',d.last_name) as 'director', sum(m.views) as 'sum of the views' from movies m inner join directors d on m.directorID = d.director_id group by concat(d.first_name,' ',d.last_name);
select concat(d.first_name,' ',d.last_name) as 'director', avg(m.views) as 'sum of the views' from movies m inner join directors d on m.directorID = d.director_id group by concat(d.first_name,' ',d.last_name);
select d.country, sum(m.views) as 'sum of the views' from movies m inner join directors d on m.directorID = d.director_id group by d.country;
-- Part 8 ------------------------------------------
select concat(d.first_name,' ',d.last_name) as 'director', sum(m.views) as 'sum of the views' from movies m inner join directors d on m.directorID = d.director_id group by concat(d.first_name,' ',d.last_name) order by sum(m.views) desc LIMIT 1;
select distinct d.country from movies m inner join directors d on m.directorID = d.director_id group by concat(d.first_name,' ',d.last_name) having sum(m.views) > 2000;
-- Part 9 ------------------------------------------
select m.title from movies m inner join directors d on m.directorID = d.director_id where concat(d.first_name,' ',d.last_name) = 'George Lucas' and m.views > 20;


select m.title, m.releaseYear, views, concat(d.first_name,' ',d.last_name) as 'director', d.country from movies m inner join directors d on m.directorID = d.director_id where m.movie_id = '1';