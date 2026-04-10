<?php

require base_path('views/partials/head.php');
require base_path('views/partials/banner.php');
?>

<div class="container border-2 border-gray-300 rounded-lg mt-4 shadow-md mx-auto p-4">

    <div class="container mx-auto p-4 border border-gray-300 rounded-lg mt-4 shadow-md">
        <img class="h-48 w-full rounded-md object-cover" src="https://picsum.photos/seed/<?php echo urlencode((string) ($note['id'] ?? 'note')); ?>/1200/500" alt="Placeholder image" loading="lazy">

        <a href="/note?id=<?php echo urlencode((string) ($note['id'] ?? '')); ?>" class="text-blue-500 hover:text-blue-700 text-lg font-bold">
            <?php echo htmlspecialchars((string) ($note['title'] ?? 'Untitled note')); ?>
        </a>

        <p class="text-lg mt-2 mb-4"><?php echo htmlspecialchars((string) ($note['body'] ?? '')); ?></p>
        <a href="/notes/delete?id=<?php echo urlencode((string) ($note['id'] ?? '')); ?>" class="py-2 px-4 bg-red-500 rounded-lg text-white hover:text-black">delete</a>
    </div>

    <div class="mt-4 justify-end flex">
        <a href="/notes/create" class="rounded-md bg-blue-600 px-4 py-2 text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Create Note</a>
    </div>
</div>

<?php require base_path('views/partials/footer.php'); ?>

</html>