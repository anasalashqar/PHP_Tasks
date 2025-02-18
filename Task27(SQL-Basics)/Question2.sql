-- Insert 10 Students
INSERT INTO Students (first_name, last_name, email, date_of_birth, gender, major, enrollment_year) VALUES
('Mohamed', 'Ali', 'mohamed.ali@example.com', '2002-05-15', 'Male', 'Computer Science', 2023),
('Fatima', 'Khaled', 'fatima.khaled@example.com', '2001-09-10', 'Female', 'Information Technology', 2022),
('Omar', 'Hassan', 'omar.hassan@example.com', '2000-12-22', 'Male', 'Software Engineering', 2021),
('Sara', 'Mahmoud', 'sara.mahmoud@example.com', '2003-03-05', 'Female', 'Data Science', 2024),
('Ahmed', 'Saeed', 'ahmed.saeed@example.com', '2002-08-17', 'Male', 'Cyber Security', 2023),
('Layla', 'Hamed', 'layla.hamed@example.com', '2001-11-30', 'Female', 'Artificial Intelligence', 2022),
('Khalid', 'Yousef', 'khalid.yousef@example.com', '2000-06-25', 'Male', 'Network Security', 2021),
('Nour', 'Salem', 'nour.salem@example.com', '2003-01-12', 'Female', 'Database Management', 2024),
('Youssef', 'Othman', 'youssef.othman@example.com', '2002-07-20', 'Male', 'Machine Learning', 2023),
('Huda', 'Tariq', 'huda.tariq@example.com', '2001-04-18', 'Female', 'Web Development', 2022);

-- Insert 5 Instructors (Web Development Department)
INSERT INTO Instructors (first_name, last_name, email, hire_date, department) VALUES
('Mohammed', 'Ibrahim', 'mohammed.ibrahim@example.com', '2015-06-12', 'Web Development'),
('Aisha', 'Hassan', 'aisha.hassan@example.com', '2018-09-25', 'Web Development'),
('Yusuf', 'Mahmoud', 'yusuf.mahmoud@example.com', '2012-03-15', 'Web Development'),
('Salma', 'Omar', 'salma.omar@example.com', '2016-07-30', 'Web Development'),
('Hassan', 'Kareem', 'hassan.kareem@example.com', '2014-11-22', 'Web Development');

-- Insert 5 Web Development Courses
INSERT INTO Courses (course_name, course_code, credits, department) VALUES
('Frontend Development', 'WEB101', 3, 'Web Development'),
('Backend Development', 'WEB102', 3, 'Web Development'),
('Full-Stack Development', 'WEB103', 4, 'Web Development'),
('JavaScript Frameworks', 'WEB104', 3, 'Web Development'),
('PHP & MySQL', 'WEB105', 3, 'Web Development');

-- Assign Courses to Instructors (One instructor per course)
INSERT INTO CourseAssignments (instructor_id, course_id, semester, year) VALUES
(1, 1, 'Spring', 2025),
(2, 2, 'Spring', 2025),
(3, 3, 'Spring', 2025),
(4, 4, 'Spring', 2025),
(5, 5, 'Spring', 2025);

-- Enroll Each Student in at Least 2 Random Courses
INSERT INTO Enrollments (student_id, course_id, grade) VALUES
(1, 1, NULL), (1, 3, NULL),
(2, 2, NULL), (2, 4, NULL),
(3, 3, NULL), (3, 5, NULL),
(4, 1, NULL), (4, 5, NULL),
(5, 2, NULL), (5, 3, NULL),
(6, 1, NULL), (6, 4, NULL),
(7, 2, NULL), (7, 5, NULL),
(8, 3, NULL), (8, 4, NULL),
(9, 1, NULL), (9, 2, NULL),
(10, 4, NULL), (10, 5, NULL);
