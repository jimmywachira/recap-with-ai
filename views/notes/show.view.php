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
        <div>
            <p class="text-sm text-gray-500">Created at: <?php echo htmlspecialchars((string) ($note['created_at'] ?? '')); ?></p>
            <p class="text-sm text-gray-500">Updated at: <?php echo htmlspecialchars((string) ($note['updated_at'] ?? '')); ?></p>
        </div>
        <div class="flex gap-2 mt-4">

            <a href="/note/edit?id=<?php echo urlencode((string) ($note['id'] ?? '')); ?>" class="py-2 px-4 bg-green-500 rounded-lg text-white hover:text-black">edit</a>

            <form method="POST"
                onsubmit="return confirm('Are you sure you want to delete this note?');">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= ($note['id']); ?>">
                <button type="submit" class="py-2 px-4 bg-red-500 rounded-lg text-white hover:text-black">delete</button>
            </form>
        </div>

    </div>
</div>

<?php require base_path('views/partials/footer.php'); ?>

</html>