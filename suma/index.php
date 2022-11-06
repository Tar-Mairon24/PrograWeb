<html>
    <body>
        <h1>Suma de dos numeros</h1>
        <form action="index.php" method="post">
            <ul>
                <li>
                    <?php
                        $A = intval($_POST['A']);
                    ?>
                    <label for="A">A: </label>
                    <input type="text" name="A" value=<?php echo $A; ?> >
                </li>
                <li>
                    <?php
                        $B = intval($_POST['B']);
                    ?>
                    <label for="B">B: </label>
                    <input type="text" name="B" value=<?php echo $B; ?> >
                </li>
                <button type="submit">Suma</button>
                <li>
                    <?php
                        $C = $A + $B;
                    ?>
                    <label for="C">C: </label>
                    <input type="text" name="C" value=<?php echo $C; ?>>
                </li>
            </ul>
        </form>
    </body>
</html>