<?php
include "system/connect.php";
if ($_SESSION['status'] == 1) {
?>
    <div class="sidebar">
        <?php $statement2 = $db->query("SELECT * FROM topic"); ?>
        <div class="topic-list">
            <h2>Topic List</h2>
            <ul>
                <?php foreach ($statement2 as $row2) {
                    echo "<li>{$row2['name_topic']}</li>";
                }
                ?>
            </ul>
        </div>
    </div>&emsp;&emsp;&emsp;&emsp;
    <div class="disscussion" id="disscussion">
        <?php
        $id_user = $_SESSION['id_user'];
        $statement1 = $db->prepare("SELECT * FROM question a, topic b, users c,answer d WHERE a.id_user=c.id_user AND a.id_topic=b.id_topic AND a.id_question=d.id_question AND a.id_user=:id_user");
        $statement1->bindValue(":id_user", $id_user);
        $statement1->execute();

        foreach ($statement1 as $row) {
            $id_question = $row['id_question'];
            if ($row['content_answer'] == Null) {
                echo "<div class='disscuss-field'>";
                echo "<div class='topic-title'>";
                echo "<p><b>{$row['id_question']}-{$row['name_topic']}</b>";
                echo "<br>Oleh : {$row['name_user']}</p></div>";
                echo "<hr><div class='content-disscuss'>";
                echo "<p>{$row['content_question']}</p>";
                echo "<br><a href='view.php?id_question=$id_question'>Lihat Detail</a>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "<div class='disscuss-field'><br><i style='color:black;'>Telah dijawab oleh Expert</i>";
                echo "<div class='topic-title'>";
                echo "<p><b>{$row['id_question']}-{$row['name_topic']}</b>";
                echo "<br>Oleh : {$row['name_user']}</p></div>";
                echo "<hr><div class='content-disscuss'>";
                echo "<p>{$row['content_question']}</p>";
                echo "<br><a href='view.php?id_question=$id_question'>Lihat Detail</a>";
                echo "</div>";
                echo "</div>";
            }
        }
        ?>
    </div>
<?php } else if ($_SESSION['status'] == 2) {

?>
    <div class="sidebar">
        <?php $statement2 = $db->query("SELECT * FROM topic"); ?>
        <div class="topic-list">
            <h2>Topic List</h2>
            <ul>
                <?php foreach ($statement2 as $row2) {
                    echo "<li>{$row2['name_topic']}</li>";
                }
                ?>
            </ul>
        </div>
    </div>&emsp;&emsp;&emsp;&emsp;
    <div class="disscussion" id="disscussion">
        <?php
        $id_user = $_SESSION['id_user'];
        $statement1 = $db->prepare("SELECT * FROM question a, answer b, users c ,topic d WHERE a.id_user=c.id_user AND a.id_question=b.id_question AND d.id_topic=a.id_topic AND b.id_user=:id_user ORDER BY a.id_question DESC");
        $statement1->bindValue(":id_user", $id_user);
        $statement1->execute();

        foreach ($statement1 as $row) {
            $id_question = $row['id_question'];
            echo "<div class='disscuss-field'>";
            echo "<div class='topic-title'>";
            echo "<p><b>{$row['id_question']}-{$row['name_topic']}</b>";
            echo "<br>Oleh : {$row['name_user']}</p></div>";
            echo "<hr><div class='content-disscuss'>";
            echo "<p>{$row['content_question']}</p>";
            echo "<br><a href='./view.php?id_question=$id_question'>Lihat Detail</a>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
<?php }
?>