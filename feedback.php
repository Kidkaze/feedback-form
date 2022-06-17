<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback';
$res = mysqli_query($connect, $sql);
$feedback = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>

<h2>Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt3">No feedback left</p>
<?php endif; ?>

<?php foreach ($feedback as $card) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $card['body']; ?>
      <div class="text-secondary mt-2">
        By <?php echo $card['name']; ?> on <?php echo $card['date']; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include 'inc/footer.php'; ?>