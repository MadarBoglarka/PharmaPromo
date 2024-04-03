<?php get_header(); ?>

<?php
function enqueue_custom_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/styles.scss' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );

$current_user = wp_get_current_user();
if ( ! $current_user->ID ) { 
    if( isset( $_POST['log'] ) && isset( $_POST['pwd'] ) ) {
        $user = wp_signon( array(
            'user_login'    => $_POST['log'],
            'user_password' => $_POST['pwd'],
        ) );

        if ( is_wp_error( $user ) ) {
          echo '<script>alert("Hibás felhasználónév vagy jelszó. Kérjük, próbáld újra.");</script>';
      } else {
          
            wp_redirect( home_url() );
            exit;
        }
    }
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <div class="row index-wrap">
    <div class="col-sm-8 img-wrap">
      <img src="http://wordress.local/wp-content/uploads/2024/03/kezdo-oldal.png" alt="Kép leírása" class="kedo-img">
    </div>
    <div class="col-sm-4 bejelentkezes-wrap" >
      <div class="bejelentkezes">
        <div class="bejelentkezes-form">
          <h2 class="bejelentkezes-title">Bejelentkezés</h2>
          <form class="bejelentkezes-form" method="post">
            <label class="bejelentkezes-label" for="username"  >E-MAIL CÍM</label><br>
            <input type="text" id="username" name="log" required placeholder="Adja meg az e-mail címét!"><br>
            <label class="bejelentkezes-label" for="password"  >JELSZÓ</label><br>
            <input type="password" id="password" name="pwd" required placeholder="Adja meg a jelszavát!"><br>
            <p class="bejelentkezes-forgetten">Elfelejtette jelszavát?<a>Kattintson ide!</a></p>
            <input type="submit" value="Bejelentkezés">
            <button class="regisztracio-button">Regisztráció</button>
        </form>
        </div>
      </div>
    </div>
   </div>
<?php
} else { 
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="row">
    <div class="col-sm-5 bejelentkezett-img-wrap">
      <img class="bejelentkezett-img" src="http://wordress.local/wp-content/uploads/2024/03/bejelentkezett-kezdo-img.png">
    </div>
    <div class="col-sm-7 bejelentkezett-wrap">
      <h3 class="bejelentkezett-title">Kapcsolat</h3>
      <div class="row form-wrap">
        <div class="col-sm-6">
          <form method="post">
            <label class="bejelentkezett-label" for="vname">Vezetéknév</label><br>
            <input class="input-textarea" type="vnev" id="vname" name="vname" placeholder="Adja meg a vezeték nevét!" required><br>
            <label class="bejelentkezett-label" for="email">E-mail cím</label><br>
            <input class="input-textarea" type="email" id="email" name="email" placeholder="Adja meg az e-mail címét!" required><br>
        </div>
        <div class="col-sm-6">
          <label class="bejelentkezett-label" for="kname">Keresztnév</label><br>
          <input class="input-textarea" type="knev" id="kname" name="kname" placeholder="Adja meg a kereszt nevét!" required><br>
          <label class="bejelentkezett-label" for="tel">Telefonszám</label><br>
          <input class="input-textarea" type="tel" id="tel" name="tel" placeholder="Adja meg a telefon számát!" required><br>
        </div>
      </div>  
      <div class="form-wrap"> 
        <label class="bejelentkezett-label" for="message">Üzenet:</label><br>
        <textarea class="message-textarea "type="message" id="message" name="message" rows="9" placeholder="Írja le és küldje el az üzenetét!" required></textarea><br>
      </div>
      <div class="button-text-wrap">
    <label class="switch">
        <input type="checkbox" name="accept" value="1"> 
        <span class="slider round"></span>
    </label>
    <p>Elolvastam és elfogadtam az <a> Adatvéfelmi nyilatkozatot</a></p>
    <input id="submit-btn" type="submit" value="Küldés">
</div>
      </form>
    <div>

  </div>
    
    </div>
    
   
  </div>

  <script>
  document.getElementById('submit-btn').addEventListener('click', function(event) {
    if (!document.querySelector('input[name="accept"]').checked) {
        event.preventDefault(); 
        alert('Kérjük, fogadja el az adatvédelmi nyilatkozatot a küldés előtt.');
    }
  });
</script>