<?php
    require_once __DIR__.'/vendor/autoload.php';

    use Assetic\Asset\AssetCollection;
    use Assetic\Asset\FileAsset;
    use Assetic\Asset\GlobAsset;
    use Assetic\Filter\PackerFilter;
    
    $js = new AssetCollection(array(
        new GlobAsset(__DIR__.'/assets/js/*'),
    ), array(
        new PackerFilter (),
    ));
    header('Content-Type: application/js');
    // the code is merged when the asset is dumped
    echo $js->dump();
?>