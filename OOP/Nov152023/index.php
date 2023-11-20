<?php
    require_once('employee.php');
    $emp1 = new Employee(1,"Ali Raza");
    $emp1->set_dob("03-July-1983");
    $emp1->set_gender("Male");
    echo $emp1->disp_info();
    
    $emp2 = new PartTimeEmployee(2,"Affan",1500);
    $emp2->set_name("Affan Mansoor");
    $emp2->set_gender("Male");
    $emp2->set_dob("10-Mar-2006");
    //$emp2->set_salary(3000);
    echo $emp2->disp_info();

    $emp3 = new FullTimeEmployee(3,"Shoaib Faisal",10000);
    $emp3->set_gender("Male");
    $emp3->set_dob("04-Feb-2005");
    //$emp3->set_salary(85000);
    echo $emp3->disp_info();

    $emp4 = new Employee(4,"Ali Raza");
    $emp4->set_dob("03-July-1983");
    $emp4->set_gender("Male");
    echo $emp4->disp_info();
?>