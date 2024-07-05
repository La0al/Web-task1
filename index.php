<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>task1
    </title>
</head>
<body>
    <div class="background-video">
        <video autoplay muted loop class="video">
            <source src="sea.mp4" type="video/mp4">
            
        </video>
    </div>
    <form action="insert.php" method="post" class="button-form">

</form>

        <div class="button-container">
            <div class="row">
                <button class="btn btn-primary" type="Submit" name="btn" value="Forward">Forward</button>
            </div>
            <div class="row">
                <button class="btn btn-secondary" type="Submit" name="btn" value="left">Left</button>
                <button class="btn btn-secondary" type="Submit" name="btn" value="stop">Stop</button>
                <button class="btn btn-secondary" type="Submit" name="btn" value="right">Right</button>
            </div>
            <div class="row">
                <button class="btn btn-primary" type="submit" name="btn" value="Backward">Backward</button>
            </div>
        </div>
    </form>
    <div class="center">
        <a href="view_movements.php">View Latest Movement</a>
    </div>
    
</body>
</html>
