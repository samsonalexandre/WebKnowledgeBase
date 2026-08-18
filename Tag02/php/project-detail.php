<?php
$projectId = $_GET['project_id'] ?? null;

if (!$projectId || !array_key_exists($projectId, $projects)): 
?>
    <main>
        <section class="hero">
            <div class="content-inner text-center py-5">
                <h1 class="text-danger">Projekt nicht gefunden</h1>
                <p>Das angeforderte Projekt existiert nicht oder wurde entfernt.</p>
                <a href="index.php" class="btn-alpha d-inline-block mt-3">Zurück zur Startseite</a>
            </div>
        </section>
    </main>
<?php 
else: 
    $project = $projects[$projectId];
?>
    <main>
        <section class="hero">
            <div class="content-inner">
                <h1 class="mb-4"><?= $project['subtitle']; ?></h1>
                <div class="details container-fluid">
                    <div class="row">
                        <div class="col-6 text p-0">
                            <p class="pb-4"><?= $project['description']; ?></p>
                            <div class="d-flex justify-content-end">
                                <a class="btn-alpha d-block me-5" href="#">Website ansehen</a>
                            </div>
                        </div>
                        <div class="col-6 img-wrapper">
                            <img src="<?= $project['image']; ?>" alt="<?= $project['alt']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php endif; ?>