<main>
    <section class="hero">
        <div class="content-inner">
            <h1 class="mb-4">Hallo, ich bin Max Mustermann!</h1>
            <div class="details container-fluid">
                <div class="row">
                    <div class="col-6 text p-0">
                        <p>
                            Mein Name ist Max Mustermann und ich bin seit 15 Jahren leidenschaftlicher Webentwickler...
                        </p>
                    </div>
                    <div class="col-6 img-wrapper">
                        <img src="assets/images/profile_image.jpg" alt="Max Mustermann">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="references">
        <div class="content-inner">
            <h2 class="mb-4">Projekte</h2>
            <div class="projects-overview-wrapper container-fluid">
                <div class="row">
                    <?php foreach ($projects as $id => $project): ?>
                        <div class="col-4 p-2">
                            <a class="project-teaser" href="index.php?project_id=<?= $id; ?>">
                                <div class="img-wrapper">
                                    <img src="<?= $project['image']; ?>" alt="<?= $project['alt']; ?>">
                                </div>
                                <div class="content">
                                    <h3><?= $project['title']; ?></h3>
                                    <div class="description">
                                        <p><?= $project['description']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>