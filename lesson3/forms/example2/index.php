<?

if(isset($_POST['operation'])) {
    $operation = $_POST['operation'];
    $var1 = $_POST['var1'];
    $var2 = $_POST['var2'];

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
    <input type="number" name="var1">

    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="number" name="var2">

    <input type="submit" value="=">
    <?=$result?>
</form>