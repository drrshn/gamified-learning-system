<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
        }
        .form-container {
            width: 300px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: green;
            color: white;
            border: none;
            cursor: pointer;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background: green;
            color: white;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Add Student</h2>

    <form onsubmit="addStudent(event)">
        <input type="text" id="name" placeholder="Enter name" required>
        <input type="email" id="email" placeholder="Enter email" required>
        <input type="number" id="points" placeholder="Enter points" value="0">
        <button type="submit">Add Student</button>
    </form>
</div>

<table id="studentTable">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Points</th>
    </tr>
</table>

<script>
let id = 1;

function addStudent(event) {
    event.preventDefault();

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let points = document.getElementById("points").value;

    let table = document.getElementById("studentTable");
    let row = table.insertRow();

    row.insertCell(0).innerText = id++;
    row.insertCell(1).innerText = name;
    row.insertCell(2).innerText = email;
    row.insertCell(3).innerText = points;

    document.querySelector("form").reset();
}
</script>

</body>
</html>
