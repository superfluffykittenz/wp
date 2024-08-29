<?php
  $hw = "hello world";
  $password="p4ssw0rd1";
# single line
  $name = "Trevor";
  $age = 21;
  $price=99.99;
  $is=true;

?>
<script>
  const password="p4ssw0rd1";
  const name = "Trevor";
</script>
<?php
  echo "<p>hello Trevor!</p>\n";
  echo "<p>hello $name!</p>\n";
?>
<p>hello <?php echo $name; ?>!</p>
<p>hello <?= $name ?>!</p>
<p>hello <script>document.write(name);</script>!</p>
