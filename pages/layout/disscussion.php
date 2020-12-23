<?php
include "system/connect.php";
if ($_SESSION['status'] == 2) {
?>
    <div class="sidebar">
        <?php $statement2 = $db->query("SELECT * FROM topic"); ?>
        <div class="topic-list">
            <h2>Topic List</h2>
            <ul>
                <?php foreach ($statement2 as $row2) {
                    echo "<li><a href='#'>{$row2['name_topic']}</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>&emsp;&emsp;&emsp;&emsp;
    <div class="disscussion" id="disscussion">
        <?php
        $statement1 = $db->query("SELECT * FROM question a, answer b, users c ,topic d WHERE a.id_user=c.id_user AND a.id_question=b.id_question AND d.id_topic=a.id_topic ORDER BY a.id_question DESC");

        foreach ($statement1 as $row1) {
            $id_question = $row1['id_question'];
            echo "<div class='disscuss-field'>";
            echo "<div class='topic-title'>";
            echo "<p><b>{$row1['id_question']}-{$row1['name_topic']}</b>";
            echo "<br>Oleh : {$row1['name_user']}</p></div>";
            echo "<hr><div class='content-disscuss'>";
            echo "<p>{$row1['content_question']}</p>";
            if ($row1['content_answer'] == null) {
                echo "<br><a href='view.php?id_question=$id_question'>Show More</a>";
            } else {
                echo "<br><span>{$row1['content_answer']}</span>";
            }
            echo "</div>";
            echo "</div>";
        }

        ?>

    </div>
<?php } else { ?>
    <div class="sidebar">
        <?php $statement2 = $db->query("SELECT * FROM topic"); ?>
        <div class="topic-list">
            <h2>Topic List</h2>
            <ul>
                <?php foreach ($statement2 as $row2) {
                    echo "<li><a href='#'>{$row2['name_topic']}</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>&emsp;&emsp;&emsp;&emsp;
    <div class="disscussion" id="disscussion">
        <?php
        $statement1 = $db->query("SELECT * FROM question a, topic b, users c WHERE a.id_user=c.id_user AND a.id_topic=b.id_topic ORDER BY id_question DESC;");

        foreach ($statement1 as $row1) {
            $id_question = $row1['id_question'];
            echo "<div class='disscuss-field'>";
            echo "<div class='topic-title'>";
            echo "<p><b>{$row1['name_topic']}</b>";
            echo "<br>Oleh : {$row1['name_user']}</p>
        </div>";
            echo "
        <hr>
        <div class='content-disscuss'>";
            echo "<p>{$row1['content_question']}</p>";
            echo "<br><a href='./view.php?id_question=$id_question'>Show More</a>";
            echo "</div>";
            echo "</div>";
        }

        ?>

    </div>
<?php } ?>