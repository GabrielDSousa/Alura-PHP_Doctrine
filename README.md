# PHP_Doctrine
[Introduction to Object-Relational Mapping](https://cursos.alura.com.br/course/php-doctrine-mapeamento-objeto-relacional)

This a trainning provided by [Alura](https://cursos.alura.com.br)

Do this trainning in database and:

- See the advantages of using an ORM
- Map classes and relationships to the database
- Update the bank's schema through Migrations
- Organize your code in the repository
- Write queries independent of the bank with DQL

## Installation

Use the package manager to install php.
On Windows, I'm using [Chocolatey](https://chocolatey.org/)
```bash
choco install php
```
```bash
choco install composer
```

## Usage
Open a terminal on the folder where is the code and type:
```bash
composer dumpautoload
```
```bash
vendor\bin\doctrine-migrations migrations:migrate
```

Add a course
```bash
php .\commands\create-course.php <NAME>
```

Add a student
```bash
php .\commands\create-course.php <NAME> <PHONES>
```

Add a student to a course
```bash
php .\commands\add-student-to-course.php <ID STUDENT> <ID COURSE>
```

List students
```bash
php .\commands\all-students.php
```

List students with courses
```bash
php .\commands\report-course-student.php
```
Remove student cascade with phones
```bash
php .\commands\remove-student.php <ID STUDENT>
```

## License
[MIT](https://choosealicense.com/licenses/mit/)

