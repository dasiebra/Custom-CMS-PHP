<section class="w-full h-full flex">


<div class="m-auto xs:w-full sm:w-full md:w-1/2 lg:w-1/3">
    
    <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
        <form class="mb-0 space-y-6 my-auto" method="POST" enctype="multipart/form-data">
        <?php if (isset($errors['root'])): ?>
            <div class="error"><?=$errors['root']?></div>
        <?php endif; ?>

        <input type="hidden" name="csrfToken" value="<?php echo $csrf::token() ?>">
    
        <h1 class="text-xl">Editiere deinen Post</h1>




        <div>
            <label for="headline" class="block text-sm font-medium text-gray-800">Überschrift</label>
            <?php if (isset($errors['title'])): ?>
            <div class="error"><?=$errors['title'][0]?></div>
            <?php endif; ?>
            <input type="text" id="title" name="title" value="<?php echo $post->getTitle(); ?>"  class="w-full border-gray-300 rounded-lg shadow-sm focus:border-teal-500 focus:ring-teal-500">
        </div>



        <div>
            <label for="teaser" class="block text-sm font-medium text-gray-800">Teaser</label>
            <?php if (isset($errors['teaser'])): ?>
            <div class="error"><?=$errors['teaser'][0]?></div>
            <?php endif; ?>
            <input type="text" id="teaser" name="teaser" value="<?php echo $post->getTeaser(); ?>" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-teal-500 focus:ring-teal-500">
        </div>


        <div>
            <label for="link" class="block text-sm font-medium text-gray-800">Link</label>
            <?php if (isset($errors['link'])): ?>
            <div class="error"><?=$errors['link'][0]?></div>
            <?php endif; ?>
            <input type="text" id="link" name="link" value="<?php echo $post->getLink(); ?>"  class="w-full border-gray-300 rounded-lg shadow-sm focus:border-teal-500 focus:ring-teal-500">
        </div>


        <div>
            <label for="body" class="block text-sm font-medium text-gray-800">Artikel</label>
            <?php if (isset($errors['body'])): ?>
            <div class="error"><?=$errors['body'][0]?></div>
            <?php endif; ?>
            <textarea rows="10" class="w-full  border-gray-300 rounded-lg shadow-sm focus:border-teal-500 focus:ring-teal-500" name="body" id="body"><?php echo $post->getBody(); ?></textarea>
        </div>



        <div class="">
            <button type="submit" value="Post editieren" class="w-full flex justify-center py-3 px-4  border border-transparent rounded-md shadow-sm
            text-sm font-medium text-gray-50 bg-teal-500 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">Artikel editieren</button>
        </div>

        </form>
    </div>
</div>


</section>

