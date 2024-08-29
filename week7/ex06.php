<?php 
  $exNum = 6;
  $title = "Wk07 Ex0" . $exNum;
  include("includes/header.inc"); 
?>
    <main>
      <h2>Lorem, ipsum dolor sit amet</h2>
      <dl>
        <dt>Australia
        <dl>
          <dt>Capital</dt>
          <dd>Canberra</dd>
          <dt>Population</dt>
          <dd>25 million</dd>
        </dl>
        </dt> 
        <dt>Egypt</dt>
        <dd>Cairo</dd>
        <dt>Philippines</dt>
        <dd>Manila</dd>
      </dl>
      <h2>Nested o/u lists</h2>
      <ul>
        <li>a</li>
        <li>this item contains a sublist
          <ul>
            <li>aa</li>
            <li>as</li>
            <li>ad</li>
            <li>ag</li>
            <li>ah</li>
          </ul>
        </li>
        <li>d</li>
        <li>f</li>
        <li>g</li>
      </ul>
    </main> 
<?php include("includes/footer.inc"); ?>