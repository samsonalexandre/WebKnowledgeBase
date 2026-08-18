<header>
    <nav>
        <div class="logo-wrapper">
            <a href="index.php">
                <img src="assets/images/logo.png" alt="Logo">
                <h1>Nightfall Development</h1>
            </a>
        </div>
        
        <?php 
        $currentProject = $_GET['project_id'] ?? '';
        foreach ($projects as $id => $project): 
            $activeClass = ($currentProject === $id) ? 'active' : '';
        ?>
            <a href="index.php?project_id=<?= $id; ?>" class="nav-item <?= $activeClass; ?>">
                <?= $project['title']; ?>
            </a>
        <?php endforeach; ?>
    </nav>
</header>