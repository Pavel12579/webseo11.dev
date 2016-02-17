<?
$errors = [];

if(isset($_POST['operation'])) {
    $operation = $_POST['operation'];

    if(!empty($_POST['var1'])) {
        $var1 = $_POST['var1'];
        if(!is_numeric($var1)) {
            $errors['var1'] = 'Variable 1 must be a number';
        }
    }
    else {
        $errors['var1'] = 'Variable 1 can\'t be blank';
    }

    if(!empty($_POST['var2'])) {
        $var2 = $_POST['var2'];
        if(!is_numeric($var2)) {
            $errors['var2'] = 'Variable 2 must be a number';
        }
    }
    else {
        $errors['var2'] = 'Variable 2 can\'t be blank';
    }

    if(empty($errors)) {
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
            default: {

            }
        }
    }

}

?>

<style>
    .error {
        border: 1px solid red;
        background-color: rgba(255, 0, 0, 0.22);
    }
</style>

<form action="" method="post">
    <input class="<?= array_key_exists('var1', $errors) ? 'error ' : '' ?>" type="text" name="var1" value="<?=$var1?>">

    <select class="<?= array_key_exists('operation', $errors) ? 'error ' : '' ?>" name="operation">
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

    <input class="<?= array_key_exists('var2', $errors) ? 'error ' : '' ?>" type="number" name="var2" value="<?=$var2?>">

    <input type="submit" value="=">
    <?=$result?>
</form>

<? foreach($errors as $err) : ?>
    <div style="color:red">
        <?=$err?>
    </div>
<? endforeach; ?>
