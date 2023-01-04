<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire CRUD - ItSolutionStuff.com</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel Livewire CRUD - ItSolutionStuff.com</h2>
                    </div>
                    <div class="card-body">
                        <?php if(session()->has('message')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('message')); ?>

                            </div>
                        <?php endif; ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('posts')->html();
} elseif ($_instance->childHasBeenRendered('Ym6JOIU')) {
    $componentId = $_instance->getRenderedChildComponentId('Ym6JOIU');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ym6JOIU');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ym6JOIU');
} else {
    $response = \Livewire\Livewire::mount('posts');
    $html = $response->html();
    $_instance->logRenderedChild('Ym6JOIU', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH C:\laragon\www\livewire\resources\views/welcome.blade.php ENDPATH**/ ?>