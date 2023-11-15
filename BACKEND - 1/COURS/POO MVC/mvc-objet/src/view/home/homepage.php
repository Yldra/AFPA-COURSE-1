<?php
require __DIR__ . '/../header.php';
?>

        <h1>Movies, Series, Details and More !</h1>
    </header>

    <!-- Main Content Section -->
    <main>
        <h2>Discover the World of Movies</h2>
        <p>Explore our collection of movies, actors, directors, and more.</p>

        <!-- Featured Movies Section (You can replace this with your own content) -->
        <section class="featured-movies">
            <h3>Featured Movies</h3>
            <div class="movie-card">
                <img src="<?=BASE?>/public/pictures/movie1.jpg" alt="Movie 1">
                <h4>Movie Title 1</h4>
                <p>Description of the first featured movie.</p>
            </div>
            <div class="movie-card">
                <img src="<?=BASE?>/public/pictures/movie2.jpg" alt="Movie 2">
                <h4>Movie Title 2</h4>
                <p>Description of the second featured movie.</p>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="cta">
            <p>Ready to start exploring?</p>
            <a href="<?=BASE?>/movies" class="btn">Browse Movies</a>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Cinema App</p>
    </footer>
</body>
</html>
