<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = $_POST['employee_name'];
    $employee_age = $_POST['employee_age'];
    $department = $_POST['department'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>確認画面</title>
</head>
<body>

<h2>確認画面</h2>

<table border="1">
    <tr>
        <th>項目</th>
        <th>入力内容</th>
    </tr>
    <tr>
        <td>社員名</td>
        <td><?php echo htmlspecialchars($employee_name); ?></td>
    </tr>
    <tr>
        <td>年齢</td>
        <td><?php echo htmlspecialchars($employee_age); ?></td>
    </tr>
    <tr>
        <td>所属部署</td>
        <td><?php echo htmlspecialchars($department); ?></td>
    </tr>
</table>

<form action="complete.php" method="post">
    <input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($employee_name); ?>">
    <input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($employee_age); ?>">
    <input type="hidden" name="department" value="<?php echo htmlspecialchars($department); ?>">
    <input type="submit" value="確定">
</form>

<form action="form.php" method="get">
    <input type="submit" value="キャンセル">
</form>

</body>
</html>
