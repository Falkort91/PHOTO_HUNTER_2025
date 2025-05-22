<div class="p-4 md:w-2/3">
    <section>
        <article class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img class="w-full h-40 object-cover"
                  src="https://source.unsplash.com/random?1/?photo"
                  alt="Nom du photo"/>
            <div class="p-4">
                <header class="mb-8">
                    <h2 class="text-lg font-bold"><?php echo $photo['title']?></h2>
                    <div>
                      Photographe:
                        <a href="#" class="text-indigo-500 hover:underline">
                            <?php echo $photo['author_lastname']?>
                            <?php echo $photo['author_firstname']?>
                        </a>
                    </div>
                    <div>ISBN: <?php echo $photo['id']?></div>
                </header>
                <p class="text-base text-gray-600">
                    <?php echo $photo['resume']?>
                </p>
                <footer class="mt-8 pt-4 border-t border-gray-300">
                    <div>
                      <a href="#" class="text-indigo-500 hover:underline">#tag1</a>
                      <a href="#" class="text-indigo-500 hover:underline">#tag2</a>
                    </div>
                </footer>
            </div>
        </article>
    </section>
</div>