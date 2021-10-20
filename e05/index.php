<!DOCTYPE html>
<html>
<body>

    <h1>¿Cuantos años tienes?</h1>
    <select>
        <?php foreach (range(1, 10) as $num): ?>
        <option value="<?php echo $num; ?>"><?php echo $num . ' años'; ?></option>
        <?php endforeach; ?>
    </select>
  
</body>
</html>