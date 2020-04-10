<?php $pageTitle='Book'; include '_header.php'; ?>

<div class="mainWrapper">
  <main>
    <h2>Book a Cruise</h2>
    <form>
      <label for="name">Full Name</label>
      <input type="text" name="name" required>
      <label for="address">Address</label>
      <input type="text" name="address">
      <label for="city">City</label>
      <input type="text" name="city">
      <label for="zip">Zipcode</label>
      <input type="text" name="zip">
      <label for="phone">Phone Number</label>
      <input type="text" name="ohone">
      <label for="email">Email Address</label>
      <input type="email" name="email" required>
      <button type="submit" name="submit">Book My Cruise</button>
    </form>

  </main>
</div>

<?php include '_footer.php'; ?>
