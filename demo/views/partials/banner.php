<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">
            <?php $heading = $heading ?? '' ?>
            <center>
                <?= urlIs('/') ||
                    urlIs('/about') ||
                    urlIs('/notes') ||
                    urlIs('/contact') ||
                    urlIs('/403') ||
                    (isset($_GET['id']) && urlIs('/note?id=' . $_GET['id'])) ?
                    $heading : '404'
                ?>
            </center>
        </h1>
    </div>
</header>
