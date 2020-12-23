<div class="form-question">
    <h1>Answer Question</h1>
    <div class="form-field">
        <form action="reply.php" method="POST">
            <?php


            $sql = $db->query("SELECT * FROM question a, topic b,users c WHERE a.id_topic=b.id_topic AND a.id_user=c.id_user AND id_question=$id_question");
            foreach ($sql as $row) {


            ?>

                <div class="field">
                    <div class="disscuss-field">
                        <div class="topic-title">

                            <p>
                                <b><?php echo "{$row['name_topic']}";
                                    $id_question = $row['id_question'] ?></b>
                                <br><br> dari : <?php echo "{$row['name_user']}"; ?>
                                <hr>
                            </p>
                            <p><?php echo "{$row['content_question']}"; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Answer</label>
                    <br>
                    <textarea name="content_question" cols="30" rows="15"></textarea>

                </div>
                <input type="submit" value="Submit" class="btn-green">
        </form>
    <?php } ?>
    </div>
</div>