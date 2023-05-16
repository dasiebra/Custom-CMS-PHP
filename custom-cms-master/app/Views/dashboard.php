<section class="w-full h-full flex">

<div class="mx-auto my-20 xs:w-full sm:w-full md:w- lg:w-3/5 xl:w-2/5">
    
    <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
    <h1 class="text-xl mb-2">Dashboard</h1>
    <p class="my-3">Hey <?=$user->getFirstName()?>. Schön, dass du da bist!</p>


        


                <div class="p-5 bg-gray-100 rounded-lg">
                <h2 class="my-3">Dein Profil</h2>

                    <div class="overflow-auto rounded-lg shadow sm:block">
                      <table class="w-full">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                          <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">E-mail</th>
                          <th class="p-3 text-sm font-semibold tracking-wide text-left">Vorname</th>
                          <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Nachname</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                        <tr class="bg-white">
                          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                          <?=$user->getEmail()?>
                          </td>
                          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                          <?=$user->getFirstName()?>
                          </td>
                          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                            <?=$user->getLastName()?>
                          </td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                </div>

    </div>
</div>
</section>




<section class="flex justify-center flex-wrap">
    <?php $csrfToken = $csrf::token(); ?>
    <?php foreach ($user->getPosts() as $post): ?>
    <div class="w-[270px] wh-[480px] mt-2.5 rounded-2xl bg-gray-50 flex flex-col justify-between m-5">
            <?php foreach ($post->getImages() as $image): ?>
                <img class="h-[170px] w-full h-full object-cover mb-4 bg-slate-5 rounded-t-2xl" src="<?php echo $image; ?>" />
            <?php endforeach; ?>
            <h2 class="font-serif text-2xl font-medium p-2.5" ><?php echo $post->getTitle(); ?></h3>
            <p class="font-serif p-2.5">
            <?php echo $post->getTeaser(); ?>
            </p>
            <p class="font-serif p-2.5"><?php echo $post->getCreatedAt(); ?></p>

            <div class="w-full flex justify-end flex-col mt-5 mb-0">

              <a class="mx-12 mb-5 flex justify-center py-3 px-4  border border-transparent rounded-md shadow-sm
            text-sm font-medium text-white bg-teal-500 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" href="/post/<?php echo $post->getId(); ?>">Vorschau</a>
              <a class="mx-12 mb-5 flex justify-center py-3 px-4  border border-transparent rounded-md shadow-sm
            text-sm font-medium text-white bg-teal-500 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" href="/post/delete/<?php echo $post->getId(); ?>?csrfToken=<?php echo $csrfToken; ?>">Delete</a>
              <a class="mx-12 mb-5 flex justify-center py-3 px-4  border border-transparent rounded-md shadow-sm
            text-sm font-medium text-white bg-teal-500 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" href="/post/edit/<?php echo $post->getId(); ?>">Edit</a>
            </div>

    </div>
    <?php endforeach; ?>
</section>



