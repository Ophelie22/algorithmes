<?php
SELECT product_id FROM Products WHERE low_fats = 'Y' AND recyclable = 'Y' ORDER BY 1 ASC
The original question is :

Write a query to get the percentage of certain products

SELECT ROUND(AVG(CASE WHEN low_fats = 'Y' OR recyclable = 'Y' THEN 1 ELSE 0 END),2) AS PERCE

# Write your MySQL query statement below
SELECT
    name
FROM
    Customer
	WHERE
    referee_id != 2 OR referee_id is NULL

    SELECT employee_id, IF(employee_id%2=1 AND name NOT LIKE 'M%' , salary ,0)bonus
FROM Employees
ORDER BY 1

UPDATE salary
SET sex = (CASE WHEN sex = "m" 
                THEN "f" 
                ELSE "m"
           END)
            

Write an SQL query to delete all the duplicate emails, keeping only one unique email with the smallest id. Note that you are supposed to write a DELETE statement and not a SELECT one.

After running your script, the answer shown is the Person table. The driver will first compile and run your piece of code and then show the Person table. The final order of the Person table does not matter.

SELECT p1.*
FROM Person p1,
    Person p2
WHERE
    p1.Email = p2.Email
;
Then we need to find the bigger id having same email address with other records. So we can add a new condition to the WHERE clause like this.

SELECT p1.*
FROM Person p1,
    Person p2
WHERE
    p1.Email = p2.Email AND p1.Id > p2.Id
;
As we already get the records to be deleted, we can alter this statement to DELETE in the end.

MySQL

DELETE p1 FROM Person p1,
    Person p2
WHERE
    p1.Email = p2.Email AND p1.Id > p2.Id

We will be using four functions here that are present in SQL

UPPER(A) where A is string
LOWER(A) where A is string
SUBSTR(A,index,length) where A is string index is starting index(1 index insead of 0 index) and length which is optional
So to get first letter we can use SUBSTR(name,1,1)
To get the remaining string we can use SUBSTR(name,2) // length is not required here
CONCAT(A,B) where we concat two strings A+B
Now with above information we can create our query as following

SELECT Users.user_id , CONCAT(UPPER(SUBSTR(Users.name,1,1)),LOWER(SUBSTR(Users.name,2))) AS name 
FROM Users
ORDER BY
Users.user_id ASC


    //SELECT user_id, CONCAT(UPPER(LEFT(name,1)),LOWER(RIGHT(name,LENGTH(name)-1))) AS name
//FROM Users
//0RDER BY user_id ASC;

//Write an SQL query to report the first name, last name, city,
// and state of each person in the Person table.
// If the address of a personId is not present in the Address table, 
//report null instead.

//Return the result table in any order.
select FirstName, LastName, City, State
from Person left join Address
on Person.PersonId = Address.PersonId
;
// Write your MySQL query statement below

 select p.firstName,p.lastName,a.city,a.state
 from Person as p left join Address as a
 on p.personId=a.personId ;