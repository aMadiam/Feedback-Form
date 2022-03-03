<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Submitted Entry</h1>
        <p>Your Name (optional):</p>
            <p class="sample"><?=ucfirst($_POST['name']);?></p>    
        <p>Course Title:</p>
            <p class="sample"><?=$_POST['course'];?></p>
        <p>Given Score (1-10):</p>
            <p class="sample"><?=$_POST['score'];?>pts</p>
        <p>Reason:</p>
            <p class="reason"><?=ucfirst($_POST['reason']);?></p>
    <a href=index.php>
       <input type="button" value="Return" class="return">
    </a>
</div>
</body>
</html>

