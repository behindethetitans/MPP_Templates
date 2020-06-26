<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concursuri</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="text-align:center;">
    <?php include 'delete.php' ?>
    <h1>Lista concursuri:</h1>
    <?php include 'getAll.php' ?>
    <h1>Adauga/Modifica concurs:</h1>
    <form method="POST">
        <label for="id">ID:</label><br>
        <input type="number" id="id" name="id"><br>
        <label for="nume">Nume:</label><br>
        <input type="text" id="nume" name="nume"><br><br>
        <label for="distanta">Distanta:</label><br>
        <input type="text" id="distanta" name="distanta"><br><br>
        <label for="capacitate">Capacitate:</label><br>
        <input type="text" id="capacitate" name="capacitate"><br><br>
        <label for="numar">Numar:</label><br>
        <input type="text" id="numar" name="numar"><br><br>
        <input type="submit" name="submit" value="ADAUGA/MODIFICA">
    </form>
    <?php include 'submitForm.php' ?>

    <script>
        function del(id) {
            $.ajax({
                data: 'deleteID=' + id,
                url: 'http://localhost',
                method: 'POST',
                success: function(msg) {
                    location.reload();
                }
            });
        }
    </script>
</body>
</html>