CREATE TABLE students (
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (50),
    email VARCHAR (50),
    point INT DEFAULT 0
);
INSERT INTO students (name , email , point) VALUES
('Abinath', 'abinath123@gmail.com', 200),
('Govind Raj', 'narasimhagovindraj@gmail.com', 500),
('Brian Chew', 'BrianChew1010@gmqil.com', 800);

CREATE TABLE teachers (
    teacher_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (50),
    email VARCHAR (50),
);
INSERT INTO teachers (name , email) VALUES
('Sivakumaran', 'Sivakumaran6767@mail.edu.apu.my'),
('Govindamal', 'Govindamal9696@mail.edu.apu.my')

CREATE TABLE challenge (
    challenge_id INT PRIMARY KEY AUTO_INCREMENT
    title VARCHAR (50),
    points INT
);

CREATE TABLE rewards (
    reward_id INT PRIMARY KEY AUTO_INCREMENT
    name VARCHAR (50),
    points_required INT
);

CREATE TABLE student_rewards (
    id INT PRIMARY AUTO_INCREMENT,
    student_id INT,
    reward_id INT
);

/linking students rewards/

INSERT INTO students (name, points) VALUES
('Abinath', 200),
('Govind Raj', 500),
('Brian Chew', 800);

INSERT INTO challenges (title, points) VALUES
('Easy Quiz', 50)
('Hard Quiz', 100);

INSERT INTO rewards (name, points_required) VALUES
('First Step Explorer', 100),
('Rising Rookie', 300),
('Ultimate Legend', 1000);

SELECT name, points
FROM students
ORDER BY points DESC;

