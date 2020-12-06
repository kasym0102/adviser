<?php 

$mysqli = new mysqli('localhost', 'root', '', 'adviser') or die(mysqli_error($mysqli));

if(isset($_POST['add_adviser'])){
	$adviser_name = $_POST['adviser_name'];
	$adviser_surname = $_POST['adviser_surname'];
	$adviser_email = $_POST['adviser_email'];
	$adviser_url = $_POST['adviser_url'];
	$adviser_password = $_POST['adviser_password'];
	$adviser_gender = $_POST['adviser_gender'];
	$adviser_departament = $_POST['adviser_departament'];



	$mysqli->query("insert into adviser (adviser_name,adviser_surname,adviser_email, adviser_password, adviser_url,adviser_gender,adviser_departament) values('$adviser_name','$adviser_surname','$adviser_email', '$adviser_password', '$adviser_url', '$adviser_gender', '$adviser_departament')") or die(mysqli_error($mysqli));

	header("location: admin_advisers.php");

}

if(isset($_POST['editPerformance'])){
	$course_id = $_POST['course_id'];
	$student_id = $_POST['student_id'];
	$rk1 = $_POST['rk1'];
	$rk2 = $_POST['rk2'];
	$final = $_POST['final'];
	$attendance = $_POST['attendance'];
	$mysqli->query("update performances set rk1='$rk1', rk2 = '$rk2', attendance = '$attendance', final= '$final' 
		where student_id = '$student_id' and course_id = '$course_id'") or die(mysqli_error($mysqli));
	header("location: details_student.php?student_id='$student_id'");

}

if(isset($_POST['update_adviser'])){
	$adviser_id = $_POST['adviser_id'];
	$adviser_name = $_POST['adviser_name'];
	$adviser_surname = $_POST['adviser_surname'];
	$adviser_email = $_POST['adviser_email'];
	$adviser_url = $_POST['adviser_url'];
	$adviser_password = $_POST['adviser_password'];
	$adviser_gender = $_POST['adviser_gender'];
	$adviser_departament = $_POST['adviser_departament'];



	$mysqli->query("update adviser set adviser_name='$adviser_name',adviser_surname='$adviser_surname',adviser_email='$adviser_email', adviser_password='$adviser_password', adviser_url='$adviser_url',adviser_gender='$adviser_gender',adviser_departament='$adviser_departament' where adviser_id='$adviser_id'") or die(mysqli_error($mysqli));

	header("location: details_adviser.php?adviserdetails='$adviser_id'");

}


if(isset($_POST['addGroup'])){
	$group_name = $_POST['group_name'];
	$adviser_id = $_POST['adviser_id'];
	$department_name = $_POST['department_name'];


	$mysqli->query("insert into groups (adviser_id,name,department) values('$adviser_id','$group_name','$department_name')") or die(mysqli_error($mysqli));

	header("location: admin_groups.php");

}

if(isset($_POST['addCourse'])){
	$name = $_POST['name'];
	$teacher_name = $_POST['teacher_name'];


	$mysqli->query("insert into courses (name,teacher_name) values('$name','$teacher_name')") or die(mysqli_error($mysqli));

	header("location: admin_courses.php");

}

if(isset($_POST['addStudentToCourse'])){
	$student_id = $_POST['student_id'];
	$course_id = $_POST['course_id'];

	$mysqli->query("insert into performances (student_id,course_id) values('$student_id','$course_id')") or die(mysqli_error($mysqli));

	header("location: details_course.php?course_id='$course_id'");

}
if(isset($_POST['update_group'])){
	$group_name = $_POST['group_name'];
	$adviser_id = $_POST['adviser_id'];
	$department_name = $_POST['department_name'];
	$group_id = $_POST['group_id'];


	$mysqli->query("update groups set adviser_id='$adviser_id',name='$group_name',department='$department_name' where id='$group_id'") or die(mysqli_error($mysqli));

	header("location: details_group.php?group_id='$group_id'");

}

if(isset($_POST['updateStudent'])){
	$name = $_POST['name'];
	$id = $_POST['id'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$picture_url = $_POST['picture_url'];
	$gender = $_POST['gender'];
	$group_id = $_POST['group_id'];

	$mysqli->query("update students set name='$name',surname='$surname',login='$login', password='$password', picture_url='$picture_url', 
		gender='$gender', group_id='$group_id' where id='$id'") or die(mysqli_error($mysqli));

	header("location: details_student.php?student_id='$id'");

}



if(isset($_POST['addStudent'])){
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$picture_url = $_POST['picture_url'];
	$gender = $_POST['gender'];
	$group_id = $_POST['group_id'];




	$mysqli->query("insert into students (name,surname,login, password,picture_url, gender,group_id) values('$name','$surname','$login', '$password', '$picture_url', '$gender', '$group_id')") or die(mysqli_error($mysqli));

	header("location: admin_students.php");

}


if(isset($_POST['addStudent1'])){
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$picture_url = $_POST['picture_url'];
	$gender = $_POST['gender'];
	$group_id = $_POST['group_id'];




	$mysqli->query("insert into students (name,surname,login, password,picture_url, gender,group_id) values('$name','$surname','$login', '$password', '$picture_url', '$gender', '$group_id')") or die(mysqli_error($mysqli));

		header("location: details_group.php?group_id='$group_id'");
}