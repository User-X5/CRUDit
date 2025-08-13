




//handel navbar active class
let navitems = document.querySelectorAll('.nav-link');
let loca = window.location.pathname;

$doctorCondition = (loca == '/finalproject/doctors/doctor.php' || loca == '/finalproject/doctors/add.php' || loca == '/finalproject/doctors/update.php');
$studentCondition = (loca == '/finalproject/students/student.php' || loca == '/finalproject/students/add.php' || loca == '/finalproject/students/update.php');
$courseCondition = (loca == '/finalproject/courses/course.php' || loca == '/finalproject/courses/add.php' || loca == '/finalproject/courses/update.php');
$departmentCondition = (loca == '/finalproject/departments/department.php' || loca == '/finalproject/departments/add.php' || loca == '/finalproject/departments/update.php');
$employeeCondition = (loca == '/finalproject/employees/employee.php' || loca == '/finalproject/employees/add.php' || loca == '/finalproject/employees/update.php');
$userCondition = (loca == '/finalproject/users/user.php' || loca == '/finalproject/users/add.php' || loca == '/finalproject/users/update.php');

navitems.forEach(item => {
    if(item.classList[1] == 'nav-home' && loca == '/finalproject/index.php'){
        item.classList.add('active');
        
    }else if (item.classList[1] == 'nav-doctors' && $doctorCondition) {
        item.classList.add('active');
    }else if (item.classList[1] == 'nav-students' && $studentCondition)  {
        item.classList.add('active');
    }else if (item.classList[1] == 'nav-courses' && $courseCondition) {
        item.classList.add('active');
    }else if (item.classList[1] == 'nav-departments' && $departmentCondition) {
        item.classList.add('active');
    }else if (item.classList[1] == 'nav-employees' && $employeeCondition) {
        item.classList.add('active');
    }else if (item.classList[1] == 'nav-users' && $userCondition) {
        item.classList.add('active');
        console.log("actived");
        
    }
});

