<?php
require base_path('views/partials/head.php');
require base_path('views/partials/banner.php');
?>

<div class="container mx-auto capitalize p-4 border-2 w-1/2 border-gray-300 rounded-lg mt-4 shadow-md">
    <form method="POST" action="/note">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $note['id']; ?>">

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 text-center text-gray-900">edit note</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="title" class="block  text-gray-900">title</label>
                        <div class="mt-2">
                            <input type="text" id="title" value="<?= $note['title'] ?? '' ?>" name="title" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" placeholder="Enter note title">
                            <?php if (isset($errors['title'])) : ?>
                                <p class="text-red-500 mt-2"><?php echo $errors['title']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="body" class="block  text-gray-900">body</label>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="3" class="block w-full resize-none overflow-hidden rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6" placeholder="Enter note body">
                                <?= $note['body'] ?? '' ?> </textarea>
                            <?php if (isset($errors['body'])) : ?>
                                <p class="text-red-500 mt-2"><?php echo $errors['body']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-2">
            <a href="/notes" class="rounded-md border-2 px-4 py-2 border-gray-300 font-semibold leading-6 text-gray-900 hover:border-gray-300 hover:text-gray-700 bg-gray-100">Cancel</a>
            <button type="submit" class="rounded-md bg-blue-600 px-4 py-2 text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">update </button>
        </div>
    </form>
</div>

<script>
    const bodyTextarea = document.getElementById('body');

    const resizeTextarea = () => {
        bodyTextarea.style.height = 'auto';
        bodyTextarea.style.height = `${bodyTextarea.scrollHeight}px`;
    };

    bodyTextarea.addEventListener('input', resizeTextarea);
    resizeTextarea();
</script>

<?php require base_path('views/partials/footer.php'); ?>

</html>