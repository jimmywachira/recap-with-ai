<?php

require base_path('views/partials/head.php');
require base_path('views/partials/banner.php');
?>

<div class="container mx-auto p-4">
    <h1 class="text-4xl font-bold p-2 m-4">Unauthorized</h1>
    <p class="text-4xl font-bold p-2 m-4">You are not authorized to access this page.</p>
    <a href='/index' class="px-4 py-3 border-2 border-blue-500 rounded-full text-2xl text-blue-500 hover:text-blue-700">Go back to Home</a>
</div>

<?php require base_path('views/partials/footer.php');
?>

</html>