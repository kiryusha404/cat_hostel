<?php
if(!$_SESSION['id']){
    echo "<script>window.location.href='index.php'</script>";}
  $room_id = $_GET['id'];
  $date = date('d.m.Y');
?>
<main>
<div class="booking modal modal--book parent">
    <h3>Отзыв <?php echo $room_id ?></h3>
<form action="#" method="post" class="input">
<textarea name="comment" cols="50" rows="30"></textarea>
<button id="book-submit" type="submit">
              <span>Оставить отзыв</span>
              <span>
                <svg width="21" height="18"><use xlink:href="#icon-paw"></use>
                </svg>
              </span>
            </button>
</form>
</div><?php
if(!empty($_POST['comment'])){
            $push = 'INSERT INTO `feedback` (`id_feedback`, `id_booking`, `text_feedback`, `date`) VALUES (NULL, '.$room_id.', "'.$_POST['comment'].'", "'.$date.'");';
            $input = mysqli_query($cat_db, $push);
           echo "<script>window.location.href='purchase.php'</script>";
}
        ?>
</main>