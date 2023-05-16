<section style="background-image: url('bg.jpeg');" class="w-full h-full flex">


<div class="m-auto xs:w-full sm:w-full md:w-1/2 lg:w-1/3">
    
    <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10 text-gray-800">

        <form class="mb-0 space-y-6 my-auto" method="POST" novalidate>
            <h1 class="text-xl">Log In</h1>
            <?php if (isset($errors['root'])): ?>
                <div class="error"><?=$errors['root']?></div>
            <?php endif; ?>

            <input type="hidden" name="csrfToken" value="<?php echo $csrf::token() ?>">



            <div>
                <label for="email" class="block text-sm font-medium">E-Mail Adresse:</label>
                <?php if (isset($errors['root'])): ?>
                    <div class="error"><?=$errors['root']?></div>
                <?php endif; ?>
                <input type="text" id="email" name="email"  autocomplete="email" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-teal-500 focus:ring-teal-500">
            </div>


            <div>
                <label for="password" class="block text-sm font-medium" >Passwort:</label>
                <?php if (isset($errors['password'])): ?>
                    <div class="error"><?=$errors['password'][0]?></div>
                 <?php endif; ?>
                <input id="password" type="password" name="password" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-teal-500 focus:ring-teal-500">
            </div>


            <div class="">
                <button type="submit" value="Sings In" class="w-full flex justify-center py-3 px-4  border border-transparent rounded-md shadow-sm
                text-sm font-medium text-white bg-teal-500 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">Log In</button>
            </div>



        </form>
    </div>
</div>


</section>





