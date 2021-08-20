<?php
    echo '<ul>';
    foreach ($data as $key => $value) {
        echo '<li>
                <a href="index.php?controller=users&action=showUser&id=' . $value['id'] . '">' . $value['full_name'] . '</a>
            </li>';
    }
    echo '</ul>';
?>