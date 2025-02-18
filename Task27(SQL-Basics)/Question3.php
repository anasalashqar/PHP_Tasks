<?php
$host = "localhost";  // Change this if your database is on a different server
$dbname = "anas";  // Replace with your database name
$username = "root";  // Default for localhost (change if needed)
$password = "";  // Leave blank if no password is set

try {
    // Create PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";  // Message if connection works=



    // try {
    //     $stmt = $pdo->query("SELECT * FROM Students"); // Replace "Students" with your table name

    //     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //         echo "ID: " . $row['student_id'] . " - Name: " . $row['first_name'] . " " . $row['last_name'] . "<br>";
    //     }
    // } catch (PDOException $e) {
    //     echo "Query failed: " . $e->getMessage();
    // }

    // try {
    //     $sql = "INSERT INTO Students (first_name, last_name, email, date_of_birth, gender, major, enrollment_year) 
    //             VALUES (:first_name, :last_name, :email, :dob, :gender, :major, :enrollment_year)";

    //     $stmt = $pdo->prepare($sql);

    //     // Bind parameters
    //     $stmt->execute([
    //         ':first_name' => 'erkhberhkberjk',
    //         ':last_name' => 'erfkjnrefjkrenkj',
    //         ':email' => 'john@example.com',
    //         ':dob' => '2000-05-10',
    //         ':gender' => 'Male',
    //         ':major' => 'Computer Science',
    //         ':enrollment_year' => 2023
    //     ]);

    //     echo "Student inserted successfully!";
    // } catch (PDOException $e) {
    //     echo "Insert failed: " .$e->getMessage();
    // }


    echo "<h3>All Students:</h3>";
    $stmt = $pdo->query("SELECT * FROM Students");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "{$row['student_id']} - {$row['first_name']} {$row['last_name']} - {$row['email']} - {$row['major']}<br>";
    }

    // 2. Find the total number of courses offered
    echo "<h3>Total Number of Courses:</h3>";
    $stmt = $pdo->query("SELECT COUNT(*) AS total_courses FROM Courses");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "Total Courses: {$row['total_courses']}<br>";

    // 3. Show students enrolled in a specific course (Change 'Frontend Development' if needed)
    $course_name = "Frontend Development";
    echo "<h3>Students Enrolled in $course_name:</h3>";
    $stmt = $pdo->prepare("
        SELECT S.first_name, S.last_name
        FROM Students S
        JOIN Enrollments E ON S.student_id = E.student_id
        JOIN Courses C ON E.course_id = C.course_id
        WHERE C.course_name = :course_name
    ");
    $stmt->execute(['course_name' => $course_name]);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "{$row['first_name']} {$row['last_name']}<br>";
    }

    // 4. Retrieve email addresses of instructors in a department (Change 'Web Development' if needed)
    $department_name = "Web Development";
    echo "<h3>Instructor Emails in $department_name:</h3>";
    $stmt = $pdo->prepare("SELECT first_name, last_name, email FROM Instructors WHERE department = :department");
    $stmt->execute(['department' => $department_name]);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "{$row['first_name']} {$row['last_name']} - {$row['email']}<br>";
    }



    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
