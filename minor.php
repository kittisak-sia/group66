<?php 
include "header.php";
include "navigater.php";
include "connect.php";
?>


<div class="container mt-5">
    <table class="table ">
        <h1> ข้อมูล student3</h1>
        <tr>
            <th>รหัสแผนก</th>
            <th>หน้าที่</th>
            <th>ชื่อแผนก</th>
        </tr>
            <?php
                $sql = "SELECT * FROM minor_depart";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row ['minor_id'] ?></td>
                        <td><?php echo $row ['minor_name'] ?></td>
                        <td><?php echo $row ['depart_name'] ?></td>
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