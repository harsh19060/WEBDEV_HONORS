<?php require 'views/header.html'; ?>

<div class="duetoday">
    <h3 style="color: white;">EDIT</h3>

    <?php if (isset($errorMessage) && $errorMessage) { ?>
        <article style="background: pink; border-left: 4px solid red; padding: 0.5rem">
            <p><?= htmlspecialchars($errorMessage) ?></p>
        </article>
    <?php } ?>

    <form method="POST" action="edit.php?id=<?= $todo->id; ?>">
        <input type="hidden" name="id" value="<?= $todo->id; ?>">

        <fieldset>
            <label style="color:white;">
                Description
                <input type="text" name="description" 
                       value="<?= htmlspecialchars($todo->description); ?>">
            </label>

            <label style="color:white;">
                Due Date
                <input type="date" name="due_date" 
                       value="<?= htmlspecialchars($todo->dueDate); ?>">
            </label>

            <button type="submit" class="buttonoption">UPDATE TASK</button>
        </fieldset>
    </form>
</div>

<?php require 'views/footer.html'; ?>
