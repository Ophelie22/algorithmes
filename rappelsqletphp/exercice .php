<?php
//EXos 3
//r une fonction from scratch qui
// s'appelle jeRetourneMonArgument().
// Exemple : Arg = "abc" ==>
// Return abc Arg = 123 ==> Return 123
function jeRetourneMonArgument($Arg) {
return $Arg;
}

//EXOS 4
//Créer une fonction 
//from scratch qui s'appelle concatenation(). Elle prendra deux arguments de type string. Elle devra retourner la concatenation des deux. Exemple : argument 1 = Antoine Argument 2 = Griezmann; Resultat : AntoineGriezmann
function concatenation($arg1, $arg2) {
return $arg1 . $arg2;
}
function concatenationAvecEspace($arg1, $arg2) {
return $arg1 . " " . $arg2;
}
//:Ex 6 :
function somme($int1, $int2) {
return $int1 + $int2;
}
function soustraction($int1, $int2) {
    return $int1 - $int2;
}
//Ex 8 :
function multiplication($int1, $int2) {
return $int1 * $int2;
}
//Ex 9 :
function estIlMajeure($int) {
if($int >= 18) return true;
return false;
}

//Ex 10 :
function plusGrand($int1, $int2) {
if($int1 > $int2) return $int1;
return $int2;
}

//Ex 11 :
function plusPetit($int1, $int2) {
if($int1 < $int2) return $int1;
return $int2;
}

//Ex 12 :
function plusPetit($int1, $int2, $int3) {
return min([$int1,$int2,$int3]);
}
//Ex 13 :
function premierElementTableau($array) {
if(!is_null($array)) return $array[0];
return null;
}

//Ex 14 :
function dernierElementTableau($array) {
if(!is_null($array)) return $array[count($array)-1];
return null;
}

//Ex 15 :
//retourner le plus grans element du tableau
function plusGrand($array) {
if(empty($array)) return null;
return max($array);
}

//Ex 16 :
function plusPetit($array) {
if(empty($array)) return null;
return min($array);
}

//Ex 17 :
function verificationPassword($string) {
if(strlen($string) >= 8) return true;
return false;
}
//Ex 18 :

//Créer une fonction 
//qui s'appelle verificationPassword().
// Elle prendra un argument de type string.
// Elle devra retourner un boolean qui vaut true
// si le password respecte les règles suivantes :

//Faire au moins 8 caractères
//Avoir au moins 1 chiffre
//Avoir au moins une majuscule et une minuscule
function verificationPassword($string) {
if(
strlen($string) >= 8 &&
preg_match("#[0-9].*#",$string) &&
preg_match("#[a-z].*#",$string) &&
preg_match("#[A-Z].*#",$string)
) return true;
return false;
}

//Ex 19 :
//Créer une fonction from scratch qui s'appelle capital(). Elle prendra un argument de type string. Elle devra re
//tourner le nom de la capitale des pays suivants 
function capital($string) {
switch($string) {
case'France': return 'Paris';
case'Allemagne': return 'Berlin';
case'Italie': return 'Rome';
case'Maroc': return 'Rabat';
case'Espagne': return 'Madrid';
case'Portugal': return 'Lisbonne';
case'Angleterre': return 'Londres';
default: return 'Inconnu';
}
}

//Ex 20 :
function listHTML($string,$array) {
if(is_null($string) || empty($string)) return null;
if(is_null($array) || empty($array)) return null;
$titre = "<h3>" . $string . "</h3>";
$villes = "<ul>";
foreach($array as $key) {
$villes .= "<li>" . $key . "</li>";
}
$villes .= "</ul>";
return $titre . $villes;
}

//Ex 21 :

//Créer une fonction from scratch qui s'appelle
//remplacerLesLettres().
// Elle prendra un argument de type string. Elle devra retourner cette même string mais en remplacant les e par des 3, 
//les i par des 1 et les o par des 0 Exemple :
function remplacerLesLettres($string) {
$string = str_replace(['e','i','o','E','I','O'], ['3','1','0','3','1','0'], $string);
return $string;
}
Ex 23 :
function quelleDate() {
$date = new DateTime();
return $date->format('d/m/Y');
}

//Ex 24 :
include './libraryToInclude.php';
function fonctionMagique() {
return fonctionDeMaLibrairie();
}

//Ex 25 :

include './libraryToInclude.php';
function getUtilisateursAutorises() {
$users = getAllUtilisateurs();
$array = array();
print_r($users);
for($i = 0; $i < count($users); $i++) {
if(!$users[$i]->blocked && !empty($users[$i]->email) && $users[$i]->age >= 18) array_push($array,$users[$i]);
}
print_r($array);
return $array;
}

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $s = array_reverse($s,true);
        return $s;
    }
}
lass Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $temp = [];
        foreach ($nums as $key => $value) {
           if (!isset($temp[$value])) {
                $temp[$value] = $key;
            }
            $complement = $target - $value;
            if (isset($temp[$complement]) && $temp[$complement] !== $key) {
                return [$temp[$complement], $key];
            }       
        }
        return [];
    }
}
select sell_date, count( DISTINCT product ) as num_sold ,
    
    GROUP_CONCAT( DISTINCT product order by product ASC separator ',' ) as products
    
        FROM Activities GROUP BY sell_date order by sell_date ASC;
        SELECT sell_date,
		COUNT(DISTINCT(product)) AS num_sold, 
		GROUP_CONCAT(DISTINCT product ORDER BY product ASC SEPARATOR ',') AS products
FROM Activities
GROUP BY sell_date
ORDER BY sell_date ASC

select name, population, area from World where area>=3000000 or population>=25000000

SELECT
    name
FROM
    Customer
	WHERE
    referee_id != 2 OR referee_id is NULL


//Selectionner les clients quii on jamais commander avec 2 table
//en algo select customerid from orders;
    SELECT Name AS 'Customers'
FROM Customers c
LEFT JOIN Orders o
ON c.Id = o.CustomerId
WHERE o.CustomerId IS NULL

//ou aussi

select customers.name as 'Customers'
from customers
where customers.id not in
(
    select customerid from orders
);
Algorithm

Since the Employee table contains the Salary and DepartmentId information, we can query the highest salary in a department.

SELECT
    DepartmentId, MAX(Salary)
FROM
    Employee
GROUP BY DepartmentId;
Note: There might be multiple employees having the same highest salary, so it is safe not to include the employee name information in this query.

| DepartmentId | MAX(Salary) |
|--------------|-------------|
| 1            | 90000       |
| 2            | 80000       |
Then, we can join table Employee and Department, and query the (DepartmentId, Salary) are in the temp table using IN statement as below.

MySQL

SELECT
    Department.name AS 'Department',
    Employee.name AS 'Employee',
    Salary
FROM
    Employee
        JOIN
    Department ON Employee.DepartmentId = Department.Id
WHERE
    (Employee.DepartmentId , Salary) IN
    (   SELECT
            DepartmentId, MAX(Salary)
        FROM
            Employee
        GROUP BY DepartmentId
    )
;

SELECT D.NAME AS DEPARTMENT,
E.NAME AS EMPLOYEE,
E.SALARY
FROM EMPLOYEE E
JOIN DEPARTMENT D ON 
E.DEPARTMENTID = D.ID
WHERE SALARY = (SELECT MAX(SALARY) FROM EMPLOYEE WHERE D.ID 

 EMPLOYEE.DEPARTMENTID);