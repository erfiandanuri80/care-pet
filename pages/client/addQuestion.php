<?php
?>

<div class="form-question">
    <h1>Create Question</h1>
    <div class="form-field">
        <form action="compose.php" method="POST">
            <div class="field">
                <label>Topic</label>
                <br>
                <input type="text" name="name_topic">
            </div>
            <div class="field">
                <label>Question</label>
                <br>
                <textarea name="content_question" cols="30" rows="15"></textarea>

            </div>
            <input type="submit" value="Submit" class="btn-green">
        </form>
    </div>
</div>