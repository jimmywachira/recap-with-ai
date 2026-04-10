<?php
require base_path('views/partials/head.php');
require base_path('views/partials/banner.php');
?>

<div class="container mx-auto p-4 border border-gray-300 rounded-lg mt-4 shadow-md">
    <?php foreach ($notes as $note) : ?>
        <div class="container mx-auto p-4 border border-gray-300 rounded-lg mt-4 shadow-md">
            <img class="h-48 w-full rounded-md object-cover" src="https://picsum.photos/seed/<?php echo $note['id']; ?>/1200/500" alt="Placeholder image" loading="lazy">
            <a href="note?id=<?php echo $note['id']; ?>" class="text-blue-500 hover:text-blue-700 text-lg font-bold">
                <?php echo $note['title']; ?>
            </a>

            <p class="text-lg mt-2 mb-4  "><?php echo htmlspecialchars($note['body']); ?></p>
        </div>
    <?php endforeach; ?>
    <div class="mt-4 justify-end flex">
        <a href="/notes/create" class="rounded-md bg-blue-600 px-4 py-2 text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"> Create Note</a>
    </div>
</div>
<?php require base_path('views/partials/footer.php');
?>

</html>