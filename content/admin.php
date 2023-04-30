<?php
session_start();
if($_SESSION['status'] != 'admin'){
    echo "<script>window.location.href='index.php'</script>";}
?>
 <main class="main ppb">    
        <div class="filter">
            <select name="plan-book" class="select-css">
                <option value="free">Free</option>
                <option value="n1" selected>Стандарт</option>
                <option value="n2">Люкс</option>
                <option value="b3">Эконом</option>
            </select>
            <!-- <button id="book-submit auto-submit sbt" type="submit">
                <span>Выбрать тип номера</span>
                <span>
                    <svg width="21" height="18"><use xlink:href="#icon-paw"></use>
                    </svg>
                </span>
            </button> -->
        </div>
        <!-- /.filter -->

        <div class="wrap-booking">
        <?php
          $push = 'SELECT booking_room.date1 as date1, booking_room.date2 as date2, booking_room.name_user as name_user, cat_room.class_room as id_room, booking_room.id_booking as id_booking FROM `booking_room` JOIN cat_room on booking_room.id_room = cat_room.id_room WHERE booking_room.status = "expectation" order by booking_room.id_booking asc';
          $input = mysqli_query($cat_db, $push);
          if (isset($input)){
            $row = mysqli_fetch_array($input);
            if(!$row){
                echo "<p>Заказов на данный момент нет</p>";
            }
            $push = 'SELECT booking_room.date1 as date1, booking_room.date2 as date2, booking_room.name_user as name_user, cat_room.class_room as id_room, booking_room.id_booking as id_booking FROM `booking_room` JOIN cat_room on booking_room.id_room = cat_room.id_room WHERE booking_room.status = "expectation" order by booking_room.id_booking asc';
            $input = mysqli_query($cat_db, $push);
            while($row = mysqli_fetch_array($input)){
            ?>
            <div class="booking">
                <h3>Бронирование <?php echo $row['id_booking']; ?></h3>
                <p>Номер: <?php echo $row['id_room']; ?></p>
                <p><?php echo $row['name_user']; ?></p>
                <p class="dd">c <?php echo $row['date1']; ?> по <?php echo $row['date2']; ?></p>
                <div class="btbt">
                    <button class="button book-button bb сonfirm" type="button" onclick = "window.location.href='booking/add.php?id=<?php echo $row['id_booking']; ?>';">
                        <span>Подтвердить</span>                    
                    </button>

                    <button class="button book-button bb" type="button" onclick = "window.location.href='booking/del.php?id=<?php echo $row['id_booking']; ?>';">
                        <span>Удалить</span>                    
                    </button> 
                </div>               
            </div>
            <?php }} ?>
        </div>
        <!-- /.wrap-booking -->  
    </main>