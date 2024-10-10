    </main>
    <footer>
      &copy; Countries 'R Us 2024
      <div id="debug">
<?php
  echo "<h3>Get data</h3>";
  pre($_GET);
  echo "<h3>Post data</h3>";
  pre($_POST);
  echo "<h3>Files data</h3>";
  pre($_FILES);
  echo "<h3>Session data</h3>";
  pre($_SESSION);
?>      
      </div>
    </footer>  
  </body>
</html>