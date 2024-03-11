<?php
    include_once 'atas.php';
?>
       
       <div class="container my-5">
            <h1 class="text-center mb-4">Triangle Area Calculator</h1>
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <label for="base">Base</label>
                    <input type="number" class="form-control" id="base" name="base" required>
                </div>
                <div class="form-floating mb-3">
                    <label for="height">Height</label>
                    <input type="number" class="form-control" id="height" name="height" required>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Calculate Area</button>
            </form>
        </div>

<?php     
    require_once 'libfungsi.php';
    
    $a = $_POST['base'];
    $t = $_POST['height'];
    $l = hitungLuas($a, $t);


?>

        <div class="mt-4">
            <h2>Hasil</h2>
            <P>Alas: <?php echo $a ?> cm</P>
            <P>Tinggi: <?php echo $t ?> cm</P>
            <P>Luas: <?php echo $l ?> cm</P>
            <P></P>
        </div>