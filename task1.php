<form method="post">
    <input type="text" placeholder="Enter arithmetic expression" name="math" required>
    <input type="submit" name="submit">
</form>

<?php

if (isset($_POST['submit'])) {

    $input_str = $_POST['math'];
    $copy_str = $input_str;

    $brackets_arr = array();

    $error = false;

    $k = 0;

    if (strlen($copy_str) == 1 && ($copy_str[0] == '(' || $copy_str[0] == ')')) {

        echo 'Check count of brackets at your expression!';

        $error = true;

        exit();
    }

    for ($i = 0; $i < strlen($copy_str); $i++) {

        if ($copy_str[$i] == '(') {

            $brackets_arr[$k] = $copy_str[$i];

            $k++;

            for ($j = $i + 1; $j < strlen($copy_str); $j++) {

                if ($copy_str[$j] == ')') {

                    $brackets_arr[$k] = ')';

                    $copy_str[$j] = '.';

                    $k++;

                    break;
                }

                if ($j == strlen($copy_str) - 1 && count($brackets_arr) % 2 != 0) $error = true;
            }
        }

        if ($copy_str[$i] == ')') $error = true;

        if ($error) {

            echo 'Check count of brackets at your expression!';

            break;
        }

        $brackets_arr = array();
    }

    if (!$error) echo 'Everything alright!';
}