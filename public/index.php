<!DOCTYPE html>
<html>

    <head>
    <title>Php Mysql Apache</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container-fluid">
            <?php
                echo '<h1 class="text-center my-4">Clientes cadastrados</h1>';
                $conn = mysqli_connect('db','root','root.pa55');
                $database = mysqli_select_db($conn, 'db_dio');
                $query = 'SELECT * FROM Clientes';
                $result = mysqli_query($conn, $query);
                echo '<div class="table-responsive col-md-8 mx-auto mb-5">';
                echo '<table class="table table-striped table-bordered shadow-sm">';
                echo '<thead class="table-dark"><tr><th>ID</th><th>Nome do cliente</th></tr></thead>';
                while($value = $result->fetch_array(MYSQLI_ASSOC)) {
                    echo '<tr>';
                    foreach ($value as $element) {
                        echo '<td>'.$element.'</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
                echo '</div>';
                $result->close();
                mysqli_close($conn);
            ?>
        </div>
    </body>
</html>