<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Jacen Luke A. Cielos Biography']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Jacen Luke A. Cielos Biography']); ?>
    <div class="profile-card">
        <div class="banner">
            <div class="avatar" style="background-image: url('<?php echo e(asset('pictures/jacen.jpg')); ?>');"></div>
        </div>
        <div class="content">
            <h2>Jacen Luke A. Cielos</h2>
            <h4>BSIT STUDENT</h4>
            <h5>Born October 14, 2005</h5>
            <hr>
            <h4>ABOUT ME</h4>
            <p>Hello! I’m Jacen still learning laravel:D, My idol is Justin Nabunturan.</p>
            <hr>
            <h4>HOBBIES</h4>
            <ul>
                <li>Cycling</li>
                <li>Gaming</li>
                <li>Reading 18+ manwha</li>
            </ul>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Kurt\Laravel\Laravel\resources\views/biography/jacen.blade.php ENDPATH**/ ?>