<?php 
include "header.php";
include "navigater.php";
include "connect.php";
?>


<div class="container mt-5">
    <table class="table ">
        <h1> ข้อมูล student3</h1>
        <tr>
            <th>รหัสนักเรียน</th>
            <th>ชื่อ</th>
            <th>กลุ่ม</th>
            <th>ระดับชั้น</th>
        </tr>
            <?php
                $sql = "SELECT * FROM student3";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row ['student_id'] ?></td>
                        <td><?php echo $row ['name'] ?></td>
                        <td><?php echo $row ['group_id'] ?></td>
                        <td><?php echo $row ['level_group'] ?></td>
                    </tr>
                    
                    <?php
                }
                } else {
                echo "0 results";
                }
                $conn->close();
            ?>
    </table>
</div>

<?php 
include "footer.php";
?>