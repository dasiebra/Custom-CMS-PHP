<section class="flex justify-center flex-wrap">
    <?php $csrfToken = $csrf::token(); ?>
    <?php foreach ($posts as $post): ?>
    <div class="w-[270px] wh-[480px] mt-2.5 rounded-2xl bg-gray-50 flex flex-col justify-between m-5"">
            <?php foreach ($post->getImages() as $image): ?>
                <img class="h-[170px] w-full object-cover mb-4 bg-slate-5 rounded-t-2xl" src="<?php echo $image; ?>" />
            <?php endforeach; ?>
            <h2 class="font-serif text-2xl font-medium p-2.5" ><?php echo $post->getTitle(); ?></h3>
            <p class="font-serif p-2.5">
            <?php echo $post->getTeaser(); ?>
            </p>
            <div>
                <p class="font-serif px-2.5">von <?php echo $post->getUser()->getFullName(); ?></p></span>
                <p class="font-serif text-xs px-2.5 mb-5"><?php echo $post->getCreatedAt(); ?></p>
            </div>
            <a class="mx-12 mb-5 flex justify-center py-3 px-4  border border-transparent rounded-md shadow-sm
            text-sm font-medium text-white bg-teal-500 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" href="/post/<?php echo $post->getId(); ?>/<?php echo $post->getSlug(); ?>">Vorschau</a>
    </div>
    <?php endforeach; ?>
</section>


