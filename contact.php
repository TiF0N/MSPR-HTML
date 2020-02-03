<?php include_once 'includes/header.php'; ?>

<section id="jumbotron">
    <div class="jumbotron">
        <h1>Nous contacter !</h1>
    </div>
</section>
<section id="container">
    <div class="form">
        <h2>Besoins d'informations ? Demandez nous !</h2>
                <form action="" methode="POST">

                    <div class="form-group">
                        <label for="last_name">Nom</label>
                        <input type="texte" id="last_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="first_name">Prénom</label>
                        <input type="texte" id="first_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control"></textarea>
                    </div>
                    <button class="btn">
                        Envoyer
                    </button>
                </form>
</section>
<section id="container">
    <div class="pre-footer">
        <h2>Vous souhaitez plus d'informations ?</h2>
        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer feugiat faucibus est, eu
            ullamcorper magna faucibus nec. Sed ac lorem ut augue consequat molestie non vel massa. Quisque ornare
            fermentum enim. Aliquam sit ametddd erossdfg tempor, volutpat quam ut, condimentum diam. Ut congue eros quis mi
            mattis aliquam. Morbi vestibulum tortor accumsan, aliquet nunc a, porttitor nisl. Maecenas viverra purus
            sagittis mauris faucibus, at pellentesque neque sollicitudin.</p>
        <button class="btn btn-primary">
            Nous contacter
        </button>
    </div>
</section>
<?php include_once 'includes/footer.php'; ?>
