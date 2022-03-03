<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Form Page</title>
</head>
<body>
<form action='result.php' method='POST' class="container">
    <h1>Feedback Form</h1>
        Your Name (optional):
        <br>
    <input type="text" name='name' placeholder="Name...">
    <br>
        Course Title: 
    <br>
    <select name="course" id="course">
        <option value="PHP Track" name="course">PHP Track</option>
    </select>
    <br>
        Given Score (1-10):
    <br>
    <select name="score" id="score">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <br>
        Reason:
    <br>
    <textarea rows="3" cols="40" name="reason" placeholder="Type your reason here"></textarea>
    <input type='submit' value='submit' class="button">
</form>
</body>
</html>