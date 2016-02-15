<?

if(isset($_POST['operation'])) {
    $errors = [];
    $operation = $_POST['operation'];

    if(!empty($_POST['var1'])) {
        $var1 = $_POST['var1'];
    }
    else {
        $errors[] = 'Variable 1 can\'t be blank';
    }
    if(!empty($_POST['var2'])) {
        $var2 = $_POST['var2'];
    }
    else {
        $errors[] = 'Variable 2 can\'t be blank';
    }

    switch($operation) {
        case '+': {
            $result = $var1 + $var2;
            break;
        }
        case '-': {
            $result = $var1 - $var2;
            break;
        }
        case '*': {
            $result = $var1 * $var2;
            break;
        }
        case '/': {
            $result = $var1 / $var2;
            break;
        }
    }
}

?>


<form action="" method="post">
    <input type="number" name="var1" value="<?=$var1?>">

    <select name="operation">
        <option value="+" <? if($operation == '+') echo 'selected'; ?>>
            +
        </option>
        <option value="-" <? if($operation == '-') echo 'selected'; ?>>
            -
        </option>
        <option value="*" <? if($operation == '*') echo 'selected'; ?>>
            *
        </option>
        <option value="/" <? if($operation == '/') echo 'selected'; ?>>
            /
        </option>
    </select>

    <input type="number" name="var2" value="<?=$var2?>">

    <input type="submit" value="=">
    <?=$result?>
</form>

<? foreach($errors as $err) { ?>
    <div style="color:red">
        <?=$err?>
    </div>
<? } ?>
