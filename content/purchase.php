<?php
session_start();
if(!$_SESSION['id']){
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
          $push = 'SELECT booking_room.id_booking as id_booking, booking_room.name_user as name, booking_room.name_pet as pet, booking_room.nphone as nphone, booking_room.email as email, booking_room.date1 as date1, booking_room.date2 as date2, booking_room.status as status, feedback.id_feedback as feedback FROM `booking_room` left join feedback on booking_room.id_booking = feedback.id_booking WHERE booking_room.id_user = '.$_SESSION['id'].'';
          $input = mysqli_query($cat_db, $push);
          if (isset($input)){
            $row = mysqli_fetch_array($input);
            if(!$row){
                echo "<p>У вас не заказов на данный момент нет</p>";
            }
            $push = 'SELECT cat_room.class_room as class, booking_room.id_booking as id_booking, booking_room.name_user as name, booking_room.name_pet as pet, booking_room.nphone as nphone, booking_room.email as email, booking_room.date1 as date1, booking_room.date2 as date2, booking_room.status as status, feedback.id_feedback as feedback FROM cat_room join `booking_room` on cat_room.id_room = booking_room.id_room left join feedback on booking_room.id_booking = feedback.id_booking WHERE booking_room.id_user = '.$_SESSION['id'].' ORDER BY booking_room.id_booking desc';
            $input = mysqli_query($cat_db, $push);
            while($row = mysqli_fetch_array($input)){
            ?>
            <div class="booking">
                <h3>Бронирование <?php echo $row['id_booking']; ?></h3>
                <p>Класс номера: <?php echo $row['class']; ?></p>
                <p>Имя заказчика: <?php echo $row['name']; ?></p>
                <p>Имя питомца: <?php echo $row['pet']; ?></p>
                <p>Номер: <?php echo $row['nphone']; ?></p>
                <p>Емаил: <?php echo $row['email']; ?></p>
                <p>c <?php echo $row['date1']; ?> по <?php echo $row['date2']; ?></p>
                <p class="dd">Статус бронирования: 
                    <?php  switch ($row['status']){
                    case "refused":
                    echo "Отклонено";
                    break; 
                    case "confirmed":
                        echo "Одобрено";
                        break; 
                    
                    case "expectation":
                        echo "Ожидание";
                        break; 
                    }
        ?></p>
                <div class="btbt">
                    <?php if(!$row['feedback']){ ?>
                     <button class="button book-button bb сonfirm" type="button" onclick = "window.location.href='feedback.php?id=<?php echo $row['id_booking']; ?>';">
                        <span>Оставить отзыв</span>                    
                        </button>
                <?php    }else{ ?>
                        <button class="button book-button bb сonfirm" type="button" onclick = "window.location.href='content/delfeedback.php?id=<?php echo $row['id_booking']; ?>';">
                        <span>Удалить отзыв</span>                    
                    </button>
          <?php          }
                    ?>
                </div>               
            </div>
            <?php }} ?>
        </div>
        <!-- /.wrap-booking -->  
    </main>