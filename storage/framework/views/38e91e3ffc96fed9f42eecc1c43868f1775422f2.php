<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
      Detail Pengaduan
    </h2>


    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <?php $__currentLoopData = $item->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div
          class="text-gray-800 text-sm font-semibold px-4 py-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 dark:text-gray-400 ">

          <h2>Nama : <?php echo e($ite->name); ?></h2>
          <h2 class="mt-4">NIK : <?php echo e($ite->user_nik); ?></h2>
          <h2 class="mt-4">No Telepon : <?php echo e($item->user->phone); ?></h2>
          <h2 class="mt-4">Tanggal : <?php echo e($ite->created_at->format('l, d F Y - H:i:s')); ?></h2>
          <h2 class="mt-4">Status :
            <?php if($item->status =='Belum di Proses'): ?>
            <span
                  class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                  <?php echo e($item->status); ?>

            </span>
            <?php elseif($item->status =='Sedang di Proses'): ?>
            <span
                  class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                  <?php echo e($item->status); ?>

            </span>
            <?php else: ?>
            <span
                  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                  <?php echo e($item->status); ?>

                </span>
            <?php endif; ?>
          </h2>
        </div>

        <div class="px-4 py-3 mb-8 flex text-gray-800 bg-white rounded-lg shadow-md dark:bg-gray-800">
          <div class="relative hidden mr-3  md:block ">
            <h1 class="text-center mb-8 font-semibold">Foto</h1>
            <img class=" h-32 w-35 " src="<?php echo e(Storage::url($item->image)); ?>" alt="" loading="lazy" />
          </div>
          <div class="text-center flex-1 dark:text-gray-400">
            <h1 class="mb-8 font-semibold">Keterangan</h1>
            <p class="text-gray-800 dark:text-gray-400">
              <?php echo e($item->description); ?>

            </p>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="px-4 py-3 mb-2 flex bg-white rounded-lg shadow-md dark:text-gray-400   dark:bg-gray-800">

          <div class="text-center flex-1">
            <h1 class="mb-8 font-semibold">Tanggapan</h1>
            <p class="text-gray-800 dark:text-gray-400">

              <?php if(empty($tangap->tanggapan)): ?>
              Belum ada tanggapan
              <?php else: ?>
              <?php echo e($tangap->tanggapan); ?>

              <?php endif; ?>
            </p>
          </div>
        </div>
      </div>
    </div>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.masyarakat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pengaduan-masyarakat\resources\views/pages/masyarakat/show.blade.php ENDPATH**/ ?>