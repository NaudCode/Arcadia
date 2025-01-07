<!-- Avis Carousel -->
<?php
        // Code PHP pour récupérer les avis depuis la base de données
        $host = 'localhost';
        $dbname = 'nom_de_ta_base';
        $username = 'ton_utilisateur';
        $password = 'ton_mot_de_passe';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }

        // Requête SQL pour récupérer les avis visibles
        $sql = "SELECT pseudo, commentaire FROM avis WHERE isVisible = 1";
        $stmt = $pdo->query($sql);
        $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

        function tronquerTexte($texte, $limite = 50) {
            return strlen($texte) > $limite ? substr($texte, 0, $limite) . '...' : $texte;
        }


    <section class="container">
      <div class="description-content text-center">
        <h3>Avis visiteurs</h3>
      </div>
      <div class="text-center">
        <p>#arcadia</p>
      </div>
      <div class="owl-carousel owl-theme">
        <?php foreach ($avis as $avisItem): ?>
          <div class="card card-custom">
            <div class="card-body d-flex flex-column justify-content-between">
              <p class="card-title"><?= tronquerTexte(htmlspecialchars($avisItem['commentaire'])) ?></p>
              <p class="card-text">- <?= htmlspecialchars($avisItem['pseudo']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <button class="btn text-center custom-btn-teal">
              <a href="lien avis" target="_blank">Accéder à tous nos avis</a>
            </button>
          </div>
        </div>
      </div>
    </section>
