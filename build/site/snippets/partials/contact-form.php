<form class="form">
  <input placeholder="Ihr Vor- und Nachname" type="text">
  <input class="input-half" placeholder="Ihre Mail-Adresse" type="text">
  <input class="input-half" placeholder="Ihre Telefonnummer" type="text">
  <textarea placeholder="Beschreibung Ihres Anliegens"></textarea>
  <div class="center">
    <button class="button" type="submit">
      <?= (new Asset('assets/images/icons/send.svg'))->content() ?>
      Absenden
    </button>
  </div>
</form>
