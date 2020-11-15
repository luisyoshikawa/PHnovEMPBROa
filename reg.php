<?php

    include_once 'student.class.php';

    $student = new Student;

    $student->setreg(123);
    $student->setname("Luis");
    $student->settest1(2);
    $student->settest2(1);
    $student->setproject(10);



    $student2 = new Student;

    $student2->setreg(10);
    $student2->setname("Cabeça");
    $student2->settest1(10);
    $student2->settest2(10);
    $student2->setproject(10);

    

    echo "Matricula: " . $student2->getreg() . "<br>";
    echo "Nome: " . $student2->getname() . "<br>";
    echo "Nota da primeira prova: " . $student2->gettest() . "<br>";
    echo "Nota da segunda prova: " . $student2->gettest2() . "<br>";
    echo "Nota do trabalho: " . $student2->getproject() . "<br>";
    echo $student2->getgrade();
    echo "</br>";
    echo "</br>";



    echo "Matrícula: " . $student->getreg() . "<br>";
    echo "Nome: " . $student->getname() . "<br>";
    echo "Nota da primeira prova: " . $student->gettest() . "<br>";
    echo "Nota da segunda prova: " . $student->gettest2() . "<br>";
    echo "Nota do trabalho: " . $student->getproject() . "<br>";
    echo $student->getgrade();


?>